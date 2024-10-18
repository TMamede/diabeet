<?php

namespace Database\Seeders;

use App\Models\Historico;
use App\Models\Paciente;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vias')->insert([
            ['descricao' => 'Oral', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Sublingual', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Retal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Intravenosa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Intramuscular', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Subcutânea', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Respiratória', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Tópica', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Ocular', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Nasal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Auricular', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
} 
