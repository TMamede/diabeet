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
    public  $prontuario;
    
    public $origens =[];
    public $motivos = [];

    public function mount($id = null)
    {
        $this->questionarioId = $id;
        $prontuario  = Prontuario::where('questionario_id', $id)->firstOrFail();
        $this->origens = $prontuario->origens->toArray();
        $this->motivos = $prontuario->motivos->toArray();
    }

    public function render()
    {
        return view('livewire.prontuarios.create-prontuario')->layout('layouts.app');
    }
}
