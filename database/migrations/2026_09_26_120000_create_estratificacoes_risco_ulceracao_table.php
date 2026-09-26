<?php

use App\Models\Questionario;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estratificacoes_risco_ulceracao', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Questionario::class)->unique()->constrained()->cascadeOnDelete();
            $table->boolean('psp');
            $table->boolean('dap');
            $table->boolean('deformidade_pe');
            $table->boolean('historico_ulcera_pe');
            $table->boolean('amputacao_previa');
            $table->boolean('doenca_renal_terminal');
            $table->unsignedTinyInteger('risco');
            $table->string('periodicidade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estratificacoes_risco_ulceracao');
    }
};
