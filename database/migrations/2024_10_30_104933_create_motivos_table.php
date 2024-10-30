<?php

use App\Models\Diagnostico;
use App\Models\Motivo;
use App\Models\Origem;
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
        Schema::create('motivos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->foreignIdFor(Origem::class);
            $table->timestamps();
        });

        Schema::create('motivo_diagnostico', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Motivo::class);
            $table->foreignIdFor(Diagnostico::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motivos');
    }
};
