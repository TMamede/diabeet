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
            ['descricao' => 'Fadiga', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Paralisia', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Paresia', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Parestesia', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Atrofia Muscular', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Amputação de Membro Inferior', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Deformidade em Membro Inferior', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Uso de Cadeira de Rodas', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Mobilidade Limitada das Articulações Pé e Tornozelo', 'origem_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // // Origem: Regulação vascular
            // ['descricao' => 'Pressão arterial alterada', 'origem_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['descricao' => 'Pulso Arterial Pedioso Pulso Arterial Tibial', 'origem_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Sensopercepção
            ['descricao' => 'Regime de cuidados com as unhas prejudicado', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Marcha prejudicada (claudicação)', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Coloração da pele alterada', 'origem_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Integridade cutâneo-mucosa
            ['descricao' => 'Integridade tissular prejudicada', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Infecção', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Risco de infecção', 'origem_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Aprendizagem (Educação a Saúde)
            ['descricao' => 'Não adesão ao regime terapêutico', 'origem_id' => 17, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Déficit de autocuidado', 'origem_id' => 17, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Recreação/Lazer/Criatividade
            ['descricao' => 'Capacidade para lazer prejudicada', 'origem_id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Religião
            ['descricao' => 'Paciente Não Religioso', 'origem_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
