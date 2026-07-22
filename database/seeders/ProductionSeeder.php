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

        $this->call(OrigemSeeder::class);
        $this->call(MotivoSeeder::class);
        $this->call(DiagnosticoSeeder::class);
        $this->call(IntervencaoSeeder::class);
        $this->call(MotivoDiagnosticoSeeder::class);
        $this->call(DiagnosticoIntervencaoSeeder::class);
    }
}

