<?php

use App\Models\Tipo_temperatura;
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
        Schema::create('regulacao_termicas', function (Blueprint $table) {
            $table->id();
            $table->decimal('temperatura');
            $table->foreignIdFor(Tipo_temperatura::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regulacao_termicas');
    }
};
