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
                  $table->foreignIdFor(Questionario::class)
                        ->constrained()
                        ->onDelete('cascade'); // Exclui o prontuário se o questionário for deletado
                  $table->boolean('gerado')->default(false);
                  $table->timestamps();
            });

            Schema::create('prontuario_origem', function (Blueprint $table) {
                  $table->id();
                  $table->foreignIdFor(Prontuario::class)
                        ->constrained()
                        ->onDelete('cascade'); // Exclui associação com prontuário
                  $table->foreignIdFor(Origem::class)
                        ->constrained()
                        ->onDelete('cascade'); // Exclui se a origem for deletada
                  $table->timestamps();
            });

            Schema::create('prontuario_motivo', function (Blueprint $table) {
                  $table->id();
                  $table->foreignIdFor(Prontuario::class)
                        ->constrained()
                        ->onDelete('cascade'); // Exclui associação com prontuário
                  $table->foreignIdFor(Motivo::class)
                        ->constrained()
                        ->onDelete('cascade'); // Exclui se o motivo for deletado
                  $table->timestamps();
            });

            Schema::create('prontuario_diagnostico', function (Blueprint $table) {
                  $table->id();
                  $table->foreignIdFor(Prontuario::class)
                        ->constrained()
                        ->onDelete('cascade'); // Exclui associação com prontuário
                  $table->foreignIdFor(Diagnostico::class)
                        ->constrained()
                        ->onDelete('cascade'); // Exclui se o diagnóstico for deletado
                  $table->timestamps();
            });

            Schema::create('prontuario_intervencao', function (Blueprint $table) {
                  $table->id();
                  $table->foreignIdFor(Prontuario::class)
                        ->constrained()
                        ->onDelete('cascade'); // Exclui associação com prontuário
                  $table->foreignIdFor(Intervencao::class)
                        ->constrained()
                        ->onDelete('cascade'); // Exclui se a intervenção for deletada
                  $table->timestamps();
            });
      }

      /**
       * Reverse the migrations.
       */
      public function down(): void
      {
            Schema::dropIfExists('prontuario_origem');
            Schema::dropIfExists('prontuario_motivo');
            Schema::dropIfExists('prontuario_diagnostico');
            Schema::dropIfExists('prontuario_intervencao');
            Schema::dropIfExists('prontuarios');
      }
};
