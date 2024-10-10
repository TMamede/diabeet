<?php

use App\Models\Analise_tato;
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
        Schema::create('percepcao_sentidos', function (Blueprint $table) {
            $table->id();
            $table->boolean('olho_direito');
            $table->boolean('olho_esquerdo');
            $table->boolean('ouvido');
            $table->foreignIdFor(Analise_tato::class);
            $table->boolean('risco_queda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('percepcao_sentidos');
    }
};
