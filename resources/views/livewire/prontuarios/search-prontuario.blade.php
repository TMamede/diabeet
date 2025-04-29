<div class="mt-10">
    <div class="max-w-screen-xl px-4 mx-auto lg:px-12">
        <div class="relative overflow-hidden bg-white shadow-lg sm:rounded-lg">

            {{-- Cabeçalho bonito com nome do paciente --}}
            <div
                class="flex items-center justify-between px-6 py-5 text-white rounded-t-lg shadow bg-gradient-to-r from-indigo-800 to-indigo-600">
                <div class="flex items-center space-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 15c2.76 0 5.304.836 7.379 2.254M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>
                        <h2 class="text-3xl font-bold leading-tight">Prontuários do Paciente</h2>
                        <p class="text-xl text-gray-200">{{ $paciente->nome }}</p>
                    </div>
                </div>
            </div>

            {{-- Tabela --}}
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="text-xs text-gray-700 uppercase border-b bg-gray-50">
                        <tr>
                            <th class="px-4 py-3">ID Questionário</th>
                            <th class="px-4 py-3">Enfermeiro</th>
                            <th class="px-4 py-3">Data de Cadastro</th>
                            <th class="px-4 py-3 text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questionarios as $questionario)
                        <tr class="transition border-b hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $questionario->id }}</td>
                            <td class="px-4 py-3 font-medium text-indigo-600">{{ $questionario->user->name }}</td>
                            <td class="px-4 py-3">{{ \Carbon\Carbon::parse($questionario->created_at)->format('d/m/Y')
                                }}</td>
                            <td class="flex items-center justify-end px-4 py-3 space-x-2">
                                @if ($questionario->prontuario && $questionario->prontuario->gerado)
                                <button wire:click="gerarPDF('{{ $questionario->prontuario->id }}')"
                                    class="px-4 py-2 text-white transition bg-indigo-700 rounded shadow-sm hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-400">
                                    Visualizar
                                </button>
                                @else
                                <button wire:click="CreateProntuario('{{ $questionario->id }}')"
                                    class="px-4 py-2 text-white transition rounded shadow-sm bg-cyan-700 hover:bg-cyan-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-400">
                                    Criar
                                </button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Paginação e filtro --}}
            <div class="px-6 py-4 border-t bg-gray-50">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <label class="text-sm font-medium text-gray-700">Exibir por página:</label>
                        <select wire:model.live="perPage"
                            class="text-sm text-gray-900 border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                        </select>
                    </div>
                    <div>
                        {{ $questionarios->links('vendor.pagination.tailwind') }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>