<?php

namespace App\Livewire\Enfermeiros;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ShowEnfermeiro extends Component
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

    public $enfermeiroIdToDelete = null;

    public function deleteEnfermeiro()
    {
        // Verifica se o usuário autenticado é um gerenciador (ou tem permissão para excluir)
        if (Auth::check() && Auth::user()->user_type === 'gerenciador') {
            $enfermeiro = User::find($this->enfermeiroIdToDelete); // Usa a variável pública

            if ($enfermeiro) {
                $enfermeiro->delete();
                session()->flash('message', 'Enfermeiro excluído com sucesso.');
            } else {
                session()->flash('error', 'Enfermeiro não encontrado.');
            }
        } else {
            session()->flash('error', 'Você não tem permissão para excluir enfermeiros.');
        }

        $this->enfermeiroIdToDelete = null; // Reseta o ID após a exclusão
    }

    public function render()
    {
        return view('livewire.enfermeiros.show-enfermeiro', [
            'enfermeiros' => User::search($this->search)
                ->where('user_type', 'enfermeiro')
                ->orderBy($this->sortBy, $this->sortDir)
                ->paginate($this->perPage),
        ]);
    }
}
