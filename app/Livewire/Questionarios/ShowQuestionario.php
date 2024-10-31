<?php

namespace App\Livewire\Questionario;

use App\Models\Questionario;
use Livewire\Component;

class ShowQuestionario extends Component
{


    public $questionario;

    protected $listeners = ['loadQuestionario' => 'showQuestionario'];

    public function showQuestionario($questionarioId)
    {
        $this->questionario = Questionario::find($questionarioId);
        // Carregar o questionário ou outras ações aqui
    }

    public function render()
    {
        return view('livewire.questionario.show-questionario');
    }
}
