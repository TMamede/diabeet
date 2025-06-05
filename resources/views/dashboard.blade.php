<x-app-layout>


    <div class="flex flex-col min-h-screen pt-4 bg-gradient-to-br from-indigo-50 via-indigo-100 to-indigo-200">
        <div class="flex-grow">
            <!-- Hero Section -->
            <main class="py-16">
                <section class="container px-6 mx-auto text-center">
                    <!-- Logo/Title -->
                    <div class="mb-8">
                        <h1 class="mb-4 text-8xl font-extrabold text-indigo-900">
                            So<span class="text-indigo-600">Pe</span>P
                        </h1>
                        <div class="w-32 h-1 mx-auto bg-indigo-600 rounded-full"></div>
                    </div>

                    <!-- Subtitle -->
                    <p class="max-w-2xl mx-auto mb-12 text-xl text-gray-700 leading-relaxed">
                        Sistema de suporte clínico para monitoramento e tratamento de pacientes com pé diabético
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col gap-4 sm:flex-row sm:justify-center">
                        <a href="{{ route('about') }}" wire:navigate
                            class="px-8 py-4 text-lg font-semibold text-white bg-indigo-600 rounded-xl shadow-lg hover:bg-indigo-700 hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200">
                            Saiba Mais
                        </a>
                        <a href="{{ route('contact') }}" wire:navigate
                            class="px-8 py-4 text-lg font-semibold text-indigo-600 bg-white border-2 border-indigo-600 rounded-xl shadow-lg hover:bg-indigo-50 hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200">
                            Contato
                        </a>
                    </div>
                </section>

                <!-- Features Section - Core Features Only -->
                <section class="py-16 mt-20">
                    <div class="container px-6 mx-auto">
                        <div class="grid grid-cols-1 gap-12 md:grid-cols-2 max-w-4xl mx-auto">
                            <!-- Feature 1: Avaliação -->
                            <div
                                class="group p-10 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl transform hover:-translate-y-3 transition-all duration-300">
                                <div class="mb-8">
                                    <div
                                        class="w-20 h-20 mx-auto bg-gradient-to-br from-indigo-100 to-indigo-200 rounded-3xl flex items-center justify-center group-hover:from-indigo-200 group-hover:to-indigo-300 transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-indigo-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12h3.75M9 15h3.75M9 18h3.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-5.25a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="mb-6 text-2xl font-bold text-indigo-900 text-center">Avaliação Completa</h3>
                                <p class="text-gray-600 leading-relaxed text-center text-lg">
                                    Questionário especializado para diagnóstico e intervenções em pé diabético
                                </p>
                            </div>

                            <!-- Feature 2: Prontuário -->
                            <div
                                class="group p-10 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl transform hover:-translate-y-3 transition-all duration-300">
                                <div class="mb-8">
                                    <div
                                        class="w-20 h-20 mx-auto bg-gradient-to-br from-indigo-100 to-indigo-200 rounded-3xl flex items-center justify-center group-hover:from-indigo-200 group-hover:to-indigo-300 transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-indigo-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="mb-6 text-2xl font-bold text-indigo-900 text-center">Prontuário Digital</h3>
                                <p class="text-gray-600 leading-relaxed text-center text-lg">
                                    Geração automática de prontuários em formato PDF
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>

        <!-- Footer -->
        <footer class="py-8 text-indigo-100 bg-indigo-800">
            <div class="container px-6 mx-auto text-center">
                <p class="text-indigo-200">&copy; 2024 SoPeP. Todos os direitos reservados.</p>
            </div>
        </footer>
    </div>
</x-app-layout>
