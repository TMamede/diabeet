<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DiagnosticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diagnosticos')->insert([
            [
                'descricao' => 'Renda inadequada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Alcoolismo', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Risco de qualidade de vida, negativa (álcool)', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Tabagismo', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Risco de qualidade de vida, negativa (tabaco)', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Cognição prejudicada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Visão prejudicada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Risco de queda', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Percepção tátil prejudicada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Comunicação prejudicada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Alimentação prejudicada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Risco de qualidade de vida, negativa (alimentação)', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Tolerância à dieta prejudicada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Sono prejudicado', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Não adesão ao regime de exercício físico', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Risco de qualidade de vida, negativa (exercício físico)', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Condição habitacional de risco', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Sobrepeso', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Risco de qualidade de vida, negativa (sobrepeso)', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Hiperglicemia', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Hipoglicemia', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Condição respiratória prejudicada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Hipertermia', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Risco de hipertermia', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Desempenho sexual prejudicado', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Processo do sistema musculoesquelético prejudicado', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Marcha prejudicada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Equilíbrio prejudicado', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Fadiga', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Pressão arterial alterada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Função vascular periférica alterada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Frequência de pulso pedioso, baixa', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Risco de frequência de pulso pedioso ausente', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Regime de cuidados com as unhas, prejudicado', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Marcha prejudicada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Coloração da pele alterada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Crescimento de pelos, ausente', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Calo', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Hematoma', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Pele Seca', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Função neurovascular periférica, prejudicada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Processo do sistema musculoesquelético, prejudicado', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Equilíbrio, prejudicado', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Maceração', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Edema periférico', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Infecção', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],

            [
                'descricao' => 'Risco de infecção', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Sangramento da úlcera', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Integridade tissular prejudicada (Exsudato/Hipergranulação/ Maceração/Necrose)', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Intergridade da pele prejudicada (Descamação da pele/Eczema/ Eritema/Escoriação/Hiperemia/ Lipodermatoesclerose/Pele perilesional seca)', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Inflamação', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Cicatrização da ferida, prejudicada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Dor', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Úlcera diabética', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Necessidade de cuidado, alta', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Não adesão ao regime terapêutico', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Déficit de autocuidado', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Risco de comportamento autodestrutivo', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Baixo autocontrole', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Responsividade ao tratamento, baixa', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Atitude em Relação ao Cuidado, Positiva', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Capacidade para Executar Atividade de Lazer, Prejudicada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            //Diagnóstico apoio
            [
                'descricao' => 'Falta de apoio familiar', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Problema emocional', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Medo', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Ansiedade', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Sofrimento', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Risco de suicídio', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],

            //Diagnóstico emocional
            [
                'descricao' => 'Problema emocional', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Medo', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => ' Ansiedade', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Sofrimento', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Risco de suicídio', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Autoimagem, negativa', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Capacidade para socialização, prejudicada', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Apoio familiar, positivo', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Apoio social, eficaz', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'descricao' => 'Risco de Angústia Espiritual', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            
            
        ]);
    }
}
