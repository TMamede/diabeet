<?php

namespace Database\Seeders\CriarQuestionario\NssBio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('sonos')->insert([
                'horas_sono' => $faker->numberBetween(1, 12), // Assumindo que as horas de sono variam de 1 a 12
                'acorda_noite' => $faker->boolean(),
                'qualidade_sono_id' => $faker->numberBetween(1, 4), // Assumindo que existam registros na tabela `qualidade_sono`
                'medicamentos_sono' => $faker->sentence(), 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
