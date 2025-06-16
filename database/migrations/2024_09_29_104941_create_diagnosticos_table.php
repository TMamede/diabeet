<?php

use App\Models\Diagnostico;
use App\Models\Intervencao;
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
        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('diagnostico_intervencao', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Diagnostico::class);
            $table->foreignIdFor(Intervencao::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosticos');
        Schema::dropIfExists('diagnostico_intervencao');
    }
};
