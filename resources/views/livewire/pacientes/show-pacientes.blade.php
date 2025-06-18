<div x-data="{ step: @entangle('currentStep'), open: false }">
    <div x-show="step === 1" x-transition>
        @if ($currentStep == 1)
            <div class="step">
                <div
                    class="relative flex flex-row min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">

                    <!-- Elementos decorativos de fundo -->
                    <div class="absolute inset-0 overflow-hidden pointer-events-none">
                        <div
                            class="absolute bg-indigo-200 rounded-full top-10 left-10 w-72 h-72 mix-blend-multiply filter blur-xl opacity-20">
                        </div>
                        <div
                            class="absolute bg-purple-200 rounded-full opacity-15 top-20 right-10 w-80 h-80 mix-blend-multiply filter blur-xl">
                        </div>
                        <div
                            class="absolute w-64 h-64 bg-pink-200 rounded-full bottom-10 left-20 mix-blend-multiply filter blur-xl opacity-15">
                        </div>
                    </div>

                    <!-- Navigation -->
                    <x-navigation-paciente />

                    <!-- Conteúdo da Página -->
                    <main class="relative z-10 flex-1 py-8 px-6 lg:px-8">
                        <!-- Header Card -->
                        <div class="mb-8 p-6 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                                <!-- Título -->
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 bg-gradient-to-br from-indigo-100 to-indigo-200 rounded-2xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-indigo-700" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h1 class="text-2xl lg:text-4xl font-bold text-indigo-900">{{ $nome }}
                                        </h1>
                                        <p class="text-indigo-600 font-medium">Dados do Paciente</p>
                                    </div>
                                </div>

                                <!-- Actions -->
                                <div class="flex flex-col sm:flex-row gap-4">
                                    <!-- Notification -->
                                    <div x-data="{ show: false, message: '' }" x-show="show"
                                        @notify.window="show = true; message = $event.detail; setTimeout(() => show = false, 3000)"
                                        class="flex items-center px-4 py-2 bg-green-100 text-green-700 rounded-xl border border-green-200">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span x-text="message" class="text-sm font-medium"></span>
                                    </div>

                                    <!-- Save Button -->
                                    <button wire:click="updatePaciente('{{ $IdPaciente }}')"
                                        class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                        <span class="flex items-center">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                            Salvar Alterações
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Form Card -->
                        <div class="p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20">
                            <!-- Section Title -->
                            <div class="mb-8 pb-4 border-b border-indigo-100">
                                <h2 class="text-2xl font-bold text-indigo-900 flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 bg-gradient-to-br from-indigo-100 to-indigo-200 rounded-xl flex items-center justify-center">
                                        <svg class="w-4 h-4 text-indigo-700" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    Dados Sociodemográficos
                                </h2>
                                <p class="text-indigo-600 mt-2">Informações pessoais e demográficas do paciente</p>
                            </div>

                            <!-- Form Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                                <!-- CPF -->
                                <div class="form-group">
                                    <label for="cpf"
                                        class="block text-sm font-semibold text-gray-700 mb-2">CPF</label>
                                    <div class="relative">
                                        <input type="text" wire:model="cpf" id="cpf"
                                            class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                            placeholder="000.000.000-00">
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    @error('cpf')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                                    <div class="relative">
                                        <input type="email" wire:model="email" id="email"
                                            class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                            placeholder="email@exemplo.com">
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                            </svg>
                                        </div>
                                    </div>
                                    @error('email')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Nome -->
                                <div class="form-group">
                                    <label for="nome" class="block text-sm font-semibold text-gray-700 mb-2">Nome
                                        Completo</label>
                                    <input type="text" wire:model="nome" id="nome"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                        placeholder="Nome completo do paciente">
                                    @error('nome')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Prontuário -->
                                <div class="form-group">
                                    <label for="prontuario"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Prontuário</label>
                                    <input type="text" wire:model="prontuario" id="prontuario"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                        placeholder="Número do prontuário">
                                    @error('prontuario')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Data de Nascimento -->
                                <div class="form-group">
                                    <label for="data_nasc" class="block text-sm font-semibold text-gray-700 mb-2">Data
                                        de Nascimento</label>
                                    <input type="date" wire:model="data_nasc" id="data_nasc"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white">
                                    @error('data_nasc')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Sexo -->
                                <div class="form-group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Sexo</label>
                                    <div class="flex gap-4 p-4 bg-white/70 border border-gray-200 rounded-xl">
                                        <label class="flex items-center gap-2 cursor-pointer">
                                            <input type="radio" name="sexo" value="1" wire:model="sexo"
                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                            <span class="text-sm font-medium text-gray-700">Feminino</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer">
                                            <input type="radio" name="sexo" value="0" wire:model="sexo"
                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                            <span class="text-sm font-medium text-gray-700">Masculino</span>
                                        </label>
                                    </div>
                                    @error('sexo')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Orientação Sexual -->
                                <div class="form-group">
                                    <label for="orientacao_sexual_id"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Orientação
                                        Sexual</label>
                                    <select wire:model="orientacao_sexual_id" id="orientacao_sexual_id"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white">
                                        <option value="">Selecione uma opção</option>
                                        @foreach ($orientacoesSexuais as $orientacao)
                                            <option value="{{ $orientacao->id }}">{{ $orientacao->descricao }}</option>
                                        @endforeach
                                    </select>
                                    @error('orientacao_sexual_id')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Estado Civil -->
                                <div class="form-group">
                                    <label for="estado_civil_id"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Estado Civil</label>
                                    <select wire:model="estado_civil_id" id="estado_civil_id"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white">
                                        <option value="">Selecione uma opção</option>
                                        @foreach ($estadosCivis as $estado)
                                            <option value="{{ $estado->id }}">{{ $estado->descricao }}</option>
                                        @endforeach
                                    </select>
                                    @error('estado_civil_id')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Etnia -->
                                <div class="form-group">
                                    <label for="etnia_id"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Etnia</label>
                                    <select wire:model="etnia_id" id="etnia_id"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white">
                                        <option value="">Selecione uma opção</option>
                                        @foreach ($etnias as $etnia)
                                            <option value="{{ $etnia->id }}">{{ $etnia->descricao }}</option>
                                        @endforeach
                                    </select>
                                    @error('etnia_id')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- CEP -->
                                <div class="form-group">
                                    <label for="cep"
                                        class="block text-sm font-semibold text-gray-700 mb-2">CEP</label>
                                    <div class="relative">
                                        <input type="text" wire:model="cep" id="cep"
                                            wire:keydown.enter="buscarEndereco"
                                            class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                            placeholder="00000-000">
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    @error('cep')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Rua -->
                                <div class="form-group">
                                    <label for="rua"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Rua</label>
                                    <input type="text" wire:model="rua" id="rua"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                        placeholder="Nome da rua">
                                    @error('rua')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Número -->
                                <div class="form-group">
                                    <label for="numero"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Número</label>
                                    <input type="number" wire:model="numero" id="numero"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                        placeholder="123">
                                    @error('numero')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Bairro -->
                                <div class="form-group">
                                    <label for="bairro"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Bairro</label>
                                    <input type="text" wire:model="bairro" id="bairro"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                        placeholder="Nome do bairro">
                                    @error('bairro')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Cidade -->
                                <div class="form-group">
                                    <label for="cidade"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Cidade</label>
                                    <input type="text" wire:model="cidade" id="cidade"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                        placeholder="Nome da cidade">
                                    @error('cidade')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- UF -->
                                <div class="form-group">
                                    <label for="uf"
                                        class="block text-sm font-semibold text-gray-700 mb-2">UF</label>
                                    <input type="text" wire:model="uf" id="uf" maxlength="2"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                        placeholder="SP">
                                    @error('uf')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Ocupação -->
                                <div class="form-group">
                                    <label for="ocupacao"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Ocupação</label>
                                    <input type="text" wire:model="ocupacao" id="ocupacao"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                        placeholder="Profissão ou ocupação">
                                    @error('ocupacao')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Renda Familiar -->
                                <div class="form-group">
                                    <label for="renda_familiar"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Renda Familiar</label>
                                    <div class="relative">
                                        <input type="number" wire:model="renda_familiar" id="renda_familiar"
                                            step="0.01" min="0"
                                            class="w-full px-4 py-3 pl-8 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                            placeholder="0,00">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                            <span class="text-gray-500">R$</span>
                                        </div>
                                    </div>
                                    @error('renda_familiar')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Benefício -->
                                <div class="form-group">
                                    <label for="beneficio_id"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Benefício</label>
                                    <select wire:model="beneficio_id" id="beneficio_id"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white">
                                        <option value="">Selecione uma opção</option>
                                        @foreach ($beneficios as $beneficio)
                                            <option value="{{ $beneficio->id }}">{{ $beneficio->descricao }}</option>
                                        @endforeach
                                    </select>
                                    @error('beneficio_id')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Com quem reside -->
                                <div class="form-group">
                                    <label for="reside_id" class="block text-sm font-semibold text-gray-700 mb-2">Com
                                        quem reside</label>
                                    <select wire:model="reside_id" id="reside_id"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white">
                                        <option value="">Selecione uma opção</option>
                                        @foreach ($resides as $reside)
                                            <option value="{{ $reside->id }}">{{ $reside->descricao }}</option>
                                        @endforeach
                                    </select>
                                    @error('reside_id')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Número de pessoas em casa -->
                                <div class="form-group">
                                    <label for="num_pss_casa"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Pessoas em casa</label>
                                    <input type="number" wire:model="num_pss_casa" id="num_pss_casa"
                                        class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                        placeholder="Quantidade de pessoas">
                                    @error('num_pss_casa')
                                        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

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
                    <div
                        class="relative flex flex-row min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">

                        <!-- Elementos decorativos de fundo -->
                        <div class="absolute inset-0 overflow-hidden pointer-events-none">
                            <div
                                class="absolute bg-indigo-200 rounded-full top-10 left-10 w-72 h-72 mix-blend-multiply filter blur-xl opacity-20">
                            </div>
                            <div
                                class="absolute bg-purple-200 rounded-full opacity-15 top-20 right-10 w-80 h-80 mix-blend-multiply filter blur-xl">
                            </div>
                            <div
                                class="absolute w-64 h-64 bg-pink-200 rounded-full bottom-10 left-20 mix-blend-multiply filter blur-xl opacity-15">
                            </div>
                        </div>

                        <!-- Navigation -->
                        <x-navigation-paciente />

                        <!-- Conteúdo da Página -->
                        <main class="relative z-10 flex-1 py-8 px-6 lg:px-8">
                            <!-- Header Card -->
                            <div
                                class="mb-8 p-6 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20">
                                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                                    <!-- Título -->
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-12 h-12 bg-gradient-to-br from-indigo-100 to-purple-200 rounded-2xl flex items-center justify-center">
                                            <svg class="w-6 h-6 text-purple-700" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h1 class="text-2xl lg:text-4xl font-bold text-indigo-900">
                                                {{ $nome }}</h1>
                                            <p class="text-indigo-600 font-medium">Histórico do Paciente</p>
                                        </div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="flex flex-col sm:flex-row gap-4">
                                        <!-- Notification -->
                                        <div x-data="{ show: false, message: '' }" x-show="show" x-cloak
                                            @notify.window="show = true; message = $event.detail; setTimeout(() => show = false, 3000)"
                                            class="flex items-center px-4 py-2 bg-green-100 text-green-700 rounded-xl border border-green-200">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span x-text="message" class="text-sm font-medium"></span>
                                        </div>

                                        <!-- Save Button -->
                                        <button wire:click="updatePaciente('{{ $IdPaciente }}')"
                                            class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-4 focus:ring-purple-300">
                                            <span class="flex items-center">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                Salvar Alterações
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Histórico Médico Card -->
                            <div
                                class="mb-8 p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20">
                                <!-- Section Title -->
                                <div class="mb-8 pb-4 border-b border-purple-100">
                                    <h2 class="text-2xl font-bold text-indigo-900 flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 bg-gradient-to-br from-indigo-100 to-purple-200 rounded-xl flex items-center justify-center">
                                            <svg class="w-4 h-4 text-purple-700" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                            </svg>
                                        </div>
                                        Histórico Médico
                                    </h2>
                                    <p class="text-indigo-600 mt-2">Informações sobre diabetes, cirurgias e hábitos do
                                        paciente</p>
                                </div>

                                <!-- Form Grid -->
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">

                                    <!-- Tipo de Diabetes -->
                                    <div class="form-group">
                                        <label for="tipo_diabetes_id"
                                            class="block text-sm font-semibold text-gray-700 mb-2">
                                            Tipo de Diabetes
                                        </label>
                                        <div class="relative">
                                            <select wire:model="tipo_diabetes_id" id="tipo_diabetes_id"
                                                class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:bg-white appearance-none">
                                                <option value="">Selecione o tipo</option>
                                                @foreach ($tipoDiabetes as $tipo)
                                                    <option value="{{ $tipo->id }}">{{ $tipo->tipo }}</option>
                                                @endforeach
                                            </select>
                                            <div
                                                class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-400" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </div>
                                        </div>
                                        @error('tipo_diabetes_id')
                                            <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Cirurgia -->
                                    <div class="form-group">
                                        <label for="cirurgia_motivo"
                                            class="block text-sm font-semibold text-gray-700 mb-2">
                                            Cirurgias Realizadas
                                        </label>
                                        <div class="relative">
                                            <input type="text" wire:model="cirurgia_motivo" id="cirurgia_motivo"
                                                class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:bg-white"
                                                placeholder="Descreva as cirurgias realizadas">
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <svg class="w-5 h-5 text-gray-400" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                                </svg>
                                            </div>
                                        </div>
                                        @error('cirurgia_motivo')
                                            <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Amputação - Local -->
                                    <div class="form-group">
                                        <label for="amputacao_onde"
                                            class="block text-sm font-semibold text-gray-700 mb-2">
                                            Local da Amputação
                                        </label>
                                        <input type="text" wire:model="amputacao_onde" id="amputacao_onde"
                                            class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:bg-white"
                                            placeholder="Onde foi realizada a amputação">
                                        @error('amputacao_onde')
                                            <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Amputação - Data -->
                                    <div class="form-group">
                                        <label for="amputacao_quando"
                                            class="block text-sm font-semibold text-gray-700 mb-2">
                                            Data da Amputação
                                        </label>
                                        <input type="date" wire:model="amputacao_quando" id="amputacao_quando"
                                            class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:bg-white">
                                        @error('amputacao_quando')
                                            <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Número de Cigarros -->
                                    <div class="form-group">
                                        <label for="n_cigarros"
                                            class="block text-sm font-semibold text-gray-700 mb-2">
                                            Cigarros por Dia
                                        </label>
                                        <div class="relative">
                                            <input type="number" wire:model="n_cigarros" id="n_cigarros"
                                                min="0"
                                                class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:bg-white"
                                                placeholder="Quantidade diária">
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <svg class="w-5 h-5 text-gray-400" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                        </div>
                                        @error('n_cigarros')
                                            <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Início do Tabagismo -->
                                    <div class="form-group">
                                        <label for="inicio_tabagismo"
                                            class="block text-sm font-semibold text-gray-700 mb-2">
                                            Início do Tabagismo
                                        </label>
                                        <input type="date" wire:model="inicio_tabagismo" id="inicio_tabagismo"
                                            class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:bg-white">
                                        @error('inicio_tabagismo')
                                            <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Início do Etilismo -->
                                    <div class="form-group">
                                        <label for="inicio_etilismo"
                                            class="block text-sm font-semibold text-gray-700 mb-2">
                                            Início do Etilismo
                                        </label>
                                        <input type="date" wire:model="inicio_etilismo" id="inicio_etilismo"
                                            class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:bg-white">
                                        @error('inicio_etilismo')
                                            <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Medicamento causador de alergia (campo condicional) -->
                                    @if (in_array(4, $alergias ?? []) && !empty($medicamento_alergia))
                                        <div class="form-group">
                                            <label for="medicamento_alergia"
                                                class="block text-sm font-semibold text-gray-700 mb-2">
                                                Medicamento Causador de Alergia
                                            </label>
                                            <div class="relative">
                                                <input type="text" wire:model="medicamento_alergia"
                                                    id="medicamento_alergia"
                                                    class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:bg-white"
                                                    placeholder="Ex: Penicilina, dipirona, aspirina...">
                                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                    <svg class="w-5 h-5 text-gray-400" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            @error('medicamento_alergia')
                                                <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    @endif

                                    <!-- Alimento causador de alergia (campo condicional) -->
                                    @if (in_array(2, $alergias ?? []) && !empty($alimento_alergia))
                                        <div class="form-group">
                                            <label for="alimento_alergia"
                                                class="block text-sm font-semibold text-gray-700 mb-2">
                                                Alimento Causador de Alergia
                                            </label>
                                            <div class="relative">
                                                <input type="text" wire:model="alimento_alergia"
                                                    id="alimento_alergia"
                                                    class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:bg-white"
                                                    placeholder="Ex: Amendoim, leite, ovos...">
                                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                    <svg class="w-5 h-5 text-gray-400" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            @error('alimento_alergia')
                                                <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    @endif

                                </div>
                            </div>

                            <!-- Comorbidades e Alergias Card -->
                            <div class="p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20">
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                                    <!-- Comorbidades -->
                                    <div class="lg:col-span-2">
                                        <div class="mb-6 pb-4 border-b border-purple-100">
                                            <h3 class="text-xl font-bold text-indigo-900 flex items-center gap-3">
                                                <div
                                                    class="w-7 h-7 bg-gradient-to-br from-red-100 to-red-200 rounded-lg flex items-center justify-center">
                                                    <svg class="w-4 h-4 text-red-700" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                                    </svg>
                                                </div>
                                                Comorbidades
                                            </h3>
                                            <p class="text-indigo-600 mt-1">Condições médicas associadas</p>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-3">
                                            @foreach ($comorbidadesList as $comorbidade)
                                                <div class="group relative">
                                                    <input type="checkbox" id="comorbidade_{{ $comorbidade->id }}"
                                                        wire:model="comorbidades" value="{{ $comorbidade->id }}"
                                                        class="sr-only peer"
                                                        {{ in_array($comorbidade->id, $comorbidades) ? 'checked' : '' }}>
                                                    <label for="comorbidade_{{ $comorbidade->id }}"
                                                        class="flex items-center p-4 bg-white border-2 border-gray-200 rounded-xl cursor-pointer peer-checked:border-red-500 peer-checked:bg-red-50 hover:border-red-300 hover:bg-red-25">
                                                        <div
                                                            class="flex items-center justify-center w-5 h-5 mr-3 border-2 border-gray-300 rounded peer-checked:border-red-500 peer-checked:bg-red-500">
                                                            <svg class="w-3 h-3 text-white opacity-0 peer-checked:opacity-100"
                                                                fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="text-sm font-medium text-gray-700 peer-checked:text-red-700">
                                                            {{ $comorbidade->descricao }}
                                                        </span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Alergias -->
                                    <div class="lg:col-span-1">
                                        <div class="mb-6 pb-4 border-b border-purple-100">
                                            <h3 class="text-xl font-bold text-indigo-900 flex items-center gap-3">
                                                <div
                                                    class="w-7 h-7 bg-gradient-to-br from-orange-100 to-orange-200 rounded-lg flex items-center justify-center">
                                                    <svg class="w-4 h-4 text-orange-700" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                                    </svg>
                                                </div>
                                                Alergias
                                            </h3>
                                            <p class="text-indigo-600 mt-1">Reações alérgicas conhecidas</p>
                                        </div>

                                        <div class="space-y-3">
                                            @foreach ($alergiasList as $alergia)
                                                <div class="group relative">
                                                    <input type="checkbox" id="alergia_{{ $alergia->id }}"
                                                        wire:model="alergias" value="{{ $alergia->id }}"
                                                        class="sr-only peer"
                                                        {{ in_array($alergia->id, $alergias) ? 'checked' : '' }}>
                                                    <label for="alergia_{{ $alergia->id }}"
                                                        class="flex items-center p-4 bg-white border-2 border-gray-200 rounded-xl cursor-pointer peer-checked:border-orange-500 peer-checked:bg-orange-50 hover:border-orange-300 hover:bg-orange-25">
                                                        <div
                                                            class="flex items-center justify-center w-5 h-5 mr-3 border-2 border-gray-300 rounded peer-checked:border-orange-500 peer-checked:bg-orange-500">
                                                            <svg class="w-3 h-3 text-white opacity-0 peer-checked:opacity-100"
                                                                fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="text-sm font-medium text-gray-700 peer-checked:text-orange-700">
                                                            {{ $alergia->descricao }}
                                                        </span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div x-data="{ step: @entangle('currentStep'), open: false }">
        <div x-show="step === 3" x-transition>
            @if ($currentStep == 3)
                <div class="step">
                    <div
                        class="relative flex flex-row min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">

                        <!-- Elementos decorativos de fundo -->
                        <div class="absolute inset-0 overflow-hidden pointer-events-none">
                            <div
                                class="absolute bg-indigo-200 rounded-full top-10 left-10 w-72 h-72 mix-blend-multiply filter blur-xl opacity-20">
                            </div>
                            <div
                                class="absolute bg-purple-200 rounded-full opacity-15 top-20 right-10 w-80 h-80 mix-blend-multiply filter blur-xl">
                            </div>
                            <div
                                class="absolute w-64 h-64 bg-pink-200 rounded-full bottom-10 left-20 mix-blend-multiply filter blur-xl opacity-15">
                            </div>
                        </div>

                        <!-- Navigation -->
                        <x-navigation-paciente />

                        <!-- Conteúdo da Página -->
                        <main class="relative z-10 flex-1 py-8 px-6 lg:px-8">

                            <!-- Header Card -->
                            <div
                                class="mb-8 p-6 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20">
                                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                                    <!-- Título -->
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-12 h-12 bg-gradient-to-br from-pink-100 to-pink-200 rounded-2xl flex items-center justify-center">
                                            <svg class="w-6 h-6 text-pink-700" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h1 class="text-2xl lg:text-4xl font-bold text-indigo-900">
                                                {{ $nome }}</h1>
                                            <p class="text-indigo-600 font-medium">Medicamentos em Uso</p>
                                        </div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="flex flex-col sm:flex-row gap-4">
                                        <!-- Notification -->
                                        <div x-data="{ show: false, message: '' }" x-show="show"
                                            @notify.window="show = true; message = $event.detail; setTimeout(() => show = false, 3000)"
                                            class="flex items-center px-4 py-2 bg-green-100 text-green-700 rounded-xl border border-green-200">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span x-text="message" class="text-sm font-medium"></span>
                                        </div>

                                        <!-- Save Button -->
                                        <button wire:click="updatePaciente('{{ $IdPaciente }}')"
                                            class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                            <span class="flex items-center">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                Salvar Alterações
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Medicamentos Section -->
                            <div class="p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20">

                                <!-- Section Title -->
                                <div class="mb-8 pb-4 border-b border-indigo-100">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h2 class="text-2xl font-bold text-indigo-900 flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 bg-gradient-to-br from-pink-100 to-pink-200 rounded-xl flex items-center justify-center">
                                                    <svg class="w-4 h-4 text-pink-700" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                                    </svg>
                                                </div>
                                                Medicamentos em Uso
                                            </h2>
                                            <p class="text-indigo-600 mt-2">Registro detalhado dos medicamentos
                                                utilizados pelo paciente</p>
                                        </div>

                                        <!-- Add Medicamento Button -->
                                        <button type="button" wire:click="addMedicamento"
                                            class="px-6 py-3 bg-gradient-to-r from-green-500 to-emerald-600 text-white font-semibold rounded-xl shadow-lg hover:from-green-600 hover:to-emerald-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                                            <span class="flex items-center">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                </svg>
                                                Adicionar Medicamento
                                            </span>
                                        </button>
                                    </div>
                                </div>

                                <!-- Medicamentos Cards -->
                                <div class="space-y-6">
                                    @foreach ($medicamentos as $index => $medicamento)
                                        <div
                                            class="p-6 bg-gradient-to-r from-white to-gray-50 border border-gray-200 rounded-2xl shadow-sm hover:shadow-md">

                                            <!-- Card Header -->
                                            <div
                                                class="flex items-center justify-between mb-6 pb-4 border-b border-gray-200">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-10 h-10 bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl flex items-center justify-center">
                                                        <span
                                                            class="text-sm font-bold text-blue-700">{{ $index + 1 }}</span>
                                                    </div>
                                                    <h3 class="text-xl font-bold text-gray-800">Medicamento
                                                        {{ $index + 1 }}</h3>
                                                </div>

                                                <!-- Remove Button -->
                                                <button type="button"
                                                    wire:click="removeMedicamento({{ $index }}, {{ $IdPaciente }})"
                                                    class="px-4 py-2 bg-gradient-to-r from-red-500 to-rose-600 text-white font-semibold rounded-xl shadow-lg hover:from-red-600 hover:to-rose-700 focus:outline-none focus:ring-4 focus:ring-red-300">
                                                    <span class="flex items-center">
                                                        <svg class="w-4 h-4 mr-2" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        Remover
                                                    </span>
                                                </button>
                                            </div>

                                            <!-- Form Fields Grid -->
                                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                                                <!-- Nome Genérico -->
                                                <div class="form-group lg:col-span-2">
                                                    <label for="medicamentos.{{ $index }}.nome_generico"
                                                        class="block text-sm font-semibold text-gray-700 mb-2">Nome
                                                        Genérico</label>
                                                    <div class="relative">
                                                        <input type="text"
                                                            wire:model="medicamentos.{{ $index }}.nome_generico"
                                                            id="medicamentos.{{ $index }}.nome_generico"
                                                            class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                                            placeholder="Digite o nome genérico do medicamento">
                                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                            <svg class="w-5 h-5 text-gray-400" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    @error('medicamentos.' . $index . '.nome_generico')
                                                        <span
                                                            class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Via -->
                                                <div class="form-group">
                                                    <label for="medicamentos.{{ $index }}.via_id"
                                                        class="block text-sm font-semibold text-gray-700 mb-2">Via de
                                                        Administração</label>
                                                    <div class="relative">
                                                        <select wire:model="medicamentos.{{ $index }}.via_id"
                                                            id="medicamentos.{{ $index }}.via_id"
                                                            class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white appearance-none">
                                                            <option value="">Selecione a via</option>
                                                            @foreach ($vias as $via)
                                                                <option value="{{ $via->id }}">
                                                                    {{ $via->descricao }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div
                                                            class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                            <svg class="w-5 h-5 text-gray-400" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M19 9l-7 7-7-7" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    @error('medicamentos.' . $index . '.via_id')
                                                        <span
                                                            class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Dose -->
                                                <div class="form-group">
                                                    <label for="medicamentos.{{ $index }}.dose"
                                                        class="block text-sm font-semibold text-gray-700 mb-2">Dose</label>
                                                    <div class="relative">
                                                        <input type="text"
                                                            wire:model="medicamentos.{{ $index }}.dose"
                                                            id="medicamentos.{{ $index }}.dose"
                                                            class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white"
                                                            placeholder="Ex: 500mg">
                                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                            <svg class="w-5 h-5 text-gray-400" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    @error('medicamentos.' . $index . '.dose')
                                                        <span
                                                            class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Horário -->
                                                <div class="form-group lg:col-span-2">
                                                    <label for="medicamentos.{{ $index }}.horario_med_id"
                                                        class="block text-sm font-semibold text-gray-700 mb-2">Horário
                                                        de Administração</label>
                                                    <div class="relative">
                                                        <select
                                                            wire:model="medicamentos.{{ $index }}.horario_med_id"
                                                            id="medicamentos.{{ $index }}.horario_med_id"
                                                            class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white appearance-none">
                                                            <option value="">Selecione o horário</option>
                                                            @foreach ($horarios_med as $horario)
                                                                <option value="{{ $horario->id }}">
                                                                    {{ $horario->descricao }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div
                                                            class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                            <svg class="w-5 h-5 text-gray-400" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    @error('medicamentos.' . $index . '.horario_med_id')
                                                        <span
                                                            class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <!-- Empty State -->
                                    @if (empty($medicamentos))
                                        <div
                                            class="flex flex-col items-center justify-center py-12 px-6 text-center bg-gray-50 rounded-2xl border-2 border-dashed border-gray-300">
                                            <div
                                                class="w-16 h-16 bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl flex items-center justify-center mb-4">
                                                <svg class="w-8 h-8 text-gray-400" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                                </svg>
                                            </div>
                                            <h3 class="text-lg font-semibold text-gray-600 mb-2">Nenhum medicamento
                                                cadastrado</h3>
                                            <p class="text-gray-500 mb-6">Clique no botão "Adicionar Medicamento" para
                                                começar o registro.</p>
                                            <button type="button" wire:click="addMedicamento"
                                                class="px-6 py-3 bg-gradient-to-r from-green-500 to-emerald-600 text-white font-semibold rounded-xl shadow-lg hover:from-green-600 hover:to-emerald-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                                                <span class="flex items-center">
                                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                    </svg>
                                                    Adicionar Primeiro Medicamento
                                                </span>
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            @endif
        </div>
        <div x-data="{ step: @entangle('currentStep'), open: false }">
            <div x-show="step === 4" x-transition>
                @if ($currentStep == 4)
                    <div class="step">
                        <div
                            class="relative flex flex-row min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">

                            <!-- Elementos decorativos de fundo -->
                            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                                <div
                                    class="absolute bg-indigo-200 rounded-full top-10 left-10 w-72 h-72 mix-blend-multiply filter blur-xl opacity-20">
                                </div>
                                <div
                                    class="absolute bg-purple-200 rounded-full opacity-15 top-20 right-10 w-80 h-80 mix-blend-multiply filter blur-xl">
                                </div>
                                <div
                                    class="absolute w-64 h-64 bg-pink-200 rounded-full bottom-10 left-20 mix-blend-multiply filter blur-xl opacity-15">
                                </div>
                            </div>

                            <!-- Navigation -->
                            <x-navigation-paciente />

                            <!-- Conteúdo da Página -->
                            <main class="relative z-10 flex-1 py-8 px-6 lg:px-8">

                                <!-- Header Card -->
                                <div
                                    class="mb-8 p-6 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20">
                                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                                        <!-- Título -->
                                        <div class="flex items-center gap-4">
                                            <div
                                                class="w-12 h-12 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-2xl flex items-center justify-center">
                                                <svg class="w-6 h-6 text-emerald-700" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h1 class="text-2xl lg:text-4xl font-bold text-indigo-900">
                                                    {{ $nome }}</h1>
                                                <p class="text-indigo-600 font-medium">Resultados Médicos Prévios</p>
                                            </div>
                                        </div>

                                        <!-- Actions -->
                                        <div class="flex flex-col sm:flex-row gap-4">
                                            <!-- Notification -->
                                            <div x-data="{ show: false, message: '' }" x-show="show"
                                                @notify.window="show = true; message = $event.detail; setTimeout(() => show = false, 3000)"
                                                class="flex items-center px-4 py-2 bg-green-100 text-green-700 rounded-xl border border-green-200">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                <span x-text="message" class="text-sm font-medium"></span>
                                            </div>

                                            <!-- Save Button -->
                                            <button wire:click="updatePaciente('{{ $IdPaciente }}')"
                                                class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                                <span class="flex items-center">
                                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    Salvar Alterações
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Resultados Section -->
                                <div
                                    class="p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20">

                                    <!-- Section Title -->
                                    <div class="mb-8 pb-4 border-b border-indigo-100">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h2 class="text-2xl font-bold text-indigo-900 flex items-center gap-3">
                                                    <div
                                                        class="w-8 h-8 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-xl flex items-center justify-center">
                                                        <svg class="w-4 h-4 text-emerald-700" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                        </svg>
                                                    </div>
                                                    Histórico de Exames
                                                </h2>
                                                <p class="text-indigo-600 mt-2">Registro dos resultados médicos e
                                                    exames realizados</p>
                                            </div>

                                            <!-- Add Resultado Button -->
                                            <button type="button" wire:click="addResultado"
                                                class="px-6 py-3 bg-gradient-to-r from-green-500 to-emerald-600 text-white font-semibold rounded-xl shadow-lg hover:from-green-600 hover:to-emerald-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                                                <span class="flex items-center">
                                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                    </svg>
                                                    Adicionar Resultado
                                                </span>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Resultados Cards -->
                                    <div class="space-y-6">
                                        @foreach ($resultados as $index => $resultado)
                                            <div
                                                class="p-6 bg-gradient-to-r from-white to-gray-50 border border-gray-200 rounded-2xl shadow-sm hover:shadow-md">

                                                <!-- Card Header -->
                                                <div
                                                    class="flex items-center justify-between mb-6 pb-4 border-b border-gray-200">
                                                    <div class="flex items-center gap-3">
                                                        <div
                                                            class="w-10 h-10 bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl flex items-center justify-center">
                                                            <span
                                                                class="text-sm font-bold text-blue-700">{{ $index + 1 }}</span>
                                                        </div>
                                                        <div>
                                                            <h3 class="text-xl font-bold text-gray-800">Resultado
                                                                {{ $index + 1 }}</h3>
                                                            <p class="text-sm text-gray-500">Exame médico registrado
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <!-- Remove Button -->
                                                    <button type="button"
                                                        wire:click="removeResultado({{ $index }}, {{ $IdPaciente }})"
                                                        class="px-4 py-2 bg-gradient-to-r from-red-500 to-rose-600 text-white font-semibold rounded-xl shadow-lg hover:from-red-600 hover:to-rose-700 focus:outline-none focus:ring-4 focus:ring-red-300">
                                                        <span class="flex items-center">
                                                            <svg class="w-4 h-4 mr-2" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                            Remover
                                                        </span>
                                                    </button>
                                                </div>

                                                <!-- Form Fields Grid -->
                                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                                                    <!-- Data do Exame -->
                                                    <div class="form-group">
                                                        <label for="resultados.{{ $index }}.data_exame"
                                                            class="block text-sm font-semibold text-gray-700 mb-2">Data
                                                            do Exame</label>
                                                        <div class="relative">
                                                            <input type="date"
                                                                wire:model="resultados.{{ $index }}.data_exame"
                                                                id="resultados.{{ $index }}.data_exame"
                                                                class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white">
                                                            <div
                                                                class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                                <svg class="w-5 h-5 text-gray-400" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        @error('resultados.' . $index . '.data_exame')
                                                            <span
                                                                class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <!-- Descrição do Resultado -->
                                                    <div class="form-group lg:col-span-2">
                                                        <label for="resultados.{{ $index }}.texto_resultado"
                                                            class="block text-sm font-semibold text-gray-700 mb-2">Descrição
                                                            do Resultado</label>
                                                        <div class="relative">
                                                            <textarea wire:model="resultados.{{ $index }}.texto_resultado"
                                                                id="resultados.{{ $index }}.texto_resultado" rows="4"
                                                                class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white resize-none"
                                                                placeholder="Descreva os resultados do exame, valores encontrados, observações médicas relevantes..."></textarea>
                                                            <div class="absolute top-3 right-3">
                                                                <svg class="w-5 h-5 text-gray-400" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        @error('resultados.' . $index . '.texto_resultado')
                                                            <span
                                                                class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- Card Footer with Summary -->
                                                <div class="mt-4 pt-4 border-t border-gray-100">
                                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                        <span>
                                                            @if ($resultado['resultado_exame'] ?? false)
                                                                Exame realizado em
                                                                {{ \Carbon\Carbon::parse($resultado['resultado_exame'])->format('d/m/Y') }}
                                                            @else
                                                                Data do exame não informada
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        <!-- Empty State -->
                                        @if (empty($resultados))
                                            <div
                                                class="flex flex-col items-center justify-center py-12 px-6 text-center bg-gray-50 rounded-2xl border-2 border-dashed border-gray-300">
                                                <div
                                                    class="w-16 h-16 bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl flex items-center justify-center mb-4">
                                                    <svg class="w-8 h-8 text-gray-400" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                    </svg>
                                                </div>
                                                <h3 class="text-lg font-semibold text-gray-600 mb-2">Nenhum resultado
                                                    cadastrado</h3>
                                                <p class="text-gray-500 mb-6">Registre os resultados de exames médicos
                                                    para acompanhar o histórico do paciente.</p>
                                                <button type="button" wire:click="addResultado"
                                                    class="px-6 py-3 bg-gradient-to-r from-green-500 to-emerald-600 text-white font-semibold rounded-xl shadow-lg hover:from-green-600 hover:to-emerald-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                                                    <span class="flex items-center">
                                                        <svg class="w-5 h-5 mr-2" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                        </svg>
                                                        Adicionar Primeiro Resultado
                                                    </span>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div x-data="{ step: @entangle('currentStep'), open: false }">
            <div x-show="step === 5" x-transition>
                @if ($currentStep == 5)
                    <div class="step">
                        <div
                            class="relative flex flex-row min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">

                            <!-- Elementos decorativos de fundo -->
                            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                                <div
                                    class="absolute bg-indigo-200 rounded-full top-10 left-10 w-72 h-72 mix-blend-multiply filter blur-xl opacity-20">
                                </div>
                                <div
                                    class="absolute bg-purple-200 rounded-full opacity-15 top-20 right-10 w-80 h-80 mix-blend-multiply filter blur-xl">
                                </div>
                                <div
                                    class="absolute w-64 h-64 bg-pink-200 rounded-full bottom-10 left-20 mix-blend-multiply filter blur-xl opacity-15">
                                </div>
                            </div>

                            <!-- Navigation -->
                            <x-navigation-paciente />

                            <!-- Conteúdo da Página -->
                            <main class="relative z-10 flex-1 py-8 px-6 lg:px-8">
                                <!-- Header Card -->
                                <div
                                    class="mb-8 p-6 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20">
                                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                                        <!-- Título -->
                                        <div class="flex items-center gap-4">
                                            <div
                                                class="w-12 h-12 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-2xl flex items-center justify-center">
                                                <svg class="w-6 h-6 text-yellow-700" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h1 class="text-2xl lg:text-4xl font-bold text-indigo-900">
                                                    {{ $nome }}</h1>
                                                <p class="text-indigo-600 font-medium">Unidade de Saúde</p>
                                            </div>
                                        </div>

                                        <!-- Actions -->
                                        <div class="flex flex-col sm:flex-row gap-4">
                                            <!-- Notification -->
                                            <div x-data="{ show: false, message: '' }" x-show="show"
                                                @notify.window="show = true; message = $event.detail; setTimeout(() => show = false, 3000)"
                                                class="flex items-center px-4 py-2 bg-green-100 text-green-700 rounded-xl border border-green-200">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                <span x-text="message" class="text-sm font-medium"></span>
                                            </div>

                                            <!-- Save Button -->
                                            <button wire:click="updatePaciente('{{ $IdPaciente }}')"
                                                class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                                <span class="flex items-center">
                                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    Salvar Alterações
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Form Card -->
                                <div
                                    class="p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20">
                                    <!-- Section Title -->
                                    <div class="mb-8 pb-4 border-b border-indigo-100">
                                        <h2 class="text-2xl font-bold text-indigo-900 flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-xl flex items-center justify-center">
                                                <svg class="w-4 h-4 text-yellow-700" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                                </svg>
                                            </div>
                                            Unidade de Saúde do Paciente
                                        </h2>
                                        <p class="text-indigo-600 mt-2">Selecione a unidade de saúde responsável pelo
                                            atendimento do paciente</p>
                                    </div>

                                    <!-- Form Content -->
                                    <div class="max-w-2xl">
                                        <!-- Unidade de Saúde Selection -->
                                        <div class="form-group">
                                            <label for="unidade_saude_id"
                                                class="block text-sm font-semibold text-gray-700 mb-2">
                                                Unidade de Saúde
                                            </label>
                                            <div class="relative">
                                                <select wire:model="unidade_saude_id" id="unidade_saude_id"
                                                    class="w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:bg-white appearance-none pr-12">
                                                    <option value="">Selecione uma unidade de saúde...</option>
                                                    @foreach ($unidadesSaude as $unidade)
                                                        <option value="{{ $unidade->id }}">{{ $unidade->nome }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <!-- Custom dropdown arrow -->
                                                <div
                                                    class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                    <svg class="w-5 h-5 text-gray-400" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M19 9l-7 7-7-7" />
                                                    </svg>
                                                </div>
                                            </div>
                                            @error('unidade_saude_id')
                                                <span class="text-sm text-red-500 mt-1 flex items-center">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- Info Card -->
                                        <div class="mt-6 p-4 bg-indigo-50/50 border border-indigo-100 rounded-xl">
                                            <div class="flex items-start gap-3">
                                                <div
                                                    class="w-5 h-5 bg-indigo-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                                    <svg class="w-3 h-3 text-indigo-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-indigo-800">Informação
                                                        Importante</p>
                                                    <p class="text-sm text-indigo-700 mt-1">
                                                        A unidade de saúde selecionada será responsável pelo
                                                        acompanhamento e tratamento do paciente.
                                                        Certifique-se de selecionar a unidade correta.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
