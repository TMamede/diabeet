<?php
namespace App\Livewire\Prontuarios;

use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Prontuario;

class ShowProntuario extends Component
{
    public $prontuarioId;

    public function mount($id)
    {
        $this->prontuarioId = $id;
    }

    public function gerarPdf()
    {
        $prontuario = Prontuario::with(['origens', 'motivos', 'diagnosticos'])->findOrFail($this->prontuarioId);

        $pdf = Pdf::loadView('pdfs.prontuario', ['prontuario' => $prontuario]);

        return response()->streamDownload(
            fn () => print($pdf->output()),
            "prontuario_{$this->prontuarioId}.pdf"
        );
    }

    public function render()
    {
        $prontuario = Prontuario::with(['origens', 'motivos', 'diagnosticos'])->findOrFail($this->prontuarioId);

        return view('livewire.prontuarios.show-prontuario', compact('prontuario'));
    }
}
