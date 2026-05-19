<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Prontuario;
use Illuminate\Support\Facades\Cache;

class ProntuarioPDFController extends Controller
{
    public function gerarPDF($id)
    {

        /*
        |--------------------------------------------------------------------------
        | CACHE DO PRONTUÁRIO
        |--------------------------------------------------------------------------
        */

        $dados = Cache::remember("pdf_prontuario_$id", 60, function () use ($id) {

            $prontuario = Prontuario::with([
                'questionario.paciente:id,nome,prontuario',
                'origens:id,descricao',
                'motivos:id,descricao,origem_id',
                'motivos.diagnosticos:id,descricao',
                'diagnosticos:id,descricao',
                'diagnosticos.intervencaos:id,descricao',
                'intervencoes:id,descricao'
            ])->findOrFail($id);


            /*
            |--------------------------------------------------------------------------
            | ORGANIZAÇÃO EM ESTRUTURA FINAL
            |--------------------------------------------------------------------------
            */

            $estrutura = [];

            foreach ($prontuario->origens as $origem) {

                $estrutura[$origem->id] = [
                    'origem' => $origem,
                    'motivos' => []
                ];

                foreach ($prontuario->motivos->where('origem_id', $origem->id) as $motivo) {

                    $diagnosticos = $prontuario->diagnosticos
                        ->whereIn('id', $motivo->diagnosticos->pluck('id'));

                    $estrutura[$origem->id]['motivos'][] = [
                        'motivo' => $motivo,
                        'diagnosticos' => $diagnosticos->map(function ($diagnostico) use ($prontuario) {

                            $intervencoes = $prontuario->intervencoes
                                ->whereIn('id', $diagnostico->intervencaos->pluck('id'));

                            return [
                                'diagnostico' => $diagnostico,
                                'intervencoes' => $intervencoes
                            ];
                        })
                    ];
                }
            }


            /*
            |--------------------------------------------------------------------------
            | DIAGNOSTICOS EXTRAS
            |--------------------------------------------------------------------------
            */

            $diagnosticosMotivosIds = $prontuario->motivos
                ->flatMap(fn($m) => $m->diagnosticos->pluck('id'))
                ->unique();

            $diagnosticosExtras = $prontuario->diagnosticos
                ->whereNotIn('id', $diagnosticosMotivosIds)
                ->map(function ($diagnostico) use ($prontuario) {

                    $intervencoes = $prontuario->intervencoes
                        ->whereIn('id', $diagnostico->intervencaos->pluck('id'));

                    return [
                        'diagnostico' => $diagnostico,
                        'intervencoes' => $intervencoes
                    ];
                });

            return [
                'prontuario' => $prontuario,
                'estrutura' => $estrutura,
                'diagnosticosExtras' => $diagnosticosExtras
            ];
        });


        /*
        |--------------------------------------------------------------------------
        | GERAR PDF
        |--------------------------------------------------------------------------
        */

        $pdf = Pdf::loadView('pdfs.prontuario', $dados)
            ->setPaper('a4')
            ->setOption('isHtml5ParserEnabled', true)
            ->setOption('isRemoteEnabled', true);

        return $pdf->download("prontuario_{$id}.pdf");
    }
}
