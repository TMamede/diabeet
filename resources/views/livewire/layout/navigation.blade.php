<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="bg-gray-100 border-b border-gray-200" @click.away= "open = false">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block w-auto h-12 text-gray-800 fill-current" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Início') }}
                    </x-nav-link>
                    <x-nav-link :href="route('paciente.index')" :active="request()->routeIs('paciente.index')" wire:navigate>
                        {{ __('Paciente') }}
                    </x-nav-link>
                    <x-nav-link :href="route('questionario.index')" :active="request()->routeIs('questionario.index')" wire:navigate>
                        {{ __('Questionário') }}
                    </x-nav-link>
                    <x-nav-link :href="route('prontuario.index')" :active="request()->routeIs('prontuario.index')" wire:navigate>
                        {{ __('Prontuário') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" wire:navigate>
                        {{ __('Contato') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')" wire:navigate>
                        {{ __('Sobre') }}
                    </x-nav-link>
                    <x-nav-link :href="route('termos')" :active="request()->routeIs('termos')" wire:navigate>
                        {{ __('Termos de Uso') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                            <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>

                            <div class="ms-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')" wire:navigate>
                            {{ __('Perfil') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('mapa')" wire:navigate>
                            {{ __('Mapa do site') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link>
                                {{ __('Sair') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -me-20">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>



        <!-- Responsive Settings Options -->
    <div x-cloak x-show="open"
    x-transition:enter="transition-transform ease-in-out duration-300" 
    x-transition:enter-start="translate-x-full" 
    x-transition:enter-end="translate-x-0" 
    x-transition:leave="transition-transform ease-in-out duration-300" 
    x-transition:leave-start="translate-x-0" 
    x-transition:leave-end="translate-x-full" class="fixed top-0 right-0 z-50 w-full h-full overflow-hidden overflow-y-auto bg-white shadow-lg sm:w-64">
    
        <!-- botão de fechar sidebar -->
        <button @click="open = false" class="absolute top-4 right-4">
        <svg class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
        </button>
        
        <div class="flex flex-col items-start justify-start h-full pt-4 pb-1 border-t border-gray-200">
            <div class="px-4 mt-6">
                <div class="text-base font-medium text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="text-sm font-medium text-gray-500">{{ auth()->user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    {{ __('Perfil') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('mapa')" wire:navigate>
                    {{ __('Mapa do Site') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link>
                        {{ __('Sair') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
    </div>
    <!-- Responsive Navigation Menu -->


    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Início') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('paciente.index')" :active="request()->routeIs('paciente.index')" wire:navigate>
                {{ __('Paciente') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('questionario.index')" :active="request()->routeIs('questionario.index')" wire:navigate>
                {{ __('Questionário') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('prontuario.index')" :active="request()->routeIs('prontuario.index')" wire:navigate>
                {{ __('Prontuário') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" wire:navigate>
                {{ __('Contato') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')" wire:navigate>
                {{ __('Sobre') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('termos')" :active="request()->routeIs('termos')" wire:navigate>
                {{ __('Termos de Uso') }}
            </x-responsive-nav-link>
        </div>

    </div>
</nav>
