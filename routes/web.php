<?php

use App\Livewire\Pacientes\CreatePaciente;
use App\Livewire\Questionarios\CreateQuestionario;
use Illuminate\Support\Facades\Route;
use App\Livewire\Questionarios\IndexQuestionario;

Route::view('/', 'welcome');

Route::view('inicio', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('perfil-usuario', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('sobre', 'about')
    ->middleware(['auth'])
    ->name('about');

Route::view('contato', 'contact')
    ->middleware(['auth'])
    ->name('contact');

Route::view('termos-de-uso', 'termos')
    ->middleware(['auth'])
    ->name('termos');

Route::view('mapa-site', 'mapa')
    ->middleware(['auth'])
    ->name('mapa');

Route::view('questionario', 'questionario.index')
    ->middleware(['auth'])
    ->name('questionario.index');

Route::view('paciente', 'paciente.index')
    ->middleware(['auth'])
    ->name('paciente.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/paciente/criar', function () {
        return view('paciente.create');
    })->name('paciente.create');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/questionario/criar', function () {
        return view('questionario.create');
    })->name('questionario.create');
});

Route::view('prontuario', 'prontuario.index')
    ->middleware(['auth'])
    ->name('prontuario.index');


require __DIR__ . '/auth.php';
