<?php

namespace App\Livewire\Pacientes;

use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class SearchPaciente extends Component
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

    public $currentStep = 1;
    public $paciente = " ";

    public $pacienteIdToDelete = null;
    
    public function deletePaciente()
    {
        // Verifica se o usuário autenticado é um gerenciador (ou tem permissão para excluir)
        if (Auth::check() && Auth::user()->user_type === 'gerenciador') {
            $paciente = Paciente::find($this->pacienteIdToDelete); // Usa a variável pública

            if ($paciente) {
                $paciente->delete();
                session()->flash('message', 'paciente excluído com sucesso.');
            } else {
                session()->flash('error', 'paciente não encontrado.');
            }
        } else {
            session()->flash('error', 'Você não tem permissão para excluir pacientes.');
        }

        $this->pacienteIdToDelete = null; // Reseta o ID após a exclusão
    }

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


    public function render()
    {
        return view(
            'livewire.pacientes.search-paciente',
            data: [
                'pacientes' => Paciente::search($this->search) // Filtra pelos pacientes do usuário autenticado
                    ->when($this->sortBy, function ($query) {
                        if ($this->sortBy === 'user_name') {
                            $query->join('users', 'pacientes.user_id', '=', 'users.id')
                                ->orderBy('users.name', $this->sortDir);
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
