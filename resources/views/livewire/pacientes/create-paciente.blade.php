<div x-data="{ step: @entangle('currentStep') }">
    <form wire:submit.prevent="submitForm">
        <div x-show="step === 1" x-transition>
            {{-- Etapa 1: Dados Sociodemográficos --}}
            @if ($currentStep == 1)
                <div class="p-6 bg-white rounded-lg shadow-md step">
                    <h2 class="py-5 text-xl font-bold">Dados Sociodemográficos</h2>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
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
                            <label for="data_nasc" class="block font-medium text-gray-700">Data de Nascimento</label>
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
                            <label for="estado_civil_id" class="block font-medium text-gray-700">Estado Civil</label>
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
                            <label for="cep" class="block font-medium text-gray-700">CEP</label>
                            <input type="text" wire:model="cep" id="cep"
                                class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                placeholder="Digite o CEP">
                            @error('cep')
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
                            <label for="renda_familiar" class="block font-medium text-gray-700">Renda Familiar</label>
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

                        <div class="mb-4">
                            <label for="num_pss_casa" class="block font-medium text-gray-700">Número de Pessoas em
                                Casa</label>
                            <input type="number" wire:model="num_pss_casa" id="num_pss_casa"
                                class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                placeholder="Digite o número de pessoas morando em casa">
                            @error('num_pss_casa')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Adicione os demais campos da etapa 1 aqui -->

                        <div class="flex justify-center w-full py-3 mt-4">
                            <button type="button" wire:click="nextStep"
                                class="px-2 py-2 text-white transition duration-150 ease-in-out bg-indigo-500 rounded-lg shadow hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-50">
                                Continuar
                            </button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div x-show="step === 2" x-transition>
            {{-- Etapa 2: Histórico do Paciente --}}
            @if ($currentStep == 2)
                <div class="step">
                    <h2 class="py-5 text-xl font-bold">Histórico do Paciente</h2>

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
                        <label for="cirurgia_motivo" class="block mb-2 font-medium text-gray-700">Já realizaou alguma
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
                            <button type="button" wire:click="$set('realizou_amputacao', 'sim')"
                                class="px-4 py-2 text-black rounded bg-cyan-100 focus:outline-none hover:bg-cyan-200">
                                Sim
                            </button>
                            <button type="button" wire:click="$set('realizou_amputacao', 'nao')"
                                class="px-4 py-2 text-black bg-red-100 rounded focus:outline-none hover:bg-red-200">
                                Não
                            </button>
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
                            <button type="button" wire:click="$set('tabagista', 'sim')"
                                class="px-4 py-2 text-black rounded bg-cyan-100 focus:outline-none hover:bg-cyan-200">
                                Sim
                            </button>
                            <button type="button" wire:click="$set('tabagista', 'nao')"
                                class="px-4 py-2 text-black bg-red-100 rounded focus:outline-none hover:bg-red-200">
                                Não
                            </button>
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
                            <button type="button" wire:click="$set('etilista', 'sim')"
                                class="px-4 py-2 text-black rounded bg-cyan-100 focus:outline-none hover:bg-cyan-200">
                                Sim
                            </button>
                            <button type="button" wire:click="$set('etilista', 'nao')"
                                class="px-4 py-2 text-black bg-red-100 rounded focus:outline-none hover:bg-red-200">
                                Não
                            </button>
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
                    <div class="flex justify-center w-full mt-8">
                        <button type="button" wire:click="previousStep"
                            class="px-4 py-2 text-white transition duration-150 ease-in-out bg-indigo-500 rounded-lg shadow hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                            Voltar
                        </button>
                        <button type="button" wire:click="nextStep"
                            class="px-4 py-2 ml-4 text-white transition duration-150 ease-in-out bg-indigo-500 rounded-lg shadow hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                            Continuar
                        </button>
                    </div>
                </div>
            @endif
        </div>
        <div x-show="step === 3" x-transition>
            {{-- Etapa 3: Medicamentos --}}
            @if ($currentStep == 3)
                <div class="step">
                    <h2 class="py-5 text-xl font-bold text-center">Medicamentos</h2>

                    @foreach ($medicamentos as $index => $medicamento)
                        <div class= "flex justify-center">
                            <div class="w-5/6 p-5 mb-6 bg-white border border-gray-200 rounded-lg shadow-sm">
                                <h3 class="mb-3 text-lg font-semibold">Medicamento {{ $index + 1 }}</h3>

                                <div class="mb-4">
                                    <label for="medicamentos.{{ $index }}.nome_generico"
                                        class="block text-sm font-medium text-gray-700">Nome Genérico</label>
                                    <input type="text" wire:model="medicamentos.{{ $index }}.nome_generico"
                                        id="medicamentos.{{ $index }}.nome_generico"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm form-input focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    @error('medicamentos.' . $index . '.nome_generico')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="medicamentos.{{ $index }}.via"
                                        class="block text-sm font-medium text-gray-700">Via</label>
                                    <input type="text" wire:model="medicamentos.{{ $index }}.via"
                                        id="medicamentos.{{ $index }}.via"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm form-input focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    @error('medicamentos.' . $index . '.via')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="medicamentos.{{ $index }}.dose"
                                        class="block text-sm font-medium text-gray-700">Dose</label>
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
                    <div class="flex justify-center w-full mt-8">
                        <button type="button" wire:click="previousStep"
                            class="px-4 py-2 text-white transition duration-150 ease-in-out bg-indigo-500 rounded-lg shadow hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                            Voltar
                        </button>
                        <button type="submit"
                            class="px-4 py-2 ml-4 font-semibold text-white bg-teal-500 rounded-lg shadow-sm hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
                            Salvar
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
