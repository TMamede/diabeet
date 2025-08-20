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
                        <h1 class="text-3xl font-bold text-indigo-900">Questionário de Qualidade de Vida</h1>
                        <p class="font-medium text-indigo-600">Avaliação do bem-estar relacionado ao Diabetes</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-gray-600">Preencha as questões abaixo</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulário de Perguntas -->
        <div class="max-w-6xl mx-auto">
            <div class="p-8 border shadow-lg backdrop-blur-sm bg-white/90 rounded-3xl border-white/20">

                <!-- Seção de Satisfação -->
                <div class="mb-10">
                    <h2 class="mb-2 text-2xl font-bold text-indigo-900">Satisfação</h2>
                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700"></div>

                    <!-- Pergunta 1: Satisfação com a dieta -->
                    <div class="my-8">
                        <label for="satisfacao_dieta" class="block mb-3 text-lg font-semibold text-gray-800">
                            Você está satisfeito(a) com a flexibilidade que você tem na sua dieta?
                        </label>
                        <div class="flex gap-6">
                            <input type="radio" wire:model="flexibilidade" value="1"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Muito Satisfeito</label>
                            <input type="radio" wire:model="flexibilidade" value="2"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Bastante Satisfeito</label>
                            <input type="radio" wire:model="flexibilidade" value="3"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Médio Satisfeito</label>
                            <input type="radio" wire:model="flexibilidade" value="4"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Pouco Satisfeito</label>
                            <input type="radio" wire:model="flexibilidade" value="5"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Nada Satisfeito</label>
                        </div>
                        @error('flexibilidade')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 2: Satisfação com a vida sexual -->
                    <div class="mb-8">
                        <label for="satisfacao_vida_sexual" class="block mb-3 text-lg font-semibold text-gray-800">
                            Você está satisfeito(a) com sua vida sexual?
                        </label>
                        <div class="flex gap-6">
                            <input type="radio" wire:model="vida_sexual" value="1"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Muito Satisfeito</label>
                            <input type="radio" wire:model="vida_sexual" value="2"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Bastante Satisfeito</label>
                            <input type="radio" wire:model="vida_sexual" value="3"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Médio Satisfeito</label>
                            <input type="radio" wire:model="vida_sexual" value="4"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Pouco Satisfeito</label>
                            <input type="radio" wire:model="vida_sexual" value="5"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Nada Satisfeito</label>
                        </div>
                        @error('vida_sexual')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Seção de Impacto -->
                <div class="mb-10">
                    <h2 class="mb-2 text-2xl font-bold text-indigo-900">Impacto</h2>
                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700"></div>

                    <!-- Pergunta 1: Impacto no exercício físico -->
                    <div class="my-8">
                        <label for="impacto_exercicio" class="block mb-3 text-lg font-semibold text-gray-800">
                            Com que frequência sua diabetes interfere em seus exercícios físicos?
                        </label>
                        <div class="flex gap-6">
                            <input type="radio" wire:model="exercicio" value="1"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Nunca</label>
                            <input type="radio" wire:model="exercicio" value="2"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Quase Nunca</label>
                            <input type="radio" wire:model="exercicio" value="3"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Às vezes</label>
                            <input type="radio" wire:model="exercicio" value="4"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Quase Sempre</label>
                            <input type="radio" wire:model="exercicio" value="5"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Sempre</label>
                        </div>
                        @error('exercicio')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 2: Incômodo por diabetes -->
                    <div class="mb-8">
                        <label for="impacto_incomodo" class="block mb-3 text-lg font-semibold text-gray-800">
                            Com que frequência você se sente incomodado por ter diabetes?
                        </label>
                        <div class="flex gap-6">
                            <input type="radio" wire:model="incomodo" value="1"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Nunca</label>
                            <input type="radio" wire:model="incomodo" value="2"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Quase Nunca</label>
                            <input type="radio" wire:model="incomodo" value="3"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Às vezes</label>
                            <input type="radio" wire:model="incomodo" value="4"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Quase Sempre</label>
                            <input type="radio" wire:model="incomodo" value="5"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Sempre</label>
                        </div>
                        @error('incomodo')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 3: Comer algo que não deveria -->
                    <div class="mb-8">
                        <label for="impacto_comer" class="block mb-3 text-lg font-semibold text-gray-800">
                            Com que frequência você come algo que não deveria ao invés de dizer que tem diabetes?
                        </label>
                        <div class="flex gap-6">
                            <input type="radio" wire:model="comer" value="1"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Nunca</label>
                            <input type="radio" wire:model="comer" value="2"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Quase Nunca</label>
                            <input type="radio" wire:model="comer" value="3"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Às vezes</label>
                            <input type="radio" wire:model="comer" value="4"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Quase Sempre</label>
                            <input type="radio" wire:model="comer" value="5"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Sempre</label>
                        </div>
                        @error('comer')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <!-- Seção de Preocupações: Social/Vocacional -->
                <div class="mb-10">
                    <h2 class="mb-2 text-2xl font-bold text-indigo-900">Preocupações: Social / Vocacional</h2>
                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700"></div>

                    <!-- Pergunta 1: Preocupação com filhos -->
                    <div class="my-8">
                        <label for="preocupacao_filhos" class="block mb-3 text-lg font-semibold text-gray-800">
                            Com que frequência você se preocupa se irá ter filhos?
                        </label>
                        <div class="flex gap-6">
                            <input type="radio" wire:model="ter_filhos" value="1"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Nunca</label>
                            <input type="radio" wire:model="ter_filhos" value="2"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Quase Nunca</label>
                            <input type="radio" wire:model="ter_filhos" value="3"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Às vezes</label>
                            <input type="radio" wire:model="ter_filhos" value="4"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Quase Sempre</label>
                            <input type="radio" wire:model="ter_filhos" value="5"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Sempre</label>
                        </div>
                        @error('ter_filhos')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Seção de Preocupações Relacionadas à Diabetes -->
                <div class="mb-10">
                    <h2 class="mb-2 text-2xl font-bold text-indigo-900">Preocupações Relacionadas à Diabetes</h2>
                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-700"></div>

                    <!-- Pergunta 1: Preocupação com desmaios -->
                    <div class="my-8">
                        <label for="preocupacao_desmaios" class="block mb-3 text-lg font-semibold text-gray-800">
                            Com que frequência você se preocupa se virá a desmaiar?
                        </label>
                        <div class="flex gap-6">
                            <input type="radio" wire:model="diabete" value="1"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Nunca</label>
                            <input type="radio" wire:model="diabete" value="2"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Quase Nunca</label>
                            <input type="radio" wire:model="diabete" value="3"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Às vezes</label>
                            <input type="radio" wire:model="diabete" value="4"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Quase Sempre</label>
                            <input type="radio" wire:model="diabete" value="5"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Sempre</label>
                        </div>
                        @error('diabete')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pergunta 2: Preocupação com complicações devido à diabetes -->
                    <div class="mb-8">
                        <label for="preocupacao_complicacoes" class="block mb-3 text-lg font-semibold text-gray-800">
                            Com que frequência você se preocupa se terá complicações devidas a sua diabetes?
                        </label>
                        <div class="flex gap-6">
                            <input type="radio" wire:model="complicacoes" value="1"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Nunca</label>
                            <input type="radio" wire:model="complicacoes" value="2"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Quase Nunca</label>
                            <input type="radio" wire:model="complicacoes" value="3"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Às vezes</label>
                            <input type="radio" wire:model="complicacoes" value="4"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Quase Sempre</label>
                            <input type="radio" wire:model="complicacoes" value="5"
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-3">Sempre</label>
                        </div>
                        @error('complicacoes')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Botão de Envio -->
                <div class="flex justify-end mt-8">
                    <button type="button" wire:click="SalvarQualidade"
                        class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-200">
                        Enviar Questionário
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
