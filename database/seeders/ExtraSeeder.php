<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Database\Seeders\CriarQuestionario\CriarQuestionarioSeeder;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(QuestionarioSeeder::class);
        $this->call(CadastroPacienteSeeder::class);
        $this->call(SaudeMocSeeder::class);
        $this->call(EsfSeeder::class);
        $this->call(UnidadeEsfSeeder::class);
    }
}
