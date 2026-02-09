<div>
    <!-- Navegação Mobile -->
    <div x-data="{ step: @entangle('currentStep'), mobileMenuOpen: false }">
        <div x-show="step === 2" class="relative">
            <!-- Background simplificado -->
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-purple-50"></div>

            
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
                    <h2 class="text-xl font-bold text-gray-800">Menu do Paciente</h2>
                    <p class="text-sm text-gray-600">Navegue pelas seções</p>
                </div>

                <ul class="space-y-3">
                    <!-- Dados Sociodemográficos -->
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
                                <span class="font-medium">Dados Sociodemográficos</span>
                                <p class="text-sm text-gray-500">Informações pessoais</p>
                            </div>
                        </button>
                    </li>

                    <!-- Histórico do Paciente -->
                    <li>
                        <button wire:click="nextStepSecond"
                            class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-purple-50 hover:text-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-200">
                            <div class="flex items-center justify-center w-12 h-12 mr-4 bg-purple-100 rounded-lg">
                                <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.5 3A1.5 1.5 0 0 0 3 4.5v15A1.5 1.5 0 0 0 4.5 21h15a1.5 1.5 0 0 0 1.5-1.5V8.121a1.5 1.5 0 0 0-.44-1.06L14.94 1.44A1.5 1.5 0 0 0 13.879 1H4.5ZM7.5 7.5a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 7.5 7.5Zm.75 3a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5h-7.5Zm0 3a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5h-7.5Z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <span class="font-medium">Histórico do Paciente</span>
                                <p class="text-sm text-gray-500">Histórico médico</p>
                            </div>
                        </button>
                    </li>

                    <!-- Medicamentos -->
                    <li>
                        <button wire:click="nextStepThird"
                            class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-pink-50 hover:text-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-200">
                            <div class="flex items-center justify-center w-12 h-12 mr-4 bg-pink-100 rounded-lg">
                                <svg class="w-6 h-6 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.5 3.75a6 6 0 0 0-5.98 6.496A5.25 5.25 0 0 0 6.75 20.25H13.5a5.25 5.25 0 0 0 5.22-4.777 6.002 6.002 0 0 0 1.88-11.473A6.002 6.002 0 0 0 10.5 3.75Zm2.25 6a.75.75 0 0 0-1.5 0v.683a3.75 3.75 0 1 1-1.5 0V9.75a2.25 2.25 0 1 1 3 0Z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <span class="font-medium">Medicamentos</span>
                                <p class="text-sm text-gray-500">Prescrições e tratamentos</p>
                            </div>
                        </button>
                    </li>

                    <!-- Resultados -->
                    <li>
                        <button wire:click="nextStepFourth"
                            class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-emerald-50 hover:text-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-200">
                            <div class="flex items-center justify-center w-12 h-12 mr-4 bg-emerald-100 rounded-lg">
                                <svg class="w-6 h-6 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.625 1.5H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875ZM9.75 14.25a.75.75 0 0 0 0 1.5H15a.75.75 0 0 0 0-1.5H9.75Zm.75-2.25a.75.75 0 0 1 .75-.75H15a.75.75 0 0 1 0 1.5h-3.75a.75.75 0 0 1-.75-.75Z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <span class="font-medium">Resultados</span>
                                <p class="text-sm text-gray-500">Exames e avaliações</p>
                            </div>
                        </button>
                    </li>

                    <!-- Unidade de Saúde -->
                    <li>
                        <button wire:click="nextStepFifth"
                            class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-200">
                            <div class="flex items-center justify-center w-12 h-12 mr-4 bg-yellow-100 rounded-lg">
                                <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3 2.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 .75.75v12.75a.75.75 0 0 1-.75.75H4.5a.75.75 0 0 1-.75-.75V2.25ZM4.5 3v12h15V3h-15Zm7.5 3a.75.75 0 0 1 .75.75v1.5H15a.75.75 0 0 1 0 1.5h-2.25V12a.75.75 0 0 1-1.5 0v-1.75H9a.75.75 0 0 1 0-1.5h2.25V7.5A.75.75 0 0 1 12 6.75ZM6 16.5a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H6.75a.75.75 0 0 1-.75-.75Z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <span class="font-medium">Unidade de Saúde</span>
                                <p class="text-sm text-gray-500">Informações da unidade</p>
                            </div>
                        </button>
                    </li>


                    <!-- Unidade de Saúde -->
                    <li>
                        <button wire:click="nextStepSixth"
                            class="flex items-center w-full p-4 text-left text-gray-800 rounded-lg hover:bg-cyan-50 hover:text-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-200">
                            <div class="flex items-center justify-center w-12 h-12 mr-4 bg-cyan-100 rounded-lg">
                                <svg class="w-6 h-6 text-cyan-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V9.375A3.375 3.375 0 0 1 6.375 6h1.127Zm3.973-.75a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75V5.25Zm2.25 2.25a.75.75 0 0 0-1.5 0v6a.75.75 0 0 0 1.5 0v-6ZM9 9.75a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 0 1.5h-4.5A.75.75 0 0 1 9 9.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H9.75Z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <span class="font-medium">Avaliações de Enfermagem</span>
                                <p class="text-sm text-gray-500">Avaliações Associadas</p>
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
</div>
