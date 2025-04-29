<?php

namespace App\Livewire\Prontuarios;

use App\Models\Paciente;
use App\Models\Questionario;
use Livewire\Component;
use Livewire\WithPagination;

class SearchProntuario extends Component
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

    public function CreateProntuario($questionarioId)
    {
        return redirect()->route('prontuario.create', ['id' => $questionarioId]);
    }

    public function gerarPDF($prontuarioId)
    {
        return redirect()->route('prontuario.pdf', ['id' => $prontuarioId]);
    }

    public function render()
    {
        $questionarios = Questionario::with(['user', 'prontuario'])
            ->where('paciente_id', $this->paciente->id)
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->perPage);

        return view('livewire.prontuarios.search-prontuario', [
            'questionarios' => $questionarios,
            'paciente' => $this->paciente,
            'sortBy' => $this->sortBy,
            'sortDir' => $this->sortDir
        ])->layout('layouts.app');
    }
}
