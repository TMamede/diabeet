<?php

namespace Database\Seeders\CriarQuestionario\NssBio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SensoPercepcaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('senso_percepcaos')->insert([
                'pe_neuropatico' => $faker->boolean(),
                'arco_desabado' => $faker->boolean(),
                'valgismo' => $faker->boolean(),
                'dedos_em_garra' => $faker->boolean(),
                'estado_unhas_id' => $faker->numberBetween(1, 5), // Assumindo que existam registros na tabela `estado_unhas`
                'corte_unhas' => $faker->boolean(),
                'fissuras' => $faker->boolean(),
                'calosidades' => $faker->boolean(),
                'micose' => $faker->boolean(),
                'teste_senso_percepcao_id' => $faker->numberBetween(1, 3), // Assumindo que existam registros na tabela `teste_senso_percepcao`
                'percepcao_direito' => $faker->boolean(),
                'percepcao_esquerdo' => $faker->boolean(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
