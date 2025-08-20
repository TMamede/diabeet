<?php

namespace App\Livewire;

use App\Models\Questionario;
use Livewire\Component;

class CreateQuestionarioAutocuidado extends Component
{
    public $alimentacaoE, $alimentacaoG, $atividade, $monitor, $cuidado, $medicacao, $tabagismo;
    public $frutas, $gorduras, $doces;
    public $dieta, $orientacao;
    public $realizou, $especifico;
    public $avaliou, $recomendado;
    public $pes, $sapatos, $dedos;
    public $medicamentos, $injecoes, $comprimidos;
    public $fumou, $num_cigarros, $quando_fumou;
    public $questionario;


    public function mount(int $questionarioId)
    {
        $this->questionario = Questionario::findOrFail($questionarioId);
    }




    public function render()
    {
        return view('livewire.questionarios.create-questionario-autocuidado', [
            'dataFumos' => \App\Models\Data_fumo::all(),
        ])->layout('layouts.app');
    }


    public function SalvarCuidado() {}
}
