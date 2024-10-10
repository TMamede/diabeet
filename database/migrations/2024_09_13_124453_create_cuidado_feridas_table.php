<?php

use App\Models\Avaliacao_ferida;
use App\Models\Desbridamento;
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
        Schema::create('cuidado_feridas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Desbridamento::class);
            $table->foreignIdFor(Avaliacao_ferida::class);
            $table->boolean('aplicacao_laserterapia');
            $table->boolean('terapia_fotodinamica');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuidado_feridas');
    }
};
