<div>
    <section class="p-1 mt-10">
        <div class="max-w-screen-xl px-4 mx-auto lg:px-12">
            <!-- Start coding here -->
            <div class="relative overflow-hidden bg-white shadow-md sm:rounded-lg">
                <div class="flex items-center justify-between p-4 d">
                    <div class="flex">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 
                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input wire:model.live.debounce.300ms ="search" type="text"
                                class="block w-full py-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg px-80 bg-gray-50 focus:ring-primary-500 focus:border-primary-500 "
                                placeholder="Pesquise" required="">
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-sm text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3">
                                    Id Questionário
                                </th>
                                @include('components.table-sortable-th', [
                                    'nome' => 'paciente_nome',
                                    'displayName' => 'PACIENTE',
                                ])
                                @include('components.table-sortable-th', [
                                    'nome' => 'user_name',
                                    'displayName' => 'ENFERMEIRO',
                                ])
                                @include('components.table-sortable-th', [
                                    'nome' => 'created_at',
                                    'displayName' => 'DATA DE CADASTRO',
                                ])
                                <th scope="col" class="px-4 py-3">
                                    Diagnósticos
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questionarios as $questionario)
                                <tr wire:key="{{ $questionario->id }}" class="border-b">
                                    <td class="px-4 py-3">
                                        {{ $questionario->id }}</td>
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                                        {{ $questionario->paciente->nome }}</th>
                                    <td class="px-4 py-3 text-blue-500">{{ $questionario->user->name }}</td>
                                    <td class="px-4 py-3">{{ $questionario->created_at }}</td>
                                    //precisa adicionar aqui para pegar o número de prescrições associadas
                                    <td class="flex items-center justify-end px-4 py-3 mr-5">
                                        <button
                                            class="px-6 py-2 text-white bg-indigo-800 rounded hover:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Alterar</button>
                                        <button class="px-3 py-1 text-white bg-red-500 rounded">X</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="px-3 py-4">
                    <div class="flex ">
                        <div class="flex items-center mb-3 space-x-4">
                            <label class="w-40 p-1 text-sm font-medium text-gray-900">Por Página</label>
                            <select wire:model.live='perPage'
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        {{ $questionarios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
