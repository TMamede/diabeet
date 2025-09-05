<?php

namespace App\Livewire\Questionarios;

use Livewire\Component;

use App\Models\Impacto;
use App\Models\PreoDiabete;
use App\Models\Questionario;
use App\Models\QuestionarioQualidade;
use App\Models\Satisfacao;

class ShowQuestionarioQualidade extends Component
{

    public $satisfacao, $impacto, $preo_diabete, $ter_filhos;
    public $flexibilidade, $vida_sexual;
    public $exercicio, $incomodo, $comer;
    public $diabete, $complicacoes;
    public $questionario, $questionarioQualidade;

    public function mount(int $id)
    {
        $this->questionario = Questionario::findOrFail($id);
        $this->loadData();
    }

    public function loadData()
    {
        // Busca o registro de qualidade ligado a este questionário
        $this->questionarioQualidade = QuestionarioQualidade::with([
            'satisfacao',
            'impacto',
            'preoDiabete',
        ])
            ->where('questionario_id', $this->questionario->id)
            ->latest('id')
            ->first();

        if (!$this->questionarioQualidade) {
            return; // view trata “sem dados”
        }

        // Guarda os objetos (se a view usa algo como $satisfacao->flexibilidade)
        $this->satisfacao   = $this->questionarioQualidade->satisfacao;
        $this->impacto      = $this->questionarioQualidade->impacto;
        $this->preo_diabete = $this->questionarioQualidade->preoDiabete;
        $this->ter_filhos   = $this->questionarioQualidade->ter_filhos;

        // Preenche campos primitivos (wire:model)
        // Satisfação
        $this->flexibilidade = $this->satisfacao->flexibilidade ?? null;
        $this->vida_sexual   = $this->satisfacao->vida_sexual   ?? null;

        // Impacto
        $this->exercicio = $this->impacto->exercicio ?? null;
        $this->incomodo  = $this->impacto->incomodo  ?? null;
        $this->comer     = $this->impacto->comer     ?? null;

        // Preocupação com diabetes
        $this->diabete      = $this->preo_diabete->diabete      ?? null;
        $this->complicacoes = $this->preo_diabete->complicacoes ?? null;
    }

    public function render()
    {
        return view('livewire.questionarios.show-questionario-qualidade')->layout('layouts.app');
    }
}
