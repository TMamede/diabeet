<x-app-layout>
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
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h1 class="mb-4 text-4xl font-bold text-gray-900 md:text-5xl">
                        Termos de <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Uso</span>
                    </h1>
                    <p class="max-w-3xl mx-auto text-xl leading-relaxed text-gray-600">
                        Plataforma desenvolvida para auxiliar profissionais da enfermagem no cuidado especializado de
                        pacientes com pé diabético
                    </p>
                </div>

                <!-- Introduction Cards -->
                <div class="grid gap-6 mb-12 md:grid-cols-2">
                    <div
                        class="p-8 transition-all duration-300 border shadow-2xl bg-white/95 backdrop-blur-sm border-white/20 rounded-3xl hover:shadow-2xl hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 mr-4 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800">Importante</h4>
                        </div>
                        <p class="leading-relaxed text-gray-700">
                            Este documento estabelece os Termos de Uso do sistema SoPeP, plataforma desenvolvida com o
                            objetivo de auxiliar profissionais da enfermagem na coleta de informações, monitoramento e
                            planejamento terapêutico de pacientes com diagnóstico de pé diabético.
                        </p>
                    </div>

                    <div
                        class="p-8 transition-all duration-300 border shadow-2xl bg-white/95 backdrop-blur-sm border-white/20 rounded-3xl hover:shadow-2xl hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 mr-4 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800">Concordância</h4>
                        </div>
                        <p class="leading-relaxed text-gray-700">
                            Ao acessar e utilizar o sistema SoPeP, o usuário declara estar ciente e de acordo com as
                            condições aqui descritas. A utilização do sistema implica na aceitação plena e irrestrita de
                            todos os termos.
                        </p>
                    </div>
                </div>

                <!-- Terms Container -->
                <div class="overflow-hidden border shadow-2xl bg-white/95 rounded-3xl backdrop-blur-sm border-white/20">
                    <!-- Terms Sections -->
                    <div class="space-y-0">
                        <!-- Section 1 -->
                        <div class="transition-all duration-300 border-b border-gray-100 hover:bg-gray-50/50">
                            <div class="px-8 py-4 bg-gradient-to-r from-indigo-500 to-indigo-600">
                                <div class="flex items-center">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 mr-3 bg-white rounded-lg bg-opacity-20">
                                        <span class="font-bold text-white">1</span>
                                    </div>
                                    <h4 class="text-xl font-bold text-white">Objetivo do Sistema</h4>
                                </div>
                            </div>
                            <div class="px-8 py-6">
                                <div class="flex items-start">
                                    <div
                                        class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-1 mr-4 bg-indigo-100 rounded-xl">
                                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="text-lg leading-relaxed text-gray-700">
                                        O sistema tem por finalidade oferecer um ambiente seguro e estruturado para o
                                        registro de dados clínicos e sociais de pacientes atendidos por enfermeiros(as).
                                        Através de
                                        questionários multidimensionais — abordando aspectos psicobiológicos,
                                        psicossociais
                                        e psicoespirituais — o sistema coleta dados que subsidiam o plano de cuidado e a
                                        prescrição de condutas clínicas de acordo com os princípios da Sistematização da
                                        Assistência de
                                        Enfermagem.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Section 2 -->
                        <div class="transition-all duration-300 border-b border-gray-100 hover:bg-gray-50/50">
                            <div class="px-8 py-4 bg-gradient-to-r from-purple-500 to-purple-600">
                                <div class="flex items-center">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 mr-3 bg-white rounded-lg bg-opacity-20">
                                        <span class="font-bold text-white">2</span>
                                    </div>
                                    <h4 class="text-xl font-bold text-white">Responsabilidades do Usuário</h4>
                                </div>
                            </div>
                            <div class="px-8 py-6">
                                <div class="flex items-start">
                                    <div
                                        class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-1 mr-4 bg-purple-100 rounded-xl">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="text-lg leading-relaxed text-gray-700">
                                        É de responsabilidade exclusiva do usuário fornecer informações verídicas,
                                        completas
                                        e atualizadas no momento do cadastro e utilização do sistema. O acesso indevido,
                                        compartilhamento de credenciais ou uso impróprio das informações de pacientes
                                        constitui infração ética e poderá acarretar sanções legais, administrativas e
                                        disciplinares,
                                        conforme a legislação vigente e o Código de Ética dos Profissionais de
                                        Enfermagem.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Section 3 -->
                        <div class="transition-all duration-300 border-b border-gray-100 hover:bg-gray-50/50">
                            <div class="px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600">
                                <div class="flex items-center">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 mr-3 bg-white rounded-lg bg-opacity-20">
                                        <span class="font-bold text-white">3</span>
                                    </div>
                                    <h4 class="text-xl font-bold text-white">Privacidade e Proteção de Dados</h4>
                                </div>
                            </div>
                            <div class="px-8 py-6">
                                <div class="flex items-start">
                                    <div
                                        class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-1 mr-4 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-xl">
                                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="mb-3 text-lg leading-relaxed text-gray-700">
                                            Os dados pessoais e clínicos armazenados no SoPeP estão protegidos de acordo
                                            com
                                            a Lei Geral de Proteção de Dados (Lei nº 13.709/2018). As informações dos
                                            pacientes serão
                                            utilizadas exclusivamente para fins clínicos, estatísticos e de melhoria da
                                            qualidade da
                                            assistência, sendo vedada sua divulgação a terceiros não autorizados.
                                        </p>
                                        <div
                                            class="p-4 border border-indigo-200 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl">
                                            <p class="text-sm font-medium text-indigo-800">
                                                🛡️ Seus dados estão protegidos pela LGPD (Lei nº 13.709/2018)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section 4 -->
                        <div class="transition-all duration-300 border-b border-gray-100 hover:bg-gray-50/50">
                            <div class="px-8 py-4 bg-gradient-to-r from-purple-500 to-indigo-600">
                                <div class="flex items-center">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 mr-3 bg-white rounded-lg bg-opacity-20">
                                        <span class="font-bold text-white">4</span>
                                    </div>
                                    <h4 class="text-xl font-bold text-white">Propriedade Intelectual</h4>
                                </div>
                            </div>
                            <div class="px-8 py-6">
                                <div class="flex items-start">
                                    <div
                                        class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-1 mr-4 bg-purple-100 rounded-xl">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="text-lg leading-relaxed text-gray-700">
                                        O sistema, sua estrutura, layout, funcionalidades, marca e todos os conteúdos
                                        ali
                                        presentes são protegidos por direitos autorais e demais normas de propriedade
                                        intelectual. É
                                        proibida a reprodução, distribuição ou modificação de qualquer parte do sistema
                                        sem a devida
                                        autorização legal.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Section 5 -->
                        <div class="transition-all duration-300 border-b border-gray-100 hover:bg-gray-50/50">
                            <div class="px-8 py-4 bg-gradient-to-r from-indigo-500 to-purple-500">
                                <div class="flex items-center">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 mr-3 bg-white rounded-lg bg-opacity-20">
                                        <span class="font-bold text-white">5</span>
                                    </div>
                                    <h4 class="text-xl font-bold text-white">Atualizações e Modificações</h4>
                                </div>
                            </div>
                            <div class="px-8 py-6">
                                <div class="flex items-start">
                                    <div
                                        class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-1 mr-4 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-xl">
                                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="text-lg leading-relaxed text-gray-700">
                                        A administração do SoPeP se reserva o direito de modificar, suspender ou
                                        atualizar
                                        qualquer parte deste Termo ou do sistema em si, a qualquer tempo, com ou sem
                                        aviso prévio. O
                                        uso contínuo da plataforma após tais alterações será considerado como
                                        concordância
                                        automática com os novos termos.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Section 6 -->
                        <div class="transition-all duration-300 border-b border-gray-100 hover:bg-gray-50/50">
                            <div class="px-8 py-4 bg-gradient-to-r from-purple-600 to-indigo-500">
                                <div class="flex items-center">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 mr-3 bg-white rounded-lg bg-opacity-20">
                                        <span class="font-bold text-white">6</span>
                                    </div>
                                    <h4 class="text-xl font-bold text-white">Limitação de Responsabilidade</h4>
                                </div>
                            </div>
                            <div class="px-8 py-6">
                                <div class="flex items-start">
                                    <div
                                        class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-1 mr-4 bg-purple-100 rounded-xl">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="text-lg leading-relaxed text-gray-700">
                                        A equipe responsável pelo SoPeP não se responsabiliza por danos causados por
                                        falhas
                                        na conexão, indisponibilidade temporária do sistema, ou por informações
                                        inseridas
                                        incorretamente pelos usuários. O uso do sistema é disponibilizado "tal como
                                        está" e
                                        depende do correto uso técnico e ético por parte do profissional.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Section 7 -->
                        <div class="transition-all duration-300 hover:bg-gray-50/50">
                            <div class="px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-500">
                                <div class="flex items-center">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 mr-3 bg-white rounded-lg bg-opacity-20">
                                        <span class="font-bold text-white">7</span>
                                    </div>
                                    <h4 class="text-xl font-bold text-white">Suporte e Contato</h4>
                                </div>
                            </div>
                            <div class="px-8 py-6">
                                <div class="flex items-start">
                                    <div
                                        class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-1 mr-4 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-xl">
                                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="mb-4 text-lg leading-relaxed text-gray-700">
                                            Em caso de dúvidas, sugestões ou necessidade de suporte técnico, os usuários
                                            poderão entrar em contato conosco. A equipe de suporte se compromete a
                                            atender as solicitações
                                            dentro de prazos razoáveis.
                                        </p>
                                        <div
                                            class="p-4 border border-indigo-200 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl">
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                                    </path>
                                                </svg>
                                                <a href="mailto:diafeet@gmail.com"
                                                    class="font-semibold text-indigo-600 transition-colors hover:text-indigo-800">
                                                    diafeet@gmail.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Info -->
                <div class="mt-12 text-center">
                    <div
                        class="inline-flex items-center px-6 py-3 border shadow-lg bg-white/95 backdrop-blur-sm border-white/20 rounded-2xl">
                        <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="font-medium text-gray-600">Última atualização: Abril de 2024</span>
                    </div>
                </div>
            </div>
        </div>

        <footer class="relative z-10 py-6 text-white bg-gradient-to-r from-indigo-800 to-purple-900">
            <div class="container px-6 mx-auto">
                <div class="flex flex-col items-center justify-between md:flex-row">
                    <div class="mb-4 md:mb-0">
                        <h4 class="text-xl font-bold">SoPeP</h4>
                        <p class="text-sm text-indigo-200">Sistema de Prescrição Eletrônica para Pé Diabético</p>
                    </div>
                    <div class="text-center md:text-right">
                        <p class="text-sm text-indigo-200">&copy; 2024 SoPeP. Todos os direitos reservados.</p>
                        <p class="mt-1 text-xs text-indigo-300">Desenvolvido para cuidar melhor dos seus pacientes</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-app-layout>
