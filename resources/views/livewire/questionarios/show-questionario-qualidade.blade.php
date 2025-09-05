<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100">
    <!-- BG decor -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute rounded-full bg-blue-200/30 top-20 left-10 w-72 h-72 mix-blend-multiply filter blur-2xl animate-pulse"></div>
        <div class="absolute delay-1000 rounded-full bg-indigo-200/20 top-40 right-16 w-80 h-80 mix-blend-multiply filter blur-2xl animate-pulse"></div>
        <div class="absolute w-64 h-64 delay-500 rounded-full bg-purple-200/25 bottom-20 left-1/4 mix-blend-multiply filter blur-2xl animate-pulse"></div>
    </div>

    <div class="relative z-10 px-4 py-12">
        <!-- Header -->
        <div class="max-w-4xl mx-auto mb-12">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 mb-6 rounded-full shadow-lg bg-gradient-to-r from-blue-500 to-indigo-600">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h1 class="mb-4 text-4xl font-bold text-gray-800">Questionário de Qualidade de Vida</h1>
                <p class="mb-2 text-xl text-gray-600">Avaliação de bem-estar relacionado ao Diabetes</p>
                <p class="text-sm text-gray-500">Exibição das respostas (somente leitura)</p>
            </div>
        </div>

        @php
            // Mapas baseados nas legendas do seu código
            $mapSatisfacao = [
                1 => 'Muito Satisfeito',
                2 => 'Bastante Satisfeito',
                3 => 'Médio Satisfeito',
                4 => 'Pouco Satisfeito',
                5 => 'Nada Satisfeito',
            ];

            $mapFrequencia = [
                1 => 'Nunca',
                2 => 'Quase Nunca',
                3 => 'Às vezes',
                4 => 'Quase Sempre',
                5 => 'Sempre',
            ];

            // helper para imprimir "N - Rótulo" com fallback seguro
            $fmt = function($valor, $map) {
                if (is_null($valor) || $valor === '') return null;
                $num = (int) $valor;
                return $num . ' - ' . ($map[$num] ?? '');
            };
        @endphp

        <!-- Main Content -->
        <div class="max-w-4xl mx-auto space-y-8">

            <!-- Seção Satisfação -->
            @if(!is_null($flexibilidade) || !is_null($vida_sexual))
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-emerald-500 to-teal-600">
                    <h2 class="text-2xl font-bold text-white">Satisfação</h2>
                </div>
                <div class="p-8 space-y-8">

                    @if(!is_null($flexibilidade))
                        <div>
                            <p class="mb-2 text-lg font-semibold text-gray-800">
                                Você está satisfeito(a) com a flexibilidade que você tem na sua dieta?
                            </p>
                            <span class="inline-flex items-center px-3 py-1 text-sm font-semibold rounded-full bg-emerald-100 text-emerald-800">
                                {{ $fmt($flexibilidade, $mapSatisfacao) }}
                            </span>
                        </div>
                    @endif

                    @if(!is_null($vida_sexual))
                        <div class="{{ !is_null($flexibilidade) ? 'pt-6 border-t border-gray-200' : '' }}">
                            <p class="mb-2 text-lg font-semibold text-gray-800">
                                Você está satisfeito(a) com sua vida sexual?
                            </p>
                            <span class="inline-flex items-center px-3 py-1 text-sm font-semibold rounded-full bg-emerald-100 text-emerald-800">
                                {{ $fmt($vida_sexual, $mapSatisfacao) }}
                            </span>
                        </div>
                    @endif

                </div>
            </div>
            @endif

            <!-- Seção Impacto -->
            @if(!is_null($exercicio) || !is_null($incomodo) || !is_null($comer))
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-orange-500 to-red-500">
                    <h2 class="text-2xl font-bold text-white">Impacto</h2>
                </div>
                <div class="p-8 space-y-8">

                    @if(!is_null($exercicio))
                        <div>
                            <label class="block mb-2 text-lg font-semibold text-gray-800">
                                Com que frequência sua diabetes interfere em seus exercícios físicos?
                            </label>
                            <span class="inline-flex items-center px-3 py-1 text-sm font-semibold text-orange-800 bg-orange-100 rounded-full">
                                {{ $fmt($exercicio, $mapFrequencia) }}
                            </span>
                        </div>
                    @endif

                    @if(!is_null($incomodo))
                        <div class="{{ !is_null($exercicio) ? 'pt-6 border-t border-gray-200' : '' }}">
                            <label class="block mb-2 text-lg font-semibold text-gray-800">
                                Com que frequência você se sente incomodado por ter diabetes?
                            </label>
                            <span class="inline-flex items-center px-3 py-1 text-sm font-semibold text-orange-800 bg-orange-100 rounded-full">
                                {{ $fmt($incomodo, $mapFrequencia) }}
                            </span>
                        </div>
                    @endif

                    @if(!is_null($comer))
                        <div class="{{ (!is_null($exercicio) || !is_null($incomodo)) ? 'pt-6 border-t border-gray-200' : '' }}">
                            <label class="block mb-2 text-lg font-semibold text-gray-800">
                                Com que frequência você come algo que não deveria ao invés de dizer que tem diabetes?
                            </label>
                            <span class="inline-flex items-center px-3 py-1 text-sm font-semibold text-orange-800 bg-orange-100 rounded-full">
                                {{ $fmt($comer, $mapFrequencia) }}
                            </span>
                        </div>
                    @endif

                </div>
            </div>
            @endif

            <!-- Seção Preocupações Social/Vocacional -->
            @if(!is_null($ter_filhos))
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-purple-500 to-pink-500">
                    <h2 class="text-2xl font-bold text-white">Preocupações: Social / Vocacional</h2>
                </div>
                <div class="p-8">
                    <label class="block mb-2 text-lg font-semibold text-gray-800">
                        Com que frequência você se preocupa se irá ter filhos?
                    </label>
                    <span class="inline-flex items-center px-3 py-1 text-sm font-semibold text-purple-800 bg-purple-100 rounded-full">
                        {{ $fmt($ter_filhos, $mapFrequencia) }}
                    </span>
                </div>
            </div>
            @endif

            <!-- Seção Preocupações Relacionadas à Diabetes -->
            @if(!is_null($diabete) || !is_null($complicacoes))
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-blue-500 to-indigo-600">
                    <h2 class="text-2xl font-bold text-white">Preocupações Relacionadas à Diabetes</h2>
                </div>
                <div class="p-8 space-y-8">

                    @if(!is_null($diabete))
                        <div>
                            <label class="block mb-2 text-lg font-semibold text-gray-800">
                                Com que frequência você se preocupa se virá a desmaiar?
                            </label>
                            <span class="inline-flex items-center px-3 py-1 text-sm font-semibold text-blue-800 bg-blue-100 rounded-full">
                                {{ $fmt($diabete, $mapFrequencia) }}
                            </span>
                        </div>
                    @endif

                    @if(!is_null($complicacoes))
                        <div class="{{ !is_null($diabete) ? 'pt-6 border-t border-gray-200' : '' }}">
                            <label class="block mb-2 text-lg font-semibold text-gray-800">
                                Com que frequência você se preocupa se terá complicações devidas a sua diabetes?
                            </label>
                            <span class="inline-flex items-center px-3 py-1 text-sm font-semibold text-blue-800 bg-blue-100 rounded-full">
                                {{ $fmt($complicacoes, $mapFrequencia) }}
                            </span>
                        </div>
                    @endif

                </div>
            </div>
            @endif

        </div>
    </div>
</div>
