<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MotivoDiagnosticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     */
    public function run(): void
    {
        DB::table('motivos')->insert([
            // Origem: Identificação e informações sociodemográficas
            ['motivo_id' => 1, 'diagnostico_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 2, 'diagnostico_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: História Pregressa
            ['motivo_id' => 3, 'diagnostico_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 3, 'diagnostico_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 4, 'diagnostico_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 4, 'diagnostico_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Regulação neurológica
            ['motivo_id' => 5, 'diagnostico_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 5, 'diagnostico_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Percepção dos órgãos do sentido
            ['motivo_id' => 6, 'diagnostico_id' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 7, 'diagnostico_id' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 8, 'diagnostico_id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 9, 'diagnostico_id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 10, 'diagnostico_id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 11, 'diagnostico_id' => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Nutrição
            ['motivo_id' => 12, 'diagnostico_id' => 11, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 12, 'diagnostico_id' => 12, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 13, 'diagnostico_id' => 11, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 13, 'diagnostico_id' => 12, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 14, 'diagnostico_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    
            

            // Origem: Sono e Repouso
            ['motivo_id' => 15, 'diagnostico_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 16, 'diagnostico_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 17, 'diagnostico_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 18, 'diagnostico_id'=> 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 19, 'diagnostico_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 20, 'diagnostico_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 21, 'diagnostico_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 22, 'diagnostico_id'=> 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 23, 'diagnostico_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],


            // Origem: Exercícios físicos
            ['motivo_id' => 24, 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 24, 'diagnostico_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Abrigo
            ['motivo_id' => 25, 'diagnostico_id' => 17, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 26, 'diagnostico_id' => 17, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 27, 'diagnostico_id' => 17, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 28, 'diagnostico_id' => 17, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 29, 'diagnostico_id' => 17, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 30, 'diagnostico_id' => 17, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 32, 'diagnostico_id' => 17, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Regulação hormonal
            ['motivo_id' => 33, 'diagnostico_id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' =>  33, 'diagnostico_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 34, 'diagnostico_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 34, 'diagnostico_id' => 21, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Oxigenação
            ['motivo_id' => 35, 'diagnostico_id' => 22, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Regulação térmica
            ['motivo_id' => 36, 'diagnostico_id' => 23, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 36, 'diagnostico_id' => 24, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Sexualidade
            ['motivo_id' => 'Apresenta Distúrbio Sexual', 'diagnostico_id' => 12, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Locomoção, mecânica corporal e motilidade
            ['motivo_id' => 'Deambula com Dispositivo de Marcha', 'diagnostico_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Deambula com Dificuldade', 'diagnostico_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Não Deambula', 'diagnostico_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Fadiga', 'diagnostico_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Paralisia', 'diagnostico_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Paresia', 'diagnostico_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Parestesia', 'diagnostico_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Atrofia Muscular', 'diagnostico_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Realizou Amputação de Membro Inferior', 'diagnostico_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Deformidade em Membro Inferior', 'diagnostico_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Faz Uso de Cadeira de Rodas', 'diagnostico_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Possui Mobilidade Limitada das Articulações Pé e Tornozelo', 'diagnostico_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // // Origem: Regulação vascular
            ['motivo_id' => ' Pulso Arterial Tibial Alterado', 'diagnostico_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Pulso Arterial Pedioso Alterado', 'diagnostico_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Sensopercepção
            ['motivo_id' => 'Apresenta Unhas Com Onicomicoses', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Unhas Com Onicocriptoses', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Unhas Com Onicogrifoses', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Unhas Com Bromidose', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Realiza Corte de Unhas Correto', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Gangrena', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Rubor Dependente', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Palidez Com a Perna Elevada', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Pele Brilhante', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Pele Descamativa', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Cianose', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Ocorre Perda de Pelos Sobre o Dorso do Pé', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Possui Calosidades', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Presença de hematomas', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Possui Fissuras', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Pé Neuropático', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Arco Desabado', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Valgismo', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Dedos Em Garra', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Possui Percepção Ausente Em Ambos Pés', 'diagnostico_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()], 

            // Origem: Integridade cutâneo-mucosa
            ['motivo_id' => 'Bordas da Ferida Macerada', 'diagnostico_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Possui Edema', 'diagnostico_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Quantidade de Exudato Moderado', 'diagnostico_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Quantidade de Exudato Grande', 'diagnostico_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Exudato Possui Odor', 'diagnostico_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Exudato com Aspecto Seroso', 'diagnostico_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Exudato com Aspecto Sanguinolento', 'diagnostico_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Exudato com Aspecto Serosanguinolento', 'diagnostico_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Exudato com Aspecto Purulento', 'diagnostico_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Exudato com Aspecto Piosanguinolento', 'diagnostico_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Necrose Seca (Escara) no Tecido no Leito da Ferida', 'diagnostico_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Necrose Úmida (Esfacelo) no Tecido no Leito da Ferida', 'diagnostico_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Apresenta Sinal de Infecção', 'diagnostico_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            //Origem: Cuidado com a ferida
            ['motivo_id' => 'Análise do Cuidado Com a Ferida', 'diagnostico_id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            // Origem: Aprendizagem (Educação a Saúde)
            ['motivo_id' => 'Não Adesão ao Regime Terapêutico', 'diagnostico_id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Não Realiza Automonitoramento da Glicemia Capilar', 'diagnostico_id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Realiza Automonitoramento da Glicemia Capilar', 'diagnostico_id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Recreação/Lazer/Criatividade
            ['motivo_id' => 'Marcou Nenhuma ou Só Uma', 'diagnostico_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Origem: Amor/Aceitação/Atenção/Gregária/Autoestima/Segurança
            ['motivo_id' => 'Não Foi Acompanhado(a) no Momento da Consulta', 'diagnostico_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Establidade Emocional Preservada', 'diagnostico_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Ansiedade', 'diagnostico_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Choro', 'diagnostico_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Angústia', 'diagnostico_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Agitação', 'diagnostico_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Medo', 'diagnostico_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Opnião Negativa Sobre Si', 'diagnostico_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Origem: Comunicação e Gregária
            ['motivo_id' => 'Não Realiza Interação com as Pessoas', 'diagnostico_id' => 21, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Não Possui Apoio de Amigos e Família', 'diagnostico_id' => 21, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Realiza Interação com as Pessoas', 'diagnostico_id' => 21, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 'Possui Apoio de Amigos e Família', 'diagnostico_id' => 21, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Religião
            ['motivo_id' => 'Paciente Não Religioso', 'diagnostico_id' => 22, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        
            //Origem: Nutrição pt.2
            ['motivo_id' => 'Possui Restrições Alimentares', 'diagnostico_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        ]);
    }
}
