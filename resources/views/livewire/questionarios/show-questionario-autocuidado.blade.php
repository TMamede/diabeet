<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100">
    <!-- Background decorative elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute rounded-full bg-blue-200/30 top-20 left-10 w-72 h-72 mix-blend-multiply filter blur-2xl animate-pulse">
        </div>
        <div
            class="absolute delay-1000 rounded-full bg-indigo-200/20 top-40 right-16 w-80 h-80 mix-blend-multiply filter blur-2xl animate-pulse">
        </div>
        <div
            class="absolute w-64 h-64 delay-500 rounded-full bg-purple-200/25 bottom-20 left-1/4 mix-blend-multiply filter blur-2xl animate-pulse">
        </div>
    </div>

    <div class="relative z-10 px-4 py-12">
        <!-- Header -->
        <div class="max-w-4xl mx-auto mb-12">
            <div class="text-center">
                <div
                    class="inline-flex items-center justify-center w-16 h-16 mb-6 rounded-full shadow-lg bg-gradient-to-r from-blue-500 to-indigo-600">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                </div>
                <h1 class="mb-4 text-4xl font-bold text-gray-800">Questionário de Autocuidado</h1>
                <p class="mb-2 text-xl text-gray-600">Avaliação de cuidados diários no diabetes</p>
                <p class="text-sm text-gray-500">Preencha as questões abaixo com base nos últimos 7 dias</p>
            </div>
        </div>
        <div class="max-w-4xl mx-auto">
<div class="flex justify-start mb-6 mt-14">
            <button type="button" wire:click="backToShow"
                class="relative py-4 pl-2 pr-4 text-lg font-semibold text-white transition-all duration-300 transform shadow-lg group bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-2xl hover:shadow-xl hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                <span class="relative z-10 flex items-center">
                    <svg class="w-5 text-white h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                    Voltar
                </span>
                <div
                    class="absolute inset-0 transition-opacity duration-300 opacity-0 bg-gradient-to-r from-blue-700 to-indigo-800 rounded-2xl group-hover:opacity-100">
                </div>
            </button>
        </div>
