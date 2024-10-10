<?php

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
        Schema::create('aprendizagems', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('monitoramento_glicemia_dia');
            $table->boolean('cuidado_pes');
            $table->boolean('uso_sapato');
            $table->boolean('alimentacao');
            $table->boolean('regime_terapeutico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprendizagems');
    }
};
