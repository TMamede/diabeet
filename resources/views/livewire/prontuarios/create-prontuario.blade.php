<div class="min-h-screen px-6 py-8 bg-gray-50">
    <h1 class="text-2xl font-bold text-indigo-600">Criar Prontuário</h1>

    <p class="mt-4 text-sm text-gray-700">
        <span class="text-lg font-semibold text-gray-900">Questionário ID:</span> {{ $questionarioId }}
    </p>


    <h2 class="mt-8 text-xl font-bold text-gray-800 border-b border-gray-300">Origens Associadas</h2>

    @foreach ($origens as $index => $origem)
    <div class="p-5 mt-6 bg-white border border-gray-200 rounded-lg shadow-lg">
        <h3 class="text-lg font-semibold text-gray-700">Origem {{ $index + 1 }}</h3>
        <div class="mt-4">
            <label for="origens.{{ $index }}.descricao" class="block text-sm font-medium text-gray-700">
                Descrição
            </label>
            <input type="text" wire:model="origens.{{ $index }}.descricao" id="origens.{{ $index }}.descricao"
                class="block w-full p-3 mt-2 text-sm placeholder-gray-400 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 bg-gray-50"
                placeholder="Digite a origem">
        </div>
    </div>
    @endforeach

    <h2 class="mt-12 text-xl font-bold text-gray-800 border-b border-gray-300">Motivos Associados</h2>

    @foreach ($motivos as $index => $motivo)
    <div class="p-5 mt-6 bg-white border border-gray-200 rounded-lg shadow-lg">
        <h3 class="text-lg font-semibold text-gray-700">Motivo {{ $index + 1 }}</h3>
        <div class="mt-4">
            <label for="motivos.{{ $index }}.descricao" class="block text-sm font-medium text-gray-700">
                Descrição
            </label>
            <input type="text" wire:model="motivos.{{ $index }}.descricao" id="motivos.{{ $index }}.descricao"
                class="block w-full p-3 mt-2 text-sm placeholder-gray-400 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 bg-gray-50"
                placeholder="Digite o motivo">
        </div>
        <div class="mt-4">
            <label for="motivos.{{ $index }}.origem_id" class="block text-sm font-medium text-gray-700">
                Id da Origem Associda
            </label>
            <input type="text" wire:model="motivos.{{ $index }}.origem_id" id="motivos.{{ $index }}.origem_id"
                class="block w-full p-3 mt-2 text-sm placeholder-gray-400 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 bg-gray-50"
                placeholder="Digite o motivo">
        </div>
    </div>
    @endforeach
</div>