<?php

namespace Database\Seeders\CriarQuestionario\NssBio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OxigenacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('oxigenacaos')->insert([
                'temp_enchimento_capilar' => $faker->randomFloat(2, 0.5, 5.0),  // Valor entre 0.5 e 3.0 segundos
                'frequencia_respiratoria' => $faker->randomFloat(2, 12.0, 35.0), // Valor entre 12 e 25 respirações/minuto
                'satO2' => $faker->randomFloat(2, 80.0, 100.0), // Saturação de O2 entre 90% e 100%
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
