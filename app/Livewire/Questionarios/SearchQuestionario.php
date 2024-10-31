<?php

namespace App\Livewire\Questionarios;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\Questionario;
use Illuminate\Support\Facades\Auth;

class SearchQuestionario extends Component
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

    public $selectedQuestionarioId;

    public function SelectedQuestionario($questionarioId){
        $this->selectedQuestionarioId = $questionarioId;

        // Opcional: você pode emitir um evento para abrir o componente `ShowQuestionario`
        $this->emit('loadQuestionario', $questionarioId);
    }

    public function render()
    {
        return view(
            'livewire.questionarios.search-questionario',
            [
                'questionarios' => Questionario::search($this->search)
                    ->where('user_id', Auth::id())
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
                        if ($this->sortBy === 'unidade_nome') {
                            $query->join('unidade_saudes', 'questionarios.unidade_saude_id', '=', 'unidade_saudes.id')
                                ->orderBy('unidade_saudes.nome', $this->sortDir);
                        } else {
                            $query->orderBy($this->sortBy, $this->sortDir);
                        }
                    })
                    ->orderBy($this->sortBy, $this->sortDir)
                    ->paginate($this->perPage),
            ]
        ); 
    }
}
