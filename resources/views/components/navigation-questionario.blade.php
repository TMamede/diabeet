<!-- Navegação Mobile -->
<div x-data="{ step: @entangle('currentStep'), mobileMenuOpen: false }">
    <div x-show="step === 2" class="relative">
        <!-- Background simplificado -->
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-purple-50"></div>

        <!-- Botão Hamburguer -->
        <div class="relative z-10 p-4 lg:hidden">
            <button @click="mobileMenuOpen = !mobileMenuOpen"
                class="flex items-center justify-center p-3 text-indigo-600 bg-white border border-indigo-100 rounded-xl shadow-md hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-indigo-200">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': mobileMenuOpen, 'block': !mobileMenuOpen }" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{ 'hidden': !mobileMenuOpen, 'block': mobileMenuOpen }" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Overlay -->
        <div x-show="mobileMenuOpen" x-transition.opacity class="fixed inset-0 z-40 bg-black bg-opacity-25 lg:hidden"
            @click="mobileMenuOpen = false"></div>

        <!-- Menu lateral mobile -->
        <nav x-show="mobileMenuOpen" x-transition:enter="transform transition ease-out duration-200"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition ease-in duration-150" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="fixed top-0 left-0 z-50 w-80 h-full bg-white border-r border-gray-200 shadow-xl lg:hidden">

            <!-- Header do menu -->
            <div class="flex items-center justify-between p-4 border-b border-gray-100">
                <h3 class="text-lg font-semibold text-gray-800">Questionário</h3>
                <button @click="mobileMenuOpen = false"
                    class="p-2 text-gray-400 rounded-lg hover:text-gray-600 hover:bg-gray-100">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Menu items -->
            <div class="flex flex-col p-4 space-y-2 overflow-y-auto">
                <!-- Dados do Paciente -->
                <button @click="mobileMenuOpen = false" wire:click="nextStepFirst"
                    class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                    <div class="flex items-center justify-center w-10 h-10 mr-3 bg-indigo-100 rounded-lg">
                        <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16.06 18.307A7.465 7.465 0 0 1 12 19.5a7.465 7.465 0 0 1-4.06-1.193 4.501 4.501 0 0 1 8.12 0Zm1.195-.955A5.998 5.998 0 0 0 12 14.25a5.998 5.998 0 0 0-5.255 3.102 7.5 7.5 0 1 1 10.51 0ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 0a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Zm0 1.5A3.75 3.75 0 1 0 12 6a3.75 3.75 0 0 0 0 7.5Z" />
                        </svg>
                    </div>
                    <span class="font-medium">Dados do Paciente</span>
                </button>

                <!-- Necessidades Biológicas -->
                <button @click="mobileMenuOpen = false" wire:click="nextStepSecond"
                    class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-purple-50 hover:text-purple-700">
                    <div class="flex items-center justify-center w-10 h-10 mr-3 bg-purple-100 rounded-lg">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.5 9.457a4.207 4.207 0 0 1 6.996-3.15l.096.085.383.383.025-.022.025.022.383-.383.096-.085a4.207 4.207 0 0 1 5.946 5.931l-.185.197L12 18.7l-3.97-3.97-1.06 1.061 5.03 5.03 7.342-7.341.216-.23.008-.009a5.707 5.707 0 0 0-7.497-8.494l-.07-.068-.068.068A5.707 5.707 0 0 0 3 9.457a5.7 5.7 0 0 0 1.428 3.79l1.123-.994A4.2 4.2 0 0 1 4.5 9.457Zm8.25 2.982-3-3-4.81 4.811H3v1.5h2.56l4.19-4.19 3 3L15.31 12h1.94v-1.5h-2.56l-1.94 1.94Z" />
                        </svg>
                    </div>
                    <span class="font-medium">Necessidades Biológicas</span>
                </button>

                <!-- Necessidades Sociais -->
                <button @click="mobileMenuOpen = false" wire:click="nextStepThird"
                    class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-pink-50 hover:text-pink-700">
                    <div class="flex items-center justify-center w-10 h-10 mr-3 bg-pink-100 rounded-lg">
                        <svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3 18a6.002 6.002 0 0 1 8.018-5.652c.343.122.671.275.982.455A5.965 5.965 0 0 1 15 12a6.002 6.002 0 0 1 6 6v3h-5.25v-1.5h3.75V18a4.5 4.5 0 0 0-6.188-4.172A5.98 5.98 0 0 1 15 18v3H3v-3Zm6-6.75A3.748 3.748 0 0 1 5.25 7.5 3.75 3.75 0 0 1 12 5.25a3.75 3.75 0 1 1 0 4.5 3.733 3.733 0 0 1-3 1.5ZM13.5 18v1.5h-9V18a4.5 4.5 0 1 1 9 0ZM11.25 7.5a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0ZM15 5.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                        </svg>
                    </div>
                    <span class="font-medium">Necessidades Sociais</span>
                </button>

                <!-- Informações Finais -->
                <button @click="mobileMenuOpen = false" wire:click="nextStepFourth"
                    class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-emerald-50 hover:text-emerald-700">
                    <div class="flex items-center justify-center w-10 h-10 mr-3 bg-emerald-100 rounded-lg">
                        <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.75 8.25V4.5h3V6h-1.5v2.25a3.75 3.75 0 1 0 7.5 0V6h-1.5V4.5h3v3.75a5.251 5.251 0 0 1-4.5 5.197V16.5a2.25 2.25 0 0 0 4.421.592 2.25 2.25 0 1 1 1.524.048 3.751 3.751 0 0 1-7.445-.64v-3.053a5.251 5.251 0 0 1-4.5-5.197Zm12 6.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                    </div>
                    <span class="font-medium">Informações Finais</span>
                </button>

                <!-- Divisor -->
                <div class="py-2">
                    <div class="border-t border-gray-200"></div>
                </div>

                <!-- Voltar -->
                <button @click="mobileMenuOpen = false" wire:click="backToSearch"
                    class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-gray-50">
                    <div class="flex items-center justify-center w-10 h-10 mr-3 bg-gray-100 rounded-lg">
                        <svg class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>
                    <span class="font-medium">Voltar</span>
                </button>
            </div>
        </nav>
    </div>
