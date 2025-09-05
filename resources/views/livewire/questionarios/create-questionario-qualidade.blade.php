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
                <h1 class="mb-4 text-4xl font-bold text-gray-800">Questionário de Qualidade de Vida</h1>
                <p class="mb-2 text-xl text-gray-600">Avaliação de bem-estar relacionado ao Diabetes</p>

            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-4xl mx-auto space-y-8">

            <!-- Seção Satisfação -->
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-emerald-500 to-teal-600">
                    <h2 class="text-2xl font-bold text-white">Satisfação</h2>
                </div>
                <div class="p-8 space-y-8">
                    <!-- Pergunta 1 -->
                    <div>
                        <label class="block mb-6 text-lg font-semibold text-gray-800">
                            Você está satisfeito(a) com a flexibilidade que você tem na sua dieta?
                        </label>
                        <div class="grid grid-cols-5 gap-4">
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-emerald-300 hover:bg-emerald-50 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-100">
                                <input type="radio" wire:model="flexibilidade" value="1" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">1</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Muito<br>Satisfeito</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-emerald-300 hover:bg-emerald-50 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-100">
                                <input type="radio" wire:model="flexibilidade" value="2" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">2</span>
                                <span
                                    class="text-sm leading-tight text-center text-gray-600">Bastante<br>Satisfeito</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-emerald-300 hover:bg-emerald-50 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-100">
                                <input type="radio" wire:model="flexibilidade" value="3" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">3</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Médio<br>Satisfeito</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-emerald-300 hover:bg-emerald-50 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-100">
                                <input type="radio" wire:model="flexibilidade" value="4" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">4</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Pouco<br>Satisfeito</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-emerald-300 hover:bg-emerald-50 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-100">
                                <input type="radio" wire:model="flexibilidade" value="5" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">5</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Nada<br>Satisfeito</span>
                            </label>
                        </div>
                        @error('flexibilidade')
                            <p class="flex items-center mt-3 text-sm text-red-600">
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
                    <div class="pt-6 border-t border-gray-200">
                        <label class="block mb-6 text-lg font-semibold text-gray-800">
                            Você está satisfeito(a) com sua vida sexual?
                        </label>
                        <div class="grid grid-cols-5 gap-4">
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-emerald-300 hover:bg-emerald-50 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-100">
                                <input type="radio" wire:model="vida_sexual" value="1" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">1</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Muito<br>Satisfeito</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-emerald-300 hover:bg-emerald-50 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-100">
                                <input type="radio" wire:model="vida_sexual" value="2" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">2</span>
                                <span
                                    class="text-sm leading-tight text-center text-gray-600">Bastante<br>Satisfeito</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-emerald-300 hover:bg-emerald-50 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-100">
                                <input type="radio" wire:model="vida_sexual" value="3" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">3</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Médio<br>Satisfeito</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-emerald-300 hover:bg-emerald-50 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-100">
                                <input type="radio" wire:model="vida_sexual" value="4" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">4</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Pouco<br>Satisfeito</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-emerald-300 hover:bg-emerald-50 has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-100">
                                <input type="radio" wire:model="vida_sexual" value="5" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">5</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Nada<br>Satisfeito</span>
                            </label>
                        </div>
                        @error('vida_sexual')
                            <p class="flex items-center mt-3 text-sm text-red-600">
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

            <!-- Seção Impacto -->
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-orange-500 to-red-500">
                    <h2 class="text-2xl font-bold text-white">Impacto</h2>
                </div>
                <div class="p-8 space-y-8">
                    <!-- Pergunta 1 -->
                    <div>
                        <label class="block mb-6 text-lg font-semibold text-gray-800">
                            Com que frequência sua diabetes interfere em seus exercícios físicos?
                        </label>
                        <div class="grid grid-cols-5 gap-4">
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="exercicio" value="1" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">1</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Nunca</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="exercicio" value="2" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">2</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Quase<br>Nunca</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="exercicio" value="3" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">3</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Às vezes</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="exercicio" value="4" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">4</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Quase<br>Sempre</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="exercicio" value="5" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">5</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Sempre</span>
                            </label>
                        </div>
                        @error('exercicio')
                            <p class="flex items-center mt-3 text-sm text-red-600">
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
                    <div class="pt-6 border-t border-gray-200">
                        <label class="block mb-6 text-lg font-semibold text-gray-800">
                            Com que frequência você se sente incomodado por ter diabetes?
                        </label>
                        <div class="grid grid-cols-5 gap-4">
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="incomodo" value="1" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">1</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Nunca</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="incomodo" value="2" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">2</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Quase<br>Nunca</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="incomodo" value="3" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">3</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Às vezes</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="incomodo" value="4" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">4</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Quase<br>Sempre</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="incomodo" value="5" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">5</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Sempre</span>
                            </label>
                        </div>
                        @error('incomodo')
                            <p class="flex items-center mt-3 text-sm text-red-600">
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
                    <div class="pt-6 border-t border-gray-200">
                        <label class="block mb-6 text-lg font-semibold text-gray-800">
                            Com que frequência você come algo que não deveria ao invés de dizer que tem diabetes?
                        </label>
                        <div class="grid grid-cols-5 gap-4">
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="comer" value="1" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">1</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Nunca</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="comer" value="2" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">2</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Quase<br>Nunca</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="comer" value="3" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">3</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Às vezes</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="comer" value="4" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">4</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Quase<br>Sempre</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-orange-300 hover:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-100">
                                <input type="radio" wire:model="comer" value="5" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">5</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Sempre</span>
                            </label>
                        </div>
                        @error('comer')
                            <p class="flex items-center mt-3 text-sm text-red-600">
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

            <!-- Seção Preocupações Social/Vocacional -->
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-purple-500 to-pink-500">
                    <h2 class="text-2xl font-bold text-white">Preocupações: Social / Vocacional</h2>
                </div>
                <div class="p-8">
                    <div>
                        <label class="block mb-6 text-lg font-semibold text-gray-800">
                            Com que frequência você se preocupa se irá ter filhos?
                        </label>
                        <div class="grid grid-cols-5 gap-4">
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-purple-300 hover:bg-purple-50 has-[:checked]:border-purple-500 has-[:checked]:bg-purple-100">
                                <input type="radio" wire:model="ter_filhos" value="1" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">1</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Nunca</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-purple-300 hover:bg-purple-50 has-[:checked]:border-purple-500 has-[:checked]:bg-purple-100">
                                <input type="radio" wire:model="ter_filhos" value="2" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">2</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Quase<br>Nunca</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-purple-300 hover:bg-purple-50 has-[:checked]:border-purple-500 has-[:checked]:bg-purple-100">
                                <input type="radio" wire:model="ter_filhos" value="3" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">3</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Às vezes</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-purple-300 hover:bg-purple-50 has-[:checked]:border-purple-500 has-[:checked]:bg-purple-100">
                                <input type="radio" wire:model="ter_filhos" value="4" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">4</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Quase<br>Sempre</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-purple-300 hover:bg-purple-50 has-[:checked]:border-purple-500 has-[:checked]:bg-purple-100">
                                <input type="radio" wire:model="ter_filhos" value="5" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">5</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Sempre</span>
                            </label>
                        </div>
                        @error('ter_filhos')
                            <p class="flex items-center mt-3 text-sm text-red-600">
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

            <!-- Seção Preocupações Relacionadas à Diabetes -->
            <div class="overflow-hidden border shadow-xl bg-white/80 backdrop-blur-sm rounded-2xl border-white/20">
                <div class="px-8 py-6 bg-gradient-to-r from-blue-500 to-indigo-600">
                    <h2 class="text-2xl font-bold text-white">Preocupações Relacionadas à Diabetes</h2>
                </div>
                <div class="p-8 space-y-8">
                    <!-- Pergunta 1 -->
                    <div>
                        <label class="block mb-6 text-lg font-semibold text-gray-800">
                            Com que frequência você se preocupa se virá a desmaiar?
                        </label>
                        <div class="grid grid-cols-5 gap-4">
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-blue-300 hover:bg-blue-50 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-100">
                                <input type="radio" wire:model="diabete" value="1" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">1</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Nunca</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-blue-300 hover:bg-blue-50 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-100">
                                <input type="radio" wire:model="diabete" value="2" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">2</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Quase<br>Nunca</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-blue-300 hover:bg-blue-50 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-100">
                                <input type="radio" wire:model="diabete" value="3" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">3</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Às vezes</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-blue-300 hover:bg-blue-50 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-100">
                                <input type="radio" wire:model="diabete" value="4" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">4</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Quase<br>Sempre</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-blue-300 hover:bg-blue-50 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-100">
                                <input type="radio" wire:model="diabete" value="5" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">5</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Sempre</span>
                            </label>
                        </div>
                        @error('diabete')
                            <p class="flex items-center mt-3 text-sm text-red-600">
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
                    <div class="pt-6 border-t border-gray-200">
                        <label class="block mb-6 text-lg font-semibold text-gray-800">
                            Com que frequência você se preocupa se terá complicações devidas a sua diabetes?
                        </label>
                        <div class="grid grid-cols-5 gap-4">
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-blue-300 hover:bg-blue-50 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-100">
                                <input type="radio" wire:model="complicacoes" value="1" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">1</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Nunca</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-blue-300 hover:bg-blue-50 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-100">
                                <input type="radio" wire:model="complicacoes" value="2" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">2</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Quase<br>Nunca</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-blue-300 hover:bg-blue-50 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-100">
                                <input type="radio" wire:model="complicacoes" value="3" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">3</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Às vezes</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-blue-300 hover:bg-blue-50 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-100">
                                <input type="radio" wire:model="complicacoes" value="4" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">4</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Quase<br>Sempre</span>
                            </label>
                            <label
                                class="flex flex-col items-center p-4 bg-gray-50 rounded-xl border-2 border-transparent cursor-pointer transition-all hover:border-blue-300 hover:bg-blue-50 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-100">
                                <input type="radio" wire:model="complicacoes" value="5" class="sr-only">
                                <span class="mb-2 text-2xl font-bold text-gray-700">5</span>
                                <span class="text-sm leading-tight text-center text-gray-600">Sempre</span>
                            </label>
                        </div>
                        @error('complicacoes')
                            <p class="flex items-center mt-3 text-sm text-red-600">
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

            <!-- Botão de Envio -->
            <div class="flex justify-center pt-8">
                <button type="button" wire:click="SalvarQualidade"
                    class="relative px-12 py-4 overflow-hidden font-bold text-white transition-all duration-300 ease-out shadow-2xl group bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 rounded-2xl hover:shadow-blue-500/30 hover:scale-105 active:scale-95">
                    <span
                        class="absolute inset-0 w-full h-full transition-opacity duration-300 opacity-0 bg-gradient-to-r from-purple-500 via-indigo-500 to-blue-500 group-hover:opacity-100"></span>
                    <span class="relative flex items-center text-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        Enviar Questionário
                    </span>
                </button>
            </div>
        </div>

    </div>
</div>
