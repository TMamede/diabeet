<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\CriarQuestionario\NecessidadeBioSeeder;
use Database\Seeders\CriarQuestionario\NecessidadeSocioSeeder;
use Database\Seeders\CriarQuestionario\NssBio\AbrigoSeeder;
use Database\Seeders\CriarQuestionario\NssBio\CuidadoFeridaSeeder;
use Database\Seeders\CriarQuestionario\NssBio\EliminacaoSeeder;
use Database\Seeders\CriarQuestionario\NssBio\ExercicioFisicoSeeder;
use Database\Seeders\CriarQuestionario\NssBio\HidratacaoSeeder;
use Database\Seeders\CriarQuestionario\NssBio\IntegridadeCutaneaSeeder;
use Database\Seeders\CriarQuestionario\NssBio\LocomocaoSeeder;
use Database\Seeders\CriarQuestionario\NssBio\NutricaoSeeder;
use Database\Seeders\CriarQuestionario\NssBio\OxigenacaoSeeder;
use Database\Seeders\CriarQuestionario\NssBio\PercepcaoSentidoSeeder;
use Database\Seeders\CriarQuestionario\NssBio\RegulacaoHormonalSeeder;
use Database\Seeders\CriarQuestionario\NssBio\RegulacaoNeuroSeeder;
use Database\Seeders\CriarQuestionario\NssBio\RegulacaoTermicaSeeder;
use Database\Seeders\CriarQuestionario\NssBio\RegulacaoVascularSeeder;
use Database\Seeders\CriarQuestionario\NssBio\SensoPercepcaoSeeder;
use Database\Seeders\CriarQuestionario\NssBio\SexualidadeSeeder;
use Database\Seeders\CriarQuestionario\NssBio\SonoSeeder;
use Database\Seeders\CriarQuestionario\NssSocio\AprendizagemSeeder;
use Database\Seeders\CriarQuestionario\NssSocio\ComunicacaoSeeder;
use Database\Seeders\CriarQuestionario\NssSocio\CuidadoSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AbrigoSeeder::class);
        $this->call(CuidadoFeridaSeeder::class);
        $this->call(EliminacaoSeeder::class);
        $this->call(ExercicioFisicoSeeder::class);
        $this->call(HidratacaoSeeder::class);
        $this->call(IntegridadeCutaneaSeeder::class);
        $this->call(LocomocaoSeeder::class);
        $this->call(NutricaoSeeder::class);
        $this->call(OxigenacaoSeeder::class);
        $this->call(PercepcaoSentidoSeeder::class);
        $this->call(RegulacaoHormonalSeeder::class);
        $this->call(RegulacaoNeuroSeeder::class);
        $this->call(RegulacaoTermicaSeeder::class);
        $this->call(RegulacaoVascularSeeder::class);
        $this->call(SensoPercepcaoSeeder::class);
        $this->call(SexualidadeSeeder::class);
        $this->call(SonoSeeder::class);
        $this->call(AprendizagemSeeder::class);
        $this->call(ComunicacaoSeeder::class);
        $this->call(CuidadoSeeder::class);
        $this->call(NecessidadeBioSeeder::class);
        $this->call(NecessidadeSocioSeeder::class);
        $this->call(ExtraSeeder::class);

    }
}
