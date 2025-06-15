<div>
    <!-- Navegação Mobile -->
    <div x-data="{ step: @entangle('currentStep'), mobileMenuOpen: false }">
        <div x-show.transition="step === 2" class="bg-stone-50">
            <!-- Botão Hamburguer -->
            <button @click="mobileMenuOpen = !mobileMenuOpen"
                class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md bg-stone-50 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 lg:hidden">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div x-show="mobileMenuOpen" class="fixed inset-0 z-40 lg:hidden" @click="mobileMenuOpen = false"></div>

            <!-- Menu lateral mobile -->
            <nav x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-x-full"
                x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 translate-x-0"
                x-transition:leave-end="opacity-0 -translate-x-full"
                class="fixed top-0 left-0 z-50 w-3/5 h-full bg-white border-gray-200 shadow-lg lg:hidden">

                <button @click="mobileMenuOpen = false" class="absolute top-4 left-4">
                    <svg class="w-6 h-6 text-gray-400 transition duration-150 ease-in-out bg-white rounded-md hover:text-gray-700 focus:outline-none lg:hidden"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <ul class="flex flex-col h-full p-6 space-y-4">
                    @foreach ([
        ['label' => 'Dados Sociodemográficos', 'method' => 'nextStepFirst', 'icon' => 'M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z'],
        ['label' => 'Histórico do Paciente', 'method' => 'nextStepSecond', 'icon' => 'M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25'],
        ['label' => 'Medicamentos', 'method' => 'nextStepThird', 'icon' => 'M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5'],
        ['label' => 'Resultados', 'method' => 'nextStepFourth', 'icon' => 'M9 7.5v9m6-9v9m-9-6h12M4.5 18.75h15a2.25 2.25 0 002.25-2.25v-9A2.25 2.25 0 0019.5 5.25h-15a2.25 2.25 0 00-2.25 2.25v9A2.25 2.25 0 004.5 18.75z'],
        ['label' => 'Unidade de Saúde', 'method' => 'nextStepFifth', 'icon' => 'M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12m-1.5 0v7.5A2.25 2.25 0 0118 21.75H6a2.25 2.25 0 01-2.25-2.25V12m16.5 0H4.5'],
    ] as $item)
                        <li>
                            <button @click="mobileMenuOpen = false" wire:click="{{ $item['method'] }}"
                                class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                                </svg>
                                <span class="flex-1 text-sm text-left sm:text-base">{{ $item['label'] }}</span>
                            </button>
                        </li>
                    @endforeach

                    <!-- Voltar -->
                    <li>
                        <button @click="mobileMenuOpen = false" wire:click="backToSearch"
                            class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                            <svg class="w-6 h-6 mr-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                            <span class="flex-1 text-sm text-left sm:text-base">Voltar ao menu pacientes</span>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Navegação Desktop -->
    <nav class="flex min-h-full p-6 bg-white lg:w-64 lg:block" :class="{ 'block': open, 'hidden': !open }">
        <ul class="space-y-4">
            @foreach ([
        ['label' => 'Dados Sociodemográficos', 'method' => 'nextStepFirst', 'icon' => 'M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z'],
        ['label' => 'Histórico do Paciente', 'method' => 'nextStepSecond', 'icon' => 'M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25'],
        ['label' => 'Medicamentos', 'method' => 'nextStepThird', 'icon' => 'M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5'],
        ['label' => 'Resultados', 'method' => 'nextStepFourth', 'icon' => 'M9 7.5v9m6-9v9m-9-6h12M4.5 18.75h15a2.25 2.25 0 002.25-2.25v-9A2.25 2.25 0 0019.5 5.25h-15a2.25 2.25 0 00-2.25 2.25v9A2.25 2.25 0 004.5 18.75z'],
        ['label' => 'Unidade de Saúde', 'method' => 'nextStepFifth', 'icon' => 'M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12m-1.5 0v7.5A2.25 2.25 0 0118 21.75H6a2.25 2.25 0 01-2.25-2.25V12m16.5 0H4.5'],
    ] as $item)
                <li>
                    <button wire:click="{{ $item['method'] }}"
                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                        <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                        </svg>
                        <span class="flex-1 text-left">{{ $item['label'] }}</span>
                    </button>
                </li>
            @endforeach

            <!-- Voltar -->
            <li>
                <button wire:click="backToSearch"
                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                    <svg class="w-6 h-6 mr-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span class="flex-1 text-left">Voltar</span>
                </button>
            </li>
        </ul>
    </nav>
</div>
