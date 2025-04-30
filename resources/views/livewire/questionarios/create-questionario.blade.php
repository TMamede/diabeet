<div x-data="{ step: @entangle('currentStep') }">
    <form>
        <div x-show="step === 1" x-transition>
            {{-- Etapa 1: Amostra de dados do paciente --}}
            @if ($currentStep == 1)
                <div class="step">
                    <div class="w-full py-24">
                        <div id="search-bar" class="w-full max-w-2xl mx-auto">
                            <!-- Título -->
                            <h2 class="mb-6 text-3xl font-semibold text-center text-gray-800">Pesquise o paciente</h2>

                            <!-- Formulário de Busca -->
                            <form class="flex justify-center" role="search">
                                <input wire:model.live.debounce.300ms="search"
                                    class="block w-full px-6 py-3 border border-gray-300 rounded-lg shadow-sm form-control focus:ring-indigo-500 focus:border-indigo-500"
                                    type="search" placeholder="Pesquise o paciente ou prontuário" aria-label="Search">
                            </form>

                            <!-- Resultados de Pesquisa -->
                            @if (sizeof($pacientes) > 0)
                                <div class="mt-4 bg-white rounded-lg shadow-lg">
                                    @foreach ($pacientes as $paciente)
                                        <div class="py-3 border-b border-gray-200 cursor-pointer hover:bg-gray-100"
                                            wire:click="selectPaciente({{ $paciente->id }})">
                                            <div class="flex flex-col px-6">
                                                <span
                                                    class="text-lg font-medium text-gray-900">{{ $paciente->nome }}</span>
                                                <small class="text-gray-500">{{ $paciente->email }}</small>
                                                <small class="text-gray-500">{{ $paciente->prontuario }}</small>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        @if ($selectedPaciente)
                            <div class="max-w-4xl p-8 mx-auto mt-10 bg-white rounded-lg shadow-lg">
                                <h2 class="py-5 pb-4 mb-6 text-2xl font-bold text-gray-800 border-b">Dados
                                    Sociodemográficos
                                </h2>

                                <!-- Grid para os Dados Sociodemográficos -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                                    @foreach ([
        ['label' => 'CPF', 'value' => $selectedPaciente->cpf],
        ['label' => 'Email', 'value' => $selectedPaciente->email],
        ['label' => 'Nome', 'value' => $selectedPaciente->nome],
        ['label' => 'Prontuário', 'value' => $selectedPaciente->prontuario],
        ['label' => 'Data de Nascimento', 'value' => $selectedPaciente->data_nasc],
        ['label' => 'Orientação Sexual', 'value' => $selectedPaciente->orientacao_sexual->descricao],
        ['label' => 'Estado Civil', 'value' => $selectedPaciente->estado_civil->descricao],
        ['label' => 'Etnia', 'value' => $selectedPaciente->etnia->descricao],
        ['label' => 'Rua', 'value' => $selectedPaciente->endereco->rua],
        ['label' => 'Número', 'value' => $selectedPaciente->endereco->numero],
        ['label' => 'Bairro', 'value' => $selectedPaciente->endereco->bairro],
        ['label' => 'Cidade', 'value' => $selectedPaciente->endereco->cidade],
        ['label' => 'UF', 'value' => $selectedPaciente->endereco->uf],
        ['label' => 'Ocupação', 'value' => $selectedPaciente->ocupacao],
        ['label' => 'Renda Familiar', 'value' => $selectedPaciente->renda_familiar],
        ['label' => 'Benefício', 'value' => $selectedPaciente->beneficio->descricao],
        ['label' => 'Quem reside em casa', 'value' => $selectedPaciente->reside->descricao],
        ['label' => 'Número de pessoas morando em casa', 'value' => $selectedPaciente->num_pss_casa],
    ] as $item)
                                        <div class="flex flex-col">
                                            <label
                                                class="text-sm font-medium text-gray-600">{{ $item['label'] }}</label>
                                            <div class="p-3 mt-1 text-gray-800 bg-gray-300 rounded-md shadow-inner">
                                                {{ $item['value'] }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="max-w-4xl p-8 mx-auto mt-10 bg-white rounded-lg shadow-lg">
                                <h2 class="py-5 pb-4 mb-6 text-2xl font-bold text-gray-800 border-b">Histórico do
                                    Paciente
                                </h2>

                                <!-- Grid para os Dados Historico -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                                    @foreach ([
        ['label' => 'Tipo de Diabetes', 'value' => $selectedPaciente->historico->tipo_diabetes->tipo],
        ['label' => 'Motivo de Cirurgia', 'value' => $selectedPaciente->historico->cirurgia_motivo],
        ['label' => 'Onde a Amputação', 'value' => $selectedPaciente->historico->amputacao_onde],
        ['label' => 'Data da Amputação', 'value' => $selectedPaciente->historico->amputacao_quando],
        [
            'label' => 'Número de Cigarros
                            Diários',
            'value' => $selectedPaciente->historico->n_cigarros,
        ],
        [
            'label' => 'Início do
                            Tabagismo',
            'value' => $selectedPaciente->historico->inicio_tabagismo,
        ],
        [
            'label' => 'Início
                            do Etilismo',
            'value' => $selectedPaciente->historico->inicio_etilismo,
        ],
    ] as $item)
                                        <div class="flex flex-col">
                                            <label
                                                class="text-sm font-medium text-gray-600">{{ $item['label'] }}</label>
                                            <div class="p-3 mt-1 text-gray-800 bg-gray-300 rounded-md shadow-inner">
                                                {{ $item['value'] }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="grid grid-cols-1 gap-8 pt-3 md:grid-cols-2">
                                    <!-- Comorbidades -->
                                    <div>
                                        <h3 class="mb-1 text-sm font-medium text-gray-600">Comorbidades</h3>
                                        <ul class="space-y-2 list-none ">
                                            @forelse ($selectedPaciente->historico->comorbidades as $comorbidade)
                                                <li class="p-2 text-gray-800 bg-gray-300 rounded">
                                                    {{ $comorbidade->descricao }}</li>
                                            @empty
                                                <li class="text-gray-500">Nenhuma comorbidade registrada.</li>
                                            @endforelse
                                        </ul>
                                    </div>

                                    <!-- Alergias -->
                                    <div>
                                        <h3 class="mb-1 text-sm font-medium text-gray-600">Alergias</h3>
                                        <ul class="space-y-2 list-none ">
                                            @forelse ($selectedPaciente->historico->alergias as $alergia)
                                                <li class="p-2 text-gray-800 bg-gray-300 rounded">
                                                    {{ $alergia->descricao }}
                                                </li>
                                            @empty
                                                <li class="text-gray-500">Nenhuma alergia registrada.</li>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Medicamentos -->
                            <div class="max-w-4xl p-8 mx-auto mt-10 bg-white rounded-lg shadow-lg">
                                <h2 class="py-5 pb-4 mb-6 text-2xl font-bold text-gray-800 border-b">Medicamentos</h2>

                                <!-- Grid para os Medicamentos -->
                                <div class="space-y-4">
                                    @forelse ($selectedPaciente->medicamentos as $medicamento)
                                        <div
                                            class="p-6 transition duration-150 ease-in-out bg-gray-300 border border-gray-300 rounded-lg shadow-md">
                                            <h4 class="mb-2 text-xl font-semibold text-gray-900">
                                                {{ $medicamento->nome_generico }}</h4>
                                            <p class="mb-1 text-gray-700"><span class="font-medium">Via:</span>
                                                {{ $medicamento->via->descricao }}</p>
                                            <p class="text-gray-700"><span class="font-medium">Dose:</span>
                                                {{ $medicamento->dose }}</p>
                                        </div>
                                    @empty
                                        <p class="text-gray-500">Nenhum medicamento registrado.</p>
                                    @endforelse
                                </div>
                            </div>
                            <!-- Resultados -->
                            <div class="max-w-4xl p-8 mx-auto mt-10 bg-white rounded-lg shadow-lg">
                                <h2 class="py-5 pb-4 mb-6 text-2xl font-bold text-gray-800 border-b">Resultados</h2>

                                <!-- Grid para os Resultados -->
                                <div class="space-y-4">
                                    @forelse ($selectedPaciente->resultados as $resultado)
                                        <div
                                            class="p-6 transition duration-150 ease-in-out bg-gray-300 border border-gray-300 rounded-lg shadow-md">
                                            <h4 class="mb-2 text-xl font-semibold text-gray-900">Resultado
                                                #{{ $loop->iteration }}
                                            </h4>
                                            <p class="text-gray-700">{{ $resultado->texto_resultado }}</p>
                                        </div>
                                    @empty
                                        <p class="text-gray-500">Nenhum resultado registrado.</p>
                                    @endforelse
                                </div>
                            </div>
                            <div class="flex justify-center w-full mt-8">
                                <button type="button" wire:click="nextStep"
                                    @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                                    class="relative inline-flex items-center justify-center px-8 py-3 overflow-hidden text-lg font-semibold text-white bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-xl shadow-lg transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                    <span class="z-10">Continuar</span>
                                    <div class="absolute inset-0 bg-white opacity-5 pointer-events-none"></div>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>
        <div x-show="step === 2" x-transition>
            {{-- Etapa 2: Necessidades Biológicas --}}
            @if ($currentStep == 2)
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
                                    <label for="olho_direito" class="block mb-2 font-medium text-gray-700">Acuidade
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
                                    <label for="olho_esquerdo" class="block mb-2 font-medium text-gray-700">Acuidade
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
                                    <label for="analise_tato_id" class="block font-medium text-gray-700">Tato</label>
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
                                <label for="liquido_diario" class="block font-medium text-gray-700">Volume de líquido
                                    diário</label>
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
                                            <label for="restricao-{{ $restricao->id }}" class="ml-2 text-gray-700">
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
                                    <label for="acorda_noite" class="block mb-2 font-medium text-gray-700">Acorda a
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
                                    <label for="qualidade_sono_id" class="block font-medium text-gray-700">Qualidade
                                        do
                                        Sono:</label>
                                    <select wire:model="qualidade_sono_id" id="qualidade_sono_id"
                                        class="block w-1/3 p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                        <option value="">Selecione</option>
                                        @foreach ($qualidadeSonos as $qualidade)
                                            <option value="{{ $qualidade->id }}">{{ $qualidade->descricao }}</option>
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
                                                    value="{{ $problema->id }}" id="problema-{{ $problema->id }}"
                                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                <label for="problema-{{ $problema->id }}" class="ml-2 text-gray-700">
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
                            <label for="frequencia_exercicio_id" class="block font-medium text-gray-700">Frequência de
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
                                <label for="animais_domesticos" class="block mb-2 font-medium text-gray-700">Presença
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

                                <div class="p-2 rounded bg-green-50">
                                    <p>Classificação: <strong>{{ $classificacao }}</strong></p>
                                </div>
                            </div>
                        @endif



                        <div class="flex items-center mb-4 space-x-4">
                            <div class="w-1/3">
                                <label for="circunferencia_abdnominal"
                                    class="block font-medium text-gray-700">Circunferência
                                    abdominal</label>
                                <input type="number" wire:model="circunferencia_abdnominal"
                                    id="circunferencia_abdnominal"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite a circunferência abdominal em cm">
                                @error('circunferencia_abdnominal')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="w-1/3">
                                <label for="glicemia_capilar" class="block font-medium text-gray-700">Glicemia capilar
                                    do
                                    momento</label>
                                <input type="number" wire:model="glicemia_capilar" id="glicemia_capilar"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite a glicemia capilar do momento em mg/dl">
                                @error('glicemia_capilar')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
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
                            <input type="number" wire:model="temp_enchimento_capilar" id="temp_enchimento_capilar"
                                class="block w-2/5 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                placeholder="Digite o tempo de enchimento capilar em segundos">
                            @error('temp_enchimento_capilar')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="frequencia_respiratoria" class="block font-medium text-gray-700">Frequência
                                respiratória:</label>
                            <input type="number" wire:model="frequencia_respiratoria" id="frequencia_respiratoria"
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
                                    class="ml-2 text-green-600"><strong>{{ $classificacaoTemperatura }}</strong></span>
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
                                        <input type="radio" wire:model="incontinencia_eliminacao" value="1"
                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                        <span class="ml-2 text-gray-700">Sim</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" wire:model="incontinencia_eliminacao" value="0"
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
                                <label for="diarreia" class="block mb-2 font-medium text-gray-700">Diarreia:</label>
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
                                <label for="frequencia_cardiaca" class="block font-medium text-gray-700">Frequência
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
                                        <span class="text-lg font-bold text-blue-600">{{ $itbD }}</span>
                                        <p class="ml-5 text-lg font-semibold text-gray-800">Classificação:</p>
                                        <span class="text-lg font-bold text-blue-600">{{ $classITBD }}</span>
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
                                        <span class="text-lg font-bold text-blue-600">{{ $itbE }}</span>
                                        <p class="ml-5 text-lg font-semibold text-gray-800">Classificação:</p>
                                        <span class="text-lg font-bold text-blue-600">{{ $classITBE }}</span>
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
                                <label for="arco_desabado" class="block mb-2 font-medium text-gray-700">Arco Desabado
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
                                <label for="valgismo" class="block mb-2 font-medium text-gray-700">Valgismo</label>
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
                                <label for="dedos_em_garra" class="block mb-2 font-medium text-gray-700">Dedos em
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
                                <label for="corte_unhas" class="block mb-2 font-medium text-gray-700">Corte de Unhas
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
                                <label for="fissuras" class="block mb-2 font-medium text-gray-700">Fissuras:</label>
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
                        <div>
                            <div class="mb-8">
                                <label class="block mb-2 font-medium text-gray-700">Sinais de Infeccção</label>
                                <div class="grid grid-cols-2 gap-4">
                                    @foreach ($sinaisInfeccaoList as $sinais)
                                        <div class="flex items-center">
                                            <input type="checkbox" wire:model="sinais_infeccaos"
                                                value="{{ $sinais->id }}" id="sinais-{{ $sinais->id }}"
                                                class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                            <label for="sinais-{{ $sinais->id }}" class="ml-2 text-gray-700">
                                                {{ $sinais->descricao }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                @error('sinais_infeccaos')
                                    <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <h2 class="py-5 text-lg font-semibold">Pé Direito</h2>
                            <div class="flex items-center mb-4 space-x-10">
                                <div>
                                    <label for="comprimentoD" class="block font-medium text-gray-700">Comprimento
                                        (cm):</label>
                                    <input type="number" wire:model="comprimentoD" id="comprimentoD"
                                        placeholder="Digite o comprimento"
                                        class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                </div>

                                <div>
                                    <label for="larguraD" class="block font-medium text-gray-700">Largura
                                        (cm):</label>
                                    <input type="number" wire:model="larguraD" id="larguraD"
                                        placeholder="Digite a largura"
                                        class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                </div>
                            </div>
                            <div class="flex mb-4 space-x-4">
                                <!-- Zona de Moradia -->
                                <div class="w-1/4">
                                    <label for="localizacao_lesao_direito_id"
                                        class="block font-medium text-gray-700">Localização
                                        Anatômica da
                                        lesão:</label>
                                    <select wire:model="localizacao_lesao_direito_id"
                                        id="localizacao_lesao_direito_id"
                                        class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                        <option value="">Selecione</option>
                                        @foreach ($localizacaoLesao as $localizacao)
                                            <option value="{{ $localizacao->id }}">{{ $localizacao->descricao }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('localizacao_lesao_direito_id')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Rede de Esgoto -->
                                <div class="w-1/4">
                                    <label for="regiao_pe_direito_id"
                                        class="block font-medium text-gray-700">Região:</label>
                                    <select wire:model="regiao_pe_direito_id" id="regiao_pe_direito_id"
                                        class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                        <option value="">Selecione</option>
                                        @foreach ($regiaoPe as $regiao)
                                            <option value="{{ $regiao->id }}">{{ $regiao->descricao }}</option>
                                        @endforeach
                                    </select>
                                    @error('regiao_pe_direito_id')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="lesao_amputacaoD" class="block mb-2 font-medium text-gray-700">Lesão
                                    Decorrete de Amputação:</label>
                                <div class="flex items-center mt-1 space-x-6">
                                    <label class="inline-flex items-center">
                                        <input type="radio" wire:model="lesao_amputacaoD" value="1"
                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                        <span class="ml-2 text-gray-700">Sim</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" wire:model="lesao_amputacaoD" value="0"
                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                        <span class="ml-2 text-gray-700">Não</span>
                                    </label>
                                </div>
                                @error('lesao_amputacaoD')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <h2 class="py-5 text-lg font-semibold">Pé Esquerdo</h2>
                            <div class="flex items-center mb-4 space-x-10">
                                <div>
                                    <label for="comprimentoE" class="block font-medium text-gray-700">Comprimento
                                        (cm):</label>
                                    <input type="number" wire:model="comprimentoE" id="comprimentoE"
                                        placeholder="Digite o comprimento"
                                        class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                </div>

                                <div>
                                    <label for="larguraE" class="block font-medium text-gray-700">Largura
                                        (cm):</label>
                                    <input type="number" wire:model="larguraE" id="larguraE"
                                        placeholder="Digite a largura"
                                        class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                </div>
                            </div>
                            <div class="flex mb-4 space-x-4">
                                <!-- Zona de Moradia -->
                                <div class="w-1/4">
                                    <label for="localizacao_lesao_esquerdo_id"
                                        class="block font-medium text-gray-700">Localização
                                        Anatômica da
                                        lesão:</label>
                                    <select wire:model="localizacao_lesao_esquerdo_id"
                                        id="localizacao_lesao_esquerdo_id"
                                        class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                        <option value="">Selecione</option>
                                        @foreach ($localizacaoLesao as $localizacao)
                                            <option value="{{ $localizacao->id }}">{{ $localizacao->descricao }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('localizacao_lesao_esquerdo_id')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Rede de Esgoto -->
                                <div class="w-1/4">
                                    <label for="regiao_pe_esquerdo_id"
                                        class="block font-medium text-gray-700">Região:</label>
                                    <select wire:model="regiao_pe_esquerdo_id" id="regiao_pe_esquerdo_id"
                                        class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                        <option value="">Selecione</option>
                                        @foreach ($regiaoPe as $regiao)
                                            <option value="{{ $regiao->id }}">{{ $regiao->descricao }}</option>
                                        @endforeach
                                    </select>
                                    @error('regiao_pe_esquerdo_id')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="lesao_amputacaoE" class="block mb-2 font-medium text-gray-700">Lesão
                                    Decorrete de Amputação:</label>
                                <div class="flex items-center mt-1 space-x-6">
                                    <label class="inline-flex items-center">
                                        <input type="radio" wire:model="lesao_amputacaoE" value="1"
                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                        <span class="ml-2 text-gray-700">Sim</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" wire:model="lesao_amputacaoE" value="0"
                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                        <span class="ml-2 text-gray-700">Não</span>
                                    </label>
                                </div>
                                @error('lesao_amputacaoE')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="flex mt-6 mb-4 space-x-4">
                            <!-- Zona de Moradia -->
                            <div class="w-1/4">
                                <label for="bordas_ferida_id" class="block font-medium text-gray-700">Bordas da
                                    Ferida</label>
                                <select wire:model="bordas_ferida_id" id="bordas_ferida_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($bordasFerida as $borda)
                                        <option value="{{ $borda->id }}">{{ $borda->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('bordas_ferida_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Rede de Esgoto -->
                            <div class="w-1/4">
                                <label for="tipo_tecido_ferida_id" class="block font-medium text-gray-700">Tipo de
                                    Tecido no Leito da Ferida</label>
                                <select wire:model="tipo_tecido_ferida_id" id="tipo_tecido_ferida_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($tiposTecido as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('tipo_tecido_ferida_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex mb-4 space-x-4">
                            <!-- Zona de Moradia -->
                            <div class="w-1/4">
                                <label for="profundidade_id"
                                    class="block font-medium text-gray-700">Profundidade</label>
                                <select wire:model="profundidade_id" id="profundidade_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($profundidades as $profundidade)
                                        <option value="{{ $profundidade->id }}">{{ $profundidade->descricao }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('profundidade_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Rede de Esgoto -->
                            <div class="w-1/4">
                                <label for="pele_periferida_id" class="block font-medium text-gray-700">Pele
                                    Periferida</label>
                                <select wire:model="pele_periferida_id" id="pele_periferida_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($pelesPeriferida as $pele)
                                        <option value="{{ $pele->id }}">{{ $pele->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('pele_periferida_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex mb-4 space-x-4">
                            <!-- Zona de Moradia -->
                            <div class="w-1/4">
                                <label for="quantidade_exudato_id"
                                    class="block font-medium text-gray-700">Quantidade de
                                    Exudato</label>
                                <select wire:model="quantidade_exudato_id" id="quantidade_exudato_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($quantidadesExudato as $quantidade)
                                        <option value="{{ $quantidade->id }}">{{ $quantidade->descricao }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('quantidade_exudato_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Rede de Esgoto -->
                            <div class="w-1/4">
                                <label for="aspecto_exudato_id" class="block font-medium text-gray-700">Aspecto do
                                    Exudato</label>
                                <select wire:model="aspecto_exudato_id" id="aspecto_exudato_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($aspectosExudato as $aspecto)
                                        <option value="{{ $aspecto->id }}">{{ $aspecto->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('aspecto_exudato_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex mb-4 space-x-4">
                            <!-- Primeiro div: Sapato adequado -->
                            <div class="w-1/4">
                                <label for="odor_exudato" class="block mb-2 font-medium text-gray-700">Odor do
                                    exudato:</label>
                                <div class="flex items-center mt-1 space-x-6">
                                    <label class="inline-flex items-center">
                                        <input type="radio" wire:model="odor_exudato" value="1"
                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                        <span class="ml-2 text-gray-700">Sim</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" wire:model="odor_exudato" value="0"
                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                        <span class="ml-2 text-gray-700">Não</span>
                                    </label>
                                </div>
                                @error('odor_exudato')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Segundo div: Sandália de cicatrização/offloading -->
                            <div class="w-1/3">
                                <label for="edema" class="block mb-2 font-medium text-gray-700">Edema:</label>
                                <div class="flex items-center mt-1 space-x-6">
                                    <label class="inline-flex items-center">
                                        <input type="radio" wire:model="edema" value="1"
                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                        <span class="ml-2 text-gray-700">Sim</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" wire:model="edema" value="0"
                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                        <span class="ml-2 text-gray-700">Não</span>
                                    </label>
                                </div>
                                @error('edema')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="dor" class="block font-medium text-gray-700">Dor:</label>
                            <input type="number" wire:model="dor" id="dor"
                                class="block w-2/5 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                placeholder="Digite a dor do paciente (1 a 10)">
                            @error('dor')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
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
                                            <label for="limpeza-{{ $limpeza->id }}" class="ml-2 text-gray-700">
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
                                <label class="block mb-2 font-medium text-gray-700">Coberturas/ Correlatos:</label>
                                <div class="grid grid-cols-2 gap-4">
                                    @foreach ($coberturasList as $cobertura)
                                        <div class="flex items-center">
                                            <input type="checkbox" wire:model="coberturas"
                                                value="{{ $cobertura->id }}" id="cobertura-{{ $cobertura->id }}"
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
                                    <label for="desbridamento_id" class="block font-medium text-gray-700">Tipos de
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
                                        class="block font-medium text-gray-700">Avaliação da
                                        Ferida:</label>
                                    <select wire:model="avaliacao_ferida_id" id="avaliacao_ferida_id"
                                        class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                        <option value="">Selecione</option>
                                        @foreach ($avaliacaoFeridas as $avaliacao)
                                            <option value="{{ $avaliacao->id }}">{{ $avaliacao->descricao }}
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
                                        <input type="radio" wire:model="aplicacao_laserterapia" value="1"
                                            class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                        <span class="ml-2 text-gray-700">Sim</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" wire:model="aplicacao_laserterapia" value="0"
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
                            class="block mt-4 text-lg font-medium text-gray-700">Avaliação do
                            Pé (Imagem)</label>

                        <div
                            class="flex items-center justify-between p-4 mt-5 transition duration-300 ease-in-out border-2 border-gray-300 rounded-lg hover:border-indigo-500 focus-within:border-indigo-500 focus-within:ring-2 focus-within:ring-indigo-300">
                            <label for="imagem_avaliacao_pe" class="flex items-center space-x-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                                <span class="ml-6 text-base font-semibold text-indigo-500">Escolher arquivo</span>
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




                    <!-- Botões de Navegação -->
                    <div class="flex justify-between mt-24">
                        <!-- Botão Voltar (ação secundária) -->
                        <button type="button" wire:click="previousStep"
                            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                            class="relative inline-flex items-center justify-center px-8 py-3 overflow-hidden text-lg font-semibold text-indigo-600 border-2 border-indigo-500 bg-white rounded-xl shadow-sm transition-all duration-300 ease-in-out hover:bg-indigo-50 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-300">
                            <span class="z-10">Voltar</span>
                        </button>

                        <!-- Botão Continuar (ação primária) -->
                        <button type="button" wire:click="nextStep"
                            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                            class="relative inline-flex items-center justify-center px-8 py-3 overflow-hidden text-lg font-semibold text-white bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-xl shadow-lg transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                            <span class="z-10">Continuar</span>
                            <div class="absolute inset-0 bg-white opacity-5 pointer-events-none"></div>
                        </button>
                    </div>

                </div>
        </div>
        @endif
</div>
<div x-show="step === 3" x-transition>
    {{-- Etapa 3: Necessidades Sociais --}}
    @if ($currentStep == 3)
        <div class="p-6 rounded-lg shadow-lg step bg-gray-50">
            <h2 class="py-4 text-3xl font-bold text-indigo-600 border-b border-indigo-300">Necessidades PscioSociais
            </h2>

            <div class="pb-5 border-b border-gray-300">
                <h2 class="py-5 text-lg font-bold">Aprendizagem - Educação a Saúde</h2>

                <div class="mb-4">
                    <label for="monitoramento_glicemia_dia" class="block font-medium text-gray-700">Frequência
                        por dia de automonitoramento da glicemia capilar:</label>
                    <input type="text" wire:model="monitoramento_glicemia_dia" id="monitoramento_glicemia_dia"
                        class="block w-4/6 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                        placeholder="Digite o número de vezes por dia que é realizado o automonitoramento da glicemia capilar">
                    @error('monitoramento_glicemia_dia')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-wrap space-x-4">
                    <!-- Primeiro par de divs -->
                    <div class="w-1/3">
                        <div class="mb-4">
                            <label for="cuidado_pes" class="block mb-2 font-medium text-gray-700">Foi
                                orientado sobre autocuidado com os pés:</label>
                            <div class="flex items-center mt-1 space-x-6">
                                <label class="inline-flex items-center">
                                    <input type="radio" wire:model="cuidado_pes" value="1"
                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                    <span class="ml-2 text-gray-700">Sim</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" wire:model="cuidado_pes" value="0"
                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                    <span class="ml-2 text-gray-700">Não</span>
                                </label>
                            </div>
                            @error('cuidado_pes')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="w-2/5">
                        <div class="mb-4">
                            <label for="uso_sapato" class="block mb-2 font-medium text-gray-700">Foi
                                orientado
                                sobre uso de sapatos adequados:</label>
                            <div class="flex items-center mt-1 space-x-6">
                                <label class="inline-flex items-center">
                                    <input type="radio" wire:model="uso_sapato" value="1"
                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                    <span class="ml-2 text-gray-700">Sim</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" wire:model="uso_sapato" value="0"
                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                    <span class="ml-2 text-gray-700">Não</span>
                                </label>
                            </div>
                            @error('uso_sapato')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- Segundo par de divs -->
                <div class="flex mb-4 space-x-4">
                    <!-- Primeiro div: Largura menor (2/5) e alinhado à esquerda -->
                    <div class="w-2/6">
                        <div class="mb-4">
                            <label for="alimentacao" class="block mb-2 font-medium text-left text-gray-700">Foi
                                orientado sobre
                                alimentação:</label>
                            <div class="flex items-center mt-1 space-x-6">
                                <label class="inline-flex items-center">
                                    <input type="radio" wire:model="alimentacao" value="1"
                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                    <span class="ml-2 text-gray-700">Sim</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" wire:model="alimentacao" value="0"
                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                    <span class="ml-2 text-gray-700">Não</span>
                                </label>
                            </div>
                            @error('alimentacao')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Segundo div: Largura maior (3/5) -->
                    <div class="w-3/5">
                        <div class="mb-4">
                            <label for="regime_terapeutico"
                                class="block mb-2 font-medium text-left text-gray-700">Compreende e executa o
                                regime terapêutico adequadamente:</label>
                            <div class="flex items-center mt-1 space-x-6">
                                <label class="inline-flex items-center">
                                    <input type="radio" wire:model="regime_terapeutico" value="1"
                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                    <span class="ml-2 text-gray-700">Sim</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" wire:model="regime_terapeutico" value="0"
                                        class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                    <span class="ml-2 text-gray-700">Não</span>
                                </label>
                            </div>
                            @error('regime_terapeutico')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>

            <div class="pb-5 border-b border-gray-300">
                <h2 class="py-5 text-lg font-bold">Recreação/ Lazer/ Criatividade</h2>

                <div class="mb-6">
                    <label class="block mb-2 font-medium text-gray-700">Recreações</label>
                    <div class="space-y-2">
                        @foreach ($recreacaosList as $recreacao)
                            <div class="flex items-center">
                                <input type="checkbox" wire:model="recreacaos" value="{{ $recreacao->id }}"
                                    id="recreacao-{{ $recreacao->id }}"
                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                <label for="recreacao-{{ $recreacao->id }}" class="ml-2 text-gray-700">
                                    {{ $recreacao->descricao }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    @error('recreacaos')
                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="pb-5 border-b border-gray-300">
                <h2 class="py-5 text-lg font-bold">Amor/ Aceitação/ Atenção/ Auto estima/ Segurança</h2>
                <div class="mb-4">
                    <label for="acompanhado" class="block mb-2 font-medium text-gray-700">Acompanhado no
                        momento da consulta:</label>
                    <div class="flex items-center mt-1 space-x-6">
                        <label class="inline-flex items-center">
                            <input type="radio" wire:model="acompanhado" value="1"
                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                            <span class="ml-2 text-gray-700">Sim</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" wire:model="acompanhado" value="0"
                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                            <span class="ml-2 text-gray-700">Não</span>
                        </label>
                    </div>
                    @error('acompanhado')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 font-medium text-gray-700">Emocional</label>
                    <div class="space-y-2">
                        @foreach ($emocionalsList as $emocional)
                            <div class="flex items-center">
                                <input type="checkbox" wire:model="emocionals" value="{{ $emocional->id }}"
                                    id="emocional-{{ $emocional->id }}"
                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                <label for="emocional-{{ $emocional->id }}" class="ml-2 text-gray-700">
                                    {{ $emocional->descricao }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    @error('emocionals')
                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="opnioes_de_si" class="block mb-2 font-medium text-gray-700">Opiniões de si
                        mesmo sobre sua lesão:</label>
                    <div class="flex items-center mt-1 space-x-6">
                        <label class="inline-flex items-center">
                            <input type="radio" wire:model="opnioes_de_si" value="1"
                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                            <span class="ml-2 text-gray-700">Positiva</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" wire:model="opnioes_de_si" value="0"
                                class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                            <span class="ml-2 text-gray-700">Negativa</span>
                        </label>
                    </div>
                    @error('opnioes_de_si')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="auxiliador" class="block font-medium text-gray-700">Quem mais auxilia no seu
                        tratamento:</label>
                    <input type="text" wire:model="auxiliador" id="auxiliador"
                        class="block w-1/2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                        placeholder="Digite quem mais auxilia no tratamento">
                    @error('auxiliador')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div>
                <h2 class="py-5 text-lg font-bold">Comunicação e Gregária</h2>
                <div class="flex mb-4 space-x-4">
                    <!-- Primeiro div -->
                    <div class="w-1/3">
                        <label for="apoio" class="block mb-2 font-medium text-gray-700">Possui apoio
                            familiar/amigos:</label>
                        <div class="flex items-center mt-1 space-x-6">
                            <label class="inline-flex items-center">
                                <input type="radio" wire:model="apoio" value="1"
                                    class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                <span class="ml-2 text-gray-700">Sim</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" wire:model="apoio" value="0"
                                    class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                <span class="ml-2 text-gray-700">Não</span>
                            </label>
                        </div>
                        @error('apoio')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Segundo div -->
                    <div class="w-1/3">
                        <label for="interacao_social" class="block mb-2 font-medium text-gray-700">Interação
                            com as pessoas:</label>
                        <div class="flex items-center mt-1 space-x-6">
                            <label class="inline-flex items-center">
                                <input type="radio" wire:model="interacao_social" value="1"
                                    class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600">
                                <span class="ml-2 text-gray-700">Sim</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" wire:model="interacao_social" value="0"
                                    class="text-indigo-600 form-radio focus:ring-indigo-500 focus:ring-opacity-50 focus:bg-indigo-600 ">
                                <span class="ml-2 text-gray-700">Não</span>
                            </label>
                        </div>
                        @error('interacao_social')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Botões de Navegação -->
            <div class="flex justify-between mt-24">
                <!-- Botão Voltar (ação secundária) -->
                <button type="button" wire:click="previousStep"
                    @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                    class="relative inline-flex items-center justify-center px-8 py-3 overflow-hidden text-lg font-semibold text-indigo-600 border-2 border-indigo-500 bg-white rounded-xl shadow-sm transition-all duration-300 ease-in-out hover:bg-indigo-50 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-300">
                    <span class="z-10">Voltar</span>
                </button>

                <!-- Botão Continuar (ação primária) -->
                <button type="button" wire:click="nextStep"
                    @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                    class="relative inline-flex items-center justify-center px-8 py-3 overflow-hidden text-lg font-semibold text-white bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-xl shadow-lg transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                    <span class="z-10">Continuar</span>
                    <div class="absolute inset-0 bg-white opacity-5 pointer-events-none"></div>
                </button>
            </div>

        </div>
    @endif
</div>
<div x-show="step === 4" x-transition>
    {{-- Etapa 3: Necessidades Espirituais / Impressões e Salvar --}}
    @if ($currentStep == 4)
        <div class="p-6 rounded-lg shadow-lg step bg-gray-50">
            <h2 class="py-4 text-3xl font-bold text-indigo-600 border-b border-indigo-300">Necessidades
                PsicoEspirituais</h2>

            {{-- RELIGIÃO --}}
            <div class="mb-6">
                <label class="block mb-2 text-lg font-semibold text-gray-800">Tem Religião?</label>

                <div x-data="{ selecionado: @entangle('e_religioso') }" x-init="selecionado = @js($e_religioso)" class="flex space-x-4">
                    <button type="button" @click="selecionado = 'sim'; $wire.set('e_religioso', 'sim')"
                        :class="selecionado === 'sim'
                            ?
                            'bg-cyan-600 text-white border-cyan-600' :
                            'bg-white text-gray-700 border-gray-300 hover:bg-cyan-50'"
                        class="px-6 py-2 text-sm font-medium border rounded-lg shadow-sm focus:outline-none transition">
                        Sim
                    </button>

                    <button type="button" @click="selecionado = 'nao'; $wire.set('e_religioso', 'nao')"
                        :class="selecionado === 'nao'
                            ?
                            'bg-red-600 text-white border-red-600' :
                            'bg-white text-gray-700 border-gray-300 hover:bg-red-50'"
                        class="px-6 py-2 text-sm font-medium border rounded-lg shadow-sm focus:outline-none transition">
                        Não
                    </button>
                </div>
            </div>

            {{-- Campo de religião --}}

            @if ($e_religioso === 'sim')
                <div class="mt-2 mb-6">
                    <label for="religiao" class="block font-medium text-gray-700">Religião/Espiritualidade:</label>
                    <input type="text" wire:model="religiao" id="religiao"
                        class="block w-full px-6 py-3 mt-1 border rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50
        {{ $religiao ? 'border-green-500 bg-green-50' : 'border-gray-300' }}"
                        placeholder="Digite sua religião/espiritualidade">
                    @error('religiao')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            @endif

            {{-- UNIDADE DE SAÚDE --}}
            <h2 class="py-4 mt-6 text-3xl font-bold text-indigo-600">Unidade de Saúde</h2>

            {{-- Mostra a unidade selecionada --}}
            @if ($unidade)
                <div class="p-4 mb-4 border-l-4 border-indigo-600 bg-indigo-50 rounded">
                    <p class="text-lg font-semibold text-indigo-800">Unidade Selecionada:</p>
                    <p class="text-gray-700"><strong>Nome:</strong> {{ $unidade->nome }}</p>
                    <p class="text-gray-700"><strong>Rua:</strong> {{ $unidade->endereco->rua }}</p>
                    <p class="text-gray-700"><strong>Bairro:</strong> {{ $unidade->endereco->bairro }}</p>
                    <p class="text-gray-700"><strong>Cidade:</strong> {{ $unidade->endereco->cidade }}</p>
                    <p class="text-gray-700"><strong>UF:</strong> {{ $unidade->endereco->uf }}</p>
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
                                <small class="text-gray-500">Rua: {{ $unidade->endereco->rua }}</small>
                                <small class="text-gray-500">Bairro: {{ $unidade->endereco->bairro }}</small>
                                <small class="text-gray-500">Cidade: {{ $unidade->endereco->cidade }}</small>
                                <small class="text-gray-500">UF: {{ $unidade->endereco->uf }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="my-4">
                <label for="impressoes" class="block mb-2 text-lg font-medium text-gray-700">Impressões do
                    enfermeiro:</label>
                <textarea wire:model="impressoes" id="impressoes"
                    class="block w-full px-6 py-4 mt-1 placeholder-gray-400 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                    placeholder="Digite suas impressões sobre a realização do questionário" rows="6"></textarea>
                @error('impressoes')
                    <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>




        <!-- Botões de Navegação e Salvar -->
        <div class="flex justify-between mt-4">
            <!-- Botão Voltar (ação secundária) -->
            <button type="button" wire:click="previousStep"
                @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                class="relative inline-flex items-center justify-center px-8 py-3 overflow-hidden text-lg font-semibold text-indigo-600 border-2 border-indigo-500 bg-white rounded-xl shadow-sm transition-all duration-300 ease-in-out hover:bg-indigo-50 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-300">
                <span class="z-10">Voltar</span>
            </button>

            <!-- Botão Salvar (ação primária) -->
            <button type="submit" wire:click="submitForm"
                class="relative inline-flex items-center justify-center px-8 py-3 overflow-hidden text-lg font-semibold text-white bg-gradient-to-r from-teal-500 to-teal-700 rounded-xl shadow-lg transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-teal-300">
                <span class="z-10">Salvar</span>
                <div class="absolute inset-0 bg-white opacity-5 pointer-events-none"></div>
            </button>
        </div>

</div>
@endif
</div>
</form>

@if (session()->has('message'))
    <div class="mt-4 alert alert-success">
        {{ session('message') }}
    </div>
@endif
</div>
