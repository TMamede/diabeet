<?php

use App\Models\Nutricao;
use App\Models\Restricao_alimento;
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
        Schema::create('restricao_alimentos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('restricao_alimentos_nutricao', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Restricao_alimento::class);
            $table->foreignIdFor(Nutricao::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restricao_alimentos');
        Schema::dropIfExists('restricao_alimentos_nutricao');
    }
};
