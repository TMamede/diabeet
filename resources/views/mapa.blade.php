<x-app-layout>
    {{-- Container raiz com bg leve e sem blobs absolutos --}}
    <div class="flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">

        <div class="flex-1 px-4 py-10 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                {{-- Header --}}
                <div class="mb-10 text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 mb-4 bg-indigo-100 rounded-full">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                        </svg>
                    </div>
                    <h1 class="mb-3 text-4xl font-bold text-gray-900 md:text-5xl">
                        Mapa do <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Site</span>
                    </h1>
                    <p class="max-w-2xl mx-auto text-lg text-gray-600 md:text-xl">
                        Navegue facilmente por todas as funcionalidades do SoPeP e encontre rapidamente o que você precisa
                    </p>
                </div>

                {{-- Main card: menos sombra, sem backdrop-blur --}}
                <div class="bg-white border border-gray-100 shadow-md rounded-3xl">
                    <div class="p-6 md:p-10 lg:p-12">
                        <div class="mb-10 text-center">
                            <h2 class="mb-3 text-2xl font-bold text-gray-900 md:text-3xl">Navegue pelo Sistema</h2>
                            <p class="max-w-3xl mx-auto text-base leading-relaxed text-gray-600 md:text-lg">
                                Acesse rapidamente todas as áreas do sistema de prescrição eletrônica para pé diabético.
                                <span class="font-medium text-indigo-600">Encontre o que precisa em segundos!</span>
                            </p>
                        </div>

                        {{-- ===== Linha de cima: 3 cards ===== --}}
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

                            {{-- Início --}}
                            <div class="group">
                                <div class="h-full p-6 transition-colors border border-gray-100 rounded-2xl bg-gradient-to-br from-white to-indigo-50/50">
                                    <div class="flex items-center mb-4">
                                        <div class="flex items-center justify-center w-10 h-10 mr-3 bg-indigo-600 rounded-lg">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                            </svg>
                                        </div>
                                        <h4 class="text-lg font-bold text-gray-800 md:text-xl">Início</h4>
                                    </div>
                                    <ul class="space-y-2.5 text-gray-700">
                                        <li>
                                            <a href="{{ route('about') }}"
                                               class="flex items-center p-2 transition-colors rounded-lg hover:text-indigo-600 hover:bg-indigo-50">
                                                <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                                Sobre o Site
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}"
                                               class="flex items-center p-2 transition-colors rounded-lg hover:text-indigo-600 hover:bg-indigo-50">
                                                <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                                </svg>
                                                Contato
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('termos') }}"
                                               class="flex items-center p-2 transition-colors rounded-lg hover:text-indigo-600 hover:bg-indigo-50">
                                                <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                                </svg>
                                                Termos e Condições
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- Pacientes --}}
                            <div class="group">
                                <div class="h-full p-6 transition-colors border border-gray-100 rounded-2xl bg-gradient-to-br from-white to-emerald-50/50">
                                    <div class="flex items-center mb-4">
                                        <div class="flex items-center justify-center w-10 h-10 mr-3 rounded-lg bg-emerald-600">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                            </svg>
                                        </div>
                                        <h4 class="text-lg font-bold text-gray-800 md:text-xl">Pacientes</h4>
                                    </div>
                                    <ul class="space-y-2.5 text-gray-700">
                                        <li>
                                            <a href="{{ route('paciente.index') }}"
                                               class="flex items-center p-2 transition-colors rounded-lg hover:text-emerald-600 hover:bg-emerald-50">
                                                <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                                </svg>
                                                Pesquisar Paciente
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('paciente.create') }}"
                                               class="flex items-center p-2 transition-colors rounded-lg hover:text-emerald-600 hover:bg-emerald-50">
                                                <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                                </svg>
                                                Cadastrar Paciente
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- Avaliação de Enfermagem --}}
                            <div class="group">
                                <div class="h-full p-6 transition-colors border border-gray-100 rounded-2xl bg-gradient-to-br from-white to-cyan-50/50">
                                    <div class="flex items-center mb-4">
                                        <div class="flex items-center justify-center w-10 h-10 mr-3 rounded-lg bg-cyan-600">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                                            </svg>
                                        </div>
                                        <h4 class="text-lg font-bold text-gray-800 md:text-xl">Avaliação de Enfermagem</h4>
                                    </div>
                                    <ul class="space-y-2.5 text-gray-700">
                                        <li>
                                            <a href="{{ route('questionario.index') }}"
                                               class="flex items-center p-2 transition-colors rounded-lg hover:text-cyan-600 hover:bg-cyan-50">
                                                <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                                </svg>
                                                Pesquisar Avaliação
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('questionario.create') }}"
                                               class="flex items-center p-2 transition-colors rounded-lg hover:text-cyan-600 hover:bg-cyan-50">
                                                <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                                </svg>
                                                Criar Avaliação
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{-- ===== Linha de baixo: 2 colunas (50/50) ===== --}}
                        <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2">
                            {{-- Prescrições --}}
                            <div class="group">
                                <div class="h-full p-6 transition-colors border border-gray-100 rounded-2xl bg-gradient-to-br from-white to-amber-50/50">
                                    <div class="flex items-center mb-4">
                                        <div class="flex items-center justify-center w-10 h-10 mr-3 bg-orange-600 rounded-lg">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                        </div>
                                        <h4 class="text-lg font-bold text-gray-800 md:text-xl">Prescrições</h4>
                                    </div>
                                    <ul class="space-y-2.5 text-gray-700">
                                        <li>
                                            <a href="{{ route('prontuario.index') }}"
                                               class="flex items-center p-2 transition-colors rounded-lg hover:text-orange-600 hover:bg-orange-50">
                                                <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                </svg>
                                                Visualizar Prescrições
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- Perfil (sem col-span agora) --}}
                            <div class="group">
                                <div class="h-full p-6 transition-colors border border-gray-100 rounded-2xl bg-gradient-to-br from-white to-pink-50/50">
                                    <div class="flex items-center mb-4">
                                        <div class="flex items-center justify-center w-10 h-10 mr-3 bg-purple-600 rounded-lg">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <h4 class="text-lg font-bold text-gray-800 md:text-xl">Perfil do Usuário</h4>
                                    </div>
                                    <ul class="space-y-2.5 text-gray-700">
                                        <li>
                                            <a href="{{ route('profile') }}"
                                               class="flex items-center p-2 transition-colors rounded-lg hover:text-purple-600 hover:bg-purple-50">
                                                <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                </svg>
                                                Alterar Dados do Perfil
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('profile') }}"
                                               class="flex items-center p-2 transition-colors rounded-lg hover:text-purple-600 hover:bg-purple-50">
                                                <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                                                </svg>
                                                Alterar Senha
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('profile') }}"
                                               class="flex items-center p-2 transition-colors rounded-lg hover:text-red-600 hover:bg-red-50">
                                                <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                                <span class="text-red-600">Excluir Conta</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{-- CTA --}}
                        <div class="mt-10 text-center">
                            <div class="p-6 border border-indigo-100 md:p-8 rounded-2xl bg-gradient-to-r from-white to-purple-50/40">
                                <h3 class="mb-3 text-2xl font-bold text-gray-900">Precisa de Ajuda?</h3>
                                <p class="max-w-2xl mx-auto mb-5 text-gray-600">
                                    Se você não encontrou o que procura ou tem alguma dúvida sobre como usar o sistema,
                                    nossa equipe está pronta para ajudar.
                                </p>
                                <a href="{{ route('contact') }}"
                                   class="inline-flex items-center px-6 py-3 font-semibold text-white transition-opacity rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 hover:opacity-90">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                    Entre em Contato
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
