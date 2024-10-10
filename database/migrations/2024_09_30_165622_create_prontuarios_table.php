<?php

use App\Models\Prontuario;
use App\Models\Questionario;
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
        Schema::create('prontuarios', function (Blueprint $table) {
            $table->id();
            $table->string('origem');
            $table->string('motivo');
            $table->string('diagnostico');
            $table->text('intervencao');
            $table->timestamps();
        });

        Schema::create('prontuario_questionario', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Prontuario::class);
            $table->foreignIdFor(Questionario::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prontuarios');
        Schema::dropIfExists('prontuario_questionario');
    }
};
