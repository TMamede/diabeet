<?php

namespace App\Livewire\Prontuarios;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;
use App\Models\Paciente;

class ListaProntuariosPaciente extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public $search = '';
    #[Url()]
    public $perPage = 10;

    public $sortBy = 'nome';
    public $sortDir = 'ASC';

    public function setSortBy($sortByField)
    {
        if ($this->sortBy === $sortByField) {
            $this->sortDir = $this->sortDir === 'ASC' ? 'DESC' : 'ASC';
        } else {
            $this->sortBy = $sortByField;
            $this->sortDir = 'ASC';
        }
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $pacientes = Paciente::withCount('questionarios')
            ->has('questionarios')
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('nome', 'like', '%' . $this->search . '%')
                        ->orWhere('prontuario', 'like', '%' . $this->search . '%');
                });
            })
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->perPage);

        return view('livewire.prontuarios.lista-prontuarios-paciente', [
            'pacientes' => $pacientes,
        ]);
    }
}
