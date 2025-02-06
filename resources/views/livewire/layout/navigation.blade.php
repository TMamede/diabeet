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

<nav x-data="{ open: false }" class="w-auto bg-gray-100 border-b border-gray-200" @click.away= "open = false">
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
                <div class="justify-between xl:space-x-8 sm:-my-px xl:ms-10 sm:flex-colum xl:mt-5 md:mt-5">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Início') }}
                    </x-nav-link>
                    @if (Auth::check() && Auth::user()->user_type === 'gerenciador')
                        <x-nav-link :href="route('enfermeiro.index')" :active="request()->routeIs('enfermeiro.index')" wire:navigate>
                            {{ __('Enfermeiro') }}
                        </x-nav-link>
                    @endif
                    <x-nav-link :href="route('paciente.index')" :active="request()->routeIs('paciente.index')" wire:navigate>
                        {{ __('Paciente') }}
                    </x-nav-link>
                    <x-nav-link :href="route('questionario.index')" :active="request()->routeIs('questionario.index')" wire:navigate>
                        {{ __('Questionário') }}
                    </x-nav-link>
                    <x-nav-link :href="route('prontuario.index')" :active="request()->routeIs('prontuario.index')" wire:navigate>
                        {{ __('Prontuário') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')" wire:navigate>
                        {{ __('Sobre Nós') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" wire:navigate>
                        {{ __('Contato') }}
                    </x-nav-link>
                    <x-nav-link :href="route('termos')" :active="request()->routeIs('termos')" wire:navigate>
                        {{ __('Termos de Uso') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="hidden mt-3 -me-80 xl:block">
                <button @click = "open = ! open"
                    class="inline-flex items-center justify-center p-2 text-indigo-900 transition duration-150 ease-in-out rounded-md hover:text-indigo-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                    </svg>


                </button>
            </div>


            <!--Barra de navegação direita mobile-->
            <div x-data="{ openRightMobile: false }">
                <!-- Trigger Button -->
                <button @click=" openRightMobile = ! openRightMobile"
                    class="top-0 z-50 inline-flex items-center justify-center mt-4 text-indigo-900 transition duration-150 ease-in-out rounded-md xl:hidden right-4 hover:text-indigo-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                    </svg>

                </button>

                <!-- Menu -->
                <div x-cloak x-show="openRightMobile" x-transition:enter="transition ease-in-out duration-300 transform"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in-out duration-300 transform"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                    class="fixed top-0 right-0 z-50 w-3/5 h-full bg-white shadow-lg xl:block">

                    <!-- Close Button -->
                    <button @click="openRightMobile= false" class="absolute top-4 right-4">
                        <svg class="w-6 h-6 text-gray-500 hover:text-gray-700" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div class="flex flex-col h-full pt-16 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="text-base font-medium text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                                x-on:profile-updated.window="name = $event.detail.name"></div>
                            <div class="text-sm font-medium text-gray-500">{{ auth()->user()->email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <x-responsive-nav-link :href="route('profile')" wire:navigate>
                                {{ __('Perfil') }}
                            </x-responsive-nav-link>

                            <x-responsive-nav-link :href="route('mapa')" wire:navigate>
                                {{ __('Mapa do Site') }}
                            </x-responsive-nav-link>

                            <button wire:click="logout" class="w-full text-start">
                                <x-responsive-nav-link>
                                    {{ __('Sair') }}
                                </x-responsive-nav-link>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- Responsive Settings Options -->
    <div x-cloak x-show="open" x-transition:enter="transition-transform ease-in-out duration-300"
        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition-transform ease-in-out duration-300" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed top-0 right-0 z-50 w-1/5 h-full overflow-hidden overflow-y-auto bg-white shadow-lg ">

        <!-- botão de fechar sidebar -->
        <button @click="open = false" class="absolute top-4 right-4">
            <svg class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="flex flex-col items-start justify-start h-full pt-4 pb-1 border-t border-gray-200 sm:w-full">
            <div class="px-4 mt-6">
                <div class="text-base font-medium text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                    x-on:profile-updated.window="name = $event.detail.name"></div>
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

    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
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
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')" wire:navigate>
                {{ __('Sobre Nós') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" wire:navigate>
                {{ __('Contato') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('termos')" :active="request()->routeIs('termos')" wire:navigate>
                {{ __('Termos de Uso') }}
            </x-responsive-nav-link>
        </div>

    </div>
</nav>
