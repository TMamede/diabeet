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
        Schema::create('eliminacaos', function (Blueprint $table) {
            $table->id();
            $table->boolean('dor_urinar');
            $table->boolean('incontinencia_urina');
            $table->boolean('uso_laxante');
            $table->boolean('uso_fraldas');
            $table->boolean('dor_eliminacoes');
            $table->boolean('incontinencia_eliminacao');
            $table->boolean('constipacao');
            $table->boolean('diarreia');
            $table->string('equipamento_externo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eliminacaos');
    }
};
