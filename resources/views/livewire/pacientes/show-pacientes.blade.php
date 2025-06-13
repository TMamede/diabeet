<div x-data="{ step: @entangle('currentStep'), open: false }">
    <div x-show="step === 1" x-transition>
        @if ($currentStep == 1)
            <div class="step">
                <div class="flex flex-row bg-stone-50 lg:h-full lg:flex-row">

                    <!-- Barra de Navegação Mobile esquerda!-->
                    <div>
                        <div x-data="{ step: @entangle('currentStep'), mobileMenuOpen: false }">
                            <div x-show.transition="step === 1" class=" bg-stone-50">

                                <!-- Botão Hambúrguer -->
                                <button @click="mobileMenuOpen = !mobileMenuOpen"
                                    class="inline-flex items-center justify-center p-3 text-gray-400 transition duration-150 ease-in-out rounded-md bg-stone-50 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 lg:hidden">
                                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <div x-show="mobileMenuOpen" class="fixed inset-0 z-40 lg:hidden"
                                    @click="mobileMenuOpen = false"></div>
                                <!-- Nav Mobile Fullscreen -->
                                <nav x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 -translate-x-full"
                                    x-transition:enter-end="opacity-100 translate-x-0"
                                    x-transition:leave="transition ease-in duration-300"
                                    x-transition:leave-start="opacity-100 translate-x-0"
                                    x-transition:leave-end="opacity-0 -translate-x-full"
                                    class="fixed top-0 left-0 z-50 w-3/5 h-full bg-white border-gray-200 shadow-lg lg:static lg:z-auto lg:w-64 lg:bg-transparent lg:hidden">


                                    <!--Botão de fechar!-->
                                    <button @click="mobileMenuOpen = false" class="absolute top-4 left-4">
                                        <svg class="w-6 h-6 text-gray-400 transition duration-150 ease-in-out bg-white rounded-md hover:text-gray-700 focus:outline-none 0 focus:text-gray-500 lg:hidden"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>

                                    <!-- Lista!-->

                                    <ul class="flex flex-col h-full p-6 space-y-4">
                                        <!-- Dados Sociodemográficos -->
                                        <li>
                                            <button @click="mobileMenuOpen = false" wire:click="nextStepFirst"
                                                class="flex items-center justify-start w-full py-3 pl-1 pr-4 mt-6 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                                <span class="flex-1 text-sm text-left sm:text-base">Dados
                                                    Sociodemográficos</span>
                                            </button>
                                        </li>

                                        <!-- Histórico do Paciente -->
                                        <li>
                                            <button @click="mobileMenuOpen = false" wire:click="nextStepSecond"
                                                class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                                </svg>
                                                <span class="flex-1 text-sm text-left sm:text-base">Histórico do
                                                    Paciente</span>
                                            </button>
                                        </li>

                                        <!-- Medicamentos -->
                                        <li>
                                            <button @click="mobileMenuOpen = false" wire:click="nextStepThird"
                                                class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                                </svg>
                                                <span class="flex-1 text-sm text-left sm:text-base">Medicamentos</span>
                                            </button>
                                        </li>

                                        <!-- Resultados -->
                                        <li>
                                            <button @click="mobileMenuOpen = false" wire:click="nextStepFourth"
                                                class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-6 h-6 mr-3 text-indigo-500" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 7.5v9m6-9v9m-9-6h12M4.5 18.75h15a2.25 2.25 0 002.25-2.25v-9A2.25 2.25 0 0019.5 5.25h-15a2.25 2.25 0 00-2.25 2.25v9A2.25 2.25 0 004.5 18.75z" />
                                                </svg>
                                                <span class="flex-1 text-sm text-left sm:text-base">Resultados</span>
                                            </button>
                                        </li>

                                        <!-- Voltar -->
                                        <li>
                                            <button @click="mobileMenuOpen = false" wire:click="backToSearch"
                                                class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                <svg class="w-6 h-6 mr-3 text-gray-500"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 19l-7-7 7-7" />
                                                </svg>
                                                <span class="flex-1 text-sm text-left sm:text-base">Voltar ao menu
                                                    pacientes</span>
                                            </button>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>


                    <nav class="flex min-h-full p-6 bg-white lg:w-64 lg:block"
                        :class="{ 'block': open, 'hidden': !open }">


                        <ul class="mt-6 space-y-4 lg:mt-0 lg:flex lg:flex-col">
                            <!-- Dados Sociodemográficos -->
                            <li>
                                <button wire:click="nextStepFirst"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span class="flex-1 text-left">Dados Sociodemográficos</span>
                                </button>
                            </li>

                            <!-- Histórico do Paciente -->
                            <li>
                                <button wire:click="nextStepSecond"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                    </svg>
                                    <span class="flex-1 text-left">Histórico do Paciente</span>
                                </button>
                            </li>

                            <!-- Medicamentos -->
                            <li>
                                <button wire:click="nextStepThird"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                    </svg>
                                    <span class="flex-1 text-left">Medicamentos</span>
                                </button>
                            </li>

                            <!-- Resultados -->
                            <li>
                                <button wire:click="nextStepFourth"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-indigo-500"
                                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 7.5v9m6-9v9m-9-6h12M4.5 18.75h15a2.25 2.25 0 002.25-2.25v-9A2.25 2.25 0 0019.5 5.25h-15a2.25 2.25 0 00-2.25 2.25v9A2.25 2.25 0 004.5 18.75z" />
                                    </svg>
                                    <span class="flex-1 text-left">Resultados</span>
                                </button>
                            </li>

                            <!-- Voltar -->
                            <li>
                                <button wire:click="backToSearch"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                    <span class="flex-1 text-left">Voltar</span>
                                </button>
                            </li>
                        </ul>
                    </nav>

                    <!-- Conteúdo da Página -->

                    <main class="flex-1 py-10 xl:p-6 pr-9 bg-stone-50 sm:p-6 lg:p-6 md:p-6 md:pr-10">
                        <div
                            class="flex flex-col w-full gap-4 sm:overflow-hidden sm:flex-row sm:justify-between sm:items-center ">
                            <div class="flex items-center">
                                <h2
                                    class="pt-2 pb-4 text-2xl font-semibold text-indigo-900 sm:text-3xl md:text-4xl lg:text-5xl">
                                    {{ $nome }}
                                </h2>
                            </div>

                            <div class="flex flex-col items-center w-full gap-4 sm:flex-row sm:w-auto">
                                <div x-data="{ show: false, message: '' }" x-show="show"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 transform translate-x-full"
                                    x-transition:enter-end="opacity-100 transform translate-x-0"
                                    x-transition:leave="transition ease-in duration-300"
                                    x-transition:leave-start="opacity-100 transform translate-x-0"
                                    x-transition:leave-end="opacity-0 transform translate-x-full"
                                    @notify.window="
                                                                                show = true;
                                                                                message = $event.detail;
                                                                                setTimeout(() => show = false, 3000)"
                                    class="flex items-center justify-center w-full h-12 px-4 text-green-600 bg-green-200 rounded-lg sm:w-auto">
                                    <span x-text="message" class="text-sm sm:text-base"></span>
                                </div>

                                <button wire:click="updatePaciente('{{ $IdPaciente }}')"
                                    class="w-full px-4 py-2 text-sm text-white bg-teal-500 rounded-md shadow-sm sm:w-40 hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 sm:text-base">
                                    Salvar alterações
                                </button>
                            </div>
                        </div>

                        <h2 class="py-5 text-lg font-bold">Dados Sociodemográficos</h2>

                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">

                            <div class="mb-4">
                                <label for="cpf" class="block font-medium text-gray-700">CPF</label>
                                <input type="text" wire:model="cpf" id="cpf"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o CPF">
                                @error('cpf')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block font-medium text-gray-700">Email</label>
                                <input type="email" wire:model="email" id="email"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o email">
                                @error('email')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="nome" class="block font-medium text-gray-700">Nome</label>
                                <input type="text" wire:model="nome" id="nome"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o nome">
                                @error('nome')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="prontuario" class="block font-medium text-gray-700">Prontuário</label>
                                <input type="text" wire:model="prontuario" id="prontuario"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o prontuário">
                                @error('prontuario')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="data_nasc" class="block font-medium text-gray-700">Data de
                                    Nascimento</label>
                                <input type="date" wire:model="data_nasc" id="data_nasc"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                @error('data_nasc')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="orientacao_sexual_id" class="block font-medium text-gray-700">Orientação
                                    Sexual</label>
                                <select wire:model="orientacao_sexual_id" id="orientacao_sexual_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($orientacoesSexuais as $orientacao)
                                        <option value="{{ $orientacao->id }}">{{ $orientacao->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('orientacao_sexual_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="estado_civil_id" class="block font-medium text-gray-700">Estado
                                    Civil</label>
                                <select wire:model="estado_civil_id" id="estado_civil_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($estadosCivis as $estado)
                                        <option value="{{ $estado->id }}">{{ $estado->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('estado_civil_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="etnia_id" class="block font-medium text-gray-700">Etnia</label>
                                <select wire:model="etnia_id" id="etnia_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($etnias as $etnia)
                                        <option value="{{ $etnia->id }}">{{ $etnia->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('etnia_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="cep" class="block font-medium text-gray-700">CEP</label>
                                <input type="text" wire:model="cep" id="cep"
                                    wire:keydown.enter="buscarEndereco"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o CEP">
                                @error('cep')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="rua" class="block font-medium text-gray-700">Rua</label>
                                <input type="text" wire:model="rua" id="rua"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite a rua">
                                @error('rua')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="numero" class="block font-medium text-gray-700">Número</label>
                                <input type="number" wire:model="numero" id="numero"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o número">
                                @error('numero')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="bairro" class="block font-medium text-gray-700">Bairro</label>
                                <input type="text" wire:model="bairro" id="bairro"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o bairro">
                                @error('bairro')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="cidade" class="block font-medium text-gray-700">Cidade</label>
                                <input type="text" wire:model="cidade" id="cidade"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite a cidade">
                                @error('cidade')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="uf" class="block font-medium text-gray-700">UF</label>
                                <input type="text" wire:model="uf" id="uf"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    maxlength="2" placeholder="Digite a UF">
                                @error('uf')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="ocupacao" class="block font-medium text-gray-700">Ocupação</label>
                                <input type="text" wire:model="ocupacao" id="ocupacao"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite a ocupação">
                                @error('ocupacao')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="renda_familiar" class="block font-medium text-gray-700">Renda
                                    Familiar</label>
                                <input type="number" wire:model="renda_familiar" id="renda_familiar"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    step="0.01" min="0" placeholder="Digite a renda familiar">
                                @error('renda_familiar')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="beneficio_id" class="block font-medium text-gray-700">Benefício</label>
                                <select wire:model="beneficio_id" id="beneficio_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($beneficios as $beneficio)
                                        <option value="{{ $beneficio->id }}">{{ $beneficio->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('beneficio_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="reside_id" class="block font-medium text-gray-700">Reside</label>
                                <select wire:model="reside_id" id="reside_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($resides as $reside)
                                        <option value="{{ $reside->id }}">{{ $reside->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('reside_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-6 ">
                                <label for="num_pss_casa" class="block font-medium text-gray-700">Número em
                                    Casa</label>
                                <input type="number" wire:model="num_pss_casa" id="num_pss_casa"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o número em casa">
                                @error('num_pss_casa')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                    </main>
                </div>

            </div>

        @endif

    </div>
    <div x-data="{ step: @entangle('currentStep'), open: false }">
        <div x-show="step === 2" x-transition>
            @if ($currentStep == 2)
                <div class="step">
                    <div class="flex flex-col lg:flex-row">

                        <!-- Barra de Navegação Mobile esquerda!-->
                        <div>
                            <div x-data="{ step: @entangle('currentStep'), mobileMenuOpen: false }">
                                <div x-show.transition="step === 2" class="bg-stone-50">

                                    <!-- Botão Hambúrguer -->
                                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                                        class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md bg-stone-50 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 lg:hidden">
                                        <svg class="w-6 h-6" stroke="currentColor" fill="none"
                                            viewBox="0 0 24 24">
                                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16" />
                                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                    <div x-show="mobileMenuOpen" class="fixed inset-0 z-40 lg:hidden"
                                        @click="mobileMenuOpen = false"></div>
                                    <!-- Nav Mobile Fullscreen -->
                                    <nav x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 -translate-x-full"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave-end="opacity-0 -translate-x-full"
                                        class="fixed top-0 left-0 z-50 w-3/5 h-full bg-white border-gray-200 shadow-lg lg:static lg:z-auto lg:w-64 lg:bg-transparent lg:hidden">

                                        <!--Botão de fechar!-->
                                        <button @click="mobileMenuOpen = false" class="absolute top-4 left-4">
                                            <svg class="w-6 h-6 text-gray-400 transition duration-150 ease-in-out bg-white rounded-md hover:text-gray-700 focus:outline-none 0 focus:text-gray-500 lg:hidden"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>

                                        <!-- Lista!-->

                                        <ul class="flex flex-col h-full p-6 space-y-4">
                                            <!-- Dados Sociodemográficos -->
                                            <li>
                                                <button @click="mobileMenuOpen = false" wire:click="nextStepFirst"
                                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 mt-6 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                    <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    </svg>
                                                    <span class="flex-1 text-sm text-left sm:text-base">Dados
                                                        Sociodemográficos</span>
                                                </button>
                                            </li>

                                            <!-- Histórico do Paciente -->
                                            <li>
                                                <button @click="mobileMenuOpen = false" wire:click="nextStepSecond"
                                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                    <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                                    </svg>
                                                    <span class="flex-1 text-sm text-left sm:text-base">Histórico do
                                                        Paciente</span>
                                                </button>
                                            </li>

                                            <!-- Medicamentos -->
                                            <li>
                                                <button @click="mobileMenuOpen = false" wire:click="nextStepThird"
                                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                    <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                                    </svg>
                                                    <span
                                                        class="flex-1 text-sm text-left sm:text-base">Medicamentos</span>
                                                </button>
                                            </li>

                                            <!-- Resultados -->
                                            <li>
                                                <button @click="mobileMenuOpen = false" wire:click="nextStepFourth"
                                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="w-6 h-6 mr-3 text-indigo-500" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 7.5v9m6-9v9m-9-6h12M4.5 18.75h15a2.25 2.25 0 002.25-2.25v-9A2.25 2.25 0 0019.5 5.25h-15a2.25 2.25 0 00-2.25 2.25v9A2.25 2.25 0 004.5 18.75z" />
                                                    </svg>
                                                    <span
                                                        class="flex-1 text-sm text-left sm:text-base">Resultados</span>
                                                </button>
                                            </li>

                                            <!-- Voltar -->
                                            <li>
                                                <button @click="mobileMenuOpen = false" wire:click="backToSearch"
                                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                    <svg class="w-6 h-6 mr-3 text-gray-500"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 19l-7-7 7-7" />
                                                    </svg>
                                                    <span class="flex-1 text-sm text-left sm:text-base">Voltar ao menu
                                                        pacientes</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!--Barra navegação lg -->
                        <nav class="flex min-h-full p-6 bg-white lg:w-64 lg:block"
                            :class="{ 'block': open, 'hidden': !open }">
                            <ul class="space-y-4">
                                <!-- Dados Sociodemográficos -->
                                <li>
                                    <button wire:click="nextStepFirst"
                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                        <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                        <span class="flex-1 text-left">Dados Sociodemográficos</span>
                                    </button>
                                </li>

                                <!-- Histórico do Paciente -->
                                <li>
                                    <button wire:click="nextStepSecond"
                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                        <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        <span class="flex-1 text-left">Histórico do Paciente</span>
                                    </button>
                                </li>

                                <!-- Medicamentos -->
                                <li>
                                    <button wire:click="nextStepThird"
                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                        <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                        </svg>
                                        <span class="flex-1 text-left">Medicamentos</span>
                                    </button>
                                </li>

                                <!-- Resultados -->
                                <li>
                                    <button wire:click="nextStepFourth"
                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-indigo-500"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 7.5v9m6-9v9m-9-6h12M4.5 18.75h15a2.25 2.25 0 002.25-2.25v-9A2.25 2.25 0 0019.5 5.25h-15a2.25 2.25 0 00-2.25 2.25v9A2.25 2.25 0 004.5 18.75z" />
                                        </svg>
                                        <span class="flex-1 text-left">Resultados</span>
                                    </button>
                                </li>

                                <!-- Voltar -->
                                <li>
                                    <button wire:click="backToSearch"
                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                        <svg class="w-6 h-6 mr-3 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                            <div class="flex flex-col w-full gap-4 sm:flex-row sm:justify-between sm:items-center">
                                <div class="flex items-center">
                                    <h2
                                        class="pt-2 pb-4 text-2xl font-semibold text-indigo-900 sm:text-3xl md:text-4xl lg:text-5xl">
                                        {{ $nome }}
                                    </h2>
                                </div>

                                <div class="flex flex-col items-center w-full gap-4 sm:flex-row sm:w-auto">
                                    <div x-data="{ show: false, message: '' }" x-show="show"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 transform translate-x-full"
                                        x-transition:enter-end="opacity-100 transform translate-x-0"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100 transform translate-x-0"
                                        x-transition:leave-end="opacity-0 transform translate-x-full"
                                        @notify.window="
                                                            show = true;
                                                            message = $event.detail;
                                                            setTimeout(() => show = false, 3000)"
                                        class="flex items-center justify-center w-full h-12 px-4 text-green-600 bg-green-200 rounded-lg sm:w-auto">
                                        <span x-text="message" class="text-sm sm:text-base"></span>
                                    </div>

                                    <button wire:click="updatePaciente('{{ $IdPaciente }}')"
                                        class="w-full px-4 py-2 text-sm text-white bg-teal-500 rounded-md shadow-sm sm:w-40 hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 sm:text-base">
                                        Salvar alterações
                                    </button>
                                </div>
                            </div>

                            <h2 class="py-5 text-lg font-bold">Histórico do Paciente</h2>
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                                <div class="mb-6">
                                    <label for="tipo_diabetes_id" class="block mb-2 font-medium text-gray-700">Tipo de
                                        Diabetes</label>
                                    <select wire:model="tipo_diabetes_id" id="tipo_diabetes_id"
                                        class="block w-full p-2 border-gray-300 rounded-lg shadow-sm form-select focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="">Selecione</option>
                                        @foreach ($tipoDiabetes as $tipo)
                                            <option value="{{ $tipo->id }}">{{ $tipo->tipo }}</option>
                                        @endforeach
                                    </select>
                                    @error('tipo_diabetes_id')
                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Comorbidades -->


                                <div class="mb-6">
                                    <label for="cirurgia_motivo" class="block mb-2 font-medium text-gray-700">Já
                                        realizaou
                                        alguma cirurgia? Se sim qual?</label>
                                    <input type="text" wire:model="cirurgia_motivo" id="cirurgia_motivo"
                                        class="block w-full border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                                    @error('cirurgia_motivo')
                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="amputacao_onde" class="block mb-2 font-medium text-gray-700">Já
                                        realizaou
                                        amputação? Se sim onde?
                                        <input type="text" wire:model="amputacao_onde" id="amputacao_onde"
                                            class="block w-full border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                                        @error('amputacao_onde')
                                            <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="amputacao_quando" class="block mb-2 font-medium text-gray-700">Quando
                                        foi
                                        a Amputação?</label>
                                    <input type="date" wire:model="amputacao_quando" id="amputacao_quando"
                                        class="block w-full border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                                    @error('amputacao_quando')
                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="n_cigarros" class="block mb-2 font-medium text-gray-700">Número de
                                        Cigarros
                                        Diários</label>
                                    <input type="number" wire:model="n_cigarros" id="n_cigarros"
                                        class="block w-full border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500"
                                        min="0">
                                    @error('n_cigarros')
                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="inicio_tabagismo" class="block mb-2 font-medium text-gray-700">Início
                                        do
                                        Tabagismo</label>
                                    <input type="date" wire:model="inicio_tabagismo" id="inicio_tabagismo"
                                        class="block w-full border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                                    @error('inicio_tabagismo')
                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="inicio_etilismo" class="block mb-2 font-medium text-gray-700">Início
                                        do
                                        Etilismo</label>
                                    <input type="date" wire:model="inicio_etilismo" id="inicio_etilismo"
                                        class="block w-full border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                                    @error('inicio_etilismo')
                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="p-6 rounded-lg shadow-md bg-gray-50">
                                <div class="flex space-x-4">
                                    <!-- Comorbidades -->
                                    <div class="w-5/6">
                                        <h3 class="mb-4 text-lg font-semibold text-gray-800">Comorbidades</h3>
                                        <div class="grid grid-cols-3 gap-4">
                                            @foreach ($comorbidadesList as $comorbidade)
                                                <div class="flex items-center p-4 transition duration-200 bg-white border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50"
                                                    onclick="document.getElementById('comorbidade_{{ $comorbidade->id }}').click()">
                                                    <input type="checkbox" id="comorbidade_{{ $comorbidade->id }}"
                                                        wire:model="comorbidades" value="{{ $comorbidade->id }}"
                                                        class="mr-2 text-blue-600 focus:ring-blue-500"
                                                        {{ in_array($comorbidade->id, $comorbidades) ? 'checked' : '' }}>
                                                    <label for="comorbidade_{{ $comorbidade->id }}"
                                                        class="text-sm text-gray-700">{{ $comorbidade->descricao }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Alergias -->
                                    <div class="w-1/2">
                                        <h3 class="mb-4 text-lg font-semibold text-gray-800">Alergias</h3>
                                        <div class="grid grid-cols-1 gap-4">
                                            <!-- Mudando para 1 coluna -->
                                            @foreach ($alergiasList as $alergia)
                                                <div class="flex items-center p-4 transition duration-200 bg-white border border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50"
                                                    onclick="document.getElementById('alergia_{{ $alergia->id }}').click()">
                                                    <input type="checkbox" id="alergia_{{ $alergia->id }}"
                                                        wire:model="alergias" value="{{ $alergia->id }}"
                                                        class="mr-2 text-blue-600 focus:ring-blue-500"
                                                        {{ in_array($alergia->id, $alergias) ? 'checked' : '' }}>
                                                    <label for="alergia_{{ $alergia->id }}"
                                                        class="text-sm text-gray-700">{{ $alergia->descricao }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div x-data="{ step: @entangle('currentStep'), open: false }">
        <div x-show="step === 3" x-transition>
            @if ($currentStep == 3)
                <div class="step">
                    <div class="flex flex-row bg-stone-50 lg:h-full lg:flex-row">
                        <!-- Barra de Navegação -->

                        <!-- Barra de Navegação Mobile esquerda!-->
                        <div>
                            <div x-data="{ step: @entangle('currentStep'), mobileMenuOpen: false }">
                                <div x-show.transition="step === 3" class="bg-stone-50">

                                    <!-- Botão Hambúrguer -->
                                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                                        class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md bg-stone-50 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 lg:hidden">
                                        <svg class="w-6 h-6" stroke="currentColor" fill="none"
                                            viewBox="0 0 24 24">
                                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16" />
                                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                    <div x-show="mobileMenuOpen" class="fixed inset-0 z-40 lg:hidden"
                                        @click="mobileMenuOpen = false"></div>
                                    <!-- Nav Mobile Fullscreen -->
                                    <nav x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 -translate-x-full"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave-end="opacity-0 -translate-x-full"
                                        class="fixed top-0 left-0 z-50 w-3/5 h-full bg-white border-gray-200 shadow-lg lg:static lg:z-auto lg:w-64 lg:bg-transparent lg:hidden">

                                        <!--Botão de fechar!-->
                                        <button @click="mobileMenuOpen = false" class="absolute top-4 left-4">
                                            <svg class="w-6 h-6 text-gray-400 transition duration-150 ease-in-out bg-white rounded-md hover:text-gray-700 focus:outline-none 0 focus:text-gray-500 lg:hidden"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>

                                        <!-- Lista!-->

                                        <ul class="flex flex-col h-full p-6 space-y-4">
                                            <!-- Dados Sociodemográficos -->
                                            <li>
                                                <button @click="mobileMenuOpen = false" wire:click="nextStepFirst"
                                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 mt-6 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                    <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    </svg>
                                                    <span class="flex-1 text-sm text-left sm:text-base">Dados
                                                        Sociodemográficos</span>
                                                </button>
                                            </li>

                                            <!-- Histórico do Paciente -->
                                            <li>
                                                <button @click="mobileMenuOpen = false" wire:click="nextStepSecond"
                                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                    <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                                    </svg>
                                                    <span class="flex-1 text-sm text-left sm:text-base">Histórico
                                                        do
                                                        Paciente</span>
                                                </button>
                                            </li>

                                            <!-- Medicamentos -->
                                            <li>
                                                <button @click="mobileMenuOpen = false" wire:click="nextStepThird"
                                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                    <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                                    </svg>
                                                    <span
                                                        class="flex-1 text-sm text-left sm:text-base">Medicamentos</span>
                                                </button>
                                            </li>

                                            <!-- Resultados -->
                                            <li>
                                                <button @click="mobileMenuOpen = false" wire:click="nextStepFourth"
                                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="w-6 h-6 mr-3 text-indigo-500" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 7.5v9m6-9v9m-9-6h12M4.5 18.75h15a2.25 2.25 0 002.25-2.25v-9A2.25 2.25 0 0019.5 5.25h-15a2.25 2.25 0 00-2.25 2.25v9A2.25 2.25 0 004.5 18.75z" />
                                                    </svg>
                                                    <span
                                                        class="flex-1 text-sm text-left sm:text-base">Resultados</span>
                                                </button>
                                            </li>

                                            <!-- Voltar -->
                                            <li>
                                                <button @click="mobileMenuOpen = false" wire:click="backToSearch"
                                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                    <svg class="w-6 h-6 mr-3 text-gray-500"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 19l-7-7 7-7" />
                                                    </svg>
                                                    <span class="flex-1 text-sm text-left sm:text-base">Voltar ao
                                                        menu
                                                        pacientes</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!--Barra navegação xl -->
                        <nav class="flex min-h-full p-6 bg-white lg:w-64 lg:block"
                            :class="{ 'block': open, 'hidden': !open }">
                            <ul class="space-y-4">
                                <!-- Dados Sociodemográficos -->
                                <li>
                                    <button wire:click="nextStepFirst"
                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                        <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                        <span class="flex-1 text-left">Dados Sociodemográficos</span>
                                    </button>
                                </li>

                                <!-- Histórico do Paciente -->
                                <li>
                                    <button wire:click="nextStepSecond"
                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                        <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        <span class="flex-1 text-left">Histórico do Paciente</span>
                                    </button>
                                </li>

                                <!-- Medicamentos -->
                                <li>
                                    <button wire:click="nextStepThird"
                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                        <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                        </svg>
                                        <span class="flex-1 text-left">Medicamentos</span>
                                    </button>
                                </li>

                                <!-- Resultados -->
                                <li>
                                    <button wire:click="nextStepFourth"
                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-indigo-500"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 7.5v9m6-9v9m-9-6h12M4.5 18.75h15a2.25 2.25 0 002.25-2.25v-9A2.25 2.25 0 0019.5 5.25h-15a2.25 2.25 0 00-2.25 2.25v9A2.25 2.25 0 004.5 18.75z" />
                                        </svg>
                                        <span class="flex-1 text-left">Resultados</span>
                                    </button>
                                </li>

                                <!-- Voltar -->
                                <li>
                                    <button wire:click="backToSearch"
                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                        <svg class="w-6 h-6 mr-3 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7" />
                                        </svg>
                                        <span class="flex-1 text-left">Voltar</span>
                                    </button>
                                </li>
                            </ul>
                        </nav>
                        <!-- Conteúdo da Página -->
                        <main class="flex-1 min-h-screen p-6 bg-stone-50">
                            <div class="flex flex-col w-full gap-4 sm:flex-row sm:justify-between sm:items-center">
                                <div class="flex items-center">
                                    <h2
                                        class="pt-2 pb-4 text-2xl font-semibold text-indigo-900 sm:text-3xl md:text-4xl lg:text-5xl">
                                        {{ $nome }}
                                    </h2>
                                </div>

                                <div class="flex flex-col items-center w-full gap-4 sm:flex-row sm:w-auto">
                                    <div x-data="{ show: false, message: '' }" x-show="show"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 transform translate-x-full"
                                        x-transition:enter-end="opacity-100 transform translate-x-0"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100 transform translate-x-0"
                                        x-transition:leave-end="opacity-0 transform translate-x-full"
                                        @notify.window="
                                                        show = true;
                                                        message = $event.detail;
                                                        setTimeout(() => show = false, 3000)"
                                        class="flex items-center justify-center w-full h-12 px-4 text-green-600 bg-green-200 rounded-lg sm:w-auto">
                                        <span x-text="message" class="text-sm sm:text-base"></span>
                                    </div>

                                    <button wire:click="updatePaciente('{{ $IdPaciente }}')"
                                        class="w-full px-4 py-2 text-sm text-white bg-teal-500 rounded-md shadow-sm sm:w-40 hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 sm:text-base">
                                        Salvar alterações
                                    </button>
                                </div>
                            </div>

                            <h2 class="py-5 text-lg font-bold">Medicamentos Usados</h2>

                            @foreach ($medicamentos as $index => $medicamento)
                                <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                                    <h3 class="mb-3 text-lg font-semibold">Medicamento {{ $index + 1 }}</h3>

                                    <div class="mb-6">
                                        <label for="medicamentos.{{ $index }}.nome_generico"
                                            class="block font-medium text-gray-700">Nome Genérico</label>
                                        <input type="text"
                                            wire:model="medicamentos.{{ $index }}.nome_generico"
                                            id="medicamentos.{{ $index }}.nome_generico"
                                            class="block w-full p-3 mt-1 border border-gray-300 rounded-lg shadow-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 bg-gradient-to-r from-gray-100 to-gray-200 hover:bg-gray-200 focus:bg-white placeholder:text-gray-400"
                                            placeholder="Digite o nome genérico">
                                        @error('medicamentos.' . $index . '.nome_generico')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-6">
                                        <label for="medicamentos.{{ $index }}.via_id"
                                            class="block mb-2 font-medium text-gray-700">Via</label>
                                        <select wire:model="medicamentos.{{ $index }}.via_id"
                                            id="medicamentos.{{ $index }}.via_id"
                                            class="block w-full p-3 border border-gray-300 rounded-lg shadow-md focus:ring-indigo-500 focus:border-indigo-500 bg-gradient-to-r from-gray-100 to-gray-200 hover:bg-gray-200 focus:bg-white">
                                            <option value="">Selecione</option>
                                            @foreach ($vias as $via)
                                                <option value="{{ $via->id }}">{{ $via->descricao }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('medicamentos.' . $index . '.via_id')
                                            <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-6">
                                        <label for="medicamentos.{{ $index }}.dose"
                                            class="block font-medium text-gray-700">Dose</label>
                                        <input type="text" wire:model="medicamentos.{{ $index }}.dose"
                                            id="medicamentos.{{ $index }}.dose"
                                            class="block w-full p-3 mt-1 border border-gray-300 rounded-lg shadow-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 bg-gradient-to-r from-gray-100 to-gray-200 hover:bg-gray-200 focus:bg-white placeholder:text-gray-400"
                                            placeholder="Digite a dose">
                                        @error('medicamentos.' . $index . '.dose')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button type="button"
                                        wire:click="removeMedicamento({{ $index }}, {{ $IdPaciente }})"
                                        class="px-4 py-2 font-semibold text-white rounded-lg shadow-sm bg-rose-700 hover:bg-rose-800 focus:outline-none focus:ring-2 focus:ring-rose-600 focus:ring-offset-2">
                                        Remover
                                    </button>
                                </div>
                            @endforeach

                            <button type="button" wire:click="addMedicamento"
                                class="px-4 py-2 mb-4 font-semibold text-white bg-indigo-500 rounded-lg shadow-sm hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Adicionar Medicamento
                            </button>
                        </main>
                    </div>
                </div>
            @endif
        </div>
        <div x-data="{ step: @entangle('currentStep'), open: false }">
            <div x-show="step === 4" x-transition>
                @if ($currentStep == 4)
                    <div class="step">
                        <div class="flex flex-col lg:flex-row">

                            <!-- Barra de Navegação Mobile esquerda!-->
                            <div>
                                <div x-data="{ step: @entangle('currentStep'), mobileMenuOpen: false }">
                                    <div x-show.transition="step === 4" class="bg-stone-50">

                                        <!-- Botão Hambúrguer -->
                                        <button @click="mobileMenuOpen = !mobileMenuOpen"
                                            class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md bg-stone-50 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 lg:hidden">
                                            <svg class="w-6 h-6" stroke="currentColor" fill="none"
                                                viewBox="0 0 24 24">
                                                <path :class="{ 'hidden': open, 'inline-flex': !open }"
                                                    class="inline-flex" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M4 6h16M4 12h16M4 18h16" />
                                                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                        <div x-show="mobileMenuOpen" class="fixed inset-0 z-40 lg:hidden"
                                            @click="mobileMenuOpen = false"></div>
                                        <!-- Nav Mobile Fullscreen -->
                                        <nav x-show="mobileMenuOpen"
                                            x-transition:enter="transition ease-out duration-300"
                                            x-transition:enter-start="opacity-0 -translate-x-full"
                                            x-transition:enter-end="opacity-100 translate-x-0"
                                            x-transition:leave="transition ease-in duration-300"
                                            x-transition:leave-start="opacity-100 translate-x-0"
                                            x-transition:leave-end="opacity-0 -translate-x-full"
                                            class="fixed top-0 left-0 z-50 w-3/5 h-full bg-white border-gray-200 shadow-lg lg:static lg:z-auto lg:w-64 lg:bg-transparent lg:hidden">

                                            <!--Botão de fechar!-->
                                            <button @click="mobileMenuOpen = false" class="absolute top-4 left-4">
                                                <svg class="w-6 h-6 text-gray-400 transition duration-150 ease-in-out bg-white rounded-md hover:text-gray-700 focus:outline-none 0 focus:text-gray-500 lg:hidden"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>

                                            <!-- Lista!-->

                                            <ul class="flex flex-col h-full p-6 space-y-4">
                                                <!-- Dados Sociodemográficos -->
                                                <li>
                                                    <button @click="mobileMenuOpen = false" wire:click="nextStepFirst"
                                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 mt-6 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                        <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                        </svg>
                                                        <span class="flex-1 text-sm text-left sm:text-base">Dados
                                                            Sociodemográficos</span>
                                                    </button>
                                                </li>

                                                <!-- Histórico do Paciente -->
                                                <li>
                                                    <button @click="mobileMenuOpen = false"
                                                        wire:click="nextStepSecond"
                                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                        <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                                        </svg>
                                                        <span class="flex-1 text-sm text-left sm:text-base">Histórico
                                                            do Paciente</span>
                                                    </button>
                                                </li>

                                                <!-- Medicamentos -->
                                                <li>
                                                    <button @click="mobileMenuOpen = false" wire:click="nextStepThird"
                                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                        <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                                        </svg>
                                                        <span
                                                            class="flex-1 text-sm text-left sm:text-base">Medicamentos</span>
                                                    </button>
                                                </li>

                                                <!-- Resultados -->
                                                <li>
                                                    <button @click="mobileMenuOpen = false"
                                                        wire:click="nextStepFourth"
                                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-6 h-6 mr-3 text-indigo-500" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 7.5v9m6-9v9m-9-6h12M4.5 18.75h15a2.25 2.25 0 002.25-2.25v-9A2.25 2.25 0 0019.5 5.25h-15a2.25 2.25 0 00-2.25 2.25v9A2.25 2.25 0 004.5 18.75z" />
                                                        </svg>
                                                        <span
                                                            class="flex-1 text-sm text-left sm:text-base">Resultados</span>
                                                    </button>
                                                </li>

                                                <!-- Voltar -->
                                                <li>
                                                    <button @click="mobileMenuOpen = false" wire:click="backToSearch"
                                                        class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                                        <svg class="w-6 h-6 mr-3 text-gray-500"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 19l-7-7 7-7" />
                                                        </svg>
                                                        <span class="flex-1 text-sm text-left sm:text-base">Voltar
                                                            ao
                                                            menu pacientes</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Barra de Navegação -->
                            <nav class="flex min-h-full p-6 bg-white lg:w-64 lg:block"
                                :class="{ 'block': open, 'hidden': !open }">
                                <ul class="space-y-4">
                                    <!-- Dados Sociodemográficos -->
                                    <li>
                                        <button wire:click="nextStepFirst"
                                            class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                            <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            <span class="flex-1 text-left">Dados Sociodemográficos</span>
                                        </button>
                                    </li>

                                    <!-- Histórico do Paciente -->
                                    <li>
                                        <button wire:click="nextStepSecond"
                                            class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                            <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                            </svg>
                                            <span class="flex-1 text-left">Histórico do Paciente</span>
                                        </button>
                                    </li>

                                    <!-- Medicamentos -->
                                    <li>
                                        <button wire:click="nextStepThird"
                                            class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                            <svg class="w-6 h-6 mr-3 text-indigo-500"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                            </svg>
                                            <span class="flex-1 text-left">Medicamentos</span>
                                        </button>
                                    </li>

                                    <!-- Resultados -->
                                    <li>
                                        <button wire:click="nextStepFourth"
                                            class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-6 h-6 mr-3 text-indigo-500" fill="none"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 7.5v9m6-9v9m-9-6h12M4.5 18.75h15a2.25 2.25 0 002.25-2.25v-9A2.25 2.25 0 0019.5 5.25h-15a2.25 2.25 0 00-2.25 2.25v9A2.25 2.25 0 004.5 18.75z" />
                                            </svg>
                                            <span class="flex-1 text-left">Resultados</span>
                                        </button>
                                    </li>

                                    <!-- Voltar -->
                                    <li>
                                        <button wire:click="backToSearch"
                                            class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                            <svg class="w-6 h-6 mr-3 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 19l-7-7 7-7" />
                                            </svg>
                                            <span class="flex-1 text-left">Voltar</span>
                                        </button>
                                    </li>
                                </ul>
                            </nav>

                            <!-- Conteúdo da Página -->
                            <main class="flex-1 min-h-screen p-6 bg-stone-50">
                                <div class="flex flex-col w-full gap-4 sm:flex-row sm:justify-between sm:items-center">
                                    <div class="flex items-center">
                                        <h2
                                            class="pt-2 pb-4 text-2xl font-semibold text-indigo-900 sm:text-3xl md:text-4xl lg:text-5xl">
                                            {{ $nome }}
                                        </h2>
                                    </div>

                                    <div class="flex flex-col items-center w-full gap-4 sm:flex-row sm:w-auto">
                                        <div x-data="{ show: false, message: '' }" x-show="show"
                                            x-transition:enter="transition ease-out duration-300"
                                            x-transition:enter-start="opacity-0 transform translate-x-full"
                                            x-transition:enter-end="opacity-100 transform translate-x-0"
                                            x-transition:leave="transition ease-in duration-300"
                                            x-transition:leave-start="opacity-100 transform translate-x-0"
                                            x-transition:leave-end="opacity-0 transform translate-x-full"
                                            @notify.window="
                                    show = true;
                                    message = $event.detail;
                                    setTimeout(() => show = false, 3000)"
                                            class="flex items-center justify-center w-full h-12 px-4 text-green-600 bg-green-200 rounded-lg sm:w-auto">
                                            <span x-text="message" class="text-sm sm:text-base"></span>
                                        </div>

                                        <button wire:click="updatePaciente('{{ $IdPaciente }}')"
                                            class="w-full px-4 py-2 text-sm text-white bg-teal-500 rounded-md shadow-sm sm:w-40 hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 sm:text-base">
                                            Salvar alterações
                                        </button>
                                    </div>
                                </div>

                                <!-- Resultados Médicos Prévios -->
                                <h2 class="py-5 text-lg font-bold">Resultados Médicos Prévios</h2>

                                @foreach ($resultados as $index => $resultado)
                                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                                        <h3 class="mb-3 text-lg font-semibold">Resultado {{ $index + 1 }}</h3>

                                        <div class="mb-6">
                                            <label for="resultados.{{ $index }}.texto_resultado"
                                                class="block text-base font-medium text-gray-700">Descrição</label>
                                            <textarea wire:model="resultados.{{ $index }}.texto_resultado"
                                                id="resultados.{{ $index }}.texto_resultado" rows="4"
                                                class="block w-full p-4 mt-2 transition duration-150 ease-in-out border border-gray-300 rounded-lg shadow-md resize-none form-textarea focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 bg-gradient-to-r from-gray-100 to-gray-200 hover:bg-gray-200 hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none"
                                                placeholder="Digite sua descrição aqui..."></textarea>
                                            @error('resultados.' . $index . '.texto_resultado')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Botão de Remover Resultado -->
                                        <button type="button"
                                            wire:click="removeResultado({{ $index }}, {{ $IdPaciente }})"
                                            class="px-4 py-2 font-semibold text-white rounded-lg shadow-sm bg-rose-700 hover:bg-rose-800 focus:outline-none focus:ring-2 focus:ring-rose-600 focus:ring-offset-2">
                                            Remover
                                        </button>
                                    </div>
                                @endforeach

                                <!-- Botão de Adicionar Novo Resultado -->
                                <button type="button" wire:click="addResultado"
                                    class="px-4 py-2 mt-1 mb-4 font-semibold text-white bg-indigo-500 rounded-lg shadow-sm hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    Adicionar Resultado
                                </button>
                            </main>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
