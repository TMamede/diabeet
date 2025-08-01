<?php

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
        Schema::create('medicacaos', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('medicamentos');
            $table->tinyInteger('injecoes');
            $table->tinyInteger('comprimidos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicacaos');
    }
};
