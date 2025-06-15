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
                                                <x-input label="CPF" id="cpf" type="text"
                                                    wire:model.lazy="cpf" placeholder="000.000.000-00" />
                                                <x-input label="Nome Completo" id="nome" type="text"
                                                    wire:model.lazy="nome" placeholder="Digite o nome completo" />
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                    <x-input label="Prontuário" id="prontuario" type="text"
                                                        wire:model.lazy="prontuario" placeholder="Nº do prontuário" />
                                                    <x-input label="Data de Nascimento" id="data_nasc" type="date"
                                                        wire:model.lazy="data_nasc" />
                                                </div>
                                                <x-input label="Email" id="email" type="email"
                                                    wire:model.lazy="email" placeholder="exemplo@email.com" />
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
                <div class="step">
                    <h2 class="py-5 mb-10 text-4xl font-bold text-indigo-900">Histórico do Paciente</h2>

                    <div class="mb-6">
                        <label for="tipo_diabetes_id" class="block mb-2 font-medium text-gray-700">Tipo de
                            Diabetes</label>
                        <select wire:model="tipo_diabetes_id" id="tipo_diabetes_id"
                            class="block w-1/3 p-2 border-gray-300 rounded-lg shadow-sm form-select focus:ring-indigo-500 focus:border-indigo-500">
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
                        <label class="block mb-2 font-medium text-gray-700">Comorbidades</label>
                        <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
                            @foreach ($comorbidadesList as $comorbidade)
                                <div class="flex items-center">
                                    <input type="checkbox" wire:model="comorbidades" value="{{ $comorbidade->id }}"
                                        id="comorbidade-{{ $comorbidade->id }}"
                                        class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="comorbidade-{{ $comorbidade->id }}" class="ml-2 text-gray-700">
                                        {{ $comorbidade->descricao }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        @error('comorbidades')
                            <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Alergias -->
                    <div class="mb-6">
                        <label class="block mb-2 font-medium text-gray-700">Alergias</label>
                        <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
                            @foreach ($alergiasList as $alergia)
                                <div class="flex items-center">
                                    <input type="checkbox" wire:model="alergias" value="{{ $alergia->id }}"
                                        id="alergia-{{ $alergia->id }}"
                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    <label for="alergia-{{ $alergia->id }}" class="ml-2 text-gray-700">
                                        {{ $alergia->descricao }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        @error('alergias')
                            <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="cirurgia_motivo" class="block mb-2 font-medium text-gray-700">Já realizou alguma
                            cirurgia? Se sim qual?</label>
                        <input type="text" wire:model="cirurgia_motivo" id="cirurgia_motivo"
                            class="block w-1/2 border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                        @error('cirurgia_motivo')
                            <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="realizou_amputacao" class="block mb-2 font-medium text-gray-700">Já realizou
                            amputação?</label>
                        <div class="flex items-center space-x-4">
                            <div x-data="{ selecionado: @entangle('realizou_amputacao') }">
                                <button type="button" wire:click="$set('realizou_amputacao', 'sim')"
                                    :class="selecionado === 'sim' ? 'bg-cyan-300' : 'bg-cyan-100'"
                                    class="px-4 py-2 text-black rounded focus:outline-none hover:bg-cyan-200">
                                    Sim
                                </button>

                                <button type="button" wire:click="$set('realizou_amputacao', 'nao')"
                                    :class="selecionado === 'nao' ? 'bg-red-300' : 'bg-red-100'"
                                    class="px-4 py-2 text-black rounded focus:outline-none hover:bg-red-200">
                                    Não
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Exibe os campos de amputação somente se a resposta for "sim" -->
                    @if ($realizou_amputacao === 'sim')
                        <div class="mb-6">
                            <label for="amputacao_onde" class="block mb-2 font-medium text-gray-700">Onde realizou a
                                amputação?</label>
                            <input type="text" wire:model.lazy="amputacao_onde" id="amputacao_onde"
                                class="block w-1/3 border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                            @error('amputacao_onde')
                                <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="amputacao_quando" class="block mb-2 font-medium text-gray-700">Quando foi a
                                Amputação?</label>
                            <input type="date" wire:model.lazy="amputacao_quando" id="amputacao_quando"
                                class="block w-1/3 border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                            @error('amputacao_quando')
                                <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    @endif

                    <div class="mb-6">
                        <label for="tabagista" class="block mb-2 font-medium text-gray-700">É tabagista?</label>
                        <div class="flex items-center space-x-4">
                            <div x-data="{ selecionado: @entangle('tabagista') }">
                                <button type="button" wire:click="$set('tabagista', 'sim')"
                                    :class="selecionado === 'sim' ? 'bg-cyan-300' : 'bg-cyan-100'"
                                    class="px-4 py-2 text-black rounded focus:outline-none hover:bg-cyan-200">
                                    Sim
                                </button>

                                <button type="button" wire:click="$set('tabagista', 'nao')"
                                    :class="selecionado === 'nao' ? 'bg-red-300' : 'bg-red-100'"
                                    class="px-4 py-2 text-black rounded focus:outline-none hover:bg-red-200">
                                    Não
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Exibe os campos adicionais somente se a resposta for "sim" -->
                    @if ($tabagista === 'sim')
                        <div class="mb-6">
                            <label for="n_cigarros" class="block mb-2 font-medium text-gray-700">Número de Cigarros
                                Diários</label>
                            <input type="number" wire:model.lazy="n_cigarros" id="n_cigarros"
                                class="block w-1/3 border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500"
                                min="0">
                            @error('n_cigarros')
                                <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="inicio_tabagismo" class="block mb-2 font-medium text-gray-700">Início do
                                Tabagismo</label>
                            <input type="date" wire:model.lazy="inicio_tabagismo" id="inicio_tabagismo"
                                class="block w-1/3 border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                            @error('inicio_tabagismo')
                                <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    @endif

                    <div class="mb-6">
                        <label for="etilista" class="block mb-2 font-medium text-gray-700">É Etilista?</label>
                        <div class="flex items-center space-x-4">
                            <div x-data="{ selecionado: @entangle('etilista') }">
                                <button type="button" wire:click="$set('etilista', 'sim')"
                                    :class="selecionado === 'sim' ? 'bg-cyan-300' : 'bg-cyan-100'"
                                    class="px-4 py-2 text-black rounded focus:outline-none hover:bg-cyan-200">
                                    Sim
                                </button>

                                <button type="button" wire:click="$set('etilista', 'nao')"
                                    :class="selecionado === 'nao' ? 'bg-red-300' : 'bg-red-100'"
                                    class="px-4 py-2 text-black rounded focus:outline-none hover:bg-red-200">
                                    Não
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Exibe os campos adicionais somente se a resposta for "sim" -->
                    @if ($etilista === 'sim')
                        <div class="mb-6">
                            <label for="inicio_etilismo" class="block mb-2 font-medium text-gray-700">Início do
                                Etilismo</label>
                            <input type="date" wire:model.lazy="inicio_etilismo" id="inicio_etilismo"
                                class="block w-1/3 border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                            @error('inicio_etilismo')
                                <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    @endif

                    <!-- Adicione os demais campos da etapa 2 aqui -->
                    <div class="flex justify-center w-full mt-8 space-x-4">
                        {{-- Botão Voltar (Secundário, visual leve) --}}
                        <button type="button" wire:click="previousStep"
                            class="relative inline-flex items-center justify-center px-8 py-3 text-indigo-700 bg-white border-2 border-indigo-500 rounded-xl font-semibold shadow-md transition-all duration-300 ease-in-out hover:bg-indigo-50 hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-indigo-300">
                            <span class="z-10">Voltar</span>
                            <div class="absolute inset-0 bg-indigo-100 opacity-10 pointer-events-none"></div>
                        </button>

                        {{-- Botão Continuar (Primário, destaque com gradiente) --}}
                        <button type="button" wire:click="nextStep"
                            class="relative inline-flex items-center justify-center px-8 py-3 overflow-hidden text-lg font-semibold text-white bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-xl shadow-lg transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                            <span class="z-10">Continuar</span>
                            <div class="absolute inset-0 bg-white opacity-5"></div>
                        </button>
                    </div>
                </div>
            @endif
        </div>
        <div x-show="step === 3" x-transition>
            {{-- Etapa 3: Medicamentos --}}
            @if ($currentStep == 3)
                <div class="step">
                    <h2 class="py-5 mb-10 text-4xl font-bold text-center">Medicamentos</h2>

                    @foreach ($medicamentos as $index => $medicamento)
                        <div class= "flex justify-center">
                            <div class="w-5/6 p-5 mb-6 bg-white border border-gray-200 rounded-lg shadow-sm">
                                <h3 class="mb-3 text-lg font-semibold">Medicamento {{ $index + 1 }}</h3>

                                <div class="mb-4">
                                    <label for="medicamentos.{{ $index }}.nome_generico"
                                        class="block text-base font-medium text-gray-700">Nome</label>
                                    <input type="text" wire:model="medicamentos.{{ $index }}.nome_generico"
                                        id="medicamentos.{{ $index }}.nome_generico"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm form-input focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    @error('medicamentos.' . $index . '.nome_generico')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="medicamentos.{{ $index }}.via_id"
                                        class="block mb-2 font-medium text-gray-700">Via</label>
                                    <select wire:model="medicamentos.{{ $index }}.via_id"
                                        id="medicamentos.{{ $index }}.via_id"
                                        class="block w-full p-2 border-gray-300 rounded-lg shadow-sm form-select focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="">Selecione</option>
                                        @foreach ($vias as $via)
                                            <option value="{{ $via->id }}">{{ $via->descricao }}</option>
                                        @endforeach
                                    </select>
                                    @error('medicamentos.' . $index . '.via_id')
                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="medicamentos.{{ $index }}.horario_med_id"
                                        class="block mb-2 font-medium text-gray-700">Horário da Medicação</label>
                                    <select wire:model="medicamentos.{{ $index }}.horario_med_id"
                                        id="medicamentos.{{ $index }}.horario_med_id"
                                        class="block w-full p-2 border-gray-300 rounded-lg shadow-sm form-select focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="">Selecione</option>
                                        @foreach ($horarios_med as $horario)
                                            <option value="{{ $horario->id }}">{{ $horario->descricao }}</option>
                                        @endforeach
                                    </select>
                                    @error('medicamentos.' . $index . '.horario_med_id')
                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="medicamentos.{{ $index }}.dose"
                                        class="block text-base font-medium text-gray-700">Dose</label>
                                    <input type="text" wire:model="medicamentos.{{ $index }}.dose"
                                        id="medicamentos.{{ $index }}.dose"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm form-input focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    @error('medicamentos.' . $index . '.dose')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="button" wire:click="removeMedicamento({{ $index }})"
                                    class="px-4 py-2 font-semibold text-white bg-red-500 rounded-lg shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                                    Remover
                                </button>
                            </div>
                        </div>
                    @endforeach

                    <button type="button" wire:click="addMedicamento"
                        class="px-4 py-2 mb-4 ml-24 font-semibold text-white bg-indigo-500 rounded-lg shadow-sm ml-18 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Adicionar Medicamento
                    </button>

                    <!-- Botões de Navegação e Salvar -->
                    <div class="flex justify-center w-full mt-8 space-x-4">
                        {{-- Botão Voltar (Secundário, visual leve) --}}
                        <button type="button" wire:click="previousStep"
                            class="relative inline-flex items-center justify-center px-8 py-3 text-indigo-700 bg-white border-2 border-indigo-500 rounded-xl font-semibold shadow-md transition-all duration-300 ease-in-out hover:bg-indigo-50 hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-indigo-300">
                            <span class="z-10">Voltar</span>
                            <div class="absolute inset-0 bg-indigo-100 opacity-10 pointer-events-none"></div>
                        </button>

                        {{-- Botão Continuar (Primário, destaque com gradiente) --}}
                        <button type="button" wire:click="nextStep"
                            class="relative inline-flex items-center justify-center px-8 py-3 overflow-hidden text-lg font-semibold text-white bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-xl shadow-lg transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                            <span class="z-10">Continuar</span>
                            <div class="absolute inset-0 bg-white opacity-5"></div>
                        </button>
                    </div>
                </div>
            @endif
        </div>
        <div x-show="step === 4" x-transition>
            {{-- Etapa 4: Resultados --}}
            @if ($currentStep == 4)
                <div class="step">
                    <h2 class="py-5 mb-10 text-4xl font-bold text-center">Resultados de Exames</h2>

                    @foreach ($resultados as $index => $resultado)
                        <div class="flex justify-center">
                            <div class="w-5/6 p-5 mb-6 bg-white border border-gray-200 rounded-lg shadow-sm">
                                <h3 class="mb-3 text-lg font-semibold">Resultado {{ $index + 1 }}</h3>


                                <div class="mb-4">
                                    <label for="resultados.{{ $index }}.data_exame"
                                        class="block text-base font-medium text-gray-700">Data do Exame</label>

                                    <input type="date" wire:model="resultados.{{ $index }}.data_exame"
                                        id="resultados.{{ $index }}.data_exame"
                                        class="block w-full mt-1 p-3 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 bg-gray-50 hover:bg-white">

                                    @error('resultados.' . $index . '.data_exame')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="resultados.{{ $index }}.texto_resultado"
                                        class="block text-base font-medium text-gray-700">Descrição</label>

                                    <textarea wire:model="resultados.{{ $index }}.texto_resultado"
                                        id="resultados.{{ $index }}.texto_resultado" rows="4"
                                        class="block w-full p-3 mt-1 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm resize-none form-textarea focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 bg-gray-50 hover:bg-white"></textarea>

                                    @error('resultados.' . $index . '.texto_resultado')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="button" wire:click="removeResultado({{ $index }})"
                                    class="px-4 py-2 font-semibold text-white bg-red-500 rounded-lg shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                                    Remover
                                </button>
                            </div>
                        </div>
                    @endforeach

                    <button type="button" wire:click="addResultado"
                        class="px-4 py-2 mb-4 ml-24 font-semibold text-white bg-indigo-500 rounded-lg shadow-sm hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Adicionar Resultado
                    </button>

                    <!-- Adicione os demais campos da etapa 2 aqui -->
                    <div class="flex justify-center w-full mt-8 space-x-4">
                        {{-- Botão Voltar (Secundário, visual leve) --}}
                        <button type="button" wire:click="previousStep"
                            class="relative inline-flex items-center justify-center px-8 py-3 text-indigo-700 bg-white border-2 border-indigo-500 rounded-xl font-semibold shadow-md transition-all duration-300 ease-in-out hover:bg-indigo-50 hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-indigo-300">
                            <span class="z-10">Voltar</span>
                            <div class="absolute inset-0 bg-indigo-100 opacity-10 pointer-events-none"></div>
                        </button>

                        {{-- Botão Continuar (Primário, destaque com gradiente) --}}
                        <button type="button" wire:click="nextStep"
                            class="relative inline-flex items-center justify-center px-8 py-3 overflow-hidden text-lg font-semibold text-white bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-xl shadow-lg transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                            <span class="z-10">Continuar</span>
                            <div class="absolute inset-0 bg-white opacity-5"></div>
                        </button>
                    </div>
                </div>
            @endif
        </div>
        <div x-show="step === 5" x-transition>
            {{-- Etapa 4: Unidade de Saude --}}
            @if ($currentStep == 5)
                <div class="step">
                    <h2 class="py-5 mb-10 text-4xl font-bold text-center">Unidade de Saúde</h2>

                    {{-- Mostra a unidade selecionada --}}
                    @if ($unidade)
                        <div class="p-4 mb-4 border-l-4 border-indigo-600 rounded bg-indigo-50">
                            <p class="text-lg font-semibold text-indigo-800">Unidade Selecionada:</p>
                            <p class="text-gray-700"><strong>Nome:</strong> {{ $unidade->nome }}</p>
                        </div>
                    @endif

                    {{-- Formulário de Busca --}}
                    <form class="flex justify-center border-b border-indigo-300" role="search">
                        <input wire:model.live.debounce.300ms="search"
                            class="block w-full px-6 py-3 mb-4 border border-gray-300 rounded-lg shadow-sm form-control focus:ring-indigo-500 focus:border-indigo-500"
                            type="search" placeholder="Pesquise o nome da unidade de saúde" aria-label="Search">
                    </form>

                    {{-- Resultados da busca --}}
                    @if (sizeof($unidades) > 0)
                        <div class="mt-4 mb-6 bg-white rounded-lg shadow-lg">
                            @foreach ($unidades as $unidade)
                                <div class="py-3 border-b border-gray-200 cursor-pointer hover:bg-gray-100"
                                    wire:click="selectUnidade({{ $unidade->id }})">
                                    <div class="flex flex-col px-6">
                                        <span class="text-lg font-medium text-gray-900">{{ $unidade->nome }}</span>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Botões de Navegação e Salvar -->
                    <div class="flex justify-center w-full mt-8 space-x-4">
                        {{-- Botão Voltar (Secundário, visual leve) --}}
                        <button type="button" wire:click="previousStep"
                            class="relative inline-flex items-center justify-center px-8 py-3 text-indigo-700 bg-white border-2 border-indigo-500 rounded-xl font-semibold shadow-md transition-all duration-300 ease-in-out hover:bg-indigo-50 hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-indigo-300">
                            <span class="z-10">Voltar</span>
                            <div class="absolute inset-0 bg-indigo-100 opacity-10 pointer-events-none"></div>
                        </button>
                        <button type="submit"
                            class="relative inline-flex items-center justify-center px-8 py-3 ml-4 text-lg font-semibold text-white bg-gradient-to-r from-teal-500 to-teal-700 rounded-xl shadow-lg transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-teal-300">
                            <span class="z-10">Salvar</span>
                            <div class="absolute inset-0 bg-white opacity-5"></div>
                        </button>
                    </div>
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
