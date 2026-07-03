# SIPEDIA

Sistema web desenvolvido em **Laravel 11**, utilizando **PHP 8.2**, **Livewire 3**, **PostgreSQL** e **Vite**.

O banco de dados é executado através de um container Docker, enquanto a aplicação Laravel é executada localmente.

---

# Tecnologias Utilizadas

- Laravel 11
- PHP 8.2
- Livewire 3
- PostgreSQL 16
- Tailwind CSS
- Vite
- DomPDF

---

# Requisitos

Antes de iniciar, certifique-se de possuir instalado:

- PHP 8.2 ou superior
- Composer 2.x
- Node.js 20+
- NPM
- Docker Desktop
- Docker Compose
- Git

---

# Clonando o projeto

```bash
git clone https://github.com/TMamede/diabeet.git

cd diabeet
```

---

# Instalação

## 1. Copiar o arquivo de ambiente

```bash
cp .env.example .env
```

O arquivo `.env.example` já está configurado para utilizar o banco PostgreSQL.

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=diabeet
DB_USERNAME=postgres
DB_PASSWORD=
```

Caso deseje alterar o usuário, senha ou nome do banco, basta editar essas variáveis.

---

## 2. Subir o banco de dados

O projeto possui um `docker-compose.yml` responsável apenas pelo PostgreSQL.

Execute:

```bash
docker compose up -d
```

Será criado automaticamente um container chamado:

```
diabeet_db
```

Para verificar se está em execução:

```bash
docker ps
```

---

## 3. Instalar as dependências

Instale as dependências do Laravel:

```bash
composer install
```

Instale as dependências do frontend:

```bash
npm install
```

---

## 4. Gerar a chave da aplicação

```bash
php artisan key:generate
```

---

## 5. Executar as migrations

```bash
php artisan migrate --seed
```

Este comando irá:

- Criar todas as tabelas;
- Inserir os registros iniciais necessários para funcionamento do sistema.

---

## 6. Criar o link do Storage

```bash
php artisan storage:link
```

Este comando cria o link simbólico entre:

```
storage/app/public
```

e

```
public/storage
```

Sem este comando, arquivos enviados pelos usuários não serão exibidos corretamente.

---

## 7. Compilar os arquivos do frontend

Para desenvolvimento:

```bash
npm run dev
```

Para produção:

```bash
npm run build
```

---

## 8. Otimizar a aplicação

```bash
php artisan optimize
```

---

# Executando o sistema

Inicie o servidor Laravel:

```bash
php artisan serve
```

A aplicação estará disponível em:

```
http://127.0.0.1:8000
```

---

# Docker

O projeto utiliza Docker **apenas para o banco PostgreSQL**.

Arquivo `docker-compose.yml`:

```yaml
services:
  postgres:
    image: postgres:16
    container_name: diabeet_db
    restart: unless-stopped
    environment:
      POSTGRES_DB: ${DB_DATABASE}
      POSTGRES_USER: ${DB_USERNAME}
      POSTGRES_PASSWORD: ${DB_PASSWORD}
    ports:
      - "5432:5432"
    volumes:
      - postgres_data:/var/lib/postgresql/data

volumes:
  postgres_data:
```

Comandos úteis:

Subir o banco:

```bash
docker compose up -d
```

Parar o banco:

```bash
docker compose down
```

Visualizar logs:

```bash
docker logs diabeet_db
```

---

# Atualizando o projeto

Sempre que houver uma atualização:

```bash
git pull

composer install

npm install

php artisan migrate

npm run build

php artisan optimize
```

---

# Limpeza de Cache

Caso seja necessário limpar todos os caches:

```bash
php artisan optimize:clear
```

---

# Estrutura Tecnológica

- Laravel 11
- PHP 8.2
- PostgreSQL 16
- Livewire 3
- Tailwind CSS
- Vite
- DomPDF

---

# Observações

- O Laravel é executado localmente.
- Apenas o banco PostgreSQL utiliza Docker.
- O frontend é compilado utilizando Vite.
- Os arquivos enviados pelos usuários são armazenados em `storage/app/public`.
- Os PDFs são gerados dinamicamente através do DomPDF e enviados diretamente para download.
- Após alterações no frontend, execute `npm run dev` (desenvolvimento) ou `npm run build` (produção).

---

# Checklist de Instalação

- [ ] Clonar o projeto
- [ ] Copiar `.env.example` para `.env`
- [ ] Executar `docker compose up -d`
- [ ] Executar `composer install`
- [ ] Executar `npm install`
- [ ] Executar `php artisan key:generate`
- [ ] Executar `php artisan migrate --seed`
- [ ] Executar `php artisan storage:link`
- [ ] Executar `npm run build` (ou `npm run dev`)
- [ ] Executar `php artisan optimize`
- [ ] Executar `php artisan serve`

Após esses passos, o **SIPEDIA** estará pronto para utilização.
