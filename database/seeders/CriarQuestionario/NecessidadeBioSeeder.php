<?php

namespace Database\Seeders\CriarQuestionario;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NecessidadeBioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('nss_biologicas')->insert([
                'regulacao_neuro' => $faker->numberBetween(1, 10),
                'percepcao_sento' => $faker->numberBetween(1, 10),
                'hidratacao' => $faker->numberBetween(1, 10),
                'nutricao' => $faker->numberBetween(1, 10),
                'sono' => $faker->numberBetween(1, 10),
                'exercicio_fisico' => $faker->numberBetween(1, 10),
                'abrigo' => $faker->numberBetween(1, 10),
                'regulacao_hormonal' => $faker->numberBetween(1, 10),
                'oxigenacao' => $faker->numberBetween(1, 10),
                'regulacao_termica' => $faker->numberBetween(1, 10),
                'eliminacao' => $faker->numberBetween(1, 10),
                'sexualidade' => $faker->numberBetween(1, 10),
                'locomocao' => $faker->numberBetween(1, 10),
                'regulacao_vascular' => $faker->numberBetween(1, 10),
                'senso_percepcao' => $faker->numberBetween(1, 10),
                'integridade_cutanea' => $faker->numberBetween(1, 10),
                'cuidado_ferida' => $faker->numberBetween(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
