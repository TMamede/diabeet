<x-app-layout>
    <x-slot name="header">
        <h2 class="pl-5 text-3xl font-bold leading-tight text-gray-800">
            {{ __('Mapa do Site') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-gray-100">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-lg sm:rounded-lg">
                <div class="p-8 space-y-10 text-gray-900">

                    <!-- Seção Início -->
                    <div>
                        <h3 class="flex items-center mb-4 text-2xl font-bold text-indigo-600">
                            <svg class="w-6 h-6 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2L2 7h2v8h4V12h4v3h4V7h2L10 2z"/>
                            </svg>
                            Início
                        </h3>
                        <ul class="pl-6 ml-6 space-y-2 list-disc">
                            <li><a href="{{ route('mapa') }}" class="text-lg text-gray-700 transition hover:text-indigo-500">Mapa do Site</a></li>
                            <li><a href="{{ route('about') }}" class="text-lg text-gray-700 transition hover:text-indigo-500">Sobre o Site</a></li>
                            <li><a href="{{ route('contact') }}" class="text-lg text-gray-700 transition hover:text-indigo-500">Contato</a></li>
                            <li><a href="{{ route('termos') }}" class="text-lg text-gray-700 transition hover:text-indigo-500">Termos e Condições</a></li>
                        </ul>
                    </div>

                    <!-- Seção Paciente -->
                    <div>
                        <h3 class="flex items-center mb-4 text-2xl font-bold text-indigo-600">
                            <svg class="w-6 h-6 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2C7.8 2 6 3.8 6 6c0 1.7 1.1 3.1 2.6 3.7C8.4 10.5 8 11.7 8 13c0 1.8 1.5 3.2 3.2 3.2S14 14.8 14 13c0-1.3-.4-2.5-1.6-3.3C14.1 8.6 16 6.6 16 4c0-2.2-1.8-4-4-4z"/>
                            </svg>
                            Paciente
                        </h3>
                        <ul class="pl-6 ml-6 space-y-2 list-disc">
                            <li><a href="{{ route('paciente.index') }}" class="text-lg text-gray-700 transition hover:text-indigo-500">Pesquisar Paciente</a></li>
                            <li><a href="{{ route('paciente.create') }}" class="text-lg text-gray-700 transition hover:text-indigo-500">Cadastrar Paciente</a></li>
                        </ul>
                    </div>

                    <!-- Seção Questionário -->
                    <div>
                        <h3 class="flex items-center mb-4 text-2xl font-bold text-indigo-600">
                            <svg class="w-6 h-6 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 3h14v14H3V3zm1 1v12h12V4H4zm1 2h10v2H5V6zm0 3h10v2H5V9zm0 3h10v2H5v-2z"/>
                            </svg>
                            Questionário
                        </h3>
                        <ul class="pl-6 ml-6 space-y-2 list-disc">
                            <li><a href="{{ route('questionario.index') }}" class="text-lg text-gray-700 transition hover:text-indigo-500">Pesquisar Questionário</a></li>
                            <li><a href="{{ route('questionario.create') }}" class="text-lg text-gray-700 transition hover:text-indigo-500">Criar Questionário</a></li>
                        </ul>
                    </div>

                    <!-- Seção Perfil do Usuário -->
                    <div>
                        <h3 class="flex items-center mb-4 text-2xl font-bold text-indigo-600">
                            <svg class="w-6 h-6 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2C8.3 2 7 3.3 7 5c0 1.7 1.3 3 3 3s3-1.3 3-3c0-1.7-1.3-3-3-3zm0 8c-3.3 0-6 2.7-6 6v2h12v-2c0-3.3-2.7-6-6-6z"/>
                            </svg>
                            Perfil do Usuário
                        </h3>
                        <ul class="pl-6 ml-6 space-y-2 list-disc">
                            <li><a href="{{ route('profile') }}" class="text-lg text-gray-700 transition hover:text-indigo-500">Alterar Dados do Perfil</a></li>
                            <li><a href="{{ route('profile') }}" class="text-lg text-gray-700 transition hover:text-indigo-500">Alterar Senha</a></li>
                            <li><a href="{{ route('profile') }}" class="text-lg text-gray-700 transition hover:text-indigo-500">Excluir Conta</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
