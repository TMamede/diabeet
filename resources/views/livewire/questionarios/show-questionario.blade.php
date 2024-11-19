<div x-data="{ step: @entangle('currentStep') }">
    <div x-show="step === 1" x-transition>
        @if ($currentStep == 1)
        <div class="step">
            <div class="flex">
                <!-- Barra de Navegação -->
                <nav class="left-0 flex w-64 min-h-screen p-6 bg-white">
                    <ul class="space-y-4">
                        <!-- Dados Paciente -->
                        <li>
                            <button wire:click="nextStepFirst"
                                class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">

                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="mr-3 text-indigo-500">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.06 18.307A7.465 7.465 0 0 1 12 19.5a7.465 7.465 0 0 1-4.06-1.193 4.501 4.501 0 0 1 8.12 0Zm1.195-.955A5.998 5.998 0 0 0 12 14.25a5.998 5.998 0 0 0-5.255 3.102 7.5 7.5 0 1 1 10.51 0ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 0a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Zm0 1.5A3.75 3.75 0 1 0 12 6a3.75 3.75 0 0 0 0 7.5Z"
                                        fill="#4F46E5" />
                                </svg>

                                <span class="flex-1 text-left">Dados do Paciente</span>
                            </button>
                        </li>

                        <!-- Necessidades Biológicas -->
                        <li>
                            <button wire:click="nextStepSecond"
                                class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">

                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="mr-3 text-indigo-500">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.5 9.457a4.207 4.207 0 0 1 6.996-3.15l.096.085.383.383.025-.022.025.022.383-.383.096-.085a4.207 4.207 0 0 1 5.946 5.931l-.185.197L12 18.7l-3.97-3.97-1.06 1.061 5.03 5.03 7.342-7.341.216-.23.008-.009a5.707 5.707 0 0 0-7.497-8.494l-.07-.068-.068.068A5.707 5.707 0 0 0 3 9.457a5.7 5.7 0 0 0 1.428 3.79l1.123-.994A4.2 4.2 0 0 1 4.5 9.457Zm8.25 2.982-3-3-4.81 4.811H3v1.5h2.56l4.19-4.19 3 3L15.31 12h1.94v-1.5h-2.56l-1.94 1.94Z"
                                        fill="#4F46E5" />
                                </svg>

                                <span class="flex-1 text-left">Necessidades Biológicas</span>
                            </button>
                        </li>

                        <!-- Necessidades Sociais -->
                        <li>
                            <button wire:click="nextStepThird"
                                class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">

                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="mr-3 text-indigo-500">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3 18a6.002 6.002 0 0 1 8.018-5.652c.343.122.671.275.982.455A5.965 5.965 0 0 1 15 12a6.002 6.002 0 0 1 6 6v3h-5.25v-1.5h3.75V18a4.5 4.5 0 0 0-6.188-4.172A5.98 5.98 0 0 1 15 18v3H3v-3Zm6-6.75A3.748 3.748 0 0 1 5.25 7.5 3.75 3.75 0 0 1 12 5.25a3.75 3.75 0 1 1 0 4.5 3.733 3.733 0 0 1-3 1.5ZM13.5 18v1.5h-9V18a4.5 4.5 0 1 1 9 0ZM11.25 7.5a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0ZM15 5.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"
                                        fill="#4F46E5" />
                                </svg>

                                <span class="flex-1 text-left">Necessidades Sociais</span>
                            </button>
                        </li>

                        <!-- Necessidades Espirituais e Unidade de Saúde -->
                        <li>
                            <button wire:click="nextStepFourth"
                                class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">

                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="mr-3 text-indigo-500">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.75 8.25V4.5h3V6h-1.5v2.25a3.75 3.75 0 1 0 7.5 0V6h-1.5V4.5h3v3.75a5.251 5.251 0 0 1-4.5 5.197V16.5a2.25 2.25 0 0 0 4.421.592 2.25 2.25 0 1 1 1.524.048 3.751 3.751 0 0 1-7.445-.64v-3.053a5.251 5.251 0 0 1-4.5-5.197Zm12 6.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                                        fill="#4F46E5" />
                                </svg>

                                <span class="flex-1 text-left">Informações Finais</span>
                            </button>
                        </li>

                        <!-- Voltar -->
                        <li>
                            <button wire:click="backToSearch"
                                class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                <svg class="w-6 h-6 mr-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                                <span class="flex-1 text-left">Voltar</span>
                            </button>
                        </li>
                    </ul>
                </nav>

                <!-- Conteúdo da Página -->
                <main class="flex-1 p-6 bg-stone-50">

                    <h2 class="py-5 text-lg font-bold">Dados do Paciente Associado</h2>

                </main>
            </div>
        </div>
        @endif
    </div>
</div>