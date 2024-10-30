<?php

namespace Database\Seeders\CriarQuestionario\NssBio;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AbrigoSeeder extends Seeder
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
            DB::table('abrigos')->insert([
                'zona_moradia_id' => $faker->numberBetween(1, 4),
                'luz_publica' => $faker->boolean(),
                'coleta_lixo' => $faker->boolean(),
                'agua_tratada' => $faker->boolean(),
                'rede_esgoto_id' => $faker->numberBetween(1, 3),
                'animais_domesticos' => $faker->boolean(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}