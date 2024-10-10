<?php

use App\Models\Cuidado_ferida;
use App\Models\Limpeza_lesao;
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
        Schema::create('limpeza_lesaos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('limpezas_ferida', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Limpeza_lesao::class);
            $table->foreignIdFor(Cuidado_ferida::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('limpeza_lesaos');
        Schema::dropIfExists('limpezas_ferida');
    }
};
