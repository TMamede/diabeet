<?php

use App\Models\Comportamento_regulacao_neuro;
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
        Schema::create('regulacao_neuros', function (Blueprint $table) {
            $table->id();
            $table->boolean('orientado');
            $table->foreignIdFor(Comportamento_regulacao_neuro::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regulacao_neuros');
    }
};
