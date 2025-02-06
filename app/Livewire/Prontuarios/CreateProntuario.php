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
    public $intervencoesSelecionadas = [];

    public function mount($id = null)
    {
        $this->questionarioId = $id;
        $this->prontuario = Prontuario::where('questionario_id', $id)->firstOrFail();

        $this->origens = $this->prontuario->origens()
            ->with(['motivos' => function ($query) {
                $query->whereHas('prontuarios', function ($q) {
                    $q->where('prontuarios.id', $this->prontuario->id);
                })
                ->with(['diagnosticos' => function ($query) {
                    $query->with('intervencaos');
                }]);
            }])
            ->distinct()
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

    public function toggleIntervencao($intervencaoId)
    {
        $diagnosticoId = $this->getDiagnosticoFromIntervencao($intervencaoId);

        if (in_array($intervencaoId, $this->intervencoesSelecionadas)) {
            $this->intervencoesSelecionadas = array_diff($this->intervencoesSelecionadas, [$intervencaoId]);
        } else {
            $this->intervencoesSelecionadas[] = $intervencaoId;

            if ($diagnosticoId && !in_array($diagnosticoId, $this->diagnosticosSelecionados)) {
                $this->toggleDiagnostico($diagnosticoId);
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

            if ($motivoId && !in_array($motivoId, $this->motivosSelecionados)) {
                $this->toggleMotivo($motivoId);
            }
        }
    }

    public function toggleMotivo($motivoId)
    {
        $origemId = $this->getOrigemFromMotivo($motivoId);

        if (in_array($motivoId, $this->motivosSelecionados)) {
            $this->motivosSelecionados = array_diff($this->motivosSelecionados, [$motivoId]);
        } else {
            $this->motivosSelecionados[] = $motivoId;

            if ($origemId && !in_array($origemId, $this->origensSelecionadas)) {
                $this->origensSelecionadas[] = $origemId;
            }
        }
    }

    private function getDiagnosticoFromIntervencao($intervencaoId)
    {
        foreach ($this->origens as $origem) {
            foreach ($origem['motivos'] as $motivo) {
                foreach ($motivo['diagnosticos'] as $diagnostico) {
                    if (collect($diagnostico['intervencaos'])->pluck('id')->contains($intervencaoId)) {
                        return $diagnostico['id'];
                    }
                }
            }
        }
        return null;
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

    private function isIntervencaoFromDiagnostico($diagnosticoId, $intervencaoId)
    {
        foreach ($this->origens as $origem) {
            foreach ($origem['motivos'] as $motivo) {
                foreach ($motivo['diagnosticos'] as $diagnostico) {
                    if ($diagnostico['id'] === $diagnosticoId) {
                        return collect($diagnostico['intervencaos'])->pluck('id')->contains($intervencaoId);
                    }
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
        if (empty($this->origensSelecionadas) || empty($this->motivosSelecionados) || empty($this->diagnosticosSelecionados)) {
            session()->flash('error', 'É necessário selecionar pelo menos uma origem, motivo e diagnóstico.');
            return;
        }

        $this->prontuario->origens()->sync($this->origensSelecionadas);
        $this->prontuario->motivos()->sync($this->motivosSelecionados);
        $this->prontuario->diagnosticos()->sync($this->diagnosticosSelecionados);
        $this->prontuario->intervencoes()->sync($this->intervencoesSelecionadas);
        
        $this->prontuario->gerado = true; // Atualiza o atributo gerado
        $this->prontuario->save(); // Salva no banco

        session()->flash('success', 'Prontuário finalizado com sucesso!');
        return redirect()->route('prontuario.index');
    }
}
