<?php

use App\Models\Aspecto_exudato;
use App\Models\Bordas_ferida;
use App\Models\Localizacao_lesao;
use App\Models\Nss_biologicas;
use App\Models\Pele_periferida;
use App\Models\Profundidade;
use App\Models\Quantidade_exudato;
use App\Models\Regiao_pe;
use App\Models\Tipo_tecido_ferida;
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
        Schema::create('integridade_cutaneas', function (Blueprint $table) {
            $table->id();
            $table->enum('lado', ['direito', 'esquerdo']);
            $table->foreignIdFor(Nss_biologicas::class);
            $table->foreignIdFor(Bordas_ferida::class)->nullable();
            $table->boolean('edema')->nullable();
            $table->foreignIdFor(Quantidade_exudato::class)->nullable();
            $table->boolean('odor_exudato')->nullable();
            $table->foreignIdFor(Aspecto_exudato::class)->nullable();
            $table->foreignIdFor(Tipo_tecido_ferida::class)->nullable();
            $table->foreignIdFor(Profundidade::class)->nullable();
            $table->foreignIdFor(Pele_periferida::class)->nullable();
            $table->tinyInteger('dor')->nullable();
            $table->decimal('comprimento')->nullable();
            $table->decimal('largura')->nullable();
            $table->foreignIdFor(Regiao_pe::class)->nullable();
            $table->foreignIdFor(Localizacao_lesao::class)->nullable();
            $table->boolean('lesao_amputacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('integridade_cutaneas');
    }
};
