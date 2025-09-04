<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionarioQualidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('data_fumos')->insert([
            ['descricao' => 'Nunca fumou', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Há mais de dois anos atrás', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Um a dois anos atrás', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Quatro a doze meses atrás', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Um a três meses atrás', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'No último mês', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Hoje', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
