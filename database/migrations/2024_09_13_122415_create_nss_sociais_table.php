<?php

use App\Models\Aprendizagem;
use App\Models\Comunicacao;
use App\Models\Cuidado;
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
        Schema::create('nss_sociais', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Aprendizagem::class);
            $table->foreignIdFor(Cuidado::class);
            $table->foreignIdFor(Comunicacao::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nss_sociais');
    }
};
