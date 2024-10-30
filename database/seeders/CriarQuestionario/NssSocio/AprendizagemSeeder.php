<?php

namespace Database\Seeders\CriarQuestionario\NssSocio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AprendizagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('aprendizagems')->insert([
                'monitoramento_glicemia_dia' => $faker->numberBetween(1, 10), // Supondo que o monitoramento varia de 1 a 10
                'cuidado_pes' => $faker->boolean(),
                'uso_sapato' => $faker->boolean(),
                'alimentacao' => $faker->boolean(),
                'regime_terapeutico' => $faker->boolean(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
