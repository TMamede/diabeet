<?php

use App\Models\Diagnostico;
use App\Models\Intervencao;
use App\Models\Motivo;
use App\Models\Origem;
use App\Models\Prontuario;
use App\Models\Questionario;
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
        Schema::create('prontuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Questionario::class);
            $table->timestamps();
        });

        Schema::create('prontuario_origem', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Prontuario::class);
            $table->foreignIdFor(Origem::class);
            $table->timestamps();
        });

        Schema::create('prontuario_motivo', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Prontuario::class);
            $table->foreignIdFor(Motivo::class);
            $table->timestamps();
        });

        Schema::create('prontuario_diagnostico', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Prontuario::class);
            $table->foreignIdFor(Diagnostico::class);
            $table->timestamps();
        });

        Schema::create('prontuario_intervencao', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Prontuario::class);
            $table->foreignIdFor(Intervencao::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prontuarios');
        Schema::dropIfExists('prontuario_origem');
        Schema::dropIfExists('prontuario_motivo');
        Schema::dropIfExists('prontuario_diagnostico');
        Schema::dropIfExists('prontuario_intervencao');
    }
};
