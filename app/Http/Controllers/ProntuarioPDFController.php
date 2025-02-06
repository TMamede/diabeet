<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Prontuario;

class ProntuarioPDFController extends Controller
{
    public function gerarPDF($id)
    {
        // Busca o prontuário com os relacionamentos necessários
        $prontuario = Prontuario::with(['origens', 'motivos', 'diagnosticos','intervencoes'])->findOrFail($id);

        // Gera o PDF usando a view específica
        $pdf = Pdf::loadView('pdfs.prontuario', ['prontuario' => $prontuario]);

        // Retorna o PDF para download
        return $pdf->download("prontuario_{$id}.pdf");
    }
}