<?php

use App\Models\Cobertura_ferida;
use App\Models\Cuidado_ferida;
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
        Schema::create('cobertura_feridas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('coberturas_cuidado', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Cuidado_ferida::class);
            $table->foreignIdFor(Cobertura_ferida::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cobertura_feridas');
        Schema::dropIfExists('coberturas_cuidado');
    }
};
