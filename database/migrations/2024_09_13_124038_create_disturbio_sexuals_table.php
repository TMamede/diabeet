<?php

use App\Models\Disturbio_sexual;
use App\Models\Sexualidade;
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
        Schema::create('disturbio_sexuals', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('disturbios_sexualidade', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Sexualidade::class);
            $table->foreignIdFor(Disturbio_sexual::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disturbio_sexuals');
        Schema::dropIfExists('disturbios_sexualidade');
    }
};
