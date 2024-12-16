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
            ['motivo_id' => 6, 'diagnostico_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Percepção dos órgãos do sentido
            ['motivo_id' => 7, 'diagnostico_id' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 8, 'diagnostico_id' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 9, 'diagnostico_id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 10, 'diagnostico_id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 11, 'diagnostico_id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 12, 'diagnostico_id' => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Nutrição
            ['motivo_id' => 13, 'diagnostico_id' => 11, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 13, 'diagnostico_id' => 12, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 14, 'diagnostico_id' => 11, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 14, 'diagnostico_id' => 12, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
    
            

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
            ['motivo_id' => 37, 'diagnostico_id' => 25, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Locomoção, mecânica corporal e motilidade
            ['motivo_id' => 38, 'diagnostico_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 38, 'diagnostico_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 38, 'diagnostico_id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 38, 'diagnostico_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 39, 'diagnostico_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 39, 'diagnostico_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 39, 'diagnostico_id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 39, 'diagnostico_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 40, 'diagnostico_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 40, 'diagnostico_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 40, 'diagnostico_id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 40, 'diagnostico_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 41, 'diagnostico_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 41, 'diagnostico_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 41, 'diagnostico_id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 41, 'diagnostico_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 42, 'diagnostico_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 42, 'diagnostico_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 42, 'diagnostico_id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 42, 'diagnostico_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 43, 'diagnostico_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 43, 'diagnostico_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 43, 'diagnostico_id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 43, 'diagnostico_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 44, 'diagnostico_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 44, 'diagnostico_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 44, 'diagnostico_id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 44, 'diagnostico_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 45, 'diagnostico_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 45, 'diagnostico_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 45, 'diagnostico_id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 45, 'diagnostico_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 46, 'diagnostico_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 46, 'diagnostico_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 46, 'diagnostico_id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 46, 'diagnostico_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 47, 'diagnostico_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 47, 'diagnostico_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 47, 'diagnostico_id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 47, 'diagnostico_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 48, 'diagnostico_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 48, 'diagnostico_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 48, 'diagnostico_id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 48, 'diagnostico_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 49, 'diagnostico_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 49, 'diagnostico_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 49, 'diagnostico_id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 49, 'diagnostico_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // // Origem: Regulação vascular
            ['motivo_id' => 104, 'diagnostico_id' => 30, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 50, 'diagnostico_id' => 31, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 50, 'diagnostico_id' => 32, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 50, 'diagnostico_id' => 33, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 51, 'diagnostico_id' => 31, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 51, 'diagnostico_id' => 32, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 51, 'diagnostico_id' => 33, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],


            // Origem: Sensopercepção
            ['motivo_id' => 52, 'diagnostico_id' => 34, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 53, 'diagnostico_id' => 34, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 54, 'diagnostico_id' => 34, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 55, 'diagnostico_id' => 34, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 56, 'diagnostico_id' => 35, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 57, 'diagnostico_id' => 36, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 58, 'diagnostico_id' => 36, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 59, 'diagnostico_id' => 36, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 60, 'diagnostico_id' => 36, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 61, 'diagnostico_id' => 36, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 62, 'diagnostico_id' => 37, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 63, 'diagnostico_id' => 38, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 64, 'diagnostico_id' => 39, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 65, 'diagnostico_id' => 40, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 66, 'diagnostico_id' => 41, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 67, 'diagnostico_id' => 42, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 67, 'diagnostico_id' => 43, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 67, 'diagnostico_id' => 44, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 68, 'diagnostico_id' => 42, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 68, 'diagnostico_id' => 43, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 68, 'diagnostico_id' => 44, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 69, 'diagnostico_id' => 42, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 69, 'diagnostico_id' => 43, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 69, 'diagnostico_id' => 44, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 70, 'diagnostico_id' => 42, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 70, 'diagnostico_id' => 43, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 70, 'diagnostico_id' => 44, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 71, 'diagnostico_id' => 42, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()], 
            ['motivo_id' => 71, 'diagnostico_id' => 43, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()], 
            ['motivo_id' => 71, 'diagnostico_id' => 44, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()], 

            // Origem: Integridade cutâneo-mucosa
            ['motivo_id' => 72, 'diagnostico_id' => 45, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 73, 'diagnostico_id' => 46, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 74, 'diagnostico_id' => 47, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 74, 'diagnostico_id' => 48, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 74, 'diagnostico_id' => 49, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 74, 'diagnostico_id' => 50, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 74, 'diagnostico_id' => 51, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 74, 'diagnostico_id' => 52, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 74, 'diagnostico_id' => 53, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 75, 'diagnostico_id' => 47, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 75, 'diagnostico_id' => 48, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 75, 'diagnostico_id' => 49, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 75, 'diagnostico_id' => 50, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 75, 'diagnostico_id' => 51, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 75, 'diagnostico_id' => 52, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 75, 'diagnostico_id' => 53, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 76, 'diagnostico_id' => 47, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 76, 'diagnostico_id' => 48, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 76, 'diagnostico_id' => 49, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 76, 'diagnostico_id' => 50, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 76, 'diagnostico_id' => 51, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 76, 'diagnostico_id' => 52, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 76, 'diagnostico_id' => 53, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 77, 'diagnostico_id' => 47, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 77, 'diagnostico_id' => 48, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 77, 'diagnostico_id' => 49, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 77, 'diagnostico_id' => 50, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 77, 'diagnostico_id' => 51, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 77, 'diagnostico_id' => 52, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 77, 'diagnostico_id' => 53, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 78, 'diagnostico_id' => 47, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 78, 'diagnostico_id' => 48, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 78, 'diagnostico_id' => 49, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 78, 'diagnostico_id' => 50, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 78, 'diagnostico_id' => 51, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 78, 'diagnostico_id' => 52, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 78, 'diagnostico_id' => 53, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 79, 'diagnostico_id' => 47, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 79, 'diagnostico_id' => 48, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 79, 'diagnostico_id' => 49, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 79, 'diagnostico_id' => 50, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 79, 'diagnostico_id' => 51, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 79, 'diagnostico_id' => 52, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 79, 'diagnostico_id' => 53, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 80, 'diagnostico_id' => 47, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 80, 'diagnostico_id' => 48, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 80, 'diagnostico_id' => 49, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 80, 'diagnostico_id' => 50, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 80, 'diagnostico_id' => 51, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 80, 'diagnostico_id' => 52, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 80, 'diagnostico_id' => 53, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 81, 'diagnostico_id' => 47, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 81, 'diagnostico_id' => 48, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 81, 'diagnostico_id' => 49, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 81, 'diagnostico_id' => 50, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 81, 'diagnostico_id' => 51, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 81, 'diagnostico_id' => 52, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 82, 'diagnostico_id' => 47, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 82, 'diagnostico_id' => 48, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 82, 'diagnostico_id' => 49, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 82, 'diagnostico_id' => 50, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 82, 'diagnostico_id' => 51, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 82, 'diagnostico_id' => 52, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 82, 'diagnostico_id' => 53, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 83, 'diagnostico_id' => 47, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 83, 'diagnostico_id' => 48, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 83, 'diagnostico_id' => 49, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 83, 'diagnostico_id' => 50, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 83, 'diagnostico_id' => 51, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 83, 'diagnostico_id' => 52, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 83, 'diagnostico_id' => 53, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 84, 'diagnostico_id' => 47, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 84, 'diagnostico_id' => 48, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 84, 'diagnostico_id' => 49, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 84, 'diagnostico_id' => 50, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 84, 'diagnostico_id' => 51, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 84, 'diagnostico_id' => 52, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 84, 'diagnostico_id' => 53, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 85, 'diagnostico_id' => 47, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 85, 'diagnostico_id' => 48, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 85, 'diagnostico_id' => 49, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 85, 'diagnostico_id' => 50, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 85, 'diagnostico_id' => 51, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 85, 'diagnostico_id' => 52, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 85, 'diagnostico_id' => 53, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            //Origem: Cuidado com a ferida
            ['motivo_id' => 85, 'diagnostico_id' => 54, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 85, 'diagnostico_id' => 55, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            // Origem: Aprendizagem (Educação a Saúde)
            ['motivo_id' => 86, 'diagnostico_id' => 56, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 86, 'diagnostico_id' => 57, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 86, 'diagnostico_id' => 58, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 86, 'diagnostico_id' => 59, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 86, 'diagnostico_id' => 60, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 87, 'diagnostico_id' => 56, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 87, 'diagnostico_id' => 57, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 87, 'diagnostico_id' => 58, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 87, 'diagnostico_id' => 59, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 87, 'diagnostico_id' => 60, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 88, 'diagnostico_id' => 61, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Origem: Recreação/Lazer/Criatividade
            ['motivo_id' => 89, 'diagnostico_id' => 62, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //Origem: Amor/Aceitação/Atenção/Gregária/Autoestima/Segurança
            ['motivo_id' => 90, 'diagnostico_id' => 63, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 90, 'diagnostico_id' => 64, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 90, 'diagnostico_id' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 90, 'diagnostico_id' => 66, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 90, 'diagnostico_id' => 67, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 91, 'diagnostico_id' => 63, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 91, 'diagnostico_id' => 64, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 91, 'diagnostico_id' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 91, 'diagnostico_id' => 66, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 91, 'diagnostico_id' => 67, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 92, 'diagnostico_id' => 63, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 92, 'diagnostico_id' => 64, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 92, 'diagnostico_id' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 92, 'diagnostico_id' => 66, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 92, 'diagnostico_id' => 67, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 93, 'diagnostico_id' => 63, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 93, 'diagnostico_id' => 64, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 93, 'diagnostico_id' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 93, 'diagnostico_id' => 66, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 93, 'diagnostico_id' => 67, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 94, 'diagnostico_id' => 63, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 94, 'diagnostico_id' => 64, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 94, 'diagnostico_id' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 94, 'diagnostico_id' => 66, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 94, 'diagnostico_id' => 67, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 95, 'diagnostico_id' => 63, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 95, 'diagnostico_id' => 64, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 95, 'diagnostico_id' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 95, 'diagnostico_id' => 66, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 95, 'diagnostico_id' => 67, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 96, 'diagnostico_id' => 63, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 96, 'diagnostico_id' => 64, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 96, 'diagnostico_id' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 96, 'diagnostico_id' => 66, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 96, 'diagnostico_id' => 67, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 97, 'diagnostico_id' => 68, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            

            //Origem: Comunicação e Gregária
            ['motivo_id' => 98, 'diagnostico_id' => 69, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 99, 'diagnostico_id' => 69, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 100, 'diagnostico_id' => 70, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 100, 'diagnostico_id' => 71, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 101, 'diagnostico_id' => 70, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['motivo_id' => 101, 'diagnostico_id' => 71, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],


            // Origem: Religião
            ['motivo_id' => 102, 'diagnostico_id' => 72, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        
            //Origem: Nutrição pt.2
            ['motivo_id' => 102, 'diagnostico_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        ]);
    }
}
