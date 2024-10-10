<?php

use App\Models\Senso_percepcao;
use App\Models\Sintomas_percepcao;
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
        Schema::create('sintomas_percepcaos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('sintomas_senso', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Senso_percepcao::class);
            $table->foreignIdFor(Sintomas_percepcao::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sintomas_percepcaos');
        Schema::dropIfExists('sintomas_senso');
    }
};
