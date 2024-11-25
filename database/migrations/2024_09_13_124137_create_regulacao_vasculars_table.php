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
        Schema::create('regulacao_vasculars', function (Blueprint $table) {
            $table->id();
            $table->string('pressao_arterial');
            $table->tinyInteger('frequencia_cardiaca');
            $table->decimal('psatp_direito');
            $table->decimal('psap_direito');
            $table->decimal('psab_direito');
            $table->decimal('psatp_esquerdo');
            $table->decimal('psap_esquerdo');
            $table->decimal('psab_esquerdo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regulacao_vasculars');
    }
};
