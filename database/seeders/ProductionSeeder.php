<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductionSeeder extends Seeder
{
    /**
     * Popula somente dados de referência em uma instalação inicial.
     * Administradores devem ser criados manualmente, com senha exclusiva e forte.
     */
    public function run(): void
{
    $adminEmail = env('ADMIN_EMAIL');
    $adminPassword = env('ADMIN_PASSWORD');

    if (!$adminEmail || !$adminPassword) {
        throw new \RuntimeException(
            'ADMIN_EMAIL e ADMIN_PASSWORD devem ser definidos antes de rodar o ProductionSeeder.'
        );
    }

    User::firstOrCreate(
        ['email' => $adminEmail],
        [
            'name' => 'gestor',
            'coren' => '12345677',
            'user_type' => 'gerenciador',
            'password' => $adminPassword,
        ]
    );

    $this->call(DatabaseSeeder::class);
}
}
