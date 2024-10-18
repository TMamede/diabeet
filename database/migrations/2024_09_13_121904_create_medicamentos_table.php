<?php

use App\Models\Medicamento;
use App\Models\Paciente;
use App\Models\Questionario;
use App\Models\Via;
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
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_generico');
            $table->foreignIdFor(Via::class);
            $table->string('dose');
            $table->timestamps();
        });

        Schema::create('medicamentos_paciente', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Medicamento::class);
            $table->foreignIdFor(Paciente::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
        Schema::dropIfExists('medicamentos_paciente');
    }
};
