<?php

namespace App\Livewire\Prontuarios;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\Questionario;
use App\Models\Prontuario;

class SearchProntuario extends Component
{

    use WithPagination;

    #[Url(history: true)]
    public $search = '';
    #[Url()]
    public $perPage = 10;
    #[Url(history: true)]
    public $sortBy = 'created_at';
    #[Url(history: true)]
    public $sortDir = 'DESC';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function setSortBy($sortByField)
    {
        if ($this->sortBy === $sortByField) {
            $this->sortDir = ($this->sortDir == "ASC") ? 'DESC' : "ASC";
            return;
        }
        $this->sortBy = $sortByField;
        $this->sortDir = 'DESC';
    }

    public $selectedProntuarioId;

    public function CreateProntuario($prontuarioId)
    {
        return redirect()->route('prontuario.create', ['id' => $prontuarioId]);
    }

    public function gerarPDF($prontuarioId)
    {
        return redirect()->route('prontuario.show', ['id' => $prontuarioId]);
    }


    public function render()
    {
        return view('livewire.prontuarios.search-prontuario', [
            'questionarios' => Questionario::search($this->search)
                // Filtra os questionários que têm um registro correspondente em 'prontuarios'
                ->whereHas('prontuario', function ($query) {
                    $query->whereNotNull('questionario_id'); // Apenas questionários que têm 'questionario_id' em prontuarios
                })
                ->when($this->sortBy, function ($query) {
                    if ($this->sortBy === 'user_name') {
                        $query->join('users', 'questionarios.user_id', '=', 'users.id')
                            ->orderBy('users.name', $this->sortDir);
                    } else {
                        $query->orderBy($this->sortBy, $this->sortDir);
                    }
                })
                ->when($this->sortBy, function ($query) {
                    if ($this->sortBy === 'paciente_nome') {
                        $query->join('pacientes', 'questionarios.paciente_id', '=', 'pacientes.id')
                            ->orderBy('pacientes.nome', $this->sortDir);
                    } else {
                        $query->orderBy($this->sortBy, $this->sortDir);
                    }
                })
                ->when($this->sortBy, function ($query) {
                    if ($this->sortBy === 'questionario_id') {
                        $query->join('questionarios', 'questionarios.id', '=', 'questionarios.id')
                            ->orderBy('questionarios.id', $this->sortDir);
                    } else {
                        $query->orderBy($this->sortBy, $this->sortDir);
                    }
                })
                ->orderBy($this->sortBy, $this->sortDir)
                ->paginate($this->perPage),
        ]);
    }
}
