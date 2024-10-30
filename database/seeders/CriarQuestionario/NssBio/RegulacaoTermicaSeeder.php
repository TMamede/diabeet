<?php

namespace Database\Seeders\CriarQuestionario\NssBio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RegulacaoTermicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('regulacao_termicas')->insert([
                'temperatura' => $faker->randomFloat(1, 35.0, 40.0), // Gera valores de temperatura entre 35.0 e 40.0
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
