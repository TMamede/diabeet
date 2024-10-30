<?php

namespace Database\Seeders\CriarQuestionario\NssBio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RegulacaoHormonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('regulacao_hormonals')->insert([
                'altura' => $faker->numberBetween(160, 210),  // altura entre 140 e 200 cm
                'peso' => $faker->randomFloat(2, 50, 120),  // peso entre 40.00 e 120.00 kg com 2 casas decimais
                'circunferencia_abdnominal' => $faker->numberBetween(60, 120), // circunferência abdominal entre 60 e 120 cm
                'glicemia_capilar' => $faker->numberBetween(70, 180),  // glicemia entre 70 e 180 mg/dL
                'jejum' => $faker->boolean,
                'pos_prandial' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
