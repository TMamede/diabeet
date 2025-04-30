<x-app-layout>
    <x-slot name="header">
        <h2 class="pl-5 text-3xl font-bold leading-tight text-gray-800">
            {{ __('Mapa do Site') }}
        </h2>
    </x-slot>

    <div class="flex flex-col min-h-screen bg-gradient-to-b from-indigo-50 via-white to-gray-100">
        <div class="flex-grow py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white rounded-2xl shadow-md p-10">
                    <h3 class="text-2xl font-bold text-indigo-700 mb-10">Navegue pelo sistema</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                        {{-- Seção Início --}}
                        <div>
                            <h4 class="mb-4 text-xl font-semibold text-gray-800 border-b border-indigo-300 pb-2">Início
                            </h4>
                            <ul class="space-y-3 text-lg text-gray-700">
                                <li><a href="{{ route('about') }}" class="hover:text-indigo-600 hover:underline">Sobre o
                                        Site</a></li>
                                <li><a href="{{ route('contact') }}"
                                        class="hover:text-indigo-600 hover:underline">Contato</a></li>
                                <li><a href="{{ route('termos') }}" class="hover:text-indigo-600 hover:underline">Termos
                                        e Condições</a></li>
                            </ul>
                        </div>

                        {{-- Seção Pacientes --}}
                        <div>
                            <h4 class="mb-4 text-xl font-semibold text-gray-800 border-b border-indigo-300 pb-2">
                                Pacientes</h4>
                            <ul class="space-y-3 text-lg text-gray-700">
                                <li><a href="{{ route('paciente.index') }}"
                                        class="hover:text-indigo-600 hover:underline">Pesquisar Paciente</a></li>
                                <li><a href="{{ route('paciente.create') }}"
                                        class="hover:text-indigo-600 hover:underline">Cadastrar Paciente</a></li>
                            </ul>
                        </div>

                        {{-- Seção Questionários --}}
                        <div>
                            <h4 class="mb-4 text-xl font-semibold text-gray-800 border-b border-indigo-300 pb-2">
                                Questionários</h4>
                            <ul class="space-y-3 text-lg text-gray-700">
                                <li><a href="{{ route('questionario.index') }}"
                                        class="hover:text-indigo-600 hover:underline">Pesquisar Questionário</a></li>
                                <li><a href="{{ route('questionario.create') }}"
                                        class="hover:text-indigo-600 hover:underline">Criar Questionário</a></li>
                            </ul>
                        </div>

                        {{-- Seção Prontuários --}}
                        <div>
                            <h4 class="mb-4 text-xl font-semibold text-gray-800 border-b border-indigo-300 pb-2">
                                Prontuários</h4>
                            <ul class="space-y-3 text-lg text-gray-700">
                                <li><a href="{{ route('prontuario.index') }}"
                                        class="hover:text-indigo-600 hover:underline">Visualizar Prontuários</a></li>
                            </ul>
                        </div>

                        {{-- Seção Perfil --}}
                        <div>
                            <h4 class="mb-4 text-xl font-semibold text-gray-800 border-b border-indigo-300 pb-2">Perfil
                                do Usuário</h4>
                            <ul class="space-y-3 text-lg text-gray-700">
                                <li><a href="{{ route('profile') }}"
                                        class="hover:text-indigo-600 hover:underline">Alterar Dados do Perfil</a></li>
                                <li><a href="{{ route('profile') }}"
                                        class="hover:text-indigo-600 hover:underline">Alterar Senha</a></li>
                                <li><a href="{{ route('profile') }}"
                                        class="text-red-600 hover:text-red-800 hover:underline">Excluir Conta</a></li>
                            </ul>
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
</x-app-layout>
