<div x-data="{ step: @entangle('currentStep') }">
    <form wire:submit.prevent="submitForm">
        <div x-show="step === 1" x-transition>
            {{-- Etapa 1: Dados Sociodemográficos --}}
            @if ($currentStep == 1)
                <div
                    class="relative flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">

                    <!-- Elementos de fundo otimizados -->
                    <div class="absolute inset-0 pointer-events-none -z-10">
                        <div class="absolute w-60 h-60 bg-indigo-200 rounded-full top-12 left-12 opacity-20"></div>
                        <div class="absolute w-64 h-64 bg-purple-200 rounded-full top-24 right-12 opacity-15"></div>
                        <div class="absolute w-56 h-56 bg-pink-200 rounded-full bottom-12 left-20 opacity-10"></div>
                    </div>

                    <div class="relative z-10 flex-grow">
                        <!-- Cabeçalho -->
                        <header class="py-10 text-center">
                            <div class="container px-6 mx-auto">
                                <h1 class="text-5xl font-extrabold text-indigo-900">So<span
                                        class="text-indigo-600">Pe</span>P</h1>
                                <p class="text-lg text-gray-600 mt-3">Cadastro de <span
                                        class="text-indigo-600">Paciente</span></p>
                                <p class="text-sm text-gray-500 mt-1 max-w-xl mx-auto">Preencha os dados
                                    sociodemográficos do paciente para iniciar o acompanhamento.</p>
                            </div>
                        </header>

                        <!-- Formulário -->
                        <main class="container px-6 mx-auto pb-16">
                            <div
                                class="max-w-6xl mx-auto bg-white/80 rounded-2xl border border-white/30 shadow p-8 md:p-12">

                                <!-- Título da seção -->
                                <div class="text-center mb-10">
                                    <h2 class="text-3xl font-bold text-indigo-900">Dados Sociodemográficos</h2>
                                    <div class="w-24 h-1 mx-auto bg-indigo-600 mt-2 rounded-full"></div>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                                    <!-- Coluna 1 -->
                                    <div class="space-y-6">

                                        <!-- Informações Pessoais -->
                                        <section class="bg-indigo-50/50 border border-indigo-100/40 rounded-xl p-6">
                                            <h3 class="text-lg font-semibold text-indigo-800 mb-4">Informações Pessoais
                                            </h3>

                                            <div class="space-y-4">
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                    <x-input label="CPF" id="cpf" type="text"
                                                        wire:model.lazy="cpf" placeholder="000.000.000-00" />

                                                    <!-- Campo Sexo com x-input personalizado -->
                                                    <div class="group">
                                                        <label for="sexo"
                                                            class="block text-sm font-medium text-gray-700 mb-1">Sexo</label>
                                                        <div
                                                            class="flex space-x-4 px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus-within:border-indigo-500 focus-within:ring-indigo-200 focus-within:ring-2 bg-white/90">
                                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                                <input type="radio" name="sexo" value="1"
                                                                    wire:model.lazy="sexo"
                                                                    class="w-4 h-4 text-indigo-600 bg-white border-2 border-gray-300 focus:ring-indigo-500 focus:ring-2">
                                                                <span
                                                                    class="text-sm text-gray-700 font-medium">Feminino</span>
                                                            </label>
                                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                                <input type="radio" name="sexo" value="0"
                                                                    wire:model.lazy="sexo"
                                                                    class="w-4 h-4 text-indigo-600 bg-white border-2 border-gray-300 focus:ring-indigo-500 focus:ring-2">
                                                                <span
                                                                    class="text-sm text-gray-700 font-medium">Masculino</span>
                                                            </label>
                                                        </div>
                                                        @error('sexo')
                                                            <span
                                                                class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <x-input label="Nome Completo" id="nome" type="text"
                                                    wire:model.lazy="nome" placeholder="Digite o nome completo" />
                                                <x-input label="Email" id="email" type="email"
                                                    wire:model.lazy="email" placeholder="exemplo@email.com" />
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                    <x-input label="Prontuário" id="prontuario" type="text"
                                                        wire:model.lazy="prontuario" placeholder="Nº do prontuário" />
                                                    <x-input label="Data de Nascimento" id="data_nasc" type="date"
                                                        wire:model.lazy="data_nasc" />
                                                </div>
                                            </div>
                                        </section>

                                        <!-- Informações Demográficas -->
                                        <section class="bg-purple-50/50 border border-purple-100/40 rounded-xl p-6">
                                            <h3 class="text-lg font-semibold text-purple-800 mb-4">Informações
                                                Demográficas</h3>
                                            <div class="space-y-4">
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                    <x-select label="Orientação Sexual" id="orientacao_sexual_id"
                                                        wire:model.lazy="orientacao_sexual_id" :options="$orientacoesSexuais" />
                                                    <x-select label="Estado Civil" id="estado_civil_id"
                                                        wire:model.lazy="estado_civil_id" :options="$estadosCivis" />
                                                </div>
                                                <x-select label="Etnia" id="etnia_id" wire:model.lazy="etnia_id"
                                                    :options="$etnias" />
                                            </div>
                                        </section>

                                    </div>

                                    <!-- Coluna 2 -->
                                    <div class="space-y-6">

                                        <!-- Endereço -->
                                        <section class="bg-pink-50/50 border border-pink-100/40 rounded-xl p-6">
                                            <h3 class="text-lg font-semibold text-pink-800 mb-4">Endereço</h3>
                                            <div class="space-y-4">
                                                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                                    <x-input label="CEP" id="cep" type="text"
                                                        wire:model.lazy="cep" wire:keydown.enter="buscarEndereco" />
                                                    <x-input label="UF" id="uf" type="text"
                                                        wire:model.lazy="uf" maxlength="2" />
                                                    <x-input label="Cidade" id="cidade" type="text"
                                                        wire:model.lazy="cidade" />
                                                </div>
                                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                                    <x-input label="Rua" id="rua" type="text"
                                                        wire:model.lazy="rua" class="md:col-span-2" />
                                                    <x-input label="Número" id="numero" type="text"
                                                        wire:model.lazy="numero" />
                                                </div>
                                                <x-input label="Bairro" id="bairro" type="text"
                                                    wire:model.lazy="bairro" />
                                            </div>
                                        </section>

                                        <!-- Socioeconômico -->
                                        <section class="bg-indigo-50/50 border border-indigo-100/40 rounded-xl p-6">
                                            <h3 class="text-lg font-semibold text-indigo-800 mb-4">Informações
                                                Socioeconômicas</h3>
                                            <div class="space-y-4">
                                                <x-input label="Ocupação" id="ocupacao" type="text"
                                                    wire:model.lazy="ocupacao" />
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                    <x-input label="Renda Familiar" id="renda_familiar"
                                                        type="text" wire:model.lazy="renda_familiar" />
                                                    <x-input label="Pessoas em Casa" id="num_pss_casa" type="number"
                                                        wire:model.lazy="num_pss_casa" />
                                                </div>
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                    <x-select label="Benefício" id="beneficio_id"
                                                        wire:model.lazy="beneficio_id" :options="$beneficios" />
                                                    <x-select label="Tipo de Residência" id="reside_id"
                                                        wire:model.lazy="reside_id" :options="$resides" />
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                </div>

                                <!-- Botão de Continuar -->
                                <div class="flex justify-center mt-12">
                                    <button type="button" wire:click="nextStep"
                                        class="relative inline-flex items-center justify-center px-12 py-4 text-lg font-semibold text-white transform bg-gradient-to-r from-indigo-600 via-purple-500 to-purple-600 shadow-2xl group rounded-2xl hover:shadow-3xl hover:scale-105 focus:outline-none focus:ring-4 focus:ring-indigo-300 focus:ring-opacity-50">
                                        <span class="flex items-center">
                                            <svg class="w-5 h-5 mr-3  group-hover:translate-x-1" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                            </svg>
                                            Continuar para Próxima Etapa
                                        </span>
                                        <div
                                            class="absolute inset-0 bg-white rounded-2xl opacity-0 group-hover:opacity-10 duration-300">
                                        </div>
                                    </button>
                                </div>

                            </div>
                        </main>
                    </div>

                    <!-- Footer -->
                    <footer class="relative z-10 py-6 text-white bg-gradient-to-r from-indigo-800 to-purple-900">
                        <div class="container px-6 mx-auto">
                            <div class="flex flex-col items-center justify-between md:flex-row">
                                <div class="mb-4 md:mb-0">
                                    <h4 class="text-xl font-bold">SoPeP</h4>
                                    <p class="text-sm text-indigo-200">Sistema de Prescrição Eletrônica para Pé
                                        Diabético</p>
                                </div>
                                <div class="text-center md:text-right">
                                    <p class="text-sm text-indigo-200">&copy; 2024 SoPeP. Todos os direitos reservados.
                                    </p>
                                    <p class="mt-1 text-xs text-indigo-300">Desenvolvido para cuidar melhor dos seus
                                        pacientes</p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            @endif
        </div>
        <div x-show="step === 2" x-transition>
            {{-- Etapa 2: Histórico do Paciente --}}
            @if ($currentStep == 2)
                <div
                    class="relative flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">

                    <!-- Elementos de fundo otimizados -->
                    <div class="absolute inset-0 pointer-events-none -z-10">
                        <div class="absolute w-60 h-60 bg-indigo-200 rounded-full top-12 left-12 opacity-20"></div>
                        <div class="absolute w-64 h-64 bg-purple-200 rounded-full top-24 right-12 opacity-15"></div>
                        <div class="absolute w-56 h-56 bg-pink-200 rounded-full bottom-12 left-20 opacity-10"></div>
                    </div>

                    <div class="relative z-10 flex-grow">
                        <!-- Cabeçalho -->
                        <header class="py-10 text-center">
                            <div class="container px-6 mx-auto">
                                <h1 class="text-5xl font-extrabold text-indigo-900">So<span
                                        class="text-indigo-600">Pe</span>P</h1>
                                <p class="text-lg text-gray-600 mt-3">Histórico do <span
                                        class="text-indigo-600">Paciente</span></p>
                                <p class="text-sm text-gray-500 mt-1 max-w-xl mx-auto">Preencha as informações clínicas
                                    e histórico médico do paciente.</p>
                            </div>
                        </header>

                        <!-- Formulário -->
                        <main class="container px-6 mx-auto pb-16">
                            <div
                                class="max-w-6xl mx-auto bg-white/80 rounded-2xl border border-white/30 shadow p-8 md:p-12">

                                <!-- Título da seção -->
                                <div class="text-center mb-10">
                                    <h2 class="text-3xl font-bold text-indigo-900">Histórico Clínico</h2>
                                    <div class="w-24 h-1 mx-auto bg-indigo-600 mt-2 rounded-full"></div>
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                                    <!-- Coluna 1 -->
                                    <div class="space-y-6">

                                        <!-- Informações sobre Diabetes -->
                                        <section class="bg-indigo-50/50 border border-indigo-100/40 rounded-xl p-6">
                                            <h3 class="text-lg font-semibold text-indigo-800 mb-4">Informações sobre
                                                Diabetes</h3>
                                            <div class="space-y-4">
                                                <div>

                                                    <x-select label="Tipo de Diabetes" id="tipo_diabetes_id"
                                                        wire:model.lazy="tipo_diabetes_id" :options="$tipoDiabetes"
                                                        option-value="id" option-label="tipo" />
                                                    @error('tipo_diabetes_id')
                                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </section>

                                        <!-- Comorbidades -->
                                        <section class="bg-purple-50/50 border border-purple-100/40 rounded-xl p-6">
                                            <h3 class="text-lg font-semibold text-purple-800 mb-4">Comorbidades</h3>
                                            <div class="space-y-3 max-h-60 overflow-y-auto pr-2">
                                                @foreach ($comorbidadesList as $comorbidade)
                                                    <div
                                                        class="flex items-center p-2 rounded-lg hover:bg-purple-50 transition-colors">
                                                        <input type="checkbox" wire:model="comorbidades"
                                                            value="{{ $comorbidade->id }}"
                                                            id="comorbidade-{{ $comorbidade->id }}"
                                                            class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                                                        <label for="comorbidade-{{ $comorbidade->id }}"
                                                            class="ml-3 text-sm text-gray-700 cursor-pointer">
                                                            {{ $comorbidade->descricao }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            @error('comorbidades')
                                                <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </section>

                                        <!-- Cirurgias -->
                                        <section class="bg-pink-50/50 border border-pink-100/40 rounded-xl p-6">
                                            <h3 class="text-lg font-semibold text-pink-800 mb-4">Histórico Cirúrgico
                                            </h3>
                                            <div class="space-y-4">
                                                <div>
                                                    <label for="cirurgia_motivo"
                                                        class="block mb-2 text-sm font-medium text-gray-700">Já
                                                        realizou alguma cirurgia? Se sim, qual?</label>
                                                    <textarea wire:model="cirurgia_motivo" id="cirurgia_motivo" rows="3"
                                                        class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm bg-white focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all duration-200"
                                                        placeholder="Descreva as cirurgias realizadas..."></textarea>
                                                </div>
                                            </div>
                                        </section>

                                    </div>

                                    <!-- Coluna 2 -->
                                    <div class="space-y-6">

                                        <!-- Alergias -->
                                        <section class="bg-indigo-50/50 border border-indigo-100/40 rounded-xl p-6">
                                            <h3 class="text-lg font-semibold text-indigo-800 mb-4">Alergias</h3>
                                            <div class="space-y-3 max-h-60 overflow-y-auto pr-2">
                                                @foreach ($alergiasList as $alergia)
                                                    <div
                                                        class="flex items-center p-2 rounded-lg hover:bg-indigo-50 transition-colors">
                                                        <input type="checkbox" wire:model.live="alergias"
                                                            value="{{ $alergia->id }}"
                                                            id="alergia-{{ $alergia->id }}"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                        <label for="alergia-{{ $alergia->id }}"
                                                            class="ml-3 text-sm text-gray-700 cursor-pointer">
                                                            {{ $alergia->descricao }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            @error('alergias')
                                                <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                            @enderror

                                            <!-- Campos condicionais para alergias específicas -->
                                            <div class="space-y-4 mt-4">
                                                <!-- Campo para Alergia Alimentar (ID 2) -->
                                                @if (in_array(2, $alergias ?? []))
                                                    <div class="animate-fadeIn">
                                                        <label for="alimento_alergia"
                                                            class="block mb-2 text-sm font-medium text-gray-700">
                                                            <span class="text-indigo-600">Qual alimento?</span>
                                                        </label>
                                                        <input type="text" wire:model.lazy="alimento_alergia"
                                                            id="alimento_alergia"
                                                            class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm bg-white focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200"
                                                            placeholder="Ex: Amendoim, leite, ovos...">
                                                        @error('alimento_alergia')
                                                            <span
                                                                class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                @endif

                                                <!-- Campo para Alergia Medicamentosa (ID 4) -->
                                                @if (in_array(4, $alergias ?? []))
                                                    <div class="animate-fadeIn">
                                                        <label for="medicamento_alergia"
                                                            class="block mb-2 text-sm font-medium text-gray-700">
                                                            <span class="text-indigo-600">Qual medicamento?</span>
                                                        </label>
                                                        <input type="text" wire:model.lazy="medicamento_alergia"
                                                            id="medicamento_alergia"
                                                            class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm bg-white focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200"
                                                            placeholder="Ex: Penicilina, dipirona, aspirina...">
                                                        @error('medicamento_alergia')
                                                            <span
                                                                class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                @endif
                                            </div>
                                        </section>

                                        <!-- Amputação -->
                                        <section class="bg-purple-50/50 border border-purple-100/40 rounded-xl p-6">
                                            <h3 class="text-lg font-semibold text-purple-800 mb-4">Histórico de
                                                Amputação</h3>
                                            <div class="space-y-4">
                                                <div>
                                                    <label class="block mb-3 text-sm font-medium text-gray-700">Já
                                                        realizou amputação?</label>
                                                    <div class="flex space-x-3" x-data="{ selecionado: @entangle('realizou_amputacao') }">
                                                        <button type="button"
                                                            wire:click="$set('realizou_amputacao', 'sim')"
                                                            :class="selecionado === 'sim' ?
                                                                'bg-gradient-to-r from-red-400 to-red-500 text-white shadow-lg' :
                                                                'bg-gray-200 text-gray-700'"
                                                            class="flex-1 px-4 py-3 text-sm font-medium rounded-lg hover:shadow-md focus:outline-none focus:ring-2 focus:ring-red-300 transition-all duration-200">
                                                            Sim
                                                        </button>
                                                        <button type="button"
                                                            wire:click="$set('realizou_amputacao', 'nao')"
                                                            :class="selecionado === 'nao' ?
                                                                'bg-gradient-to-r from-green-400 to-green-500 text-white shadow-lg' :
                                                                'bg-gray-200 text-gray-700'"
                                                            class="flex-1 px-4 py-3 text-sm font-medium rounded-lg hover:shadow-md focus:outline-none focus:ring-2 focus:ring-green-300 transition-all duration-200">
                                                            Não
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- Campos condicionais para amputação -->
                                                @if ($realizou_amputacao === 'sim')
                                                    <div class="space-y-4 animate-fadeIn">
                                                        <div>
                                                            <label for="amputacao_onde"
                                                                class="block mb-2 text-sm font-medium text-gray-700">Onde
                                                                realizou a amputação?</label>
                                                            <input type="text" wire:model.lazy="amputacao_onde"
                                                                id="amputacao_onde"
                                                                class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm bg-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-200"
                                                                placeholder="Ex: Dedo do pé direito">
                                                            @error('amputacao_onde')
                                                                <span
                                                                    class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div>
                                                            <label for="amputacao_quando"
                                                                class="block mb-2 text-sm font-medium text-gray-700">Quando
                                                                foi a amputação?</label>
                                                            <input type="date" wire:model.lazy="amputacao_quando"
                                                                id="amputacao_quando"
                                                                class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm bg-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-200">
                                                            @error('amputacao_quando')
                                                                <span
                                                                    class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </section>

                                        <!-- Tabagismo -->
                                        <section class="bg-pink-50/50 border border-pink-100/40 rounded-xl p-6">
                                            <h3 class="text-lg font-semibold text-pink-800 mb-4">Tabagismo</h3>
                                            <div class="space-y-4">
                                                <div>
                                                    <label class="block mb-3 text-sm font-medium text-gray-700">É
                                                        tabagista?</label>
                                                    <div class="flex space-x-3" x-data="{ selecionado: @entangle('tabagista') }">
                                                        <button type="button" wire:click="$set('tabagista', 'sim')"
                                                            :class="selecionado === 'sim' ?
                                                                'bg-gradient-to-r from-red-400 to-red-500 text-white shadow-lg' :
                                                                'bg-gray-200 text-gray-700'"
                                                            class="flex-1 px-4 py-3 text-sm font-medium rounded-lg hover:shadow-md focus:outline-none focus:ring-2 focus:ring-red-300 transition-all duration-200">
                                                            Sim
                                                        </button>
                                                        <button type="button" wire:click="$set('tabagista', 'nao')"
                                                            :class="selecionado === 'nao' ?
                                                                'bg-gradient-to-r from-green-400 to-green-500 text-white shadow-lg' :
                                                                'bg-gray-200 text-gray-700'"
                                                            class="flex-1 px-4 py-3 text-sm font-medium rounded-lg hover:shadow-md focus:outline-none focus:ring-2 focus:ring-green-300 transition-all duration-200">
                                                            Não
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- Campos condicionais para tabagismo -->
                                                @if ($tabagista === 'sim')
                                                    <div class="space-y-4 animate-fadeIn">
                                                        <div>
                                                            <label for="n_cigarros"
                                                                class="block mb-2 text-sm font-medium text-gray-700">Número
                                                                de Cigarros Diários</label>
                                                            <input type="number" wire:model.lazy="n_cigarros"
                                                                id="n_cigarros" min="0"
                                                                class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm bg-white focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all duration-200"
                                                                placeholder="Ex: 10">
                                                            @error('n_cigarros')
                                                                <span
                                                                    class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div>
                                                            <label for="inicio_tabagismo"
                                                                class="block mb-2 text-sm font-medium text-gray-700">Início
                                                                do Tabagismo</label>
                                                            <input type="date" wire:model.lazy="inicio_tabagismo"
                                                                id="inicio_tabagismo"
                                                                class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm bg-white focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all duration-200">
                                                            @error('inicio_tabagismo')
                                                                <span
                                                                    class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </section>

                                        <!-- Etilismo -->
                                        <section class="bg-indigo-50/50 border border-indigo-100/40 rounded-xl p-6">
                                            <h3 class="text-lg font-semibold text-indigo-800 mb-4">Etilismo</h3>
                                            <div class="space-y-4">
                                                <div>
                                                    <label class="block mb-3 text-sm font-medium text-gray-700">É
                                                        etilista?</label>
                                                    <div class="flex space-x-3" x-data="{ selecionado: @entangle('etilista') }">
                                                        <button type="button" wire:click="$set('etilista', 'sim')"
                                                            :class="selecionado === 'sim' ?
                                                                'bg-gradient-to-r from-red-400 to-red-500 text-white shadow-lg' :
                                                                'bg-gray-200 text-gray-700'"
                                                            class="flex-1 px-4 py-3 text-sm font-medium rounded-lg hover:shadow-md focus:outline-none focus:ring-2 focus:ring-red-300 transition-all duration-200">
                                                            Sim
                                                        </button>
                                                        <button type="button" wire:click="$set('etilista', 'nao')"
                                                            :class="selecionado === 'nao' ?
                                                                'bg-gradient-to-r from-green-400 to-green-500 text-white shadow-lg' :
                                                                'bg-gray-200 text-gray-700'"
                                                            class="flex-1 px-4 py-3 text-sm font-medium rounded-lg hover:shadow-md focus:outline-none focus:ring-2 focus:ring-green-300 transition-all duration-200">
                                                            Não
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- Campos condicionais para etilismo -->
                                                @if ($etilista === 'sim')
                                                    <div class="space-y-4 animate-fadeIn">
                                                        <div>
                                                            <label for="inicio_etilismo"
                                                                class="block mb-2 text-sm font-medium text-gray-700">Início
                                                                do Etilismo</label>
                                                            <input type="year" wire:model.lazy="inicio_etilismo"
                                                                id="inicio_etilismo"
                                                                class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm bg-white focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200">
                                                            @error('inicio_etilismo')
                                                                <span
                                                                    class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </section>

                                    </div>
                                </div>

                                <!-- Botões de Navegação -->
                                <div class="flex justify-center space-x-6 mt-12">
                                    <button type="button" wire:click="previousStep"
                                        class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-indigo-700 bg-white border-2 border-indigo-500 rounded-2xl shadow-lg transition-all duration-300 ease-in-out hover:bg-indigo-50 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                        <span class="flex items-center">
                                            <svg class="w-5 h-5 mr-3 group-hover:-translate-x-1 transition-transform duration-200"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                                            </svg>
                                            Voltar
                                        </span>
                                    </button>

                                    <button type="button" wire:click="nextStep"
                                        class="relative inline-flex items-center justify-center px-12 py-4 text-lg font-semibold text-white transform bg-gradient-to-r from-indigo-600 via-purple-500 to-purple-600 shadow-2xl group rounded-2xl hover:shadow-3xl hover:scale-105 focus:outline-none focus:ring-4 focus:ring-indigo-300 focus:ring-opacity-50 transition-all duration-300">
                                        <span class="flex items-center">
                                            <svg class="w-5 h-5 mr-3 group-hover:translate-x-1 transition-transform duration-200"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                            </svg>
                                            Continuar para Próxima Etapa
                                        </span>
                                        <div
                                            class="absolute inset-0 bg-white rounded-2xl opacity-0 group-hover:opacity-10 duration-300">
                                        </div>
                                    </button>
                                </div>

                            </div>
                        </main>
                    </div>
                </div>
            @endif
        </div>
        <div x-show="step === 3" x-transition>
            {{-- Etapa 3: Medicamentos --}}
            @if ($currentStep == 3)
                <div
                    class="relative flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">

                    <!-- Elementos de fundo otimizados -->
                    <div class="absolute inset-0 pointer-events-none -z-10">
                        <div class="absolute w-60 h-60 bg-indigo-200 rounded-full top-12 left-12 opacity-20"></div>
                        <div class="absolute w-64 h-64 bg-purple-200 rounded-full top-24 right-12 opacity-15"></div>
                        <div class="absolute w-56 h-56 bg-pink-200 rounded-full bottom-12 left-20 opacity-10"></div>
                    </div>

                    <div class="relative z-10 flex-grow">
                        <!-- Cabeçalho -->
                        <header class="py-10 text-center">
                            <div class="container px-6 mx-auto">
                                <h1 class="text-5xl font-extrabold text-indigo-900">So<span
                                        class="text-indigo-600">Pe</span>P</h1>
                                <p class="text-lg text-gray-600 mt-3">Cadastro de <span
                                        class="text-indigo-600">Medicamentos</span></p>
                                <p class="text-sm text-gray-500 mt-1 max-w-xl mx-auto">Registre os medicamentos
                                    utilizados pelo paciente para controle do tratamento.</p>
                            </div>
                        </header>

                        <!-- Formulário -->
                        <main class="container px-6 mx-auto pb-16">
                            <div
                                class="max-w-6xl mx-auto bg-white/80 rounded-2xl border border-white/30 shadow p-8 md:p-12">

                                <!-- Título da seção -->
                                <div class="text-center mb-10">
                                    <h2 class="text-3xl font-bold text-indigo-900">Medicamentos do Paciente</h2>
                                    <div class="w-24 h-1 mx-auto bg-indigo-600 mt-2 rounded-full"></div>
                                </div>

                                <!-- Lista de Medicamentos -->
                                <div class="space-y-8">
                                    @foreach ($medicamentos as $index => $medicamento)
                                        <div
                                            class="bg-gradient-to-r from-indigo-50/60 via-purple-50/40 to-pink-50/30 border border-indigo-100/50 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">

                                            <!-- Cabeçalho do medicamento -->
                                            <div class="flex items-center justify-between mb-6">
                                                <div class="flex items-center space-x-3">
                                                    <div
                                                        class="w-10 h-10 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full flex items-center justify-center">
                                                        <span
                                                            class="text-white font-bold text-lg">{{ $index + 1 }}</span>
                                                    </div>
                                                    <h3 class="text-xl font-bold text-indigo-900">Medicamento
                                                        {{ $index + 1 }}</h3>
                                                </div>

                                                <button type="button"
                                                    wire:click="removeMedicamento({{ $index }})"
                                                    class="inline-flex items-center px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-xl transition-all duration-200 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-red-300">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                    Remover
                                                </button>
                                            </div>

                                            <!-- Campos do medicamento organizados em grid -->
                                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                                                <!-- Coluna 1 - Informações básicas -->
                                                <div class="space-y-6">
                                                    <section
                                                        class="bg-white/60 border border-indigo-100/40 rounded-xl p-6">
                                                        <h4
                                                            class="text-lg font-semibold text-indigo-800 mb-4 flex items-center">
                                                            <svg class="w-5 h-5 mr-2" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                            </svg>
                                                            Identificação
                                                        </h4>

                                                        <div class="space-y-4">
                                                            <div>
                                                                <label
                                                                    for="medicamentos.{{ $index }}.nome_generico"
                                                                    class="block text-sm font-semibold text-gray-700 mb-2">
                                                                    Nome do Medicamento
                                                                </label>
                                                                <input type="text"
                                                                    wire:model="medicamentos.{{ $index }}.nome_generico"
                                                                    id="medicamentos.{{ $index }}.nome_generico"
                                                                    placeholder="Digite o nome do medicamento"
                                                                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200 bg-white/80">
                                                                @error('medicamentos.' . $index . '.nome_generico')
                                                                    <span
                                                                        class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div>
                                                                <label for="medicamentos.{{ $index }}.dose"
                                                                    class="block text-sm font-semibold text-gray-700 mb-2">
                                                                    Dosagem
                                                                </label>
                                                                <input type="text"
                                                                    wire:model="medicamentos.{{ $index }}.dose"
                                                                    id="medicamentos.{{ $index }}.dose"
                                                                    placeholder="Ex: 500mg, 10ml, 1 comprimido"
                                                                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200 bg-white/80">
                                                                @error('medicamentos.' . $index . '.dose')
                                                                    <span
                                                                        class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>

                                                <!-- Coluna 2 - Administração -->
                                                <div class="space-y-6">
                                                    <section
                                                        class="bg-white/60 border border-purple-100/40 rounded-xl p-6">
                                                        <h4
                                                            class="text-lg font-semibold text-purple-800 mb-4 flex items-center">
                                                            <svg class="w-5 h-5 mr-2" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                            Administração
                                                        </h4>

                                                        <div class="space-y-4">
                                                            <x-select label="Via de Administração"
                                                                id="medicamentos.{{ $index }}.via_id"
                                                                wire:model.lazy="medicamentos.{{ $index }}.via_id"
                                                                :options="$vias" />
                                                            @error('medicamentos.' . $index . '.via_id')
                                                                <span
                                                                    class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                                            @enderror

                                                            <x-select label="Horário da Medicação"
                                                                id="medicamentos.{{ $index }}.horario_med_id"
                                                                wire:model.lazy="medicamentos.{{ $index }}.horario_med_id"
                                                                :options="$horarios_med" />
                                                            @error('medicamentos.' . $index . '.horario_med_id')
                                                                <span
                                                                    class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Botão Adicionar Medicamento -->
                                @if (count($medicamentos) == 0)
                                    <div class="text-center py-12">
                                        <div class="mb-4">
                                            <svg class="w-16 h-16 mx-auto text-gray-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                        <p class="text-gray-500 text-lg mb-6">Nenhum medicamento adicionado ainda</p>
                                    </div>
                                @endif

                                <div class="flex justify-center mt-8">
                                    <button type="button" wire:click="addMedicamento"
                                        class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-green-500 to-emerald-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-green-300">
                                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                        </svg>
                                        Adicionar Novo Medicamento
                                    </button>
                                </div>

                                <!-- Botões de Navegação -->
                                <div class="flex justify-center space-x-6 mt-12">
                                    <button type="button" wire:click="previousStep"
                                        class="relative inline-flex items-center justify-center px-8 py-4 text-indigo-700 bg-white border-2 border-indigo-500 rounded-xl font-semibold shadow-md hover:bg-indigo-50 hover:scale-105 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                        <svg class="w-5 h-5 mr-3 group-hover:-translate-x-1 transition-transform duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                                        </svg>
                                        Voltar
                                    </button>

                                    <button type="button" wire:click="nextStep"
                                        class="relative inline-flex items-center justify-center px-12 py-4 text-lg font-semibold text-white bg-gradient-to-r from-indigo-600 via-purple-500 to-purple-600 shadow-2xl rounded-2xl hover:shadow-3xl hover:scale-105 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-indigo-300 focus:ring-opacity-50 group">
                                        <span class="flex items-center">
                                            Continuar para Próxima Etapa
                                            <svg class="w-5 h-5 ml-3 group-hover:translate-x-1 transition-transform duration-300"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                            </svg>
                                        </span>
                                        <div
                                            class="absolute inset-0 bg-white rounded-2xl opacity-0 group-hover:opacity-10 transition-opacity duration-300">
                                        </div>
                                    </button>
                                </div>

                            </div>
                        </main>
                    </div>

                    <!-- Footer -->
                    <footer class="relative z-10 py-6 text-white bg-gradient-to-r from-indigo-800 to-purple-900">
                        <div class="container px-6 mx-auto">
                            <div class="flex flex-col items-center justify-between md:flex-row">
                                <div class="mb-4 md:mb-0">
                                    <h4 class="text-xl font-bold">SoPeP</h4>
                                    <p class="text-sm text-indigo-200">Sistema de Prescrição Eletrônica para Pé
                                        Diabético</p>
                                </div>
                                <div class="text-center md:text-right">
                                    <p class="text-sm text-indigo-200">&copy; 2024 SoPeP. Todos os direitos reservados.
                                    </p>
                                    <p class="mt-1 text-xs text-indigo-300">Desenvolvido para cuidar melhor dos seus
                                        pacientes</p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            @endif
        </div>
        <div x-show="step === 4" x-transition>
            {{-- Etapa 4: Resultados --}}
            @if ($currentStep == 4)
                <div
                    class="relative flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">

                    <!-- Elementos de fundo otimizados -->
                    <div class="absolute inset-0 pointer-events-none -z-10">
                        <div class="absolute w-60 h-60 bg-indigo-200 rounded-full top-12 left-12 opacity-20"></div>
                        <div class="absolute w-64 h-64 bg-purple-200 rounded-full top-24 right-12 opacity-15"></div>
                        <div class="absolute w-56 h-56 bg-pink-200 rounded-full bottom-12 left-20 opacity-10"></div>
                    </div>

                    <div class="relative z-10 flex-grow">
                        <!-- Cabeçalho -->
                        <header class="py-10 text-center">
                            <div class="container px-6 mx-auto">
                                <h1 class="text-5xl font-extrabold text-indigo-900">So<span
                                        class="text-indigo-600">Pe</span>P</h1>
                                <p class="text-lg text-gray-600 mt-3">Resultados de <span
                                        class="text-indigo-600">Exames</span></p>
                                <p class="text-sm text-gray-500 mt-1 max-w-xl mx-auto">Registre os resultados dos
                                    exames realizados pelo paciente para acompanhamento clínico.</p>
                            </div>
                        </header>

                        <!-- Formulário -->
                        <main class="container px-6 mx-auto pb-16">
                            <div
                                class="max-w-6xl mx-auto bg-white/80 rounded-2xl border border-white/30 shadow p-8 md:p-12">

                                <!-- Título da seção -->
                                <div class="text-center mb-10">
                                    <h2 class="text-3xl font-bold text-indigo-900">Resultados de Exames</h2>
                                    <div class="w-24 h-1 mx-auto bg-indigo-600 mt-2 rounded-full"></div>
                                </div>

                                <!-- Lista de Resultados -->
                                <div class="space-y-8">
                                    @foreach ($resultados as $index => $resultado)
                                        <div
                                            class="bg-gradient-to-r from-blue-50/60 via-indigo-50/40 to-purple-50/30 border border-blue-100/50 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">

                                            <!-- Cabeçalho do resultado -->
                                            <div class="flex items-center justify-between mb-6">
                                                <div class="flex items-center space-x-3">
                                                    <div
                                                        class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center">
                                                        <svg class="w-6 h-6 text-white" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h3 class="text-xl font-bold text-indigo-900">Exame
                                                            {{ $index + 1 }}</h3>
                                                        <p class="text-sm text-gray-600">Resultado do exame clínico</p>
                                                    </div>
                                                </div>

                                                <button type="button"
                                                    wire:click="removeResultado({{ $index }})"
                                                    class="inline-flex items-center px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-xl transition-all duration-200 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-red-300">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                    Remover
                                                </button>
                                            </div>

                                            <!-- Campos do resultado organizados -->
                                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                                                <!-- Data do Exame -->
                                                <div class="lg:col-span-1">
                                                    <section
                                                        class="bg-white/70 border border-blue-100/40 rounded-xl p-6 h-full">
                                                        <h4
                                                            class="text-lg font-semibold text-blue-800 mb-4 flex items-center">
                                                            <svg class="w-5 h-5 mr-2" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                            </svg>
                                                            Data do Exame
                                                        </h4>

                                                        <div>
                                                            <label for="resultados.{{ $index }}.data_exame"
                                                                class="block text-sm font-semibold text-gray-700 mb-2">
                                                                Quando foi realizado?
                                                            </label>
                                                            <input type="date"
                                                                wire:model="resultados.{{ $index }}.data_exame"
                                                                id="resultados.{{ $index }}.data_exame"
                                                                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 bg-white/90">
                                                            @error('resultados.' . $index . '.data_exame')
                                                                <span
                                                                    class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </section>
                                                </div>

                                                <!-- Resultado/Descrição -->
                                                <div class="lg:col-span-2">
                                                    <section
                                                        class="bg-white/70 border border-indigo-100/40 rounded-xl p-6 h-full">
                                                        <h4
                                                            class="text-lg font-semibold text-indigo-800 mb-4 flex items-center">
                                                            <svg class="w-5 h-5 mr-2" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                            </svg>
                                                            Resultado do Exame
                                                        </h4>

                                                        <div>
                                                            <label
                                                                for="resultados.{{ $index }}.texto_resultado"
                                                                class="block text-sm font-semibold text-gray-700 mb-2">
                                                                Descrição detalhada do resultado
                                                            </label>
                                                            <textarea wire:model="resultados.{{ $index }}.texto_resultado"
                                                                id="resultados.{{ $index }}.texto_resultado" rows="6"
                                                                placeholder="Descreva os resultados do exame, valores encontrados, observações médicas, etc."
                                                                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200 bg-white/90 resize-none"></textarea>
                                                            @error('resultados.' . $index . '.texto_resultado')
                                                                <span
                                                                    class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>

                                            <!-- Status visual -->
                                            <div class="mt-4 flex items-center justify-end">
                                                <div class="flex items-center text-sm text-gray-500">
                                                    <svg class="w-4 h-4 mr-1 text-green-500" fill="currentColor"
                                                        viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    Exame registrado
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Estado vazio -->
                                @if (count($resultados) == 0)
                                    <div class="text-center py-16">
                                        <div class="mb-6">
                                            <svg class="w-20 h-20 mx-auto text-gray-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-semibold text-gray-700 mb-2">Nenhum resultado
                                            registrado</h3>
                                        <p class="text-gray-500 text-lg mb-8">Adicione os resultados dos exames
                                            realizados pelo paciente</p>
                                    </div>
                                @endif

                                <!-- Botão Adicionar Resultado -->
                                <div class="flex justify-center mt-8">
                                    <button type="button" wire:click="addResultado"
                                        class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                        </svg>
                                        Adicionar Novo Resultado
                                    </button>
                                </div>

                                <!-- Seção de Resumo (quando há resultados) -->
                                @if (count($resultados) > 0)
                                    <div
                                        class="mt-12 bg-gradient-to-r from-green-50/50 to-emerald-50/50 border border-green-100/50 rounded-2xl p-6">
                                        <div class="flex items-center mb-4">
                                            <div
                                                class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-3">
                                                <svg class="w-4 h-4 text-white" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-semibold text-green-800">Resumo dos Exames</h4>
                                        </div>
                                        <p class="text-green-700">
                                            <span class="font-semibold">{{ count($resultados) }}</span>
                                            {{ count($resultados) == 1 ? 'resultado registrado' : 'resultados registrados' }}
                                            para acompanhamento clínico do paciente.
                                        </p>
                                    </div>
                                @endif

                                <!-- Botões de Navegação -->
                                <div class="flex justify-center space-x-6 mt-12">
                                    <button type="button" wire:click="previousStep"
                                        class="relative inline-flex items-center justify-center px-8 py-4 text-indigo-700 bg-white border-2 border-indigo-500 rounded-xl font-semibold shadow-md hover:bg-indigo-50 hover:scale-105 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                        <svg class="w-5 h-5 mr-3 group-hover:-translate-x-1 transition-transform duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                                        </svg>
                                        Voltar
                                    </button>

                                    <button type="button" wire:click="nextStep"
                                        class="relative inline-flex items-center justify-center px-12 py-4 text-lg font-semibold text-white bg-gradient-to-r from-indigo-600 via-purple-500 to-purple-600 shadow-2xl rounded-2xl hover:shadow-3xl hover:scale-105 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-indigo-300 focus:ring-opacity-50 group">
                                        <span class="flex items-center">
                                            Continuar para Próxima Etapa
                                            <svg class="w-5 h-5 ml-3 group-hover:translate-x-1 transition-transform duration-300"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                            </svg>
                                        </span>
                                        <div
                                            class="absolute inset-0 bg-white rounded-2xl opacity-0 group-hover:opacity-10 transition-opacity duration-300">
                                        </div>
                                    </button>
                                </div>

                            </div>
                        </main>
                    </div>

                    <!-- Footer -->
                    <footer class="relative z-10 py-6 text-white bg-gradient-to-r from-indigo-800 to-purple-900">
                        <div class="container px-6 mx-auto">
                            <div class="flex flex-col items-center justify-between md:flex-row">
                                <div class="mb-4 md:mb-0">
                                    <h4 class="text-xl font-bold">SoPeP</h4>
                                    <p class="text-sm text-indigo-200">Sistema de Prescrição Eletrônica para Pé
                                        Diabético</p>
                                </div>
                                <div class="text-center md:text-right">
                                    <p class="text-sm text-indigo-200">&copy; 2024 SoPeP. Todos os direitos reservados.
                                    </p>
                                    <p class="mt-1 text-xs text-indigo-300">Desenvolvido para cuidar melhor dos seus
                                        pacientes</p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            @endif
        </div>
        <div x-show="step === 5" x-transition>
            {{-- Etapa 5: Unidade de Saude --}}
            @if ($currentStep == 5)
                <div
                    class="relative flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">

                    <!-- Elementos de fundo otimizados -->
                    <div class="absolute inset-0 pointer-events-none -z-10">
                        <div class="absolute w-60 h-60 bg-indigo-200 rounded-full top-12 left-12 opacity-20"></div>
                        <div class="absolute w-64 h-64 bg-purple-200 rounded-full top-24 right-12 opacity-15"></div>
                        <div class="absolute w-56 h-56 bg-pink-200 rounded-full bottom-12 left-20 opacity-10"></div>
                    </div>

                    <div class="relative z-10 flex-grow">
                        <!-- Cabeçalho -->
                        <header class="py-10 text-center">
                            <div class="container px-6 mx-auto">
                                <h1 class="text-5xl font-extrabold text-indigo-900">So<span
                                        class="text-indigo-600">Pe</span>P</h1>
                                <p class="text-lg text-gray-600 mt-3">Seleção de <span class="text-indigo-600">Unidade
                                        de Saúde</span></p>
                                <p class="text-sm text-gray-500 mt-1 max-w-xl mx-auto">Selecione a unidade de saúde
                                    onde o paciente será atendido.</p>
                            </div>
                        </header>

                        <!-- Conteúdo Principal -->
                        <main class="container px-6 mx-auto pb-16">
                            <div
                                class="max-w-4xl mx-auto bg-white/80 rounded-2xl border border-white/30 shadow p-8 md:p-12">

                                <!-- Título da seção -->
                                <div class="text-center mb-10">
                                    <h2 class="text-3xl font-bold text-indigo-900">Unidade de Saúde</h2>
                                    <div class="w-24 h-1 mx-auto bg-indigo-600 mt-2 rounded-full"></div>
                                </div>

                                <div class="step">
                                    <!-- Unidade Selecionada -->
                                    <div wire:loading.remove>
                                        @if ($unidade)
                                            <section
                                                class="bg-green-50/50 border border-green-200/60 rounded-xl p-6 mb-8">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0">
                                                        <svg class="w-8 h-8 text-green-600" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="ml-4">
                                                        <h3 class="text-lg font-semibold text-green-800">Unidade
                                                            Selecionada</h3>
                                                        <p class="text-green-700 font-medium mt-1">
                                                            {{ $unidade->nome }}</p>
                                                        <p class="text-green-600 text-sm mt-1">
                                                            {{ $unidade->rua }}, {{ $unidade->bairro }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </section>
                                        @endif
                                    </div>

                                    <!-- Formulário de Busca -->
                                    <section class="bg-indigo-50/50 border border-indigo-100/40 rounded-xl p-6 mb-8">
                                        <h3 class="text-lg font-semibold text-indigo-800 mb-4 flex items-center">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                            Buscar Unidade de Saúde
                                        </h3>

                                        <div class="relative">
                                            <input wire:model.live.debounce.300ms="search"
                                                class="block w-full px-6 py-4 pr-12 text-gray-900 bg-white border border-gray-200 rounded-xl shadow-sm placeholder-gray-500 focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200"
                                                type="search" placeholder="Digite o nome da unidade de saúde..."
                                                aria-label="Search">
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                                                <svg class="w-5 h-5 text-gray-400" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </section>

                                    <!-- Loading State -->
                                    <div wire:loading class="flex justify-center items-center py-8">
                                        <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-indigo-600">
                                        </div>
                                        <span class="ml-3 text-indigo-600 font-medium">Buscando unidades...</span>
                                    </div>

                                    <!-- Resultados da Busca -->
                                    <div wire:loading.remove>
                                        @if (sizeof($unidades) > 0)
                                            <section
                                                class="bg-purple-50/50 border border-purple-100/40 rounded-xl p-6 mb-8">
                                                <h3
                                                    class="text-lg font-semibold text-purple-800 mb-4 flex items-center">
                                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                                        </path>
                                                    </svg>
                                                    Unidades Encontradas ({{ sizeof($unidades) }})
                                                </h3>

                                                <div class="space-y-3 ">
                                                    @foreach ($unidades as $unidade)
                                                        <div class="group relative bg-white rounded-xl border border-gray-200 p-4 cursor-pointer transition-all duration-200 hover:border-indigo-300 hover:shadow-md hover:scale-[1.02]"
                                                            wire:click="selectUnidade({{ $unidade->id }})">
                                                            <div class="flex items-center justify-between">
                                                                <div class="flex items-center space-x-3">
                                                                    <div class="flex-shrink-0">
                                                                        <div
                                                                            class="w-10 h-10 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-lg flex items-center justify-center group-hover:from-indigo-200 group-hover:to-purple-200 transition-all duration-200">
                                                                            <svg class="w-5 h-5 text-indigo-600"
                                                                                fill="none" stroke="currentColor"
                                                                                viewBox="0 0 24 24">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <h4
                                                                            class="text-lg font-semibold text-gray-900 group-hover:text-indigo-700 transition-colors duration-200">
                                                                            {{ $unidade->nome }}
                                                                        </h4>
                                                                        <p class="text-sm text-gray-600 mt-1">
                                                                            {{ $unidade->rua }},
                                                                            {{ $unidade->bairro }}
                                                                        </p>
                                                                        <p class="text-xs text-gray-500 mt-1">Clique
                                                                            para
                                                                            selecionar</p>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <svg class="w-5 h-5 text-gray-400 group-hover:text-indigo-600 transition-colors duration-200"
                                                                        fill="none" stroke="currentColor"
                                                                        viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M9 5l7 7-7 7"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </section>
                                        @elseif($search && sizeof($unidades) == 0)
                                            <section
                                                class="bg-yellow-50/50 border border-yellow-200/60 rounded-xl p-6 mb-8">
                                                <div class="flex items-center justify-center text-center">
                                                    <div>
                                                        <svg class="w-12 h-12 text-yellow-500 mx-auto mb-3"
                                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                            </path>
                                                        </svg>
                                                        <h3 class="text-lg font-semibold text-yellow-800 mb-2">Nenhuma
                                                            unidade encontrada</h3>
                                                        <p class="text-yellow-700">Tente ajustar os termos da sua
                                                            busca.</p>
                                                    </div>
                                                </div>
                                            </section>
                                        @endif
                                    </div>

                                    <!-- Botões de Navegação -->
                                    <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-12">
                                        <!-- Botão Voltar -->
                                        <button type="button" wire:click="previousStep"
                                            class="relative inline-flex items-center justify-center px-8 py-3 text-indigo-700 bg-white border-2 border-indigo-500 rounded-xl font-semibold shadow-md transition-all duration-300 ease-in-out hover:bg-indigo-50 hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-indigo-300 focus:ring-opacity-50 w-full sm:w-auto">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 19l-7-7 7-7"></path>
                                            </svg>
                                            <span class="z-10">Voltar</span>
                                        </button>

                                        <!-- Botão Salvar -->
                                        <button type="submit" @if (!$unidade) disabled @endif
                                            class="relative inline-flex items-center justify-center px-12 py-4 text-lg font-semibold text-white transform shadow-2xl group rounded-2xl hover:shadow-3xl hover:scale-105 focus:outline-none focus:ring-4 focus:ring-opacity-50 w-full sm:w-auto transition-all duration-300 @if ($unidade) bg-gradient-to-r from-teal-500 to-cyan-600 focus:ring-teal-300 @else bg-gray-400 cursor-not-allowed @endif">
                                            <span class="flex items-center">
                                                <svg class="w-5 h-5 mr-3 group-hover:translate-x-1 transition-transform duration-200"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4">
                                                    </path>
                                                </svg>
                                                @if ($unidade)
                                                    Salvar Paciente
                                                @else
                                                    Selecione uma Unidade
                                                @endif
                                            </span>
                                            <div
                                                class="absolute inset-0 bg-white rounded-2xl opacity-0 group-hover:opacity-10 duration-300">
                                            </div>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </main>
                    </div>

                    <!-- Footer -->
                    <footer class="relative z-10 py-6 text-white bg-gradient-to-r from-indigo-800 to-purple-900">
                        <div class="container px-6 mx-auto">
                            <div class="flex flex-col items-center justify-between md:flex-row">
                                <div class="mb-4 md:mb-0">
                                    <h4 class="text-xl font-bold">SoPeP</h4>
                                    <p class="text-sm text-indigo-200">Sistema de Prescrição Eletrônica para Pé
                                        Diabético</p>
                                </div>
                                <div class="text-center md:text-right">
                                    <p class="text-sm text-indigo-200">&copy; 2024 SoPeP. Todos os direitos reservados.
                                    </p>
                                    <p class="mt-1 text-xs text-indigo-300">Desenvolvido para cuidar melhor dos seus
                                        pacientes</p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            @endif
        </div>
    </form>

    {{-- Mensagem de Sucesso --}}
    @if (session()->has('message'))
        <div class="mt-4 alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
