<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('historicos', function (Blueprint $table) {
            $table->dropColumn('inicio_tabagismo');
        });

        Schema::table('historicos', function (Blueprint $table) {
            $table->integer('inicio_tabagismo')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('historicos', function (Blueprint $table) {
            $table->dropColumn('inicio_tabagismo');
        });

        Schema::table('historicos', function (Blueprint $table) {
            $table->date('inicio_tabagismo')->nullable();
        });
    }
};
