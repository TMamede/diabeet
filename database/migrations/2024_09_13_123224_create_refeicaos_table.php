<?php

use App\Models\Nutricao;
use App\Models\Refeicao;
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
        Schema::create('refeicaos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('refeicaos_nutricao', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Refeicao::class);
            $table->foreignIdFor(Nutricao::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refeicaos');
        Schema::dropIfExists('refeicaos_nutricao');
    }
};
