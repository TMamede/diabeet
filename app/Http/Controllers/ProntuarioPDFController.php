<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Prontuario;

class ProntuarioPDFController extends Controller
{
    public function gerarPDF($id)
    {
        $prontuario = Prontuario::with([
            'questionario.paciente',
            'origens',
            'motivos',
            'diagnosticos',
            'intervencoes'
        ])->findOrFail($id);

        // Pré-processar os dados para a view
        $dados = [
            'prontuario' => $prontuario,
            'motivosPorOrigem' => $prontuario->origens->mapWithKeys(function ($origem) use ($prontuario) {
                return [
                    $origem->id => $prontuario->motivos->where('origem_id', $origem->id)
                ];
            }),
            'diagnosticosPorMotivo' => $prontuario->motivos->mapWithKeys(function ($motivo) use ($prontuario) {
                return [
                    $motivo->id => $prontuario->diagnosticos->whereIn('id', $motivo->diagnosticos->pluck('id'))
                ];
            }),
            'intervencoesPorDiagnostico' => $prontuario->diagnosticos->mapWithKeys(function ($diagnostico) use ($prontuario) {
                return [
                    $diagnostico->id => $prontuario->intervencoes->whereIn('id', $diagnostico->intervencaos->pluck('id'))
                ];
            })
        ];

        $pdf = Pdf::loadView('pdfs.prontuario', $dados);

        return $pdf->download("prontuario_{$id}.pdf");
    }
}
