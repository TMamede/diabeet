<div class="min-h-screen py-8 px-28 bg-gray-50">
    <!-- Mensagens de Sucesso ou Erro -->
    @if (session()->has('success'))
        <div class="p-4 mb-6 text-green-800 bg-green-100 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="p-4 mb-6 text-red-800 bg-red-100 rounded-lg">
            {{ session('error') }}
        </div>
    @endif

    <!-- Título principal -->
    <h1 class="mb-8 text-4xl font-extrabold text-center text-gray-900">Criar Prontuário</h1>

    <!-- Loop para exibir as origens -->
    @foreach ($origens as $origem)
    <div class="p-6 mt-6 bg-white border border-gray-200 rounded-lg shadow-md hover:border-indigo-300">
        <!-- Origem -->
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-2xl font-bold text-gray-800">Origem: {{ $origem['descricao'] }}</h3>
            <input type="checkbox" wire:click="toggleOrigem({{ $origem['id'] }})"
                @if (in_array($origem['id'], $origensSelecionadas)) checked @endif
                class="w-6 h-6 text-indigo-600 bg-gray-100 border-2 border-gray-400 rounded-lg focus:ring-2 focus:ring-indigo-500 hover:bg-gray-200">
        </div>

        <!-- Loop para exibir os motivos -->
        @foreach ($origem['motivos'] as $motivo)
        <div x-data="{ open: false }" class="mb-4">
            <button @click="open = !open"
                class="w-1/6 px-4 py-2 text-sm font-medium text-indigo-700 border border-indigo-300 rounded-md bg-indigo-50 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-300">
                <span x-text="open ? 'Esconder Motivo' : 'Mostrar Motivo'"></span>
            </button>

            <div x-show="open" x-transition class="p-6 mt-4 border border-gray-200 rounded-lg shadow-md bg-gray-50">
                <div class="flex items-center justify-between mb-4">
                    <p class="text-xl font-semibold text-gray-800">{{ $motivo['descricao'] }}</p>
                    <input type="checkbox" wire:click="toggleMotivo({{ $motivo['id'] }})"
                        @if (in_array($motivo['id'], $motivosSelecionados)) checked @endif
                        class="w-6 h-6 text-indigo-600 bg-gray-100 border-2 border-gray-400 rounded-lg focus:ring-2 focus:ring-indigo-500 hover:bg-gray-200">
                </div>

                <p class="mb-2 ml-1">Diagnosticos:</p>

                <!-- Diagnósticos -->
                @foreach ($motivo['diagnosticos'] as $diagnostico)
                <div class="p-4 mb-4 bg-gray-100 border border-gray-300 rounded-md hover:border-indigo-200">
                    <div class="flex items-center justify-between">
                        <p class="text-lg font-medium text-gray-800">{{ $diagnostico['descricao'] }}</p>
                        <input type="checkbox" wire:click="toggleDiagnostico({{ $diagnostico['id'] }})"
                            @if (in_array($diagnostico['id'], $diagnosticosSelecionados)) checked @endif
                            class="w-6 h-6 text-indigo-600 bg-gray-100 border-2 border-gray-400 rounded-lg focus:ring-2 focus:ring-indigo-500 hover:bg-gray-200">
                    </div>

                    <!-- Intervenções -->
                    <div class="mt-3">
                        <p class="text-gray-600">Intervenções:</p>
                        @foreach ($diagnostico['intervencaos'] as $intervencao)
                        <div class="flex items-center justify-between p-2 mt-2 bg-white border border-gray-300 rounded-md hover:border-indigo-200">
                            <p class="text-sm text-gray-700">{{ $intervencao['descricao'] }}</p>
                            <input type="checkbox" wire:click="toggleIntervencao({{ $intervencao['id'] }})"
                                @if (in_array($intervencao['id'], $intervencoesSelecionadas)) checked @endif
                                class="w-5 h-5 text-indigo-600 bg-gray-100 border-2 border-gray-400 rounded-lg focus:ring-2 focus:ring-indigo-500 hover:bg-gray-200">
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

    <!-- Botão para Finalizar o Prontuário -->
<div class="flex justify-center my-8">
    <button wire:click="finalizarProntuario" 
            class="px-8 py-4 text-lg font-medium text-white transition-all duration-300 bg-indigo-700 shadow-md rounded-xl hover:bg-indigo-800 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-indigo-500">
        Finalizar Prontuário
    </button>
</div>
</div>
