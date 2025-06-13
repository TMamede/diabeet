<?php

namespace Database\Seeders\CriarQuestionario;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CriarQuestionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('questionarios')->insert([
                'paciente_id' => $faker->numberBetween(1, 20),
                'user_id' => 1,
                'nss_biologicas_id' => $faker->numberBetween(1, 10),
                'nss_sociais_id' => $faker->numberBetween(1, 10),
                'nss_espirituais_id' => $faker->numberBetween(1, 6),
                'impressoes' => $faker->text,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
