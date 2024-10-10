<?php

use App\Models\Locomocao;
use App\Models\Tipo_locomocao;
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
        Schema::create('tipo_locomocaos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('tipos_loc', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Locomocao::class);
            $table->foreignIdFor(Tipo_locomocao::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_locomocaos');
        Schema::dropIfExists('tipos_loc');
    }
};
