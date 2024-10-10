<?php

use App\Models\Comorbidade;
use App\Models\Historico;
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
        Schema::create('comorbidades', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('comorbidade_historico', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Historico::class);
            $table->foreignIdFor(Comorbidade::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comorbidades');
        Schema::dropIfExists('comorbidade_historico');
    }
};
