<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('pt_BR'); // Faker configurado para português do Brasil
        
        $enderecos = [];
        for ($i = 0; $i < 20; $i++) {
            $enderecos[] = [
                'rua' => $faker->streetName,
                'numero' => $faker->numberBetween(1, 1000),
                'cep' => $faker->postcode,
                'bairro' => $faker->word,
                'cidade' => $faker->city,
                'uf' => $faker->stateAbbr, // Sigla de estado brasileiro
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('enderecos')->insert($enderecos);
    }
}
