<?php

namespace App\Livewire\Contatos;

use App\Models\Contato;
use Livewire\Component;

class CreateContato extends Component
{
    public $nome, $email, $mensagem;
    public $contato;


    public function render()
    {
        return view('livewire.contatos.create-contato');
    }

    public function validateContact(){
        $this->validate([
            'nome' => 'required|string|max:255',
            'email' => ['required', 'email'],
            'mensagem' => 'required|string',
        ]);
    }

    public function submitForm(){
        $this->validateContact();

        $contato = Contato::create([
            'nome' => $this->nome,
            'email' => $this->email,
            'mensagem' => $this->mensagem,
        ]);
        
        $contato->save();

        // Resetar o formulário ou redirecionar conforme necessário
        session()->flash('message', 'Mensagem Enviada!');
        return redirect()->route('contact');

    }
}
