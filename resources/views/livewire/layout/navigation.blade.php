<nav x-data="{ open: false }" @keydown.escape.window="open = false" class="relative bg-gray-100 border-b border-gray-200">
    <!-- Barra principal -->
    <div class="px-4 mx-auto max-w-8xl sm:px-6 lg:px-12">
        <div class="flex items-center justify-between h-20">
            <!-- ESQUERDA: logo + links desktop -->
            <div class="flex items-center gap-3">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block w-auto text-gray-800 fill-current h-14" />
                    </a>
                </div>

                <!-- Links desktop -->
                <div class="hidden space-x-10 lg:-my-px lg:ms-12 lg:flex">
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
                        {{ __('Avaliação de enfermagem') }}
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

            <!-- DIREITA: dropdown usuário (desktop) + hambúrguer (mobile) -->
            <div class="flex items-center gap-3">
                <!-- Dropdown de usuário (desktop) -->
                <div class="hidden lg:flex lg:items-center lg:ms-8">
                    <x-dropdown align="right">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-4 py-3 text-sm font-medium leading-4 text-gray-600 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-lg shadow-sm hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <div class="flex items-center min-w-0 gap-3">
                                    @if (auth()->user()->profile_photo ?? false)
                                        <img class="flex-shrink-0 object-cover border border-gray-200 rounded-full w-9 h-9"
                                            src="{{ Storage::url(auth()->user()->profile_photo) }}"
                                            alt="{{ auth()->user()->name }}">
                                    @else
                                        <div
                                            class="flex items-center justify-center flex-shrink-0 text-white bg-indigo-500 rounded-full w-9 h-9">
                                            <span class="text-sm font-medium">
                                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                            </span>
                                        </div>
                                    @endif
                                    <div class="min-w-0">
                                        <div class="font-medium leading-tight text-gray-800 truncate"
                                            x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name"
                                            x-on:profile-updated.window="name = $event.detail.name">
                                            {{ auth()->user()->name }}
                                        </div>
                                        <div class="text-xs text-gray-500 truncate">
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
                            <div class="p-2 w-300">
                                <div class="flex items-center gap-3 mb-4">
                                    @if (auth()->user()->profile_photo ?? false)
                                        <img class="flex-shrink-0 object-cover border border-gray-200 rounded-full w-9 h-9"
                                            src="{{ Storage::url(auth()->user()->profile_photo) }}"
                                            alt="{{ auth()->user()->name }}">
                                    @else
                                        <div
                                            class="flex items-center justify-center flex-shrink-0 text-white bg-indigo-500 rounded-full w-9 h-9">
                                            <span class="text-sm font-medium">
                                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                            </span>
                                        </div>
                                    @endif

                                    <div class="min-w-0">
                                        <div class="font-medium leading-tight text-gray-900" x-data="{ name: '{{ auth()->user()->name }}' }"
                                            x-text="name" x-on:profile-updated.window="name = $event.detail.name">
                                            {{ auth()->user()->name }}
                                        </div>
                                        <div class="text-sm text-gray-500 truncate">{{ auth()->user()->email }}</div>
                                    </div>
                                </div>

                                <x-dropdown-link :href="route('profile')" wire:navigate>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <span>{{ __('Perfil') }}</span>
                                    </div>
                                </x-dropdown-link>

                                <x-dropdown-link :href="route('mapa')" wire:navigate>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                                        </svg>
                                        <span>{{ __('Mapa do site') }}</span>
                                    </div>
                                </x-dropdown-link>

                                <div class="my-2 border-t border-gray-100"></div>

                                <button wire:click="logout" class="w-full text-start">
                                    <x-dropdown-link>
                                        <div class="flex items-center gap-2 text-red-600">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                            </svg>
                                            <span>{{ __('Sair') }}</span>
                                        </div>
                                    </x-dropdown-link>
                                </button>
                            </div>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Botão Hambúrguer (mobile) à direita -->
                <button
                    type="button"
                    class="p-2 -m-2 rounded-md lg:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    @click="open = true"
                    aria-label="Abrir menu"
                    :aria-expanded="open.toString()"
                    aria-controls="mobile-sidebar"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- ============ SIDEBAR OFF-CANVAS (mobile) ============ -->
    <!-- Overlay -->
    <div x-show="open" x-transition.opacity class="fixed inset-0 z-40 bg-black/40 lg:hidden" @click="open = false" aria-hidden="true"></div>

    <!-- Painel lateral (direita) -->
    <aside
        id="mobile-sidebar"
        x-show="open"
        x-transition:enter="transition transform ease-out duration-200"
        x-transition:enter-start="translate-x-full opacity-0"
        x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transition transform ease-in duration-150"
        x-transition:leave-start="translate-x-0 opacity-100"
        x-transition:leave-end="translate-x-full opacity-0"
        class="fixed inset-y-0 right-0 z-50 overflow-y-auto bg-white shadow-xl w-72 lg:hidden"
        @click.away="open = false"
        role="dialog"
        aria-label="Menu"
    >
        <!-- Cabeçalho da sidebar -->
        <div class="flex items-center justify-between h-20 px-4 border-b border-gray-200">
            <div class="flex items-center gap-3 mt-4 ml-3">
                @if (auth()->user()->profile_photo ?? false)
                    <img class="object-cover w-10 h-10 border border-gray-200 rounded-full"
                        src="{{ Storage::url(auth()->user()->profile_photo) }}" alt="{{ auth()->user()->name }}">
                @else
                    <div class="flex items-center justify-center w-10 h-10 bg-indigo-500 rounded-full">
                        <span class="text-sm font-medium text-white">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </span>
                    </div>
                @endif
                <div class="min-w-0">
                    <div class="text-sm font-medium text-gray-900" x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name"
                        x-on:profile-updated.window="name = $event.detail.name">
                        {{ auth()->user()->name }}
                    </div>
                    <div class="text-xs text-gray-500 truncate">{{ auth()->user()->email }}</div>
                    <div class="text-xs text-gray-400">
                        {{ auth()->user()->user_type === 'gerenciador' ? 'Gerenciador' : 'Enfermeiro' }}
                    </div>
                </div>
            </div>
            <button class="p-2 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                @click="open = false" aria-label="Fechar menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Links da sidebar (mesmos do menu) -->
        <nav class="px-4 py-4 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate @click="open=false">
                {{ __('Início') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('paciente.index')" :active="request()->routeIs('paciente.index')" wire:navigate @click="open=false">
                {{ __('Paciente') }}
            </x-responsive-nav-link>
            @if (Auth::check() && Auth::user()->user_type === 'gerenciador')
                <x-responsive-nav-link :href="route('enfermeiro.index')" :active="request()->routeIs('enfermeiro.index')" wire:navigate @click="open=false">
                    {{ __('Enfermeiro') }}
                </x-responsive-nav-link>
            @endif
            <x-responsive-nav-link :href="route('questionario.index')" :active="request()->routeIs('questionario.index')" wire:navigate @click="open=false">
                {{ __('Avaliação de enfermagem') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('prontuario.index')" :active="request()->routeIs('prontuario.index')" wire:navigate @click="open=false">
                {{ __('Prescrição') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" wire:navigate @click="open=false">
                {{ __('Contato') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')" wire:navigate @click="open=false">
                {{ __('Sobre Nós') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('termos')" :active="request()->routeIs('termos')" wire:navigate @click="open=false">
                {{ __('Termos de Uso') }}
            </x-responsive-nav-link>
        </nav>

        <!-- Perfil + Ações -->
        <div class="px-4 pt-4 pb-6 mt-2 border-t border-gray-200">
            <div class="mt-4 space-y-1">
                <a href="{{ route('profile') }}" wire:navigate @click="open=false"
                    class="flex items-center gap-2 px-3 py-2 text-sm rounded-md hover:bg-gray-100">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>{{ __('Perfil') }}</span>
                </a>

                <a href="{{ route('mapa') }}" wire:navigate @click="open=false"
                    class="flex items-center gap-2 px-3 py-2 text-sm rounded-md hover:bg-gray-100">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                    </svg>
                    <span>{{ __('Mapa do Site') }}</span>
                </a>

                <button wire:click="logout"
                    class="flex items-center w-full gap-2 px-3 py-2 text-sm text-red-600 rounded-md hover:bg-red-50">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span>{{ __('Sair') }}</span>
                </button>
            </div>
        </div>
    </aside>
</nav>
