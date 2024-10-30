<?php

namespace Database\Seeders\CriarQuestionario\NssSocio;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CuidadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('cuidados')->insert([
                'acompanhado' => $faker->boolean(),                    // Valor booleano para indicar se está acompanhado
                'opnioes_de_si' => $faker->boolean(),                  // Valor booleano para indicar opiniões de si
                'auxiliador' => $faker->name(),                         // Nome aleatório para o auxiliador
                'created_at' => now(),                                  // Data de criação
                'updated_at' => now(),                                  // Data de atualização
            ]);
        }
    }
}
