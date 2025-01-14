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
            ['diagnostico_id' => 15, 'intervencao_id' => 75, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 15, 'intervencao_id' => 76, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 15, 'intervencao_id' => 77, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 15, 'intervencao_id' => 78, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 15, 'intervencao_id' => 79, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 15, 'intervencao_id' => 80, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 15, 'intervencao_id' => 81, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 15, 'intervencao_id' => 82, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            // Diagnostico: Risco de qualidade de vida, negativa
            ['diagnostico_id' => 16, 'intervencao_id' => 83, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 16, 'intervencao_id' => 84, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 16, 'intervencao_id' => 85, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            // Diagnostico: Condição habitacional de risco
            ['diagnostico_id' => 17, 'intervencao_id' => 86, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 17, 'intervencao_id' => 87, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 17, 'intervencao_id' => 88, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 17, 'intervencao_id' => 89, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 17, 'intervencao_id' => 90, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 17, 'intervencao_id' => 91, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Diagnostico: Sobrepeso
            ['diagnostico_id' => 18, 'intervencao_id' => 92, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 93, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 94, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 95, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 96, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['diagnostico_id' => 18, 'intervencao_id' => 97, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
        ]);
    }
}
