<?php

use App\Models\Historico;
use App\Models\Nss_biologicas;
use App\Models\Nss_espirituais;
use App\Models\Nss_sociais;
use App\Models\Paciente;
use App\Models\Unidade_saude;
use App\Models\User;
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
        Schema::create('questionarios', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Paciente::class)
                  ->constrained()
                  ->onDelete('cascade'); // Excluir questionários ao apagar paciente
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Unidade_saude::class);
            $table->foreignIdFor(Nss_biologicas::class);
            $table->foreignIdFor(Nss_sociais::class);
            $table->foreignIdFor(Nss_espirituais::class)->nullable;
            $table->text('impressoes')->nullable();
            $table->string('imagem_avaliacao_pe_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionarios');
    }
};
