<?php

use App\Models\Beneficio;
use App\Models\Endereco;
use App\Models\Estado_civil;
use App\Models\Etnia;
use App\Models\Historico;
use App\Models\Orientacao_sexual;
use App\Models\Reside;
use App\Models\Resultado;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->char('cpf')->unique();
            $table->string('email')->unique();
            $table->string('nome');
            $table->string('prontuario');
            $table->date('data_nasc');
            $table->foreignIdFor(Orientacao_sexual::class);
            $table->foreignIdFor(Estado_civil::class);
            $table->foreignIdFor(Etnia::class);
            $table->foreignIdFor(Endereco::class);
            $table->string('ocupacao');
            $table->decimal('renda_familiar');
            $table->foreignIdFor(Beneficio::class);
            $table->foreignIdFor(Reside::class);
            $table->tinyInteger('num_pss_casa');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Historico::class)->nullable();
            $table->foreignIdFor(Unidade_saude::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
