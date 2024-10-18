<div class="flex flex-col min-h-screen">
    <div class="flex-grow py-10 bg-gray-100">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white border border-gray-200 shadow-lg sm:rounded-lg">
                <div class="p-8 text-gray-900">
                    <div class="container mx-auto">
                        @if (session()->has('success'))
                            <div class="relative px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded"
                                role="alert">
                                <strong class="font-bold">Sucesso!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        <h3 class="mb-6 text-2xl font-semibold text-center">Entre em Contato</h3>
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 2h16v16H2V2zm1 1v14h14V3H3zm2 2h10v2H5V5zm0 3h10v2H5V8zm0 3h10v2H5v-2z" />
                            </svg>
                        </div>

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
                                    <svg class="inline w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2 2h16v16H2V2zm1 1v14h14V3H3zm2 2h10v2H5V5zm0 3h10v2H5V8zm0 3h10v2H5v-2z" />
                                    </svg>
                                    Enviar
                                </button>
                            </div>
                        </form>
                        <div class="mt-8 text-center">
                            <h4 class="text-lg font-semibold">Outras Formas de Contato</h4>
                            <div class="flex justify-center mt-4 space-x-4">
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M14.5 3h-9C4.67 3 4 3.67 4 4.5v11c0 .83.67 1.5 1.5 1.5h9c.83 0 1.5-.67 1.5-1.5v-11C16 3.67 15.33 3 14.5 3zM10 14.25a1.75 1.75 0 1 1 0-3.5 1.75 1.75 0 0 1 0 3.5z" />
                                    </svg>
                                    <span class="ml-2 text-gray-700">+55 (38) 91234-5678</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 4h16v12H2V4zm1 1v10h14V5H3zm1 1h12v8H4V6z" />
                                    </svg>
                                    <span class="ml-2 text-gray-700">diafeet@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-4 my-0 text-white bg-indigo-800">
        <div class="container px-6 mx-auto text-center">
            <p>&copy; 2024 Diabeet. Todos os direitos reservados.</p>
        </div>
    </footer>
</div>
