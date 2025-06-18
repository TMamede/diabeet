<?php

use App\Models\Abrigo;
use App\Models\Cuidado_ferida;
use App\Models\Eliminacao;
use App\Models\Exercicio_fisico;
use App\Models\Hidratacao;
use App\Models\Locomocao;
use App\Models\Nutricao;
use App\Models\Oxigenacao;
use App\Models\Percepcao_sentido;
use App\Models\Regulacao_hormonal;
use App\Models\Regulacao_neuro;
use App\Models\Regulacao_termica;
use App\Models\Regulacao_vascular;
use App\Models\Senso_percepcao;
use App\Models\Sexualidade;
use App\Models\Sono;
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
        Schema::create('nss_biologicas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Regulacao_neuro::class);
            $table->foreignIdFor(Percepcao_sentido::class);
            $table->foreignIdFor(Hidratacao::class);
            $table->foreignIdFor(Nutricao::class);
            $table->foreignIdFor(Sono::class);
            $table->foreignIdFor(Exercicio_fisico::class);
            $table->foreignIdFor(Abrigo::class);
            $table->foreignIdFor(Regulacao_hormonal::class);
            $table->foreignIdFor(Oxigenacao::class);
            $table->foreignIdFor(Regulacao_termica::class);
            $table->foreignIdFor(Eliminacao::class);
            $table->foreignIdFor(Sexualidade::class);
            $table->foreignIdFor(Locomocao::class);
            $table->foreignIdFor(Regulacao_vascular::class);
            $table->foreignIdFor(Senso_percepcao::class);
            $table->foreignIdFor(Cuidado_ferida::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nss_biologicas');
    }
};
