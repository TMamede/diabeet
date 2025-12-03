<!-- Navegação Mobile -->
<div x-data="{ step: @entangle('currentStep'), mobileMenuOpen: false }">
    <div x-show="step === 2" class="relative">
        <!-- Background simplificado -->
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-purple-50"></div>

        <!-- Botão Hamburguer -->
        <div class="relative z-10 p-4 lg:hidden">
            <button @click="mobileMenuOpen = !mobileMenuOpen"
                class="flex items-center justify-center p-3 text-indigo-600 bg-white border border-indigo-100 shadow-md rounded-xl hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-indigo-200">
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
            class="fixed top-0 left-0 z-50 h-full bg-white border-r border-gray-200 shadow-xl w-80 lg:hidden">

            <!-- Header do menu -->
            <div class="flex items-center justify-between p-4 border-b border-gray-100">
                <h3 class="text-lg font-semibold text-gray-800">Avaliação de enfermagem</h3>
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
                    <span class="font-medium">Necessidades PsicoBiológicas</span>
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
                    <span class="font-medium">Necessidades PsicoSociais</span>
                </button>

                <!-- Necessidades PsicoEspirituais -->
                <button @click="mobileMenuOpen = false" wire:click="nextStepFourth"
                    class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-emerald-50 hover:text-emerald-700">
                    <div class="flex items-center justify-center w-10 h-10 mr-3 rounded-lg bg-emerald-100">
                        <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2L13.09 6.26L18 5L16.74 9.74L21 12L16.74 14.26L18 19L13.09 17.74L12 22L10.91 17.74L6 19L7.26 14.26L3 12L7.26 9.74L6 5L10.91 6.26L12 2Z" />
                        </svg>
                    </div>
                    <span class="font-medium">Necessidades PsicoEspirituais</span>
                </button>

                <!-- Questionário Qualidade de Vida -->
                <button @click="mobileMenuOpen = false" wire:click="nextStepFifth"
                    class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-orange-50 hover:text-orange-700">
                    <div class="flex items-center justify-center w-10 h-10 mr-3 bg-orange-100 rounded-lg">
                        <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 1L13.5 2.5L16.17 5.17C15.24 5.06 14.24 5 13.5 5C12.76 5 11.76 5.06 10.83 5.17L13.5 2.5L12 1L6 7V9C6.66 9 7.27 9.09 7.93 9.18L8 21H10V16H14V21H16L16.07 9.18C16.73 9.09 17.34 9 18 9H21ZM12 12C11.45 12 11 11.55 11 11C11 10.45 11.45 10 12 10C12.55 10 13 10.45 13 11C13 11.55 12.55 12 12 12Z" />
                        </svg>
                    </div>
                    <span class="font-medium">Qualidade de Vida</span>
                </button>

                <!-- Questionário Autocuidado -->
                <button @click="mobileMenuOpen = false" wire:click="nextStepSixth"
                    class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-teal-50 hover:text-teal-700">
                    <div class="flex items-center justify-center w-10 h-10 mr-3 bg-teal-100 rounded-lg">
                        <svg class="w-5 h-5 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.12,10H19V8.2H15.38L13.38,4.87C13.08,4.37 12.54,4.03 11.92,4.03C11.74,4.03 11.58,4.06 11.42,4.11L6,5.8C5.47,5.96 5.09,6.43 5.09,7.03C5.09,7.74 5.66,8.31 6.37,8.31C6.59,8.31 6.8,8.26 6.97,8.17L10.95,7.07L12.39,9.54C12.69,10.04 13.23,10.38 13.85,10.38C13.94,10.38 14.04,10.37 14.12,10.35V10M19,10V9H14.89L14.89,10H19M21,6H20V4H19V6H17V4H16V6H15V4H14V6H13V4H12V6H11V4H10V6H9V4H8V6H7V4H6V6H5V4H4V6H3V4H2V6H1V8H2V20H22V6H21Z" />
                        </svg>
                    </div>
                    <span class="font-medium">Autocuidado</span>
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7" />
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

    <nav class="relative z-10 hidden min-h-screen p-6 bg-white border-r border-gray-200 shadow-sm lg:flex lg:w-80">
        <div class="w-full">
            <!-- Header -->
            <div class="mb-6">
                <h2 class="text-xl font-bold text-gray-800">Avaliação de enfermagem</h2>
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
                            <span class="font-medium">Necessidades PsicoBiológicas</span>
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
                            <span class="font-medium">Necessidades PsicoSociais</span>
                            <p class="text-sm text-gray-500">Relações e suporte</p>
                        </div>
                    </button>
                </li>

                <!-- Necessidades PsicoEspirituais -->
                <li>
                    <button wire:click="nextStepFourth"
                        class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-amber-50 hover:text-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-200">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 rounded-lg bg-amber-100">
                            <svg class="w-6 h-6 text-amber-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <span class="font-medium">Necessidades PsicoEspirituais</span>
                            <p class="text-sm text-gray-500">Dados complementares</p>
                        </div>
                    </button>
                </li>

                <!-- Questionário Qualidade de Vida -->
                <li>
                    <button wire:click="nextStepFifth"
                        class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-orange-50 hover:text-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-200">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 bg-orange-100 rounded-lg">
                            <svg class="w-6 h-6 text-orange-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <span class="font-medium">Qualidade de Vida</span>
                            <p class="text-sm text-gray-500">Dados avaliação qualidade</p>
                        </div>
                    </button>
                </li>

                <!-- Questionário Autocuidado -->
                <li>
                    <button wire:click="nextStepSixth"
                        class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-emerald-50 hover:text-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-200">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 rounded-lg bg-emerald-100">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <span class="font-medium">Autocuidado</span>
                            <p class="text-sm text-gray-500">Dados avaliação autocuidado</p>
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
