<?php

use App\Models\Impacto;
use App\Models\PreoDiabete;
use App\Models\Questionario;
use App\Models\Satisfacao;
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
        Schema::create('questionario_qualidades', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Satisfacao::class);
            $table->foreignIdFor(Impacto::class);
            $table->foreignIdFor(PreoDiabete::class);
            $table->tinyInteger('ter_filhos');
            $table->foreignIdFor(Questionario::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionario_qualidades');
    }
};
