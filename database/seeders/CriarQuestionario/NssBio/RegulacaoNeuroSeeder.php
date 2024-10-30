<?php

namespace Database\Seeders\CriarQuestionario\NssBio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RegulacaoNeuroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('regulacao_neuros')->insert([
                'orientado' => $faker->boolean,
                'comportamento_regulacao_neuro_id' => $faker->numberBetween(1, 3), // Assumindo IDs de 1 a 3
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
