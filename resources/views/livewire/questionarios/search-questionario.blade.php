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
                        Gerenciamento de <span class="text-indigo-600">Questionários</span>
                    </h1>
                    <div class="w-16 h-0.5 mx-auto bg-indigo-600 rounded-full"></div>
                </div>
                <p class="text-lg text-gray-600 max-w-xl mx-auto">
                    Lista completa de questionários aplicados no sistema SoPeP
                </p>
            </div>

            <!-- Container principal com glass morphism -->
            <div class="bg-white/90 backdrop-blur-sm shadow-lg rounded-xl border border-white/30 overflow-hidden">

                <!-- Barra de busca melhorada -->
                <div class="p-6 bg-gradient-to-r from-indigo-50 to-purple-50 border-b border-gray-200">
                    <div class="flex flex-col lg:flex-row gap-4 items-center justify-between">
                        <div class="relative flex-1 max-w-xl">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input wire:model.live.debounce.300ms="search" type="text"
                                class="block w-full py-3 pl-10 pr-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-500"
                                placeholder="Buscar por paciente, enfermeiro ou unidade...">
                        </div>

                        <!-- Botão de criar questionário -->
                        <a href="{{ route('questionario.create') }}"
                            class="group flex items-center px-6 py-3 bg-indigo-600 text-white font-medium rounded-lg shadow-md hover:bg-indigo-700 hover:shadow-lg transform hover:scale-105 transition-all duration-200 border border-indigo-500">
                            <svg class="w-5 h-5 mr-2 group-hover:rotate-90 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Novo Questionário
                        </a>
                    </div>
                </div>

                <!-- Tabela responsiva -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-indigo-800 text-white">
                            <tr>
                                <!-- Paciente -->
                                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">
                                    <div class="flex items-center space-x-1 cursor-pointer hover:text-indigo-200 transition-colors"
                                        wire:click="sortBy('paciente_nome')">
                                        <span>Paciente</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                        </svg>
                                    </div>
                                </th>

                                <!-- Enfermeiro -->
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider w-1/5">
                                    <div class="flex items-center space-x-1 cursor-pointer hover:text-indigo-200 transition-colors"
                                        wire:click="sortBy('user_name')">
                                        <span>Enfermeiro</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                        </svg>
                                    </div>
                                </th>

                                <!-- Unidade de Saúde -->
                                <th class="px-2 py-3 text-left text-xs font-semibold uppercase tracking-wider w-1/6">
                                    <div class="flex items-center space-x-1 cursor-pointer hover:text-indigo-200 transition-colors"
                                        wire:click="sortBy('unidade_nome')">
                                        <span>Unidade</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                        </svg>
                                    </div>
                                </th>

                                <!-- Data de Atendimento -->
                                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">
                                    <div class="flex items-center space-x-1 cursor-pointer hover:text-indigo-200 transition-colors"
                                        wire:click="sortBy('created_at')">
                                        <span>Data de Atendimento</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                        </svg>
                                    </div>
                                </th>

                                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider">
                                    Última Atualização
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

                                    <!-- Paciente -->
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <div
                                                class="w-8 h-8 bg-indigo-600 rounded-full flex items-center justify-center text-white font-medium text-sm mr-3">
                                                {{ substr($questionario->paciente->nome, 0, 1) }}
                                            </div>
                                            <div>
                                                <div class="text-sm font-semibold text-gray-900">
                                                    {{ $questionario->paciente->nome }}</div>
                                                <div class="text-xs text-gray-500">Paciente</div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Enfermeiro -->
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div
                                                class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center text-white font-medium text-xs mr-3">
                                                {{ substr($questionario->user->name, 0, 1) }}
                                            </div>
                                            <span
                                                class="text-indigo-600 text-sm font-medium">{{ $questionario->user->name }}</span>
                                        </div>
                                    </td>

                                    <!-- Unidade de Saúde -->
                                    <td class="px-2 py-4">
                                        <span
                                            class="text-gray-900 text-sm font-medium">{{ $questionario->unidade_saude->nome }}</span>
                                    </td>

                                    <!-- Data de Atendimento -->
                                    <td class="px-4 py-4">
                                        <div class="flex flex-col">
                                            <span class="text-gray-900 text-sm font-medium">
                                                {{ $questionario->created_at->format('d/m/Y') }}
                                            </span>
                                            <span class="text-gray-500 text-xs">
                                                {{ $questionario->created_at->format('H:i') }}
                                            </span>
                                        </div>
                                    </td>

                                    <!-- Última Atualização -->
                                    <td class="px-4 py-4">
                                        <div class="flex flex-col">
                                            <span class="text-gray-900 text-sm font-medium">
                                                {{ $questionario->updated_at->format('d/m/Y') }}
                                            </span>
                                            <span class="text-gray-500 text-xs">
                                                {{ $questionario->updated_at->format('H:i') }}
                                            </span>
                                        </div>
                                    </td>

                                    <!-- Ações -->
                                    <td class="px-4 py-4">
                                        <div class="flex items-center justify-center space-x-2">
                                            <a href="{{ route('questionario.show', ['id' => $questionario->id]) }}"
                                                class="inline-flex items-center px-3 py-1.5 bg-indigo-600 text-white text-xs font-medium rounded hover:bg-indigo-700 transition-colors duration-150">
                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                Visualizar
                                            </a>

                                            @if (Auth::check() && Auth::user()->user_type === 'gerenciador')
                                                <button x-data=""
                                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-questionario-deletion-{{ $questionario->id }}'); @this.set('questionarioIdToDelete', {{ $questionario->id }})"
                                                    class="inline-flex items-center px-3 py-1.5 bg-red-600 text-white text-xs font-medium rounded hover:bg-red-700 transition-colors duration-150">
                                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                    Excluir
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal de confirmação melhorado -->
                                <x-new-modal name="confirm-questionario-deletion-{{ $questionario->id }}"
                                    :show="$errors->isNotEmpty()" focusable>
                                    <div class="p-8">
                                        <div class="text-center mb-6">
                                            <div
                                                class="w-16 h-16 mx-auto bg-red-100 rounded-full flex items-center justify-center mb-4">
                                                <svg class="w-8 h-8 text-red-600" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16c-.77.833.192 2.5 1.732 2.5z" />
                                                </svg>
                                            </div>
                                            <h2 class="text-2xl font-bold text-gray-900 mb-2">Confirmar Exclusão</h2>
                                            <p class="text-gray-600 mb-4">Você tem certeza de que deseja excluir este
                                                questionário?</p>
                                            <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6">
                                                <p class="text-sm text-red-800 font-medium">⚠️ Atenção: Esta ação é
                                                    irreversível!</p>
                                                <p class="text-sm text-red-700 mt-1">Os prontuários associados a este
                                                    questionário também serão excluídos.</p>
                                            </div>
                                        </div>

                                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                            <button x-on:click="$dispatch('close')"
                                                class="px-6 py-3 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 font-medium transition-colors duration-200">
                                                Cancelar
                                            </button>
                                            <button wire:click="deleteQuestionario" x-on:click="$dispatch('close')"
                                                class="px-6 py-3 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-lg hover:from-red-600 hover:to-red-700 font-medium transition-all duration-200 shadow-lg hover:shadow-xl">
                                                Excluir Questionário
                                            </button>
                                        </div>
                                    </div>
                                </x-new-modal>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Footer da tabela com paginação melhorada -->
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                        <!-- Seletor de itens por página -->
                        <div class="flex items-center space-x-2">
                            <label class="text-sm font-medium text-gray-700">Por página:</label>
                            <select wire:model.live='perPage'
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 px-3 py-1">
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>

                        <!-- Paginação -->
                        <div class="flex items-center">
                            {{ $questionarios->links('vendor.pagination.tailwind') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
