<?php

namespace Database\Seeders\CriarQuestionario\NssBio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RegulacaoVascularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('regulacao_vasculars')->insert([
                'pressao_arterial' => $faker->numberBetween(80, 180),          // Valores de pressão arterial sistólica em mmHg
                'frequencia_cardiaca' => $faker->numberBetween(60, 130),       // Frequência cardíaca em bpm
                'psatp_direito' => $faker->randomFloat(1, 0.5, 1.5),           // Valor entre 0.5 e 1.5
                'psap_direito' => $faker->randomFloat(1, 0.5, 1.5),
                'psab_direito' => $faker->randomFloat(1, 0.5, 1.5),
                'psatp_esquerdo' => $faker->randomFloat(1, 0.5, 1.5),
                'psap_esquerdo' => $faker->randomFloat(1, 0.5, 1.5),
                'psab_esquerdo' => $faker->randomFloat(1, 0.5, 1.5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
