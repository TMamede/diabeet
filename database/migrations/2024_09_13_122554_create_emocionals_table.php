<?php

use App\Models\Cuidado;
use App\Models\Emocional;
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
        Schema::create('emocionals', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('emocionals_cuidados', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Emocional::class);
            $table->foreignIdFor(Cuidado::class);
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emocionals');
        Schema::dropIfExists('emocionals_cuidados');
    }
};
