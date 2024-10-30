<?php

namespace Database\Seeders\CriarQuestionario\NssSocio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComunicacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('comunicacaos')->insert([
                'apoio' => $faker->boolean(),              // Valor booleano para indicar apoio
                'interacao_social' => $faker->boolean(),   // Valor booleano para indicar interação social
                'created_at' => now(),                      // Data de criação
                'updated_at' => now(),                      // Data de atualização
            ]);
        }
    }
}
