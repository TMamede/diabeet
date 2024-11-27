<?php

namespace App\Livewire\Prontuarios;

use App\Models\Diagnostico;
use App\Models\Intervencao;
use App\Models\Origem;
use App\Models\Prontuario;
use App\Models\Questionario;
use Livewire\Component;

class CreateProntuario extends Component
{
    public $questionarioId;
    public $prontuario;
    public $origens;
    public $selectedOrigem;
    public $motivos;
    public $diagnosticos = [];
    public $intervencoes = [];
    public $statusOrigens = [];
    public $statusProntuario = false;

    public $questionario;

    protected $listeners = ['questionario-for-prontuario'];

    public function questionarioSelected($questionarioId)
    {
        $this->questionarioId = $questionarioId;
    }

    public function mount($id)
    {
        $this->loadProntuarioData($id);
        $this->questionarioId = $id;

        $this->prontuario = Prontuario::where('questionario_id', $this->questionarioId)
            ->with(['origens.motivos']) // Garante que as relações são carregadas como modelos Eloquent
            ->first();

        $this->origens = $this->prontuario->origens; // Deve ser uma coleção de modelos Eloquent

        // Seleciona a primeira origem se existir
        if ($this->origens->isNotEmpty()) {
            $this->selectOrigem($this->origens->first()->id);
        }
    }

    public function loadProntuarioData($questionarioId)
    {
        $this->questionario = Questionario::findOrFail($questionarioId);
    }

    public function deletarOrigem($origemId)
    {
        $origem = $this->prontuario->origens()->find($origemId);

        if ($origem) {
            // Remove a origem do prontuário
            $this->prontuario->origens()->detach($origemId);

            // Atualiza a lista de origens
            $this->origens = $this->prontuario->origens;

            // Verifica status do prontuário
            $this->atualizarStatusProntuario();
        }
    }

    public function deletarMotivo($motivoId)
    {
        $motivo = $this->prontuario->motivos()->find($motivoId);

        if ($motivo) {
            // Remove o motivo do prontuário
            $this->prontuario->motivos()->detach($motivoId);

            // Atualiza a lista de motivos
            $this->motivos = $this->selectedOrigem->motivos;

            // Atualiza o status da origem
            $this->atualizarStatusOrigem($this->selectedOrigem->id);
        }
    }

    public function selectOrigem($origemId)
    {
        $this->selectedOrigem = Origem::with('motivos')->find($origemId);

        // Obtém motivos já associados ao prontuário
        $this->motivos = $this->selectedOrigem->motivos;

        // Diagnósticos e intervenções globais (todos disponíveis)
        $this->diagnosticos = Diagnostico::all();
        $this->intervencoes = Intervencao::all();
    }

    public function associarDiagnostico($motivoId, $diagnosticoId)
    {
        // Associa diagnóstico ao prontuário
        $this->prontuario->diagnosticos()->syncWithoutDetaching($diagnosticoId);

        // Atualiza status se necessário
        $this->atualizarStatusOrigem($this->selectedOrigem->id);
    }

    public function associarIntervencao($diagnosticoId, $intervencaoId)
    {
        // Associa intervenção ao prontuário
        $this->prontuario->intervencoes()->syncWithoutDetaching($intervencaoId);

        // Atualiza status se necessário
        $this->atualizarStatusOrigem($this->selectedOrigem->id);
    }

    public function atualizarStatusOrigem($origemId)
    {
        // Confirma se todos os motivos, diagnósticos e intervenções da origem estão associados
        $motivosConfirmados = $this->motivos->every(function ($motivo) {
            return $this->prontuario->diagnosticos->contains('motivo_id', $motivo->id);
        });

        $this->statusOrigens[$origemId] = $motivosConfirmados ? 'green' : 'red';

        $this->atualizarStatusProntuario();
    }

    public function atualizarStatusProntuario()
    {
        $this->statusProntuario = collect($this->statusOrigens)->every(fn($status) => $status === 'green');
    }

    public function salvarProntuario()
    {
        if (!$this->statusProntuario) {
            session()->flash('error', 'Finalize todas as origens antes de salvar.');
            return;
        }

        $this->prontuario->save();

        session()->flash('success', 'Prontuário salvo com sucesso!');
    }

    public function render()
    {
        return view('livewire.prontuarios.create-prontuario');
    }
}
