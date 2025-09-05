<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Questionario;
use App\Models\QuestionarioAutoCuidado;
use App\Models\AlimenatacaoG;
use App\Models\AlimenatacaoE;
use App\Models\AtividadeFisica;
use App\Models\Monitor;
use App\Models\Cuidado_pes;
use App\Models\Medicacao;
use App\Models\Tabagismo;

class AutocuidadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // IDs de todos os questionários
        $questionarioIds = Questionario::query()->pluck('id');

        foreach ($questionarioIds as $qid) {
            // Evita duplicar se já existir autocuidado para este questionário
            if (QuestionarioAutoCuidado::where('questionario_id', $qid)->exists()) {
                continue;
            }

            $alimentacaoG = AlimenatacaoG::firstOrCreate([
                'dieta'      => fake()->numberBetween(1, 5),
                'orientacao' => fake()->numberBetween(1, 5),
            ]);

            $alimentacaoE = AlimenatacaoE::firstOrCreate([
                'frutas'  => fake()->numberBetween(1, 5),
                'gordura' => fake()->numberBetween(1, 5),
                'doces'   => fake()->numberBetween(1, 5),
            ]);

            $atividade = AtividadeFisica::firstOrCreate([
                'realizou'   => fake()->numberBetween(1, 5),
                'especifico' => fake()->numberBetween(1, 5),
            ]);

            $monitor = Monitor::firstOrCreate([
                'avaliou'     => fake()->numberBetween(1, 5),
                'recomendado' => fake()->numberBetween(1, 5),
            ]);

            $cuidado = Cuidado_pes::firstOrCreate([
                'pes'    => fake()->numberBetween(1, 5),
                'sapato' => fake()->numberBetween(1, 5),
                'dedos'  => fake()->numberBetween(1, 5),
            ]);

            $medicacao = Medicacao::firstOrCreate([
                'medicamentos' => fake()->numberBetween(1, 5),
                'injecoes'     => fake()->numberBetween(1, 5),
                'comprimidos'  => fake()->numberBetween(1, 5),
            ]);


            $tabagismo = Tabagismo::firstOrCreate([
                'fumou'        => fake()->boolean(),
                'num_cigarros' => fake()->numberBetween(0, 40),
                'data_fumo_id' => fake()->numberBetween(1, 7),
            ]);


            QuestionarioAutoCuidado::create([
                'alimenatacao_g_id'   => $alimentacaoG->id,
                'alimenatacao_e_id'   => $alimentacaoE->id,
                'atividade_fisica_id' => $atividade->id,
                'monitor_id'          => $monitor->id,
                'cuidado_pes_id'      => $cuidado->id,
                'medicacao_id'        => $medicacao->id,
                'tabagismo_id'        => $tabagismo->id,
                'questionario_id'     => $qid,
            ]);
        }
    }
}
