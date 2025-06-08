<div class="relative flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
    <!-- Elementos decorativos de fundo -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute bg-indigo-200 rounded-full top-10 left-10 w-72 h-72 mix-blend-multiply filter blur-xl opacity-30 ">
        </div>
        <div
            class="absolute bg-purple-200 rounded-full opacity-25 top-20 right-10 w-80 h-80 mix-blend-multiply filter blur-xl ">
        </div>
        <div
            class="absolute w-64 h-64 bg-pink-200 rounded-full bottom-10 left-20 mix-blend-multiply filter blur-xl opacity-20">
        </div>
    </div>

    <div class="relative z-10 flex-grow px-4 py-12 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Header Section -->
            <div class="mb-12 text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 mb-4 bg-indigo-100 rounded-full">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h1 class="mb-4 text-4xl font-bold text-gray-900 md:text-5xl">
                    Entre em <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Contato</span>
                </h1>
                <p class="max-w-2xl mx-auto text-xl text-gray-600">
                    Estamos aqui para ajudar você a cuidar melhor dos seus pacientes com pé diabético
                </p>
            </div>

            <div
                class="overflow-hidden bg-white border shadow-2xl rounded-3xl backdrop-blur-sm bg-white/95 border-white/20">
                <div class="grid grid-cols-1 lg:grid-cols-2">

                    <!-- Formulário de Contato -->
                    <div class="p-8 md:p-12 lg:p-16">
                        <div class="mb-8">
                            <h2 class="mb-4 text-3xl font-bold text-gray-900">Envie sua Mensagem</h2>
                            <p class="text-lg leading-relaxed text-gray-600">
                                Tem alguma dúvida, sugestão ou deseja saber mais sobre o SoPeP?
                                <span class="font-medium text-indigo-600">Envie-nos uma mensagem!</span>
                            </p>
                        </div>

                        @if (session()->has('success'))
                            <div class="relative px-6 py-4 mb-8 text-green-800 border-l-4 border-green-400 rounded-lg shadow-sm bg-gradient-to-r from-green-50 to-green-100"
                                role="alert">
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
                            <div class="group">
                                <label for="nome"
                                    class="block mb-2 text-sm font-semibold text-gray-700 transition-colors group-focus-within:text-indigo-600">
                                    Nome Completo
                                </label>
                                <div class="relative">
                                    <input type="text" wire:model="nome" id="nome"
                                        class="w-full px-4 py-4 text-gray-900 transition-all duration-200 border-2 border-gray-200 shadow-sm bg-gray-50 rounded-xl focus:outline-none focus:ring-0 focus:border-indigo-500 focus:bg-white focus:shadow-lg hover:border-gray-300"
                                        placeholder="Digite seu nome completo" required>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400 transition-colors group-focus-within:text-indigo-500"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                </div>
                                @error('nome')
                                    <p class="flex items-center mt-2 text-sm text-red-600">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="group">
                                <label for="email"
                                    class="block mb-2 text-sm font-semibold text-gray-700 transition-colors group-focus-within:text-indigo-600">
                                    Endereço de Email
                                </label>
                                <div class="relative">
                                    <input type="email" wire:model="email" id="email"
                                        class="w-full px-4 py-4 text-gray-900 transition-all duration-200 border-2 border-gray-200 shadow-sm bg-gray-50 rounded-xl focus:outline-none focus:ring-0 focus:border-indigo-500 focus:bg-white focus:shadow-lg hover:border-gray-300"
                                        placeholder="seu.email@exemplo.com" required>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400 transition-colors group-focus-within:text-indigo-500"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                </div>
                                @error('email')
                                    <p class="flex items-center mt-2 text-sm text-red-600">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="group">
                                <label for="mensagem"
                                    class="block mb-2 text-sm font-semibold text-gray-700 transition-colors group-focus-within:text-indigo-600">
                                    Sua Mensagem
                                </label>
                                <div class="relative">
                                    <textarea wire:model="mensagem" id="mensagem" rows="6"
                                        class="w-full px-4 py-4 text-gray-900 transition-all duration-200 border-2 border-gray-200 shadow-sm resize-none bg-gray-50 rounded-xl focus:outline-none focus:ring-0 focus:border-indigo-500 focus:bg-white focus:shadow-lg hover:border-gray-300"
                                        placeholder="Descreva sua dúvida, sugestão ou como podemos ajudá-lo..." required></textarea>
                                    <div class="absolute pointer-events-none top-4 right-4">
                                        <svg class="w-5 h-5 text-gray-400 transition-colors group-focus-within:text-indigo-500"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                        </svg>
                                    </div>
                                </div>
                                @error('mensagem')
                                    <p class="flex items-center mt-2 text-sm text-red-600">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="flex justify-center pt-4">
                                <button type="button" wire:click="submitForm"
                                    class="relative px-8 py-4 font-semibold text-white transition-all duration-200 transform shadow-lg group bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl hover:shadow-xl hover:scale-105 focus:outline-none focus:ring-4 focus:ring-indigo-300 focus:ring-opacity-50">
                                    <span class="flex items-center">
                                        <svg class="w-5 h-5 mr-2 transition-transform group-hover:rotate-12"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                        </svg>
                                        Enviar Mensagem
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Informações de Contato -->
                    <div
                        class="relative overflow-hidden text-white bg-gradient-to-br from-indigo-600 via-indigo-700 to-purple-800">
                        <!-- Padrão de fundo -->
                        <div class="absolute inset-0 bg-black bg-opacity-10">
                            <div class="absolute inset-0"
                                style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 20px 20px;">
                            </div>
                        </div>

                        <div
                            class="relative z-10 flex flex-col justify-center items-center p-8 md:p-12 lg:p-16 h-full min-h-[600px]">
                            <!-- Ilustração -->
                            <div class="p-6 mb-8 bg-white rounded-full bg-opacity-10 backdrop-blur-sm">
                                <img src="{{ asset('overshoes.svg') }}" alt="Contato SoPeP"
                                    class="w-24 h-24 md:w-32 md:h-32">
                            </div>

                            <div class="mb-8 text-center">
                                <h3 class="mb-4 text-3xl font-bold md:text-4xl">Fale Conosco</h3>
                                <p class="max-w-sm text-lg leading-relaxed text-indigo-100">
                                    Nossa equipe está pronta para esclarecer suas dúvidas sobre o tratamento de pé
                                    diabético
                                </p>
                            </div>

                            <div class="w-full max-w-sm space-y-6">
                                <div
                                    class="flex items-center p-4 space-x-4 transition-all duration-200 bg-white group rounded-xl bg-opacity-10 backdrop-blur-sm hover:bg-opacity-20">
                                    <div
                                        class="flex items-center justify-center flex-shrink-0 w-12 h-12 transition-transform bg-white rounded-full bg-opacity-20 group-hover:scale-110">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-white">Telefone</p>
                                        <p class="text-indigo-200">+55 (38) 99999-9999</p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center p-4 space-x-4 transition-all duration-200 bg-white group rounded-xl bg-opacity-10 backdrop-blur-sm hover:bg-opacity-20">
                                    <div
                                        class="flex items-center justify-center flex-shrink-0 w-12 h-12 transition-transform bg-white rounded-full bg-opacity-20 group-hover:scale-110">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-white">Email</p>
                                        <p class="text-indigo-200">diafeetofc@gmail.com</p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center p-4 space-x-4 transition-all duration-200 bg-white group rounded-xl bg-opacity-10 backdrop-blur-sm hover:bg-opacity-20">
                                    <div
                                        class="flex items-center justify-center flex-shrink-0 w-12 h-12 transition-transform bg-white rounded-full bg-opacity-20 group-hover:scale-110">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.657 16.657L13.414 12.414a2 2 0 00-2.828 0l-4.243 4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-white">Localização</p>
                                        <p class="text-indigo-200">Montes Claros - MG</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Call to action adicional -->
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

    <footer class="relative z-10 py-6 text-white bg-gradient-to-r from-indigo-800 to-purple-900">
        <div class="container px-6 mx-auto">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <div class="mb-4 md:mb-0">
                    <h4 class="text-xl font-bold">SoPeP</h4>
                    <p class="text-sm text-indigo-200">Sistema de Precrição Eletrônica para Pé Diabético</p>
                </div>
                <div class="text-center md:text-right">
                    <p class="text-sm text-indigo-200">&copy; 2024 SoPeP. Todos os direitos reservados.</p>
                    <p class="mt-1 text-xs text-indigo-300">Desenvolvido para cuidar melhor dos seus pacientes</p>
                </div>
            </div>
        </div>
    </footer>
</div>
