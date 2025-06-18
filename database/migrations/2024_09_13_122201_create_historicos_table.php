<?php

use App\Models\Tipo_diabetes;
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
        Schema::create('historicos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Tipo_diabetes::class);
            $table->string('cirurgia_motivo')->nullable();
            $table->string('amputacao_onde')->nullable();
            $table->date('amputacao_quando')->nullable();
            $table->tinyInteger('n_cigarros')->nullable();
            $table->date('inicio_tabagismo')->nullable();
            $table->date('inicio_etilismo')->nullable();
            $table->string('medicamento_alergia')->nullable();
            $table->string('alimento_alergia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historicos');
    }
};
