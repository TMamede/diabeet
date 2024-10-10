<?php

use App\Models\Aspecto_exudato;
use App\Models\Bordas_ferida;
use App\Models\Integridade_direito;
use App\Models\Integridade_esquerdo;
use App\Models\Pele_periferida;
use App\Models\Profundidade;
use App\Models\Quantidade_exudato;
use App\Models\Tipo_tecido_ferida;
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
        Schema::create('integridade_cutaneas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Integridade_direito::class);
            $table->foreignIdFor(Integridade_esquerdo::class);
            $table->foreignIdFor(Bordas_ferida::class);
            $table->boolean('edema');
            $table->foreignIdFor(Quantidade_exudato::class);
            $table->boolean('odor_exudato');
            $table->foreignIdFor(Aspecto_exudato::class);
            $table->foreignIdFor(Tipo_tecido_ferida::class);
            $table->foreignIdFor(Profundidade::class);
            $table->foreignIdFor(Pele_periferida::class);
            $table->tinyInteger('dor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('integridade_cutaneas');
    }
};
