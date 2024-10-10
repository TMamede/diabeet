<?php

use App\Models\Integridade_cutanea;
use App\Models\Sinais_infeccao;
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
        Schema::create('sinais_infeccaos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('sinais_integridade', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Sinais_infeccao::class);
            $table->foreignIdFor(Integridade_cutanea::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sinais_infeccaos');
        Schema::dropIfExists('sinais_integridade');
    }
};
