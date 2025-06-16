<div>
    <!-- Navegação Mobile -->
    <div x-data="{ step: @entangle('currentStep'), mobileMenuOpen: false }">
        <div x-show.transition="step === 2" class="relative">
            <!-- Background com gradiente similar à página inicial -->
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 pointer-events-none">
            </div>

            <!-- Botão Hamburguer otimizado -->
            <div class="relative z-10 p-4 lg:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                    class="inline-flex items-center justify-center p-3 text-indigo-600 transition-transform duration-150 transform will-change-transform bg-white/90 backdrop-blur-sm border border-indigo-100 rounded-2xl shadow-lg hover:scale-105 hover:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-200">
                    <svg class="w-6 h-6 transition-transform duration-150 will-change-transform"
                        :class="{ 'rotate-90': mobileMenuOpen }" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': mobileMenuOpen, 'inline-flex': !mobileMenuOpen }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !mobileMenuOpen, 'inline-flex': mobileMenuOpen }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Overlay otimizado -->
            <div x-show="mobileMenuOpen" x-transition:enter="transition-opacity ease-out duration-200"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-in duration-150" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 z-40 bg-black/20 backdrop-blur-sm lg:hidden will-change-opacity"
                @click="mobileMenuOpen = false"></div>

            <!-- Menu lateral mobile otimizado -->
            <nav x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-250"
                x-transition:enter-start="opacity-0 -translate-x-full"
                x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-x-0"
                x-transition:leave-end="opacity-0 -translate-x-full"
                class="fixed top-0 left-0 z-50 w-80 h-full bg-gradient-to-br from-white via-indigo-50/30 to-purple-50/20 backdrop-blur-xl border-r border-white/20 shadow-2xl lg:hidden will-change-transform">

                <!-- Botão fechar mobile -->
                <div class="flex justify-end p-4">
                    <button @click="mobileMenuOpen = false"
                        class="p-2 text-indigo-400 transition-colors duration-150 rounded-xl hover:text-indigo-600 hover:bg-indigo-100/50">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Menu items mobile otimizado -->
                <div class="flex flex-col h-full p-6 space-y-3 overflow-y-auto">
                    @foreach ([
        ['label' => 'Dados Sociodemográficos', 'method' => 'nextStepFirst', 'icon' => 'M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z', 'color' => 'indigo'],
        ['label' => 'Histórico do Paciente', 'method' => 'nextStepSecond', 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'color' => 'purple'],
        ['label' => 'Medicamentos', 'method' => 'nextStepThird', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'color' => 'pink'],
        ['label' => 'Resultados', 'method' => 'nextStepFourth', 'icon' => 'M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6', 'color' => 'emerald'],
        ['label' => 'Unidade de Saúde', 'method' => 'nextStepFifth', 'icon' => 'M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z', 'color' => 'yellow'],
    ] as $item)
                        <li class="list-none">
                            <button @click="mobileMenuOpen = false" wire:click="{{ $item['method'] }}"
                                class="group flex items-center w-full p-4 text-left transition-all duration-200 transform will-change-transform bg-white/60 backdrop-blur-sm border border-{{ $item['color'] }}-100/50 rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-1 hover:bg-white/80 hover:border-{{ $item['color'] }}-200 focus:outline-none focus:ring-2 focus:ring-{{ $item['color'] }}-200/50">
                                <div
                                    class="flex items-center justify-center w-12 h-12 mr-4 transition-transform duration-200 will-change-transform bg-gradient-to-br from-{{ $item['color'] }}-100 to-{{ $item['color'] }}-200 rounded-xl group-hover:from-{{ $item['color'] }}-200 group-hover:to-{{ $item['color'] }}-300 group-hover:scale-110">
                                    <svg class="w-6 h-6 text-{{ $item['color'] }}-700"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                                    </svg>
                                </div>
                                <span
                                    class="font-semibold text-gray-800 transition-colors duration-150 group-hover:text-{{ $item['color'] }}-700">{{ $item['label'] }}</span>
                            </button>
                        </li>
                    @endforeach

                    <!-- Botão Voltar -->
                    <li class="pt-4 mt-4 border-t border-indigo-100/50 list-none">
                        <button @click="mobileMenuOpen = false" wire:click="backToSearch"
                            class="group flex items-center w-full p-4 text-left transition-all duration-200 transform will-change-transform bg-gradient-to-r from-gray-50 to-gray-100/80 backdrop-blur-sm border border-gray-200/50 rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-1 hover:from-gray-100 hover:to-gray-200/80 focus:outline-none focus:ring-2 focus:ring-gray-200/50">
                            <div
                                class="flex items-center justify-center w-12 h-12 mr-4 transition-transform duration-200 will-change-transform bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl group-hover:from-gray-200 group-hover:to-gray-300 group-hover:scale-110">
                                <svg class="w-6 h-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                            </div>
                            <span
                                class="font-semibold text-gray-800 transition-colors duration-150 group-hover:text-gray-700">Voltar
                                ao menu
                                pacientes</span>
                        </button>
                    </li>
                </div>
            </nav>
        </div>
    </div>

    <!-- Navegação Desktop -->
    <div class="relative">
        <!-- Background decorativo otimizado -->
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 pointer-events-none">
        </div>
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute bg-indigo-200 rounded-full top-10 left-10 w-32 h-32 mix-blend-multiply filter blur-xl opacity-20 will-change-transform">
            </div>
            <div
                class="absolute bg-purple-200 rounded-full opacity-15 bottom-10 right-10 w-40 h-40 mix-blend-multiply filter blur-xl will-change-transform">
            </div>
        </div>

        <nav class="relative z-10 flex min-h-full p-8 bg-white/80 backdrop-blur-sm border-r border-white/20 shadow-xl lg:w-80 lg:block"
            :class="{ 'block': open, 'hidden': !open }">
            <div class="w-full">
                <ul class="space-y-4">
                    @foreach ([
        ['label' => 'Dados Sociodemográficos', 'method' => 'nextStepFirst', 'icon' => 'M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z', 'color' => 'indigo'],
        ['label' => 'Histórico do Paciente', 'method' => 'nextStepSecond', 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'color' => 'purple'],
        ['label' => 'Medicamentos', 'method' => 'nextStepThird', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'color' => 'pink'],
        ['label' => 'Resultados', 'method' => 'nextStepFourth', 'icon' => 'M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6', 'color' => 'emerald'],
        ['label' => 'Unidade de Saúde', 'method' => 'nextStepFifth', 'icon' => 'M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z', 'color' => 'yellow'],
    ] as $item)
                        <li>
                            <button wire:click="{{ $item['method'] }}"
                                class="group flex items-center w-full p-5 text-left transition-all duration-200 transform will-change-transform bg-white/70 backdrop-blur-sm border border-{{ $item['color'] }}-100/50 rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-2 hover:bg-white/90 hover:border-{{ $item['color'] }}-200 focus:outline-none focus:ring-2 focus:ring-{{ $item['color'] }}-200/50">
                                <div
                                    class="flex items-center justify-center w-14 h-14 mr-4 transition-all duration-200 will-change-transform bg-gradient-to-br from-{{ $item['color'] }}-100 to-{{ $item['color'] }}-200 rounded-2xl group-hover:from-{{ $item['color'] }}-200 group-hover:to-{{ $item['color'] }}-300 group-hover:scale-110 group-hover:rotate-3">
                                    <svg class="w-7 h-7 text-{{ $item['color'] }}-700"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <span
                                        class="font-semibold text-gray-800 transition-colors duration-150 group-hover:text-{{ $item['color'] }}-700">{{ $item['label'] }}</span>
                                </div>
                            </button>
                        </li>
                    @endforeach

                    <!-- Botão Voltar -->
                    <li class="pt-6 mt-6 border-t border-indigo-100/50">
                        <button wire:click="backToSearch"
                            class="group flex items-center w-full p-5 text-left transition-all duration-200 transform will-change-transform bg-gradient-to-r from-gray-50/90 to-gray-100/70 backdrop-blur-sm border border-gray-200/50 rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-2 hover:from-gray-100/90 hover:to-gray-200/70 focus:outline-none focus:ring-2 focus:ring-gray-200/50">
                            <div
                                class="flex items-center justify-center w-14 h-14 mr-4 transition-all duration-200 will-change-transform bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl group-hover:from-gray-200 group-hover:to-gray-300 group-hover:scale-110 group-hover:-rotate-3">
                                <svg class="w-7 h-7 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <span
                                    class="font-semibold text-gray-800 transition-colors duration-150 group-hover:text-gray-700">Voltar
                                    ao menu pacientes</span>
                            </div>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
