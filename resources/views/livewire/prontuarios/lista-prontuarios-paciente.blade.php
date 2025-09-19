<div class="relative flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
    <!-- Elementos decorativos de fundo -->
    <div class="absolute inset-0 pointer-events-none">
        <div
            class="w-full h-full bg-[radial-gradient(40%_40%_at_10%_10%,#c7d2fe33,transparent),radial-gradient(45%_45%_at_90%_15%,#e9d5ff33,transparent),radial-gradient(40%_40%_at_20%_90%,#fecdd733,transparent)]">
        </div>
    </div>
    <section class="relative z-10 p-8 mt-10">
        <div class="px-6 mx-auto max-w-7xl">
            <!-- Header da página -->
            <div class="mb-8 text-center">
                <div class="inline-block p-4 mb-4 backdrop-blur-sm rounded-xl">
                    <h1 class="mb-1 text-3xl font-bold text-indigo-900 md:text-4xl">
                        Gerenciamento de <span class="text-indigo-600">Prescrições</span>
                    </h1>
                    <div class="w-16 h-0.5 mx-auto bg-indigo-600 rounded-full"></div>
                </div>
                <p class="max-w-xl mx-auto text-lg text-gray-600">
                    Lista completa de prescrições criadas no sistema SoPeP
                </p>
            </div>

            <!-- Container principal com glass morphism -->
             <div class="overflow-hidden border shadow bg-white/90 rounded-xl border-white/30">
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
                                placeholder="Buscar por nome ou prontuário...">
                        </div>
                    </div>
                </div>

                <!-- Tabela responsiva -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="text-white bg-indigo-800">
                            <tr>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    <div class="flex items-center space-x-1">
                                        <span>Nome</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    Prontuário
                                </th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    <div class="flex items-center space-x-1">
                                        <span>Prescriçõs Associadas</span>
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
                            @foreach ($pacientes as $paciente)
                                <tr class="transition-colors duration-150 border-b border-gray-100 hover:bg-gray-50">
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-10 h-10 mr-3 text-sm font-medium text-white bg-indigo-600 rounded-full">
                                                {{ substr($paciente->nome, 0, 1) }}
                                            </div>
                                            <div>
                                                <div class="text-sm font-semibold text-gray-900">{{ $paciente->nome }}
                                                </div>
                                                <div class="text-xs text-gray-500">Paciente</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <span
                                            class="px-2 py-1 text-xs font-medium text-indigo-800 bg-indigo-100 rounded">
                                            {{ $paciente->prontuario }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-4 text-center align-middle">
                                        {{ $paciente->questionarios_count }}
                                    </td>
                                    <td class="flex items-center justify-end px-4 py-4 mr-5">
                                        <a href="{{ route('prontuario.paciente', ['paciente' => $paciente->id]) }}"
                                            class="inline-flex items-center px-3 py-1.5 bg-indigo-600 text-white text-xs font-medium rounded hover:bg-indigo-700 transition-colors duration-150">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>Visualizar Prescrições
                                        </a>
                                    </td>
                                </tr>
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

                        <!-- Informações de paginação - removido para manter dinâmico -->

                        <!-- Paginação -->
                        <div class="flex items-center">
                            {{ $pacientes->links('vendor.pagination.tailwind') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
