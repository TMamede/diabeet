<div x-data="{ step: @entangle('currentStep') }">
    <div x-show="step === 1" x-transition >
        @if ($currentStep == 1)
            <div class="step">
                <div class="flex">
                    <!-- Barra de Navegação -->
                    <!-- Barra de Navegação -->
                    <div class="w-[320px]">
                        <x-navigation-questionario />
                    </div>

                    <!-- Conteúdo da Página -->
                    <div class="flex-1 min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
                        <!-- Elementos decorativos de fundo -->
                        <div class="fixed inset-0 overflow-hidden pointer-events-none">
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

                        <div class="relative z-10 py-12">
                            <!-- Header Section -->
                            <div class="mb-12 text-center">
                                <div class="inline-block p-6 mb-6 rounded-3xl">
                                    <h1 class="mb-2 text-4xl font-extrabold text-indigo-900 md:text-5xl">
                                        So<span class="text-indigo-600">Pe</span>P
                                    </h1>
                                    <div class="w-20 h-1 mx-auto bg-indigo-600 rounded-full"></div>
                                </div>
                                <h2 class="text-2xl font-bold text-gray-800 md:text-3xl">Dados do Paciente</h2>
                                <p class="mt-2 text-gray-600">Visualize as informações completas antes de iniciar a
                                    Avaliação de Enfermagem</p>
                            </div>

                            @if ($selectedPaciente)
                            <fieldset disabled>
                                <!-- Dados Sociodemográficos -->
                                <div class="max-w-6xl px-6 mx-auto mb-8">
                                    <div
                                        class="p-8 border shadow-lg bg-white/80 rounded-3xl border-white/20">
                                        <div class="flex items-center mb-8">
                                            <div
                                                class="flex items-center justify-center w-12 h-12 mr-4 bg-gradient-to-br from-indigo-100 to-indigo-200 rounded-2xl">
                                                <svg class="w-6 h-6 text-indigo-700" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-2xl font-bold text-gray-800">Dados Sociodemográficos
                                                </h3>
                                                <p class="text-gray-600">Informações pessoais e de contato</p>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                                            @foreach ([
        ['label' => 'Nome Completo', 'value' => $selectedPaciente->nome, 'icon' => 'user'],
        ['label' => 'CPF', 'value' => $selectedPaciente->cpf, 'icon' => 'document'],
        ['label' => 'Email', 'value' => $selectedPaciente->email, 'icon' => 'mail'],
        ['label' => 'Prontuário', 'value' => $selectedPaciente->prontuario, 'icon' => 'clipboard'],
        ['label' => 'Data de Nascimento', 'value' => $selectedPaciente->data_nasc, 'icon' => 'calendar'],
        ['label' => 'Sexo', 'value' => $sexo, 'icon' => 'identification'],
        ['label' => 'Orientação Sexual', 'value' => $selectedPaciente->orientacao_sexual->descricao, 'icon' => 'heart'],
        ['label' => 'Estado Civil', 'value' => $selectedPaciente->estado_civil->descricao, 'icon' => 'users'],
        ['label' => 'Etnia', 'value' => $selectedPaciente->etnia->descricao, 'icon' => 'globe'],
        ['label' => 'Ocupação', 'value' => $selectedPaciente->ocupacao, 'icon' => 'briefcase'],
        ['label' => 'Renda Familiar', 'value' => $selectedPaciente->renda_familiar, 'icon' => 'currency-dollar'],
        ['label' => 'Benefício', 'value' => $selectedPaciente->beneficio->descricao, 'icon' => 'shield-check'],
    ] as $item)
                                                <div class="p-4 border border-gray-100 bg-gray-50 rounded-xl">
                                                    <label
                                                        class="block mb-2 text-sm font-medium text-gray-600">{{ $item['label'] }}</label>
                                                    <div class="font-medium text-gray-900">
                                                        {{ $item['value'] ?: 'Não informado' }}</div>
                                                </div>
                                            @endforeach
                                        </div>

                                        <!-- Endereço em seção separada -->
                                        <div class="pt-6 mt-8 border-t border-gray-200">
                                            <h4 class="mb-4 text-lg font-semibold text-gray-800">Endereço</h4>
                                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                                                @foreach ([['label' => 'Rua', 'value' => $selectedPaciente->endereco->rua], ['label' => 'Número', 'value' => $selectedPaciente->endereco->numero], ['label' => 'Bairro', 'value' => $selectedPaciente->endereco->bairro], ['label' => 'Cidade', 'value' => $selectedPaciente->endereco->cidade], ['label' => 'UF', 'value' => $selectedPaciente->endereco->uf], ['label' => 'Quem reside em casa', 'value' => $selectedPaciente->reside->descricao], ['label' => 'Número de pessoas', 'value' => $selectedPaciente->num_pss_casa]] as $item)
                                                    <div class="p-4 border border-gray-100 bg-gray-50 rounded-xl">
                                                        <label
                                                            class="block mb-1 text-sm font-medium text-gray-600">{{ $item['label'] }}</label>
                                                        <div class="text-gray-900">
                                                            {{ $item['value'] ?: 'Não informado' }}</div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Histórico do Paciente -->
                                <div class="max-w-6xl px-6 mx-auto mb-8">
                                    <div
                                        class="p-8 border shadow-lg bg-white/80 rounded-3xl border-white/20">
                                        <div class="flex items-center mb-8">
                                            <div
                                                class="flex items-center justify-center w-12 h-12 mr-4 bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl">
                                                <svg class="w-6 h-6 text-purple-700" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-2xl font-bold text-gray-800">Histórico Médico</h3>
                                                <p class="text-gray-600">Informações clínicas e histórico de saúde</p>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
                                            @foreach ([['label' => 'Tipo de Diabetes', 'value' => $selectedPaciente->historico->tipo_diabetes->tipo], ['label' => 'Motivo de Cirurgia', 'value' => $selectedPaciente->historico->cirurgia_motivo], ['label' => 'Local da Amputação', 'value' => $selectedPaciente->historico->amputacao_onde], ['label' => 'Data da Amputação', 'value' => $selectedPaciente->historico->amputacao_quando], ['label' => 'Cigarros por Dia', 'value' => $selectedPaciente->historico->n_cigarros], ['label' => 'Início do Tabagismo', 'value' => $selectedPaciente->historico->inicio_tabagismo], ['label' => 'Início do Etilismo', 'value' => $selectedPaciente->historico->inicio_etilismo]] as $item)
                                                <div class="p-4 border border-gray-100 bg-gray-50 rounded-xl">
                                                    <label
                                                        class="block mb-2 text-sm font-medium text-gray-600">{{ $item['label'] }}</label>
                                                    <div class="font-medium text-gray-900">
                                                        {{ $item['value'] ?: 'Não informado' }}</div>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                                            <!-- Comorbidades -->
                                            <div class="p-6 border border-red-100 bg-red-50 rounded-xl">
                                                <h4 class="flex items-center mb-4 text-lg font-semibold text-red-800">
                                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                                    </svg>
                                                    Comorbidades
                                                </h4>
                                                <div class="space-y-3">
                                                    @forelse ($selectedPaciente->historico->comorbidades as $comorbidade)
                                                        <div class="p-3 bg-white border border-red-200 rounded-lg">
                                                            <span
                                                                class="font-medium text-gray-800">{{ $comorbidade->descricao }}</span>
                                                        </div>
                                                    @empty
                                                        <p class="italic text-gray-500">Nenhuma comorbidade registrada
                                                        </p>
                                                    @endforelse
                                                </div>
                                            </div>

                                            <!-- Alergias -->
                                            <div class="p-6 border border-orange-100 bg-orange-50 rounded-xl">
                                                <h4
                                                    class="flex items-center mb-4 text-lg font-semibold text-orange-800">
                                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    Alergias
                                                </h4>
                                                <div class="space-y-3">
                                                    @forelse ($selectedPaciente->historico->alergias as $alergia)
                                                        <div class="p-3 bg-white border border-orange-200 rounded-lg">
                                                            <span
                                                                class="font-medium text-gray-800">{{ $alergia->descricao }}</span>
                                                        </div>
                                                    @empty
                                                        <p class="italic text-gray-500">Nenhuma alergia registrada</p>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Medicamentos -->
                                <div class="max-w-6xl px-6 mx-auto mb-8">
                                    <div
                                        class="p-8 border shadow-lg bg-white/80 rounded-3xl border-white/20">
                                        <div class="flex items-center mb-8">
                                            <div
                                                class="flex items-center justify-center w-12 h-12 mr-4 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl">
                                                <svg class="w-6 h-6 text-green-700" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-2xl font-bold text-gray-800">Medicamentos em Uso</h3>
                                                <p class="text-gray-600">Prescrições e tratamentos atuais</p>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                            @forelse ($selectedPaciente->medicamentos as $medicamento)
                                                <div class="p-6 border border-green-100 bg-green-50 rounded-xl">
                                                    <h4 class="mb-4 text-lg font-semibold text-green-800">
                                                        {{ $medicamento->nome_generico }}</h4>
                                                    <div class="space-y-2">
                                                        <div class="flex justify-between">
                                                            <span class="text-sm font-medium text-gray-600">Via:</span>
                                                            <span
                                                                class="text-sm text-gray-800">{{ $medicamento->via->descricao }}</span>
                                                        </div>
                                                        <div class="flex justify-between">
                                                            <span
                                                                class="text-sm font-medium text-gray-600">Horário:</span>
                                                            <span
                                                                class="text-sm text-gray-800">{{ $medicamento->horario_med->descricao }}</span>
                                                        </div>
                                                        <div class="flex justify-between">
                                                            <span
                                                                class="text-sm font-medium text-gray-600">Dose:</span>
                                                            <span
                                                                class="text-sm font-medium text-gray-800">{{ $medicamento->dose }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="py-8 text-center col-span-full">
                                                    <p class="italic text-gray-500">Nenhum medicamento registrado</p>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>

                                <!-- Resultados -->
                                <div class="max-w-6xl px-6 mx-auto mb-8">
                                    <div
                                        class="p-8 border shadow-lg bg-white/80 rounded-3xl border-white/20">
                                        <div class="flex items-center mb-8">
                                            <div
                                                class="flex items-center justify-center w-12 h-12 mr-4 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl">
                                                <svg class="w-6 h-6 text-blue-700" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-2xl font-bold text-gray-800">Resultados de Exames</h3>
                                                <p class="text-gray-600">Histórico de exames e resultados</p>
                                            </div>
                                        </div>

                                        <div class="space-y-4">
                                            @forelse ($selectedPaciente->resultados as $resultado)
                                                <div class="p-6 border border-blue-100 bg-blue-50 rounded-xl">
                                                    <div class="flex items-start justify-between mb-3">
                                                        <h4 class="text-lg font-semibold text-blue-800">Resultado
                                                            #{{ $loop->iteration }}</h4>
                                                        <span
                                                            class="px-3 py-1 text-sm text-blue-600 bg-blue-100 rounded-full">{{ $resultado->data_exame }}</span>
                                                    </div>
                                                    <p class="leading-relaxed text-gray-700">
                                                        {{ $resultado->texto_resultado }}</p>
                                                </div>
                                            @empty
                                                <div class="py-8 text-center">
                                                    <p class="italic text-gray-500">Nenhum resultado de exame
                                                        registrado</p>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>

                                <!-- Unidade de Saúde -->
                                <div class="max-w-6xl px-6 mx-auto mb-8">
                                    <div
                                        class="p-8 border shadow-lg bg-white/80 rounded-3xl border-white/20">
                                        <div class="flex items-center mb-6">
                                            <div
                                                class="flex items-center justify-center w-12 h-12 mr-4 bg-gradient-to-br from-teal-100 to-teal-200 rounded-2xl">
                                                <svg class="w-6 h-6 text-teal-700" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-2xl font-bold text-gray-800">Unidade de Saúde</h3>
                                                <p class="text-gray-600">Local de atendimento do paciente</p>
                                            </div>
                                        </div>

                                        <div class="p-6 border border-teal-100 bg-teal-50 rounded-xl">
                                            <h4 class="text-xl font-semibold text-teal-800">
                                                {{ $selectedPaciente->unidade_saude->nome }}</h4>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
        </fieldset disabled>
    </div>
    <div x-show="step === 2" x-transition>
        @if ($currentStep == 2)
            <div class="step">
                <div class="flex">
                    <!-- Barra de Navegação -->
                    <!-- Barra de Navegação -->
                    <div class="w-[320px]">
                        <x-navigation-questionario />
                    </div>

                    <div class="flex-1 min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
                        <!-- Elementos decorativos de fundo otimizados -->
                        <div class="fixed inset-0 overflow-hidden pointer-events-none">
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

                        <div class="relative z-10 px-6 py-8">
                            <!-- Header -->
                            <div class="max-w-6xl mx-auto mb-8">
                                <div
                                    class="p-6 border shadow-lg bg-white/90 rounded-3xl border-white/20">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h1 class="text-3xl font-bold text-indigo-900">SoPeP</h1>
                                            <p class="font-medium text-indigo-600">Sistema de Prescrição Eletrônica
                                                para Pé
                                                Diabético</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm text-gray-600">Avaliação de enfermagem</p>
                                            <p class="text-lg font-semibold text-gray-800">Necessidades Psicobiológicas
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Main Content -->
                            <div class="max-w-6xl mx-auto">
                                <fieldset disabled>
                                <div
                                    class="p-8 border shadow-lg bg-white/90 rounded-3xl border-white/20">

                                    <!-- Seção Regulação Neurológica -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Regulação Neurológica
                                            </h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                                            <!-- Orientação tempo/espaço -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Orientado no tempo/espaço:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="orientado" value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="orientado" value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('orientado')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Comportamento -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="comportamento_regulacao_neuro_id"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Comportamento:
                                                </label>
                                                <select wire:model="comportamento_regulacao_neuro_id"
                                                    id="comportamento_regulacao_neuro_id"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                    <option value="">Selecione</option>
                                                    @foreach ($comportamentosNeuro as $comportamento)
                                                        <option value="{{ $comportamento->id }}">
                                                            {{ $comportamento->descricao }}</option>
                                                    @endforeach
                                                </select>
                                                @error('comportamento_regulacao_neuro_id')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seção Percepção dos Órgãos do Sentido -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Percepção dos Órgãos do
                                                Sentido</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <!-- Grid de avaliações visuais e auditivas -->
                                        <div class="grid grid-cols-1 gap-8 mb-8 lg:grid-cols-3">
                                            <!-- Olho direito -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Acuidade visual diminuída no olho direito:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="olho_direito"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="olho_direito"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('olho_direito')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Olho esquerdo -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Acuidade visual diminuída no olho esquerdo:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="olho_esquerdo"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="olho_esquerdo"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('olho_esquerdo')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Audição -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Acuidade auditiva diminuída:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="ouvido" value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="ouvido" value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('ouvido')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Grid para tato e risco de queda -->
                                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                                            <!-- Tato -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="analise_tato_id"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Tato:
                                                </label>
                                                <select wire:model="analise_tato_id" id="analise_tato_id"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                    <option value="">Selecione</option>
                                                    @foreach ($analiseTatos as $tato)
                                                        <option value="{{ $tato->id }}">{{ $tato->descricao }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('analise_tato_id')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Risco de queda -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Risco de queda:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="risco_queda" value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="risco_queda" value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('risco_queda')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Seção Hidratação -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Hidratação</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                                            <!-- Tipo de Pele -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="tipo_pele_id"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Pele:
                                                </label>
                                                <select wire:model="tipo_pele_id" id="tipo_pele_id"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                    <option value="">Selecione</option>
                                                    @foreach ($tipoPeles as $pele)
                                                        <option value="{{ $pele->id }}">{{ $pele->descricao }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('tipo_pele_id')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Volume de líquido diário -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="liquido_diario"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Volume de líquido diário ingerido:
                                                </label>
                                                <input type="number" wire:model="liquido_diario" id="liquido_diario"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                    placeholder="Digite em litros o valor de líquido diário">
                                                @error('liquido_diario')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seção Nutrição -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Nutrição</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <!-- Grid para refeições e restrições -->
                                        <div class="grid grid-cols-1 gap-8 mb-8 lg:grid-cols-2">
                                            <!-- Refeições Diárias -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Refeições Diárias:
                                                </label>
                                                <div class="space-y-3">
                                                    @foreach ($refeicaosList as $refeicao)
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="checkbox" wire:model="refeicaos"
                                                                value="{{ $refeicao->id }}"
                                                                id="refeicao-{{ $refeicao->id }}"
                                                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 rounded focus:ring-indigo-500">
                                                            <span
                                                                class="ml-3 font-medium text-gray-700">{{ $refeicao->descricao }}</span>
                                                        </label>
                                                    @endforeach
                                                </div>
                                                @error('refeicaos')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Restrições Alimentares -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Restrições Alimentares:
                                                </label>
                                                <div class="space-y-3">
                                                    @foreach ($restricaosList as $restricao)
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="checkbox" wire:model="restricaos"
                                                                value="{{ $restricao->id }}"
                                                                id="restricao-{{ $restricao->id }}"
                                                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 rounded focus:ring-indigo-500">
                                                            <span
                                                                class="ml-3 font-medium text-gray-700">{{ $restricao->descricao }}</span>
                                                        </label>
                                                    @endforeach
                                                </div>
                                                @error('restricaos')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Maior consumo -->
                                        <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <label for="alimento_consumo_id"
                                                class="block mb-4 text-lg font-semibold text-gray-800">
                                                Maior consumo de:
                                            </label>
                                            <select wire:model="alimento_consumo_id" id="alimento_consumo_id"
                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 md:w-1/2 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                <option value="">Selecione</option>
                                                @foreach ($alimentoConsumos as $alimento)
                                                    <option value="{{ $alimento->id }}">{{ $alimento->descricao }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('alimento_consumo_id')
                                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Seção Sono e Repouso -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Sono e Repouso</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <!-- Grid para informações básicas do sono -->
                                        <div class="grid grid-cols-1 gap-8 mb-8 lg:grid-cols-2">
                                            <!-- Informações básicas do sono -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <div class="mb-6">
                                                    <label for="horas_sono"
                                                        class="block mb-4 text-lg font-semibold text-gray-800">
                                                        Horas de Sono:
                                                    </label>
                                                    <input type="number" wire:model="horas_sono" id="horas_sono"
                                                        class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                        placeholder="Digite o número de horas de sono">
                                                    @error('horas_sono')
                                                        <span
                                                            class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="mb-6">
                                                    <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                        Acorda à noite:
                                                    </label>
                                                    <div class="flex gap-6">
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="acorda_noite"
                                                                value="1"
                                                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                        </label>
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="acorda_noite"
                                                                value="0"
                                                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span class="ml-3 font-medium text-gray-700">Não</span>
                                                        </label>
                                                    </div>
                                                    @error('acorda_noite')
                                                        <span
                                                            class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div>
                                                    <label for="qualidade_sono_id"
                                                        class="block mb-4 text-lg font-semibold text-gray-800">
                                                        Qualidade do Sono:
                                                    </label>
                                                    <select wire:model="qualidade_sono_id" id="qualidade_sono_id"
                                                        class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                        <option value="">Selecione</option>
                                                        @foreach ($qualidadeSonos as $qualidade)
                                                            <option value="{{ $qualidade->id }}">
                                                                {{ $qualidade->descricao }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('qualidade_sono_id')
                                                        <span
                                                            class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Problemas relacionados ao sono -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Problemas Relacionados ao Sono:
                                                </label>
                                                <div class="space-y-3">
                                                    @foreach ($problemaSonoList as $problema)
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="checkbox" wire:model="problema_sonos"
                                                                value="{{ $problema->id }}"
                                                                id="problema-{{ $problema->id }}"
                                                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 rounded focus:ring-indigo-500">
                                                            <span
                                                                class="ml-3 font-medium text-gray-700">{{ $problema->descricao }}</span>
                                                        </label>
                                                    @endforeach
                                                </div>
                                                @error('problema_sonos')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Medicamentos para dormir -->
                                        <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <label for="medicamentos_sono"
                                                class="block mb-4 text-lg font-semibold text-gray-800">
                                                Utilização de medicamentos para dormir - Classe medicamentosa:
                                            </label>
                                            <input type="text" wire:model="medicamentos_sono"
                                                id="medicamentos_sono"
                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 md:w-2/3 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                placeholder="Digite, se usar, a classe do medicamento usado para dormir">
                                            @error('medicamentos_sono')
                                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Seção Exercícios Físicos -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Exercícios Físicos</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                                            <!-- Realiza exercícios -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Realiza Exercícios Físicos:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="realiza" value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="realiza" value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('realiza')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Frequência -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="frequencia_exercicio_id"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Frequência de exercício físico:
                                                </label>
                                                <select wire:model="frequencia_exercicio_id"
                                                    id="frequencia_exercicio_id"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                    <option value="">Selecione</option>
                                                    @foreach ($frequenciasExercicio as $frequencia)
                                                        <option value="{{ $frequencia->id }}">
                                                            {{ $frequencia->descricao }}</option>
                                                    @endforeach
                                                </select>
                                                @error('frequencia_exercicio_id')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Duração -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="duracao"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Duração do exercício físico:
                                                </label>
                                                <input type="number" wire:model="duracao" id="duracao"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                    placeholder="Duração média em minutos">
                                                @error('duracao')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seção Abrigo -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Abrigo</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <!-- Grid para informações básicas da moradia -->
                                        <div class="grid grid-cols-1 gap-8 mb-8 lg:grid-cols-2">
                                            <!-- Zona de Moradia -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="zona_moradia_id"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Zona de Moradia:
                                                </label>
                                                <select wire:model="zona_moradia_id" id="zona_moradia_id"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                    <option value="">Selecione</option>
                                                    @foreach ($zonasMoradia as $zona)
                                                        <option value="{{ $zona->id }}">{{ $zona->descricao }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('zona_moradia_id')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Rede de Esgoto -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="rede_esgoto_id"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Rede de Esgoto:
                                                </label>
                                                <select wire:model="rede_esgoto_id" id="rede_esgoto_id"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                    <option value="">Selecione</option>
                                                    @foreach ($redesEsgoto as $rede)
                                                        <option value="{{ $rede->id }}">{{ $rede->descricao }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('rede_esgoto_id')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Grid para serviços públicos -->
                                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                                            <!-- Luz Pública -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Luz Pública:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="luz_publica" value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="luz_publica" value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('luz_publica')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Coleta de Lixo -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Coleta de lixo:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="coleta_lixo" value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="coleta_lixo" value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('coleta_lixo')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Água Tratada -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Água tratada:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="agua_tratada"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="agua_tratada"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('agua_tratada')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Animais Domésticos -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Presença de animais domésticos:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="animais_domesticos"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="animais_domesticos"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('animais_domesticos')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seção Regulação Hormonal -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Regulação Hormonal</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <!-- Cálculo do IMC -->
                                        <div class="p-6 mb-8 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <h3 class="mb-6 text-xl font-semibold text-gray-800">Cálculo do IMC</h3>

                                            <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-3">
                                                <!-- Altura -->
                                                <div>
                                                    <label for="altura"
                                                        class="block mb-3 text-lg font-semibold text-gray-800">
                                                        Altura (cm):
                                                    </label>
                                                    <input type="number" wire:model.defer="altura" id="altura"
                                                        class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                        placeholder="Digite a altura em cm">
                                                </div>

                                                <!-- Peso -->
                                                <div>
                                                    <label for="peso"
                                                        class="block mb-3 text-lg font-semibold text-gray-800">
                                                        Peso (kg):
                                                    </label>
                                                    <input type="number" wire:model.defer="peso" id="peso"
                                                        class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                        placeholder="Digite o peso em kg">
                                                </div>

                                                <!-- Botão Calcular -->
                                                <div class="flex items-end">
                                                    <button type="button" wire:click="calcularIMC"
                                                        class="w-full px-6 py-3 text-lg font-semibold text-white shadow-lg bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-xl hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                                        Calcular IMC
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- Resultado do IMC -->
                                            @if ($imc)
                                                <div class="p-4 border border-indigo-200 bg-indigo-50 rounded-xl">
                                                    <div class="flex items-center justify-between">
                                                        <div class="flex items-center space-x-4">
                                                            <span class="text-lg font-semibold text-gray-800">Seu IMC
                                                                é:</span>
                                                            <span
                                                                class="px-3 py-1 text-lg font-bold text-indigo-800 bg-white rounded-lg">
                                                                {{ number_format($imc, 2) }}
                                                            </span>
                                                        </div>
                                                        <div class="text-right">
                                                            <span class="text-lg text-gray-700">Classificação: </span>
                                                            <span
                                                                class="text-lg font-bold {{ $corIMC }}">{{ $classificacao }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>

                                        <!-- Circunferência Abdominal -->
                                        <div class="p-6 mb-8 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <h3 class="mb-6 text-xl font-semibold text-gray-800">Circunferência
                                                Abdominal
                                            </h3>

                                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                                <div>
                                                    <label for="circunferencia_abdnominal"
                                                        class="block mb-3 text-lg font-semibold text-gray-800">
                                                        Circunferência Abdominal (cm):
                                                    </label>
                                                    <input type="number" wire:model="circunferencia_abdnominal"
                                                        id="circunferencia_abdnominal"
                                                        class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                        placeholder="Digite a circunferência abdominal">
                                                    @error('circunferencia_abdnominal')
                                                        <span
                                                            class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="flex items-end">
                                                    <button type="button" wire:click="calcularCircunferencia"
                                                        class="w-full px-6 py-3 text-lg font-semibold text-white shadow-lg bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-xl hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                                        Mostrar Classificação
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- Resultado da Circunferência -->
                                            @if ($classificaoCirc)
                                                <div class="p-4 mt-6 border border-indigo-200 bg-indigo-50 rounded-xl">
                                                    <span class="text-lg font-semibold text-gray-800">Classificação da
                                                        Circunferência Abdominal: </span>
                                                    <span
                                                        class="text-lg font-bold {{ $corCircunferencia }}">{{ $classificaoCirc }}</span>
                                                </div>
                                            @endif
                                        </div>

                                        <!-- Glicemia Capilar -->
                                        <div class="p-6 mb-8 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <h3 class="mb-6 text-xl font-semibold text-gray-800">Glicemia Capilar</h3>

                                            <!-- Seleção do Estado Glicêmico -->
                                            <div class="mb-6">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">Estado da
                                                    Glicemia:</label>
                                                <div class="flex gap-4">
                                                    <button type="button" wire:click="$set('estado_glicemia', 1)"
                                                        class="px-6 py-3 text-lg font-semibold rounded-xl focus:outline-none focus:ring-4 focus:ring-indigo-200 {{ $estado_glicemia === 1 ? 'bg-indigo-600 text-white shadow-lg' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                                                        Em Jejum
                                                    </button>
                                                    <button type="button" wire:click="$set('estado_glicemia', 0)"
                                                        class="px-6 py-3 text-lg font-semibold rounded-xl focus:outline-none focus:ring-4 focus:ring-indigo-200 {{ $estado_glicemia === 0 ? 'bg-indigo-600 text-white shadow-lg' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                                                        Duas horas após as refeições
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- Input da Glicemia -->
                                            @if ($estado_glicemia !== null)
                                                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                                    <div>
                                                        <label for="glicemia_capilar"
                                                            class="block mb-3 text-lg font-semibold text-gray-800">
                                                            Glicemia Capilar (mg/dl):
                                                        </label>
                                                        <input type="number" wire:model="glicemia_capilar"
                                                            id="glicemia_capilar"
                                                            class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                            placeholder="Digite a glicemia capilar">
                                                        @error('glicemia_capilar')
                                                            <span
                                                                class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="flex items-end">
                                                        <button type="button" wire:click="calcularGlicemia"
                                                            class="w-full px-6 py-3 text-lg font-semibold text-white shadow-lg bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-xl hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                                            Mostrar Classificação
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- Resultado da Glicemia -->
                                                @if ($classificacaoGlic)
                                                    <div
                                                        class="p-4 mt-6 border border-indigo-200 bg-indigo-50 rounded-xl">
                                                        <span class="text-lg font-semibold text-gray-800">Classificação
                                                            da
                                                            Glicemia Capilar: </span>
                                                        <span
                                                            class="text-lg font-bold {{ $corGlicemia }}">{{ $classificacaoGlic }}</span>
                                                    </div>
                                                @endif
                                            @endif
                                        </div>

                                        <!-- Jejum e Pós-Prandial -->
                                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                                            <!-- Jejum -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Jejum:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="jejum" value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="jejum" value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('jejum')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Pós-Prandial -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Pós-Prandial:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="pos_prandial"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="pos_prandial"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('pos_prandial')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seção Oxigenação -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Oxigenação</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                                            <!-- Tempo de enchimento capilar -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="temp_enchimento_capilar"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Tempo de enchimento capilar:
                                                </label>
                                                <input type="number" wire:model="temp_enchimento_capilar"
                                                    id="temp_enchimento_capilar"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                    placeholder="Digite o tempo em segundos">
                                                @error('temp_enchimento_capilar')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Frequência respiratória -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="frequencia_respiratoria"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Frequência respiratória (irpm):
                                                </label>
                                                <input type="number" wire:model="frequencia_respiratoria"
                                                    id="frequencia_respiratoria"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                    placeholder="Digite a frequência em irpm">
                                                @error('frequencia_respiratoria')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- SatO2 -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="satO2"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    SatO2 (%):
                                                </label>
                                                <input type="number" wire:model="satO2" id="satO2"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                    placeholder="Digite a porcentagem de saturação">
                                                @error('satO2')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seção Regulação Térmica -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Regulação Térmica</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                                <div>
                                                    <label for="temperatura"
                                                        class="block mb-4 text-lg font-semibold text-gray-800">
                                                        Temperatura (°C):
                                                    </label>
                                                    <input type="number" wire:model="temperatura" id="temperatura"
                                                        class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                        placeholder="Digite a temperatura em °C">
                                                    @error('temperatura')
                                                        <span
                                                            class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="flex items-end">
                                                    <button type="button"
                                                        wire:click="calcularClassificacaoTemperatura"
                                                        class="w-full px-6 py-3 text-lg font-semibold text-white shadow-lg bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-xl hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                                        Mostrar Classificação
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- Resultado da Classificação de Temperatura -->
                                            @if ($classificacaoTemperatura)
                                                <div class="p-4 mt-6 border border-indigo-200 bg-indigo-50 rounded-xl">
                                                    <span class="text-lg font-semibold text-gray-800">Classificação da
                                                        Temperatura: </span>
                                                    <span
                                                        class="text-lg font-bold {{ $corTemperatura }}">{{ $classificacaoTemperatura }}</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Seção Eliminações -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Eliminações</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <!-- Grid para problemas urinários -->
                                        <div class="grid grid-cols-1 gap-8 mb-8 lg:grid-cols-2">
                                            <!-- Dor ao urinar -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Dor ao urinar:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="dor_urinar" value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="dor_urinar" value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('dor_urinar')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Incontinência urinária -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Incontinência urinária:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="incontinencia_urina"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="incontinencia_urina"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('incontinencia_urina')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Grid para problemas gastrointestinais -->
                                        <div class="grid grid-cols-1 gap-8 mb-8 lg:grid-cols-2">
                                            <!-- Dor eliminação gastrointestinal -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Dor - eliminação gastrointestinal:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="dor_eliminacoes"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="dor_eliminacoes"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('dor_eliminacoes')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Incontinência eliminação gastrointestinal -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Incontinência - eliminação gastrointestinal:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="incontinencia_eliminacao"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="incontinencia_eliminacao"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('incontinencia_eliminacao')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Grid para problemas intestinais -->
                                        <div class="grid grid-cols-1 gap-8 mb-8 lg:grid-cols-2">
                                            <!-- Constipação -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Constipação:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="constipacao" value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="constipacao" value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('constipacao')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Diarreia -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Diarreia:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="diarreia" value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="diarreia" value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('diarreia')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Grid para tratamentos -->
                                        <div class="grid grid-cols-1 gap-8 mb-8 lg:grid-cols-2">
                                            <!-- Uso de Laxante -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Uso de Laxante:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="uso_laxante" value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="uso_laxante" value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('uso_laxante')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Uso de Fraldas -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Uso de Fraldas:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="uso_fraldas" value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="uso_fraldas" value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('uso_fraldas')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Equipamento coletor -->
                                        <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <label for="equipamento_externo"
                                                class="block mb-4 text-lg font-semibold text-gray-800">
                                                Uso de equipamento coletor ou dispositivo externo:
                                            </label>
                                            <input type="text" wire:model="equipamento_externo"
                                                id="equipamento_externo"
                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                placeholder="Digite se usa equipamento coletor ou dispositivo externo, se sim qual">
                                            @error('equipamento_externo')
                                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Seção Sexualidade -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Sexualidade</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                                            <!-- Vida Sexual Ativa -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Vida Sexual Ativa:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="vida_sex_ativa"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="vida_sex_ativa"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('vida_sex_ativa')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Distúrbios Sexuais -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Distúrbios Sexuais:
                                                </label>
                                                <div class="space-y-3">
                                                    @foreach ($disturbiosSexualList as $disturbio)
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="checkbox" wire:model="disturbio_sexuals"
                                                                value="{{ $disturbio->id }}"
                                                                id="disturbio-{{ $disturbio->id }}"
                                                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 rounded focus:ring-indigo-500">
                                                            <span
                                                                class="ml-3 font-medium text-gray-700">{{ $disturbio->descricao }}</span>
                                                        </label>
                                                    @endforeach
                                                </div>
                                                @error('disturbio_sexuals')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seção Locomoção, Mecânica Corporal e Motilidade -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Locomoção, Mecânica
                                                Corporal e Motilidade</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <!-- Tipos de Locomoção -->
                                        <div class="p-6 mb-8 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                Locomoção:
                                            </label>
                                            <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                                                @foreach ($tiposLocomocaoList as $tipoLoc)
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="checkbox" wire:model="tipo_locomocaos"
                                                            value="{{ $tipoLoc->id }}"
                                                            id="tipoLoc-{{ $tipoLoc->id }}"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 rounded focus:ring-indigo-500">
                                                        <span
                                                            class="ml-3 font-medium text-gray-700">{{ $tipoLoc->descricao }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                            @error('tipo_locomocaos')
                                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Grid para calçados -->
                                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                                            <!-- Sapato adequado -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Sapato adequado:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="sapato_adequado"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="sapato_adequado"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('sapato_adequado')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Sandália de cicatrização -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Sandália de cicatrização/offloading:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="sandalia_cicatrizacao"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="sandalia_cicatrizacao"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('sandalia_cicatrizacao')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seção Regulação Vascular -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Regulação Vascular</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <!-- Sinais Vitais -->
                                        <div class="grid grid-cols-1 gap-8 mb-8 lg:grid-cols-2">
                                            <!-- Pressão Arterial -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="pressao_arterial"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Pressão arterial:
                                                </label>
                                                <input type="text" wire:model="pressao_arterial"
                                                    id="pressao_arterial"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                    placeholder="Digite a pressão arterial em mmHg">
                                                @error('pressao_arterial')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Frequência Cardíaca -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="frequencia_cardiaca"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Frequência Cardíaca:
                                                </label>
                                                <input type="text" wire:model="frequencia_cardiaca"
                                                    id="frequencia_cardiaca"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                    placeholder="Digite a frequência cardíaca em bpm">
                                                @error('frequencia_cardiaca')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Seção ITB -->
                                        <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <div class="mb-6">
                                                <h3 class="mb-2 text-xl font-bold text-indigo-800">Calcule o Índice
                                                    Tornozelo Braço</h3>
                                                <div
                                                    class="w-20 h-0.5 rounded-full bg-gradient-to-r from-indigo-400 to-indigo-600">
                                                </div>
                                            </div>

                                            <!-- ITB Direito -->
                                            <div class="p-6 mb-8 bg-white border border-gray-200 rounded-xl">
                                                <h4 class="mb-4 text-lg font-semibold text-gray-800">Membro Inferior
                                                    Direito</h4>

                                                <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-3 lg:grid-cols-4">
                                                    <!-- PSATP Direito -->
                                                    <div>
                                                        <label for="psatp_direito"
                                                            class="block mb-2 text-sm font-medium text-gray-700">
                                                            Pressão Sistólica Artéria Tibial Posterior Direito
                                                        </label>
                                                        <input type="text" wire:model="psatp_direito"
                                                            id="psatp_direito"
                                                            class="w-full px-3 py-2 text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                            placeholder="PSATP direito">
                                                        @error('psatp_direito')
                                                            <span
                                                                class="block mt-1 text-xs text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <!-- PSAP Direito -->
                                                    <div>
                                                        <label for="psap_direito"
                                                            class="block mb-2 text-sm font-medium text-gray-700">
                                                            Pressão Sistólica Artéria Pediosa Direito
                                                        </label>
                                                        <input type="text" wire:model="psap_direito"
                                                            id="psap_direito"
                                                            class="w-full px-3 py-2 text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                            placeholder="PSAP direito">
                                                        @error('psap_direito')
                                                            <span
                                                                class="block mt-1 text-xs text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <!-- PSAB Direito -->
                                                    <div>
                                                        <label for="psab_direito"
                                                            class="block mb-2 text-sm font-medium text-gray-700">
                                                            Pressão Sistólica Artéria Braquial Direito
                                                        </label>
                                                        <input type="text" wire:model="psab_direito"
                                                            id="psab_direito"
                                                            class="w-full px-3 py-2 text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                            placeholder="PSAB direito">
                                                        @error('psab_direito')
                                                            <span
                                                                class="block mt-1 text-xs text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <!-- Botão Calcular ITB Direito -->
                                                    <div class="flex items-end">
                                                        <button type="button" wire:click="calcularITBDireito"
                                                            class="w-full px-4 py-2 font-medium text-white rounded-lg shadow-lg bg-gradient-to-r from-indigo-500 to-indigo-700 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                                            Calcular ITB Direito
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- Resultado ITB Direito -->
                                                @if ($itbD)
                                                    <div
                                                        class="p-4 border border-gray-200 rounded-lg bg-gradient-to-r from-gray-50 to-gray-100">
                                                        <div class="flex flex-wrap items-center gap-4">
                                                            <div class="flex items-center gap-2">
                                                                <span class="text-sm font-medium text-gray-600">ITB
                                                                    Direito:</span>
                                                                <span
                                                                    class="text-lg font-bold {{ $corITBD }}">{{ $itbD }}</span>
                                                            </div>
                                                            <div class="flex items-center gap-2">
                                                                <span
                                                                    class="text-sm font-medium text-gray-600">Classificação:</span>
                                                                <span
                                                                    class="text-lg font-bold {{ $corITBD }}">{{ $classITBD }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>

                                            <!-- ITB Esquerdo -->
                                            <div class="p-6 bg-white border border-gray-200 rounded-xl">
                                                <h4 class="mb-4 text-lg font-semibold text-gray-800">Membro Inferior
                                                    Esquerdo</h4>

                                                <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-3 lg:grid-cols-4">
                                                    <!-- PSATP Esquerdo -->
                                                    <div>
                                                        <label for="psatp_esquerdo"
                                                            class="block mb-2 text-sm font-medium text-gray-700">
                                                            Pressão Sistólica Artéria Tibial Posterior Esquerdo
                                                        </label>
                                                        <input type="text" wire:model="psatp_esquerdo"
                                                            id="psatp_esquerdo"
                                                            class="w-full px-3 py-2 text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                            placeholder="PSATP esquerdo">
                                                        @error('psatp_esquerdo')
                                                            <span
                                                                class="block mt-1 text-xs text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <!-- PSAP Esquerdo -->
                                                    <div>
                                                        <label for="psap_esquerdo"
                                                            class="block mb-2 text-sm font-medium text-gray-700">
                                                            Pressão Sistólica Artéria Pediosa Esquerdo
                                                        </label>
                                                        <input type="text" wire:model="psap_esquerdo"
                                                            id="psap_esquerdo"
                                                            class="w-full px-3 py-2 text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                            placeholder="PSAP esquerdo">
                                                        @error('psap_esquerdo')
                                                            <span
                                                                class="block mt-1 text-xs text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <!-- PSAB Esquerdo -->
                                                    <div>
                                                        <label for="psab_esquerdo"
                                                            class="block mb-2 text-sm font-medium text-gray-700">
                                                            Pressão Sistólica Artéria Braquial Esquerdo
                                                        </label>
                                                        <input type="text" wire:model="psab_esquerdo"
                                                            id="psab_esquerdo"
                                                            class="w-full px-3 py-2 text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                            placeholder="PSAB esquerdo">
                                                        @error('psab_esquerdo')
                                                            <span
                                                                class="block mt-1 text-xs text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <!-- Botão Calcular ITB Esquerdo -->
                                                    <div class="flex items-end">
                                                        <button type="button" wire:click="calcularITBEsquerdo"
                                                            class="w-full px-4 py-2 font-medium text-white rounded-lg shadow-lg bg-gradient-to-r from-indigo-500 to-indigo-700 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                                            Calcular ITB Esquerdo
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- Resultado ITB Esquerdo -->
                                                @if ($itbE)
                                                    <div
                                                        class="p-4 border border-gray-200 rounded-lg bg-gradient-to-r from-gray-50 to-gray-100">
                                                        <div class="flex flex-wrap items-center gap-4">
                                                            <div class="flex items-center gap-2">
                                                                <span class="text-sm font-medium text-gray-600">ITB
                                                                    Esquerdo:</span>
                                                                <span
                                                                    class="text-lg font-bold {{ $corITBE }}">{{ $itbE }}</span>
                                                            </div>
                                                            <div class="flex items-center gap-2">
                                                                <span
                                                                    class="text-sm font-medium text-gray-600">Classificação:</span>
                                                                <span
                                                                    class="text-lg font-bold {{ $corITBE }}">{{ $classITBE }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seção Sensopercepção -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Sensopercepção</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <!-- Sintomas -->
                                        <div class="p-6 mb-8 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                Sintomas:
                                            </label>
                                            <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                                                @foreach ($sintomasPercepcaoList as $sintomas)
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="checkbox" wire:model="sintomas_percepcaos"
                                                            value="{{ $sintomas->id }}"
                                                            id="sintomas-{{ $sintomas->id }}"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 rounded focus:ring-indigo-500">
                                                        <span
                                                            class="ml-3 font-medium text-gray-700">{{ $sintomas->descricao }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                            @error('sintomas_percepcaos')
                                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Imagem de Referência do Pé -->
                                        <div class="p-6 mb-8 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <div class="mb-4">
                                                <h3 class="text-lg font-semibold text-gray-800">Referência Visual</h3>
                                            </div>
                                            <div class="flex justify-center">
                                                <div class="relative w-full h-48 max-w-md">
                                                    <img src="{{ asset('trace.svg') }}" alt="Referência do Pé"
                                                        class="object-contain w-full h-full">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Avaliação Estrutural do Pé -->
                                        <div class="p-6 mb-8 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <div class="mb-6">
                                                <h3 class="text-lg font-semibold text-gray-800">Avaliação Estrutural
                                                    do Pé
                                                </h3>
                                            </div>

                                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                                                <!-- Pé Neuropático -->
                                                <div class="p-4 bg-white border border-gray-200 rounded-xl">
                                                    <label class="block mb-3 text-sm font-semibold text-gray-800">
                                                        Pé Neuropático (Cavus):
                                                    </label>
                                                    <div class="space-y-2">
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="pe_neuropatico"
                                                                value="1"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Sim</span>
                                                        </label>
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="pe_neuropatico"
                                                                value="0"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Não</span>
                                                        </label>
                                                    </div>
                                                    @error('pe_neuropatico')
                                                        <span
                                                            class="block mt-2 text-xs text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Arco Desabado -->
                                                <div class="p-4 bg-white border border-gray-200 rounded-xl">
                                                    <label class="block mb-3 text-sm font-semibold text-gray-800">
                                                        Arco Desabado (Charcot):
                                                    </label>
                                                    <div class="space-y-2">
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="arco_desabado"
                                                                value="1"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Sim</span>
                                                        </label>
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="arco_desabado"
                                                                value="0"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Não</span>
                                                        </label>
                                                    </div>
                                                    @error('arco_desabado')
                                                        <span
                                                            class="block mt-2 text-xs text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Valgismo -->
                                                <div class="p-4 bg-white border border-gray-200 rounded-xl">
                                                    <label class="block mb-3 text-sm font-semibold text-gray-800">
                                                        Valgismo:
                                                    </label>
                                                    <div class="space-y-2">
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="valgismo"
                                                                value="1"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Sim</span>
                                                        </label>
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="valgismo"
                                                                value="0"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Não</span>
                                                        </label>
                                                    </div>
                                                    @error('valgismo')
                                                        <span
                                                            class="block mt-2 text-xs text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Dedos em Garra -->
                                                <div class="p-4 bg-white border border-gray-200 rounded-xl">
                                                    <label class="block mb-3 text-sm font-semibold text-gray-800">
                                                        Dedos em Garra:
                                                    </label>
                                                    <div class="space-y-2">
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="dedos_em_garra"
                                                                value="1"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Sim</span>
                                                        </label>
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="dedos_em_garra"
                                                                value="0"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Não</span>
                                                        </label>
                                                    </div>
                                                    @error('dedos_em_garra')
                                                        <span
                                                            class="block mt-2 text-xs text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Cuidados e Condições dos Pés -->
                                        <div class="p-6 mb-8 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <div class="mb-6">
                                                <h3 class="text-lg font-semibold text-gray-800">Cuidados e Condições
                                                    dos
                                                    Pés</h3>
                                            </div>

                                            <!-- Grid para condições gerais -->
                                            <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2 lg:grid-cols-4">
                                                <!-- Corte de Unhas -->
                                                <div class="p-4 bg-white border border-gray-200 rounded-xl">
                                                    <label class="block mb-3 text-sm font-semibold text-gray-800">
                                                        Corte de Unhas Correto:
                                                    </label>
                                                    <div class="space-y-2">
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="corte_unhas"
                                                                value="1"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Sim</span>
                                                        </label>
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="corte_unhas"
                                                                value="0"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Não</span>
                                                        </label>
                                                    </div>
                                                    @error('corte_unhas')
                                                        <span
                                                            class="block mt-2 text-xs text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Micose Interdigital -->
                                                <div class="p-4 bg-white border border-gray-200 rounded-xl">
                                                    <label class="block mb-3 text-sm font-semibold text-gray-800">
                                                        Micose Interdigital:
                                                    </label>
                                                    <div class="space-y-2">
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="micose"
                                                                value="1"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Sim</span>
                                                        </label>
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="micose"
                                                                value="0"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Não</span>
                                                        </label>
                                                    </div>
                                                    @error('micose')
                                                        <span
                                                            class="block mt-2 text-xs text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Fissuras -->
                                                <div class="p-4 bg-white border border-gray-200 rounded-xl">
                                                    <label class="block mb-3 text-sm font-semibold text-gray-800">
                                                        Fissuras:
                                                    </label>
                                                    <div class="space-y-2">
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="fissuras"
                                                                value="1"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Sim</span>
                                                        </label>
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="fissuras"
                                                                value="0"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Não</span>
                                                        </label>
                                                    </div>
                                                    @error('fissuras')
                                                        <span
                                                            class="block mt-2 text-xs text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Calosidades -->
                                                <div class="p-4 bg-white border border-gray-200 rounded-xl">
                                                    <label class="block mb-3 text-sm font-semibold text-gray-800">
                                                        Calosidades:
                                                    </label>
                                                    <div class="space-y-2">
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="calosidades"
                                                                value="1"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Sim</span>
                                                        </label>
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="calosidades"
                                                                value="0"
                                                                class="w-4 h-4 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                            <span
                                                                class="ml-2 text-sm font-medium text-gray-700">Não</span>
                                                        </label>
                                                    </div>
                                                    @error('calosidades')
                                                        <span
                                                            class="block mt-2 text-xs text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Estado das Unhas -->
                                            <div class="p-4 bg-white border border-gray-200 rounded-xl">
                                                <label for="estado_unhas_id"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Estado das Unhas:
                                                </label>
                                                <select wire:model="estado_unhas_id" id="estado_unhas_id"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 md:w-1/2 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                    <option value="">Selecione</option>
                                                    @foreach ($estadoUnhas as $unhas)
                                                        <option value="{{ $unhas->id }}">
                                                            {{ $unhas->descricao }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('estado_unhas_id')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Teste de Sensopercepção -->
                                        <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <div class="mb-6">
                                                <h3 class="mb-2 text-xl font-bold text-indigo-800">Teste de
                                                    Sensopercepção
                                                </h3>
                                                <div
                                                    class="w-20 h-0.5 rounded-full bg-gradient-to-r from-indigo-400 to-indigo-600">
                                                </div>
                                            </div>

                                            <div x-data="{ selectedOption: @entangle('selectedOption') }">
                                                <!-- Seletor de Tipo de Teste -->
                                                <div class="mb-8">
                                                    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                                                        <!-- Percepção da sensibilidade protetora -->
                                                        <button type="button" @click="selectedOption = 1"
                                                            wire:click="selectOption(1)"
                                                            :class="selectedOption === 1 ?
                                                                'ring-4 ring-indigo-300 bg-indigo-700' :
                                                                'bg-indigo-600 hover:bg-indigo-700'"
                                                            class="p-4 text-white transition-all duration-200 rounded-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                                            <div class="text-sm font-semibold">Percepção da</div>
                                                            <div class="text-sm font-semibold">Sensibilidade Protetora
                                                            </div>
                                                        </button>

                                                        <!-- Sensibilidade vibratória -->
                                                        <button type="button" @click="selectedOption = 2"
                                                            wire:click="selectOption(2)"
                                                            :class="selectedOption === 2 ?
                                                                'ring-4 ring-indigo-300 bg-indigo-700' :
                                                                'bg-indigo-600 hover:bg-indigo-700'"
                                                            class="p-4 text-white transition-all duration-200 rounded-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                                            <div class="text-sm font-semibold">Sensibilidade</div>
                                                            <div class="text-sm font-semibold">Vibratória</div>
                                                        </button>

                                                        <!-- Ipswich Touch Test -->
                                                        <button type="button" @click="selectedOption = 3"
                                                            wire:click="selectOption(3)"
                                                            :class="selectedOption === 3 ?
                                                                'ring-4 ring-indigo-300 bg-indigo-700' :
                                                                'bg-indigo-600 hover:bg-indigo-700'"
                                                            class="p-4 text-white transition-all duration-200 rounded-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                                            <div class="text-sm font-semibold">Ipswich</div>
                                                            <div class="text-sm font-semibold">Touch Test</div>
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- Avaliação por Membro -->
                                                <div x-show="selectedOption" x-transition class="space-y-6">
                                                    <!-- Pé Direito -->
                                                    <div class="p-6 bg-white border border-gray-200 rounded-xl">
                                                        <h4 class="mb-4 text-lg font-semibold text-gray-800">Pé
                                                            Direito
                                                        </h4>
                                                        <div class="space-y-3">
                                                            <label class="flex items-start cursor-pointer">
                                                                <input type="radio" wire:model="percepcao_direito"
                                                                    value="1"
                                                                    class="w-5 h-5 mt-1 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                <span class="ml-3 font-medium text-gray-700">
                                                                    <span
                                                                        class="font-semibold text-green-700">Percepção
                                                                        presente</span>
                                                                    (responder corretamente em duas das três aplicações)
                                                                </span>
                                                            </label>
                                                            <label class="flex items-start cursor-pointer">
                                                                <input type="radio" wire:model="percepcao_direito"
                                                                    value="0"
                                                                    class="w-5 h-5 mt-1 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                <span class="ml-3 font-medium text-gray-700">
                                                                    <span class="font-semibold text-red-700">Percepção
                                                                        ausente</span>
                                                                    (falhar em responder corretamente em duas das três
                                                                    aplicações)
                                                                </span>
                                                            </label>
                                                        </div>
                                                        @error('percepcao_direito')
                                                            <span
                                                                class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <!-- Pé Esquerdo -->
                                                    <div class="p-6 bg-white border border-gray-200 rounded-xl">
                                                        <h4 class="mb-4 text-lg font-semibold text-gray-800">Pé
                                                            Esquerdo
                                                        </h4>
                                                        <div class="space-y-3">
                                                            <label class="flex items-start cursor-pointer">
                                                                <input type="radio"
                                                                    wire:model="percepcao_esquerdo" value="1"
                                                                    class="w-5 h-5 mt-1 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                <span class="ml-3 font-medium text-gray-700">
                                                                    <span
                                                                        class="font-semibold text-green-700">Percepção
                                                                        presente</span>
                                                                    (responder corretamente em duas das três aplicações)
                                                                </span>
                                                            </label>
                                                            <label class="flex items-start cursor-pointer">
                                                                <input type="radio"
                                                                    wire:model="percepcao_esquerdo" value="0"
                                                                    class="w-5 h-5 mt-1 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                <span class="ml-3 font-medium text-gray-700">
                                                                    <span class="font-semibold text-red-700">Percepção
                                                                        ausente</span>
                                                                    (falhar em responder corretamente em duas das três
                                                                    aplicações)
                                                                </span>
                                                            </label>
                                                        </div>
                                                        @error('percepcao_esquerdo')
                                                            <span
                                                                class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seção Integridade Cutânea -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Integridade Cutânea
                                            </h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <!-- Seleção de lado -->
                                        <div class="p-6 mb-8 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                Qual lado deseja preencher?
                                            </label>
                                            <div class="flex gap-4">
                                                <button type="button"
                                                    wire:click="$set('ladoSelecionado', 'direito')"
                                                    class="px-6 py-3 font-semibold transition-all duration-200 rounded-xl shadow-md
                {{ $ladoSelecionado === 'direito'
                    ? 'bg-indigo-600 text-white hover:bg-indigo-700 shadow-lg'
                    : 'bg-white border-2 border-indigo-300 text-indigo-700 hover:bg-indigo-50' }}">
                                                    Somente Direito
                                                </button>

                                                <button type="button"
                                                    wire:click="$set('ladoSelecionado', 'esquerdo')"
                                                    class="px-6 py-3 font-semibold transition-all duration-200 rounded-xl shadow-md
                {{ $ladoSelecionado === 'esquerdo'
                    ? 'bg-indigo-600 text-white hover:bg-indigo-700 shadow-lg'
                    : 'bg-white border-2 border-indigo-300 text-indigo-700 hover:bg-indigo-50' }}">
                                                    Somente Esquerdo
                                                </button>

                                                <button type="button" wire:click="$set('ladoSelecionado', 'ambos')"
                                                    class="px-6 py-3 font-semibold transition-all duration-200 rounded-xl shadow-md
                {{ $ladoSelecionado === 'ambos'
                    ? 'bg-indigo-600 text-white hover:bg-indigo-700 shadow-lg'
                    : 'bg-white border-2 border-indigo-300 text-indigo-700 hover:bg-indigo-50' }}">
                                                    Ambos
                                                </button>
                                            </div>
                                        </div>

                                        <div wire:key="lado-{{ $ladoSelecionado }}">
                                            {{-- Lesão em Pé Direito --}}
                                            @if ($ladoSelecionado === 'direito' || $ladoSelecionado === 'ambos')
                                                <!-- Sinais de Infecção - Pé Direito -->
                                                <div class="p-6 mb-8 border border-gray-100 bg-gray-50 rounded-2xl">
                                                    <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                        Sinais de Infecção - Pé Direito
                                                    </label>
                                                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                                                        @foreach ($sinaisInfeccaoList as $sinais)
                                                            <label class="flex items-center cursor-pointer">
                                                                <input type="checkbox"
                                                                    wire:model="sinais_infeccao_direito"
                                                                    value="{{ $sinais->id }}"
                                                                    id="sinais-direito-{{ $sinais->id }}"
                                                                    class="w-5 h-5 text-indigo-600 border-2 border-gray-300 rounded focus:ring-indigo-500">
                                                                <span
                                                                    class="ml-3 font-medium text-gray-700">{{ $sinais->descricao }}</span>
                                                            </label>
                                                        @endforeach
                                                    </div>
                                                    @error('sinais_infeccao_direito')
                                                        <span
                                                            class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Lesão em Pé Direito -->
                                                <div class="p-6 mb-8 border border-gray-100 bg-gray-50 rounded-2xl">
                                                    <h3 class="mb-6 text-xl font-semibold text-indigo-900">Lesão em Pé
                                                        Direito</h3>

                                                    <!-- Dimensões -->
                                                    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
                                                        <div>
                                                            <label
                                                                class="block mb-2 text-lg font-semibold text-gray-800">Comprimento
                                                                (cm):</label>
                                                            <input type="number"
                                                                wire:model="dados.direito.comprimento"
                                                                step="0.1"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                                placeholder="Ex: 2.5">
                                                            @error('dados.direito.comprimento')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div>
                                                            <label
                                                                class="block mb-2 text-lg font-semibold text-gray-800">Largura
                                                                (cm):</label>
                                                            <input type="number" wire:model="dados.direito.largura"
                                                                step="0.1"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                                placeholder="Ex: 1.8">
                                                            @error('dados.direito.largura')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Localização e Região -->
                                                    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
                                                        <div>
                                                            <label for="localizacao_direito"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Localização Anatômica:
                                                            </label>
                                                            <select wire:model="dados.direito.localizacao_lesao_id"
                                                                id="localizacao_direito"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($localizacaoLesao as $localizacao)
                                                                    <option value="{{ $localizacao->id }}">
                                                                        {{ $localizacao->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.direito.localizacao_lesao_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div>
                                                            <label for="regiao_direito"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Região:
                                                            </label>
                                                            <select wire:model="dados.direito.regiao_pe_id"
                                                                id="regiao_direito"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($regiaoPe as $regiao)
                                                                    <option value="{{ $regiao->id }}">
                                                                        {{ $regiao->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.direito.regiao_pe_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Lesão Decorrente de Amputação -->
                                                    <div class="mb-8">
                                                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                            Lesão Decorrente de Amputação:
                                                        </label>
                                                        <div class="flex gap-6">
                                                            <label class="flex items-center cursor-pointer">
                                                                <input type="radio"
                                                                    wire:model="dados.direito.lesao_amputacao"
                                                                    value="1"
                                                                    class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                <span
                                                                    class="ml-3 font-medium text-gray-700">Sim</span>
                                                            </label>
                                                            <label class="flex items-center cursor-pointer">
                                                                <input type="radio"
                                                                    wire:model="dados.direito.lesao_amputacao"
                                                                    value="0"
                                                                    class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                <span
                                                                    class="ml-3 font-medium text-gray-700">Não</span>
                                                            </label>
                                                        </div>
                                                        @error('dados.direito.lesao_amputacao')
                                                            <span
                                                                class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <!-- Bordas da Ferida e Tipo de Tecido -->
                                                    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
                                                        <div>
                                                            <label for="bordas_ferida_direito_id"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Bordas da Ferida:
                                                            </label>
                                                            <select wire:model="dados.direito.bordas_ferida_id"
                                                                id="bordas_ferida_direito_id"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($bordasFerida as $borda)
                                                                    <option value="{{ $borda->id }}">
                                                                        {{ $borda->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.direito.bordas_ferida_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div>
                                                            <label for="tipo_tecido_ferida_direito_id"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Tipo de Tecido no Leito:
                                                            </label>
                                                            <select wire:model="dados.direito.tipo_tecido_ferida_id"
                                                                id="tipo_tecido_ferida_direito_id"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($tiposTecido as $tipo)
                                                                    <option value="{{ $tipo->id }}">
                                                                        {{ $tipo->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.direito.tipo_tecido_ferida_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Profundidade e Pele Periferida -->
                                                    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
                                                        <div>
                                                            <label for="profundidade_direito_id"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Profundidade:
                                                            </label>
                                                            <select wire:model="dados.direito.profundidade_id"
                                                                id="profundidade_direito_id"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($profundidades as $profundidade)
                                                                    <option value="{{ $profundidade->id }}">
                                                                        {{ $profundidade->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.direito.profundidade_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div>
                                                            <label for="pele_periferida_direito_id"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Pele Periferida:
                                                            </label>
                                                            <select wire:model="dados.direito.pele_periferida_id"
                                                                id="pele_periferida_direito_id"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($pelesPeriferida as $pele)
                                                                    <option value="{{ $pele->id }}">
                                                                        {{ $pele->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.direito.pele_periferida_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Quantidade e Aspecto do Exsudato -->
                                                    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
                                                        <div>
                                                            <label for="quantidade_exudato_direito_id"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Quantidade de Exsudato:
                                                            </label>
                                                            <select wire:model="dados.direito.quantidade_exudato_id"
                                                                id="quantidade_exudato_direito_id"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($quantidadesExudato as $quantidade)
                                                                    <option value="{{ $quantidade->id }}">
                                                                        {{ $quantidade->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.direito.quantidade_exudato_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div>
                                                            <label for="aspecto_exudato_direito_id"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Aspecto do Exsudato:
                                                            </label>
                                                            <select wire:model="dados.direito.aspecto_exudato_id"
                                                                id="aspecto_exudato_direito_id"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($aspectosExudato as $aspecto)
                                                                    <option value="{{ $aspecto->id }}">
                                                                        {{ $aspecto->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.direito.aspecto_exudato_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Odor do Exsudato e Edema -->
                                                    <div class="grid grid-cols-1 gap-8 mb-8 md:grid-cols-2">
                                                        <div>
                                                            <label
                                                                class="block mb-4 text-lg font-semibold text-gray-800">
                                                                Odor do Exsudato:
                                                            </label>
                                                            <div class="flex gap-6">
                                                                <label class="flex items-center cursor-pointer">
                                                                    <input type="radio"
                                                                        wire:model="dados.direito.odor_exudato"
                                                                        value="1"
                                                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                    <span
                                                                        class="ml-3 font-medium text-gray-700">Sim</span>
                                                                </label>
                                                                <label class="flex items-center cursor-pointer">
                                                                    <input type="radio"
                                                                        wire:model="dados.direito.odor_exudato"
                                                                        value="0"
                                                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                    <span
                                                                        class="ml-3 font-medium text-gray-700">Não</span>
                                                                </label>
                                                            </div>
                                                            @error('dados.direito.odor_exudato')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div>
                                                            <label
                                                                class="block mb-4 text-lg font-semibold text-gray-800">
                                                                Edema:
                                                            </label>
                                                            <div class="flex gap-6">
                                                                <label class="flex items-center cursor-pointer">
                                                                    <input type="radio"
                                                                        wire:model="dados.direito.edema"
                                                                        value="1"
                                                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                    <span
                                                                        class="ml-3 font-medium text-gray-700">Sim</span>
                                                                </label>
                                                                <label class="flex items-center cursor-pointer">
                                                                    <input type="radio"
                                                                        wire:model="dados.direito.edema"
                                                                        value="0"
                                                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                    <span
                                                                        class="ml-3 font-medium text-gray-700">Não</span>
                                                                </label>
                                                            </div>
                                                            @error('dados.direito.edema')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Intensidade da Dor -->
                                                    <div class="mb-8">
                                                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                            Intensidade da Dor (Pé Direito):
                                                        </label>
                                                        <div
                                                            class="grid grid-cols-11 gap-2 p-4 bg-white border border-gray-200 rounded-xl">
                                                            @for ($i = 0; $i <= 10; $i++)
                                                                @php
                                                                    $color = match (true) {
                                                                        $i <= 3
                                                                            => 'bg-green-100 text-green-700 border-green-300',
                                                                        $i <= 6
                                                                            => 'bg-yellow-100 text-yellow-700 border-yellow-300',
                                                                        $i <= 8
                                                                            => 'bg-orange-100 text-orange-700 border-orange-300',
                                                                        default
                                                                            => 'bg-red-100 text-red-700 border-red-300',
                                                                    };

                                                                    $emoji = match (true) {
                                                                        $i == 0 => '😊',
                                                                        $i <= 3 => '🙂',
                                                                        $i <= 6 => '😐',
                                                                        $i <= 8 => '😣',
                                                                        default => '😫',
                                                                    };

                                                                    $selected =
                                                                        (int) ($dados['direito']['dor'] ?? -1) === $i
                                                                            ? 'ring-4 ring-indigo-400 ring-offset-2 scale-105 shadow-lg'
                                                                            : 'border-2';
                                                                @endphp

                                                                <button type="button"
                                                                    wire:click="$set('dados.direito.dor', {{ $i }})"
                                                                    class="flex flex-col items-center p-3 transition-all duration-200 cursor-pointer rounded-xl hover:shadow-md {{ $color }} {{ $selected }}">
                                                                    <span
                                                                        class="mb-1 text-2xl">{{ $emoji }}</span>
                                                                    <span
                                                                        class="text-sm font-bold">{{ $i }}</span>
                                                                </button>
                                                            @endfor
                                                        </div>
                                                        <div class="flex justify-between mt-2 text-xs text-gray-500">
                                                            <span>Sem dor</span>
                                                            <span>Dor insuportável</span>
                                                        </div>
                                                        @error('dados.direito.dor')
                                                            <span
                                                                class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            @endif

                                            {{-- Lesão em Pé Esquerdo --}}
                                            @if ($ladoSelecionado === 'esquerdo' || $ladoSelecionado === 'ambos')
                                                <!-- Sinais de Infecção - Pé Esquerdo -->
                                                <div class="p-6 mb-8 border border-gray-100 bg-gray-50 rounded-2xl">
                                                    <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                        Sinais de Infecção - Pé Esquerdo
                                                    </label>
                                                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                                                        @foreach ($sinaisInfeccaoList as $sinais)
                                                            <label class="flex items-center cursor-pointer">
                                                                <input type="checkbox"
                                                                    wire:model="sinais_infeccao_esquerdo"
                                                                    value="{{ $sinais->id }}"
                                                                    id="sinais-esquerdo-{{ $sinais->id }}"
                                                                    class="w-5 h-5 text-indigo-600 border-2 border-gray-300 rounded focus:ring-indigo-500">
                                                                <span
                                                                    class="ml-3 font-medium text-gray-700">{{ $sinais->descricao }}</span>
                                                            </label>
                                                        @endforeach
                                                    </div>
                                                    @error('sinais_infeccao_esquerdo')
                                                        <span
                                                            class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Lesão em Pé Esquerdo -->
                                                <div class="p-6 mb-8 border border-gray-100 bg-gray-50 rounded-2xl">
                                                    <h3 class="mb-6 text-xl font-semibold text-indigo-900">Lesão em Pé
                                                        Esquerdo</h3>

                                                    <!-- Dimensões -->
                                                    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
                                                        <div>
                                                            <label
                                                                class="block mb-2 text-lg font-semibold text-gray-800">Comprimento
                                                                (cm):</label>
                                                            <input type="number"
                                                                wire:model="dados.esquerdo.comprimento"
                                                                step="0.1"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                                placeholder="Ex: 2.5">
                                                            @error('dados.esquerdo.comprimento')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div>
                                                            <label
                                                                class="block mb-2 text-lg font-semibold text-gray-800">Largura
                                                                (cm):</label>
                                                            <input type="number"
                                                                wire:model="dados.esquerdo.largura" step="0.1"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                                placeholder="Ex: 1.8">
                                                            @error('dados.esquerdo.largura')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Localização e Região -->
                                                    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
                                                        <div>
                                                            <label for="localizacao_esquerdo"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Localização Anatômica:
                                                            </label>
                                                            <select wire:model="dados.esquerdo.localizacao_lesao_id"
                                                                id="localizacao_esquerdo"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($localizacaoLesao as $localizacao)
                                                                    <option value="{{ $localizacao->id }}">
                                                                        {{ $localizacao->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.esquerdo.localizacao_lesao_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div>
                                                            <label for="regiao_esquerdo"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Região:
                                                            </label>
                                                            <select wire:model="dados.esquerdo.regiao_pe_id"
                                                                id="regiao_esquerdo"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($regiaoPe as $regiao)
                                                                    <option value="{{ $regiao->id }}">
                                                                        {{ $regiao->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.esquerdo.regiao_pe_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Lesão Decorrente de Amputação -->
                                                    <div class="mb-8">
                                                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                            Lesão Decorrente de Amputação:
                                                        </label>
                                                        <div class="flex gap-6">
                                                            <label class="flex items-center cursor-pointer">
                                                                <input type="radio"
                                                                    wire:model="dados.esquerdo.lesao_amputacao"
                                                                    value="1"
                                                                    class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                <span
                                                                    class="ml-3 font-medium text-gray-700">Sim</span>
                                                            </label>
                                                            <label class="flex items-center cursor-pointer">
                                                                <input type="radio"
                                                                    wire:model="dados.esquerdo.lesao_amputacao"
                                                                    value="0"
                                                                    class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                <span
                                                                    class="ml-3 font-medium text-gray-700">Não</span>
                                                            </label>
                                                        </div>
                                                        @error('dados.esquerdo.lesao_amputacao')
                                                            <span
                                                                class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <!-- Bordas da Ferida e Tipo de Tecido -->
                                                    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
                                                        <div>
                                                            <label for="bordas_ferida_esquerdo_id"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Bordas da Ferida:
                                                            </label>
                                                            <select wire:model="dados.esquerdo.bordas_ferida_id"
                                                                id="bordas_ferida_esquerdo_id"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($bordasFerida as $borda)
                                                                    <option value="{{ $borda->id }}">
                                                                        {{ $borda->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.esquerdo.bordas_ferida_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div>
                                                            <label for="tipo_tecido_ferida_esquerdo_id"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Tipo de Tecido no Leito:
                                                            </label>
                                                            <select wire:model="dados.esquerdo.tipo_tecido_ferida_id"
                                                                id="tipo_tecido_ferida_esquerdo_id"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($tiposTecido as $tipo)
                                                                    <option value="{{ $tipo->id }}">
                                                                        {{ $tipo->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.esquerdo.tipo_tecido_ferida_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Profundidade e Pele Periferida -->
                                                    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
                                                        <div>
                                                            <label for="profundidade_esquerdo_id"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Profundidade:
                                                            </label>
                                                            <select wire:model="dados.esquerdo.profundidade_id"
                                                                id="profundidade_esquerdo_id"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($profundidades as $profundidade)
                                                                    <option value="{{ $profundidade->id }}">
                                                                        {{ $profundidade->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.esquerdo.profundidade_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div>
                                                            <label for="pele_periferida_esquerdo_id"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Pele Periferida:
                                                            </label>
                                                            <select wire:model="dados.esquerdo.pele_periferida_id"
                                                                id="pele_periferida_esquerdo_id"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($pelesPeriferida as $pele)
                                                                    <option value="{{ $pele->id }}">
                                                                        {{ $pele->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.esquerdo.pele_periferida_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Quantidade e Aspecto do Exsudato -->
                                                    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
                                                        <div>
                                                            <label for="quantidade_exudato_esquerdo_id"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Quantidade de Exsudato:
                                                            </label>
                                                            <select wire:model="dados.esquerdo.quantidade_exudato_id"
                                                                id="quantidade_exudato_esquerdo_id"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($quantidadesExudato as $quantidade)
                                                                    <option value="{{ $quantidade->id }}">
                                                                        {{ $quantidade->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.esquerdo.quantidade_exudato_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div>
                                                            <label for="aspecto_exudato_esquerdo_id"
                                                                class="block mb-2 text-lg font-semibold text-gray-800">
                                                                Aspecto do Exsudato:
                                                            </label>
                                                            <select wire:model="dados.esquerdo.aspecto_exudato_id"
                                                                id="aspecto_exudato_esquerdo_id"
                                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                                <option value="">Selecione</option>
                                                                @foreach ($aspectosExudato as $aspecto)
                                                                    <option value="{{ $aspecto->id }}">
                                                                        {{ $aspecto->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dados.esquerdo.aspecto_exudato_id')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Odor do Exsudato e Edema -->
                                                    <div class="grid grid-cols-1 gap-8 mb-8 md:grid-cols-2">
                                                        <div>
                                                            <label
                                                                class="block mb-4 text-lg font-semibold text-gray-800">
                                                                Odor do Exsudato:
                                                            </label>
                                                            <div class="flex gap-6">
                                                                <label class="flex items-center cursor-pointer">
                                                                    <input type="radio"
                                                                        wire:model="dados.esquerdo.odor_exudato"
                                                                        value="1"
                                                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                    <span
                                                                        class="ml-3 font-medium text-gray-700">Sim</span>
                                                                </label>
                                                                <label class="flex items-center cursor-pointer">
                                                                    <input type="radio"
                                                                        wire:model="dados.esquerdo.odor_exudato"
                                                                        value="0"
                                                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                    <span
                                                                        class="ml-3 font-medium text-gray-700">Não</span>
                                                                </label>
                                                            </div>
                                                            @error('dados.esquerdo.odor_exudato')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div>
                                                            <label
                                                                class="block mb-4 text-lg font-semibold text-gray-800">
                                                                Edema:
                                                            </label>
                                                            <div class="flex gap-6">
                                                                <label class="flex items-center cursor-pointer">
                                                                    <input type="radio"
                                                                        wire:model="dados.esquerdo.edema"
                                                                        value="1"
                                                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                    <span
                                                                        class="ml-3 font-medium text-gray-700">Sim</span>
                                                                </label>
                                                                <label class="flex items-center cursor-pointer">
                                                                    <input type="radio"
                                                                        wire:model="dados.esquerdo.edema"
                                                                        value="0"
                                                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                                    <span
                                                                        class="ml-3 font-medium text-gray-700">Não</span>
                                                                </label>
                                                            </div>
                                                            @error('dados.esquerdo.edema')
                                                                <span
                                                                    class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Intensidade da Dor -->
                                                    <div class="mb-8">
                                                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                            Intensidade da Dor (Pé Esquerdo):
                                                        </label>
                                                        <div
                                                            class="grid grid-cols-11 gap-2 p-4 bg-white border border-gray-200 rounded-xl">
                                                            @for ($i = 0; $i <= 10; $i++)
                                                                @php
                                                                    $color = match (true) {
                                                                        $i <= 3
                                                                            => 'bg-green-100 text-green-700 border-green-300',
                                                                        $i <= 6
                                                                            => 'bg-yellow-100 text-yellow-700 border-yellow-300',
                                                                        $i <= 8
                                                                            => 'bg-orange-100 text-orange-700 border-orange-300',
                                                                        default
                                                                            => 'bg-red-100 text-red-700 border-red-300',
                                                                    };

                                                                    $emoji = match (true) {
                                                                        $i == 0 => '😊',
                                                                        $i <= 3 => '🙂',
                                                                        $i <= 6 => '😐',
                                                                        $i <= 8 => '😣',
                                                                        default => '😫',
                                                                    };

                                                                    $selected =
                                                                        (int) ($dados['esquerdo']['dor'] ?? -1) === $i
                                                                            ? 'ring-4 ring-indigo-400 ring-offset-2 scale-105 shadow-lg'
                                                                            : 'border-2';
                                                                @endphp

                                                                <button type="button"
                                                                    wire:click="$set('dados.esquerdo.dor', {{ $i }})"
                                                                    class="flex flex-col items-center p-3 transition-all duration-200 cursor-pointer rounded-xl hover:shadow-md {{ $color }} {{ $selected }}">
                                                                    <span
                                                                        class="mb-1 text-2xl">{{ $emoji }}</span>
                                                                    <span
                                                                        class="text-sm font-bold">{{ $i }}</span>
                                                                </button>
                                                            @endfor
                                                        </div>
                                                        <div class="flex justify-between mt-2 text-xs text-gray-500">
                                                            <span>Sem dor</span>
                                                            <span>Dor insuportável</span>
                                                        </div>
                                                        @error('dados.esquerdo.dor')
                                                            <span
                                                                class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Seção Cuidados com a Ferida -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Cuidados com a Ferida
                                            </h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <!-- Grid para Limpeza da Lesão e Coberturas -->
                                        <div class="grid grid-cols-1 gap-8 mb-8 lg:grid-cols-2">
                                            <!-- Limpeza da Lesão -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Limpeza da Lesão:
                                                </label>
                                                <div class="space-y-3">
                                                    @foreach ($limpezaLesaosList as $limpeza)
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="checkbox" wire:model="limpeza_lesaos"
                                                                value="{{ $limpeza->id }}"
                                                                id="limpeza-{{ $limpeza->id }}"
                                                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 rounded focus:ring-indigo-500">
                                                            <span
                                                                class="ml-3 font-medium text-gray-700">{{ $limpeza->descricao }}</span>
                                                        </label>
                                                    @endforeach
                                                </div>
                                                @error('limpeza_lesaos')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Coberturas/Correlatos -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Coberturas/Correlatos:
                                                </label>
                                                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                                                    @foreach ($coberturasList as $cobertura)
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="checkbox" wire:model="coberturas"
                                                                value="{{ $cobertura->id }}"
                                                                id="cobertura-{{ $cobertura->id }}"
                                                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 rounded focus:ring-indigo-500">
                                                            <span
                                                                class="ml-3 font-medium text-gray-700">{{ $cobertura->descricao }}</span>
                                                        </label>
                                                    @endforeach
                                                </div>
                                                @error('coberturas')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Grid para Desbridamento e Avaliação da Ferida -->
                                        <div class="grid grid-cols-1 gap-8 mb-8 lg:grid-cols-2">
                                            <!-- Tipos de Desbridamento -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="desbridamento_id"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Tipos de Desbridamento:
                                                </label>
                                                <select wire:model="desbridamento_id" id="desbridamento_id"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                    <option value="">Selecione</option>
                                                    @foreach ($desbridamentos as $desbridamento)
                                                        <option value="{{ $desbridamento->id }}">
                                                            {{ $desbridamento->descricao }}</option>
                                                    @endforeach
                                                </select>
                                                @error('desbridamento_id')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Avaliação da Ferida -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label for="avaliacao_ferida_id"
                                                    class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Avaliação da Ferida:
                                                </label>
                                                <select wire:model="avaliacao_ferida_id" id="avaliacao_ferida_id"
                                                    class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                                                    <option value="">Selecione</option>
                                                    @foreach ($avaliacaoFeridas as $avaliacao)
                                                        <option value="{{ $avaliacao->id }}">
                                                            {{ $avaliacao->descricao }}</option>
                                                    @endforeach
                                                </select>
                                                @error('avaliacao_ferida_id')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Grid para Laserterapia e Terapia Fotodinâmica -->
                                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                                            <!-- Aplicação de Laserterapia -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Aplicação de Laserterapia:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="aplicacao_laserterapia"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="aplicacao_laserterapia"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('aplicacao_laserterapia')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Terapia Fotodinâmica -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Terapia Fotodinâmica:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="terapia_fotodinamica"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="terapia_fotodinamica"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('terapia_fotodinamica')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seção Avaliação do Pé -->
                                    <div class="mb-10">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Avaliação do Pé</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                            <label for="imagem_avaliacao_pe"
                                                class="block mb-4 text-lg font-semibold text-gray-800">
                                                Upload de Imagem da Avaliação do Pé:
                                            </label>

                                            <div class="relative">
                                                <input type="file" id="imagem_avaliacao_pe"
                                                    wire:model="imagem_avaliacao_pe" class="hidden">
                                                <label for="imagem_avaliacao_pe"
                                                    class="flex items-center justify-center w-full px-6 py-8 border-2 border-gray-300 border-dashed cursor-pointer rounded-xl hover:border-indigo-400 hover:bg-indigo-50 focus-within:border-indigo-500 focus-within:ring-2 focus-within:ring-indigo-200">
                                                    <div class="text-center">
                                                        <svg class="w-12 h-12 mx-auto text-gray-400"
                                                            stroke="currentColor" fill="none"
                                                            viewBox="0 0 48 48">
                                                            <path
                                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <p class="mt-4 text-lg font-semibold text-indigo-600">Clique
                                                            para
                                                            fazer upload</p>
                                                        <p class="mt-1 text-sm text-gray-500">PNG, JPG até 1MB</p>
                                                    </div>
                                                </label>
                                            </div>

                                            @error('imagem_avaliacao_pe')
                                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                            @enderror

                                            <!-- Preview da imagem -->
                                            @if ($imagem_avaliacao_pe)
                                                <div class="mt-6">
                                                    <p class="mb-3 text-sm font-medium text-gray-700">
                                                        Pré-visualização:
                                                    </p>
                                                    <div class="p-4 bg-white border border-gray-200 rounded-xl">
                                                        <img src="{{ $imagem_avaliacao_pe->temporaryUrl() }}"
                                                            alt="Pré-visualização da imagem"
                                                            class="object-contain w-full h-64 max-w-md mx-auto rounded-lg">
                                                    </div>
                                                </div>
                                            @elseif ($imagem_avaliacao_pe_url)
                                                <div class="mt-6">
                                                    <p class="mb-3 text-sm font-medium text-gray-700">Imagem atual:
                                                    </p>
                                                    <div class="p-4 bg-white border border-gray-200 rounded-xl">
                                                        <img src="{{ Storage::url($imagem_avaliacao_pe_url) }}"
                                                            alt="Imagem atual"
                                                            class="object-contain w-full h-64 max-w-md mx-auto rounded-lg">
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                </fieldset disabled>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        @endif
        
    </div>
    <div x-show="step === 3" x-transition>
        @if ($currentStep == 3)
            <div class="step">
                <div class="flex">
                    <!-- Barra de Navegação -->
                    <!-- Barra de Navegação -->
                    <div class="w-[320px]">
                        <x-navigation-questionario />
                    </div>

                    <div class="flex-1 min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
                        <!-- Elementos decorativos de fundo otimizados -->
                        <div class="fixed inset-0 overflow-hidden pointer-events-none">
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

                        <div class="relative z-10 px-6 py-8">
                            <!-- Header -->
                            <div class="max-w-6xl mx-auto mb-8">
                                <div
                                    class="p-6 border shadow-lg bg-white/90 rounded-3xl border-white/20">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h1 class="text-3xl font-bold text-indigo-900">SoPeP</h1>
                                            <p class="font-medium text-indigo-600">Sistema de Prescrição Eletrônica
                                                para
                                                Pé Diabético</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm text-gray-600">Avaliação de enfermagem</p>
                                            <p class="text-lg font-semibold text-gray-800">Necessidades Psicossociais
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Main Content -->
                            <div class="max-w-6xl mx-auto">
                                <fieldset disabled>
                                <div
                                    class="p-8 border shadow-lg bg-white/90 rounded-3xl border-white/20">

                                    <!-- Seção Aprendizagem - Educação a Saúde -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Aprendizagem -
                                                Educação a
                                                Saúde</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <!-- Frequência de monitoramento -->
                                        <div class="mb-8">
                                            <label for="monitoramento_glicemia_dia"
                                                class="block mb-3 text-lg font-semibold text-gray-800">
                                                Frequência por dia de automonitoramento da glicemia capilar:
                                            </label>
                                            <input type="text" wire:model="monitoramento_glicemia_dia"
                                                id="monitoramento_glicemia_dia"
                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 md:w-2/3 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                placeholder="Digite o número de vezes por dia">
                                            @error('monitoramento_glicemia_dia')
                                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Grid de orientações -->
                                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                                            <!-- Cuidado com os pés -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Foi orientado sobre autocuidado com os pés:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="cuidado_pes"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="cuidado_pes"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('cuidado_pes')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Uso de sapatos -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Foi orientado sobre uso de sapatos adequados:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="uso_sapato"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="uso_sapato"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('uso_sapato')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Alimentação -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Foi orientado sobre alimentação:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="alimentacao"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="alimentacao"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('alimentacao')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Regime terapêutico -->
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Compreende e executa o regime terapêutico adequadamente:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="regime_terapeutico"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="regime_terapeutico"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('regime_terapeutico')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seção Recreação/Lazer/Criatividade -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Recreação / Lazer /
                                                Criatividade</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-purple-500 to-purple-700">
                                            </div>
                                        </div>

                                        <div class="p-6 border border-purple-100 bg-purple-50 rounded-2xl">
                                            <label
                                                class="block mb-6 text-lg font-semibold text-gray-800">Recreações</label>
                                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                                                @foreach ($recreacaosList as $recreacao)
                                                    <div
                                                        class="flex items-center p-3 bg-white border border-gray-100 rounded-xl">
                                                        <input type="checkbox" wire:model="recreacaos"
                                                            value="{{ $recreacao->id }}"
                                                            id="recreacao-{{ $recreacao->id }}"
                                                            class="w-5 h-5 text-purple-600 border-2 border-gray-300 rounded focus:ring-purple-500">
                                                        <label for="recreacao-{{ $recreacao->id }}"
                                                            class="ml-3 font-medium text-gray-700 cursor-pointer">
                                                            {{ $recreacao->descricao }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            @error('recreacaos')
                                                <span class="block mt-4 text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Seção Amor/Aceitação/Atenção/Auto estima/Segurança -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Amor / Aceitação /
                                                Atenção
                                                / Auto estima / Segurança</h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-pink-500 to-pink-700">
                                            </div>
                                        </div>

                                        <div class="space-y-8">
                                            <!-- Acompanhado -->
                                            <div class="p-6 border border-pink-100 bg-pink-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Acompanhado no momento da consulta:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="acompanhado"
                                                            value="1"
                                                            class="w-5 h-5 text-pink-600 border-2 border-gray-300 focus:ring-pink-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="acompanhado"
                                                            value="0"
                                                            class="w-5 h-5 text-pink-600 border-2 border-gray-300 focus:ring-pink-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('acompanhado')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Estado Emocional -->
                                            <div class="p-6 border border-pink-100 bg-pink-50 rounded-2xl">
                                                <label class="block mb-6 text-lg font-semibold text-gray-800">Estado
                                                    Emocional</label>
                                                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                                                    @foreach ($emocionalsList as $emocional)
                                                        <div
                                                            class="flex items-center p-3 bg-white border border-gray-100 rounded-xl">
                                                            <input type="checkbox" wire:model="emocionals"
                                                                value="{{ $emocional->id }}"
                                                                id="emocional-{{ $emocional->id }}"
                                                                class="w-5 h-5 text-pink-600 border-2 border-gray-300 rounded focus:ring-pink-500">
                                                            <label for="emocional-{{ $emocional->id }}"
                                                                class="ml-3 font-medium text-gray-700 cursor-pointer">
                                                                {{ $emocional->descricao }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                @error('emocionals')
                                                    <span
                                                        class="block mt-4 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Grid de opiniões e auxiliador -->
                                            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                                                <!-- Opiniões de si -->
                                                <div class="p-6 border border-pink-100 bg-pink-50 rounded-2xl">
                                                    <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                        Opiniões de si mesmo sobre sua lesão:
                                                    </label>
                                                    <div class="flex gap-6">
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="opnioes_de_si"
                                                                value="1"
                                                                class="w-5 h-5 text-pink-600 border-2 border-gray-300 focus:ring-pink-500">
                                                            <span
                                                                class="ml-3 font-medium text-gray-700">Positiva</span>
                                                        </label>
                                                        <label class="flex items-center cursor-pointer">
                                                            <input type="radio" wire:model="opnioes_de_si"
                                                                value="0"
                                                                class="w-5 h-5 text-pink-600 border-2 border-gray-300 focus:ring-pink-500">
                                                            <span
                                                                class="ml-3 font-medium text-gray-700">Negativa</span>
                                                        </label>
                                                    </div>
                                                    @error('opnioes_de_si')
                                                        <span
                                                            class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Auxiliador -->
                                                <div class="p-6 border border-pink-100 bg-pink-50 rounded-2xl">
                                                    <label for="auxiliador"
                                                        class="block mb-4 text-lg font-semibold text-gray-800">
                                                        Quem mais auxilia no seu tratamento:
                                                    </label>
                                                    <input type="text" wire:model="auxiliador" id="auxiliador"
                                                        class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-pink-500 focus:ring-2 focus:ring-pink-200 focus:outline-none"
                                                        placeholder="Digite quem auxilia no tratamento">
                                                    @error('auxiliador')
                                                        <span
                                                            class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seção Comunicação e Gregária -->
                                    <div class="mb-12">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Comunicação e Gregária
                                            </h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500">
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                                            <!-- Apoio familiar -->
                                            <div class="p-6 border border-indigo-100 bg-indigo-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Possui apoio familiar/amigos:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="apoio" value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="apoio" value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('apoio')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Interação social -->
                                            <div class="p-6 border border-indigo-100 bg-indigo-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Interação com as pessoas:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="interacao_social"
                                                            value="1"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="interacao_social"
                                                            value="0"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('interacao_social')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </fieldset disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div x-show="step === 4" x-transition>
        @if ($currentStep == 4)
            <div class="step">
                <div class="flex">
                    <!-- Barra de Navegação -->
                    <div class="w-[320px]">
                        <x-navigation-questionario />
                    </div>

                    <div class="flex-1 min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
                        <!-- Elementos decorativos de fundo otimizados -->
                        <div class="fixed inset-0 overflow-hidden pointer-events-none">
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

                        <div class="relative z-10 px-6 py-8">
                            <!-- Header -->
                            <div class="max-w-6xl mx-auto mb-8">
                                <div
                                    class="p-6 border shadow-lg bg-white/90 rounded-3xl border-white/20">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h1 class="text-3xl font-bold text-indigo-900">SoPeP</h1>
                                            <p class="font-medium text-indigo-600">Sistema de Prescrição Eletrônica
                                                para
                                                Pé Diabético</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm text-gray-600">Avaliação de enfermagem</p>
                                            <p class="text-lg font-semibold text-gray-800">Necessidades
                                                PsicoEspirituais
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Main Content -->
                            <div class="max-w-6xl mx-auto">
                                <div
                                    class="p-8 border shadow-lg bg-white/90 rounded-3xl border-white/20">

                                    <!-- Seção Religião/Espiritualidade -->
                                    <div class="pb-8 mb-10 border-b border-gray-200">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Religião /
                                                Espiritualidade
                                            </h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
                                            </div>
                                        </div>

                                        <!-- Tem religião -->
                                        <div class="mb-8">
                                            <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                                                <label class="block mb-4 text-lg font-semibold text-gray-800">
                                                    Tem Religião:
                                                </label>
                                                <div class="flex gap-6">
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="e_religioso"
                                                            value="sim"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Sim</span>
                                                    </label>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" wire:model="e_religioso"
                                                            value="nao"
                                                            class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                        <span class="ml-3 font-medium text-gray-700">Não</span>
                                                    </label>
                                                </div>
                                                @error('e_religioso')
                                                    <span
                                                        class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Campo de religião (condicional) -->
                                        <div class="mb-8" x-show="$wire.e_religioso === 'sim'" x-cloak>
                                            <label for="religiao"
                                                class="block mb-3 text-lg font-semibold text-gray-800">
                                                Religião/Espiritualidade:
                                            </label>
                                            <input type="text" wire:model="religiao" id="religiao"
                                                class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 md:w-2/3 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                                                placeholder="Digite sua religião/espiritualidade">
                                            @error('religiao')
                                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Seção Evoluções de Enfermagem -->
                                    <div class="mb-12">
                                        <div class="mb-8">
                                            <h2 class="mb-2 text-2xl font-bold text-indigo-900">Evoluções de
                                                Enfermagem
                                            </h2>
                                            <div
                                                class="w-24 h-1 rounded-full bg-gradient-to-r from-purple-500 to-purple-700">
                                            </div>
                                        </div>

                                        <div class="p-6 border border-purple-100 bg-purple-50 rounded-2xl">
                                            <label for="impressoes"
                                                class="block mb-4 text-lg font-semibold text-gray-800">
                                                Evoluções de enfermagem:
                                            </label>
                                            <textarea wire:model="impressoes" id="impressoes"
                                                class="w-full px-4 py-4 text-gray-700 bg-white border-2 border-gray-200 resize-none rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:outline-none"
                                                placeholder="Digite suas impressões sobre a realização da avaliação de enfermagem" rows="6"></textarea>
                                            @error('impressoes')
                                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
