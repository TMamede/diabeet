<?php

namespace App\Livewire\Prontuarios;

use App\Models\Prontuario;
use App\Models\Diagnostico;
use App\Models\Intervencao;
use Illuminate\Support\Facades\DB;
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

    public $mapIntervencaoDiagnostico = [];
    public $mapDiagnosticoOrigem = [];
    public $mapDiagnosticoIntervencoes = [];
    public $mapOrigemDiagnosticos = [];

    // novos campos
    public $diagnosticosExtras = [];
    public $intervencoesExtras = [];

    public function mount($id = null)
    {
        $this->questionarioId = $id;

        $this->prontuario = Prontuario::with([
            'origens',
            'motivos',
            'diagnosticos',
            'intervencoes'
        ])->where('questionario_id', $id)->firstOrFail();

        $origensAssociadas = $this->prontuario->origens;
        $motivosAssociados = $this->prontuario->motivos->pluck('id')->toArray();

        $this->origens = $origensAssociadas->map(function ($origem) use ($motivosAssociados) {

            $motivosFiltrados = $origem->motivos()
                ->whereIn('motivos.id', $motivosAssociados)
                ->get();

            $diagnosticosUnicos = [];

            foreach ($motivosFiltrados as $motivo) {

                foreach ($motivo->diagnosticos as $diagnostico) {

                    if (!isset($diagnosticosUnicos[$diagnostico->id])) {

                        $diagnostico->intervencaos;

                        $diagnosticosUnicos[$diagnostico->id] = $diagnostico;
                    }
                }
            }

            return [

                'id' => $origem->id,

                'descricao' => $origem->descricao,

                'motivos' => $motivosFiltrados->map(function ($motivo) {

                    return [

                        'id' => $motivo->id,

                        'descricao' => $motivo->descricao,

                        'diagnosticos' => $motivo->diagnosticos->map(function ($diag) {

                            return [

                                'id' => $diag->id,

                                'descricao' => $diag->descricao,

                                'intervencaos' => $diag->intervencaos->map(function ($int) {

                                    return [

                                        'id' => $int->id,

                                        'descricao' => $int->descricao

                                    ];
                                })

                            ];
                        })

                    ];
                }),

                'diagnosticos_unicos' => array_values($diagnosticosUnicos)

            ];
        })->toArray();

        foreach ($this->origens as $origem) {

            foreach ($origem['diagnosticos_unicos'] as $diagnostico) {

                $this->mapDiagnosticoOrigem[$diagnostico->id] = $origem['id'];

                $this->mapOrigemDiagnosticos[$origem['id']][] = $diagnostico->id;

                foreach ($diagnostico->intervencaos as $intervencao) {

                    $this->mapIntervencaoDiagnostico[$intervencao->id] = $diagnostico->id;

                    $this->mapDiagnosticoIntervencoes[$diagnostico->id][] = $intervencao->id;
                }
            }
        }
    }


    public function toggleOrigem($origemId)
    {
        if (in_array($origemId, $this->origensSelecionadas)) {

            $this->origensSelecionadas = array_diff($this->origensSelecionadas, [$origemId]);
        } else {

            $this->origensSelecionadas[] = $origemId;
        }
    }

    public function verificarOrigem($origemId)
    {
        if (!isset($this->mapOrigemDiagnosticos[$origemId])) return;

        $temDiagnostico = false;

        foreach ($this->mapOrigemDiagnosticos[$origemId] as $diagId) {

            if (in_array($diagId, $this->diagnosticosSelecionados)) {

                $temDiagnostico = true;
                break;
            }
        }

        if (!$temDiagnostico) {

            $this->origensSelecionadas = array_diff(
                $this->origensSelecionadas,
                [$origemId]
            );
        }
    }


    public function toggleDiagnostico($diagnosticoId)
    {
        $origemId = $this->mapDiagnosticoOrigem[$diagnosticoId] ?? null;

        if (!$origemId) return;

        // DESMARCAR
        if (in_array($diagnosticoId, $this->diagnosticosSelecionados)) {

            $this->diagnosticosSelecionados = array_diff(
                $this->diagnosticosSelecionados,
                [$diagnosticoId]
            );

            if (isset($this->mapDiagnosticoIntervencoes[$diagnosticoId])) {

                foreach ($this->mapDiagnosticoIntervencoes[$diagnosticoId] as $intId) {

                    $this->intervencoesSelecionadas = array_diff(
                        $this->intervencoesSelecionadas,
                        [$intId]
                    );
                }
            }

            $this->verificarOrigem($origemId);

            return;
        }

        // MARCAR
        $this->diagnosticosSelecionados[] = $diagnosticoId;

        if (!in_array($origemId, $this->origensSelecionadas)) {

            $this->origensSelecionadas[] = $origemId;
        }
    }


    public function toggleIntervencao($intervencaoId)
    {
        $diagnosticoId = $this->mapIntervencaoDiagnostico[$intervencaoId] ?? null;

        if (!$diagnosticoId) return;

        $origemId = $this->mapDiagnosticoOrigem[$diagnosticoId];

        // DESMARCAR
        if (in_array($intervencaoId, $this->intervencoesSelecionadas)) {

            $this->intervencoesSelecionadas = array_diff(
                $this->intervencoesSelecionadas,
                [$intervencaoId]
            );

            // verificar se ainda tem intervenção ativa
            $temOutra = false;

            foreach ($this->mapDiagnosticoIntervencoes[$diagnosticoId] as $intId) {

                if (in_array($intId, $this->intervencoesSelecionadas)) {

                    $temOutra = true;
                    break;
                }
            }

            if (!$temOutra) {

                $this->diagnosticosSelecionados = array_diff(
                    $this->diagnosticosSelecionados,
                    [$diagnosticoId]
                );

                $this->verificarOrigem($origemId);
            }

            return;
        }

        // MARCAR
        $this->intervencoesSelecionadas[] = $intervencaoId;

        if (!in_array($diagnosticoId, $this->diagnosticosSelecionados)) {

            $this->diagnosticosSelecionados[] = $diagnosticoId;
        }

        if (!in_array($origemId, $this->origensSelecionadas)) {

            $this->origensSelecionadas[] = $origemId;
        }
    }


    /*
    |--------------------------------------------------------------------------
    | DIAGNOSTICOS MANUAIS
    |--------------------------------------------------------------------------
    */


    public function adicionarDiagnosticoExtra()
    {

        $this->diagnosticosExtras[] = [

            'descricao' => '',

            'intervencoes' => []

        ];
    }


    public function adicionarIntervencaoExtra($index)
    {

        $this->diagnosticosExtras[$index]['intervencoes'][] = [

            'descricao' => ''

        ];
    }


    /*
    |--------------------------------------------------------------------------
    | FINALIZAR PRONTUARIO
    |--------------------------------------------------------------------------
    */


    public function finalizarProntuario()
    {
        if (
            empty($this->origensSelecionadas) ||
            empty($this->diagnosticosSelecionados)
        ) {

            session()->flash(
                'error',
                'É necessário selecionar pelo menos uma origem e um diagnóstico.'
            );

            return;
        }

        DB::beginTransaction();

        try {

            /*
        |--------------------------------------------------------------------------
        | SALVAR DIAGNÓSTICOS EXTRAS
        |--------------------------------------------------------------------------
        */

            foreach ($this->diagnosticosExtras as $extra) {

                if (empty($extra['descricao'])) {
                    continue;
                }

                // Criar diagnóstico
                $diagnostico = Diagnostico::create([
                    'descricao' => $extra['descricao']
                ]);

                // adicionar diagnóstico na seleção
                $this->diagnosticosSelecionados[] = $diagnostico->id;

                $intervencoesIds = [];

                if (!empty($extra['intervencoes'])) {

                    foreach ($extra['intervencoes'] as $intervencaoExtra) {

                        if (empty($intervencaoExtra['descricao'])) {
                            continue;
                        }

                        // Criar intervenção
                        $intervencao = Intervencao::create([
                            'descricao' => $intervencaoExtra['descricao']
                        ]);

                        $intervencoesIds[] = $intervencao->id;

                        // adicionar na seleção
                        $this->intervencoesSelecionadas[] = $intervencao->id;
                    }
                }

                // Associar diagnóstico às intervenções (N:N)
                if (!empty($intervencoesIds)) {

                    $diagnostico->intervencaos()->sync($intervencoesIds);
                }
            }


            /*
        |--------------------------------------------------------------------------
        | LÓGICA ORIGINAL (MANTIDA)
        |--------------------------------------------------------------------------
        */

            $this->prontuario->origens()->sync($this->origensSelecionadas);

            if (!empty($this->motivosSelecionados)) {
                $this->prontuario->motivos()->sync($this->motivosSelecionados);
            }

            $this->prontuario->diagnosticos()->sync($this->diagnosticosSelecionados);

            $this->prontuario->intervencoes()->sync($this->intervencoesSelecionadas);

            $this->prontuario->gerado = true;

            $this->prontuario->save();

            DB::commit();

            session()->flash('success', 'Prontuário finalizado com sucesso!');

            $pacienteId = $this->prontuario->questionario->paciente_id;

            return redirect()->route('prontuario.paciente', [
                'paciente' => $pacienteId
            ]);
        } catch (\Exception $e) {

            DB::rollBack();

            session()->flash(
                'error',
                'Erro ao finalizar o prontuário.'
            );

            throw $e;
        }
    }


    public function render()
    {

        return view('livewire.prontuarios.create-prontuario')

            ->layout('layouts.app');
    }
}
