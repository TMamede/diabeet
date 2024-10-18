<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Models\Endereco;

class UnidadeSaudeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('pt_BR'); // Faker configurado para português do Brasil
        
        // Obtém IDs de 20 endereços para associar às unidades de saúde
        $enderecos = Endereco::inRandomOrder()->limit(20)->pluck('id');
        
        $unidades = [];
        foreach ($enderecos as $enderecoId) {
            $unidades[] = [
                'nome' => 'Unidade de Saúde ' . $faker->company,
                'endereco_id' => $enderecoId, // Relacionando com a tabela de endereços
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('unidade_saudes')->insert($unidades);
    }
}
