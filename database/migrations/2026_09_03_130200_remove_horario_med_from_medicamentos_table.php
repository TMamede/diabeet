<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('medicamentos', function (Blueprint $table) {
            $table->string('horario_descricao')->nullable();
        });

        $constraint = DB::selectOne(
            "SELECT conname FROM pg_constraint WHERE conrelid = 'medicamentos'::regclass AND confrelid = 'horario_meds'::regclass"
        );

        Schema::table('medicamentos', function (Blueprint $table) use ($constraint) {
            if ($constraint) {
                $table->dropForeign($constraint->conname);
            }
            $table->dropColumn('horario_med_id');
        });

        Schema::dropIfExists('horario_meds');
    }

    public function down(): void
    {
        Schema::create('horario_meds', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::table('medicamentos', function (Blueprint $table) {
            $table->foreignId('horario_med_id')->nullable()->constrained('horario_meds');
            $table->dropColumn('horario_descricao');
        });
    }
};
