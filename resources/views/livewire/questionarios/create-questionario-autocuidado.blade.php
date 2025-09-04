<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
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

    <div class="relative z-10 px-6 py-8">
        <!-- Header -->
        <div class="max-w-6xl mx-auto mb-8">
            <div class="p-6 border shadow-lg backdrop-blur-sm bg-white/90 rounded-3xl border-white/20">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold text-indigo-900">Questionário de Autocuidado no Diabetes</h1>
                        <p class="font-medium text-indigo-600">Avaliação de cuidados diários no diabetes</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-gray-600">Preencha as questões abaixo</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-6xl mx-auto">
            <div class="p-8 border shadow-lg backdrop-blur-sm bg-white/90 rounded-3xl border-white/20">

                <!-- Seção Alimentação Geral -->
                <div class="mb-10">
                    <h2 class="mb-2 text-2xl font-bold text-indigo-900">Alimentação Geral</h2>
                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700"></div>

                    <!-- Pergunta 1: Dieta saudável -->
                    <div class="mb-8">
                        <label for="alimenatacao_g_dieta" class="block mb-3 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS seguiu uma dieta saudável?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="dieta" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('dieta')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 2: Orientação alimentar -->
                    <div class="mb-8">
                        <label for="alimenatacao_g_orientacao" class="block mb-3 text-lg font-semibold text-gray-800">
                            Durante o último mês, QUANTOS DIAS POR SEMANA, em média, seguiu a orientação alimentar dada
                            por um profissional de saúde (médico, enfermeiro, nutricionista)?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="orientacao" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('orientacao')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Seção Alimentação Específica -->
                <div class="mb-10">
                    <h2 class="mb-2 text-2xl font-bold text-indigo-900">Alimentação Específica</h2>
                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700"></div>

                    <!-- Pergunta 1: Frutas -->
                    <div class="mb-8">
                        <label for="alimenatacao_e_frutas" class="block mb-3 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS comeu cinco ou mais porções de frutas e/ou vegetais?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="frutas" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('frutas')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 2: Gorduras -->
                    <div class="mb-8">
                        <label for="alimenatacao_e_gordura" class="block mb-3 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS comeu alimentos ricos em gordura, como carnes vermelhas ou
                            alimentos com leite integral ou derivados?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="gorduras" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('gorduras')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 3: Doces -->
                    <div class="mb-8">
                        <label for="alimenatacao_e_doces" class="block mb-3 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS comeu doces?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="doces" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('doces')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Seção Atividade Física -->
                <div class="mb-10">
                    <h2 class="mb-2 text-2xl font-bold text-indigo-900">Atividade Física</h2>
                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700"></div>

                    <!-- Pergunta 1: Realizou atividade física -->
                    <div class="mb-8">
                        <label for="atividade_fisica_realizou" class="block mb-3 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS realizou atividade física durante pelo menos 30 minutos
                            (minutos totais de atividade contínua, inclusive andar)?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="realizou" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('realizou')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 2: Exercício específico -->
                    <div class="mb-8">
                        <label for="atividade_fisica_especifico" class="block mb-3 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS praticou algum tipo de exercício físico específico (nadar,
                            caminhar, andar de bicicleta), sem incluir suas atividades em casa ou em seu trabalho?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="especifico" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('especifico')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- Seção Monitoramento da Glicemia -->
                <div class="mb-10">
                    <h2 class="mb-2 text-2xl font-bold text-indigo-900">Monitoramento da Glicemia</h2>
                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700"></div>

                    <!-- Pergunta 1: Avaliou o açúcar no sangue -->
                    <div class="mb-8">
                        <label for="monitoramento_glicemia" class="block mb-3 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS avaliou o açúcar no sangue?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="avaliou" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('avaliou')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 2: Avaliou o açúcar no sangue conforme recomendado -->
                    <div class="mb-8">
                        <label for="monitoramento_recomendado" class="block mb-3 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS avaliou o açúcar no sangue o número de vezes recomendado
                            pelo médico ou enfermeiro?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="recomendado" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('recomendado')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Seção Cuidado com os Pés -->
                <div class="mb-10">
                    <h2 class="mb-2 text-2xl font-bold text-indigo-900">Cuidado com os Pés</h2>
                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700"></div>

                    <!-- Pergunta 1: Examinou os pés -->
                    <div class="mb-8">
                        <label for="cuidado_pes_pes" class="block mb-3 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS examinou os seus pés?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="pes" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('pes')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 2: Examinou dentro dos sapatos -->
                    <div class="mb-8">
                        <label for="cuidado_pes_sapato" class="block mb-3 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS examinou dentro dos sapatos antes de calçá-los?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="sapatos" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('sapatos')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 3: Secou os dedos -->
                    <div class="mb-8">
                        <label for="cuidado_pes_dedos" class="block mb-3 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS secou os espaços entre os dedos dos pés depois de lavá-los?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="dedos" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('dedos')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Seção Medicação -->
                <div class="mb-10">
                    <h2 class="mb-2 text-2xl font-bold text-indigo-900">Medicação</h2>
                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700"></div>

                    <!-- Pergunta 1: Medicamentos -->
                    <div class="mb-8">
                        <label for="medicacao_medicamentos" class="block mb-3 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS tomou seus medicamentos do diabetes, conforme foi
                            recomendado?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="medicamentos" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('medicamentos')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 2: Injeções -->
                    <div class="mb-8">
                        <label for="medicacao_injecoes" class="block mb-3 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS tomou suas injeções de insulina, conforme foi recomendado?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="injecoes" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('injecoes')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 3: Comprimidos -->
                    <div class="mb-8">
                        <label for="medicacao_comprimidos" class="block mb-3 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS tomou o número indicado de comprimidos do diabetes?
                        </label>
                        <div class="flex gap-6">
                            @for ($i = 0; $i <= 7; $i++)
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" wire:model="comprimidos" value="{{ $i }}"
                                        class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                    <span class="ml-3 font-medium text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('comprimidos')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Seção Tabagismo -->
                <div class="mb-10">
                    <h2 class="mb-2 text-2xl font-bold text-indigo-900">Tabagismo</h2>
                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700"></div>

                    <!-- Pergunta 1: Fumou nos últimos sete dias -->
                    <div class="mb-8">
                        <label for="tabagismo_fumou" class="block mb-3 text-lg font-semibold text-gray-800">
                            Você fumou um cigarro − ainda que só uma tragada − durante os últimos sete dias?
                        </label>
                        <div class="flex gap-6">
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" wire:model="fumou" value="1"
                                    class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                <span class="ml-3 font-medium text-gray-700">Sim</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" wire:model="fumou" value="0"
                                    class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                                <span class="ml-3 font-medium text-gray-700">Não</span>
                            </label>
                        </div>
                        @error('fumou')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 2: Número de cigarros -->
                    <div class="mb-8">
                        <label for="tabagismo_num_cigarros" class="block mb-3 text-lg font-semibold text-gray-800">
                            Se sim, quantos cigarros fuma, habitualmente, num dia?
                        </label>
                        <input type="number" wire:model="num_cigarros"
                            class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 md:w-2/3 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
                            min="0">
                        @error('num_cigarros')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 3: Quando fumou o último cigarro -->
                    <div class="p-6 border border-gray-100 bg-gray-50 rounded-2xl">
                        <label for="tabagismo_ultimo_fumo" class="block mb-3 text-lg font-semibold text-gray-800">
                            Quando fumou o seu último cigarro?
                        </label>
                        <select wire:model="quando_fumou" id="tabagismo_ultimo_fumo"
                            class="w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
                            <option value="">Selecione</option>
                            @foreach ($dataFumos as $dataFumo)
                                <option value="{{ $dataFumo->id }}">{{ $dataFumo->descricao }}</option>
                            @endforeach
                        </select>
                        @error('quando_fumou')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- Botão de Envio -->
                <div class="flex justify-end mt-8">
                    <button type="button" wire:click="SalvarCuidado"
                        class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-200">
                        Enviar Questionário
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
