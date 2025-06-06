<div class="flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 relative">
    <!-- Elementos decorativos de fundo -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute top-10 left-10 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-30">
        </div>
        <div
            class="absolute top-20 right-10 w-80 h-80 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-25">
        </div>
        <div
            class="absolute bottom-10 left-20 w-64 h-64 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-20">
        </div>
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-indigo-100 rounded-full mix-blend-multiply filter blur-2xl opacity-10">
        </div>
    </div>

    <section class="p-8 mt-10 relative z-10">
        <div class="max-w-7xl px-6 mx-auto">
            <!-- Header da página -->
            <div class="mb-8 text-center">
                <div class="inline-block p-4 backdrop-blur-sm rounded-xl mb-4">
                    <h1 class="text-3xl md:text-4xl font-bold text-indigo-900 mb-1">
                        Prontuários do <span class="text-indigo-600">Paciente</span>
                    </h1>
                    <div class="w-16 h-0.5 mx-auto bg-indigo-600 rounded-full"></div>
                </div>
                <div class="flex items-center justify-center space-x-3 mb-4">
                    <div
                        class="w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        {{ substr($paciente->nome, 0, 1) }}
                    </div>
                    <div class="text-left">
                        <p class="text-xl font-semibold text-gray-800">{{ $paciente->nome }}</p>
                        <p class="text-sm text-gray-600">Prontuário: {{ $paciente->prontuario }}</p>
                    </div>
                </div>
            </div>

            <!-- Container principal com glass morphism -->
            <div class="bg-white/90 backdrop-blur-sm shadow-lg rounded-xl border border-white/30 overflow-hidden">

                <!-- Header do container -->
                <div class="p-6 bg-gradient-to-r from-indigo-50 to-purple-50 border-b border-gray-200">
                    <div class="flex flex-col lg:flex-row gap-4 items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-indigo-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-lg font-bold text-gray-900">Questionários e Prontuários</h2>
                                <p class="text-sm text-gray-600">Gerenciamento dos questionários aplicados</p>
                            </div>
                        </div>

                        <!-- Botão para voltar -->
                        <a href="{{ route('prontuario.index') }}"
                            class="group flex items-center px-4 py-2 bg-gray-600 text-white font-medium rounded-lg shadow-md hover:bg-gray-700 hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                            <svg class="w-4 h-4 mr-2 group-hover:-translate-x-1 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Voltar
                        </a>
                    </div>
                </div>

                <!-- Conteúdo da tabela -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-indigo-800 text-white">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">
                                    <div class="flex items-center space-x-1">
                                        <span>ID Questionário</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">
                                    <div class="flex items-center space-x-1">
                                        <span>Enfermeiro</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">
                                    Data de Cadastro
                                </th>
                                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">
                                    Status
                                </th>
                                <th class="px-4 py-3 text-center text-xs font-semibold uppercase tracking-wider">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($questionarios as $questionario)
                                <tr wire:key="{{ $questionario->id }}"
                                    class="hover:bg-gray-50 transition-colors duration-150 border-b border-gray-100">

                                    <!-- ID Questionário -->
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <div
                                                class="w-10 h-10 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-3">
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
                                                class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center text-white font-medium text-xs mr-2">
                                                {{ substr($questionario->user->name, 0, 1) }}
                                            </div>
                                            <div>
                                                <span
                                                    class="text-indigo-600 text-sm font-medium">{{ $questionario->user->name }}</span>
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
                                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 border border-green-200">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Prontuário Gerado
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-800 border border-amber-200">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Aguardando Prontuário
                                            </span>
                                        @endif
                                    </td>

                                    <!-- Ações -->
                                    <td class="px-4 py-4">
                                        <div class="flex items-center justify-center space-x-2">
                                            @if ($questionario->prontuario && $questionario->prontuario->gerado)
                                                <button wire:click="gerarPDF('{{ $questionario->prontuario->id }}')"
                                                    class="group inline-flex items-center px-4 py-2 bg-gradient-to-r from-indigo-600 to-indigo-700 text-white text-sm font-medium rounded-lg shadow-md hover:from-indigo-700 hover:to-indigo-800 hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                                    <svg class="w-4 h-4 mr-2 group-hover:scale-110 transition-transform duration-200"
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
                                                    class="group inline-flex items-center px-4 py-2 bg-gradient-to-r from-cyan-600 to-cyan-700 text-white text-sm font-medium rounded-lg shadow-md hover:from-cyan-700 hover:to-cyan-800 hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                                    <svg class="w-4 h-4 mr-2 group-hover:rotate-180 transition-transform duration-300"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                    </svg>
                                                    Criar Prontuário
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Footer da tabela com paginação melhorada -->
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                        <!-- Informações e seletor de itens por página -->
                        <div class="flex items-center space-x-4">
                            <div class="text-sm text-gray-700">
                                Mostrando <span class="font-medium">{{ $questionarios->firstItem() ?? 0 }}</span>
                                a <span class="font-medium">{{ $questionarios->lastItem() ?? 0 }}</span>
                                de <span class="font-medium">{{ $questionarios->total() }}</span> questionários
                            </div>
                            <div class="flex items-center space-x-2">
                                <label class="text-sm font-medium text-gray-700">Por página:</label>
                                <select wire:model.live="perPage"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 px-3 py-1">
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                        </div>

                        <!-- Paginação -->
                        <div class="flex items-center">
                            {{ $questionarios->links('vendor.pagination.tailwind') }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card de estatísticas (opcional) -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white/90 backdrop-blur-sm shadow-lg rounded-xl border border-white/30 p-6">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-gray-900">{{ $questionarios->total() }}</div>
                            <div class="text-sm text-gray-500">Total de Questionários</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white/90 backdrop-blur-sm shadow-lg rounded-xl border border-white/30 p-6">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-gray-900">
                                {{ $questionarios->filter(function ($q) {return $q->prontuario && $q->prontuario->gerado;})->count() }}
                            </div>
                            <div class="text-sm text-gray-500">Prontuários Gerados</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white/90 backdrop-blur-sm shadow-lg rounded-xl border border-white/30 p-6">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-amber-600 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-gray-900">
                                {{ $questionarios->filter(function ($q) {return !($q->prontuario && $q->prontuario->gerado);})->count() }}
                            </div>
                            <div class="text-sm text-gray-500">Pendentes</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
