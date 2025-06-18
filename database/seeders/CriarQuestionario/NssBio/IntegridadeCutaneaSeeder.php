<?php

namespace Database\Seeders\CriarQuestionario\NssBio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class IntegridadeCutaneaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('integridade_cutaneas')->insert([
                'lado' => $faker->randomElement(['direito', 'esquerdo']),
                'nss_biologicas_id' => 1,
                'comprimento' => $faker->randomFloat(2, 1, 100),
                'largura' => $faker->randomFloat(2, 1, 100),
                'regiao_pe_id' => $faker->numberBetween(1, 5),
                'localizacao_lesao_id' => $faker->numberBetween(1, 3),
                'lesao_amputacao' => $faker->boolean,
                'bordas_ferida_id' => $faker->numberBetween(1, 9),
                'edema' => $faker->boolean,
                'quantidade_exudato_id' => $faker->numberBetween(1, 4),
                'odor_exudato' => $faker->boolean,
                'aspecto_exudato_id' => $faker->numberBetween(1, 6),
                'tipo_tecido_ferida_id' => $faker->numberBetween(1, 4),
                'profundidade_id' => $faker->numberBetween(1, 2),
                'pele_periferida_id' => $faker->numberBetween(1, 10),
                'dor' => $faker->numberBetween(0, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