</div>

<!-- Navegação Desktop -->
<div class="relative">
    <!-- Background simplificado -->
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-purple-50"></div>

    <nav class="relative z-10 hidden lg:flex lg:w-80 min-h-screen p-6 bg-white border-r border-gray-200 shadow-sm">
        <div class="w-full">
            <!-- Header -->
            <div class="mb-6">
                <h2 class="text-xl font-bold text-gray-800">Questionário</h2>
                <p class="text-sm text-gray-600">Navegue pelas seções</p>
            </div>

            <ul class="space-y-3">
                <!-- Dados do Paciente -->
                <li>
                    <button wire:click="nextStepFirst"
                        class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-indigo-50 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-200">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 bg-indigo-100 rounded-lg">
                            <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.06 18.307A7.465 7.465 0 0 1 12 19.5a7.465 7.465 0 0 1-4.06-1.193 4.501 4.501 0 0 1 8.12 0Zm1.195-.955A5.998 5.998 0 0 0 12 14.25a5.998 5.998 0 0 0-5.255 3.102 7.5 7.5 0 1 1 10.51 0ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 0a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Zm0 1.5A3.75 3.75 0 1 0 12 6a3.75 3.75 0 0 0 0 7.5Z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <span class="font-medium">Dados do Paciente</span>
                            <p class="text-sm text-gray-500">Informações básicas</p>
                        </div>
                    </button>
                </li>

                <!-- Necessidades Biológicas -->
                <li>
                    <button wire:click="nextStepSecond"
                        class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-purple-50 hover:text-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-200">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 bg-purple-100 rounded-lg">
                            <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.5 9.457a4.207 4.207 0 0 1 6.996-3.15l.096.085.383.383.025-.022.025.022.383-.383.096-.085a4.207 4.207 0 0 1 5.946 5.931l-.185.197L12 18.7l-3.97-3.97-1.06 1.061 5.03 5.03 7.342-7.341.216-.23.008-.009a5.707 5.707 0 0 0-7.497-8.494l-.07-.068-.068.068A5.707 5.707 0 0 0 3 9.457a5.7 5.7 0 0 0 1.428 3.79l1.123-.994A4.2 4.2 0 0 1 4.5 9.457Zm8.25 2.982-3-3-4.81 4.811H3v1.5h2.56l4.19-4.19 3 3L15.31 12h1.94v-1.5h-2.56l-1.94 1.94Z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <span class="font-medium">Necessidades Biológicas</span>
                            <p class="text-sm text-gray-500">Saúde física e sintomas</p>
                        </div>
                    </button>
                </li>

                <!-- Necessidades Sociais -->
                <li>
                    <button wire:click="nextStepThird"
                        class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-pink-50 hover:text-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-200">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 bg-pink-100 rounded-lg">
                            <svg class="w-6 h-6 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3 18a6.002 6.002 0 0 1 8.018-5.652c.343.122.671.275.982.455A5.965 5.965 0 0 1 15 12a6.002 6.002 0 0 1 6 6v3h-5.25v-1.5h3.75V18a4.5 4.5 0 0 0-6.188-4.172A5.98 5.98 0 0 1 15 18v3H3v-3Zm6-6.75A3.748 3.748 0 0 1 5.25 7.5 3.75 3.75 0 0 1 12 5.25a3.75 3.75 0 1 1 0 4.5 3.733 3.733 0 0 1-3 1.5ZM13.5 18v1.5h-9V18a4.5 4.5 0 1 1 9 0ZM11.25 7.5a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0ZM15 5.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <span class="font-medium">Necessidades Sociais</span>
                            <p class="text-sm text-gray-500">Relações e suporte</p>
                        </div>
                    </button>
                </li>

                <!-- Informações Finais -->
                <li>
                    <button wire:click="nextStepFourth"
                        class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-emerald-50 hover:text-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-200">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 bg-emerald-100 rounded-lg">
                            <svg class="w-6 h-6 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.75 8.25V4.5h3V6h-1.5v2.25a3.75 3.75 0 1 0 7.5 0V6h-1.5V4.5h3v3.75a5.251 5.251 0 0 1-4.5 5.197V16.5a2.25 2.25 0 0 0 4.421.592 2.25 2.25 0 1 1 1.524.048 3.751 3.751 0 0 1-7.445-.64v-3.053a5.251 5.251 0 0 1-4.5-5.197Zm12 6.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <span class="font-medium">Informações Finais</span>
                            <p class="text-sm text-gray-500">Dados complementares</p>
                        </div>
                    </button>
                </li>

                <!-- Divisor -->
                <li class="pt-4">
                    <div class="border-t border-gray-200"></div>
                </li>

                <!-- Voltar -->
                <li class="pt-4">
                    <button wire:click="backToSearch"
                        class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-200">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 bg-gray-100 rounded-lg">
                            <svg class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <span class="font-medium">Voltar</span>
                            <p class="text-sm text-gray-500">Menu de pacientes</p>
                        </div>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
</div>
