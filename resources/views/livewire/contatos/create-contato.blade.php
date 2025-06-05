<div class="flex flex-col min-h-screen bg-gradient-to-b from-indigo-50 via-gray-100 to-gray-200">
    <div class="flex-grow py-10 px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto bg-white rounded-3xl shadow-2xl overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">

                <!-- Formulário de Contato -->
                <div class="p-10 md:p-14">
                    <h2 class="mb-6 text-3xl font-extrabold text-indigo-800">Entre em Contato</h2>
                    <p class="mb-6 text-gray-600 text-lg">Tem alguma dúvida, sugestão ou deseja saber mais sobre o SoPeP?
                        Envie-nos uma mensagem!</p>

                    @if (session()->has('success'))
                        <div class="relative px-4 py-3 mb-6 text-green-700 bg-green-100 border border-green-400 rounded"
                            role="alert">
                            <strong class="font-bold">Sucesso!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <form wire:submit.prevent="submit" class="space-y-6">
                        <div>
                            <label for="nome" class="block text-base font-medium text-gray-700">Nome</label>
                            <input type="text" wire:model="nome" id="nome"
                                class="w-full p-3 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                required>
                            @error('nome')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-base font-medium text-gray-700">Email</label>
                            <input type="email" wire:model="email" id="email"
                                class="w-full p-3 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                required>
                            @error('email')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="mensagem" class="block text-base font-medium text-gray-700">Mensagem</label>
                            <textarea wire:model="mensagem" id="mensagem" rows="5"
                                class="w-full p-3 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                required></textarea>
                            @error('mensagem')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-center">
                            <button type="button" wire:click="submitForm"
                                class="px-6 py-3 font-semibold text-white bg-indigo-600 rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Ilustração e Informações -->
                <div class="flex flex-col justify-center items-center p-10 bg-indigo-800 text-white">
                    <img src="{{ asset('overshoes.svg') }}" alt="Contato" class="w-40 mb-8">
                    <h3 class="mb-4 text-2xl font-semibold">Fale com a gente</h3>
                    <p class="mb-4 text-center text-indigo-100">Estamos aqui para ajudar você a cuidar melhor dos seus
                        pacientes. Qualquer dúvida, entre em contato conosco.</p>

                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h18M3 10h18M3 15h18" />
                            </svg>
                            <span class="text-lg">+55 (38) 99999-9999</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m0 0V8m0 4v4m4-4h4" />
                            </svg>
                            <span class="text-lg">diafeetofc@gmail.com</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 12.414a2 2 0 00-2.828 0l-4.243 4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-lg">Montes Claros - MG</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer class="py-4 text-white bg-indigo-800">
        <div class="container px-6 mx-auto text-center">
            <p>&copy; 2024 SoPeP. Todos os direitos reservados.</p>
        </div>
    </footer>
</div>
