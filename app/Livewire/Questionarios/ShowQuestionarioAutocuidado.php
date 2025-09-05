<?php

namespace App\Livewire\Questionarios;

use Livewire\Component;

use App\Models\AlimenatacaoE;
use App\Models\AlimenatacaoG;
use App\Models\Questionario;
use App\Models\AtividadeFisica;
use App\Models\Cuidado_pes;
use App\Models\Medicacao;
use App\Models\Monitor;
use App\Models\QuestionarioAutoCuidado;
use App\Models\Tabagismo;



class ShowQuestionarioAutocuidado extends Component
{

    public $alimentacaoE, $alimentacaoG, $atividade, $monitor, $cuidado, $medicacao, $tabagismo;
    public $dieta, $orientacao;
    public $frutas, $gorduras, $doces;
    public $realizou, $especifico;
    public $avaliou, $recomendado;
    public $pes, $sapatos, $dedos;
    public $medicamentos, $injecoes, $comprimidos;
    public $fumou, $num_cigarros, $quando_fumou;
    public $questionario, $questionarioAutocuidado;

    public function mount(int $id)
    {
        $this->questionario = Questionario::findOrFail($id);
        $this->loadData();
    }

    public function loadData()
    {
        // Busca o “autocuidado” ligado a este questionário
        $this->questionarioAutocuidado = QuestionarioAutoCuidado::with([
            'alimenatacaoG',
            'alimenatacaoE',
            'atividadeFisica',
            'monitor',
            'cuidadoPes',
            'medicacao',
            'tabagismo',
        ])
            ->where('questionario_id', $this->questionario->id)
            // se houver mais de um registro, pega o mais recente
            ->latest('id')
            ->first();

        if (!$this->questionarioAutocuidado) {
            // Se não existir registro ainda, apenas sai (a view pode tratar “sem dados”)
            return;
        }

        // Também guarda os objetos, se sua view usa algo como $alimentacaoG->dieta
        $this->alimentacaoG = $this->questionarioAutocuidado->alimenatacaoG;
        $this->alimentacaoE = $this->questionarioAutocuidado->alimenatacaoE;
        $this->atividade    = $this->questionarioAutocuidado->atividadeFisica;
        $this->monitor      = $this->questionarioAutocuidado->monitor;
        $this->cuidado      = $this->questionarioAutocuidado->cuidadoPes;
        $this->medicacao    = $this->questionarioAutocuidado->medicacao;
        $this->tabagismo    = $this->questionarioAutocuidado->tabagismo;

        // Preenche os campos primitivos que sua view pode estar dando bind (wire:model)
        // Alimentação Geral
        $this->dieta       = $this->alimentacaoG->dieta        ?? null;
        $this->orientacao  = $this->alimentacaoG->orientacao   ?? null;

        // Alimentação Específica (atenção ao nome da coluna “gordura” vs propriedade $gorduras)
        $this->frutas      = $this->alimentacaoE->frutas       ?? null;
        $this->gorduras    = $this->alimentacaoE->gordura      ?? null; // coluna é singular
        $this->doces       = $this->alimentacaoE->doces        ?? null;

        // Atividade Física
        $this->realizou    = $this->atividade->realizou        ?? null;
        $this->especifico  = $this->atividade->especifico      ?? null;

        // Monitorização
        $this->avaliou     = $this->monitor->avaliou           ?? null;
        $this->recomendado = $this->monitor->recomendado       ?? null;

        // Cuidado com os pés (atenção “sapato” na tabela vs propriedade $sapatos)
        $this->pes         = $this->cuidado->pes               ?? null;
        $this->sapatos     = $this->cuidado->sapato            ?? null;
        $this->dedos       = $this->cuidado->dedos             ?? null;

        // Medicação
        $this->medicamentos = $this->medicacao->medicamentos   ?? null;
        $this->injecoes     = $this->medicacao->injecoes       ?? null;
        $this->comprimidos  = $this->medicacao->comprimidos    ?? null;

        // Tabagismo (nome da FK na tabela: data_fumo_id)
        $this->fumou         = $this->tabagismo->fumou         ?? null;
        $this->num_cigarros  = $this->tabagismo->num_cigarros  ?? null;
        $this->quando_fumou  = $this->tabagismo->data_fumo_id  ?? null;
    }

    public function render()
    {
        return view('livewire.questionarios.show-questionario-autocuidado', [
            'dataFumos' => \App\Models\Data_fumo::all(), // Carrega os dados do fumou
        ])->layout('layouts.app');
    }
}
