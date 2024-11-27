<div>
    <!-- Header com botão de salvar -->
    <div class="flex items-center justify-between p-4 bg-indigo-100">
        <h1 class="text-2xl font-bold">Prontuário - Questionário #{{ $questionarioId }}</h1>
        <button 
            wire:click="salvarProntuario"
            class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700"
            @disabled(!$statusProntuario)>
            Salvar Prontuário
        </button>
    </div>

    <!-- Navegação lateral -->
    <div class="flex">
        <aside class="w-1/4 p-4 bg-gray-100">
            <ul>
                @foreach ($origens as $origem)
                    <li>
                        <button 
                            wire:click="selectOrigem({{ $origem->id }})"
                            class="block w-full text-left px-4 py-2 rounded-lg {{ $statusOrigens[$origem->id] === 'green' ? 'bg-green-200' : 'bg-red-200' }}">
                            {{ $origem->nome }}
                        </button>
                    </li>
                @endforeach
            </ul>
        </aside>

        <!-- Conteúdo da origem selecionada -->
        <div class="w-3/4 p-4">
            @if ($selectedOrigem)
                <h2 class="text-xl font-semibold">{{ $selectedOrigem->nome }}</h2>

                @foreach ($selectedOrigem->motivos as $motivo)
                    <div class="p-4 mb-4 border rounded-lg">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-bold">{{ $motivo->nome }}</h3>
                            <div>
                                <button wire:click="confirmarMotivo({{ $motivo->id }})" class="text-green-500">Confirmar</button>
                                <button wire:click="deletarMotivo({{ $motivo->id }})" class="text-red-500">Deletar</button>
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="block font-medium">Diagnósticos:</label>
                            <ul>
                                @foreach ($motivo->diagnosticos as $diagnostico)
                                    <li class="flex items-center justify-between">
                                        <span>{{ $diagnostico->nome }}</span>
                                        <button wire:click="deletarDiagnostico({{ $diagnostico->id }})" class="text-red-500">Deletar</button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-gray-500">Selecione uma origem para visualizar os detalhes.</p>
            @endif
        </div>
    </div>
</div>