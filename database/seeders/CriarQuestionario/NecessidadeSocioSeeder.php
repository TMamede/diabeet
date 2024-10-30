<?php

namespace Database\Seeders\CriarQuestionario;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NecessidadeSocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('nss_sociais')->insert([
                'aprendizagem' => $faker->numberBetween(1, 10),
                'cuidado' => $faker->numberBetween(1, 10),
                'comunicacao' => $faker->numberBetween(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
