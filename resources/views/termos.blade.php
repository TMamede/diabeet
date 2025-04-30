<x-app-layout>
    <x-slot name="header">
        <h2 class="pl-5 text-3xl font-bold leading-tight text-gray-800">
            {{ __('Termos de Uso') }}
        </h2>
    </x-slot>

    <div class="flex flex-col min-h-screen bg-gradient-to-b from-indigo-50 via-white to-gray-100">
        <div class="flex-grow py-12">
            <div class="mx-auto max-w-5xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white border border-gray-200 shadow-lg rounded-2xl">
                    <div class="px-8 py-12 text-gray-800 text-justify space-y-6 leading-relaxed text-lg">
                        <h3 class="text-2xl font-bold text-indigo-700 mb-6">Termos de Uso do Sistema SoPeP</h3>

                        <p>
                            Este documento estabelece os Termos de Uso do sistema SoPeP, plataforma desenvolvida com o
                            objetivo de auxiliar profissionais da enfermagem na coleta de informações, monitoramento e
                            planejamento terapêutico de pacientes com diagnóstico de pé diabético.
                        </p>

                        <p>
                            Ao acessar e utilizar o sistema SoPeP, o usuário declara estar ciente e de acordo com as
                            condições aqui descritas. A utilização do sistema implica na aceitação plena e irrestrita de
                            todos os termos, sendo responsabilidade do usuário consultar periodicamente este documento
                            para verificar possíveis atualizações.
                        </p>

                        <h4 class="text-xl font-semibold text-gray-800">1. Objetivo do Sistema</h4>
                        <p>
                            O sistema tem por finalidade oferecer um ambiente seguro e estruturado para o registro de
                            dados clínicos e sociais de pacientes atendidos por enfermeiros(as). Através de
                            questionários multidimensionais — abordando aspectos psicobiológicos, psicossociais e
                            psicoespirituais — o sistema coleta dados que subsidiam o plano de cuidado e a prescrição de
                            condutas clínicas de acordo com os princípios da Sistematização da Assistência de
                            Enfermagem.
                        </p>

                        <h4 class="text-xl font-semibold text-gray-800">2. Responsabilidades do Usuário</h4>
                        <p>
                            É de responsabilidade exclusiva do usuário fornecer informações verídicas, completas e
                            atualizadas no momento do cadastro e utilização do sistema. O acesso indevido,
                            compartilhamento de credenciais ou uso impróprio das informações de pacientes constitui
                            infração ética e poderá acarretar sanções legais, administrativas e disciplinares, conforme
                            a legislação vigente e o Código de Ética dos Profissionais de Enfermagem.
                        </p>

                        <h4 class="text-xl font-semibold text-gray-800">3. Privacidade e Proteção de Dados</h4>
                        <p>
                            Os dados pessoais e clínicos armazenados no SoPeP estão protegidos de acordo com a Lei Geral
                            de Proteção de Dados (Lei nº 13.709/2018). As informações dos pacientes serão utilizadas
                            exclusivamente para fins clínicos, estatísticos e de melhoria da qualidade da assistência,
                            sendo vedada sua divulgação a terceiros não autorizados.
                        </p>

                        <h4 class="text-xl font-semibold text-gray-800">4. Propriedade Intelectual</h4>
                        <p>
                            O sistema, sua estrutura, layout, funcionalidades, marca e todos os conteúdos ali presentes
                            são protegidos por direitos autorais e demais normas de propriedade intelectual. É proibida
                            a reprodução, distribuição ou modificação de qualquer parte do sistema sem a devida
                            autorização legal.
                        </p>

                        <h4 class="text-xl font-semibold text-gray-800">5. Atualizações e Modificações</h4>
                        <p>
                            A administração do SoPeP se reserva o direito de modificar, suspender ou atualizar qualquer
                            parte deste Termo ou do sistema em si, a qualquer tempo, com ou sem aviso prévio. O uso
                            contínuo da plataforma após tais alterações será considerado como concordância automática
                            com os novos termos.
                        </p>

                        <h4 class="text-xl font-semibold text-gray-800">6. Limitação de Responsabilidade</h4>
                        <p>
                            A equipe responsável pelo SoPeP não se responsabiliza por danos causados por falhas na
                            conexão, indisponibilidade temporária do sistema, ou por informações inseridas
                            incorretamente pelos usuários. O uso do sistema é disponibilizado “tal como está” e depende
                            do correto uso técnico e ético por parte do profissional.
                        </p>

                        <h4 class="text-xl font-semibold text-gray-800">7. Suporte e Contato</h4>
                        <p>
                            Em caso de dúvidas, sugestões ou necessidade de suporte técnico, os usuários poderão entrar
                            em contato pelo e-mail <a href="mailto:diafeet@gmail.com"
                                class="text-indigo-600 underline">diafeet@gmail.com</a>. A equipe de suporte se
                            compromete a atender as solicitações dentro de prazos razoáveis.
                        </p>

                        <p class="text-base text-gray-500 pt-6">
                            Última atualização: Abril de 2024
                        </p>
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
