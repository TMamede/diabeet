<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MotivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('motivos')->insert([
            // Origem: Identificação e informações sociodemográficas
            ['descricao' => 'Renda Familiar Inadequada', 'origem_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Necessidade de Benefícios Governamentais', 'origem_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: História Pregressa
            ['descricao' => 'Paciente Etilista', 'origem_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Paciente Tabagista', 'origem_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Regulação neurológica
            ['descricao' => 'Paciente Confuso', 'origem_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Paciente Agitado', 'origem_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Percepção dos órgãos do sentido
            ['descricao' => 'Visão Prejudicada', 'origem_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Risco de Queda', 'origem_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Percepção Tátil Prejudicada', 'origem_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Formigamento', 'origem_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Dormência', 'origem_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Audição Prejudicada', 'origem_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Nutrição
            ['descricao' => 'Consumo de Alimentos Processados', 'origem_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Consumo de Alimentos Ultraprocessados', 'origem_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            

            // Origem: Sono e Repouso
            ['descricao' => 'Acorda a Noite', 'origem_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Qualidade de Sono Regular', 'origem_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Qualidade de Sono Ruim', 'origem_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Insônia', 'origem_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Sono Agitado', 'origem_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Pesadelos', 'origem_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Ronco', 'origem_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Sono Interrompido', 'origem_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Dificuldade de Iniciar o Sono', 'origem_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],


            // Origem: Exercícios físicos
            ['descricao' => 'Não Realiza Exercícios Físicos', 'origem_id' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Abrigo
            ['descricao' => 'Zona de Moradia Institucionalizada', 'origem_id' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Situação de Rua', 'origem_id' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Zona de Moradia Sem Luz Pública', 'origem_id' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Zona de Moradia Sem Coleta de Lixo', 'origem_id' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Zona de Moradia Sem Água Tratada', 'origem_id' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Rede de Esgoto com Fossa', 'origem_id' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Rede de Esgoto a Céu Aberto', 'origem_id' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Regulação hormonal
            ['descricao' => 'Valor Alto de IMC', 'origem_id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Valor Baixo de Glicemia Capilar do Momento', 'origem_id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Valor Alto de Glicemia Capilar do Momento', 'origem_id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
       
            // Origem: Oxigenação
            ['descricao' => 'Tempo de Enchimento Capilar Menor que 2 segundos', 'origem_id' => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Regulação térmica
            ['descricao' => 'Temperatura igual ou maior que 37,6ºC', 'origem_id' => 11, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Sexualidade
            ['descricao' => 'Apresenta Distúrbio Sexual', 'origem_id' => 12, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Locomoção, mecânica corporal e motilidade
            ['descricao' => 'Deambula com Dispositivo de Marcha', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Deambula com Dificuldade', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Não Deambula', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Fadiga', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Paralisia', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Paresia', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Parestesia', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Atrofia Muscular', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Realizou Amputação de Membro Inferior', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Deformidade em Membro Inferior', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Faz Uso de Cadeira de Rodas', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Possui Mobilidade Limitada das Articulações Pé e Tornozelo', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // // Origem: Regulação vascular
            ['descricao' => ' Pulso Arterial Tibial Alterado', 'origem_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Pulso Arterial Pedioso Alterado', 'origem_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Sensopercepção
            ['descricao' => 'Apresenta Unhas Com Onicomicoses', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Unhas Com Onicocriptoses', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Unhas Com Onicogrifoses', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Unhas Com Bromidose', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Realiza Corte de Unhas Correto', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Gangrena', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Rubor Dependente', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Palidez Com a Perna Elevada', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Pele Brilhante', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Pele Descamativa', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Cianose', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Ocorre Perda de Pelos Sobre o Dorso do Pé', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Possui Calosidades', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Presença de hematomas', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Possui Fissuras', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Pé Neuropático', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Arco Desabado', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Valgismo', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Dedos Em Garra', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Possui Percepção Ausente Em Ambos Pés', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()], 

            // Origem: Integridade cutâneo-mucosa
            ['descricao' => 'Bordas da Ferida Macerada', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Possui Edema', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Quantidade de Exudato Moderado', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Quantidade de Exudato Grande', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Exudato Possui Odor', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Exudato com Aspecto Seroso', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Exudato com Aspecto Sanguinolento', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Exudato com Aspecto Serosanguinolento', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Exudato com Aspecto Purulento', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Exudato com Aspecto Piosanguinolento', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Necrose Seca (Escara) no Tecido no Leito da Ferida', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Necrose Úmida (Esfacelo) no Tecido no Leito da Ferida', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Apresenta Sinal de Infecção', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            //Origem: Cuidado com a ferida
            ['descricao' => 'Análise do Cuidado Com a Ferida', 'origem_id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            // Origem: Aprendizagem (Educação a Saúde)
            ['descricao' => 'Não Adesão ao Regime Terapêutico', 'origem_id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Não Realiza Automonitoramento da Glicemia Capilar', 'origem_id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Realiza Automonitoramento da Glicemia Capilar', 'origem_id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Recreação/Lazer/Criatividade
            ['descricao' => 'Marcou Nenhuma ou Só Uma', 'origem_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Origem: Amor/Aceitação/Atenção/Gregária/Autoestima/Segurança
            ['descricao' => 'Não Foi Acompanhado(a) no Momento da Consulta', 'origem_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Establidade Emocional Preservada', 'origem_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Ansiedade', 'origem_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Choro', 'origem_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Angústia', 'origem_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Agitação', 'origem_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Medo', 'origem_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Opnião Negativa Sobre Si', 'origem_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Origem: Comunicação e Gregária
            ['descricao' => 'Não Realiza Interação com as Pessoas', 'origem_id' => 21, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Não Possui Apoio de Amigos e Família', 'origem_id' => 21, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Realiza Interação com as Pessoas', 'origem_id' => 21, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Possui Apoio de Amigos e Família', 'origem_id' => 21, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Religião
            ['descricao' => 'Paciente Não Religioso', 'origem_id' => 22, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        
            //Origem: Nutrição pt.2
            ['descricao' => 'Possui Restrições Alimentares', 'origem_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        ]);
    }
}
