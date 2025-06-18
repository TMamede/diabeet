<div x-data="{ step: @entangle('currentStep') }">
    <div x-show="step === 1" x-transition>
        @if ($currentStep == 1)
            <div class="step">
                <div class="flex">
                    <!-- Barra de Navegação -->
                    <x-navigation-questionario />

                    <!-- Conteúdo da Página -->
                    <div class="relative min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
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

                        <div class="relative z-10 py-12">
                            <!-- Header Section -->
                            <div class="mb-12 text-center">
                                <div class="inline-block p-6 mb-6 backdrop-blur-sm rounded-3xl">
                                    <h1 class="mb-2 text-4xl font-extrabold text-indigo-900 md:text-5xl">
                                        So<span class="text-indigo-600">Pe</span>P
                                    </h1>
                                    <div class="w-20 h-1 mx-auto bg-indigo-600 rounded-full"></div>
                                </div>
                                <h2 class="text-2xl font-bold text-gray-800 md:text-3xl">Dados do Paciente</h2>
                                <p class="mt-2 text-gray-600">Visualize as informações completas antes de iniciar o
                                    questionário</p>
                            </div>

                            @if ($selectedPaciente)
                                <!-- Dados Sociodemográficos -->
                                <div class="max-w-6xl px-6 mx-auto mb-8">
                                    <div
                                        class="p-8 border shadow-lg bg-white/80 backdrop-blur-sm rounded-3xl border-white/20">
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
                                        class="p-8 border shadow-lg bg-white/80 backdrop-blur-sm rounded-3xl border-white/20">
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
                                        class="p-8 border shadow-lg bg-white/80 backdrop-blur-sm rounded-3xl border-white/20">
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
                                        class="p-8 border shadow-lg bg-white/80 backdrop-blur-sm rounded-3xl border-white/20">
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
                                        class="p-8 border shadow-lg bg-white/80 backdrop-blur-sm rounded-3xl border-white/20">
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
    </div>
    <div x-show="step === 2" x-transition>
        @if ($currentStep == 2)
            <div class="step">
                <div class="flex">
                    <!-- Barra de Navegação -->
                    <x-navigation-questionario />

                    <div class="p-6 rounded-lg shadow-lg step bg-gray-50">
                        <h2 class="py-4 text-3xl font-bold text-indigo-600 border-b border-indigo-300">
                            Necessidades PsicoBiológicas
                        </h2>
                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Regulação Neurológica</h2>

                            <div class="flex mb-4 space-x-4">
                                <div class="w-1/3">
                                    <label for="orientado" class="block mb-2 font-medium text-gray-700">Orientado no
                                        tempo/espaço:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="orientado" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="orientado" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('orientado')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="w-1/3">
                                    <label for="comportamento_regulacao_neuro_id"
                                        class="block font-medium text-gray-700">Comportamento</label>
                                    <select wire:model="comportamento_regulacao_neuro_id"
                                        id="comportamento_regulacao_neuro_id"
                                        class="block w-1/2 p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                        <option value="">Selecione</option>
                                        @foreach ($comportamentosNeuro as $comportamento)
                                            <option value="{{ $comportamento->id }}">{{ $comportamento->descricao }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('comportamento_regulacao_neuro_id')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Percepção dos Órgãos do Sentido</h2>
                            <div class="flex space-x-4">
                                <!-- Primeiro div -->
                                <div class="w-1/3">
                                    <div class="mb-4">
                                        <label for="olho_direito"
                                            class="block mb-2 font-medium text-gray-700">Acuidade
                                            visual diminuída no olho direito</label>
                                        <div class="flex items-center mt-1 space-x-6">
                                            <label class="inline-flex items-center">
                                                <input type="radio" wire:model="olho_direito" value="1"
                                                    class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                <span class="ml-2 text-gray-700">Sim</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" wire:model="olho_direito" value="0"
                                                    class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                                <span class="ml-2 text-gray-700">Não</span>
                                            </label>
                                        </div>
                                        @error('olho_direito')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label for="olho_esquerdo"
                                            class="block mb-2 font-medium text-gray-700">Acuidade
                                            visual diminuída no olho esquerdo</label>
                                        <div class="flex items-center mt-1 space-x-6">
                                            <label class="inline-flex items-center">
                                                <input type="radio" wire:model="olho_esquerdo" value="1"
                                                    class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                <span class="ml-2 text-gray-700">Sim</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" wire:model="olho_esquerdo" value="0"
                                                    class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                                <span class="ml-2 text-gray-700">Não</span>
                                            </label>
                                        </div>
                                        @error('olho_esquerdo')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label for="ouvido" class="block mb-2 font-medium text-gray-700">Acuidade
                                            auditiva diminuída</label>
                                        <div class="flex items-center mt-1 space-x-6">
                                            <label class="inline-flex items-center">
                                                <input type="radio" wire:model="ouvido" value="1"
                                                    class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                <span class="ml-2 text-gray-700">Sim</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" wire:model="ouvido" value="0"
                                                    class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                                <span class="ml-2 text-gray-700">Não</span>
                                            </label>
                                        </div>
                                        @error('ouvido')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Segundo div -->
                                <div class="w-1/2">
                                    <div class="mb-4">
                                        <label for="analise_tato_id"
                                            class="block font-medium text-gray-700">Tato</label>
                                        <select wire:model="analise_tato_id" id="analise_tato_id"
                                            class="block w-1/2 p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                            <option value="">Selecione</option>
                                            @foreach ($analiseTatos as $tato)
                                                <option value="{{ $tato->id }}">{{ $tato->descricao }}</option>
                                            @endforeach
                                        </select>
                                        @error('analise_tato_id')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mt-10 mb-4">
                                        <label for="risco_queda" class="block mb-2 font-medium text-gray-700">Risco de
                                            queda</label>
                                        <div class="flex items-center mt-1 space-x-6">
                                            <label class="inline-flex items-center">
                                                <input type="radio" wire:model="risco_queda" value="1"
                                                    class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                <span class="ml-2 text-gray-700">Sim</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" wire:model="risco_queda" value="0"
                                                    class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                                <span class="ml-2 text-gray-700">Não</span>
                                            </label>
                                        </div>
                                        @error('risco_queda')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Hidratação</h2>
                            <div class="flex mb-4 space-x-4">
                                <!-- Primeiro div: Pele -->
                                <div class="w-1/3">
                                    <label for="tipo_pele_id" class="block font-medium text-gray-700">Pele</label>
                                    <select wire:model="tipo_pele_id" id="tipo_pele_id"
                                        class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                        <option value="">Selecione</option>
                                        @foreach ($tipoPeles as $pele)
                                            <option value="{{ $pele->id }}">{{ $pele->descricao }}</option>
                                        @endforeach
                                    </select>
                                    @error('tipo_pele_id')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Segundo div: Volume de líquido diário -->
                                <div class="w-1/3">
                                    <label for="liquido_diario" class="block font-medium text-gray-700">Volume de
                                        líquido
                                        diário ingerido</label>
                                    <input type="number" wire:model="liquido_diario" id="liquido_diario"
                                        class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                        placeholder="Digite em litros o valor de líquido diário">
                                    @error('liquido_diario')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Nutrição</h2>

                            <div class="flex mb-6 space-x-4">
                                <!-- Refeições Diárias -->
                                <div class="w-1/3">
                                    <label class="block mb-2 font-medium text-gray-700">Refeições Diárias</label>
                                    <div class="space-y-2">
                                        @foreach ($refeicaosList as $refeicao)
                                            <div class="flex items-center">
                                                <input type="checkbox" wire:model="refeicaos"
                                                    value="{{ $refeicao->id }}" id="refeicao-{{ $refeicao->id }}"
                                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                <label for="refeicao-{{ $refeicao->id }}" class="ml-2 text-gray-700">
                                                    {{ $refeicao->descricao }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('refeicaos')
                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Restrições Alimentares -->
                                <div class="w-1/2">
                                    <label class="block mb-2 font-medium text-gray-700">Restrições Alimentares</label>
                                    <div class="space-y-2">
                                        @foreach ($restricaosList as $restricao)
                                            <div class="flex items-center">
                                                <input type="checkbox" wire:model="restricaos"
                                                    value="{{ $restricao->id }}" id="restricao-{{ $restricao->id }}"
                                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                <label for="restricao-{{ $restricao->id }}"
                                                    class="ml-2 text-gray-700">
                                                    {{ $restricao->descricao }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('restricaos')
                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="alimento_consumo_id" class="block font-medium text-gray-700">Maior consmo
                                    de:</label>
                                <select wire:model="alimento_consumo_id" id="alimento_consumo_id"
                                    class="block w-1/3 p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($alimentoConsumos as $alimento)
                                        <option value="{{ $alimento->id }}">{{ $alimento->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('alimento_consumo_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Sono e Repouso</h2>
                            <div class="flex mb-6 space-x-4">
                                <!-- Primeiro Div: Horas de Sono, Acorda à Noite e Qualidade do Sono -->
                                <div class="w-1/3">
                                    <div class="mb-4">
                                        <label for="horas_sono" class="block font-medium text-gray-700">Horas de
                                            Sono</label>
                                        <input type="number" wire:model="horas_sono" id="horas_sono"
                                            class="block w-4/5 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                            placeholder="Digite o número de horas de sono">
                                        @error('horas_sono')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label for="acorda_noite" class="block mb-2 font-medium text-gray-700">Acorda
                                            a
                                            noite</label>
                                        <div class="flex items-center mt-1 space-x-6">
                                            <label class="inline-flex items-center">
                                                <input type="radio" wire:model="acorda_noite" value="1"
                                                    class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                <span class="ml-2 text-gray-700">Sim</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" wire:model="acorda_noite" value="0"
                                                    class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                                <span class="ml-2 text-gray-700">Não</span>
                                            </label>
                                        </div>
                                        @error('acorda_noite')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label for="qualidade_sono_id"
                                            class="block font-medium text-gray-700">Qualidade
                                            do
                                            Sono:</label>
                                        <select wire:model="qualidade_sono_id" id="qualidade_sono_id"
                                            class="block w-1/3 p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                            <option value="">Selecione</option>
                                            @foreach ($qualidadeSonos as $qualidade)
                                                <option value="{{ $qualidade->id }}">{{ $qualidade->descricao }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('qualidade_sono_id')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Segundo Div: Problemas Relacionados ao Sono -->
                                <div class="w-1/2">
                                    <div class="mb-6">
                                        <label class="block mb-2 font-medium text-gray-700">Problemas Relacionados ao
                                            Sono</label>
                                        <div class="space-y-2">
                                            @foreach ($problemaSonoList as $problema)
                                                <div class="flex items-center">
                                                    <input type="checkbox" wire:model="problema_sonos"
                                                        value="{{ $problema->id }}"
                                                        id="problema-{{ $problema->id }}"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    <label for="problema-{{ $problema->id }}"
                                                        class="ml-2 text-gray-700">
                                                        {{ $problema->descricao }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                        @error('problema_sonos')
                                            <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="medicamentos_sono" class="block font-medium text-gray-700">Utilização de
                                    medicamentos para dormir - Classe medicamentosa</label>
                                <input type="text" wire:model="medicamentos_sono" id="medicamentos_sono"
                                    class="block w-1/2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite, se usar, a classe do medicamento usado para dormir">
                                @error('medicamentos_sono')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Exercícios Físicos</h2>
                            <div class="mb-4">
                                <label for="realiza" class="block mb-2 font-medium text-gray-700">Realiza Exercícios
                                    Físicos</label>
                                <div class="flex items-center mt-1 space-x-6">
                                    <label class="inline-flex items-center">
                                        <input type="radio" wire:model="realiza" value="1"
                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                        <span class="ml-2 text-gray-700">Sim</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" wire:model="realiza" value="0"
                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                        <span class="ml-2 text-gray-700">Não</span>
                                    </label>
                                </div>
                                @error('realiza')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="frequencia_exercicio_id"
                                    class="block font-medium text-gray-700">Frequência de
                                    exercício físico:</label>
                                <select wire:model="frequencia_exercicio_id" id="frequencia_exercicio_id"
                                    class="block w-1/3 p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($frequenciasExercicio as $frequencia)
                                        <option value="{{ $frequencia->id }}">{{ $frequencia->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('frequencia_exercicio_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="duracao" class="block font-medium text-gray-700">Duração do exercício
                                    físico</label>
                                <input type="number" wire:model="duracao" id="duracao"
                                    class="block w-1/2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o número da média, em minutos, da duração do exercício">
                                @error('duracao')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Abrigo</h2>

                            <div class="flex mb-4 space-x-4">
                                <!-- Zona de Moradia -->
                                <div class="w-1/4">
                                    <label for="zona_moradia_id" class="block font-medium text-gray-700">Zona de
                                        Moradia:</label>
                                    <select wire:model="zona_moradia_id" id="zona_moradia_id"
                                        class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                        <option value="">Selecione</option>
                                        @foreach ($zonasMoradia as $zona)
                                            <option value="{{ $zona->id }}">{{ $zona->descricao }}</option>
                                        @endforeach
                                    </select>
                                    @error('zona_moradia_id')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Rede de Esgoto -->
                                <div class="w-1/4">
                                    <label for="rede_esgoto_id" class="block font-medium text-gray-700">Rede de
                                        Esgoto:</label>
                                    <select wire:model="rede_esgoto_id" id="rede_esgoto_id"
                                        class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                        <option value="">Selecione</option>
                                        @foreach ($redesEsgoto as $rede)
                                            <option value="{{ $rede->id }}">{{ $rede->descricao }}</option>
                                        @endforeach
                                    </select>
                                    @error('rede_esgoto_id')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex mb-4 space-x-4">
                                <!-- Luz Pública -->
                                <div class="w-1/4 mb-4">
                                    <label for="luz_publica" class="block mb-2 font-medium text-gray-700">Luz
                                        Pública:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="luz_publica" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="luz_publica" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('luz_publica')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Coleta de Lixo -->
                                <div class="w-1/4 mb-4">
                                    <label for="coleta_lixo" class="block mb-2 font-medium text-gray-700">Coleta de
                                        lixo:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="coleta_lixo" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="coleta_lixo" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('coleta_lixo')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="flex mb-4 space-x-4">
                                <!-- Água Tratada -->
                                <div class="w-1/4 mb-4">
                                    <label for="agua_tratada" class="block mb-2 font-medium text-gray-700">Água
                                        tratada:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="agua_tratada" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="agua_tratada" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('agua_tratada')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Animais Domésticos -->
                                <div class="w-1/4 mb-4">
                                    <label for="animais_domesticos"
                                        class="block mb-2 font-medium text-gray-700">Presença
                                        de animais domésticos:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="animais_domesticos" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="animais_domesticos" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('animais_domesticos')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Regulação Hormonal</h2>

                            <div class="flex items-center mb-4 space-x-4">
                                <div>
                                    <label for="altura" class="block font-medium text-gray-700">Altura (cm):</label>
                                    <input type="number" wire:model.defer="altura" id="altura"
                                        placeholder="Digite a altura em cm"
                                        class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                </div>

                                <div>
                                    <label for="peso" class="block font-medium text-gray-700">Peso (kg):</label>
                                    <input type="number" wire:model.defer="peso" id="peso"
                                        placeholder="Digite o peso em kg"
                                        class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                </div>

                                <!-- Botão para calcular o IMC -->
                                <div class="flex items-center mt-6">
                                    <button type="button" wire:click="calcularIMC"
                                        class="px-4 py-2 text-white bg-indigo-800 rounded-lg shadow hover:bg-indigo-900">
                                        Calcular IMC
                                    </button>
                                </div>
                            </div>

                            <!-- Exibindo o resultado do IMC e a classificação -->
                            @if ($imc)
                                <div class="flex items-center mt-4 mb-4 space-x-4">
                                    <div class="flex items-center">
                                        <p class="mr-2 font-medium text-gray-700">Seu IMC é:</p>
                                        <input type="text" readonly value="{{ number_format($imc, 2) }}"
                                            class="w-24 bg-gray-100 border border-gray-300 rounded-lg shadow-sm" />
                                    </div>

                                    <div class="p-2 rounded">
                                        <p>Classificação: <strong
                                                class="{{ $corIMC }}">{{ $classificacao }}</strong></p>
                                    </div>
                                </div>
                            @endif



                            <!-- Circunferência Abdominal -->
                            <div class="mb-4 flex items-center">
                                <div class="w-1/3">
                                    <label for="circunferencia_abdnominal"
                                        class="block font-medium text-gray-700">Circunferência Abdominal (cm):</label>
                                    <input type="number" wire:model="circunferencia_abdnominal"
                                        id="circunferencia_abdnominal"
                                        class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                        placeholder="Digite a circunferência abdominal">
                                    @error('circunferencia_abdnominal')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Botão para calcular a classificação da circunferência abdominal -->
                                <button type="button" wire:click="calcularCircunferencia"
                                    class="ml-4 px-4 py-2 text-white bg-indigo-800 rounded-lg shadow hover:bg-indigo-900">
                                    Mostrar Classificação
                                </button>
                            </div>

                            <!-- Exibindo a classificação da circunferência abdominal -->
                            @if ($classificaoCirc)
                                <div class="flex items-center mt-4">
                                    <p class="font-medium text-gray-700">Classificação da Circunferência Abdominal:</p>
                                    <span
                                        class="ml-2 {{ $corCircunferencia }}"><strong>{{ $classificaoCirc }}</strong></span>
                                </div>
                            @endif

                            <!-- Glicemia Capilar -->
                            <div class="mb-4">
                                <!-- Seleção de estado glicêmico -->
                                <div class="w-full mb-4">
                                    <label class="block font-medium text-gray-700 mb-6">Estado da Glicemia</label>
                                    <div class="flex space-x-4">
                                        <!-- Botão "Em Jejum" -->
                                        <button type="button" wire:click="$set('estado_glicemia', 1)"
                                            class="px-4 py-2 rounded-lg shadow focus:outline-none 
            {{ $estado_glicemia === 1 ? 'bg-indigo-800 text-white' : 'bg-indigo-400 text-black' }} hover:bg-indigo-700">
                                            Em Jejum
                                        </button>

                                        <!-- Botão "Duas horas após as refeições" -->
                                        <button type="button" wire:click="$set('estado_glicemia', 0)"
                                            class="px-4 py-2 rounded-lg shadow focus:outline-none 
            {{ $estado_glicemia === 0 ? 'bg-indigo-800 text-white' : 'bg-indigo-400 text-black' }} hover:bg-indigo-700">
                                            Duas horas após as refeições
                                        </button>
                                    </div>
                                </div>

                                <!-- Mostrar Input e Botão SOMENTE depois de selecionar o estado glicêmico -->
                                <div x-show="estado_glicemia !== null" class="flex items-center">
                                    <div class="w-1/3">
                                        <label for="glicemia_capilar" class="block font-medium text-gray-700">Glicemia
                                            Capilar (mg/dl):</label>
                                        <input type="number" wire:model="glicemia_capilar" id="glicemia_capilar"
                                            class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                            placeholder="Digite a glicemia capilar">
                                        @error('glicemia_capilar')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Botão para calcular a classificação da glicemia capilar -->
                                    <button type="button" wire:click="calcularGlicemia"
                                        class="ml-4 px-4 py-2 text-white bg-indigo-800 rounded-lg shadow hover:bg-indigo-900 focus:outline-none">
                                        Mostrar Classificação
                                    </button>
                                </div>

                                <!-- Exibindo a classificação da glicemia capilar -->
                                @if ($classificacaoGlic)
                                    <div class="flex items-center mt-4">
                                        <p class="font-medium text-gray-700">Classificação da Glicemia Capilar:</p>
                                        <span
                                            class="ml-2 {{ $corGlicemia }}"><strong>{{ $classificacaoGlic }}</strong></span>
                                    </div>
                                @endif
                            </div>


                            <div class="flex items-center mb-4 space-x-10">
                                <div>
                                    <label for="jejum" class="block mb-2 font-medium text-gray-700">Jejum:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="jejum" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="jejum" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('jejum')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label for="pos_prandial"
                                        class="block mb-2 font-medium text-gray-700">Pós-Prandial:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="pos_prandial" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="pos_prandial" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('pos_prandial')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Oxigenação</h2>
                            <div class="mb-4">
                                <label for="temp_enchimento_capilar" class="block font-medium text-gray-700">Tempo de
                                    enchimento capilar:</label>
                                <input type="number" wire:model="temp_enchimento_capilar"
                                    id="temp_enchimento_capilar"
                                    class="block w-2/5 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o tempo de enchimento capilar em segundos">
                                @error('temp_enchimento_capilar')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="frequencia_respiratoria"
                                    class="block font-medium text-gray-700">Frequência
                                    respiratória:</label>
                                <input type="number" wire:model="frequencia_respiratoria"
                                    id="frequencia_respiratoria"
                                    class="block w-2/5 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite a freqûencia respiratória em irpm">
                                @error('frequencia_respiratoria')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="satO2" class="block font-medium text-gray-700">SatO2</label>
                                <input type="number" wire:model="satO2" id="satO2"
                                    class="block w-2/5 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite a porcentagem de saturação do oxigênio">
                                @error('satO2')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Regulação Térmica</h2>

                            <div class="mb-4">
                                <label for="temperatura" class="block font-medium text-gray-700">Temperatura:</label>
                                <input type="number" wire:model="temperatura" id="temperatura"
                                    class="block w-1/4 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite a temperatura em °C">
                                @error('temperatura')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Botão para calcular a classificação da temperatura -->
                            <div class="flex items-center mt-6">
                                <button type="button" wire:click="calcularClassificacaoTemperatura"
                                    class="px-4 py-2 text-white bg-indigo-800 rounded-lg shadow hover:bg-indigo-900">
                                    Mostrar Classificação
                                </button>
                            </div>

                            <!-- Exibindo a classificação da temperatura -->
                            @if ($classificacaoTemperatura)
                                <div class="flex items-center mt-4">
                                    <p class="font-medium text-gray-700">Classificação da Temperatura:</p>
                                    <span
                                        class="ml-2 {{ $corTemperatura }}"><strong>{{ $classificacaoTemperatura }}</strong></span>
                                </div>
                            @endif
                        </div>

                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Eliminações</h2>
                            <div class="flex mb-4 space-x-4">
                                <!-- Primeiro div: Dor ao urinar -->
                                <div class="w-1/3">
                                    <label for="dor_urinar" class="block mb-2 font-medium text-gray-700">Dor ao
                                        urinar:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="dor_urinar" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="dor_urinar" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('dor_urinar')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Segundo div: Incontinência - urina -->
                                <div class="w-1/3">
                                    <label for="incontinencia_urina"
                                        class="block mb-2 font-medium text-gray-700">Incontinência
                                        -
                                        urina:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="incontinencia_urina" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="incontinencia_urina" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('incontinencia_urina')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex mb-4 space-x-4">
                                <!-- Primeiro div: Dor - eliminação gastrointestinal -->
                                <div class="w-1/3">
                                    <label for="dor_eliminacoes" class="block mb-2 font-medium text-gray-700">Dor -
                                        eliminação
                                        gastrointestinal:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="dor_eliminacoes" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="dor_eliminacoes" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('dor_eliminacoes')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Segundo div: Incontinência - eliminação gastrointestinal -->
                                <div class="w-1/3">
                                    <label for="incontinencia_eliminacao"
                                        class="block mb-2 font-medium text-gray-700">Incontinência
                                        - eliminação
                                        gastrointestinal:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="incontinencia_eliminacao"
                                                value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="incontinencia_eliminacao"
                                                value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('incontinencia_eliminacao')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex mb-4 space-x-4">
                                <!-- Primeiro div: Constipação -->
                                <div class="w-1/3">
                                    <label for="constipacao"
                                        class="block mb-2 font-medium text-gray-700">Constipação:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="constipacao" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="constipacao" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('constipacao')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Segundo div: Diarreia -->
                                <div class="w-1/3">
                                    <label for="diarreia"
                                        class="block mb-2 font-medium text-gray-700">Diarreia:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="diarreia" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="diarreia" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('diarreia')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex mb-4 space-x-4">
                                <!-- Primeiro div: Uso de Laxante -->
                                <div class="w-1/3">
                                    <label for="uso_laxante" class="block mb-2 font-medium text-gray-700">Uso de
                                        Laxante:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="uso_laxante" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="uso_laxante" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('uso_laxante')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Segundo div: Uso de Fraldas -->
                                <div class="w-1/3">
                                    <label for="uso_fraldas" class="block mb-2 font-medium text-gray-700">Uso de
                                        Fraldas:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="uso_fraldas" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="uso_fraldas" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('uso_fraldas')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="equipamento_externo" class="block font-medium text-gray-700">Uso de
                                    equipamento coletor ou dispositivo externo:</label>
                                <input type="text" wire:model="equipamento_externo" id="equipamento_externo"
                                    class="block w-1/2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite se usa equipamento coletor ou dispositivo externo, se sim qual">
                                @error('equipamento_externo')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Sexualidade</h2>
                            <div class="mb-4">
                                <label for="vida_sex_ativa" class="block mb-2 font-medium text-gray-700">Vida Sexual
                                    Ativa:</label>
                                <div class="flex items-center mt-1 space-x-6">
                                    <label class="inline-flex items-center">
                                        <input type="radio" wire:model="vida_sex_ativa" value="1"
                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                        <span class="ml-2 text-gray-700">Sim</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" wire:model="vida_sex_ativa" value="0"
                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                        <span class="ml-2 text-gray-700">Não</span>
                                    </label>
                                </div>
                                @error('vida_sex_ativa')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 font-medium text-gray-700">Distúrbios Sexuais</label>
                                <div class="space-y-2">
                                    @foreach ($disturbiosSexualList as $disturbio)
                                        <div class="flex items-center">
                                            <input type="checkbox" wire:model="disturbio_sexuals"
                                                value="{{ $disturbio->id }}" id="disturbio-{{ $disturbio->id }}"
                                                class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                            <label for="disturbio-{{ $disturbio->id }}" class="ml-2 text-gray-700">
                                                {{ $disturbio->descricao }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                @error('disturbio_sexuals')
                                    <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Locomoção, Mecânica Corporal e Motilidade </h2>

                            <div class="mb-6">
                                <label class="block mb-2 font-medium text-gray-700">Locomoção</label>
                                <div class="grid grid-cols-2 gap-4">
                                    @foreach ($tiposLocomocaoList as $tipoLoc)
                                        <div class="flex items-center">
                                            <input type="checkbox" wire:model="tipo_locomocaos"
                                                value="{{ $tipoLoc->id }}" id="tipoLoc-{{ $tipoLoc->id }}"
                                                class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                            <label for="tipoLoc-{{ $tipoLoc->id }}" class="ml-2 text-gray-700">
                                                {{ $tipoLoc->descricao }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                @error('tipo_locomocaos')
                                    <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex items-center mb-4 space-x-6">
                                <!-- Primeiro div: Sapato adequado -->
                                <div class="w-1/3">
                                    <label for="sapato_adequado" class="block mb-2 font-medium text-gray-700">Sapato
                                        adequado:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="sapato_adequado" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="sapato_adequado" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('sapato_adequado')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Segundo div: Sandália de cicatrização/offloading -->
                                <div class="w-1/3">
                                    <label for="sandalia_cicatrizacao"
                                        class="block mb-2 font-medium text-gray-700">Sandália
                                        de cicatrização/offloading:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="sandalia_cicatrizacao" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="sandalia_cicatrizacao" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('sandalia_cicatrizacao')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Regulação Vascular</h2>
                            <div class="flex mb-4 space-x-4">
                                <div class="w-1/3">
                                    <label for="pressao_arterial" class="block font-medium text-gray-700">Pressão
                                        arterial:</label>
                                    <input type="text" wire:model="pressao_arterial" id="pressao_arterial"
                                        class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                        placeholder="Digite a pressão arterial em mmHg">
                                    @error('pressao_arterial')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="w-1/3">
                                    <label for="frequencia_cardiaca"
                                        class="block font-medium text-gray-700">Frequência
                                        Cardíaca:</label>
                                    <input type="text" wire:model="frequencia_cardiaca" id="frequencia_cardiaca"
                                        class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                        placeholder="Digite a frequência cardíaca em bpm">
                                    @error('frequencia_cardiaca')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <h2 class="py-5 ml-2 text-xl font-semibold ">Calcule o Índice Tornozelo Braço</h2>

                                <div class="flex flex-wrap mt-2 mb-4 space-x-6">
                                    <div class="w-1/4">
                                        <label for="psatp_direito" class="block font-medium text-gray-700">Pressão
                                            Sistólica
                                            Arteria Tibial Posterior Direito</label>
                                        <input type="text" wire:model="psatp_direito" id="psatp_direito"
                                            class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                            placeholder="Digite o psatp direito">
                                        @error('psatp_direito')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="w-1/4">
                                        <label for="psap_direito" class="block font-medium text-gray-700">Pressão
                                            Sistólica
                                            Arteria Pediosa Direito</label>
                                        <input type="text" wire:model="psap_direito" id="psap_direito"
                                            class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                            placeholder="Digite o psap direito">
                                        @error('psap_direito')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="w-1/4">
                                        <label for="psab_direito" class="block font-medium text-gray-700">Pressão
                                            Sistólica
                                            Artéria Braquial Direito</label>
                                        <input type="text" wire:model="psab_direito" id="psab_direito"
                                            class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                            placeholder="Digite o psab direito">
                                        @error('psab_direito')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!-- Botão para calcular o ITBD -->
                                    <div class="flex items-center mt-12">
                                        <button type="button" wire:click="calcularITBDireito"
                                            class="px-4 py-2 text-white bg-indigo-800 rounded-lg shadow hover:bg-indigo-900">
                                            ITB Direito
                                        </button>
                                    </div>
                                    @if ($itbD)
                                        <div class="flex items-center gap-3 p-3 mt-4 bg-gray-100 rounded-lg shadow-sm">
                                            <p class="text-lg font-semibold text-gray-800">ITB Direito:</p>
                                            <span
                                                class="text-lg font-bold {{ $corITBD }}">{{ $itbD }}</span>
                                            <p class="ml-5 text-lg font-semibold text-gray-800">Classificação:</p>
                                            <span
                                                class="text-lg font-bold {{ $corITBD }}">{{ $classITBD }}</span>
                                        </div>
                                    @endif

                                </div>

                                <div class="flex flex-wrap mb-4 space-x-6">
                                    <div class="w-1/4">
                                        <label for="psatp_esquerdo" class="block font-medium text-gray-700">Pressão
                                            Sistólica
                                            Arteria Tibial Posterior Esquerdo</label>
                                        <input type="text" wire:model="psatp_esquerdo" id="psatp_esquerdo"
                                            class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                            placeholder="Digite o psatp esquerdo">
                                        @error('psatp_esquerdo')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="w-1/4">
                                        <label for="psap_esquerdo" class="block font-medium text-gray-700">Pressão
                                            Sistólica
                                            Arteria Pediosa Esquerdo</label>
                                        <input type="text" wire:model="psap_esquerdo" id="psap_esquerdo"
                                            class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                            placeholder="Digite o psap esquerdo">
                                        @error('psap_esquerdo')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="w-1/4">
                                        <label for="psab_esquerdo" class="block font-medium text-gray-700">Pressão
                                            Sistólica
                                            Artéria Braquial Esquerdo</label>
                                        <input type="text" wire:model="psab_esquerdo" id="psab_esquerdo"
                                            class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                            placeholder="Digite o psab esquerdo">
                                        @error('psab_esquerdo')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Botão para calcular o ITBE -->
                                    <div class="flex items-center mt-12">
                                        <button type="button" wire:click="calcularITBEsquerdo"
                                            class="px-4 py-2 text-white bg-indigo-800 rounded-lg shadow hover:bg-indigo-900">
                                            ITB Esquerdo
                                        </button>
                                    </div>

                                    @if ($itbE)
                                        <div
                                            class="flex items-center gap-3 p-3 py-2 mt-4 bg-gray-100 rounded-lg shadow-sm">
                                            <p class="text-lg font-semibold text-gray-800">ITB Esquerdo:</p>
                                            <span
                                                class="text-lg font-bold {{ $corITBE }}">{{ $itbE }}</span>
                                            <p class="ml-5 text-lg font-semibold text-gray-800">Classificação:</p>
                                            <span
                                                class="text-lg font-bold  {{ $corITBE }}">{{ $classITBE }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Sensopercepção</h2>

                            <div class="mb-6">
                                <label class="block mb-2 font-medium text-gray-700">Sintomas</label>
                                <div class="grid grid-cols-2 gap-4">
                                    @foreach ($sintomasPercepcaoList as $sintomas)
                                        <div class="flex items-center">
                                            <input type="checkbox" wire:model="sintomas_percepcaos"
                                                value="{{ $sintomas->id }}" id="sintomas-{{ $sintomas->id }}"
                                                class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                            <label for="sintomas-{{ $sintomas->id }}" class="ml-2 text-gray-700">
                                                {{ $sintomas->descricao }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                @error('sintomas_percepcaos')
                                    <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="relative w-full h-48">
                                <!-- Ajuste a altura conforme necessário -->
                                <img src="{{ asset('trace.svg') }}" alt="Trace"
                                    class="absolute inset-0 object-contain w-full h-full">
                            </div>
                            <div class="flex mt-4 mb-8 ml-32 space-x-4">
                                <div class="w-1/4">
                                    <label for="pe_neuropatico" class="block mb-2 font-medium text-gray-700">Pé
                                        Neuropático
                                        (Cavus)</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="pe_neuropatico" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="pe_neuropatico" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('pe_neuropatico')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="w-1/4">
                                    <label for="arco_desabado" class="block mb-2 font-medium text-gray-700">Arco
                                        Desabado
                                        (Charcot)</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="arco_desabado" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="arco_desabado" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('arco_desabado')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="w-1/5">
                                    <label for="valgismo"
                                        class="block mb-2 font-medium text-gray-700">Valgismo</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="valgismo" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="valgismo" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('valgismo')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Quarto div: Adicionando novo item -->
                                <div class="w-1/6">
                                    <label for="dedos_em_garra" class="block mb-2 font-medium text-gray-700">Dedos
                                        em
                                        Guerra</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="dedos_em_garra" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="dedos_em_garra" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('dedos_em_garra')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex mb-4 space-x-6">
                                <div>
                                    <label for="corte_unhas" class="block mb-2 font-medium text-gray-700">Corte de
                                        Unhas
                                        Correto:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="corte_unhas" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="corte_unhas" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('corte_unhas')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label for="micose" class="block mb-2 font-medium text-gray-700">Micose
                                        Interdigital:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="micose" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="micose" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('micose')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex mb-4 space-x-6">
                                <div class="mr-11">
                                    <label for="fissuras"
                                        class="block mb-2 font-medium text-gray-700">Fissuras:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="fissuras" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="fissuras" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('fissuras')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label for="calosidades"
                                        class="block mb-2 font-medium text-gray-700">Calosidades:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="calosidades" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="calosidades" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('calosidades')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="estado_unhas_id" class="block font-medium text-gray-700">Estado das
                                    Unhas:</label>
                                <select wire:model="estado_unhas_id" id="estado_unhas_id"
                                    class="block w-1/3 p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($estadoUnhas as $unhas)
                                        <option value="{{ $unhas->id }}">{{ $unhas->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('estado_unhas_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>



                            <div>
                                <h2 class="py-5 text-lg font-bold">Teste de Sensopercepção</h2>
                                <div x-data="{ selectedOption: @entangle('selectedOption') }">
                                    <!-- Opções de seleção -->
                                    <div class="flex mb-4 space-x-4">
                                        <div>
                                            <button type="button" @click="selectedOption = 1"
                                                wire:click="selectOption(1)"
                                                :class="selectedOption === 1 ? 'border-2 border-indigo-900' : ''"
                                                class="px-4 py-2 text-white bg-indigo-600 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-600 ">
                                                Percepção da sensibilidade protetora
                                            </button>
                                        </div>
                                        <div>
                                            <button type="button" @click="selectedOption = 2"
                                                wire:click="selectOption(2)"
                                                :class="selectedOption === 2 ? 'border-2 border-indigo-900' : ''"
                                                class="px-4 py-2 text-white bg-indigo-600 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-600">
                                                Sensibilidade vibratória
                                            </button>
                                        </div>
                                        <div>
                                            <button type="button" @click="selectedOption = 3"
                                                wire:click="selectOption(3)"
                                                :class="selectedOption === 3 ? 'border-2 border-indigo-900' : ''"
                                                class="px-4 py-2 text-white bg-indigo-600 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-600">
                                                Ipswich Touch Test
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Exibir imagem com os booleanos -->
                                    <div x-show="selectedOption" class="mt-4">

                                        <!-- Campos booleanos (iguais para todas as opções) -->
                                        <div class="space-y-4">
                                            <div>
                                                <label for="percepcao_direito"
                                                    class="block mb-2 font-medium text-gray-700">Pé
                                                    Direito</label>
                                                <div class="flex items-center space-x-6">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" wire:model="percepcao_direito"
                                                            value="1"
                                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                        <span class="ml-2 text-gray-700">Percepção presente (responder
                                                            corretamente em duas das três aplicações).</span>
                                                    </label>
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" wire:model="percepcao_direito"
                                                            value="0"
                                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                        <span class="ml-2 text-gray-700">Percepção ausente (responder
                                                            corretamente
                                                            em duas das três aplicações). </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="percepcao_esquerdo"
                                                    class="block mb-2 font-medium text-gray-700">Pé
                                                    Esquerdo</label>
                                                <div class="flex items-center space-x-6">
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" wire:model="percepcao_esquerdo"
                                                            value="1"
                                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                        <span class="ml-2 text-gray-700">Percepção presente (responder
                                                            corretamente em duas das três aplicações). </span>
                                                    </label>
                                                    <label class="inline-flex items-center">
                                                        <input type="radio" wire:model="percepcao_esquerdo"
                                                            value="0"
                                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                        <span class="ml-2 text-gray-700">Percepção ausente (responder
                                                            corretamente
                                                            em duas das três aplicações).</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Integridade Cutânea</h2>

                            <!-- Seleção de lado -->
                            <div class="mb-6">
                                <label class="block mb-2 font-semibold text-gray-700">Qual lado deseja
                                    preencher?</label>
                                <div class="flex gap-4">
                                    <button type="button" wire:click="$set('ladoSelecionado', 'direito')"
                                        class="px-4 py-2 font-semibold rounded-lg shadow-md transition-all duration-150
                   {{ $ladoSelecionado === 'direito'
                       ? 'bg-indigo-600 text-white hover:bg-indigo-700'
                       : 'bg-white border border-indigo-300 text-indigo-700 hover:bg-indigo-50' }}">
                                        Somente Direito
                                    </button>

                                    <button type="button" wire:click="$set('ladoSelecionado', 'esquerdo')"
                                        class="px-4 py-2 font-semibold rounded-lg shadow-md transition-all duration-150
                   {{ $ladoSelecionado === 'esquerdo'
                       ? 'bg-indigo-600 text-white hover:bg-indigo-700'
                       : 'bg-white border border-indigo-300 text-indigo-700 hover:bg-indigo-50' }}">
                                        Somente Esquerdo
                                    </button>

                                    <button type="button" wire:click="$set('ladoSelecionado', 'ambos')"
                                        class="px-4 py-2 font-semibold rounded-lg shadow-md transition-all duration-150
                   {{ $ladoSelecionado === 'ambos'
                       ? 'bg-indigo-600 text-white hover:bg-indigo-700'
                       : 'bg-white border border-indigo-300 text-indigo-700 hover:bg-indigo-50' }}">
                                        Ambos
                                    </button>
                                </div>
                            </div>



                            <div wire:key="lado-{{ $ladoSelecionado }}">
                                {{-- Lesão em Pé Direito --}}
                                @if ($ladoSelecionado === 'direito' || $ladoSelecionado === 'ambos')

                                    <div class="mt-6 mb-4">
                                        <label class="block mb-2 font-semibold text-gray-700">Sinais de Infecção - Pé
                                            Direito</label>
                                        <div class="grid grid-cols-2 gap-4">
                                            @foreach ($sinaisInfeccaoList as $sinais)
                                                <div class="flex items-center">
                                                    <input type="checkbox" wire:model="sinais_infeccao_direito"
                                                        value="{{ $sinais->id }}"
                                                        id="sinais-direito-{{ $sinais->id }}"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    <label for="sinais-direito-{{ $sinais->id }}"
                                                        class="ml-2 text-gray-700">
                                                        {{ $sinais->descricao }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mt-10">
                                        <h2 class="py-5 text-lg font-semibold">Lesão em Pé Direito</h2>

                                        <div class="flex mb-4 space-x-4">
                                            <div class="w-1/4">
                                                <label class="block font-medium text-gray-700">Comprimento
                                                    (cm):</label>
                                                <input type="number" wire:model="dados.direito.comprimento"
                                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm">
                                            </div>

                                            <div class="w-1/4">
                                                <label class="block font-medium text-gray-700">Largura (cm):</label>
                                                <input type="number" wire:model="dados.direito.largura"
                                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm">
                                            </div>
                                        </div>

                                        <div class="flex mb-4 space-x-4">
                                            <div class="w-1/4">
                                                <label class="block font-medium text-gray-700">Localização
                                                    Anatômica:</label>
                                                <select wire:model="dados.direito.localizacao_lesao_id"
                                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm">
                                                    <option value="">Selecione</option>
                                                    @foreach ($localizacaoLesao as $localizacao)
                                                        <option value="{{ $localizacao->id }}">
                                                            {{ $localizacao->descricao }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="w-1/4">
                                                <label class="block font-medium text-gray-700">Região:</label>
                                                <select wire:model="dados.direito.regiao_pe_id"
                                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm">
                                                    <option value="">Selecione</option>
                                                    @foreach ($regiaoPe as $regiao)
                                                        <option value="{{ $regiao->id }}">
                                                            {{ $regiao->descricao }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <label class="block mb-2 font-medium text-gray-700">Lesão Decorrente de
                                                Amputação:</label>
                                            <div class="flex space-x-6">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" wire:model="dados.direito.lesao_amputacao"
                                                        value="1" class="form-radio text-indigo-600">
                                                    <span class="ml-2 text-gray-700">Sim</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" wire:model="dados.direito.lesao_amputacao"
                                                        value="0" class="form-radio text-indigo-600">
                                                    <span class="ml-2 text-gray-700">Não</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex mt-6 mb-4 space-x-4">
                                        <div class="w-1/3">
                                            <label for="bordas_ferida_direito_id"
                                                class="block font-medium text-gray-700">Bordas da Ferida</label>
                                            <select wire:model="dados.direito.bordas_ferida_id"
                                                id="bordas_ferida_direito_id" class="input-select">
                                                <option value="">Selecione</option>
                                                @foreach ($bordasFerida as $borda)
                                                    <option value="{{ $borda->id }}">{{ $borda->descricao }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="w-1/3">
                                            <label for="tipo_tecido_ferida_direito_id"
                                                class="block font-medium text-gray-700">Tipo de Tecido no
                                                Leito</label>
                                            <select wire:model="dados.direito.tipo_tecido_ferida_id"
                                                id="tipo_tecido_ferida_direito_id" class="input-select">
                                                <option value="">Selecione</option>
                                                @foreach ($tiposTecido as $tipo)
                                                    <option value="{{ $tipo->id }}">{{ $tipo->descricao }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="flex mb-4 space-x-4">
                                        <div class="w-1/3">
                                            <label for="profundidade_direito_id"
                                                class="block font-medium text-gray-700">Profundidade</label>
                                            <select wire:model="dados.direito.profundidade_id"
                                                id="profundidade_direito_id" class="input-select">
                                                <option value="">Selecione</option>
                                                @foreach ($profundidades as $profundidade)
                                                    <option value="{{ $profundidade->id }}">
                                                        {{ $profundidade->descricao }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="w-1/3">
                                            <label for="pele_periferida_direito_id"
                                                class="block font-medium text-gray-700">Pele Periferida</label>
                                            <select wire:model="dados.direito.pele_periferida_id"
                                                id="pele_periferida_direito_id" class="input-select">
                                                <option value="">Selecione</option>
                                                @foreach ($pelesPeriferida as $pele)
                                                    <option value="{{ $pele->id }}">{{ $pele->descricao }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="flex mb-4 space-x-4">
                                        <div class="w-1/3">
                                            <label for="quantidade_exudato_direito_id"
                                                class="block font-medium text-gray-700">Quantidade de Exsudato</label>
                                            <select wire:model="dados.direito.quantidade_exudato_id"
                                                id="quantidade_exudato_direito_id" class="input-select">
                                                <option value="">Selecione</option>
                                                @foreach ($quantidadesExudato as $quantidade)
                                                    <option value="{{ $quantidade->id }}">
                                                        {{ $quantidade->descricao }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="w-1/3">
                                            <label for="aspecto_exudato_direito_id"
                                                class="block font-medium text-gray-700">Aspecto do Exsudato</label>
                                            <select wire:model="dados.direito.aspecto_exudato_id"
                                                id="aspecto_exudato_direito_id" class="input-select">
                                                <option value="">Selecione</option>
                                                @foreach ($aspectosExudato as $aspecto)
                                                    <option value="{{ $aspecto->id }}">{{ $aspecto->descricao }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="flex mb-4 space-x-4">
                                        <!-- Odor do Exsudato -->
                                        <div class="w-1/3">
                                            <label for="odor_exudato_direito"
                                                class="block mb-2 font-medium text-gray-700">Odor do exsudato:</label>
                                            <div class="flex items-center mt-1 space-x-6">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" wire:model="dados.direito.odor_exudato"
                                                        value="1"
                                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                    <span class="ml-2 text-gray-700">Sim</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" wire:model="dados.direito.odor_exudato"
                                                        value="0"
                                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                    <span class="ml-2 text-gray-700">Não</span>
                                                </label>
                                            </div>
                                            @error('dados.direito.odor_exudato')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Edema -->
                                        <div class="w-1/3">
                                            <label for="edema_direito"
                                                class="block mb-2 font-medium text-gray-700">Edema:</label>
                                            <div class="flex items-center mt-1 space-x-6">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" wire:model="dados.direito.edema"
                                                        value="1"
                                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                    <span class="ml-2 text-gray-700">Sim</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" wire:model="dados.direito.edema"
                                                        value="0"
                                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                    <span class="ml-2 text-gray-700">Não</span>
                                                </label>
                                            </div>
                                            @error('dados.direito.edema')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Intensidade da Dor -->
                                    <div class="w-full">
                                        <label for="dor_direito"
                                            class="block mb-4 text-lg font-medium text-gray-700">Intensidade da Dor
                                            (Pé
                                            Direito):</label>
                                        <div class="grid grid-cols-11 gap-2 text-center">
                                            @for ($i = 0; $i <= 10; $i++)
                                                @php
                                                    $color = match (true) {
                                                        $i <= 3 => 'bg-green-200 text-green-700',
                                                        $i <= 6 => 'bg-yellow-200 text-yellow-700',
                                                        $i <= 8 => 'bg-orange-200 text-orange-700',
                                                        default => 'bg-red-200 text-red-700',
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
                                                            ? 'ring-4 ring-indigo-400 ring-offset-2 scale-105'
                                                            : '';
                                                @endphp

                                                <button type="button"
                                                    wire:click="$set('dados.direito.dor', {{ $i }})"
                                                    class="flex flex-col items-center p-2 rounded cursor-pointer hover:bg-gray-100 {{ $color }} {{ $selected }}">
                                                    <span class="text-xl">{{ $emoji }}</span>
                                                    <span class="text-sm font-semibold">{{ $i }}</span>
                                                </button>
                                            @endfor
                                        </div>
                                        @error('dados.direito.dor')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>


                                @endif
                            </div>

                            <div wire:key="lado-{{ $ladoSelecionado }}">
                                {{-- Lesão em Pé Esquerdo --}}
                                @if ($ladoSelecionado === 'esquerdo' || $ladoSelecionado === 'ambos')
                                    <!-- SINAIS DE INFECÇÃO - ESQUERDO -->
                                    <div class="mt-6 mb-8">
                                        <label class="block mb-2 font-semibold text-gray-700">Sinais de Infecção - Pé
                                            Esquerdo</label>
                                        <div class="grid grid-cols-2 gap-4">
                                            @foreach ($sinaisInfeccaoList as $sinais)
                                                <div class="flex items-center">
                                                    <input type="checkbox" wire:model="sinais_infeccao_esquerdo"
                                                        value="{{ $sinais->id }}"
                                                        id="sinais-esquerdo-{{ $sinais->id }}"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    <label for="sinais-esquerdo-{{ $sinais->id }}"
                                                        class="ml-2 text-gray-700">
                                                        {{ $sinais->descricao }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mt-10">
                                        <h2 class="py-5 text-lg font-semibold">Lesão em Pé Esquerdo</h2>

                                        <div class="flex mb-4 space-x-4">
                                            <div class="w-1/4">
                                                <label class="block font-medium text-gray-700">Comprimento
                                                    (cm):</label>
                                                <input type="number" wire:model="dados.esquerdo.comprimento"
                                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm">
                                            </div>

                                            <div class="w-1/4">
                                                <label class="block font-medium text-gray-700">Largura (cm):</label>
                                                <input type="number" wire:model="dados.esquerdo.largura"
                                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm">
                                            </div>
                                        </div>

                                        <div class="flex mb-4 space-x-4">
                                            <div class="w-1/4">
                                                <label class="block font-medium text-gray-700">Localização
                                                    Anatômica:</label>
                                                <select wire:model="dados.esquerdo.localizacao_lesao_id"
                                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm">
                                                    <option value="">Selecione</option>
                                                    @foreach ($localizacaoLesao as $localizacao)
                                                        <option value="{{ $localizacao->id }}">
                                                            {{ $localizacao->descricao }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="w-1/4">
                                                <label class="block font-medium text-gray-700">Região:</label>
                                                <select wire:model="dados.esquerdo.regiao_pe_id"
                                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm">
                                                    <option value="">Selecione</option>
                                                    @foreach ($regiaoPe as $regiao)
                                                        <option value="{{ $regiao->id }}">
                                                            {{ $regiao->descricao }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <label class="block mb-2 font-medium text-gray-700">Lesão Decorrente de
                                                Amputação:</label>
                                            <div class="flex space-x-6">
                                                <label class="inline-flex items-center">
                                                    <input type="radio"
                                                        wire:model="dados.esquerdo.lesao_amputacao" value="1"
                                                        class="form-radio text-indigo-600">
                                                    <span class="ml-2 text-gray-700">Sim</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio"
                                                        wire:model="dados.esquerdo.lesao_amputacao" value="0"
                                                        class="form-radio text-indigo-600">
                                                    <span class="ml-2 text-gray-700">Não</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex mt-6 mb-4 space-x-4">
                                        <!-- Bordas da Ferida -->
                                        <div class="w-1/3">
                                            <label for="bordas_ferida_esquerdo_id"
                                                class="block font-medium text-gray-700">Bordas da Ferida</label>
                                            <select wire:model="dados.esquerdo.bordas_ferida_id"
                                                id="bordas_ferida_esquerdo_id" class="input-select">
                                                <option value="">Selecione</option>
                                                @foreach ($bordasFerida as $borda)
                                                    <option value="{{ $borda->id }}">{{ $borda->descricao }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('dados.esquerdo.bordas_ferida_id')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Tipo de Tecido -->
                                        <div class="w-1/3">
                                            <label for="tipo_tecido_ferida_esquerdo_id"
                                                class="block font-medium text-gray-700">Tipo de Tecido no
                                                Leito</label>
                                            <select wire:model="dados.esquerdo.tipo_tecido_ferida_id"
                                                id="tipo_tecido_ferida_esquerdo_id" class="input-select">
                                                <option value="">Selecione</option>
                                                @foreach ($tiposTecido as $tipo)
                                                    <option value="{{ $tipo->id }}">{{ $tipo->descricao }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('dados.esquerdo.tipo_tecido_ferida_id')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="flex mb-4 space-x-4">
                                        <!-- Profundidade -->
                                        <div class="w-1/3">
                                            <label for="profundidade_esquerdo_id"
                                                class="block font-medium text-gray-700">Profundidade</label>
                                            <select wire:model="dados.esquerdo.profundidade_id"
                                                id="profundidade_esquerdo_id" class="input-select">
                                                <option value="">Selecione</option>
                                                @foreach ($profundidades as $profundidade)
                                                    <option value="{{ $profundidade->id }}">
                                                        {{ $profundidade->descricao }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('dados.esquerdo.profundidade_id')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Pele Periferida -->
                                        <div class="w-1/3">
                                            <label for="pele_periferida_esquerdo_id"
                                                class="block font-medium text-gray-700">Pele Periferida</label>
                                            <select wire:model="dados.esquerdo.pele_periferida_id"
                                                id="pele_periferida_esquerdo_id" class="input-select">
                                                <option value="">Selecione</option>
                                                @foreach ($pelesPeriferida as $pele)
                                                    <option value="{{ $pele->id }}">{{ $pele->descricao }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('dados.esquerdo.pele_periferida_id')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="flex mb-4 space-x-4">
                                        <!-- Quantidade de Exsudato -->
                                        <div class="w-1/3">
                                            <label for="quantidade_exudato_esquerdo_id"
                                                class="block font-medium text-gray-700">Quantidade de Exsudato</label>
                                            <select wire:model="dados.esquerdo.quantidade_exudato_id"
                                                id="quantidade_exudato_esquerdo_id" class="input-select">
                                                <option value="">Selecione</option>
                                                @foreach ($quantidadesExudato as $quantidade)
                                                    <option value="{{ $quantidade->id }}">
                                                        {{ $quantidade->descricao }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('dados.esquerdo.quantidade_exudato_id')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Aspecto do Exsudato -->
                                        <div class="w-1/3">
                                            <label for="aspecto_exudato_esquerdo_id"
                                                class="block font-medium text-gray-700">Aspecto do Exsudato</label>
                                            <select wire:model="dados.esquerdo.aspecto_exudato_id"
                                                id="aspecto_exudato_esquerdo_id" class="input-select">
                                                <option value="">Selecione</option>
                                                @foreach ($aspectosExudato as $aspecto)
                                                    <option value="{{ $aspecto->id }}">{{ $aspecto->descricao }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('dados.esquerdo.aspecto_exudato_id')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="flex mb-4 space-x-4">
                                        <!-- Odor do Exsudato -->
                                        <div class="w-1/3">
                                            <label for="odor_exudato_esquerdo"
                                                class="block mb-2 font-medium text-gray-700">Odor do exsudato:</label>
                                            <div class="flex items-center mt-1 space-x-6">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" wire:model="dados.esquerdo.odor_exudato"
                                                        value="1"
                                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                    <span class="ml-2 text-gray-700">Sim</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" wire:model="dados.esquerdo.odor_exudato"
                                                        value="0"
                                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                    <span class="ml-2 text-gray-700">Não</span>
                                                </label>
                                            </div>
                                            @error('dados.esquerdo.odor_exudato')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Edema -->
                                        <div class="w-1/3">
                                            <label for="edema_esquerdo"
                                                class="block mb-2 font-medium text-gray-700">Edema:</label>
                                            <div class="flex items-center mt-1 space-x-6">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" wire:model="dados.esquerdo.edema"
                                                        value="1"
                                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                    <span class="ml-2 text-gray-700">Sim</span>
                                                </label>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" wire:model="dados.esquerdo.edema"
                                                        value="0"
                                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                                    <span class="ml-2 text-gray-700">Não</span>
                                                </label>
                                            </div>
                                            @error('dados.esquerdo.edema')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Intensidade da Dor -->
                                    <div class="w-full">
                                        <label for="dor_esquerdo"
                                            class="block mb-4 text-lg font-medium text-gray-700">Intensidade da Dor
                                            (Pé
                                            Esquerdo):</label>
                                        <div class="grid grid-cols-11 gap-2 text-center">
                                            @for ($i = 0; $i <= 10; $i++)
                                                @php
                                                    $color = match (true) {
                                                        $i <= 3 => 'bg-green-200 text-green-700',
                                                        $i <= 6 => 'bg-yellow-200 text-yellow-700',
                                                        $i <= 8 => 'bg-orange-200 text-orange-700',
                                                        default => 'bg-red-200 text-red-700',
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
                                                            ? 'ring-4 ring-indigo-400 ring-offset-2 scale-105'
                                                            : '';
                                                @endphp

                                                <button type="button"
                                                    wire:click="$set('dados.esquerdo.dor', {{ $i }})"
                                                    class="flex flex-col items-center p-2 rounded cursor-pointer hover:bg-gray-100 {{ $color }} {{ $selected }}">
                                                    <span class="text-xl">{{ $emoji }}</span>
                                                    <span class="text-sm font-semibold">{{ $i }}</span>
                                                </button>
                                            @endfor
                                        </div>
                                        @error('dados.esquerdo.dor')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                @endif
                            </div>
                        </div>


                        <div class="pb-5 border-b border-gray-300">
                            <h2 class="py-5 text-lg font-bold">Cuidados com a Ferida</h2>
                            <div class="flex mb-6 space-x-4">
                                <!-- Refeições Diárias -->
                                <div class="w-1/4">
                                    <label class="block mb-2 font-medium text-gray-700">Limpeza da Lesão:</label>
                                    <div class="space-y-2">
                                        @foreach ($limpezaLesaosList as $limpeza)
                                            <div class="flex items-center">
                                                <input type="checkbox" wire:model="limpeza_lesaos"
                                                    value="{{ $limpeza->id }}" id="limpeza-{{ $limpeza->id }}"
                                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                <label for="limpeza-{{ $limpeza->id }}"
                                                    class="ml-2 text-gray-700">
                                                    {{ $limpeza->descricao }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('limpeza_lesaos')
                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Restrições Alimentares -->
                                <div class="w-1/2">
                                    <label class="block mb-2 font-medium text-gray-700">Coberturas/
                                        Correlatos:</label>
                                    <div class="grid grid-cols-2 gap-4">
                                        @foreach ($coberturasList as $cobertura)
                                            <div class="flex items-center">
                                                <input type="checkbox" wire:model="coberturas"
                                                    value="{{ $cobertura->id }}"
                                                    id="cobertura-{{ $cobertura->id }}"
                                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                <label for="cobertura-{{ $cobertura->id }}"
                                                    class="ml-2 text-gray-700">
                                                    {{ $cobertura->descricao }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('coberturas')
                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex mb-4 space-x-4">
                                <!-- Zona de Moradia -->
                                <div class="w-1/3">
                                    <div class="w-full">
                                        <label for="desbridamento_id" class="block font-medium text-gray-700">Tipos
                                            de
                                            Desbridamento:</label>
                                        <select wire:model="desbridamento_id" id="desbridamento_id"
                                            class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                            <option value="">Selecione</option>
                                            @foreach ($desbridamentos as $desbridamento)
                                                <option value="{{ $desbridamento->id }}">
                                                    {{ $desbridamento->descricao }}</option>
                                            @endforeach
                                        </select>
                                        @error('desbridamento_id')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Rede de Esgoto -->
                                <div class="w-1/3">
                                    <div class="w-full">
                                        <label for="avaliacao_ferida_id"
                                            class="block font-medium text-gray-700">Avaliação
                                            da
                                            Ferida:</label>
                                        <select wire:model="avaliacao_ferida_id" id="avaliacao_ferida_id"
                                            class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                            <option value="">Selecione</option>
                                            @foreach ($avaliacaoFeridas as $avaliacao)
                                                <option value="{{ $avaliacao->id }}">
                                                    {{ $avaliacao->descricao }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('avaliacao_ferida_id')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="flex mb-4 space-x-4">
                                <!-- Primeiro div: Sapato adequado -->
                                <div class="w-1/3">
                                    <label for="aplicacao_laserterapia"
                                        class="block mb-2 font-medium text-gray-700">Aplicação
                                        de Laserterapia:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="aplicacao_laserterapia"
                                                value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="aplicacao_laserterapia"
                                                value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('aplicacao_laserterapia')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Segundo div: Sandália de cicatrização/offloading -->
                                <div class="w-1/3">
                                    <label for="terapia_fotodinamica"
                                        class="block mb-2 font-medium text-gray-700">Terapia
                                        fotodinâmica:</label>
                                    <div class="flex items-center mt-1 space-x-6">
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="terapia_fotodinamica" value="1"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Sim</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" wire:model="terapia_fotodinamica" value="0"
                                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                            <span class="ml-2 text-gray-700">Não</span>
                                        </label>
                                    </div>
                                    @error('terapia_fotodinamica')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="imagem_avaliacao_pe"
                                class="block mt-4 text-lg font-medium text-gray-700">Avaliação
                                do
                                Pé (Imagem)</label>

                            <div
                                class="flex items-center justify-between p-4 mt-5 transition duration-300 ease-in-out border-2 border-gray-300 rounded-lg hover:border-indigo-500 focus-within:border-indigo-500 focus-within:ring-2 focus-within:ring-indigo-300">
                                <label for="imagem_avaliacao_pe" class="flex items-center space-x-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg>
                                    <span class="ml-6 text-base font-semibold text-indigo-500">Escolher
                                        arquivo</span>
                                </label>

                                <input type="file" id="imagem_avaliacao_pe" wire:model="imagem_avaliacao_pe"
                                    class="hidden">
                            </div>

                            <!-- Exibindo Mensagens de Erro -->
                            @error('imagem_avaliacao_pe')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror

                            @if ($imagem_avaliacao_pe)
                                <div class="mt-6">
                                    <p class="mb-4 text-xs text-gray-600">Pré-visualização da Imagem</p>
                                    <div
                                        class="w-full max-w-4xl p-6 mx-auto border border-indigo-100 rounded-lg shadow-lg bg-gray-50">
                                        <img src="{{ $imagem_avaliacao_pe->temporaryUrl() }}"
                                            alt="Pré-visualização da imagem"
                                            class="object-contain w-full rounded-lg h-96">
                                    </div>
                                </div>
                            @elseif ($imagem_avaliacao_pe_url)
                                <div class="mt-6">
                                    <p class="mb-4 text-xs text-gray-600">Imagem Atual</p>
                                    <div
                                        class="w-full max-w-4xl p-6 mx-auto border border-indigo-100 rounded-lg shadow-lg bg-gray-50">
                                        <img src="{{ Storage::url($imagem_avaliacao_pe_url) }}" alt="Imagem atual"
                                            class="object-contain w-full rounded-lg h-96">
                                    </div>
                                </div>
                            @endif
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
                    <x-navigation-questionario />

                    <div class="min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
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
                                    class="p-6 border shadow-lg backdrop-blur-sm bg-white/90 rounded-3xl border-white/20">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h1 class="text-3xl font-bold text-indigo-900">SoPeP</h1>
                                            <p class="font-medium text-indigo-600">Sistema de Prescrição Eletrônica
                                                para
                                                Pé Diabético</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm text-gray-600">Questionário</p>
                                            <p class="text-lg font-semibold text-gray-800">Necessidades Psicossociais
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Main Content -->
                            <div class="max-w-6xl mx-auto">
                                <div
                                    class="p-8 border shadow-lg backdrop-blur-sm bg-white/90 rounded-3xl border-white/20">

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
                    <x-navigation-questionario />

                    <!-- Main Content -->
                    <div class="max-w-6xl mx-auto">
                        <div class="p-8 border shadow-lg backdrop-blur-sm bg-white/90 rounded-3xl border-white/20">

                            <!-- Seção Religião/Espiritualidade -->
                            <div class="pb-8 mb-10 border-b border-gray-200">
                                <div class="mb-8">
                                    <h2 class="mb-2 text-2xl font-bold text-indigo-900">Religião / Espiritualidade
                                    </h2>
                                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700">
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
                                                <input type="radio" wire:model="e_religioso" value="sim"
                                                    class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                <span class="ml-3 font-medium text-gray-700">Sim</span>
                                            </label>
                                            <label class="flex items-center cursor-pointer">
                                                <input type="radio" wire:model="e_religioso" value="nao"
                                                    class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                                <span class="ml-3 font-medium text-gray-700">Não</span>
                                            </label>
                                        </div>
                                        @error('e_religioso')
                                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Campo de religião (condicional) -->
                                <div class="mb-8" x-show="$wire.e_religioso === 'sim'" x-cloak>
                                    <label for="religiao" class="block mb-3 text-lg font-semibold text-gray-800">
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
                                    <h2 class="mb-2 text-2xl font-bold text-indigo-900">Evoluções de Enfermagem
                                    </h2>
                                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-purple-500 to-purple-700">
                                    </div>
                                </div>

                                <div class="p-6 border border-purple-100 bg-purple-50 rounded-2xl">
                                    <label for="impressoes" class="block mb-4 text-lg font-semibold text-gray-800">
                                        Evoluções de enfermagem:
                                    </label>
                                    <textarea wire:model="impressoes" id="impressoes"
                                        class="w-full px-4 py-4 text-gray-700 bg-white border-2 border-gray-200 resize-none rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 focus:outline-none"
                                        placeholder="Digite suas impressões sobre a realização do questionário" rows="6"></textarea>
                                    @error('impressoes')
                                        <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
