<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrigemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('origems')->insert([
            ['descricao' => 'Identificação e informações sociodemográficas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'História Pregressa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Regulação neurológica', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Percepção dos órgãos do sentido', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Nutrição', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Sono e Repouso', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Exercícios físicos', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Abrigo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Regulação hormonal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Oxigenação', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Regulação térmica', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Sexualidade', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Locomoção, mecânica corporal e motilidade', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Regulação vascular', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Sensopercepção', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Integridade cutâneo-mucosa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Cuidados com a Ferida', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Aprendizagem (Educação a Saúde)', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Recreação/Lazer/Criatividade', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Amor/Aceitação/Atenção/Gregária/Autoestima/Segurança  ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Comunicação e Gregária', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Religião', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
