<?php

namespace App\Livewire\Layout;

use Livewire\Component;
use App\Livewire\Actions\Logout as LogoutAction;

class Navigation extends Component
{
    public function logout(LogoutAction $logout)
    {
        // Usa a Action que você já tem
        $logout();

        // Depois do logout, redireciona pra rota que você quiser
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.layout.navigation');
    }
}
