<div class="relative flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
    <!-- Elementos decorativos de fundo -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute bg-indigo-200 rounded-full top-10 left-10 w-72 h-72 mix-blend-multiply filter blur-xl opacity-30">
        </div>
        <div
            class="absolute bg-purple-200 rounded-full opacity-25 top-20 right-10 w-80 h-80 mix-blend-multiply filter blur-xl">
        </div>
        <div
            class="absolute w-64 h-64 bg-pink-200 rounded-full bottom-10 left-20 mix-blend-multiply filter blur-xl opacity-20">
        </div>
        <div
            class="absolute transform -translate-x-1/2 -translate-y-1/2 bg-indigo-100 rounded-full top-1/2 left-1/2 w-96 h-96 mix-blend-multiply filter blur-2xl opacity-10">
        </div>
    </div>

    <section class="relative z-10 p-8 mt-10">
        <div class="px-6 mx-auto max-w-7xl">
            <!-- Header da página -->
            <div class="mb-8 text-center">
                <div class="inline-block p-4 mb-4 backdrop-blur-sm rounded-xl">
                    <h1 class="mb-1 text-3xl font-bold text-indigo-900 md:text-4xl">
                        Questionários do <span class="text-indigo-600">Paciente</span>
                    </h1>
                    <div class="w-16 h-0.5 mx-auto bg-indigo-600 rounded-full"></div>
                </div>
                <div class="flex items-center justify-center mb-4 space-x-3">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-lg font-bold text-white bg-indigo-600 rounded-full">
                        {{ substr($paciente->nome, 0, 1) }}
                    </div>
                    <div class="text-left">
                        <p class="text-xl font-semibold text-gray-800">{{ $paciente->nome }}</p>
                        <p class="text-sm text-gray-600">Prontuário: {{ $paciente->prontuario }}</p>
                    </div>
                </div>
            </div>

            <!-- Container principal com glass morphism -->
            <div class="overflow-hidden border shadow-lg bg-white/90 backdrop-blur-sm rounded-xl border-white/30">

                <!-- Header do container -->
                <div class="p-6 border-b border-gray-200 bg-gradient-to-r from-indigo-50 to-purple-50">
                    <div class="flex flex-col items-center justify-between gap-4 lg:flex-row">
                        <div class="flex items-center space-x-3">
                            <div class="flex items-center justify-center w-10 h-10 bg-indigo-600 rounded-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-lg font-bold text-gray-900">Questionários de Avaliação</h2>
                                <p class="text-sm text-gray-600">Gerenciamento dos questionários aplicados</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3">
                            <!-- Botão para criar novo questionário -->
                            <button wire:click="CreateQuestionario"
                                class="flex items-center px-4 py-2 font-medium text-white transition-all duration-200 transform bg-green-600 rounded-lg shadow-md group hover:bg-green-700 hover:shadow-lg hover:scale-105">
                                <svg class="w-4 h-4 mr-2 transition-transform duration-300 group-hover:rotate-180"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Novo Questionário
                            </button>

                            <!-- Botão para voltar -->
                            <a href="{{ route('paciente.show', ['id' => $paciente->id]) }}"
                                class="flex items-center px-4 py-2 font-medium text-white transition-all duration-200 transform bg-gray-600 rounded-lg shadow-md group hover:bg-gray-700 hover:shadow-lg hover:scale-105">
                                <svg class="w-4 h-4 mr-2 transition-transform duration-200 group-hover:-translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                Voltar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Conteúdo da tabela -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="text-white bg-indigo-800">
                            <tr>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    <button wire:click="setSortBy('id')" class="group">
                                        <span>ID QUESTIONÁRIO</span>
                                    </button>
                                </th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    Enfermeiro
                                </th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    <button wire:click="setSortBy('created_at')" class="group">
                                        <span>DATA DE CRIAÇÃO</span>
                                    </button>
                                </th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    Última Atualização
                                </th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-center uppercase">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($questionarios as $questionario)
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
                                                {{ substr($questionario->user->name ?? 'N/A', 0, 1) }}
                                            </div>
                                            <div>
                                                <span
                                                    class="text-sm font-medium text-indigo-600">{{ $questionario->user->name ?? 'Não informado' }}</span>
                                                <div class="text-xs text-gray-500">Enfermeiro responsável</div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Data de Criação -->
                                    <td class="px-4 py-4">
                                        <div class="text-sm font-semibold text-gray-900">
                                            {{ \Carbon\Carbon::parse($questionario->created_at)->format('d/m/Y') }}
                                        </div>
                                        <div class="text-xs text-gray-500">
                                            {{ \Carbon\Carbon::parse($questionario->created_at)->format('H:i') }}
                                        </div>
                                    </td>

                                    <!-- Última Atualização -->
                                    <td class="px-4 py-4">
                                        <div class="text-sm font-semibold text-gray-900">
                                            {{ \Carbon\Carbon::parse($questionario->updated_at)->format('d/m/Y') }}
                                        </div>
                                        <div class="text-xs text-gray-500">
                                            {{ \Carbon\Carbon::parse($questionario->updated_at)->format('H:i') }}
                                        </div>
                                    </td>

                                    <!-- Ações -->
                                    <td class="px-4 py-4">
                                        <div class="flex items-center justify-center space-x-2">
                                            <!-- Botão Visualizar -->
                                            <button wire:click="ShowQuestionario('{{ $questionario->id }}')"
                                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white transition-all duration-200 transform rounded-lg shadow-md group bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-700 hover:to-indigo-800 hover:shadow-lg hover:scale-105">
                                                <svg class="w-4 h-4 mr-2 transition-transform duration-200 group-hover:scale-110"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                Visualizar
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-4 py-8 text-center">
                                        <div class="flex flex-col items-center justify-center space-y-3">
                                            <div
                                                class="flex items-center justify-center w-16 h-16 bg-gray-100 rounded-full">
                                                <svg class="w-8 h-8 text-gray-400" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-lg font-medium text-gray-500">Nenhum questionário
                                                    encontrado</p>
                                                <p class="text-sm text-gray-400">Este paciente ainda não possui
                                                    questionários cadastrados.</p>
                                            </div>
                                            <button wire:click="CreateQuestionario"
                                                class="flex items-center px-4 py-2 mt-2 font-medium text-white transition-all duration-200 transform bg-indigo-600 rounded-lg shadow-md group hover:bg-indigo-700 hover:shadow-lg hover:scale-105">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                </svg>
                                                Criar Primeiro Questionário
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Footer da tabela com paginação melhorada -->
                @if ($questionarios->count() > 0)
                    <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                        <div class="flex flex-col items-center justify-between gap-4 sm:flex-row">
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
                                        class="px-3 py-1 text-sm text-gray-900 bg-white border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Paginação -->
                            <div class="flex items-center">
                                {{ $questionarios->links() }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Card de estatísticas -->
            <div class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2">
                <div class="p-6 border shadow-lg bg-white/90 backdrop-blur-sm rounded-xl border-white/30">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 bg-indigo-600 rounded-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-gray-900">{{ $questionarios->total() }}</div>
                            <div class="text-sm text-gray-500">Total de Questionários</div>
                        </div>
                    </div>
                </div>

                <div class="p-6 border shadow-lg bg-white/90 backdrop-blur-sm rounded-xl border-white/30">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 rounded-lg bg-purple-600">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-gray-900">
                                {{ $questionarios->unique('user_id')->count() }}
                            </div>
                            <div class="text-sm text-gray-500">Enfermeiros Envolvidos</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
