<?php

namespace App\Livewire\Contatos;

use Livewire\Component;

class CreateContato extends Component
{
    public $nome, $email, $mensagem;
    public $user;

    public function mount(){
        
    }

    public function render()
    {
        return view('livewire.contatos.create-contato');
    }

    public function submitForm(){

    }
}
