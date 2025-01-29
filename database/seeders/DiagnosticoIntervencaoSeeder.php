<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DiagnosticoIntervencaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diagnostico_intervencao')->insert([
            // Diagnostico: Renda Inadequada
            ['diagnostico_id' => 1, 'intervencao_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 1, 'intervencao_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 1, 'intervencao_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 1, 'intervencao_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 1, 'intervencao_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 1, 'intervencao_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Alcoolismo
            ['diagnostico_id' => 2, 'intervencao_id' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 2, 'intervencao_id' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 2, 'intervencao_id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 2, 'intervencao_id' => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 2, 'intervencao_id' => 11, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 2, 'intervencao_id' => 12, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Risco de qualidade de vida negativa
            ['diagnostico_id' => 3, 'intervencao_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 3, 'intervencao_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 3, 'intervencao_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Tabagismo
            ['diagnostico_id' => 4, 'intervencao_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 4, 'intervencao_id' => 17, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 4, 'intervencao_id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 4, 'intervencao_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 4, 'intervencao_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 4, 'intervencao_id' => 21, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Risco de qualidade de vida negativa
            ['diagnostico_id' => 5, 'intervencao_id' => 22, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 5, 'intervencao_id' => 23, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 5, 'intervencao_id' => 24, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Cognição, prejudicada
            ['diagnostico_id' => 6, 'intervencao_id' => 25, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 6, 'intervencao_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 6, 'intervencao_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 6, 'intervencao_id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 6, 'intervencao_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 6, 'intervencao_id' => 30, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 6, 'intervencao_id' => 31, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 6, 'intervencao_id' => 32, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 6, 'intervencao_id' => 33, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Visão, prejudicada
            ['diagnostico_id' => 7, 'intervencao_id' => 34, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 7, 'intervencao_id' => 35, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 7, 'intervencao_id' => 36, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 7, 'intervencao_id' => 37, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 7, 'intervencao_id' => 38, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 7, 'intervencao_id' => 39, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 7, 'intervencao_id' => 40, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 7, 'intervencao_id' => 41, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 7, 'intervencao_id' => 42, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 7, 'intervencao_id' => 43, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Risco de queda 
            ['diagnostico_id' => 8, 'intervencao_id' => 44, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 8, 'intervencao_id' => 45, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 8, 'intervencao_id' => 46, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 8, 'intervencao_id' => 47, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Percepção tátil prejudicada
            ['diagnostico_id' => 9, 'intervencao_id' => 48, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 9, 'intervencao_id' => 49, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 9, 'intervencao_id' => 50, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 9, 'intervencao_id' => 51, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 9, 'intervencao_id' => 52, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 9, 'intervencao_id' => 53, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 9, 'intervencao_id' => 54, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 9, 'intervencao_id' => 55, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 9, 'intervencao_id' => 56, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Comunicação, prejudicada
            ['diagnostico_id' => 10, 'intervencao_id' => 57, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 10, 'intervencao_id' => 58, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 10, 'intervencao_id' => 59, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 10, 'intervencao_id' => 60, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Alimentação, prejudicada
            ['diagnostico_id' => 11, 'intervencao_id' => 61, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 11, 'intervencao_id' => 62, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 11, 'intervencao_id' => 63, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 11, 'intervencao_id' => 64, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 11, 'intervencao_id' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 11, 'intervencao_id' => 66, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Risco de qualidade de vida, negativa
            ['diagnostico_id' => 12, 'intervencao_id' => 67, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 12, 'intervencao_id' => 68, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 12, 'intervencao_id' => 69, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Tolerância à dieta, prejudicada
            ['diagnostico_id' => 13, 'intervencao_id' => 70, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 13, 'intervencao_id' => 71, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 13, 'intervencao_id' => 72, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 13, 'intervencao_id' => 73, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 13, 'intervencao_id' => 74, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Sono, prejudicado
            ['diagnostico_id' => 14, 'intervencao_id' => 75, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 14, 'intervencao_id' => 76, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 14, 'intervencao_id' => 77, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 14, 'intervencao_id' => 78, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 14, 'intervencao_id' => 79, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 14, 'intervencao_id' => 80, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 14, 'intervencao_id' => 81, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 14, 'intervencao_id' => 82, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Não adesão ao regime do exercício físico
            ['diagnostico_id' => 15, 'intervencao_id' => 83, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 15, 'intervencao_id' => 84, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 15, 'intervencao_id' => 85, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 15, 'intervencao_id' => 86, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 15, 'intervencao_id' => 87, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 15, 'intervencao_id' => 88, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 15, 'intervencao_id' => 89, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 15, 'intervencao_id' => 90, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Risco de qualidade de vida, negativa
            ['diagnostico_id' => 16, 'intervencao_id' => 91, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 16, 'intervencao_id' => 92, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 16, 'intervencao_id' => 93, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Condição habitacional de risco
            ['diagnostico_id' => 17, 'intervencao_id' => 94, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 17, 'intervencao_id' => 95, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 17, 'intervencao_id' => 96, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 17, 'intervencao_id' => 97, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 17, 'intervencao_id' => 98, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 17, 'intervencao_id' => 99, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Sobrepeso
            ['diagnostico_id' => 18, 'intervencao_id' => 100, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 101, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 102, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 103, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 104, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 105, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 106, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 107, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 108, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 109, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 110, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 111, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 112, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 113, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Risco de qualidade de vida, negativa
            ['diagnostico_id' => 19, 'intervencao_id' => 114, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 19, 'intervencao_id' => 115, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 19, 'intervencao_id' => 116, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Hiperglicemia
            ['diagnostico_id' => 20, 'intervencao_id' => 117, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 20, 'intervencao_id' => 118, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 20, 'intervencao_id' => 119, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 20, 'intervencao_id' => 120, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 20, 'intervencao_id' => 121, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 20, 'intervencao_id' => 122, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 20, 'intervencao_id' => 123, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 20, 'intervencao_id' => 124, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 20, 'intervencao_id' => 125, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 20, 'intervencao_id' => 126, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            //Diagnóstico: Hipoglicemia
            ['diagnostico_id' => 21, 'intervencao_id' => 127, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 21, 'intervencao_id' => 125, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 21, 'intervencao_id' => 128, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 21, 'intervencao_id' => 129, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 21, 'intervencao_id' => 130, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 21, 'intervencao_id' => 131, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 21, 'intervencao_id' => 132, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 21, 'intervencao_id' => 133, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 21, 'intervencao_id' => 134, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Condição respiratória prejudicada
            ['diagnostico_id' => 22, 'intervencao_id' => 135, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Hipertemia
            ['diagnostico_id' => 23, 'intervencao_id' => 136, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 23, 'intervencao_id' => 137, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 23, 'intervencao_id' => 138, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 23, 'intervencao_id' => 139, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Risco de hipertemia
            ['diagnostico_id' => 24, 'intervencao_id' => 140, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 24, 'intervencao_id' => 141, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 24, 'intervencao_id' => 142, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 24, 'intervencao_id' => 143, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 24, 'intervencao_id' => 144, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Desempenho sexual prejudicado
            ['diagnostico_id' => 25, 'intervencao_id' => 145, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 25, 'intervencao_id' => 146, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 25, 'intervencao_id' => 147, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 25, 'intervencao_id' => 148, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Processo do sistema musculoesquelético prejudicado
            ['diagnostico_id' => 26, 'intervencao_id' => 149, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 150, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 151, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 152, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 153, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 154, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 155, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 156, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 157, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 158, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 159, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 160, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 161, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 162, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 163, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 164, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 26, 'intervencao_id' => 165, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Marcha prejudicada
            ['diagnostico_id' => 27, 'intervencao_id' => 166, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 27, 'intervencao_id' => 167, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 27, 'intervencao_id' => 168, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 27, 'intervencao_id' => 169, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 27, 'intervencao_id' => 170, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 27, 'intervencao_id' => 171, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 27, 'intervencao_id' => 172, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Equilibrio prejudicado
            ['diagnostico_id' => 28, 'intervencao_id' => 173, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 28, 'intervencao_id' => 174, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 28, 'intervencao_id' => 175, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Fadiga
            ['diagnostico_id' => 29, 'intervencao_id' => 176, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 29, 'intervencao_id' => 177, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 29, 'intervencao_id' => 178, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 29, 'intervencao_id' => 179, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 29, 'intervencao_id' => 180, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 29, 'intervencao_id' => 181, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Pressão arterial alterada
            ['diagnostico_id' => 30, 'intervencao_id' => 182, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 30, 'intervencao_id' => 183, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 30, 'intervencao_id' => 184, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 30, 'intervencao_id' => 185, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 30, 'intervencao_id' => 186, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 30, 'intervencao_id' => 187, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 30, 'intervencao_id' => 188, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 30, 'intervencao_id' => 189, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 30, 'intervencao_id' => 190, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 30, 'intervencao_id' => 191, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Função vascular periférica alterada
            ['diagnostico_id' => 31, 'intervencao_id' => 192, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Frequência de pulso pedioso, baixa
            ['diagnostico_id' => 31, 'intervencao_id' => 193, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 31, 'intervencao_id' => 194, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 31, 'intervencao_id' => 195, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 31, 'intervencao_id' => 196, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 31, 'intervencao_id' => 197, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Risco de frequência de pulso pedioso, ausente
            ['diagnostico_id' => 32, 'intervencao_id' => 198, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 32, 'intervencao_id' => 199, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 32, 'intervencao_id' => 200, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 32, 'intervencao_id' => 201, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 32, 'intervencao_id' => 202, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Regime de cuidados com as unhas, prejudicado
            ['diagnostico_id' => 33, 'intervencao_id' => 203, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 33, 'intervencao_id' => 204, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 33, 'intervencao_id' => 205, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 33, 'intervencao_id' => 206, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 33, 'intervencao_id' => 207, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 33, 'intervencao_id' => 208, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 33, 'intervencao_id' => 209, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Marcha prejudicada
            ['diagnostico_id' => 34, 'intervencao_id' => 210, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 34, 'intervencao_id' => 211, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 34, 'intervencao_id' => 212, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 34, 'intervencao_id' => 213, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 34, 'intervencao_id' => 214, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 34, 'intervencao_id' => 215, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 34, 'intervencao_id' => 216, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Coloração da pele, alterada
            ['diagnostico_id' => 35, 'intervencao_id' => 217, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 35, 'intervencao_id' => 218, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Crescimento de pelos ausente
            ['diagnostico_id' => 36, 'intervencao_id' => 219, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 36, 'intervencao_id' => 220, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 36, 'intervencao_id' => 221, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 36, 'intervencao_id' => 222, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 36, 'intervencao_id' => 223, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Calo
            ['diagnostico_id' => 37, 'intervencao_id' => 224, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 37, 'intervencao_id' => 225, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 37, 'intervencao_id' => 226, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 37, 'intervencao_id' => 227, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 37, 'intervencao_id' => 228, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 37, 'intervencao_id' => 229, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Hematoma
            ['diagnostico_id' => 38, 'intervencao_id' => 230, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 38, 'intervencao_id' => 231, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 38, 'intervencao_id' => 232, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 38, 'intervencao_id' => 233, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 38, 'intervencao_id' => 234, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 38, 'intervencao_id' => 235, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Pele seca
            ['diagnostico_id' => 39, 'intervencao_id' => 236, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 39, 'intervencao_id' => 237, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 39, 'intervencao_id' => 238, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 39, 'intervencao_id' => 239, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 39, 'intervencao_id' => 240, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 39, 'intervencao_id' => 241, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 39, 'intervencao_id' => 242, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Função neurovascular periférica, prejudicada
            ['diagnostico_id' => 40, 'intervencao_id' => 243, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 244, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 245, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 246, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 247, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 248, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 249, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 250, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 251, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 252, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 253, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 254, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 255, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 256, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 257, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 258, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 259, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 260, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 261, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 262, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 40, 'intervencao_id' => 263, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Processo do sistema musculoesquelético, prejudicado
            ['diagnostico_id' => 41, 'intervencao_id' => 264, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 265, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 266, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 267, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 268, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 269, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 270, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 271, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 272, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 273, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 274, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 275, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 276, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 277, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 278, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 279, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 41, 'intervencao_id' => 280, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Equilíbrio, prejudicado
            ['diagnostico_id' => 42, 'intervencao_id' => 281, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 42, 'intervencao_id' => 282, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 42, 'intervencao_id' => 283, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Maceração
            ['diagnostico_id' => 43, 'intervencao_id' => 284, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 43, 'intervencao_id' => 285, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 43, 'intervencao_id' => 286, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 43, 'intervencao_id' => 287, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Edema periférico
            ['diagnostico_id' => 44, 'intervencao_id' => 288, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 44, 'intervencao_id' => 289, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 44, 'intervencao_id' => 290, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 44, 'intervencao_id' => 291, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 44, 'intervencao_id' => 292, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 44, 'intervencao_id' => 293, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 44, 'intervencao_id' => 294, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 44, 'intervencao_id' => 295, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 44, 'intervencao_id' => 296, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 44, 'intervencao_id' => 297, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],


            //Diagnóstico: Infecção
            ['diagnostico_id' => 45, 'intervencao_id' => 298, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 45, 'intervencao_id' => 299, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 45, 'intervencao_id' => 300, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 45, 'intervencao_id' => 301, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 45, 'intervencao_id' => 302, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 45, 'intervencao_id' => 303, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 45, 'intervencao_id' => 304, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 45, 'intervencao_id' => 305, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 45, 'intervencao_id' => 306, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 45, 'intervencao_id' => 307, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 45, 'intervencao_id' => 308, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 45, 'intervencao_id' => 309, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 45, 'intervencao_id' => 310, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Risco de infecção
            ['diagnostico_id' => 46, 'intervencao_id' => 311, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Sangramento da úlcera
            ['diagnostico_id' => 47, 'intervencao_id' => 312, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 47, 'intervencao_id' => 313, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 47, 'intervencao_id' => 314, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 47, 'intervencao_id' => 315, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 47, 'intervencao_id' => 316, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 47, 'intervencao_id' => 317, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 47, 'intervencao_id' => 318, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 47, 'intervencao_id' => 319, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Integridade tissular prejudicada (Exsudato/Hipergranulação/ Maceração/Necrose)
            ['diagnostico_id' => 48, 'intervencao_id' => 320, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Intergridade da pele prejudicada (Descamação da pele/Eczema/ Eritema/Escoriação/Hiperemia/ Lipodermatoesclerose/Pele perilesional seca)
            ['diagnostico_id' => 49, 'intervencao_id' => 321, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Inflamação
            ['diagnostico_id' => 50, 'intervencao_id' => 322, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 50, 'intervencao_id' => 323, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 50, 'intervencao_id' => 324, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 50, 'intervencao_id' => 325, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 50, 'intervencao_id' => 326, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnótico: Cicatrização da ferida, prejudicada
            ['diagnostico_id' => 51, 'intervencao_id' => 327, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 51, 'intervencao_id' => 328, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 51, 'intervencao_id' => 329, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 51, 'intervencao_id' => 330, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 51, 'intervencao_id' => 331, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 51, 'intervencao_id' => 332, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 51, 'intervencao_id' => 333, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 51, 'intervencao_id' => 334, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Dor
            ['diagnostico_id' => 52, 'intervencao_id' => 335, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 52, 'intervencao_id' => 336, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 52, 'intervencao_id' => 337, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 52, 'intervencao_id' => 338, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 52, 'intervencao_id' => 339, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 52, 'intervencao_id' => 340, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 52, 'intervencao_id' => 341, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 52, 'intervencao_id' => 342, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 52, 'intervencao_id' => 343, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 52, 'intervencao_id' => 344, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 52, 'intervencao_id' => 345, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 52, 'intervencao_id' => 346, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],


            //Diagnóstico: Úlcera diabética
            ['diagnostico_id' => 53, 'intervencao_id' => 347, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 348, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 349, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 350, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 351, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 352, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 353, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 354, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 355, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 356, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 357, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 358, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 359, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 360, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 361, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 362, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 363, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 364, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 365, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 53, 'intervencao_id' => 366, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Necessidade de cuidado, alta
            ['diagnostico_id' => 54, 'intervencao_id' => 367, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 54, 'intervencao_id' => 368, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 54, 'intervencao_id' => 369, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 54, 'intervencao_id' => 370, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 54, 'intervencao_id' => 371, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 54, 'intervencao_id' => 372, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 54, 'intervencao_id' => 373, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Não adesão ao regime terapêutico
            ['diagnostico_id' => 55, 'intervencao_id' => 374, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 55, 'intervencao_id' => 375, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 55, 'intervencao_id' => 376, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 55, 'intervencao_id' => 377, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 55, 'intervencao_id' => 378, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 55, 'intervencao_id' => 379, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 55, 'intervencao_id' => 380, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 55, 'intervencao_id' => 381, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 55, 'intervencao_id' => 382, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Défict do alto cuidado
            ['diagnostico_id' => 56, 'intervencao_id' => 383, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 384, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 385, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 386, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 387, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 388, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 389, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 390, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 391, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 392, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 393, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 394, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 395, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 396, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 397, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 398, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 399, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 400, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 401, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 402, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 403, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 404, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 405, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 56, 'intervencao_id' => 406, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Risco de comportamento autodestrutivo
            ['diagnostico_id' => 57, 'intervencao_id' => 407, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 57, 'intervencao_id' => 408, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 57, 'intervencao_id' => 409, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 57, 'intervencao_id' => 410, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 57, 'intervencao_id' => 411, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 57, 'intervencao_id' => 412, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 57, 'intervencao_id' => 413, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 57, 'intervencao_id' => 414, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Baixo autocontrole
            ['diagnostico_id' => 58, 'intervencao_id' => 415, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 58, 'intervencao_id' => 416, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 58, 'intervencao_id' => 417, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 58, 'intervencao_id' => 418, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 58, 'intervencao_id' => 419, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 58, 'intervencao_id' => 420, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 58, 'intervencao_id' => 421, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 58, 'intervencao_id' => 422, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 58, 'intervencao_id' => 423, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 58, 'intervencao_id' => 424, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Responsividade  ao tratamento, baixa
            ['diagnostico_id' => 59, 'intervencao_id' => 425, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 59, 'intervencao_id' => 426, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 59, 'intervencao_id' => 427, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 59, 'intervencao_id' => 428, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 59, 'intervencao_id' => 429, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 59, 'intervencao_id' => 430, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 59, 'intervencao_id' => 431, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Atitude em Relação ao Cuidado, Positiva
            ['diagnostico_id' => 60, 'intervencao_id' => 432, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 60, 'intervencao_id' => 433, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 60, 'intervencao_id' => 434, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 60, 'intervencao_id' => 435, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 60, 'intervencao_id' => 436, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 60, 'intervencao_id' => 437, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 60, 'intervencao_id' => 438, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],


            //Diagnóstico: Capacidade para Executar Atividade de Lazer, Prejudicada
            ['diagnostico_id' => 61, 'intervencao_id' => 439, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 61, 'intervencao_id' => 440, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 61, 'intervencao_id' => 441, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 61, 'intervencao_id' => 442, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 61, 'intervencao_id' => 443, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Falta de apoio familiar
            ['diagnostico_id' => 62, 'intervencao_id' => 444, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Problema emocional
            ['diagnostico_id' => 63, 'intervencao_id' => 445, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 63, 'intervencao_id' => 446, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 63, 'intervencao_id' => 447, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 63, 'intervencao_id' => 448, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 63, 'intervencao_id' => 449, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 63, 'intervencao_id' => 450, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Medo
            ['diagnostico_id' => 64, 'intervencao_id' => 451, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 64, 'intervencao_id' => 452, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 64, 'intervencao_id' => 453, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 64, 'intervencao_id' => 454, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 64, 'intervencao_id' => 455, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 64, 'intervencao_id' => 456, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 64, 'intervencao_id' => 457, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Ansiedade
            ['diagnostico_id' => 65, 'intervencao_id' => 458, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 65, 'intervencao_id' => 459, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 65, 'intervencao_id' => 460, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 65, 'intervencao_id' => 461, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 65, 'intervencao_id' => 462, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Sofrimento
            ['diagnostico_id' => 66, 'intervencao_id' => 463, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 66, 'intervencao_id' => 464, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 66, 'intervencao_id' => 465, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 66, 'intervencao_id' => 466, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 66, 'intervencao_id' => 467, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 66, 'intervencao_id' => 468, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico:  Risco de suicídio
            ['diagnostico_id' => 67, 'intervencao_id' => 469, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 67, 'intervencao_id' => 470, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 67, 'intervencao_id' => 471, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 67, 'intervencao_id' => 472, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 67, 'intervencao_id' => 473, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 67, 'intervencao_id' => 474, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 67, 'intervencao_id' => 475, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 67, 'intervencao_id' => 476, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

             //Diagnóstico: Autoimagem, negativa
            ['diagnostico_id' => 68, 'intervencao_id' => 477, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 68, 'intervencao_id' => 478, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 68, 'intervencao_id' => 479, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 68, 'intervencao_id' => 480, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Capacidade para socialização, prejudicada
            ['diagnostico_id' => 69, 'intervencao_id' => 481, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 69, 'intervencao_id' => 482, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 69, 'intervencao_id' => 483, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 69, 'intervencao_id' => 484, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 69, 'intervencao_id' => 485, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Apoio familiar, positivo
            ['diagnostico_id' => 70, 'intervencao_id' => 486, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 70, 'intervencao_id' => 487, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 70, 'intervencao_id' => 488, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 70, 'intervencao_id' => 489, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 70, 'intervencao_id' => 490, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 70, 'intervencao_id' => 491, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 70, 'intervencao_id' => 492, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

             //Diagnóstico: Apoio social, eficaz
            ['diagnostico_id' => 71, 'intervencao_id' => 493, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 71, 'intervencao_id' => 494, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 71, 'intervencao_id' => 495, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Diagnóstico: Risco de angústia
            ['diagnostico_id' => 72, 'intervencao_id' => 496, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 72, 'intervencao_id' => 497, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 72, 'intervencao_id' => 498, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 72, 'intervencao_id' => 499, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 72, 'intervencao_id' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 72, 'intervencao_id' => 501, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],




        ]);


    }
}
