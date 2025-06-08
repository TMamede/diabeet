<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="bg-gray-100 border-b border-gray-200">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-8xl sm:px-6 lg:px-12">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block w-auto text-gray-800 fill-current h-14" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-10 sm:-my-px sm:ms-12 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Início') }}
                    </x-nav-link>
                    <x-nav-link :href="route('paciente.index')" :active="request()->routeIs('paciente.index')" wire:navigate>
                        {{ __('Paciente') }}
                    </x-nav-link>
                    @if (Auth::check() && Auth::user()->user_type === 'gerenciador')
                        <x-nav-link :href="route('enfermeiro.index')" :active="request()->routeIs('enfermeiro.index')" wire:navigate>
                            {{ __('Enfermeiro') }}
                        </x-nav-link>
                    @endif
                    <x-nav-link :href="route('questionario.index')" :active="request()->routeIs('questionario.index')" wire:navigate>
                        {{ __('Questionário') }}
                    </x-nav-link>
                    <x-nav-link :href="route('prontuario.index')" :active="request()->routeIs('prontuario.index')" wire:navigate>
                        {{ __('Prescrição') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" wire:navigate>
                        {{ __('Contato') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')" wire:navigate>
                        {{ __('Sobre Nós') }}
                    </x-nav-link>
                    <x-nav-link :href="route('termos')" :active="request()->routeIs('termos')" wire:navigate>
                        {{ __('Termos de Uso') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-8">
                <x-dropdown align="right" width="64">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-4 py-3 text-sm font-medium leading-4 text-gray-600 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-lg shadow-sm hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <!-- Profile Photo -->
                            <div class="flex items-center space-x-3">
                                @if (auth()->user()->profile_photo_path ?? false)
                                    <img class="object-cover w-8 h-8 border-2 border-gray-200 rounded-full"
                                        src="{{ Storage::url(auth()->user()->profile_photo_path) }}"
                                        alt="{{ auth()->user()->name }}">
                                @else
                                    <!-- Default Avatar -->
                                    <div class="flex items-center justify-center w-8 h-8 bg-indigo-500 rounded-full">
                                        <span class="text-sm font-medium text-white">
                                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                        </span>
                                    </div>
                                @endif

                                <div class="text-left">
                                    <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                                        x-on:profile-updated.window="name = $event.detail.name" class="font-medium">
                                    </div>
                                    <div class="text-xs text-gray-500">
                                        {{ auth()->user()->user_type === 'gerenciador' ? 'Gerenciador' : 'Enfermeiro' }}
                                    </div>
                                </div>
                            </div>

                            <div class="ms-2">
                                <svg class="w-4 h-4 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- User Info Header -->
                        <div class="px-4 py-3 border-b border-gray-100">
                            <div class="flex items-center space-x-3">
                                @if (auth()->user()->profile_photo_path ?? false)
                                    <img class="object-cover w-10 h-10 border-2 border-gray-200 rounded-full"
                                        src="{{ Storage::url(auth()->user()->profile_photo_path) }}"
                                        alt="{{ auth()->user()->name }}">
                                @else
                                    <div class="flex items-center justify-center w-10 h-10 bg-indigo-500 rounded-full">
                                        <span class="text-lg font-medium text-white">
                                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                        </span>
                                    </div>
                                @endif
                                <div>
                                    <div class="font-medium text-gray-900" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                                        x-on:profile-updated.window="name = $event.detail.name"></div>
                                    <div class="text-sm text-gray-500">{{ auth()->user()->email }}</div>
                                </div>
                            </div>
                        </div>

                        <x-dropdown-link :href="route('profile')" wire:navigate>
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span>{{ __('Perfil') }}</span>
                            </div>
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('mapa')" wire:navigate>
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                                    </path>
                                </svg>
                                <span>{{ __('Mapa do site') }}</span>
                            </div>
                        </x-dropdown-link>

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link>
                                <div class="flex items-center space-x-2 text-red-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                    <span>{{ __('Sair') }}</span>
                                </div>
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Início') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('paciente.index')" :active="request()->routeIs('paciente.index')" wire:navigate>
                {{ __('Paciente') }}
            </x-responsive-nav-link>
            @if (Auth::check() && Auth::user()->user_type === 'gerenciador')
                <x-responsive-nav-link :href="route('enfermeiro.index')" :active="request()->routeIs('enfermeiro.index')" wire:navigate>
                    {{ __('Enfermeiro') }}
                </x-responsive-nav-link>
            @endif
            <x-responsive-nav-link :href="route('questionario.index')" :active="request()->routeIs('questionario.index')" wire:navigate>
                {{ __('Questionário') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('prontuario.index')" :active="request()->routeIs('prontuario.index')" wire:navigate>
                {{ __('Prescrição') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" wire:navigate>
                {{ __('Contato') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')" wire:navigate>
                {{ __('Sobre Nós') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('termos')" :active="request()->routeIs('termos')" wire:navigate>
                {{ __('Termos de Uso') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <!-- User Profile Section Mobile -->
            <div class="px-4 py-3 bg-gray-50">
                <div class="flex items-center space-x-4">
                    @if (auth()->user()->profile_photo_path ?? false)
                        <img class="object-cover w-12 h-12 border-2 border-gray-200 rounded-full"
                            src="{{ Storage::url(auth()->user()->profile_photo_path) }}"
                            alt="{{ auth()->user()->name }}">
                    @else
                        <div class="flex items-center justify-center w-12 h-12 bg-indigo-500 rounded-full">
                            <span class="text-lg font-medium text-white">
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                            </span>
                        </div>
                    @endif
                    <div>
                        <div class="text-base font-medium text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                            x-on:profile-updated.window="name = $event.detail.name"></div>
                        <div class="text-sm font-medium text-gray-500">{{ auth()->user()->email }}</div>
                        <div class="text-xs text-gray-400">
                            {{ auth()->user()->user_type === 'gerenciador' ? 'Gerenciador' : 'Enfermeiro' }}</div>
                    </div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span>{{ __('Perfil') }}</span>
                    </div>
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('mapa')" wire:navigate>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                            </path>
                        </svg>
                        <span>{{ __('Mapa do Site') }}</span>
                    </div>
                </x-responsive-nav-link>

                <!-- Authentication -->
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link>
                        <div class="flex items-center space-x-3 text-red-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            <span>{{ __('Sair') }}</span>
                        </div>
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
    </div>
</nav>
