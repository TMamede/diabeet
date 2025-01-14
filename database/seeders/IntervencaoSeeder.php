<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IntervencaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        
        DB::table('intervencaos')->insert([
            //Identificação sociodemográfica
            [
                'descricao' => 'Identificar condição econômica.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar ao assistente social para orientação acerca da aquisição de benefícios governamentais.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estruturar junto à equipe plano terapêutico possível de ser executado de acordo com a renda do cliente.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre apoio social.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre necessidade de cuidado de saúde e social.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular participação em oficinas manuais na Unidade de Saúde ou em espaços comunitários para geração de renda.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Historia Pregressa 1.1 (Etilista)
            [
                'descricao' => 'Investigar com o cliente o padrão do uso do álcool.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Criar estratégias junto ao cliente para redução progressiva do álcool.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular o abandono do álcool.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer o cliente que o álcool é um fator de risco ao aparecimento de úlceras.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Informar ao cliente sobre os riscos de complicações decorrentes do uso abusivo do álcool.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Informar que o uso do álcool associado as antidiabéticos orais pode ocasionar hipoglicemia grave.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Historia Pregressa 1.2 (Etilista)
            [
                'descricao' => 'Obter dados sobre qualidade de vida.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular hábitos saudáveis e melhoria nas condições de vida que promovam qualidade de vida.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar hábitos saudáveis.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Historia pregressa 1.1 (Tabagista)
            [
                'descricao' => 'Investigar com o cliente o padrão do uso do tabaco.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Criar estratégias junto ao cliente para redução progressiva do tabaco.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encorajar o cliente acerca do abandono do tabaco.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente que o tabaco predispõe ao aparecimento de úlceras.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Informar ao cliente que o uso do tabaco dificulta a ação da insulina.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Informar ao cliente sobre os riscos de complicações de diabetes decorrentes do uso abusivo de tabaco (doenças cardiovasculares).', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Historia Pregressa 1.2 (Tabagista)
            [
                'descricao' => 'Obter dados sobre qualidade de vida.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular hábitos saudáveis e melhoria nas condições de vida que promovam qualidade de vida.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar hábitos saudáveis.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Regulação Neurologica
            [
                'descricao' => 'Obter dados sobre cognição.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Contribuir com a auto cognição junto à equipe multidisciplinar.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar à família sobre cognição prejudicada.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Adequar orientações de acordo com a compreensão cultural.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar o familiar o planejamento de atividades lúdicas que promovam a memória.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o familiar a monitorar o nível de consciência.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o familiar a estimular a memória repetindo o último pensamento que o cliente expressou.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o familiar a manter o cliente orientado no tempo e espaço (proporcionando relógio, calendário, espelho, etc.).', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Incentivar familiares na participação do tratamento.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Percepção Orgãos Sentidos (Olhos)
            [
                'descricao' => 'Realizar Teste de Snellen.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar o cliente para exame oftalmológico se Teste de Snellen alterado.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar capacidade do cliente de realizar auto aplicação de insulina.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar glicemia e hemoglobina glicada.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente a realizar periodicamente exame de fundo do olho para monitorar complicações como retinopatia diabética.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente quanto à importância de manter níveis glicêmicos dentro dos parâmetros normais e minimização das complicações decorrentes do diabetes.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente a comunicar as alterações na acuidade visual.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Permitir que o cliente expresse seus sentimentos a respeito da perda da visão e seu impacto sobre o estilo de vida.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente em caso de visão prejudicada que peça ajuda para o corte das unhas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar o familiar ou cuidador a preparar a insulina.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Percepção Orgãos Sentidos (Risco de Queda)
            [
                'descricao' => 'Realizar visita domiciliar com a equipe para identificar fatores de risco para queda.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados de conhecimento sobre prevenção de quedas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar sobre prevenção de quedas no domicílio e ambiente externo.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar familiares sobre prevenção de quedas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Percepção Orgãos Sentidos (Percepção Tátil)
            [
                'descricao' => 'Avaliar a sensibilidade tátil, térmica e dolorosa em membros inferiores.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Examinar a integridade da pele.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Examinar os pés e pernas a cada retorno: inspeção e palpação da pele, das unhas, do subcutâneo e da estrutura, palpação dos pulsos arteriais e avaliação da sensibilidade protetora plantar.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o paciente a comunicar as alterações de sensibilidade e o surgimento de qualquer tipo de lesão.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o paciente a manter unhas cortadas e não coçar a pele.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o paciente a não usar produtos abrasivos na pele.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o paciente com alterações nos pés sobre ajustes quanto ao tipo de sapato, tipo de atividade física e uso de dispositivos auxiliares para deambulação (muleta, andador, cadeira de rodas).', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar a ocorrência de trauma.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar a sensibilidade tátil, térmica e dolorosa em membros inferiores.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Percepção Orgãos Sentidos (Ouvido)
            [
                'descricao' => 'Avaliar capacidade de comunicação do cliente.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Analisar dificuldades do cliente em relatar sintomas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar o grau de compreensão do cliente.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Manter visita domiciliar periódica junto à equipe para identificação de riscos.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Nutrição Maior Consumo 1.1
            [
                'descricao' => 'Realizar Inter consulta com nutricionista do Núcleo de Apoio à Saúde da Família (NASF).', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente quanto à importância de uma alimentação adequada no processo de reparação tecidual.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar o cliente o impacto dos alimentos no diabetes.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente a adotar dieta hipossódica, hipoglicêmica e hipoproteica.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar quanto à importância de estabelecer um planejamento diário das refeições fazendo um fracionamento alimentar.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar visita domiciliar (VD) para identificar dificuldades e promover adequação alimentar junto à família.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Nutrição Maior Consumo 1.2
            [
                'descricao' => 'Obter dados sobre qualidade de vida.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular hábitos saudáveis e melhoria nas condições de vida que promovam qualidade de vida.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar hábitos saudáveis.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Nutrição Restrição Alimentar
            [
                'descricao' => 'Avaliar a adesão ao regime dietético.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar interconsulta com nutricionista do NASF para adequação da dieta.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar a ingestão e a aceitação alimentar.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar com cliente possíveis resistências dietéticas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer a importância de adesão e manutenção da dieta prescrita pelo nutricionista.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Sono e Repouso
            [
                'descricao' => 'Identificar com cliente possíveis fatores que possam provocar insônia.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a controlar fatores ambientais que influenciam na resposta ao desconforto.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar quanto a necessidade do repouso para não estimular contrações musculares e articulares excessivas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Desencorajar a ingestão de líquidos após às 19h.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Discutir com o cliente e a família as medidas de conforto, as técnicas de monitoramento do sono e as mudanças no estilo de vida.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a adoção do hábito de banho morno antes de dormir para promover relaxamento.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a organizar atividades da vida diária de modo a permitir períodos de repouso à noite sem interrupções.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a administração de analgésico conforme prescrição médica em caso de dor.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Exercicios Fisicos 1.1
            [
                'descricao' => 'Avaliar os efeitos da prática de exercícios como melhora do perfil glicêmico, redução do peso, e melhora da sensibilidade.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar a adesão ao regime de exercícios físicos.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer a importância da prática de atividade física.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular adoção da atividade física de acordo com a aptidão do cliente, e a adequação da dose de insulina.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encorajar o cliente a manter adesão ao programa de atividade física com utilização de sapatos adequados.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular a prática da atividade física regularmente, ouvindo e manejando possíveis dificuldades.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Exercicios Fisicos 1.2
            [
                'descricao' => 'Obter dados sobre qualidade de vida.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular hábitos saudáveis e melhoria nas condições de vida que promovam qualidade de vida.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar hábitos saudáveis.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Abrigo
            [
                'descricao' => 'Solicitar visita domiciliar pelo ACS para avaliar condições de moradia.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre condição da habitação.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a higienização adequada da habitação a fim de prevenir infecções.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar ao cliente a manter ambiente seguro modificando mobílias e facilitando a movimentação a fim de evitar lesões e quedas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar ao cliente/cuidador a manter iluminação adequada no ambiente para o desempenho das atividades da vida diária.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Apoiar o cliente na resolução de suas dúvidas em relação a adaptação de sua habitação.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Regulação Hormonal IMC 1.1
            [
                'descricao' => 'Monitorar peso (IC).', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar interconsulta com nutricionista do NASF.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre comportamento de ingestão de alimentos e líquidos.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estabelecer com o cliente um plano alimentar adequado ao seu estilo de vida.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encorajar a ingestão de alimentos conforme necessidades nutricionais e preferências alimentares, respeitando prescrição do nutricionista.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer ao cliente as consequências negativas da ingestão excessiva de alimentos.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente a controlar o peso.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Discutir com o cliente sobre a importância da adesão à alimentação saudável.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar o cliente a seleção dos alimentos fora de casa.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar as causas da ingestão nutricional prejudicada.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar a necessidade de mudança de hábitos alimentares.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente sobre a importância de manutenção do peso adequado.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer possíveis complicações em caso de sobrepeso.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar possível transtorno de ansiedade.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Regulação Hormonal IMC 1.2
            [
                'descricao' => 'Obter dados sobre qualidade de vida.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular hábitos saudáveis e melhoria nas condições de vida que promovam qualidade de vida.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar hábitos saudáveis.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Regulação Hormonal Glicemia <70
            [
                'descricao' => 'Realizar o teste glicêmico nas consultas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Solicitar exame de hemoglobina glicada periodicamente.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar ao médico em caso de manutenção da hiperglicemia.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar com cliente possíveis causas de hiperglicemia.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Incentivar a manutenção dos níveis glicêmicos dentro dos padrões normais.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encorajar o auto monitoramento dos níveis de glicose no sangue.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar quanto à importância do controle glicêmico para o reparo tecidual.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a administrar injeção usando técnica asséptica.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar que o mau controle glicêmico é fator de risco para úlceras nos pés.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Regulação Hormonal Glicemia >100
            [
                'descricao' => 'Realizar o teste glicêmico nas consultas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar conhecimento do cliente sobre o esquema terapêutico dos fármacos em uso e o tempo de ação de cada medicação.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Incentivar o cliente a manter o controle glicêmico dentro dos padrões normais.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encorajar o auto monitoramento dos níveis de glicose no sangue.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar o cliente como proceder em caso de valores baixos de glicose sanguínea.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer sobre sintomas de hipoglicemia e investigar sintomas individuais.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente a procurar a unidade de saúde em caso de histórico de hipoglicemia recorrente para identificação das causas e ajuste do regime terapêutico.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente a verificar glicemia capilar antes de desempenhar tarefas diárias importantes, se insulinodependente.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Alertar os clientes quanto à importância de monitoramento da glicemia antes, durante e após a atividade física.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Oxigenação
            [
                'descricao' => 'Orientar repouso.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar saturação de oxigênio sanguíneo usando oxímetro de pulso.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar tolerância à atividade.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre a condição respiratória do paciente.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar para atendimento médico.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Regulação Térmica 1.1
            [
                'descricao' => 'Acolher imediatamente o cliente em caso de hipertermia.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar ao médico para prescrição medicamentosa.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar possíveis causas de hipertermia.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar a utilização da medicação prescrita para a febre.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Regulação Térmica 1.2
            [
                'descricao' => 'Solicitar ao técnico de enfermagem aferição da temperatura corporal em todas as consultas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a manter a ferida limpa e seca para impedir proliferação de microrganismos.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar o cliente a aferir temperatura corporal.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente a procurar unidade de saúde em caso de hipertermia.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar orientações de autocuidado para reduzir risco de contaminação da ferida.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Sexualidade
            [
                'descricao' => 'Obter dados sobre comportamento sexual.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar ao médico para avaliação e conduta.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Aconselhar sobre comportamento sexual.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a necessidade de manutenção da glicemia estável.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Locomoção 1.1
            [
                'descricao' => 'Monitorar pontos de pressão.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar à terapia ocupacional para confecção de calçado terapêutico.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar à fisioterapia.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar deformidades nos pés como dedos em garra, forma anormal do pé, pé de charcot, mobilidade articular do pé alterada.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar encaminhamento para ortopedista para avaliação da necessidade do uso de órteses.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar atrofia muscular.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar retorno do paciente da atenção especializada.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar dificuldade de locomoção.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar capacidade para realização das atividades da vida diária.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre fraqueza muscular.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar capacidade de realização de autocuidado por limitação física.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre força e fadiga.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar que a deformidade nos pés é fator de risco para úlcera nos pés.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Promover orientação para facilitar atividades da vida diária.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar técnica de exercício muscular ou articular.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular atividade física monitorada e adaptada com educador físico na Academia Carioca da Saúde.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer em caso de alterações nos pés sobre os ajustes quanto ao tipo de sapato, tipo de atividade física, uso de dispositivos auxiliares para deambulação (muletas, andadores, cadeiras de roda).', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Locomoção 1.2
            [
                'descricao' => 'Avaliar alteração da marcha.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Pesquisar atrofia das pernas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar atrofias de músculos interósseos do metatarso.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Verificar reflexo de aquileu se abolido, diminuído, normal ou exaltado.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Indagar acerca de fraqueza muscular.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar junto ao cliente a necessidade de uso de dispositivo para auxílio na marcha.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a usar um espelho para verificar a planta dos pés se não puder levantá-los.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Locomoção 1.3
            [
                'descricao' => 'Investigar deformidades que prejudiquem o equilíbrio.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre o equilíbrio.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar cliente uso apropriado de muletas, andadores, bengalas, próteses.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Locomoção 1.4
            [
                'descricao' => 'Investigar deformidades que prejudiquem o equilíbrio.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre o equilíbrio.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar cliente uso apropriado de muletas, andadores, bengalas, próteses.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Regulação Vascular PA
            [
                'descricao' => 'Monitorar a pressão arterial frequentemente.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Atentar para queixas de tontura e cervicalgia.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Acolher por demanda espontânea em caso de pressão alterada.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar consultas periódicas em casos moderados a graves.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Solicitar busca ativa pelo agente comunitário em caso de falta à consulta.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar o familiar a aferir a pressão arterial.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a monitorar a pressão arterial frequentemente com padrão adequado de aferição (horário, posição de verificação e condições).', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a adotar medidas de prevenção do aumento da pressão arterial.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente quanto ao uso contínuo de medicamentos anti-hipertensivos.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente sobre a comunicação imediata em caso de desconforto torácico.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Regulação Vascular Pressão 1.1
            [
                'descricao' => 'Avaliar a perfusão tissular periférica.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar a presença de pulsos.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Inspecionar as pernas quanto à integridade, hidratação e coloração.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Examinar os pés e pernas a cada retorno: inspeção e palpação da pele, das unhas, do subcutâneo e da estrutura, palpação dos pulsos arteriais e avaliação da sensibilidade protetora plantar.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar para atendimento médico.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Regulação Vascular Pressão 1.2
            [
                'descricao' => 'Realizar avaliação clínica a cada retorno à consulta palpando pulsos arteriais tibiais posteriores e pedioso.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar ao médico da equipe de saúde para avaliação.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Propor ao médico da equipe encaminhamento ao angiologista ou cirurgião vascular.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar sinais e sintomas de isquemia e encaminhar para avaliação especializada.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Explicar a importância da adesão ao tratamento farmacológico e não farmacológico para manutenção da circulação sanguínea eficaz.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Regulação Vascular Pressão 1.3
            [
                'descricao' => 'Monitorar pulsos tibiais posteriores e pedioso sistematicamente.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar o cliente e familiares sinais e sintomas de isquemia severa.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a procurar unidade de saúde de emergência em casos graves.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar sobre risco de perda do membro afetado.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a importância de manutenção dos níveis glicêmicos com adoção de hábitos saudáveis.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],                                    
            //Sensopercepção Unhas
            [
                'descricao' => 'Prescrever regime de cuidados com as unhas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar o corte das unhas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar presença de unhas encravadas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar a necessidade de correção das unhas encravadas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente a realizar o corte reto das unhas e não muito rente, preferencialmente após o banho com tesoura de ponta arredondada.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente a não coçar a pele.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar para que o cliente não tente corrigir sozinho as unhas encravadas.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Sensopercepção Gangrena
            [
                'descricao' => 'Investigar causas para coloração da pele alterada como doença arterial periférica.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar o cliente e familiares em grupos, consultas ou VD’s a monitorar pele com sinais de cianose, vermelhidão e reluzência.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Sensopercepção Perda de pelos nos pés
            [
                'descricao' => 'Observar distribuição de pelos.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Correlacionar ausência de pelos com outros sintomas que sinalizem redução da perfusão sanguínea.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar queda ou ausência de pelos.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Explicar causas de redução da pilificação.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular adesão ao tratamento para melhoria da perfusão sanguínea.', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //SensoPercepção Calosidades
            [
                'descricao' => 'Investigar em toda consulta a presença de calos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar a necessidade de remoção de calos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar à terapeuta ocupacional para confecção de sapatos adequados.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular o cliente a realização do autoexame em busca de calos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer ao cliente para não utilizar agentes químicos ou emplastros para remoção dos calos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar ao cliente a não remover calos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //SensoPercepção Presença de hematomas
            [
                'descricao' => 'Avaliar extensão do hematoma.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar possíveis causas do hematoma.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar ao cliente prevenção de traumas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer acerca da fragilidade capilar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar quanto aos riscos de traumas devido a dificuldade de cicatrização.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer necessidade de manutenção de níveis glicêmicos adequados.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //SensoPercepção Fissuras
            [
                'descricao' => 'Monitorar hidratação da pele a cada consulta.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar resposta cutânea à terapia de hidratação.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre autocuidado com a pele.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Identificar possíveis dificuldades do cliente em manter padrão adequado de hidratação da pele.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente/cuidador a massagear a pele com cremes ou óleos, evitando a área entre os dedos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a controlar ingestão hídrica.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar sobre autocuidado com a pele.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //SensoPercepção Testes 1.1
            [
                'descricao' => 'Realizar avaliação vascular para classificar a úlcera isquêmica, neuropática ou neuroisquêmica.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Classificar a categoria de risco para amputações.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar para avaliação com cirurgião vascular.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar espessamento das unhas, pele atrofiada, fria e reluzente.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar a cada consulta avaliação da sensibilidade protetora plantar e do membro afetado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Verificar reflexo de aquileu se abolido, diminuído, normal ou exaltado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Examinar os pés nas consultas a procura de bolhas, calos, feridas, vermelhidão ou qualquer outra alteração, incluindo sola dos pés e entre dedos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Procurar sinais de neuropatia autonômica periférica como pele seca e descamativa, hiperemia, perda das unhas, calosidades, fissuras nos pés, anormalidade na sudorese dos pés, edema, pé quente, ectasias vasculares.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar sinais de DAOP como pele fina e brilhante, pele fria, rarefação de pelos, unhas distróficas, palidez cutânea, palidez à elevação do membro, rubor ou cianose com membro pendente, úlceras e amputações.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar avaliação vascular periférica investigando a presença de claudicação intermitente, dor ao repouso ou durante a noite.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre perda de sensibilidade.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Indagar acerca de alterações sensitivas nos pés em bota ou meias.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Verificar com o cliente dor lancinante nos membros inferiores.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Indagar acerca do tempo relacionado ao início dos sintomas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Pesquisar cansaço nas pernas, pés frios, dor em repouso nas pernas e pés, claudicação intermitente, presença de úlcera ou amputação.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar queimação nos pés.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar sensação de picadas em pernas ou pés.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar dor nas pernas ou nos pés que pioram à noite.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar ao cliente que a neuropatia periférica e a doença vascular periférica são fatores de risco para úlceras nos pés.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar os clientes com perda de sensibilidade nos pés a evitar realizar exercícios do tipo corrida, caminhada prolongada, esportes com impacto, e exercícios cíclicos que requerem sustentação do corpo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente a comunicar de imediato as alterações de sensibilidade e o surgimento de qualquer tipo de lesão (micoses, calos, úlceras).',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //SensoPercepção Testes 1.2
            [
                'descricao' => 'Monitorar pontos de pressão.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar à terapia ocupacional para confecção de calçado terapêutico.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar à fisioterapia.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar deformidades nos pés como dedos em garra, forma anormal do pé, pé de charcot, mobilidade articular do pé alterada.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar encaminhamento para ortopedista para avaliação da necessidade do uso de órteses.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar atrofia muscular.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar retorno do paciente da atenção especializada.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar dificuldade de locomoção.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar capacidade para realização das atividades da vida diária.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre fraqueza muscular.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar capacidade de realização de autocuidado por limitação física.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre força e fadiga.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar que a deformidade nos pés é fator de risco para úlcera nos pés.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Promover orientação para facilitar atividades da vida diária.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar técnica de exercício muscular ou articular.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular atividade física monitorada a adaptada com educador físico na Academia Carioca da Saúde.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer em caso de alterações nos pés sobre os ajustes quanto ao tipo de sapato, tipo de atividade física, uso de dispositivos auxiliares para deambulação (muletas, andadores, cadeiras de roda).',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //SensoPercepção Testes 1.3
            [
                'descricao' => 'Investigar deformidades que prejudiquem o equilíbrio.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre o equilíbrio.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar cliente uso apropriado de muletas, andadores, bengalas, próteses.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],            
            //Integridade Cutanea Bordas
            [
                'descricao' => 'Evitar umidificação excessiva da pele, atentando à utilização de soluções e coberturas somente na área da lesão.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Não realizar desbridamento em área macerada.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Atentar na retirada da fita adesiva na troca de curativos para não aumentar a lesão.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar ao cliente e familiares quanto à realização correta do curativo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Integridade Cutanea Edema
            [
                'descricao' => 'Monitorar resultados laboratoriais.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar condições da pele e a perfusão.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar e registrar a evolução e a localização do edema.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar a necessidade de restrição hídrica.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar pressão arterial antes e após a consulta.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a manter o membro em repouso na presença de edema.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar cuidados com pés edemaciados.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a manter a extremidade edemaciada elevada acima do nível do coração, salvo se houver contraindicação.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Explicar a necessidade de restrição de sódio da dieta.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a manter registro de ingestão e eliminação de líquidos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Integridade Cutanea Quantidade de Exudato 1.1
            [
                'descricao' => 'Organizar plano terapêutico para eliminação da infecção junto à equipe multidisciplinar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Solicitar avaliação médica para prescrição de antibioticoterapia.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar a necessidade de desbridamento, caso haja tecido desvitalizado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar sinais e sintomas de infecção como: eritema, inflamação da dobra ungueal, bolhas, micose interdigital, onicomicose, calafrios, dor.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar risco de contaminação.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Solicitar dados do domicílio ao agente comunitário de saúde para avaliar aumento do risco de contaminação.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Prescrever a utilização de coberturas com prata para úlceras com sinais de infecção.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar coleta de material para cultura de secreção da ferida em caso de resistência.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre susceptibilidade a infecção.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar sobre riscos de exposição a contaminação.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Explicar sobre prevenção de contaminação da úlcera.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar manejo para realização correta do curativo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a família sobre prevenção de infecção.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Integridade Cutanea Quantidade de Exudato 1.2
            [
                'descricao' => 'Avaliar evolução da cicatrização da ferida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar temperatura da pele.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Instruir sobre os cuidados com a ferida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar os sinais e sintomas de infecção da ferida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Integridade Cutanea Quantidade de Exudato 1.3
            [
                'descricao' => 'Gerenciar sangramento da úlcera.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Identificar causas do sangramento da úlcera.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar ao médico para solicitação de exames laboratoriais.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Examinar membros inferiores.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer ao cliente necessidade de repouso.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar ao cliente técnicas de cobertura para contenção do sangramento da úlcera.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar sobre fatores nocivos ao vaso sanguíneo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a prevenção de traumas no local da úlcera.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Integridade Cutanea Quantidade de Exudato 1.4
            [
                'descricao' => 'Avaliar ferida para tomada de decisão em relação ao curativo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar necessidade de desbridamento da ferida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Fazer desbridamento.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Remover corpo estranho do leito da ferida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Instruir sobre os cuidados com a ferida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Manter a ferida úmida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar o edema e umidade em bordas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar a aparência de bordas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Prescrever uso de hidratante de pele perilesional.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Remover sujidades de ferida com jato de solução fisiológica.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Molhar o curativo com solução fisiológica ou água antes de remover.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Solicitar exames laboratoriais para avaliação.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Suspender uso de possíveis alérgenos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Tratar reação alérgica.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar quanto ao risco de infecção.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar sobre reação alérgica.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Identificar surgimento de reações alérgicas decorrentes do tratamento tópico implementado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar a infecção.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o paciente para o curativo domiciliar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],                                                                        
            //Integridade Cutanea Quantidade de Exudato 1.5
            [
                'descricao' => 'Instruir sobre cuidados com a pele.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Examinar a condição da pele.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar a cor, temperatura, umidade e aparência da pele.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar sobre o uso de hidratantes.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Prescrever uso de hidratante de pele perilesional.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Prescrever uso de hidratante de pele.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Aplicar hidratante na pele.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular o estabelecimento de hábitos diários de higiene corporal e ambiental.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar turgor cutâneo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar necessidade de curativo de proteção.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Identificar mecanismo causador do eritema.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Identificar mecanismo causador do hiperemia.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o paciente quanto aos cuidados para prevenção de recorrência de úlcera.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Identificar surgimento de reações alérgicas decorrentes do tratamento tópico implementado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar sobre reação alérgica.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Suspender uso de possíveis alérgenos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Tratar reação alérgica.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Integridade Cutanea Quantidade de Exudato 1.6
            [
                'descricao' => 'Encaminhar ao médico da equipe ESF para avaliar necessidade de prescrição medicamentosa.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar sinais inflamatórios.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Solicitar aferição da temperatura pelo técnico de enfermagem.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre inflamação e sua evolução.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar ao cliente necessidade de higiene adequada no local da inflamação.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o monitoramento da temperatura corporal.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Integridade Cutanea Quantidade de Exudato 1.7
            [
                'descricao' => 'Avaliar cicatrização da ferida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Solicitar realização do curativo em domicílio pelo auxiliar/ técnico de enfermagem, se necessário.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar com o cliente evolução da cicatrização da ferida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar ao cliente sobre limpeza e curativo da ferida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o cliente sobre autocuidado com a ferida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Incentivar à manutenção de hábitos saudáveis.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar sobre necessidade de cicatrização da ferida para prevenção de amputações.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Identificar em visita domiciliar dificuldades de manejo da ferida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Integridade Cutanea Dor
            [
                'descricao' => 'Investigar a relação da dor com possíveis reações adversas a antidiabéticos orais em uso.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar ao médico da equipe para prescrição do fármaco.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar cianose.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estruturar junto à equipe um plano de manejo da dor.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Implementar escala da dor.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar características da dor, incluindo local, início, duração, frequência, qualidade, intensidade e fatores precipitantes.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar sensibilidade periférica.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados de dor lancinante junto ao cliente e sua evolução.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular o auto monitoramento da dor e a intervenção adequada conforme prescrição médica ou de enfermagem.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encorajar o uso de técnicas não farmacológicas (relaxamento, aplicação de compressas frias e quentes, aplicação de massagem) antes, após e se possível durante atividades dolorosas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a monitorar a resposta aos analgésicos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a reduzir ou eliminar os fatores que precipitem ou aumentem a experiência de dor.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a favorecer sono/repouso adequados para o alívio da dor.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Cuidados com a Ferida 1.1
            [
                'descricao' => 'Avaliar membro homólogo ao membro afetado quanto ao surgimento de novas lesões.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Descrever as características da úlcera (tamanho, profundidade, estágio I-IV, localização, granulação, tecido desvitalizado, epitelização, tipo de exsudato e quantidade).',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar para realizar curativo com técnico de enfermagem após prescrição pelo enfermeiro.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar o cliente para realizar desbridamento e curativo em serviços especializados, quando necessário.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar à consulta médica em caso de nova úlcera, descoloração, edema ou necrose.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar coleta de material para cultura nos ferimentos infectados (base da úlcera).',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar limpeza diária com solução fisiológica a 0,9% aquecida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Evitar uso de esparadrapo diretamente sobre a pele.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar desbridamento diário em caso de crosta ou calosidades avaliando a necessidade de encaminhamento ao cirurgião.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Prescrever à equipe e ao cliente a cobertura para lesão de acordo com tipo de tecido predominante.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Agendar reavaliação da úlcera de acordo com a classificação de risco.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar que as úlceras prévias são fatores de risco para novas úlceras nos pés.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar repouso com membro inferior ligeiramente elevado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a proteger calcâneo e a região maleolar para que não surjam novas úlceras.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a não apoiar o pé no chão se úlceras presentes.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar que a detecção e tratamento precoce das úlceras aumentam as chances de cicatrização.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar que o repouso apropriado é fundamental no processo de cura.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer ao cliente para comunicar à equipe em caso de dor na úlcera.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar com o cliente para comunicar imediatamente à equipe de saúde em caso de mudança no odor dos pés ou da lesão, ou na ocorrência de edema e ou sensação de mal-estar como febre, sintomas de resfriado ou de diabetes mal controlado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar ao cliente e ou cuidadores como realizar curativo no domicílio.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Cuidados com a Ferida 1.2
            [
                'descricao' => 'Realizar cuidados com ferida aberta.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Implementar regime de cuidados com a pele.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Implementar regime de cuidados com as unhas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Prescrever tratamento da ferida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Apoiar e supervisionar o familiar para exercício do cuidado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular participação no planejamento do autocuidado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar ao técnico de enfermagem a realização do curativo em domicílio em caso de falta ou alta vulnerabilidade.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Aprendizagem 1.1
            [
                'descricao' => 'Estabelecer com a pessoa um plano terapêutico realista possível de ser alcançado a partir das suas habilidades.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estabelecer uma aliança terapêutica.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Utilizar medidas diretas (análise bioquímica) e indiretas (entrevista) para mensurar a adesão ao plano terapêutico.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a importância do controle glicêmico nos parâmetros da normalidade.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encorajar a desenvolver habilidades no uso do glicosímetro.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar o cliente a confeccionar um perfil de glicemia por meio de um diário de glicemia ou por download dos resultados em computadores.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar os itens da técnica de punção, amostra de sangue, e descarte de material.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular participação em grupos de apoio terapêutico para compartilhar saberes e experiências na construção de um viver mais saudável com diabetes.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ouvir possíveis dúvidas e medos que impedem a adesão ao regime terapêutico.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Aprendizagem 1.2
            [
                'descricao' => 'Supervisionar o cliente em consulta quanto ao procedimento de auto monitoramento da glicemia.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar o conhecimento do paciente com relação aos seus pés.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar o autocuidado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar as condições dos calçados e das palmilhas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar saúde mental do cliente.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a lavar os pés todos os dias com água morna e sabão neutro.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a secar bem os pés após o banho com toalha seca e macia, enxugando muito bem a pele entre os dedos, especialmente entre os últimos dedos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a hidratar os pés, não utilizando o hidratante entre os dedos ou em áreas com feridas abertas ou rachaduras.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a não utilizar talco, pois provoca ressecamento predispondo ao aparecimento de lesões.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar a necessidade do uso de meias limpas, sem costuras, preferencialmente de algodão e de cor clara facilitando a identificação de novas lesões, trocando-as diariamente.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a não utilizar sapatos sem meias.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar e anotar no prontuário a necessidade de avaliação frequente com reforço das orientações.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Implementar estratégias para desenvolvimento do autocuidado, identificando rede de apoio e manter rede de apoio até que a pessoa ou sua rede tenha autossuficiência.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular o autocuidado de acordo com a capacidade do cliente.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Oferecer uma rotina de atividades de autocuidado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Capacitar o familiar para a realização dos cuidados.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a realizar inspeção dos pés diariamente, incluindo as áreas entre os dedos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Demonstrar a execução da técnica de auto monitoramento da glicemia abordando todas as informações do procedimento.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Utilizar estratégias educativas promotoras de mudanças comportamentais de autocuidado, incluindo a informação, a educação, e a comunicação interpessoal adaptada aos objetivos, ao contexto sociocultural e ao estilo de vida do cliente.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a não utilizar água quente nos pés e não os deixar em imersão.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar com o cliente a necessidade de participação do tratamento na prevenção de agravos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Manter supervisão domiciliar pelos agentes comunitários de saúde, reforçando e avaliando implementação das orientações.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Aprendizagem 1.3
            [
                'descricao' => 'Avaliar mudanças comportamentais de autocuidado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encaminhar ao psicólogo em caso de alterações psíquicas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar barreiras para adesão ao tratamento medicamentoso.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Identificar o nível de aceitação do diabetes e de suas complicações.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Incentivar o cliente a participar de grupos de apoio terapêutico.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Proporcionar na consulta de enfermagem um espaço de orientações e diálogo de maneira consistente a favorecer um viver melhor com diabetes.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Incentivar o cliente a manter-se produtivo e ativo negociando ações no seu cotidiano que possibilitem um viver melhor com o diabetes.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar para o cliente as informações sobre comportamentos de autocuidado e sua implicação direta na sua qualidade de vida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],            
            //Aprendizagem 1.4 
            [
                'descricao' => 'Ensinar aspectos relacionados ao glicosímetro, como características específicas do medidor escolhido, limpeza do aparelho, calibração, ajuste de data e hora, estocagem das tiras reagentes, validade do frasco aberto.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar quanto à frequência dos testes e metas da glicemia.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Rever aspectos técnicos do procedimento de auto monitoramento da glicemia.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar a necessidade de autoexame dos pés diariamente.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a comunicação imediata aos profissionais da equipe se presentes os sinais e sintomas como alterações no tamanho da úlcera e cor da pele ao redor da úlcera, marcas azuladas tipo hematomas ou escurecimento da pele e presença de secreção, e surgimento de novas úlceras ou bolhas nos pés.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar o uso de sapatos com saltos baixos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar a evitar o frio e o calor extremo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer a importância de comprar sapatos no fim da tarde quando os pés costumam a inchar ligeiramente.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Esclarecer a importância de manutenção dos níveis glicêmicos adequados para evitar complicações.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar quanto à aplicação de insulina prescrita, cuidados com armazenamento e rodízio no local na aplicação.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],            
            //Aprendizagem 1.5                         
            [
                'descricao' => 'Avaliar resposta à medicação.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar resposta à terapia de hidratação da pele.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar resposta ao manejo da dor.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar resposta à termo regulação.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar resposta ao tratamento não farmacológico.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar resposta psicossocial às orientações sobre cuidados com a ferida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Propor projeto terapêutico singular com a equipe multidisciplinar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Aprendizagem AutoMonitoramento
            [
                'descricao' => 'Manter coordenação de cuidados de enfermagem.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Identificar atitude em relação ao cuidado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar atitude positiva sobre autocuidado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar atitude positiva sobre execução do autocuidado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar atitude positiva do apoio familiar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar atitude positiva em relação ao manejo da medicação.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar atitude positiva em relação ao regime terapêutico.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Recreação                         
            [
                'descricao' => 'Identificar com o cliente atividades que lhe sejam prazerosas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Envolver familiares ou pessoas da rede social do cliente para apoiar e auxiliar nas atividades de lazer.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular a execução de atividades de lazer para melhoria da saúde mental.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular integração nos grupos terapêuticos da unidade de saúde.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular participação em espaços de convivência na unidade de saúde e na comunidade.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Amor e Aceitação (Acompanhado)
            [
                'descricao' => 'Discutir com a família e paciente sobre a corresponsabilidade no tratamento sobre as reações adversas durante o tratamento.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Investigar o nível de compreensão e aceitação da família do estado de saúde atual do paciente.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar sobre o estado de saúde atual do paciente.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Amor e Aceitação (Emocional) 1.1
            [
                'descricao' => 'Solicitar ao cliente a presença de familiar de convívio do cliente a participar das consultas de enfermagem para adquirir conhecimento sobre procedimentos e apoiar emocionalmente o paciente.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar interconsulta com psicólogo do NASF.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre apoio emocional.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre condição psicológica.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Proporcionar apoio emocional.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular participação do cliente em grupos terapêuticos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Amor e Aceitação (Emocional) 1.2
            [
                'descricao' => 'Realizar escuta ativa acerca do relato das preocupações do cliente.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Promover a confiança do cliente no atendimento prestado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Verificar com o cliente os fatores causadores de medo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Adotar abordagens educativas para o desenvolvimento de novas maneiras de enfrentamento da situação vigente.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encorajar o cliente a verbalizar sentimentos, percepções e medos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Incentivar o cliente a participar de grupos de apoio terapêutico.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Orientar necessidade de adesão ao tratamento e redução da hiperglicemia.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Amor e Aceitação (Emocional) 1.3
            [
                'descricao' => 'Encaminhar ao psicólogo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Discutir com médico da equipe de saúde da família (ESF) a necessidade de prescrição medicamentosa.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Monitorar efeitos da ansiedade sobre o comportamento de autocuidado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre ansiedade com cliente e familiares.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular participação em grupos de apoio e ou terapias alternativas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Amor e Aceitação (Emocional) 1.4
            [
                'descricao' => 'Realizar interconsulta com psicólogo do NASF.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Obter dados sobre sofrimento.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Identificar com cliente causas do sofrimento e tristeza.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Discutir com o cliente medidas que possam reduzir o sofrimento.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular terapia em grupo de pessoas com diabetes.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular adesão ao tratamento para melhoria da condição de saúde e aumento da qualidade de vida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],            
            //Amor e Aceitação (Emocional) 1.5                                    
            [
                'descricao' => 'Identificar comportamentos de risco.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar interconsulta com psicólogo do NASF.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Discutir o caso com médico da equipe para avaliação de prescrição medicamentosa ou encaminhamento ao psiquiatra.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Construir projeto terapêutico singular envolvendo equipe da ESF e do NASF.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Escutar o cliente para compreender suas necessidades e angústias.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Encorajar as ações de autocuidado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Recomendar as alterações do estilo de vida.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Envolver familiares no cuidado orientando a necessidade de supervisão do cliente e manutenção do tratamento.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Amor e Aceitação (Opnioes de Si)
            [
                'descricao' => 'Encaminhar ao psicólogo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Decidir com o médico da equipe necessidade de encaminhamento ao psiquiatra.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Identificar com o cliente os fatores que interferem na sua autoimagem.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Desenvolver processo educativo em que o cliente possa se expressar e construir novas maneiras de lidar com o diabetes.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Comunicação e Gragária Interação Não
            [
                'descricao' => 'Obter dados sobre apoio social.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Instruir para prevenção de estilo de vida com isolamento social.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular relacionamentos positivos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular interação social em grupos na unidade.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular participação em espaços sociais como igrejas, associações comunitárias, academia carioca da saúde ou outras redes sociais.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Comunicação e Gragária Interação Sim 1.1
            [
                'descricao' => 'Avaliar o apoio familiar no cuidado com os pés e adesão ao tratamento.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Solicitar aos familiares a oferecerem apoio no momento de crise.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Proporcionar esclarecimento gradual e constante aos familiares envolvidos com o cuidado do cliente.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar orientações aos familiares sobre o cuidado com a ferida e acompanhamento do curativo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ensinar os familiares a realizar curativo, caso paciente tenha limitações.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular os familiares a assumirem um alto nível de coesão e organização familiar com poucos conflitos e boa comunicação em relação ao plano terapêutico do cliente.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Instrumentalizar a família a promover apoio informacional como seguimento de dietas e apoio instrumental no auxílio da administração da insulina.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Comunicação e Gragária Interação Sim 1.2
            [
                'descricao' => 'Manter supervisão por telemonitoramento e visitas domiciliares com a equipe de saúde reforçando orientações de autocuidado.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Estimular rede de apoio comunitária.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Reforçar a importância das redes sociais existentes e saudáveis.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Religião
            [
                'descricao' => 'Aconselhar sobre angústia espiritual.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar as crenças espirituais do paciente e família.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Avaliar o bem-estar espiritual.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Desenvolver estratégias que proporcionem experiência espiritual.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Proporcionar a experiência espiritual.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Realizar referência a serviço religioso.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],                                    
        ]);
    }
}
