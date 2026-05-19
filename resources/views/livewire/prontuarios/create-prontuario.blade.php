<div class="relative flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
    <!-- Elementos decorativos simplificados -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute bg-indigo-200 rounded-full top-10 left-10 w-72 h-72 opacity-20 blur-xl"></div>
        <div class="absolute bg-purple-200 rounded-full top-20 right-10 w-80 h-80 opacity-15 blur-xl"></div>
        <div class="absolute w-64 h-64 bg-pink-200 rounded-full bottom-10 left-20 opacity-10 blur-xl"></div>
    </div>

    <div class="relative z-10 flex-grow px-6 py-8">
        <div class="max-w-6xl mx-auto">
            <!-- Header Section -->
            <div class="mb-12 text-center">
                <div class="inline-block p-6 mb-6 shadow-md bg-white/70 rounded-2xl">
                    <h1 class="mb-4 text-4xl font-bold text-indigo-900 md:text-5xl">
                        Diagnósticos de <span class="text-indigo-600">Enfermagem</span>
                    </h1>
                    <div class="w-32 h-1 mx-auto bg-indigo-600 rounded-full"></div>
                </div>
                <p class="max-w-2xl mx-auto text-lg text-gray-600">
                    Selecione os diagnósticos e intervenções apropriados com base na avaliação do paciente
                </p>
            </div>

            <!-- Mensagens de sucesso/erro -->
            @if (session()->has('success'))
                <div class="p-4 mb-6 text-green-800 bg-green-100 border border-green-300 shadow-sm rounded-xl">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            @if (session()->has('error'))
                <div class="p-4 mb-6 text-red-800 bg-red-100 border border-red-300 shadow-sm rounded-xl">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ session('error') }}
                    </div>
                </div>
            @endif

            <!-- Lista de Necessidades Humanas Básicas -->
            @foreach ($origens as $origem)
                <div class="p-8 mb-8 border shadow-md bg-white/80 border-white/20 rounded-xl hover:shadow-lg">
                    <!-- Header da Necessidade -->
                    <div
                        class="flex items-center justify-between p-6 mb-6 bg-gradient-to-r from-indigo-100 via-purple-100 to-pink-100 rounded-xl">
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center justify-center w-12 h-12 bg-indigo-600 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-gray-800">Necessidade Humana Básica</h2>
                                <p class="text-lg font-semibold text-indigo-700">{{ $origem['descricao'] }}</p>
                            </div>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" wire:click="toggleOrigem({{ $origem['id'] }})"
                                @if (in_array($origem['id'], $origensSelecionadas)) checked @endif class="sr-only peer">
                            <div
                                class="w-12 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:rounded-full after:h-5 after:w-5 peer-checked:bg-indigo-600">
                            </div>
                        </label>
                    </div>

                    <!-- Diagnósticos -->
                    @foreach ($origem['diagnosticos_unicos'] as $diagnostico)
                        <div x-data="{ open: false }" class="mb-6">
                            <!-- Botão do Diagnóstico -->
                            <button @click="open = !open"
                                class="flex items-center justify-between w-full px-6 py-4 text-lg font-semibold text-indigo-800 border border-indigo-200 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-300">
                                <span class="flex items-center">
                                    <div class="w-3 h-3 mr-4 bg-indigo-500 rounded-full"></div>
                                    {{ $diagnostico['descricao'] }}
                                </span>
                                <svg :class="{ 'rotate-180': open }" class="w-5 h-5 text-indigo-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <!-- Conteúdo expandido -->
                            <div x-show="open" x-collapse
                                class="p-6 mt-4 border border-gray-200 bg-gray-50 rounded-xl">
                                <!-- Checkbox do Diagnóstico -->
                                <div
                                    class="flex items-center justify-between p-4 mb-6 bg-white border border-gray-100 rounded-lg">
                                    <p class="text-lg font-bold text-gray-700">{{ $diagnostico['descricao'] }}</p>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" wire:click="toggleDiagnostico({{ $diagnostico['id'] }})"
                                            @if (in_array($diagnostico['id'], $diagnosticosSelecionados)) checked @endif class="sr-only peer">
                                        <div
                                            class="w-11 h-5 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:rounded-full after:h-4 after:w-4 peer-checked:bg-indigo-600">
                                        </div>
                                    </label>
                                </div>

                                <!-- Intervenções -->
                                <div class="mb-6">
                                    <h4 class="flex items-center mb-4 text-lg font-bold text-purple-700">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Intervenções de Enfermagem
                                    </h4>

                                    <div class="space-y-3">
                                        @foreach ($diagnostico['intervencaos'] as $intervencao)
                                            <div
                                                class="flex items-center justify-between p-4 bg-white border border-gray-200 rounded-lg hover:border-purple-300">
                                                <div class="flex items-center">
                                                    <div class="w-2 h-2 mr-3 bg-purple-500 rounded-full"></div>
                                                    <p class="text-gray-700">{{ $intervencao['descricao'] }}</p>
                                                </div>
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox"
                                                        wire:click="toggleIntervencao({{ $intervencao['id'] }})"
                                                        @if (in_array($intervencao['id'], $intervencoesSelecionadas)) checked @endif
                                                        class="sr-only peer">
                                                    <div
                                                        class="w-10 h-5 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:rounded-full after:h-4 after:w-4 peer-checked:bg-purple-600">
                                                    </div>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Indicadores Clínicos -->
                                <div class="p-6 border border-pink-200 bg-pink-50 rounded-xl">
                                    <h4 class="flex items-center mb-4 text-lg font-bold text-pink-700">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        Indicadores Clínicos Identificados
                                    </h4>
                                    <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                                        @foreach ($origem['motivos'] as $motivoCheck)
                                            @if (collect($motivoCheck['diagnosticos'])->pluck('id')->contains($diagnostico['id']))
                                                <div
                                                    class="flex items-center p-3 bg-white border border-pink-100 rounded-lg">
                                                    <div class="w-2 h-2 mr-3 bg-pink-500 rounded-full"></div>
                                                    <span
                                                        class="text-sm text-gray-700">{{ $motivoCheck['descricao'] }}</span>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

            <!-- Diagnósticos Manuais -->
            <div class="p-8 mt-12 border shadow-md bg-white/80 border-white/20 rounded-xl hover:shadow-lg">

                <!-- Header da Seção -->
                <div
                    class="flex items-center justify-between p-6 mb-6 bg-gradient-to-r from-indigo-100 via-purple-100 to-pink-100 rounded-xl">
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center justify-center w-12 h-12 bg-indigo-600 rounded-xl">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">Diagnósticos Adicionais</h2>
                            <p class="text-sm font-medium text-indigo-600">Adicionados manualmente pelo enfermeiro</p>
                        </div>
                    </div>
                    <button wire:click="adicionarDiagnosticoExtra"
                        class="flex items-center px-5 py-2.5 text-sm font-semibold text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 shadow-sm transition-colors duration-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v16m8-8H4" />
                        </svg>
                        Novo Diagnóstico
                    </button>
                </div>

                @foreach ($diagnosticosExtras as $index => $diagnostico)
                    <div class="mb-6">
                        <div class="p-6 border border-gray-200 bg-gray-50 rounded-xl">

                            <!-- Campo Diagnóstico -->
                            <div
                                class="flex items-center justify-between p-4 mb-6 bg-white border border-gray-100 rounded-lg">
                                <div class="flex items-center flex-1">
                                    <div class="w-3 h-3 mr-4 bg-indigo-500 rounded-full flex-shrink-0"></div>
                                    <input type="text"
                                        wire:model="diagnosticosExtras.{{ $index }}.descricao"
                                        placeholder="Digite o diagnóstico de enfermagem"
                                        class="rounded-lg w-full p-2 text-lg font-semibold text-gray-700 bg-transparent border-b-2 border-gray-200 focus:border-indigo-400 focus:outline-none placeholder-gray-400 transition-colors duration-200">
                                </div>
                            </div>

                            <!-- Intervenções -->
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <h4 class="flex items-center text-lg font-bold text-purple-700">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Intervenções de Enfermagem
                                    </h4>
                                    <button wire:click="adicionarIntervencaoExtra({{ $index }})"
                                        class="flex items-center px-3 py-1.5 text-sm font-semibold text-white bg-purple-600 rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-300 shadow-sm transition-colors duration-200">
                                        <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4" />
                                        </svg>
                                        Nova Intervenção
                                    </button>
                                </div>

                                @if (!empty($diagnostico['intervencoes']))
                                    <div class="space-y-3">
                                        @foreach ($diagnostico['intervencoes'] as $i => $intervencao)
                                            <div
                                                class="flex items-center justify-between p-4 bg-white border border-gray-200 rounded-lg hover:border-purple-300 transition-colors duration-200">
                                                <div class="flex items-center flex-1">
                                                    <div class="w-2 h-2 mr-3 bg-purple-500 rounded-full flex-shrink-0">
                                                    </div>
                                                    <input type="text"
                                                        wire:model="diagnosticosExtras.{{ $index }}.intervencoes.{{ $i }}.descricao"
                                                        placeholder="Digite a intervenção de enfermagem"
                                                        class="w-full p-1.5 text-gray-700 bg-transparent rounded-lg border-b-2 border-gray-200 focus:border-purple-400 focus:outline-none placeholder-gray-400 transition-colors duration-200">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div
                                        class="flex items-center justify-center p-6 border-2 border-dashed border-purple-200 rounded-lg bg-white">
                                        <p class="text-sm text-gray-400">Nenhuma intervenção adicionada. Clique em
                                            "Nova Intervenção" para começar.</p>
                                    </div>
                                @endif
                            </div>

                        </div>
                    </div>
                @endforeach

                @if (empty($diagnosticosExtras))
                    <div
                        class="flex flex-col items-center justify-center p-10 border-2 border-dashed border-indigo-200 rounded-xl bg-indigo-50/50">
                        <div class="flex items-center justify-center w-14 h-14 mb-4 bg-indigo-100 rounded-xl">
                            <svg class="w-7 h-7 text-indigo-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-500">Nenhum diagnóstico adicional</p>
                        <p class="mt-1 text-sm text-gray-400">Clique em "Novo Diagnóstico" para adicionar um
                            diagnóstico manualmente</p>
                    </div>
                @endif

            </div>

            <!-- Botão de Finalizar -->
            <div class="flex justify-center mt-12">
                <button wire:click="finalizarProntuario"
                    class="px-12 py-4 text-lg font-semibold text-white shadow-lg bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300">
                    <span class="flex items-center justify-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Finalizar Prescrição
                    </span>
                </button>
            </div>
        </div>
    </div>

</div>
