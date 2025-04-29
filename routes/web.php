<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pacientes\ShowPaciente;
use App\Livewire\Prontuarios\CreateProntuario;
use App\Livewire\Questionarios\ShowQuestionario;
use App\Http\Controllers\ProntuarioPDFController;
use App\Livewire\Prontuarios\SearchProntuario;

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

Route::get('/enfermeiro', function () {
    if (Auth::check() && Auth::user()->user_type === 'gerenciador') {
        return view('enfermeiro.index'); // Retorne a view específica
    }
    return redirect()->route('dashboard'); // Redireciona para uma página de acesso negado
})->name('enfermeiro.index');

Route::middleware(['auth'])->group(function () {
    Route::get(
        '/paciente/{id}',
        ShowPaciente::class
    )->name('paciente.show');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/questionario/{id}', ShowQuestionario::class)->name('questionario.show');
});

Route::get('/prontuarios/create/{id?}', CreateProntuario::class)->name('prontuario.create');

Route::view('prontuario', 'prontuario.index')
    ->middleware(['auth'])
    ->name('prontuario.index');


Route::get('/prontuario/paciente/{paciente}', SearchProntuario::class)
    ->middleware(['auth'])
    ->name('prontuario.paciente');

Route::get('/prontuario/{id}/pdf', [ProntuarioPDFController::class, 'gerarPDF'])
    ->name('prontuario.pdf');

require __DIR__ . '/auth.php';
