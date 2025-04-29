<div class="min-h-screen px-6 py-8 bg-gradient-to-b from-indigo-50 via-gray-100 to-gray-200">
    <div class="max-w-6xl px-6 mx-auto">

        {{-- Título principal com destaque --}}
        <div class="relative flex flex-col items-center justify-center mb-12">
            <h1 class="text-5xl font-extrabold text-indigo-900 drop-shadow-md">
                Criar Prontuário
            </h1>
            <div class="w-24 h-1 mt-4 bg-indigo-500 rounded-full"></div>
        </div>

        {{-- Mensagens de sucesso/erro --}}
        @if (session()->has('success'))
        <div class="p-4 mb-6 text-green-800 bg-green-100 border border-green-300 rounded-lg shadow">
            {{ session('success') }}
        </div>
        @endif

        @if (session()->has('error'))
        <div class="p-4 mb-6 text-red-800 bg-red-100 border border-red-300 rounded-lg shadow">
            {{ session('error') }}
        </div>
        @endif

        {{-- Lista de Origens --}}
        @foreach ($origens as $origem)
        <div
            class="p-6 mb-10 transition bg-white border border-gray-300 shadow-md bg-opacity-90 rounded-2xl hover:shadow-lg">
            {{-- Título da Origem --}}
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">
                    Necessidade Humana Básica: {{ $origem['descricao'] }}
                </h2>
                <input type="checkbox" wire:click="toggleOrigem({{ $origem['id'] }})"
                    @if(in_array($origem['id'],$origensSelecionadas)) checked @endif
                    class="w-6 h-6 text-indigo-600 border-2 border-gray-400 rounded-lg focus:ring-2 focus:ring-indigo-500">
            </div>

            {{-- Diagnósticos --}}
            @foreach ($origem['diagnosticos_unicos'] as $diagnostico)
            <div x-data="{ open: false }" class="mb-4">
                {{-- Botão do Diagnóstico --}}
                <button @click="open = !open"
                    class="flex items-center justify-between w-full px-6 py-3 text-lg font-semibold text-indigo-800 transition bg-indigo-100 border border-indigo-300 rounded-lg hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    <span>{{ $diagnostico['descricao'] }}</span>
                    <svg :class="{'transform rotate-180': open}" class="w-5 h-5 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                {{-- Conteúdo expandido --}}
                <div x-show="open" x-transition class="p-6 mt-4 border border-gray-300 bg-gray-50 rounded-xl">
                    {{-- Checkbox do Diagnóstico --}}
                    <div class="flex items-center justify-between mb-4">
                        <p class="text-lg font-bold text-gray-700">{{ $diagnostico['descricao'] }}</p>
                        <input type="checkbox" wire:click="toggleDiagnostico({{ $diagnostico['id'] }})"
                            @if(in_array($diagnostico['id'], $diagnosticosSelecionados)) checked @endif
                            class="w-6 h-6 text-indigo-600 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                    </div>

                    {{-- Intervenções --}}
                    <div class="mb-6">
                        <p class="mb-2 text-sm font-medium text-gray-600">Intervenções:</p>
                        @foreach ($diagnostico['intervencaos'] as $intervencao)
                        <div
                            class="flex items-center justify-between p-2 mb-2 bg-white border border-gray-300 rounded-md hover:border-indigo-300">
                            <p class="text-gray-700">{{ $intervencao['descricao'] }}</p>
                            <input type="checkbox" wire:click="toggleIntervencao({{ $intervencao['id'] }})"
                                @if(in_array($intervencao['id'], $intervencoesSelecionadas)) checked @endif
                                class="w-5 h-5 text-indigo-600 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                        @endforeach
                    </div>

                    {{-- Indicadores Clínicos --}}
                    <div class="mt-6">
                        <p class="mb-2 text-lg font-bold text-indigo-700">Indicadores Clínicos:</p>
                        <ul class="ml-5 text-gray-700 list-disc list-inside">
                            @foreach ($origem['motivos'] as $motivoCheck)
                            @if (collect($motivoCheck['diagnosticos'])->pluck('id')->contains($diagnostico['id']))
                            <li>{{ $motivoCheck['descricao'] }}</li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        @endforeach

        {{-- Botão de Finalizar --}}
        <div class="flex justify-center mt-10">
            <button wire:click="finalizarProntuario"
                class="px-10 py-4 text-lg font-semibold text-white transition bg-indigo-700 rounded-xl hover:bg-indigo-800 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-indigo-400">
                Finalizar Prontuário
            </button>
        </div>
    </div>
</div>