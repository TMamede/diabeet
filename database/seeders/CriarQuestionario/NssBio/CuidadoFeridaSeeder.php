<?php

namespace Database\Seeders\CriarQuestionario\NssBio;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CuidadoFeridaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('cuidado_feridas')->insert([
                'desbridamento_id' => $faker->numberBetween(1, 6),
                'avaliacao_ferida_id' => $faker->numberBetween(1, 5),
                'aplicacao_laserterapia' => $faker->boolean(),
                'terapia_fotodinamica' => $faker->boolean(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}