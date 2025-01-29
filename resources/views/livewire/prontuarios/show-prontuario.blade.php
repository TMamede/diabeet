<div class="p-6 bg-white rounded-lg shadow-md">
    <h1 class="mb-4 text-2xl font-bold">Prontuário #{{ $prontuario->id }}</h1>
    <p class="mb-4">Data de Criação: {{ $prontuario->created_at->format('d/m/Y H:i') }}</p>

    <div class="mb-6">
        <h2 class="text-xl font-semibold">Origens:</h2>
        <ul class="pl-6 list-disc">
            @foreach ($prontuario->origens as $origem)
                <li>{{ $origem->descricao }}</li>
            @endforeach
        </ul>
    </div>

    <div class="mb-6">
        <h2 class="text-xl font-semibold">Motivos:</h2>
        <ul class="pl-6 list-disc">
            @foreach ($prontuario->motivos as $motivo)s
                <li>{{ $motivo->descricao }}</li>
            @endforeach
        </ul>
    </div>

    <div class="mb-6">
        <h2 class="text-xl font-semibold">Diagnósticos:</h2>
        <ul class="pl-6 list-disc">
            @foreach ($prontuario->diagnosticos as $diagnostico)
                <li>{{ $diagnostico->descricao }}</li>
            @endforeach
        </ul>
    </div>

    <button wire:click="gerarPdf" 
            class="px-6 py-3 font-bold text-white bg-indigo-600 rounded-lg hover:bg-indigo-700">
        Baixar PDF
    </button>
</div>
