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
                        Gerenciamento de <span class="text-indigo-600">Pacientes</span>
                    </h1>
                    <div class="w-16 h-0.5 mx-auto bg-indigo-600 rounded-full"></div>
                </div>
                <p class="max-w-xl mx-auto text-lg text-gray-600">
                    Lista completa de pacientes cadastrados no sistema SoPeP
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
                                placeholder="Buscar por nome, prontuário ou enfermeiro...">
                        </div>

                        <!-- Botão de adicionar paciente -->
                        <a href="{{ route('paciente.create') }}"
                            class="flex items-center px-6 py-3 font-medium text-white transition-all duration-200 transform bg-indigo-600 border border-indigo-500 rounded-lg shadow-md group hover:bg-indigo-700 hover:shadow-lg hover:scale-105">
                            <svg class="w-5 h-5 mr-2 transition-transform duration-200 group-hover:rotate-90"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Cadastrar Paciente
                        </a>
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
                                        <span>Nascimento</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                        </svg>
                                    </div>
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
                                    Cadastro
                                </th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    Atualização
                                </th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-center uppercase">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($pacientes as $paciente)
                                <tr wire:key="{{ $paciente->id }}"
                                    class="transition-colors duration-150 border-b border-gray-100 hover:bg-gray-50">
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
                                    <td class="px-4 py-4 text-sm font-medium text-gray-900">
                                        {{ \Carbon\Carbon::parse($paciente->data_nasc)->format('d/m/Y') }}
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center mr-2 text-xs font-medium text-white bg-green-600 rounded-full w-7 h-7">
                                                {{ substr($paciente->user->name, 0, 1) }}
                                            </div>
                                            <span
                                                class="text-sm font-medium text-indigo-600">{{ $paciente->user->name }}</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-xs text-gray-600">
                                        {{ $paciente->created_at->format('d/m/Y') }}
                                    </td>
                                    <td class="px-4 py-4 text-xs text-gray-600">
                                        {{ $paciente->updated_at->format('d/m/Y') }}
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center justify-center space-x-2">
                                            <a href="{{ route('paciente.show', ['id' => $paciente->id]) }}"
                                                class="inline-flex items-center px-3 py-1.5 bg-indigo-600 text-white text-xs font-medium rounded hover:bg-indigo-700 transition-colors duration-150">
                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>Ver
                                            </a>
                                            @if (Auth::check() && Auth::user()->user_type === 'gerenciador')
                                                <button x-data=""
                                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-paciente-deletion-{{ $paciente->id }}'); @this.set('pacienteIdToDelete', {{ $paciente->id }})"
                                                    class="inline-flex items-center px-3 py-1.5 bg-red-600 text-white text-xs font-medium rounded hover:bg-red-700 transition-colors duration-150">
                                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>Excluir
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal de confirmação melhorado -->
                                <x-new-modal name="confirm-paciente-deletion-{{ $paciente->id }}" :show="$errors->isNotEmpty()"
                                    focusable>
                                    <div class="p-8">
                                        <div class="mb-6 text-center">
                                            <div
                                                class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-red-100 rounded-full">
                                                <svg class="w-8 h-8 text-red-600" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16c-.77.833.192 2.5 1.732 2.5z" />
                                                </svg>
                                            </div>
                                            <h2 class="mb-2 text-2xl font-bold text-gray-900">Confirmar Exclusão</h2>
                                            <p class="mb-4 text-gray-600">Você tem certeza de que deseja excluir este
                                                paciente?</p>
                                            <div class="p-4 mb-6 border border-red-200 rounded-lg bg-red-50">
                                                <p class="text-sm font-medium text-red-800">⚠️ Atenção: Esta ação é
                                                    irreversível!</p>
                                                <p class="mt-1 text-sm text-red-700">Os questionários e prescrições
                                                    associados também serão excluídos.</p>
                                            </div>
                                        </div>

                                        <div class="flex flex-col justify-center gap-4 sm:flex-row">
                                            <button x-on:click="$dispatch('close')"
                                                class="px-6 py-3 font-medium text-gray-800 transition-colors duration-200 bg-gray-200 rounded-lg hover:bg-gray-300">
                                                Cancelar
                                            </button>
                                            <button wire:click="deletePaciente" x-on:click="$dispatch('close')"
                                                class="px-6 py-3 font-medium text-white transition-all duration-200 rounded-lg shadow-lg bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 hover:shadow-xl">
                                                Excluir Paciente
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
                            {{ $pacientes->links('vendor.pagination.tailwind') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
