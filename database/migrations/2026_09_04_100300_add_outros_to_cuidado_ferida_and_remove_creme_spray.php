<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cuidado_feridas', function (Blueprint $table) {
            $table->text('outras_limpezas')->nullable();
            $table->text('outras_coberturas')->nullable();
        });

        $coberturaIds = DB::table('cobertura_feridas')
            ->whereIn('descricao', ['Creme', 'Spray'])
            ->pluck('id');

        DB::table('coberturas_cuidado')->whereIn('cobertura_ferida_id', $coberturaIds)->delete();
        DB::table('cobertura_feridas')->whereIn('id', $coberturaIds)->delete();
    }

    public function down(): void
    {
        DB::table('cobertura_feridas')->insert([
            ['descricao' => 'Creme', 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Spray', 'created_at' => now(), 'updated_at' => now()],
        ]);

        Schema::table('cuidado_feridas', function (Blueprint $table) {
            $table->dropColumn(['outras_limpezas', 'outras_coberturas']);
        });
    }
};
