<div class="relative flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
    <!-- Fundo radial leve -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="w-full h-full bg-[radial-gradient(40%_40%_at_10%_10%,#c7d2fe33,transparent),radial-gradient(45%_45%_at_90%_15%,#e9d5ff33,transparent),radial-gradient(40%_40%_at_20%_90%,#fecdd733,transparent)]"></div>
    </div>

    <div class="relative z-10 flex-grow px-4 py-12 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="mb-12 text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 mb-4 bg-indigo-100 rounded-full">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h1 class="mb-4 text-4xl font-bold text-gray-900 md:text-5xl">
                    Entre em <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Contato</span>
                </h1>
                <p class="max-w-2xl mx-auto text-xl text-gray-600">
                    Estamos aqui para ajudar você a cuidar melhor dos seus pacientes com pé diabético
                </p>
            </div>

            <!-- Container principal -->
             <div class="overflow-hidden border shadow bg-white/90 rounded-xl border-white/30">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    
                    <!-- Formulário -->
                    <div class="p-8 md:p-12 lg:p-16">
                        <div class="mb-8">
                            <h2 class="mb-4 text-3xl font-bold text-gray-900">Envie sua Mensagem</h2>
                            <p class="text-lg leading-relaxed text-gray-600">
                                Tem alguma dúvida, sugestão ou deseja saber mais sobre o SoPeP?
                                <span class="font-medium text-indigo-600">Envie-nos uma mensagem!</span>
                            </p>
                        </div>

                        @if(session()->has('success'))
                        <div class="relative px-6 py-4 mb-8 text-green-800 border-l-4 border-green-400 rounded-lg bg-gradient-to-r from-green-50 to-green-100" role="alert">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div>
                                    <strong class="font-semibold">Sucesso!</strong>
                                    <span class="block ml-1 sm:inline">{{ session('success') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif

                        <form wire:submit.prevent="submit" class="space-y-8">
                            <!-- Nome -->
                            <div class="group">
                                <label for="nome" class="block mb-2 text-sm font-semibold text-gray-700 transition-colors group-focus-within:text-indigo-600">
                                    Nome Completo
                                </label>
                                <input type="text" wire:model="nome" id="nome"
                                    class="w-full px-4 py-4 text-gray-900 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 focus:border-indigo-500 focus:bg-white hover:border-gray-300"
                                    placeholder="Digite seu nome completo" required>
                                @error('nome')
                                <p class="flex items-center mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="group">
                                <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 transition-colors group-focus-within:text-indigo-600">
                                    Endereço de Email
                                </label>
                                <input type="email" wire:model="email" id="email"
                                    class="w-full px-4 py-4 text-gray-900 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 focus:border-indigo-500 focus:bg-white hover:border-gray-300"
                                    placeholder="seu.email@exemplo.com" required>
                                @error('email')
                                <p class="flex items-center mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Mensagem -->
                            <div class="group">
                                <label for="mensagem" class="block mb-2 text-sm font-semibold text-gray-700 transition-colors group-focus-within:text-indigo-600">
                                    Sua Mensagem
                                </label>
                                <textarea wire:model="mensagem" id="mensagem" rows="6"
                                    class="w-full px-4 py-4 text-gray-900 border-2 border-gray-200 resize-none rounded-xl focus:outline-none focus:ring-0 focus:border-indigo-500 focus:bg-white hover:border-gray-300"
                                    placeholder="Descreva sua dúvida, sugestão ou como podemos ajudá-lo..." required></textarea>
                                @error('mensagem')
                                <p class="flex items-center mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Botão -->
                            <div class="flex justify-center pt-4">
                                <button type="button" wire:click="submitForm"
                                    class="px-8 py-4 font-semibold text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl hover:scale-105 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                    Enviar Mensagem
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Informações de Contato -->
                    <div class="relative overflow-hidden text-white bg-gradient-to-br from-indigo-600 via-indigo-700 to-purple-800">
                        <div class="absolute inset-0 bg-black bg-opacity-10"></div>
                        <div class="relative z-10 flex flex-col justify-center items-center p-8 md:p-12 lg:p-16 min-h-[600px]">
                            <div class="p-6 mb-8 bg-white rounded-full bg-opacity-10 backdrop-blur-sm">
                                <img src="{{ asset('overshoes.svg') }}" alt="Contato SoPeP" class="w-24 h-24 md:w-32 md:h-32">
                            </div>

                            <div class="mb-8 text-center">
                                <h3 class="mb-4 text-3xl font-bold md:text-4xl">Fale Conosco</h3>
                                <p class="max-w-sm text-lg leading-relaxed text-indigo-100">
                                    Nossa equipe está pronta para esclarecer suas dúvidas sobre o tratamento de pé diabético
                                </p>
                            </div>

                            <div class="w-full max-w-sm space-y-6">
                                <!-- Contato Telefone -->
                                <div class="flex items-center p-4 space-x-4 bg-white bg-opacity-10 backdrop-blur-sm rounded-xl hover:bg-opacity-20">
                                    <div class="flex items-center justify-center w-12 h-12 bg-white rounded-full bg-opacity-20">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-white">Telefone</p>
                                        <p class="text-indigo-200">+55 (38) 99999-9999</p>
                                    </div>
                                </div>

                                <!-- Contato Email -->
                                <div class="flex items-center p-4 space-x-4 bg-white bg-opacity-10 backdrop-blur-sm rounded-xl hover:bg-opacity-20">
                                    <div class="flex items-center justify-center w-12 h-12 bg-white rounded-full bg-opacity-20">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-white">Email</p>
                                        <p class="text-indigo-200">diafeetofc@gmail.com</p>
                                    </div>
                                </div>

                                <!-- Contato Localização -->
                                <div class="flex items-center p-4 space-x-4 bg-white bg-opacity-10 backdrop-blur-sm rounded-xl hover:bg-opacity-20">
                                    <div class="flex items-center justify-center w-12 h-12 bg-white rounded-full bg-opacity-20">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 12.414a2 2 0 00-2.828 0l-4.243 4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-white">Localização</p>
                                        <p class="text-indigo-200">Montes Claros - MG</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8 text-center">
                                <p class="mb-4 text-sm text-indigo-200">Horário de Atendimento</p>
                                <p class="font-medium text-white">Segunda à Sexta: 8h às 18h</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
