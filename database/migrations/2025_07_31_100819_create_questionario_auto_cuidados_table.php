<?php

use App\Models\AlimenatacaoE;
use App\Models\AlimenatacaoG;
use App\Models\AtividadeFisica;
use App\Models\Cuidado_pes;
use App\Models\Medicacao;
use App\Models\Monitor;
use App\Models\Tabagismo;
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
        Schema::create('questionario_auto_cuidados', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AlimenatacaoG::class);
            $table->foreignIdFor(AlimenatacaoE::class);
            $table->foreignIdFor(AtividadeFisica::class);
            $table->foreignIdFor(Monitor::class);
            $table->foreignIdFor(Cuidado_pes::class);
            $table->foreignIdFor(Medicacao::class);
            $table->foreignIdFor(Tabagismo::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionario_auto_cuidados');
    }
};
