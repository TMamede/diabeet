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
        Schema::create('cuidado_pes', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('pes');
            $table->tinyInteger('sapato');
            $table->tinyInteger('dedos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuidado_pes');
    }
};
