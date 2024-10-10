<?php

use App\Models\Problema_sono;
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
        Schema::create('problema_sonos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('problema_repouso', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Sono::class);
            $table->foreignIdFor(Problema_sono::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problema_sonos');
        Schema::dropIfExists('problema_repouso');
    }
};
