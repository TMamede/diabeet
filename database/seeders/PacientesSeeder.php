<?php

namespace Database\Seeders;

use App\Models\Historico;
use App\Models\Paciente;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('pt_BR');

        $pacientes = [];
        for ($i = 0; $i < 20; $i++) {
            $pacientes[] = [
                'cpf' => $faker->unique()->numerify('###########'), // Gera CPF com 11 dígitos únicos
                'email' => $faker->unique()->safeEmail(), // Gera um email único
                'nome' => $faker->name(), // Nome do paciente
                'prontuario' => $faker->numerify('PRT#####'), // Prontuário gerado
                'data_nasc' => $faker->date('Y-m-d', '2005-01-01'), // Data de nascimento aleatória
                'orientacao_sexual_id' => $faker->numberBetween(1, 4), // Valor entre 1 e 4 para orientação sexual
                'estado_civil_id' => $faker->numberBetween(1, 5), // Valor entre 1 e 5 para estado civil
                'etnia_id' => $faker->numberBetween(1, 5), // Valor entre 1 e 5 para etnia
                'endereco_id' => $faker->numberBetween(1, 20), // Valor entre 1 e 20 para endereço
                'ocupacao' => $faker->jobTitle(), // Gera uma ocupação aleatória
                'renda_familiar' => $faker->randomFloat(2, 1000, 10000), // Gera renda familiar aleatória
                'beneficio_id' => $faker->numberBetween(1, 3), // Valor entre 1 e 3 para benefício
                'reside_id' => $faker->numberBetween(1, 4), // Valor entre 1 e 4 para reside
                'num_pss_casa' => $faker->numberBetween(1, 8), // Número de pessoas na casa
                'user_id' => $faker->numberBetween(1, 2), // Valor entre 1 e 2 para user
                'historico_id' => $faker->numberBetween(1, 20), // Valor entre 1 e 20 ou nulo para histórico
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('pacientes')->insert($pacientes);
    }
} 
