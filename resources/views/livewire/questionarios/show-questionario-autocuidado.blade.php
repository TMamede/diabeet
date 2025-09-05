<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100">
    <!-- BG decor -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute rounded-full bg-blue-200/30 top-20 left-10 w-72 h-72 mix-blend-multiply filter blur-2xl animate-pulse">
        </div>
        <div
            class="absolute delay-1000 rounded-full bg-indigo-200/20 top-40 right-16 w-80 h-80 mix-blend-multiply filter blur-2xl animate-pulse">
        </div>
        <div
            class="absolute w-64 h-64 delay-500 rounded-full bg-purple-200/25 bottom-20 left-1/4 mix-blend-multiply filter blur-2xl animate-pulse">
        </div>
    </div>

    <div class="relative z-10 px-4 py-12">
        <div class="max-w-4xl mx-auto mb-12 text-center">
            <div
                class="inline-flex items-center justify-center w-16 h-16 mb-6 rounded-full shadow-lg bg-gradient-to-r from-blue-500 to-indigo-600">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
            </div>
            <h1 class="mb-2 text-4xl font-bold text-gray-800">Questionário de Autocuidado</h1>
            <p class="text-sm text-gray-500">Exibição das respostas (somente leitura)</p>
        </div>

        <!-- Botão de Envio -->
        <div class="flex justify-center mt-12">
            <button type="button" wire:click="backToShow"
                class="relative px-8 py-4 text-lg font-semibold text-white transition-all duration-300 transform shadow-lg group bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl hover:shadow-xl hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                <span class="relative z-10 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                    Voltar
                </span>
                <div
                    class="absolute inset-0 transition-opacity duration-300 opacity-0 bg-gradient-to-r from-blue-700 to-indigo-800 rounded-2xl group-hover:opacity-100">
                </div>
            </button>
        </div>

        <div class="max-w-4xl mx-auto space-y-8">

            {{-- Alimentação Geral --}}
            @if (!is_null($dieta) || !is_null($orientacao))
                <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                    <div class="px-8 py-6 bg-gradient-to-r from-emerald-500 to-teal-600">
                        <h2 class="text-2xl font-bold text-white">Alimentação Geral</h2>
                    </div>
                    <div class="p-8 space-y-6">
                        @if (!is_null($dieta))
                            <div>
                                <p class="mb-2 text-lg font-semibold text-gray-800">
                                    Em quantos dos últimos 7 dias seguiu uma dieta saudável?
                                </p>
                                <span
                                    class="inline-flex items-center px-3 py-1 text-sm font-semibold rounded-full bg-emerald-100 text-emerald-800">
                                    {{ $dieta }} {{ $dieta == 1 ? 'dia' : 'dias' }}
                                </span>
                            </div>
                        @endif

                        @if (!is_null($orientacao))
                            <div class="pt-4 border-t border-gray-100">
                                <p class="mb-2 text-lg font-semibold text-gray-800">
                                    Dias por semana seguindo orientação alimentar (média no último mês):
                                </p>
                                <span
                                    class="inline-flex items-center px-3 py-1 text-sm font-semibold rounded-full bg-emerald-100 text-emerald-800">
                                    {{ $orientacao }} {{ $orientacao == 1 ? 'dia' : 'dias' }}/semana
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            {{-- Alimentação Específica --}}
            @if (!is_null($frutas) || !is_null($gorduras) || !is_null($doces))
                <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                    <div class="px-8 py-6 bg-gradient-to-r from-orange-500 to-red-500">
                        <h2 class="text-2xl font-bold text-white">Alimentação Específica</h2>
                    </div>
                    <div class="p-8 space-y-6">
                        @if (!is_null($frutas))
                            <div>
                                <p class="mb-2 text-lg font-semibold text-gray-800">
                                    5+ porções de frutas/vegetais:
                                </p>
                                <span
                                    class="inline-flex px-3 py-1 text-sm font-semibold text-orange-800 bg-orange-100 rounded-full">
                                    {{ $frutas }} {{ $frutas == 1 ? 'dia' : 'dias' }}
                                </span>
                            </div>
                        @endif
                        @if (!is_null($gorduras))
                            <div class="{{ !is_null($frutas) ? 'pt-4 border-t border-gray-100' : '' }}">
                                <p class="mb-2 text-lg font-semibold text-gray-800">
                                    Alimentos ricos em gordura:
                                </p>
                                <span
                                    class="inline-flex px-3 py-1 text-sm font-semibold text-orange-800 bg-orange-100 rounded-full">
                                    {{ $gorduras }} {{ $gorduras == 1 ? 'dia' : 'dias' }}
                                </span>
                            </div>
                        @endif
                        @if (!is_null($doces))
                            <div
                                class="{{ !is_null($frutas) || !is_null($gorduras) ? 'pt-4 border-t border-gray-100' : '' }}">
                                <p class="mb-2 text-lg font-semibold text-gray-800">
                                    Doces:
                                </p>
                                <span
                                    class="inline-flex px-3 py-1 text-sm font-semibold text-orange-800 bg-orange-100 rounded-full">
                                    {{ $doces }} {{ $doces == 1 ? 'dia' : 'dias' }}
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            {{-- Atividade Física --}}
            @if (!is_null($realizou) || !is_null($especifico))
                <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                    <div class="px-8 py-6 bg-gradient-to-r from-purple-500 to-pink-500">
                        <h2 class="text-2xl font-bold text-white">Atividade Física</h2>
                    </div>
                    <div class="p-8 space-y-6">
                        @if (!is_null($realizou))
                            <div>
                                <p class="mb-2 text-lg font-semibold text-gray-800">
                                    Pelo menos 30 minutos:
                                </p>
                                <span
                                    class="inline-flex px-3 py-1 text-sm font-semibold text-purple-800 bg-purple-100 rounded-full">
                                    {{ $realizou }} {{ $realizou == 1 ? 'dia' : 'dias' }}
                                </span>
                            </div>
                        @endif
                        @if (!is_null($especifico))
                            <div class="{{ !is_null($realizou) ? 'pt-4 border-t border-gray-100' : '' }}">
                                <p class="mb-2 text-lg font-semibold text-gray-800">
                                    Exercício específico (nadar/caminhar/bicicleta):
                                </p>
                                <span
                                    class="inline-flex px-3 py-1 text-sm font-semibold text-purple-800 bg-purple-100 rounded-full">
                                    {{ $especifico }} {{ $especifico == 1 ? 'dia' : 'dias' }}
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            {{-- Monitoramento da Glicemia --}}
            @if (!is_null($avaliou) || !is_null($recomendado))
                <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                    <div class="px-8 py-6 bg-gradient-to-r from-cyan-500 to-blue-600">
                        <h2 class="text-2xl font-bold text-white">Monitoramento da Glicemia</h2>
                    </div>
                    <div class="p-8 space-y-6">
                        @if (!is_null($avaliou))
                            <div>
                                <p class="mb-2 text-lg font-semibold text-gray-800">
                                    Avaliou o açúcar no sangue:
                                </p>
                                <span
                                    class="inline-flex px-3 py-1 text-sm font-semibold rounded-full bg-cyan-100 text-cyan-800">
                                    {{ $avaliou }} {{ $avaliou == 1 ? 'dia' : 'dias' }}
                                </span>
                            </div>
                        @endif
                        @if (!is_null($recomendado))
                            <div class="{{ !is_null($avaliou) ? 'pt-4 border-t border-gray-100' : '' }}">
                                <p class="mb-2 text-lg font-semibold text-gray-800">
                                    Número de vezes recomendado:
                                </p>
                                <span
                                    class="inline-flex px-3 py-1 text-sm font-semibold rounded-full bg-cyan-100 text-cyan-800">
                                    {{ $recomendado }} {{ $recomendado == 1 ? 'dia' : 'dias' }}
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            {{-- Cuidado com os Pés --}}
            @if (!is_null($pes) || !is_null($sapatos) || !is_null($dedos))
                <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                    <div class="px-8 py-6 bg-gradient-to-r from-yellow-500 to-orange-500">
                        <h2 class="text-2xl font-bold text-white">Cuidado com os Pés</h2>
                    </div>
                    <div class="p-8 space-y-6">
                        @if (!is_null($pes))
                            <div>
                                <p class="mb-2 text-lg font-semibold text-gray-800">Examinou os pés:</p>
                                <span
                                    class="inline-flex px-3 py-1 text-sm font-semibold text-yellow-800 bg-yellow-100 rounded-full">
                                    {{ $pes }} {{ $pes == 1 ? 'dia' : 'dias' }}
                                </span>
                            </div>
                        @endif
                        @if (!is_null($sapatos))
                            <div class="{{ !is_null($pes) ? 'pt-4 border-t border-gray-100' : '' }}">
                                <p class="mb-2 text-lg font-semibold text-gray-800">Examinou dentro dos sapatos:</p>
                                <span
                                    class="inline-flex px-3 py-1 text-sm font-semibold text-yellow-800 bg-yellow-100 rounded-full">
                                    {{ $sapatos }} {{ $sapatos == 1 ? 'dia' : 'dias' }}
                                </span>
                            </div>
                        @endif
                        @if (!is_null($dedos))
                            <div
                                class="{{ !is_null($pes) || !is_null($sapatos) ? 'pt-4 border-t border-gray-100' : '' }}">
                                <p class="mb-2 text-lg font-semibold text-gray-800">Secou entre os dedos:</p>
                                <span
                                    class="inline-flex px-3 py-1 text-sm font-semibold text-yellow-800 bg-yellow-100 rounded-full">
                                    {{ $dedos }} {{ $dedos == 1 ? 'dia' : 'dias' }}
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            {{-- Tabagismo --}}
            @if (!is_null($fumou))
                <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                    <div class="px-8 py-6 bg-gradient-to-r from-gray-600 to-slate-700">
                        <h2 class="text-2xl font-bold text-white">Tabagismo</h2>
                    </div>
                    <div class="p-8 space-y-6">
                        <div>
                            <p class="mb-2 text-lg font-semibold text-gray-800">Fumou nos últimos 7 dias?</p>
                            <span
                                class="inline-flex px-3 py-1 text-sm font-semibold text-gray-800 bg-gray-100 rounded-full">
                                {{ (string) $fumou === '1' ? 'Sim' : 'Não' }}
                            </span>
                        </div>

                        @if ((string) $fumou === '1' && !is_null($num_cigarros))
                            <div class="pt-4 border-t border-gray-100">
                                <p class="mb-2 text-lg font-semibold text-gray-800">Cigarros por dia (habitual):</p>
                                <span
                                    class="inline-flex px-3 py-1 text-sm font-semibold text-gray-800 bg-gray-100 rounded-full">
                                    {{ $num_cigarros }}
                                </span>
                            </div>
                        @endif

                        @if ((string) $fumou === '1' && !is_null($quando_fumou))
                            <div class="pt-4 border-t border-gray-100">
                                <p class="mb-2 text-lg font-semibold text-gray-800">Quando fumou o último cigarro:</p>
                                @php
                                    $qf = optional($dataFumos)->firstWhere('id', $quando_fumou);
                                @endphp
                                <span
                                    class="inline-flex px-3 py-1 text-sm font-semibold text-gray-800 bg-gray-100 rounded-full">
                                    {{ $qf ? $qf->descricao : $quando_fumou }}
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>
