<?php

use App\Models\Estado_unhas;
use App\Models\Teste_senso_percepcao;
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
        Schema::create('senso_percepcaos', function (Blueprint $table) {
            $table->id();
            $table->boolean('pe_neuropatico')->nullable();
            $table->boolean('arco_desabado')->nullable();
            $table->boolean('valgismo')->nullable();
            $table->boolean('dedos_em_garra')->nullable();
            $table->foreignIdFor(Estado_unhas::class);
            $table->boolean('corte_unhas')->nullable();
            $table->boolean('fissuras')->nullable();
            $table->boolean('calosidades')->nullable();
            $table->boolean('micose')->nullable();
            $table->foreignIdFor(Teste_senso_percepcao::class);
            $table->boolean('percepcao_direito');
            $table->boolean('percepcao_esquerdo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('senso_percepcaos');
    }
};
