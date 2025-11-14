<div class="relative flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
    <!-- Elementos decorativos -->
    <div class="absolute inset-0 pointer-events-none">
        <div
            class="w-full h-full bg-[radial-gradient(40%_40%_at_10%_10%,#c7d2fe33,transparent),radial-gradient(45%_45%_at_90%_15%,#e9d5ff33,transparent),radial-gradient(40%_40%_at_20%_90%,#fecdd733,transparent)]">
        </div>
    </div>

    <section class="relative z-10 p-6 mt-6 sm:p-8 sm:mt-10">
        <div class="px-2 mx-auto sm:px-6 max-w-7xl">
            <!-- Header -->
            <div class="mb-6 text-center sm:mb-8">
                <h1 class="mb-2 text-3xl font-bold leading-tight text-indigo-900 sm:text-4xl">
                    Gerenciamento de <span class="text-indigo-600">Pacientes</span>
                </h1>
                <p class="text-sm text-gray-600 sm:text-base">
                    {{ $pacientes->total() }} pacientes cadastrados
                </p>
            </div>

            <!-- Container principal -->
            <div class="overflow-hidden border shadow bg-white/90 rounded-2xl border-white/30">

                <!-- Busca + CTA -->
                <div class="p-4 border-b border-gray-200 sm:p-6 bg-gradient-to-r from-indigo-50 to-purple-50">
                    <div class="flex flex-col items-stretch gap-3 sm:flex-row sm:items-center sm:justify-between">
                        <!-- Input arredondado -->
                        <div class="relative w-full sm:max-w-xl">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input wire:model.live.debounce.300ms="search" type="text"
                                class="block w-full py-3 pl-12 pr-4 text-sm placeholder-gray-500 bg-white border border-gray-200 rounded-full shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Buscar por nome, pront...">
                        </div>

                        <!-- Botão pílula -->
                        <a href="{{ route('paciente.create') }}"
                            class="flex items-center px-6 py-3 font-medium text-white transition-all duration-200 transform bg-indigo-600 border border-indigo-500 rounded-lg shadow-md group hover:bg-indigo-700 hover:shadow-lg hover:scale-105">
                            <span class="mr-2 text-lg">＋</span> Cadastrar Paciente
                        </a>
                    </div>
                </div>

                <!-- LISTA MOBILE (cards) -->
                <div class="p-4 space-y-4 lg:hidden">
                    @foreach ($pacientes as $paciente)
                        <div class="relative p-6 bg-white border border-gray-100 shadow-sm rounded-2xl">
                            <!-- Ações em ícone (top-right) -->
                            <div class="absolute flex items-center gap-2 top-3 right-3">
                                <a href="{{ route('paciente.show', ['id' => $paciente->id]) }}"
                                    class="inline-flex items-center justify-center w-8 h-8 text-gray-500 transition border border-gray-200 rounded-full hover:text-indigo-600 hover:border-indigo-200"
                                    title="Ver">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                                @if (Auth::check() && Auth::user()->user_type === 'gerenciador')
                                    <button x-data
                                        x-on:click.prevent="$dispatch('open-modal', 'confirm-paciente-deletion-{{ $paciente->id }}'); @this.set('pacienteIdToDelete', {{ $paciente->id }})"
                                        class="inline-flex items-center justify-center w-8 h-8 text-gray-500 transition border border-gray-200 rounded-full hover:text-red-600 hover:border-red-200"
                                        title="Excluir">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                @endif
                            </div>

                            <!-- Avatar + nome -->
                            <div class="flex flex-col items-center text-center">
                                <div
                                    class="grid w-16 h-16 text-lg font-bold text-white bg-indigo-600 rounded-full shadow-sm place-items-center">
                                    {{ substr($paciente->nome, 0, 1) }}
                                </div>

                                <div class="mt-3 text-lg font-semibold text-gray-900">
                                    {{ $paciente->nome }}
                                </div>

                                <!-- Badge prontuário -->
                                <div class="mt-2">
                                    <span
                                        class="inline-flex items-center px-3 py-1 text-xs font-semibold text-indigo-700 bg-indigo-100 rounded-full">
                                        {{ $paciente->prontuario }}
                                    </span>
                                </div>

                                <!-- Linhas secundárias -->
                                <div class="mt-3 space-y-0.5 text-sm">
                                    <div class="text-gray-600">Enfermeiro</div>
                                    <div class="text-gray-500">{{ $paciente->user->name }}</div>
                                </div>

                                <!-- Info extra opcional -->
                                <div class="mt-3 text-xs text-gray-500">
                                    Nasc.: {{ \Carbon\Carbon::parse($paciente->data_nasc)->format('d/m/Y') }} •
                                    {{ $paciente->unidade_saude->nome }}
                                </div>
                            </div>
                        </div>

                        <!-- Modal (um por paciente) -->
                        <x-new-modal name="confirm-paciente-deletion-{{ $paciente->id }}" :show="$errors->isNotEmpty()" focusable>
                            <div class="p-8">
                                <div class="mb-6 text-center">
                                    <div
                                        class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-red-100 rounded-full">
                                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16c-.77.833.192 2.5 1.732 2.5z" />
                                        </svg>
                                    </div>
                                    <h2 class="mb-2 text-2xl font-bold text-gray-900">Confirmar Exclusão</h2>
                                    <p class="mb-4 text-gray-600">Você tem certeza de que deseja excluir este paciente?
                                    </p>
                                    <div class="p-4 mb-6 border border-red-200 rounded-lg bg-red-50">
                                        <p class="text-sm font-medium text-red-800">⚠️ Atenção: Esta ação é
                                            irreversível!</p>
                                        <p class="mt-1 text-sm text-red-700">As avaliações de enfermagem e prescrições
                                            associadas também serão excluídas.</p>
                                    </div>
                                </div>

                                <div class="flex flex-col justify-center gap-4 sm:flex-row">
                                    <button x-on:click="$dispatch('close')"
                                        class="px-6 py-3 font-medium text-gray-800 transition-colors duration-200 bg-gray-200 rounded-lg hover:bg-gray-300">
                                        Cancelar
                                    </button>
                                    @if (Auth::check() && Auth::user()->user_type === 'gerenciador')
                                                <button x-data
                                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-paciente-deletion-{{ $paciente->id }}'); @this.set('pacienteIdToDelete', {{ $paciente->id }})"
                                                    class="px-6 py-3 font-medium text-white transition-all duration-200 rounded-lg shadow-lg bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 hover:shadow-xl">
                                                    Excluir
                                                </button>
                                            @endif
                                </div>
                            </div>
                        </x-new-modal>
                    @endforeach
                </div>

                <!-- TABELA (md+) mantém seu layout desktop -->
                <div class="hidden overflow-x-auto lg:block">
                    <table class="w-full min-w-[760px]">
                        <thead class="text-white bg-indigo-800">
                            <tr>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">Nome</th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    Prontuário</th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    Nascimento</th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    Enfermeiro</th>
                                <th class="w-1/6 px-2 py-3 text-xs font-semibold tracking-wider text-left uppercase">
                                    Unidade</th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-left uppercase">Cadastro
                                </th>
                                <th class="px-4 py-3 text-xs font-semibold tracking-wider text-center uppercase">Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            @foreach ($pacientes as $paciente)
                                <tr wire:key="{{ $paciente->id }}"
                                    class="transition-colors duration-150 hover:bg-gray-50">
                                    <td class="px-4 py-4">
                                        <div class="flex items-center min-w-0">
                                            <div
                                                class="flex items-center justify-center w-10 h-10 mr-3 text-sm font-medium text-white bg-indigo-600 rounded-full">
                                                {{ substr($paciente->nome, 0, 1) }}
                                            </div>
                                            <div class="min-w-0">
                                                <div class="text-sm font-semibold text-gray-900 truncate">
                                                    {{ $paciente->nome }}</div>
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
                                        <div class="flex items-center min-w-0">
                                            <div
                                                class="flex items-center justify-center mr-2 text-xs font-medium text-white bg-green-600 rounded-full w-7 h-7">
                                                {{ substr($paciente->user->name, 0, 1) }}
                                            </div>
                                            <span
                                                class="text-sm font-medium text-indigo-600 truncate">{{ $paciente->user->name }}</span>
                                        </div>
                                    </td>
                                    <td class="px-2 py-4">
                                        <span
                                            class="text-sm font-medium text-gray-900 truncate">{{ $paciente->unidade_saude->nome }}</span>
                                    </td>
                                    <td class="px-4 py-4 text-xs text-gray-600">
                                        {{ $paciente->created_at->format('d/m/Y') }}
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center justify-center gap-2">
                                            <a href="{{ route('paciente.show', ['id' => $paciente->id]) }}"
                                                class="inline-flex items-center px-3 py-1.5 bg-indigo-600 text-white text-xs font-medium rounded hover:bg-indigo-700 transition-colors duration-150">
                                                Ver
                                            </a>
                                            @if (Auth::check() && Auth::user()->user_type === 'gerenciador')
                                                <button x-data
                                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-paciente-deletion-{{ $paciente->id }}'); @this.set('pacienteIdToDelete', {{ $paciente->id }})"
                                                    class="inline-flex items-center px-3 py-1.5 bg-red-600 text-white text-xs font-medium rounded hover:bg-red-700 transition-colors duration-150">
                                                    Excluir
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Rodapé / paginação -->
                <div class="px-4 py-4 border-t border-gray-200 sm:px-6 bg-gray-50">
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
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
                        <div class="flex items-center overflow-x-auto">
                            {{ $pacientes->links('vendor.pagination.tailwind') }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
