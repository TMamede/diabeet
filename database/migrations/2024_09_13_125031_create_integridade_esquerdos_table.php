<?php

use App\Models\Localizacao_lesao;
use App\Models\Regiao_pe;
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
        Schema::create('integridade_esquerdos', function (Blueprint $table) {
            $table->id();
            $table->decimal('comprimento');
            $table->decimal('largura');
            $table->foreignIdFor(Regiao_pe::class);
            $table->foreignIdFor(Localizacao_lesao::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('integridade_esquerdos');
    }
};
