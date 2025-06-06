<x-app-layout>

    <div class="flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 relative">
        <!-- Elementos decorativos de fundo -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-10 left-10 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-30">
            </div>
            <div
                class="absolute top-20 right-10 w-80 h-80 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-25">
            </div>
            <div
                class="absolute bottom-10 left-20 w-64 h-64 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-20">
            </div>
        </div>

        <div class="flex-grow py-12 px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-5xl mx-auto">
                <!-- Header Section -->
                <div class="text-center mb-12">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                        Meu <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Perfil</span>
                    </h1>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        Gerencie suas informações pessoais, segurança da conta e preferências do sistema
                    </p>
                </div>

                <!-- Profile Cards -->
                <div class="space-y-8">

                    <!-- Informações do Perfil -->
                    <div
                        class="bg-white rounded-3xl shadow-2xl overflow-hidden backdrop-blur-sm bg-white/95 border border-white/20">
                        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 px-8 py-6">
                            <div class="flex items-center">
                                <div
                                    class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-white">Informações Pessoais</h2>
                                    <p class="text-indigo-100">Atualize seus dados pessoais e informações de contato</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8 md:p-12">
                            <div class="max-w-4xl">
                                <livewire:profile.update-profile-information-form />
                            </div>
                        </div>
                    </div>

                    <!-- Alterar Senha -->
                    <div
                        class="bg-white rounded-3xl shadow-2xl overflow-hidden backdrop-blur-sm bg-white/95 border border-white/20">
                        <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-8 py-6">
                            <div class="flex items-center">
                                <div
                                    class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-white">Segurança da Conta</h2>
                                    <p class="text-green-100">Altere sua senha para manter sua conta segura</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8 md:p-12">
                            <div class="max-w-4xl">
                                <livewire:profile.update-password-form />
                            </div>
                        </div>
                    </div>

                    <!-- Excluir Conta -->
                    <div
                        class="bg-white rounded-3xl shadow-2xl overflow-hidden backdrop-blur-sm bg-white/95 border border-white/20">
                        <div class="bg-gradient-to-r from-red-500 to-rose-600 px-8 py-6">
                            <div class="flex items-center">
                                <div
                                    class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-white">Zona de Perigo</h2>
                                    <p class="text-red-100">Exclua permanentemente sua conta e todos os dados associados
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8 md:p-12">
                            <div class="max-w-4xl">
                                <livewire:profile.delete-user-form />
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Dicas de Segurança -->
                <div class="mt-12">
                    <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-2xl p-8 border border-blue-100">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Dicas de Segurança</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700">
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Use senhas fortes e únicas</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Mantenha seus dados atualizados</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Faça logout em computadores públicos</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Revise suas configurações regularmente</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="relative z-10 py-6 bg-gradient-to-r from-indigo-800 to-purple-900 text-white">
            <div class="container px-6 mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <h4 class="text-xl font-bold">SoPeP</h4>
                        <p class="text-indigo-200 text-sm">Sistema de Prontuário Eletrônico para Pé Diabético</p>
                    </div>
                    <div class="text-center md:text-right">
                        <p class="text-sm text-indigo-200">&copy; 2024 SoPeP. Todos os direitos reservados.</p>
                        <p class="text-xs text-indigo-300 mt-1">Desenvolvido para cuidar melhor dos seus pacientes</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-app-layout>
