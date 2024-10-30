<?php

namespace Database\Seeders\CriarQuestionario\NssBio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EliminacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('eliminacaos')->insert([
                'dor_urinar'=>$faker->boolean(),
                'incontinencia_urina'=>$faker->boolean(),
                'uso_laxante'=>$faker->boolean(),
                'uso_fraldas'=>$faker->boolean(),
                'dor_eliminacoes'=>$faker->boolean(),
                'incontinencia_eliminacao'=>$faker->boolean(),
                'constipacao'=>$faker->boolean(),
                'diarreia'=>$faker->boolean(),
                'equipamento_externo'=>$faker->word,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
