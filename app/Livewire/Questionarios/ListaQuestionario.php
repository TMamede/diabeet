<?php

namespace App\Livewire\Questionarios;

use App\Models\Paciente;
use App\Models\Questionario;
use Livewire\Component;
use Livewire\WithPagination;

class ListaQuestionario extends Component
{
    use WithPagination;

    public Paciente $paciente;

    public $perPage = 10;
    public $sortBy = 'created_at';
    public $sortDir = 'DESC';

    public function mount(Paciente $paciente)
    {
        $this->paciente = $paciente;
    }

    public function setSortBy($sortByField)
    {
        if ($this->sortBy === $sortByField) {
            $this->sortDir = ($this->sortDir === 'ASC') ? 'DESC' : 'ASC';
        } else {
            $this->sortBy = $sortByField;
            $this->sortDir = 'ASC';
        }
    }


    public function CreateQuestionario()
    {
        return redirect()->route('questionario.create');
    }

    public function ShowQuestionario($questionarioId)
    {
        return redirect()->route('questionario.show', ['id' => $questionarioId]);
    }




    public function render()
    {
        $questionarios = Questionario::with(['user', 'paciente'])
            ->where('paciente_id', $this->paciente->id)
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->perPage);

        return view('livewire.questionarios.lista-questionario', [
            'questionarios' => $questionarios,
            'paciente' => $this->paciente,
            'sortBy' => $this->sortBy,
            'sortDir' => $this->sortDir
        ])->layout('layouts.app');
    }
}
