<?php

namespace App\Livewire\Questionarios;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\Questionario;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;

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
        $this->dispatch('questionario-selected', questionarioId: $questionarioId);
    }
    
    public $questionarioIdToDelete = null;
    public function deleteQuestionario()
    {
        // Verifica se o usuário autenticado é um gerenciador (ou tem permissão para excluir)
        if (Auth::check() && Auth::user()->user_type === 'gerenciador') {
            $questionario = Questionario::find($this->questionarioIdToDelete); // Usa a variável pública

            if ($questionario) {
                $questionario->delete();
                session()->flash('message', 'questionario excluído com sucesso.');
            } else {
                session()->flash('error', 'questionario não encontrado.');
            }
        } else {
            session()->flash('error', 'Você não tem permissão para excluir questionarios.');
        }

        $this->questionarioIdToDelete = null; // Reseta o ID após a exclusão
    }


    public function render()
    {
        return view(
            'livewire.questionarios.search-questionario',
            [
                'questionarios' => Questionario::search($this->search)
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
                    ->orderBy($this->sortBy, $this->sortDir)
                    ->paginate($this->perPage),
            ]
        ); 
    }
}