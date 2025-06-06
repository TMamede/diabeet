<x-app-layout>
    <div class="flex flex-col min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 relative">
        <!-- Elementos decorativos de fundo -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-10 left-10 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 ">
            </div>
            <div
                class="absolute top-20 right-10 w-80 h-80 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-25 ">
            </div>
            <div
                class="absolute bottom-10 left-20 w-64 h-64 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-20">
            </div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-indigo-100 rounded-full mix-blend-multiply filter blur-2xl opacity-10">
            </div>
        </div>

        <div class="flex-grow relative z-10">
            <!-- Hero Section -->
            <main class="py-16">
                <section class="container px-6 mx-auto text-center">
                    <!-- Logo/Title com card -->
                    <div class="mb-12">
                        <div class="inline-block p-8 backdrop-blur-sm rounded-3xl mb-8">
                            <h1 class="mb-4 text-6xl md:text-8xl font-extrabold text-indigo-900">
                                So<span class="text-indigo-600">Pe</span>P
                            </h1>
                            <div class="w-32 h-1 mx-auto bg-indigo-600 rounded-full"></div>
                        </div>
                    </div>

                    <!-- Subtitle melhorada -->
                    <div class="max-w-4xl mx-auto mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                            Sistema de <span class="text-indigo-600">Prontuário Eletrônico</span> para Pé Diabético
                        </h2>
                        <p class="text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto">
                            Plataforma especializada para enfermeiros realizarem avaliações completas, diagnósticos
                            precisos e acompanhamento contínuo de pacientes com pé diabético
                        </p>
                    </div>

                    <!-- CTA Buttons melhorados -->
                    <div class="flex flex-col gap-4 sm:flex-row sm:justify-center mb-16">
                        <a href="{{ route('about') }}" wire:navigate
                            class="group relative px-8 py-4 bg-indigo-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:bg-indigo-700 transform hover:scale-105 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-indigo-300 focus:ring-opacity-50">
                            <span class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Saiba Mais
                            </span>
                        </a>
                        <a href="{{ route('contact') }}" wire:navigate
                            class="group px-8 py-4 text-indigo-600 bg-white/90 backdrop-blur-sm border-2 border-indigo-200 font-semibold rounded-xl shadow-lg hover:shadow-xl hover:border-indigo-300 hover:bg-white transform hover:scale-105 transition-all duration-200">
                            <span class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Contato
                            </span>
                        </a>
                    </div>
                </section>

                <!-- Features Section - Melhorada -->
                <section class="py-16">
                    <div class="container px-6 mx-auto">
                        <div class="text-center mb-16">
                            <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                                Funcionalidades <span class="text-indigo-600">Principais</span>
                            </h3>
                            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                                Ferramentas especializadas para o cuidado completo do pé diabético
                            </p>
                        </div>

                        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 max-w-6xl mx-auto">
                            <!-- Feature 1: Avaliação -->
                            <div
                                class="group p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl transform hover:-translate-y-3 transition-all duration-300 border border-white/20">
                                <div class="mb-6">
                                    <div
                                        class="w-16 h-16 mx-auto bg-gradient-to-br from-indigo-100 to-indigo-200 rounded-2xl flex items-center justify-center group-hover:from-indigo-200 group-hover:to-indigo-300 transition-all duration-300 group-hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-indigo-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12h3.75M9 15h3.75M9 18h3.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-5.25a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <h4 class="mb-4 text-xl font-bold text-indigo-900 text-center">Avaliação Completa</h4>
                                <p class="text-gray-600 leading-relaxed text-center">
                                    Questionário especializado para diagnóstico preciso e intervenções em pé diabético
                                </p>
                            </div>

                            <!-- Feature 2: Prontuário -->
                            <div
                                class="group p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl transform hover:-translate-y-3 transition-all duration-300 border border-white/20">
                                <div class="mb-6">
                                    <div
                                        class="w-16 h-16 mx-auto bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl flex items-center justify-center group-hover:from-purple-200 group-hover:to-purple-300 transition-all duration-300 group-hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-purple-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                        </svg>
                                    </div>
                                </div>
                                <h4 class="mb-4 text-xl font-bold text-purple-900 text-center">Prontuário Digital</h4>
                                <p class="text-gray-600 leading-relaxed text-center">
                                    Geração automática de prontuários profissionais em formato PDF
                                </p>
                            </div>

                            <!-- Feature 3: Diagnósticos -->
                            <div
                                class="group p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl transform hover:-translate-y-3 transition-all duration-300 border border-white/20 md:col-span-2 lg:col-span-1">
                                <div class="mb-6">
                                    <div
                                        class="w-16 h-16 mx-auto bg-gradient-to-br from-pink-100 to-pink-200 rounded-2xl flex items-center justify-center group-hover:from-pink-200 group-hover:to-pink-300 transition-all duration-300 group-hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-pink-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.25-4.875c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 17.25 18.75h-9A2.25 2.25 0 0 1 6 16.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.124-.08M15 12.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </div>
                                </div>
                                <h4 class="mb-4 text-xl font-bold text-pink-900 text-center">Diagnósticos Inteligentes
                                </h4>
                                <p class="text-gray-600 leading-relaxed text-center">
                                    Sugestões de diagnósticos e intervenções baseadas nas respostas coletadas
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>

        <!-- Footer mantido igual -->
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
