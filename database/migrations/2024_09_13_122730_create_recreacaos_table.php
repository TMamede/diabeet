<?php

use App\Models\Nss_sociais;
use App\Models\Recreacao;
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
        Schema::create('recreacaos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('recreacaos_nss', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Recreacao::class);
            $table->foreignIdFor(Nss_sociais::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recreacaos');
        Schema::dropIfExists('recreacaos_nss');
    }
};
