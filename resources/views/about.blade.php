<x-app-layout>
    <x-slot name="header">
        <h2 class="pl-5 text-3xl font-bold leading-tight text-gray-800">
            {{ __('Sobre') }}
        </h2>
    </x-slot>

    <div class="flex flex-col min-h-screen ">
        <div class="flex-grow py-10">
            <div class="container px-6 mx-auto lg:px-8">
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <div class="p-6 md:p-12">
                        <h3 class="mb-6 text-2xl font-semibold text-gray-800">Bem-vindo ao nosso sistema!</h3>
                        <p class="flex items-start mb-4 text-lg text-gray-700">
                            <svg class="w-6 h-6 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zm0 18C5.58 18 2 14.42 2 10S5.58 2 10 2s8 3.58 8 8-3.58 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/>
                            </svg>
                            Nosso sistema web é dedicado ao suporte clínico e ao monitoramento de pacientes com pé diabético. Este sistema permite que enfermeiros realizem a aplicação de questionários diagnósticos.
                        </p>
                        <p class="flex items-start mb-4 text-lg text-gray-700">
                            <svg class="w-6 h-6 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zm0 18C5.58 18 2 14.42 2 10S5.58 2 10 2s8 3.58 8 8-3.58 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/>
                            </svg>
                            Os usuários do sistema, que são enfermeiros, terão a capacidade de cadastrar novos pacientes e manter um controle detalhado sobre seu histórico médico e de vida. Isso inclui medicações prescritas e alterações no estado de saúde.
                        </p>
                        <p class="flex items-start mb-4 text-lg text-gray-700">
                            <svg class="w-6 h-6 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zm0 18C5.58 18 2 14.42 2 10S5.58 2 10 2s8 3.58 8 8-3.58 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/>
                            </svg>
                            O sistema está estruturado para coletar dados a partir dos questionários, que cobrem aspectos psicobiológicos, psicossociais e psicoespirituais dos pacientes. Com base nos dados coletados, o sistema gera uma prescrição do estado atual do pé diabético de cada paciente e recomenda a terapêutica mais adequada.
                        </p>
                        <div class="mt-10 text-center">
                            <img src="{{ asset('overshoes.svg') }}" alt="Overshoes" class="h-auto mx-auto rounded-lg w-80">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="py-4 my-0 text-white bg-indigo-950">
            <div class="container px-6 mx-auto text-center">
                <p>&copy; 2024 Diabeet. Todos os direitos reservados.</p>
            </div>
        </footer>
    </div>
</x-app-layout>