</div>
        <!-- Main Content -->
        <div class="max-w-4xl mx-auto space-y-8">
            <fieldset disabled>

            <!-- Seção Alimentação Geral -->
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-emerald-500 to-teal-600">
                    <h2 class="flex items-center text-2xl font-bold text-white">

                        Alimentação Geral
                    </h2>
                </div>
                <div class="p-8 space-y-8">
                    <!-- Pergunta 1 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS seguiu uma dieta saudável?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-emerald-300 hover:bg-emerald-50 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-100">
                                    <input type="radio" wire:model="dieta" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('dieta')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Pergunta 2 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Durante o último mês, QUANTOS DIAS POR SEMANA, em média, seguiu a orientação alimentar dada
                            por um profissional de saúde?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-emerald-300 hover:bg-emerald-50 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-100">
                                    <input type="radio" wire:model="orientacao" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('orientacao')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Seção Alimentação Específica -->
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-orange-500 to-red-500">
                    <h2 class="flex items-center text-2xl font-bold text-white">

                        Alimentação Específica
                    </h2>
                </div>
                <div class="p-8 space-y-8">
                    <!-- Pergunta 1 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS comeu cinco ou mais porções de frutas e/ou vegetais?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                    <input type="radio" wire:model="frutas" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('frutas')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Pergunta 2 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS comeu alimentos ricos em gordura, como carnes vermelhas ou
                            alimentos com leite integral ou derivados?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                    <input type="radio" wire:model="gorduras" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('gorduras')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Pergunta 3 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS comeu doces?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                    <input type="radio" wire:model="doces" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('doces')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Seção Atividade Física -->
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-purple-500 to-pink-500">
                    <h2 class="flex items-center text-2xl font-bold text-white">

                        Atividade Física
                    </h2>
                </div>
                <div class="p-8 space-y-8">
                    <!-- Pergunta 1 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS realizou atividade física durante pelo menos 30 minutos?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-purple-300 hover:bg-purple-50 has-[:checked]:border-purple-500 has-[:checked]:bg-purple-100">
                                    <input type="radio" wire:model="realizou" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('realizou')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Pergunta 2 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS praticou algum tipo de exercício físico específico (nadar,
                            caminhar, andar de bicicleta)?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-purple-300 hover:bg-purple-50 has-[:checked]:border-purple-500 has-[:checked]:bg-purple-100">
                                    <input type="radio" wire:model="especifico" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('especifico')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Seção Monitoramento da Glicemia -->
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-cyan-500 to-blue-600">
                    <h2 class="flex items-center text-2xl font-bold text-white">

                        Monitoramento da Glicemia
                    </h2>
                </div>
                <div class="p-8 space-y-8">
                    <!-- Pergunta 1 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS avaliou o açúcar no sangue?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-cyan-300 hover:bg-cyan-50 has-[:checked]:border-cyan-500 has-[:checked]:bg-cyan-100">
                                    <input type="radio" wire:model="avaliou" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('avaliou')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Pergunta 2 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS avaliou o açúcar no sangue o número de vezes recomendado
                            pelo médico ou enfermeiro?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-cyan-300 hover:bg-cyan-50 has-[:checked]:border-cyan-500 has-[:checked]:bg-cyan-100">
                                    <input type="radio" wire:model="recomendado" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('recomendado')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Seção Cuidado com os Pés -->
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-yellow-500 to-orange-500">
                    <h2 class="flex items-center text-2xl font-bold text-white">

                        Cuidado com os Pés
                    </h2>
                </div>
                <div class="p-8 space-y-8">
                    <!-- Pergunta 1 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS examinou os seus pés?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-yellow-300 hover:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:bg-yellow-100">
                                    <input type="radio" wire:model="pes" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('pes')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Pergunta 2 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS examinou dentro dos sapatos antes de calçá-los?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-yellow-300 hover:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:bg-yellow-100">
                                    <input type="radio" wire:model="sapatos" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('sapatos')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Pergunta 3 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS secou os espaços entre os dedos dos pés depois de lavá-los?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-yellow-300 hover:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:bg-yellow-100">
                                    <input type="radio" wire:model="dedos" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('dedos')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Seção Medicação -->
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-rose-500 to-pink-600">
                    <h2 class="flex items-center text-2xl font-bold text-white">

                        Medicação
                    </h2>
                </div>
                <div class="p-8 space-y-8">
                    <!-- Pergunta 1 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS tomou seus medicamentos do diabetes, conforme foi
                            recomendado?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-rose-300 hover:bg-rose-50 has-[:checked]:border-rose-500 has-[:checked]:bg-rose-100">
                                    <input type="radio" wire:model="medicamentos" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('medicamentos')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Pergunta 2 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS tomou suas injeções de insulina, conforme foi recomendado?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-rose-300 hover:bg-rose-50 has-[:checked]:border-rose-500 has-[:checked]:bg-rose-100">
                                    <input type="radio" wire:model="injecoes" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('injecoes')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Pergunta 3 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Em quantos dos últimos SETE DIAS tomou o número indicado de comprimidos do diabetes?
                        </label>
                        <div class="grid grid-cols-8 gap-3">
                            @for ($i = 0; $i <= 7; $i++)
                                <label
                                    class="flex flex-col items-center p-3 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-rose-300 hover:bg-rose-50 has-[:checked]:border-rose-500 has-[:checked]:bg-rose-100">
                                    <input type="radio" wire:model="comprimidos" value="{{ $i }}"
                                        class="sr-only">
                                    <span class="text-2xl font-bold text-gray-700">{{ $i }}</span>
                                    <span
                                        class="mt-1 text-xs text-gray-500">{{ $i == 0 ? 'Nenhum' : ($i == 1 ? 'dia' : 'dias') }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('comprimidos')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Seção Tabagismo -->
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-gray-600 to-slate-700">
                    <h2 class="flex items-center text-2xl font-bold text-white">

                        Tabagismo
                    </h2>
                </div>
                <div class="p-8 space-y-8">
                    <!-- Pergunta 1 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Você fumou um cigarro − ainda que só uma tragada − durante os últimos sete dias?
                        </label>
                        <div class="flex gap-6">
                            <label
                                class="flex items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-gray-300 hover:bg-gray-100 has-[:checked]:border-gray-500 has-[:checked]:bg-gray-100">
                                <input type="radio" wire:model="fumou" value="1" class="sr-only">
                                <span
                                    class="flex items-center justify-center w-5 h-5 mr-3 border-2 border-gray-400 rounded-full">
                                    <span
                                        class="w-2.5 h-2.5 bg-gray-600 rounded-full opacity-0 transition-opacity duration-200"></span>
                                </span>
                                <span class="text-lg font-medium text-gray-700">Sim</span>
                            </label>
                            <label
                                class="flex items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-gray-300 hover:bg-gray-100 has-[:checked]:border-gray-500 has-[:checked]:bg-gray-100">
                                <input type="radio" wire:model="fumou" value="0" class="sr-only">
                                <span
                                    class="flex items-center justify-center w-5 h-5 mr-3 border-2 border-gray-400 rounded-full">
                                    <span
                                        class="w-2.5 h-2.5 bg-gray-600 rounded-full opacity-0 transition-opacity duration-200"></span>
                                </span>
                                <span class="text-lg font-medium text-gray-700">Não</span>
                            </label>
                        </div>
                        @error('fumou')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Pergunta 2 -->
                    <div>
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Se sim, quantos cigarros fuma, habitualmente, num dia?
                        </label>
                        <div class="relative">
                            <input type="number" wire:model="num_cigarros" min="0"
                                class="w-full px-4 py-3 text-gray-700 transition-all duration-200 bg-white border-2 border-gray-200 md:w-2/3 rounded-xl focus:border-gray-500 focus:ring-2 focus:ring-gray-200 focus:outline-none"
                                placeholder="Digite o número de cigarros">

                        </div>
                        @error('num_cigarros')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Pergunta 3 -->
                    <div class="p-6 border border-gray-200 bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl">
                        <label class="block mb-4 text-lg font-semibold text-gray-800">
                            Quando fumou o seu último cigarro?
                        </label>
                        <div class="relative">
                            <select wire:model="quando_fumou"
                                class="w-full px-4 py-3 text-gray-700 transition-all duration-200 bg-white border-2 border-gray-200 appearance-none rounded-xl focus:border-gray-500 focus:ring-2 focus:ring-gray-200 focus:outline-none">
                                <option value="">Selecione uma opção</option>
                                @foreach ($dataFumos as $dataFumo)
                                    <option value="{{ $dataFumo->id }}">{{ $dataFumo->descricao }}</option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                        @error('quando_fumou')
                            <p class="flex items-center mt-2 text-sm text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>
            </fieldset>
        </div>
    </div>
</div>
