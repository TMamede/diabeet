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
        Schema::create('regulacao_hormonals', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('altura');
            $table->decimal('peso');
            $table->tinyInteger('circunferencia_abdnominal');
            $table->tinyInteger('glicemia_capilar');
            $table->boolean('jejum');
            $table->boolean('pos_prandial');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regulacao_hormonals');
    }
};
