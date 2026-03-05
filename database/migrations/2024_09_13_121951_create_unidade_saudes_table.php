<?php

use App\Models\Endereco;
use App\Models\eSF;
use App\Models\Unidade_saude;
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
        Schema::create('unidade_saudes', function (Blueprint $table) {
            $table->id();
            $table->string('ubs');
            $table->foreignIdFor(Endereco::class);
            $table->string('telefone')->nullable();
            $table->timestamps();
        });

        Schema::create('unidade_esf', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Unidade_saude::class);
            $table->foreignIdFor(eSF::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidade_saudes');
        Schema::dropIfExists('unidade_esf');
    }
};
