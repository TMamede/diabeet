<x-app-layout>
    <x-slot name="header">
        <h2 class="pl-5 text-3xl font-bold leading-tight text-gray-800">
            {{ __('Mapa do Site') }}
        </h2>
    </x-slot>

    <div class="py-10 ">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-lg sm:rounded-lg">
                <div class="grid grid-cols-2 gap-20 p-8 py-16 text-center text-gray-900 pl-36">

                    <!-- Coluna 1: Início e Paciente -->
                    <div class="space-y-36">

                        <!-- Seção Início -->
                        <div>
                            <ul class="space-y-4 list-none">
                                <h3 class="flex items-center justify-start mb-2 text-3xl font-bold text-indigo-600">
                                    <svg class="w-8 h-8 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 2L2 7h2v8h4V12h4v3h4V7h2L10 2z" />
                                    </svg>
                                    INÍCIO
                                </h3>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                    </svg>
                                    <a href="{{ route('about') }}"
                                        class="text-xl font-medium text-gray-800 hover:text-indigo-600 hover:underline">
                                        Sobre o Site
                                    </a>
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                    </svg>
                                    <a href="{{ route('contact') }}"
                                        class="text-xl font-medium text-gray-800 hover:text-indigo-600 hover:underline">
                                        Contato
                                    </a>
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                    </svg>
                                    <a href="{{ route('termos') }}"
                                        class="text-xl font-medium text-gray-800 hover:text-indigo-600 hover:underline">
                                        Termos e Condições
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Seção Paciente -->
                        <div>
                            <ul class="space-y-4 list-none">
                                <h3 class="flex items-center justify-start mb-2 text-3xl font-bold text-indigo-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                        class="w-8 h-8 mr-2 text-indigo-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                    </svg>
                                    PACIENTE
                                </h3>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                    </svg>
                                    <a href="{{ route('paciente.index') }}"
                                        class="text-xl font-medium text-gray-800 hover:text-indigo-600 hover:underline">
                                        Pesquisar Paciente
                                    </a>
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                    </svg>
                                    <a href="{{ route('paciente.create') }}"
                                        class="text-xl font-medium text-gray-800 hover:text-indigo-600 hover:underline">
                                        Cadastrar Paciente
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <!-- Coluna 2: Questionário e Perfil do Usuário -->
                    <div class="space-y-36">

                        <!-- Seção Perfil do Usuário -->
                        <div>
                            <ul class="space-y-4 list-none">
                                <h3 class="flex items-center justify-start mb-2 text-3xl font-bold text-indigo-600">
                                    <svg class="w-8 h-8 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 2C8.3 2 7 3.3 7 5c0 1.7 1.3 3 3 3s3-1.3 3-3c0-1.7-1.3-3-3-3zm0 8c-3.3 0-6 2.7-6 6v2h12v-2c0-3.3-2.7-6-6-6z" />
                                    </svg>
                                    PERFIL DO USUÁRIO
                                </h3>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                    </svg>
                                    <a href="{{ route('profile') }}"
                                        class="text-xl font-medium text-gray-800 hover:text-indigo-600 hover:underline">
                                        Alterar Dados do Perfil
                                    </a>
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                    </svg>
                                    <a href="{{ route('profile') }}"
                                        class="text-xl font-medium text-gray-800 hover:text-indigo-600 hover:underline">
                                        Alterar Senha
                                    </a>
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 text-red-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                    </svg>
                                    <a href="{{ route('profile') }}"
                                        class="text-xl font-medium text-red-600 hover:text-red-800 hover:underline">
                                        Excluir Conta
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Seção Questionário -->
                        <div>
                            <ul class="space-y-4 list-none">
                                <h3 class="flex items-center justify-start mb-2 text-3xl font-bold text-indigo-600">
                                    <svg class="w-8 h-8 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M3 3h14v14H3V3zm1 1v12h12V4H4zm1 2h10v2H5V6zm0 3h10v2H5V9zm0 3h10v2H5v-2z" />
                                    </svg>
                                    QUESTIONÁRIO
                                </h3>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                    </svg>
                                    <a href="{{ route('questionario.index') }}"
                                        class="text-xl font-medium text-gray-800 hover:text-indigo-600 hover:underline">
                                        Pesquisar Questionário
                                    </a>
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499" />
                                    </svg>
                                    <a href="{{ route('questionario.create') }}"
                                        class="text-xl font-medium text-gray-800 hover:text-indigo-600 hover:underline">
                                        Criar Questionário
                                    </a>
                                </li>
                            </ul>
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
</x-app-layout>