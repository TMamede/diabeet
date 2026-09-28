<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('senso_percepcaos', function (Blueprint $table) {
            $table->renameColumn('pe_neuropatico', 'pe_cavo');
            $table->renameColumn('arco_desabado', 'colapso_mediope');
            $table->boolean('arco_plantar_normal')->nullable();
            $table->boolean('pe_plano')->nullable();
        });

        Schema::table('hidratacaos', function (Blueprint $table) {
            $table->boolean('integridade_cutaneo_mucosa_comprometida')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('hidratacaos', function (Blueprint $table) {
            $table->dropColumn('integridade_cutaneo_mucosa_comprometida');
        });

        Schema::table('senso_percepcaos', function (Blueprint $table) {
            $table->dropColumn(['arco_plantar_normal', 'pe_plano']);
            $table->renameColumn('pe_cavo', 'pe_neuropatico');
            $table->renameColumn('colapso_mediope', 'arco_desabado');
        });
    }
};
