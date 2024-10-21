<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class HistoricoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('pt_BR'); // Usando Faker em português do Brasil

        $historicos = [];
        for ($i = 0; $i < 20; $i++) {
            $historicos[] = [
                'tipo_diabetes_id' => $faker->randomElement([1, 2]), // Define tipo de diabetes como 1 ou 2
                'cirurgia_motivo' => $faker->sentence(), // Pode ser nulo ou uma descrição
                'amputacao_onde' => $faker->word(), // Pode ser nulo ou um local
                'amputacao_quando' => $faker->date(), // Pode ser nulo ou uma data
                'n_cigarros' => $faker->numberBetween(0, 20), // Pode ser nulo ou número de cigarros
                'inicio_tabagismo' => $faker->date(), // Pode ser nulo ou uma data
                'inicio_etilismo' => $faker->date(), // Pode ser nulo ou uma data
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('historicos')->insert($historicos);
    }
}
