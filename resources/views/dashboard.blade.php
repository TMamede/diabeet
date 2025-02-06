<x-app-layout>
    <x-slot name="header">
        <h2 class="pl-5 text-3xl font-bold leading-tight text-indigo-900">
            {{ __('Início') }}
        </h2>
    </x-slot>

    <div class="flex flex-col min-h-screen pt-4 bg-gradient-to-br from-indigo-50 via-indigo-100 to-indigo-200">
        <div class="flex-grow">
            <!-- Main Content -->
            <main class="py-20">
                <section class="container px-6 pb-12 mx-auto text-center">
                    <h2 class="mb-4 text-5xl font-extrabold text-indigo-900">
                        <span class="text-indigo-700">Bem-vindo ao</span> Diafeet
                    </h2>
                    <p class="mb-8 text-lg text-gray-700">
                        Nosso sistema oferece suporte clínico e monitoramento eficaz para pacientes com pé diabético.
                    </p>
                    <a href="{{ route('about') }}" wire:navigate
                        class="px-8 py-4 text-lg font-semibold text-white bg-indigo-600 rounded-lg shadow-lg hover:bg-indigo-700 focus:ring focus:ring-indigo-400">
                        Saiba Mais
                    </a>
                </section>

                <!-- Features Section with Heroicons -->
                <section id="features" class="py-12 my-4 bg-gray-50">
                    <div class="container px-6 mx-auto text-center">
                        <h3 class="mb-8 text-3xl font-bold text-indigo-900">Características Principais</h3>
                        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                            <!-- Feature 1 -->
                            <div class="p-6 bg-white rounded-lg shadow-lg">
                                <div class="mb-4">
                                    <!-- Icone de Diagnóstico -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto text-indigo-700">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                    </svg>
                                        
                                </div>
                                <h4 class="mb-4 text-xl font-semibold text-indigo-700">Questionários Diagnósticos</h4>
                                <p class="text-gray-700">
                                    Avaliações detalhadas com questionários específicos para o tratamento do pé diabético.
                                </p>
                            </div>

                            <!-- Feature 2 -->
                            <div class="p-6 bg-white rounded-lg shadow-lg">
                                <div class="mb-4">
                                    <!-- Icone de Cadastro -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto text-indigo-700">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                    </svg>                                      
                                </div>
                                <h4 class="mb-4 text-xl font-semibold text-indigo-700">Cadastro de Pacientes</h4>
                                <p class="text-gray-700">
                                    Gerencie o histórico de pacientes, incluindo medicações e acompanhamento da saúde.
                                </p>
                            </div>

                            <!-- Feature 3 -->
                            <div class="p-6 bg-white rounded-lg shadow-lg">
                                <div class="mb-4">
                                    <!-- Icone de Prescrições -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto text-indigo-700">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                      </svg>
                                      
                                </div>
                                <h4 class="mb-4 text-xl font-semibold text-indigo-700">Prescrições e Recomendações</h4>
                                <p class="text-gray-700">
                                    Geração de prescrições e recomendações terapêuticas baseadas nos dados coletados.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact Section -->
                <section id="contact" class="container px-6 py-12 mx-auto text-center">
                    <h3 class="mb-8 text-3xl font-bold text-indigo-900">Entre em Contato</h3>
                    <p class="mb-8 text-lg text-gray-700">
                        Se você tiver alguma dúvida ou precisar de mais informações, entre em contato conosco.
                    </p>
                    <a href="{{ route('contact') }}" wire:navigate
                        class="px-8 py-4 text-lg font-semibold text-white bg-indigo-600 rounded-lg shadow-lg hover:bg-indigo-700 focus:ring focus:ring-indigo-400">
                        Contato
                    </a>
                </section>
            </main>
        </div>

        <!-- Footer -->
        <footer class="py-6 text-indigo-100 bg-indigo-800">
            <div class="container px-6 mx-auto text-center">
                <p>&copy; 2024 Diafeet. Todos os direitos reservados.</p>
            </div>
        </footer>
    </div>
</x-app-layout>
