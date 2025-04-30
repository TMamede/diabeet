<x-app-layout>
    <x-slot name="header">
        <h2 class="pl-5 text-3xl font-bold leading-tight text-gray-800">
            {{ __('Sobre Nós') }}
        </h2>
    </x-slot>

    <div class="flex flex-col min-h-screen bg-gradient-to-b from-indigo-50 via-gray-100 to-gray-200">
        <div class="flex-grow py-10">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <div class="p-6 md:p-12">
                        <h3 class="mb-6 text-2xl font-semibold text-gray-800">Bem-vindo ao SoPeP - Sistema de Prontuário
                            para Enfermagem no Pé Diabético</h3>

                        <p class="flex items-start mb-4 text-lg text-gray-700">
                            <svg class="w-6 h-6 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zM9 5h2v6H9V5zm0 8h2v2H9v-2z" />
                            </svg>
                            O SoPeP é um sistema digital pensado para apoiar o trabalho dos profissionais de enfermagem
                            no cuidado especializado com pacientes que convivem com o pé diabético. Sua proposta é
                            otimizar a coleta de dados, o acompanhamento contínuo e a tomada de decisões clínicas com
                            base em evidências.
                        </p>

                        <p class="flex items-start mb-4 text-lg text-gray-700">
                            <svg class="w-6 h-6 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zM9 5h2v6H9V5zm0 8h2v2H9v-2z" />
                            </svg>
                            Enfermeiros têm acesso a funcionalidades completas para cadastrar pacientes, registrar
                            informações clínicas e sociodemográficas, e monitorar a evolução da condição de saúde ao
                            longo do tempo. É possível também revisar históricos de medicação, diagnósticos prévios e
                            encaminhamentos.
                        </p>

                        <p class="flex items-start mb-4 text-lg text-gray-700">
                            <svg class="w-6 h-6 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zM9 5h2v6H9V5zm0 8h2v2H9v-2z" />
                            </svg>
                            O sistema baseia-se em questionários organizados por dimensões psicobiológicas,
                            psicossociais e psicoespirituais. Com essas informações, o SoPeP realiza a análise
                            automatizada dos dados e sugere diagnósticos e intervenções de enfermagem compatíveis com as
                            respostas coletadas.
                        </p>

                        <p class="flex items-start mb-4 text-lg text-gray-700">
                            <svg class="w-6 h-6 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zM9 5h2v6H9V5zm0 8h2v2H9v-2z" />
                            </svg>
                            Ao final do processo, um prontuário digital é gerado automaticamente, compilando as origens
                            de risco, motivos associados, diagnósticos e intervenções sugeridas. Esse prontuário pode
                            ser revisado, complementado e salvo em formato PDF para fins de documentação e continuidade
                            do cuidado.
                        </p>

                        <p class="flex items-start mb-4 text-lg text-gray-700">
                            <svg class="w-6 h-6 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zM9 5h2v6H9V5zm0 8h2v2H9v-2z" />
                            </svg>
                            O SoPeP também facilita a continuidade do atendimento ao permitir que, ao iniciar um novo
                            questionário, o sistema recupere automaticamente os dados anteriores daquele paciente,
                            poupando tempo e reduzindo a repetição de preenchimentos.
                        </p>

                        <div class="mt-10 text-center">
                            <img src="{{ asset('overshoes.svg') }}" alt="Ilustração de cuidados com pé diabético"
                                class="h-auto mx-auto rounded-lg w-80">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="py-4 my-0 text-white bg-indigo-800">
            <div class="container px-6 mx-auto text-center">
                <p>&copy; 2024 SoPeP. Todos os direitos reservados.</p>
            </div>
        </footer>
    </div>
</x-app-layout>
