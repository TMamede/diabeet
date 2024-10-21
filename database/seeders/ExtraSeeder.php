<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(QuestionarioSeeder::class);
        $this->call(CadastroPacienteSeeder::class);
        $this->call(HistoricoSeeder::class);
        $this->call(EnderecoSeeder::class);
        $this->call(UnidadeSaudeSeeder::class);
        $this->call(PacientesSeeder::class);
    }
}
