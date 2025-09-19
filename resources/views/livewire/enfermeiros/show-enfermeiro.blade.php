<div class="relative flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
    <!-- Elementos decorativos de fundo -->
    <div class="absolute inset-0 pointer-events-none">
  <div class="w-full h-full bg-[radial-gradient(40%_40%_at_10%_10%,#c7d2fe33,transparent),radial-gradient(45%_45%_at_90%_15%,#e9d5ff33,transparent),radial-gradient(40%_40%_at_20%_90%,#fecdd733,transparent)]"></div>
</div>

    <section class="relative z-10 p-8 mt-10">
        <div class="px-6 mx-auto max-w-7xl">
            <!-- Header da página -->
            <div class="mb-8 text-center">
                <div class="inline-block p-4 mb-4 backdrop-blur-sm rounded-xl">
                    <h1 class="mb-1 text-3xl font-bold text-indigo-900 md:text-4xl">
                        Gerenciamento de <span class="text-indigo-600">Enfermeiros</span>
                    </h1>
                    <div class="w-16 h-0.5 mx-auto bg-indigo-600 rounded-full"></div>
                </div>
                <p class="max-w-xl mx-auto text-lg text-gray-600">
                    Lista completa de enfermeiros cadastrados no sistema SoPeP
                </p>
            </div>

            <!-- Container principal com glass morphism -->
            <div class="overflow-hidden border shadow-lg bg-white/90 backdrop-blur-sm rounded-xl border-white/30">

                <!-- Barra de busca melhorada -->
                <div class="p-6 border-b border-gray-200 bg-gradient-to-r from-indigo-50 to-purple-50">
                    <div class="flex flex-col items-center justify-between gap-4 lg:flex-row">
                        <div class="relative flex-1 max-w-xl">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input wire:model.live.debounce.300ms="search" type="text"
                                class="block w-full py-3 pl-10 pr-4 text-sm text-gray-900 placeholder-gray-500 transition-all duration-200 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Buscar por nome, COREN ou e-mail...">
                        </div>
                    </div>
                </div>

                <!-- Tabela responsiva -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="text-white bg-indigo-800">
                            <tr>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    COREN
                                </th>
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
                                    <div class="flex items-center space-x-1">
                                        <span>E-mail</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    <div class="flex items-center space-x-1">
                                        <span>Data de Cadastro</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-center uppercase">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($enfermeiros as $enfermeiro)
                                <tr wire:key="{{ $enfermeiro->id }}"
                                    class="transition-colors duration-150 border-b border-gray-100 hover:bg-gray-50">
                                    <td class="px-4 py-4">
                                        <span
                                            class="px-3 py-1 text-sm font-medium text-green-800 bg-green-100 rounded-full">
                                            {{ $enfermeiro->coren }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-10 h-10 mr-3 text-sm font-medium text-white bg-green-600 rounded-full">
                                                {{ substr($enfermeiro->name, 0, 1) }}
                                            </div>
                                            <div>
                                                <div class="text-sm font-semibold text-gray-900">{{ $enfermeiro->name }}
                                                </div>
                                                <div class="text-xs text-gray-500">Enfermeiro(a)</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                            <span
                                                class="text-sm font-medium text-indigo-600">{{ $enfermeiro->email }}</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-600">
                                        {{ \Carbon\Carbon::parse($enfermeiro->created_at)->format('d/m/Y') }}
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center justify-center space-x-2">
                                            <button x-data=""
                                                x-on:click.prevent="$dispatch('open-modal', 'confirm-enfermeiro-deletion-{{ $enfermeiro->id }}'); @this.set('enfermeiroIdToDelete', {{ $enfermeiro->id }})"
                                                class="inline-flex items-center px-3 py-1.5 bg-red-600 text-white text-xs font-medium rounded hover:bg-red-700 transition-colors duration-150">
                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                                Excluir
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal de confirmação melhorado -->
                                <x-new-modal name="confirm-enfermeiro-deletion-{{ $enfermeiro->id }}" :show="$errors->isNotEmpty()"
                                    focusable>
                                    <div class="p-8">
                                        <div class="mb-6 text-center">
                                            <div
                                                class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-red-100 rounded-full">
                                                <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16c-.77.833.192 2.5 1.732 2.5z" />
                                                </svg>
                                            </div>
                                            <h2 class="mb-2 text-2xl font-bold text-gray-900">Confirmar Exclusão</h2>
                                            <p class="mb-4 text-gray-600">Você tem certeza de que deseja excluir este
                                                enfermeiro?</p>
                                            <div class="p-4 mb-6 border border-red-200 rounded-lg bg-red-50">
                                                <p class="text-sm font-medium text-red-800">⚠️ Atenção: Esta ação é
                                                    irreversível!</p>
                                                <p class="mt-1 text-sm text-red-700">Os pacientes, avaliações de
                                                    enfermagem e
                                                    prescrições associadas também serão excluídos.</p>
                                            </div>
                                        </div>

                                        <div class="flex flex-col justify-center gap-4 sm:flex-row">
                                            <button x-on:click="$dispatch('close')"
                                                class="px-6 py-3 font-medium text-gray-800 transition-colors duration-200 bg-gray-200 rounded-lg hover:bg-gray-300">
                                                Cancelar
                                            </button>
                                            <button wire:click="deleteEnfermeiro" x-on:click="$dispatch('close')"
                                                class="px-6 py-3 font-medium text-white transition-all duration-200 rounded-lg shadow-lg bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 hover:shadow-xl">
                                                Excluir Enfermeiro
                                            </button>
                                        </div>
                                    </div>
                                </x-new-modal>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Footer da tabela com paginação melhorada -->
                <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                    <div class="flex flex-col items-center justify-between gap-4 sm:flex-row">
                        <!-- Seletor de itens por página -->
                        <div class="flex items-center space-x-2">
                            <label class="text-sm font-medium text-gray-700">Por página:</label>
                            <select wire:model.live='perPage'
                                class="px-3 py-1 text-sm text-gray-900 bg-white border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>

                        <!-- Paginação -->
                        <div class="flex items-center">
                            {{ $enfermeiros->links('vendor.pagination.tailwind') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
