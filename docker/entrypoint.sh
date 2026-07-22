#!/bin/sh
set -e

echo "==> Starting entrypoint..."

# Copy .env if not exists (fallback, prefer environment variables from docker-compose)
if [ ! -f ".env" ]; then
    if [ -f ".env.example" ]; then
        cp .env.example .env
        echo "==> .env created from .env.example"
    fi
fi

# Generate APP_KEY if empty
if [ -z "$APP_KEY" ] && ! grep -q "^APP_KEY=base64:" .env 2>/dev/null; then
    php artisan key:generate
    echo "==> APP_KEY generated"
fi

# Wait for DB to be ready using pg_isready
echo "==> Waiting for database connection..."
DB_HOST="${DB_HOST:-db}"
DB_PORT="${DB_PORT:-5432}"
DB_USER="${DB_USERNAME:-postgres}"

MAX_RETRIES=30
RETRY_COUNT=0

until pg_isready -h "$DB_HOST" -p "$DB_PORT" -U "$DB_USER" -q; do
    RETRY_COUNT=$((RETRY_COUNT + 1))
    if [ $RETRY_COUNT -ge $MAX_RETRIES ]; then
        echo "==> ERROR: Database not ready after ${MAX_RETRIES} attempts. Exiting."
        exit 1
    fi
    echo "==> Waiting for database... attempt $RETRY_COUNT/$MAX_RETRIES"
    sleep 2
done
echo "==> Database is ready!"

# Run migrations
echo "==> Running migrations..."
php artisan migrate --force

# Seed database with production reference data if not already populated
SEED_COUNT=$(php artisan tinker --execute="echo \App\Models\Diagnostico::count();" 2>/dev/null || echo "0")
if [ "$SEED_COUNT" = "0" ] || [ -z "$SEED_COUNT" ]; then
    echo "==> Initial data not found. Running ProductionSeeder..."
    php artisan db:seed --class=ProductionSeeder --force
fi

# Cache configurations for production
if [ "$APP_ENV" = "production" ]; then
    echo "==> Caching Laravel configurations for production..."
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
    php artisan event:cache
fi

# Create storage link if not exists
php artisan storage:link 2>/dev/null || true

echo "==> Entrypoint complete. Starting application..."

# Execute the main container command (php-fpm)
exec "$@"

