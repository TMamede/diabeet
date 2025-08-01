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
        Schema::create('tabagismos', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('fumou');
            $table->tinyInteger('num_cigarros');
            $table->tinyInteger('quando_fumou');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabagismos');
    }
};
