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
        Schema::create('alimenatacao_e', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('frutas');
            $table->tinyInteger('gordura');
            $table->tinyInteger('doces');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alimenatacao_e');
    }
};
