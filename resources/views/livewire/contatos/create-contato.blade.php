<div class="flex flex-col min-h-screen">
    <div class="flex-grow py-10">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-lg">
                <div class="flex">
                    <!-- Seção Informações de Contato -->
                    <div class="w-full p-10 space-y-10 text-white bg-indigo-800 md:w-1/2">
                        <h3 class="text-3xl font-extrabold tracking-wide">Contate-nos</h3>

                        <!-- Telefone -->
                        <div class="flex items-center space-x-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>
                            <div>
                                <span class="block text-2xl font-semibold">Ligue para nós</span>
                                <p class="text-lg">+55 (38) 99999-9999</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-center space-x-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <div>
                                <span class="block text-2xl font-semibold">Envie-nos um Email</span>
                                <p class="text-lg">diafeetofc@gmail.com</p>
                            </div>
                        </div>

                        <!-- Localização -->
                        <div class="flex items-center space-x-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z" />
                            </svg>
                            <div>
                                <span class="block text-2xl font-semibold">Localização</span>
                                <p class="text-lg">Montes Claros, Minas Gerais</p>
                            </div>
                        </div>
                    </div>

                    <!-- Seção Formulário de Contato -->
                    <div class="w-1/2 p-8 bg-white">
                        <h3 class="mb-6 text-2xl font-semibold text-center">Entre em Contato</h3>

                        @if (session()->has('success'))
                            <div class="relative px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded"
                                role="alert">
                                <strong class="font-bold">Sucesso!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        <form wire:submit.prevent="submit" class="space-y-6">
                            <!-- Nome -->
                            <div class="mb-4">
                                <label for="nome" class="block text-base font-medium text-gray-700">Nome</label>
                                <input type="text" wire:model="nome" id="nome"
                                    class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    required>
                                @error('nome')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" class="block text-base font-medium text-gray-700">Email</label>
                                <input type="email" wire:model="email" id="email"
                                    class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    required>
                                @error('email')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Mensagem -->
                            <div class="mb-4">
                                <label for="mensagem" class="block text-base font-medium text-gray-700">Mensagem</label>
                                <textarea wire:model="mensagem" id="mensagem"
                                    class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    rows="5" required></textarea>
                                @error('mensagem')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Botão de Enviar -->
                            <div class="flex justify-center">
                                <button type="button" wire:click="submitForm"
                                    class="px-6 py-3 font-semibold text-white transition duration-150 ease-in-out bg-indigo-600 rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-4 text-white bg-indigo-800">
        <div class="container px-6 mx-auto text-center">
            <p>&copy; 2024 Diabeet. Todos os direitos reservados.</p>
        </div>
    </footer>
</div>
