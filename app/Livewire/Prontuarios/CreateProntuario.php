<?php

namespace App\Livewire\Prontuarios;

use App\Models\Prontuario;
use Livewire\Component;

class CreateProntuario extends Component
{
    public $questionarioId;
    public $prontuario;
    public $origens = [];
    public $origensSelecionadas = [];
    public $motivosSelecionados = [];
    public $diagnosticosSelecionados = [];

    public function mount($id = null)
    {
        $this->questionarioId = $id;

        // Carrega o prontuário baseado no questionário
        $this->prontuario = Prontuario::where('questionario_id', $id)->firstOrFail();

        // Carrega as origens associadas ao prontuário com seus motivos e diagnósticos
        $this->origens = $this->prontuario->origens()
            ->with(['motivos' => function ($query) {
                // Filtra os motivos associados ao prontuário por meio da tabela intermediária 'prontuario_motivo'
                $query->whereHas('prontuarios', function ($q) {
                    $q->where('prontuarios.id', $this->prontuario->id);
                })
                    ->with('diagnosticos'); // Carrega os diagnósticos associados
            }])
            ->distinct() // Evita duplicação de origens
            ->get()
            ->toArray();
    }

    public function toggleOrigem($origemId)
    {
        if (in_array($origemId, $this->origensSelecionadas)) {
            $this->origensSelecionadas = array_diff($this->origensSelecionadas, [$origemId]);
            $this->motivosSelecionados = array_filter($this->motivosSelecionados, function ($motivoId) use ($origemId) {
                return !$this->isMotivoFromOrigem($origemId, $motivoId);
            });
            $this->diagnosticosSelecionados = array_filter($this->diagnosticosSelecionados, function ($diagnosticoId) use ($origemId) {
                return !$this->isDiagnosticoFromOrigem($origemId, $diagnosticoId);
            });
        } else {
            $this->origensSelecionadas[] = $origemId;
        }
    }

    public function toggleMotivo($motivoId)
    {
        $origemId = $this->getOrigemFromMotivo($motivoId);

        if (in_array($motivoId, $this->motivosSelecionados)) {
            $this->motivosSelecionados = array_diff($this->motivosSelecionados, [$motivoId]);
            $this->diagnosticosSelecionados = array_filter($this->diagnosticosSelecionados, function ($diagnosticoId) use ($motivoId) {
                return !$this->isDiagnosticoFromMotivo($motivoId, $diagnosticoId);
            });
        } else {
            $this->motivosSelecionados[] = $motivoId;

            if (!in_array($origemId, $this->origensSelecionadas)) {
                $this->origensSelecionadas[] = $origemId;
            }
        }
    }

    public function toggleDiagnostico($diagnosticoId)
    {
        $motivoId = $this->getMotivoFromDiagnostico($diagnosticoId);
        $origemId = $this->getOrigemFromMotivo($motivoId);

        if (in_array($diagnosticoId, $this->diagnosticosSelecionados)) {
            $this->diagnosticosSelecionados = array_diff($this->diagnosticosSelecionados, [$diagnosticoId]);
        } else {
            $this->diagnosticosSelecionados[] = $diagnosticoId;

            if (!in_array($motivoId, $this->motivosSelecionados)) {
                $this->motivosSelecionados[] = $motivoId;
            }
            if (!in_array($origemId, $this->origensSelecionadas)) {
                $this->origensSelecionadas[] = $origemId;
            }
        }
    }

    private function getOrigemFromMotivo($motivoId)
    {
        foreach ($this->origens as $origem) {
            if (collect($origem['motivos'])->pluck('id')->contains($motivoId)) {
                return $origem['id'];
            }
        }
        return null;
    }

    private function getMotivoFromDiagnostico($diagnosticoId)
    {
        foreach ($this->origens as $origem) {
            foreach ($origem['motivos'] as $motivo) {
                if (collect($motivo['diagnosticos'])->pluck('id')->contains($diagnosticoId)) {
                    return $motivo['id'];
                }
            }
        }
        return null;
    }

    private function isMotivoFromOrigem($origemId, $motivoId)
    {
        foreach ($this->origens as $origem) {
            if ($origem['id'] === $origemId) {
                return collect($origem['motivos'])->pluck('id')->contains($motivoId);
            }
        }
        return false;
    }

    private function isDiagnosticoFromOrigem($origemId, $diagnosticoId)
    {
        foreach ($this->origens as $origem) {
            if ($origem['id'] === $origemId) {
                foreach ($origem['motivos'] as $motivo) {
                    if (collect($motivo['diagnosticos'])->pluck('id')->contains($diagnosticoId)) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    private function isDiagnosticoFromMotivo($motivoId, $diagnosticoId)
    {
        foreach ($this->origens as $origem) {
            foreach ($origem['motivos'] as $motivo) {
                if ($motivo['id'] === $motivoId) {
                    return collect($motivo['diagnosticos'])->pluck('id')->contains($diagnosticoId);
                }
            }
        }
        return false;
    }

    public function render()
    {
        return view('livewire.prontuarios.create-prontuario')->layout('layouts.app');
    }

    public function finalizarProntuario()
    {
        // Verificar se todas as origens, motivos e diagnósticos estão selecionados

        if (empty($this->origensSelecionadas) || empty($this->motivosSelecionados) || empty($this->diagnosticosSelecionados)) {
            session()->flash('error', 'É necessário selecionar pelo menos uma origem, motivo e diagnóstico.');
            return;
        }

        // Sincronizar as origens selecionadas com o prontuário
        $this->prontuario->origens()->sync($this->origensSelecionadas);

        // Sincronizar os motivos selecionados com o prontuário
        $this->prontuario->motivos()->sync($this->motivosSelecionados);

        // Sincronizar os diagnósticos selecionados com o prontuário
        $this->prontuario->diagnosticos()->sync($this->diagnosticosSelecionados);

        // Exibir mensagem de sucesso
        session()->flash('success', 'Prontuário atualizado com sucesso!');
        redirect()->route('prontuario.index');
    }
}
