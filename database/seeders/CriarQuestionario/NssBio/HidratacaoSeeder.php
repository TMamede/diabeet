<?php

namespace Database\Seeders\CriarQuestionario\NssBio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HidratacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $hidratacaoId = DB::table('hidratacaos')->insertGetId([
                'liquido_diario' => $faker->numberBetween(1, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('hidratacao_tipo_pele')->insert([
                'hidratacao_id' => $hidratacaoId,
                'tipo_pele_id' => $faker->numberBetween(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
