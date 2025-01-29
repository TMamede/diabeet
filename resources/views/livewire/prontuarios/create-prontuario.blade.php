<div class="min-h-screen px-6 py-8 bg-gray-50">
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

    <!-- Título para Origens -->
    <h2 class="pb-2 mb-6 text-2xl font-bold text-gray-800 border-b border-gray-300">
        Origens Associadas
    </h2>

    <!-- Loop para exibir as origens -->
    @foreach ($origens as $origem)
    <div class="p-6 mt-6 bg-white border border-gray-200 rounded-lg shadow-md hover:border-indigo-300">
        <!-- Origem -->
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-medium text-gray-800">Origem: {{ $origem['descricao'] }}</h3>

            <!-- Checkbox para marcar/desmarcar origem -->
            <input type="checkbox" wire:click="toggleOrigem({{ $origem['id'] }})"
                @if (in_array($origem['id'], $origensSelecionadas)) checked @endif
                class="w-6 h-6 text-indigo-600 bg-gray-100 border-2 border-gray-400 rounded-lg focus:ring-2 focus:ring-indigo-500 hover:bg-gray-200">
        </div>

        <!-- Loop para exibir os motivos -->
        @foreach ($origem['motivos'] as $motivo)
        <div x-data="{ open: false }" class="mb-4">
            <!-- Botão de dropdown para Motivos -->
            <button @click="open = !open"
                class="w-1/6 px-4 py-2 text-sm font-medium text-indigo-700 border border-indigo-300 rounded-md bg-indigo-50 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-300">
                <span x-text="open ? 'Esconder Motivos' : 'Mostrar Motivos'"></span>
            </button>

            <!-- Motivos -->
            <div x-show="open" x-transition class="p-6 mt-4 border border-gray-200 rounded-lg shadow-md bg-gray-50">
                <div class="flex items-center justify-between mb-4">
                    <p class="text-base font-medium text-gray-800">{{ $motivo['descricao'] }}</p>

                    <!-- Checkbox para marcar/desmarcar motivo -->
                    <input type="checkbox" wire:click="toggleMotivo({{ $motivo['id'] }})"
                        @if (in_array($motivo['id'], $motivosSelecionados)) checked @endif
                        class="w-6 h-6 text-indigo-600 bg-gray-100 border-2 border-gray-400 rounded-lg focus:ring-2 focus:ring-indigo-500 hover:bg-gray-200">
                </div>

                <div class="mt-4 mb-6 ml-4">
                    <p class="text-gray-600">Diagnósticos:</p>
                </div>

                @forelse ($motivo['diagnosticos'] as $diagnostico)
                <div class="flex items-center justify-between p-4 mb-4 bg-gray-100 border border-gray-300 rounded-md hover:border-indigo-200">
                    <p class="text-base text-gray-800">{{ $diagnostico['descricao'] }}</p>

                    <!-- Checkbox para marcar/desmarcar diagnóstico -->
                    <input type="checkbox" wire:click="toggleDiagnostico({{ $diagnostico['id'] }})"
                        @if (in_array($diagnostico['id'], $diagnosticosSelecionados)) checked @endif
                        class="w-6 h-6 text-indigo-600 bg-gray-100 border-2 border-gray-400 rounded-lg focus:ring-2 focus:ring-indigo-500 hover:bg-gray-200">
                </div>
                @empty
                <p class="px-4 py-2 text-sm text-gray-500">Nenhum diagnóstico associado.</p>
                @endforelse
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

    <!-- Botão para Finalizar o Prontuário -->
    <div class="flex justify-center mt-8">
        <button wire:click="finalizarProntuario" 
                class="px-6 py-3 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            Finalizar Prontuário
        </button>
    </div>
</div>
