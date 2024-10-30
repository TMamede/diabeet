<?php

namespace Database\Seeders\CriarQuestionario\NssBio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PercepcaoSentidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('percepcao_sentidos')->insert([
                'olho_direito' => $faker->boolean,
                'olho_esquerdo' => $faker->boolean,
                'ouvido' => $faker->boolean,
                'analise_tato_id' => $faker->numberBetween(1, 6), 
                'risco_queda' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
