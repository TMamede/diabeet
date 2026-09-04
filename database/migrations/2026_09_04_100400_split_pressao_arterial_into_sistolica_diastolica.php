<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('regulacao_vasculars', function (Blueprint $table) {
            $table->integer('pressao_sistolica')->nullable();
            $table->integer('pressao_diastolica')->nullable();
        });

        $rows = DB::table('regulacao_vasculars')->get(['id', 'pressao_arterial']);
        foreach ($rows as $row) {
            $valor = trim((string) $row->pressao_arterial);
            $sistolica = null;
            $diastolica = null;

            if (preg_match('/^(\d{2,3})\s*[\/xX-]\s*(\d{2,3})$/', $valor, $m)) {
                $sistolica = (int) $m[1];
                $diastolica = (int) $m[2];
            } elseif (preg_match('/^(\d{4,5})$/', $valor, $m)) {
                // Formato sem separador, ex: "12080" -> 120/80
                $meio = intdiv(strlen($m[1]), 2);
                $sistolica = (int) substr($m[1], 0, $meio);
                $diastolica = (int) substr($m[1], $meio);
            } elseif (preg_match('/^(\d{2,3})$/', $valor, $m)) {
                $sistolica = (int) $m[1];
            }

            DB::table('regulacao_vasculars')
                ->where('id', $row->id)
                ->update([
                    'pressao_sistolica' => $sistolica,
                    'pressao_diastolica' => $diastolica,
                ]);
        }

        Schema::table('regulacao_vasculars', function (Blueprint $table) {
            $table->dropColumn('pressao_arterial');
        });
    }

    public function down(): void
    {
        Schema::table('regulacao_vasculars', function (Blueprint $table) {
            $table->string('pressao_arterial')->nullable();
        });

        DB::table('regulacao_vasculars')->update([
            'pressao_arterial' => DB::raw("COALESCE(pressao_sistolica::text, '') || '/' || COALESCE(pressao_diastolica::text, '')"),
        ]);

        Schema::table('regulacao_vasculars', function (Blueprint $table) {
            $table->dropColumn(['pressao_sistolica', 'pressao_diastolica']);
        });
    }
};
