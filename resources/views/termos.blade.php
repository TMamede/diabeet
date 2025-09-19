<x-app-layout>
    <div class="relative flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
        <!-- Elementos decorativos de fundo -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="w-full h-full bg-[radial-gradient(40%_40%_at_10%_10%,#c7d2fe33,transparent),radial-gradient(45%_45%_at_90%_15%,#e9d5ff33,transparent),radial-gradient(40%_40%_at_20%_90%,#fecdd733,transparent)]"></div>
        </div>

        <div class="relative z-10 flex-grow px-4 py-12 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <!-- Header Section -->
                <div class="mb-12 text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 mb-4 bg-indigo-100 rounded-full">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h1 class="mb-4 text-4xl font-bold text-gray-900 md:text-5xl">
                        Termos de <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Uso</span>
                    </h1>
                    <p class="max-w-3xl mx-auto text-xl leading-relaxed text-gray-600">
                        Plataforma desenvolvida para auxiliar profissionais da enfermagem no cuidado especializado de pacientes com pé diabético.
                    </p>
                </div>

                <!-- Introduction Cards -->
                <div class="grid gap-6 mb-12 md:grid-cols-2">
                    <div class="p-8 border shadow-lg bg-white/95 backdrop-blur-sm border-white/20 rounded-3xl hover:shadow-xl">
                        <div class="flex items-center mb-4">
                            <div class="flex items-center justify-center w-12 h-12 mr-4 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800">Importante</h4>
                        </div>
                        <p class="leading-relaxed text-gray-700">
                            Este documento estabelece os Termos de Uso do sistema SoPeP, plataforma desenvolvida para auxiliar profissionais da enfermagem no cuidado de pacientes com pé diabético.
                        </p>
                    </div>

                    <div class="p-8 border shadow-lg bg-white/95 backdrop-blur-sm border-white/20 rounded-3xl hover:shadow-xl">
                        <div class="flex items-center mb-4">
                            <div class="flex items-center justify-center w-12 h-12 mr-4 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800">Concordância</h4>
                        </div>
                        <p class="leading-relaxed text-gray-700">
                            Ao acessar e utilizar o sistema SoPeP, o usuário declara estar ciente e de acordo com as condições aqui descritas. A utilização do sistema implica na aceitação plena e irrestrita de todos os termos.
                        </p>
                    </div>
                </div>

                <!-- Terms Container -->
                <div class="overflow-hidden border shadow-lg bg-white/95 rounded-3xl backdrop-blur-sm border-white/20">
                    <div class="space-y-0">
                        <!-- Section 1 -->
                        <div class="transition-all duration-300 border-b border-gray-100 hover:bg-gray-50/50">
                            <div class="px-8 py-4 bg-gradient-to-r from-indigo-500 to-indigo-600">
                                <div class="flex items-center">
                                    <div class="flex items-center justify-center w-8 h-8 mr-3 bg-white rounded-lg bg-opacity-20">
                                        <span class="font-bold text-white">1</span>
                                    </div>
                                    <h4 class="text-xl font-bold text-white">Objetivo do Sistema</h4>
                                </div>
                            </div>
                            <div class="px-8 py-6">
                                <p class="text-lg leading-relaxed text-gray-700">
                                    O sistema tem por finalidade oferecer um ambiente seguro e estruturado para o registro de dados clínicos e sociais de pacientes atendidos por enfermeiros(as), utilizando avaliação multidimensional.
                                </p>
                            </div>
                        </div>

                        <!-- Section 2 -->
                        <div class="transition-all duration-300 border-b border-gray-100 hover:bg-gray-50/50">
                            <div class="px-8 py-4 bg-gradient-to-r from-purple-500 to-purple-600">
                                <div class="flex items-center">
                                    <div class="flex items-center justify-center w-8 h-8 mr-3 bg-white rounded-lg bg-opacity-20">
                                        <span class="font-bold text-white">2</span>
                                    </div>
                                    <h4 class="text-xl font-bold text-white">Responsabilidades do Usuário</h4>
                                </div>
                            </div>
                            <div class="px-8 py-6">
                                <p class="text-lg leading-relaxed text-gray-700">
                                    O usuário é responsável por fornecer informações verídicas e atualizadas. O acesso indevido ou compartilhamento de credenciais é passível de sanções legais.
                                </p>
                            </div>
                        </div>

                        <!-- Section 3 -->
                        <div class="transition-all duration-300 border-b border-gray-100 hover:bg-gray-50/50">
                            <div class="px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600">
                                <div class="flex items-center">
                                    <div class="flex items-center justify-center w-8 h-8 mr-3 bg-white rounded-lg bg-opacity-20">
                                        <span class="font-bold text-white">3</span>
                                    </div>
                                    <h4 class="text-xl font-bold text-white">Privacidade e Proteção de Dados</h4>
                                </div>
                            </div>
                            <div class="px-8 py-6">
                                <p class="text-lg leading-relaxed text-gray-700">
                                    Os dados pessoais e clínicos estão protegidos pela Lei Geral de Proteção de Dados (LGPD). Apenas uso clínico autorizado será permitido.
                                </p>
                            </div>
                        </div>

                        <!-- Section 4 -->
                        <div class="transition-all duration-300 border-b border-gray-100 hover:bg-gray-50/50">
                            <div class="px-8 py-4 bg-gradient-to-r from-purple-500 to-indigo-600">
                                <div class="flex items-center">
                                    <div class="flex items-center justify-center w-8 h-8 mr-3 bg-white rounded-lg bg-opacity-20">
                                        <span class="font-bold text-white">4</span>
                                    </div>
                                    <h4 class="text-xl font-bold text-white">Propriedade Intelectual</h4>
                                </div>
                            </div>
                            <div class="px-8 py-6">
                                <p class="text-lg leading-relaxed text-gray-700">
                                    O sistema e seus conteúdos são protegidos por direitos autorais. A reprodução não autorizada é proibida.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Info -->
                <div class="mt-12 text-center">
                    <div class="inline-flex items-center px-6 py-3 border shadow-lg bg-white/95 backdrop-blur-sm border-white/20 rounded-2xl">
                        <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="font-medium text-gray-600">Última atualização: Abril de 2024</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
