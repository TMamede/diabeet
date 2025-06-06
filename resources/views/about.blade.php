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
            <div class="max-w-6xl mx-auto">
                <!-- Header Section -->
                <div class="text-center mb-12">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                        Sobre o <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">SoPeP</span>
                    </h1>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Sistema de Prontuário Eletrônico especializado no cuidado de enfermagem para pacientes com pé
                        diabético
                    </p>
                </div>

                <div
                    class="bg-white rounded-3xl shadow-2xl overflow-hidden backdrop-blur-sm bg-white/95 border border-white/20">
                    <div class="p-8 md:p-12 lg:p-16">
                        <!-- Título principal -->
                        <div class="text-center mb-12">
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                                Bem-vindo ao SoPeP
                            </h2>
                            <p class="text-lg text-gray-600 max-w-4xl mx-auto leading-relaxed">
                                Sistema de Prontuário para Enfermagem no Pé Diabético - Uma solução digital inovadora
                                para otimizar o cuidado especializado
                            </p>
                        </div>

                        <!-- Grid de funcionalidades -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                            <!-- Card 1 -->
                            <div
                                class="group p-6 bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl border border-indigo-100 hover:shadow-lg transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div
                                        class="flex-shrink-0 w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Apoio Especializado</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            O SoPeP é um sistema digital pensado para apoiar o trabalho dos
                                            profissionais de enfermagem
                                            no cuidado especializado com pacientes que convivem com o pé diabético. Sua
                                            proposta é
                                            otimizar a coleta de dados, o acompanhamento contínuo e a tomada de decisões
                                            clínicas com base em evidências.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div
                                class="group p-6 bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl border border-purple-100 hover:shadow-lg transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div
                                        class="flex-shrink-0 w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Gestão Completa</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Enfermeiros têm acesso a funcionalidades completas para cadastrar pacientes,
                                            registrar
                                            informações clínicas e sociodemográficas, e monitorar a evolução da condição
                                            de saúde ao
                                            longo do tempo. É possível também revisar históricos de medicação,
                                            diagnósticos prévios e encaminhamentos.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div
                                class="group p-6 bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl border border-green-100 hover:shadow-lg transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div
                                        class="flex-shrink-0 w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Questionários Estruturados
                                        </h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            O sistema baseia-se em questionários organizados por dimensões
                                            psicobiológicas,
                                            psicossociais e psicoespirituais. Com essas informações, o SoPeP realiza a
                                            análise
                                            automatizada dos dados e sugere diagnósticos e intervenções de enfermagem
                                            compatíveis com as respostas coletadas.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div
                                class="group p-6 bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl border border-orange-100 hover:shadow-lg transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div
                                        class="flex-shrink-0 w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Prontuário Digital</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Ao final do processo, um prontuário digital é gerado automaticamente,
                                            compilando as origens
                                            de risco, motivos associados, diagnósticos e intervenções sugeridas. Esse
                                            prontuário pode
                                            ser revisado, complementado e salvo em formato PDF para fins de documentação
                                            e continuidade do cuidado.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Seção de continuidade do atendimento -->
                        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 text-white mb-12">
                            <div class="flex flex-col md:flex-row items-center">
                                <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-8">
                                    <div
                                        class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold mb-4">Continuidade do Atendimento</h3>
                                    <p class="text-lg text-indigo-100 leading-relaxed">
                                        O SoPeP também facilita a continuidade do atendimento ao permitir que, ao
                                        iniciar um novo
                                        questionário, o sistema recupere automaticamente os dados anteriores daquele
                                        paciente,
                                        poupando tempo e reduzindo a repetição de preenchimentos.
                                    </p>
                                </div>
                            </div>
                        </div>



                        <!-- Estatísticas ou benefícios -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                            <div class="text-center p-6 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl">
                                <div
                                    class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">Agilidade</h4>
                                <p class="text-gray-600">Redução significativa no tempo de preenchimento e análise de
                                    dados</p>
                            </div>

                            <div class="text-center p-6 bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl">
                                <div
                                    class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">Precisão</h4>
                                <p class="text-gray-600">Diagnósticos e intervenções baseados em evidências científicas
                                </p>
                            </div>

                            <div class="text-center p-6 bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl">
                                <div
                                    class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">Cuidado</h4>
                                <p class="text-gray-600">Foco no bem-estar integral do paciente com pé diabético</p>
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
