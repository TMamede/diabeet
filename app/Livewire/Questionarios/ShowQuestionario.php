<?php

namespace App\Livewire\Questionario;

use App\Models\Questionario;
use Livewire\Component;
use Livewire\Attributes\On;

class ShowQuestionario extends Component
{
    public $questionario;

    protected $listeners = ['questionario-selected' => 'SetQuestionario'];

    public function SetQuestionario($questionarioId)
    {
        $this->questionario = Questionario::find($questionarioId);
    }

    public function render()
    {
        return view('livewire.questionarios.show-questionario');
    }
}
