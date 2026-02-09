<div class="relative flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
    <!-- Elementos decorativos de fundo (removido o efeito blur e mix-blend) -->
    <div class="absolute inset-0 pointer-events-none">
        <div
            class="w-full h-full bg-[radial-gradient(40%_40%_at_10%_10%,#c7d2fe33,transparent),radial-gradient(45%_45%_at_90%_15%,#e9d5ff33,transparent),radial-gradient(40%_40%_at_20%_90%,#fecdd733,transparent)]">
        </div>
    </div>

    <section class="relative z-10 p-4 mt-4 md:p-8 md:mt-10">
        <div class="px-2 mx-auto max-w-7xl md:px-6">
            <!-- Header da página -->
            <div class="mb-6 text-center md:mb-8">
                <div class="inline-block p-3 mb-3 backdrop-blur-sm rounded-xl md:p-4 md:mb-4">
                    <h1 class="mb-1 text-2xl font-bold text-indigo-900 md:text-3xl lg:text-4xl">
                        Prescrições do <span class="text-indigo-600">Paciente</span>
                    </h1>
                    <div class="w-16 h-0.5 mx-auto bg-indigo-600 rounded-full"></div>
                </div>
                <div class="flex items-center justify-center mb-4 space-x-3">
                    <div
                        class="flex items-center justify-center w-10 h-10 text-base font-bold text-white bg-indigo-600 rounded-full md:w-12 md:h-12 md:text-lg">
                        {{ substr($paciente->nome, 0, 1) }}
                    </div>
                    <div class="text-left">
                        <p class="text-lg font-semibold text-gray-800 md:text-xl">{{ $paciente->nome }}</p>
                        <p class="text-xs text-gray-600 md:text-sm">Prontuário: {{ $paciente->prontuario }}</p>
                    </div>
                </div>
            </div>

            <!-- Container principal -->
            <div class="overflow-hidden border shadow bg-white/90 rounded-xl border-white/30">

                <!-- Header do container -->
                <div class="p-4 border-b border-gray-200 bg-gradient-to-r from-indigo-50 to-purple-50 md:p-6">
                    <div class="flex flex-col items-center justify-between gap-3 md:gap-4 lg:flex-row">
                        <div class="flex items-center space-x-2 md:space-x-3">
                            <div
                                class="flex items-center justify-center w-8 h-8 bg-indigo-600 rounded-lg md:w-10 md:h-10">
                                <svg class="w-5 h-5 text-white md:w-6 md:h-6" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-base font-bold text-gray-900 md:text-lg">Avaliação de Enfermagem e
                                    Prescrições</h2>
                                <p class="text-xs text-gray-600 md:text-sm">Gerenciamento das avaliações aplicadas</p>
                            </div>
                        </div>

                        <!-- Botão para voltar -->
                        <a href="{{ route('prontuario.index') }}"
                            class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-white transition-all duration-200 transform bg-gray-600 rounded-lg shadow-md md:w-auto group hover:bg-gray-700 hover:shadow-lg hover:scale-105">
                            <svg class="w-4 h-4 mr-2 transition-transform duration-200 group-hover:-translate-x-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Voltar
                        </a>
                    </div>
                </div>

                <!-- Conteúdo da tabela - Desktop (hidden on mobile) -->
                <div class="hidden overflow-x-auto lg:block">
                    <table class="w-full">
                        <thead class="text-white bg-indigo-800">
                            <tr>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    <div class="flex items-center space-x-1">
                                        <span>ID Questionário</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                        </svg>
                                    </div>
                                </th>

                                <!-- Enfermeiro -->
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    <div class="flex items-center space-x-1">
                                        <span>Enfermeiro</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    Data de Cadastro
                                </th>

                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    Status
                                </th>

                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-center uppercase">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($questionarios as $questionario)
                                <tr wire:key="{{ $questionario->id }}"
                                    class="transition-colors duration-150 border-b border-gray-100 hover:bg-gray-50">

                                    <!-- ID Questionário -->
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-10 h-10 mr-3 text-sm font-bold text-white rounded-full bg-gradient-to-r from-indigo-500 to-purple-500">
                                                {{ $questionario->id }}
                                            </div>
                                            <div>
                                                <div class="text-sm font-semibold text-gray-900">Questionário
                                                    #{{ $questionario->id }}</div>
                                                <div class="text-xs text-gray-500">ID do registro</div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Enfermeiro -->
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-8 h-8 mr-2 text-xs font-medium text-white bg-green-600 rounded-full">
                                                {{ substr($questionario->user->name, 0, 1) }}
                                            </div>
                                            <div>
                                                <span
                                                    class="text-sm font-medium text-indigo-600">{{ $questionario->user->name }}</span>
                                                <div class="text-xs text-gray-500">Enfermeiro responsável</div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Data de Cadastro -->
                                    <td class="px-4 py-4">
                                        <div class="text-sm font-semibold text-gray-900">
                                            {{ \Carbon\Carbon::parse($questionario->created_at)->format('d/m/Y') }}
                                        </div>
                                        <div class="text-xs text-gray-500">
                                            {{ \Carbon\Carbon::parse($questionario->created_at)->format('H:i') }}
                                        </div>
                                    </td>

                                    <!-- Status -->
                                    <td class="px-4 py-4">
                                        @if ($questionario->prontuario && $questionario->prontuario->gerado)
                                            <span
                                                class="inline-flex items-center px-3 py-1 text-xs font-medium text-green-800 bg-green-100 border border-green-200 rounded-full">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Prescrição Gerada
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-3 py-1 text-xs font-medium border rounded-full bg-amber-100 text-amber-800 border-amber-200">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Aguardando Prescrição
                                            </span>
                                        @endif
                                    </td>

                                    <!-- Ações -->
                                    <td class="px-4 py-4">
                                        <div class="flex items-center justify-center space-x-2">
                                            @if ($questionario->prontuario && $questionario->prontuario->gerado)
                                                <button wire:click="gerarPDF('{{ $questionario->prontuario->id }}')"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white transition-all duration-200 transform rounded-lg shadow-md group bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-700 hover:to-indigo-800 hover:shadow-lg hover:scale-105">
                                                    <svg class="w-4 h-4 mr-2 transition-transform duration-200 group-hover:scale-110"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    Visualizar PDF
                                                </button>
                                            @else
                                                <button wire:click="CreateProntuario('{{ $questionario->id }}')"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white transition-all duration-200 transform rounded-lg shadow-md group bg-gradient-to-r from-cyan-600 to-cyan-700 hover:from-cyan-700 hover:to-cyan-800 hover:shadow-lg hover:scale-105">
                                                    <svg class="w-4 h-4 mr-2 transition-transform duration-300 group-hover:rotate-180"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                    </svg>
                                                    Criar Prescrição
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Card Layout - Mobile (visible only on mobile/tablet) -->
                <div class="block lg:hidden">
                    <div class="p-3 space-y-3 md:p-4 md:space-y-4">
                        @foreach ($questionarios as $questionario)
                            <div wire:key="mobile-{{ $questionario->id }}"
                                class="p-4 transition-all duration-200 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md">

                                <!-- Header do Card -->
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-lg font-bold text-white rounded-full bg-gradient-to-r from-indigo-500 to-purple-500">
                                            {{ $questionario->id }}
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h3 class="text-base font-semibold text-gray-900 truncate">
                                                Questionário #{{ $questionario->id }}
                                            </h3>
                                            <p class="text-xs text-gray-500">ENFERMEIRO</p>
                                            <p class="text-sm font-medium text-indigo-600">
                                                {{ $questionario->user->name }}</p>
                                        </div>
                                    </div>

                                    <!-- Ícones de ação -->
                                    <div class="flex space-x-2">
                                        @if ($questionario->prontuario && $questionario->prontuario->gerado)
                                            <button wire:click="gerarPDF('{{ $questionario->prontuario->id }}')"
                                                class="flex items-center justify-center w-10 h-10 text-indigo-600 transition-colors duration-200 bg-indigo-50 rounded-lg hover:bg-indigo-100">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                        @else
                                            <button wire:click="CreateProntuario('{{ $questionario->id }}')"
                                                class="flex items-center justify-center w-10 h-10 text-cyan-600 transition-colors duration-200 bg-cyan-50 rounded-lg hover:bg-cyan-100">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                </svg>
                                            </button>
                                        @endif

                                        <button
                                            class="flex items-center justify-center w-10 h-10 text-red-600 transition-colors duration-200 bg-red-50 rounded-lg hover:bg-red-100">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- Informações do questionário -->
                                <div class="pt-3 space-y-2 border-t border-gray-100">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-medium text-gray-500 uppercase">Criado</span>
                                        <span class="text-sm font-semibold text-gray-900">
                                            {{ \Carbon\Carbon::parse($questionario->created_at)->format('d/m/Y') }} •
                                            {{ \Carbon\Carbon::parse($questionario->created_at)->format('H:i') }}
                                        </span>
                                    </div>


                                    <!-- Status badge -->
                                    <div class="pt-2">
                                        @if ($questionario->prontuario && $questionario->prontuario->gerado)
                                            <span
                                                class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-green-800 bg-green-100 border border-green-200 rounded-full">
                                                <svg class="w-3 h-3 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Prescrição Gerada
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-3 py-1.5 text-xs font-medium border rounded-full bg-amber-100 text-amber-800 border-amber-200">
                                                <svg class="w-3 h-3 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Aguardando Prescrição
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Footer da tabela com paginação melhorada -->
                <div class="px-4 py-3 border-t border-gray-200 bg-gray-50 md:px-6 md:py-4">
                    <div class="flex flex-col items-center justify-between gap-3 md:gap-4 sm:flex-row">
                        <!-- Informações e seletor de itens por página -->
                        <div
                            class="flex flex-col items-center w-full space-y-2 sm:flex-row sm:space-y-0 sm:space-x-4 sm:w-auto">
                            <div class="text-xs text-center text-gray-700 md:text-sm">
                                Mostrando <span class="font-medium">{{ $questionarios->firstItem() ?? 0 }}</span>
                                a <span class="font-medium">{{ $questionarios->lastItem() ?? 0 }}</span>
                                de <span class="font-medium">{{ $questionarios->total() }}</span> questionários
                            </div>
                            <!-- Seletor de itens por página -->
                            <div class="flex items-center space-x-2">
                                <label class="text-xs font-medium text-gray-700 md:text-sm">Por página:</label>
                                <select wire:model.live='perPage'
                                    class="px-2 py-1 text-xs text-gray-900 bg-white border border-gray-300 rounded-md md:px-3 md:text-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                        </div>
                        <!-- Paginação -->
                        <div class="flex items-center justify-center w-full sm:w-auto">
                            {{ $questionarios->links('vendor.pagination.tailwind') }}
                        </div>

                    </div>
                </div>
            </div>
            <!-- Card de estatísticas (opcional) -->
            <div class="grid grid-cols-1 gap-4 mt-6 md:grid-cols-3 md:gap-6 md:mt-8">
                <div class="p-4 border shadow-lg bg-white/90 backdrop-blur-sm rounded-xl border-white/30 md:p-6">
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-10 h-10 mr-3 bg-indigo-600 rounded-lg md:w-12 md:h-12 md:mr-4">
                            <svg class="w-5 h-5 text-white md:w-6 md:h-6" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xl font-bold text-gray-900 md:text-2xl">{{ $questionarios->total() }}
                            </div>
                            <div class="text-xs text-gray-500 md:text-sm">Total de Questionários</div>
                        </div>
                    </div>
                </div>

                <div class="p-4 border shadow-lg bg-white/90 backdrop-blur-sm rounded-xl border-white/30 md:p-6">
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-10 h-10 mr-3 bg-green-600 rounded-lg md:w-12 md:h-12 md:mr-4">
                            <svg class="w-5 h-5 text-white md:w-6 md:h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xl font-bold text-gray-900 md:text-2xl">
                                {{ $questionarios->filter(function ($q) {return $q->prontuario && $q->prontuario->gerado;})->count() }}
                            </div>
                            <div class="text-xs text-gray-500 md:text-sm">Pescrições Geradas</div>
                        </div>
                    </div>
                </div>

                <div class="p-4 border shadow-lg bg-white/90 backdrop-blur-sm rounded-xl border-white/30 md:p-6">
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-10 h-10 mr-3 rounded-lg bg-amber-600 md:w-12 md:h-12 md:mr-4">
                            <svg class="w-5 h-5 text-white md:w-6 md:h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xl font-bold text-gray-900 md:text-2xl">
                                {{ $questionarios->filter(function ($q) {return !($q->prontuario && $q->prontuario->gerado);})->count() }}
                            </div>
                            <div class="text-xs text-gray-500 md:text-sm">Pendentes</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
