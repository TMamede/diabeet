<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class ProductionSeeder extends Seeder
{
    /**
     * Seed the application's database with production reference data only.
     * No Faker dependency — safe for production builds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'gestor@master.com'],
            [
                'name'      => 'gestor',
                'coren'     => '12345677',
                'user_type' => 'gerenciador',
                'password'  => 'patinho',
            ]
        );

        $this->call(DatabaseSeeder::class);
    }
}
