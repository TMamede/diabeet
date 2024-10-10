<?php

use App\Models\Alergia;
use App\Models\Historico;
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
        Schema::create('alergias', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('alergia_historico', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Historico::class);
            $table->foreignIdFor(Alergia::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alergias');
        Schema::dropIfExists('alergia_historico');
    }
};
