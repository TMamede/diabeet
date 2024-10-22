<?php

use App\Models\Zona_moradia;
use App\Models\Rede_esgoto;
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
        Schema::create('abrigos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Zona_moradia::class);
            $table->boolean('Luz_publica');
            $table->boolean('Coleta_lixo');
            $table->boolean('Agua_tratada');
            $table->foreignIdFor(Rede_esgoto::class);
            $table->boolean('Animais_domesticos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abrigos');
    }
};
