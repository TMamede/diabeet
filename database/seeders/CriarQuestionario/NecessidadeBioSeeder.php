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
                'regulacao_neuro_id' => $faker->numberBetween(1, 10),
                'percepcao_sentido_id' => $faker->numberBetween(1, 10),
                'hidratacao_id' => $faker->numberBetween(1, 10),
                'nutricao_id' => $faker->numberBetween(1, 10),
                'sono_id' => $faker->numberBetween(1, 10),
                'exercicio_fisico_id' => $faker->numberBetween(1, 10),
                'abrigo_id' => $faker->numberBetween(1, 10),
                'regulacao_hormonal_id' => $faker->numberBetween(1, 10),
                'oxigenacao_id' => $faker->numberBetween(1, 10),
                'regulacao_termica_id' => $faker->numberBetween(1, 10),
                'eliminacao_id' => $faker->numberBetween(1, 10),
                'sexualidade_id' => $faker->numberBetween(1, 10),
                'locomocao_id' => $faker->numberBetween(1, 10),
                'regulacao_vascular_id' => $faker->numberBetween(1, 10),
                'senso_percepcao_id' => $faker->numberBetween(1, 10),
                'cuidado_ferida_id' => $faker->numberBetween(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
