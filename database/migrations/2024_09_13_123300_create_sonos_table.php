<?php

use App\Models\Qualidade_sono;
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
        Schema::create('sonos', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('horas_sono');
            $table->boolean('acorda_noite');
            $table->foreignIdFor(Qualidade_sono::class);
            $table->string('medicamentos_sono')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sonos');
    }
};
