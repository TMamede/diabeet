<?php

namespace Database\Seeders;

use App\Models\Impacto;
use App\Models\PreoDiabete;
use App\Models\Questionario;
use App\Models\QuestionarioQualidade;
use App\Models\Satisfacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QualidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        // Pega todos os questionários existentes
        $questionarioIds = Questionario::query()->pluck('id');


        foreach ($questionarioIds as $qid) {
            // Evita duplicar se já existir qualidade para este questionário
            if (QuestionarioQualidade::where('questionario_id', $qid)->exists()) {
                continue;
            }

            $satisfacao = Satisfacao::firstOrCreate([
                'flexibilidade' => fake()->numberBetween(1, 5),
                'vida_sexual'   => fake()->numberBetween(1, 5),
            ]);

            $impacto = Impacto::firstOrCreate([
                'exercicio' => fake()->numberBetween(1, 5),
                'incomodo'  => fake()->numberBetween(1, 5),
                'comer'     => fake()->numberBetween(1, 5),
            ]);

            $preo = PreoDiabete::firstOrCreate([
                'diabete'      => fake()->numberBetween(1, 5),
                'complicacoes' => fake()->numberBetween(1, 5),
            ]);

            QuestionarioQualidade::create([
                'satisfacao_id'   => $satisfacao->id,
                'impacto_id'      => $impacto->id,
                'preo_diabete_id' => $preo->id,
                'ter_filhos'      => fake()->numberBetween(1, 5),
                'questionario_id' => $qid,
            ]);
        }
    }
}
