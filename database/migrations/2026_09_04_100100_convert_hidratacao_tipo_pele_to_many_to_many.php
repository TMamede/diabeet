<?php

use App\Models\Hidratacao;
use App\Models\Tipo_pele;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hidratacao_tipo_pele', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Hidratacao::class);
            $table->foreignIdFor(Tipo_pele::class);
            $table->timestamps();
        });

        // Preserva as seleções já existentes antes de remover a coluna única.
        $rows = DB::table('hidratacaos')->whereNotNull('tipo_pele_id')->get(['id', 'tipo_pele_id']);
        foreach ($rows as $row) {
            DB::table('hidratacao_tipo_pele')->insert([
                'hidratacao_id' => $row->id,
                'tipo_pele_id' => $row->tipo_pele_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $constraint = DB::selectOne(
            "SELECT conname FROM pg_constraint WHERE conrelid = 'hidratacaos'::regclass AND confrelid = 'tipo_peles'::regclass"
        );

        Schema::table('hidratacaos', function (Blueprint $table) use ($constraint) {
            if ($constraint) {
                $table->dropForeign($constraint->conname);
            }
            $table->dropColumn('tipo_pele_id');
        });
    }

    public function down(): void
    {
        Schema::table('hidratacaos', function (Blueprint $table) {
            $table->foreignIdFor(Tipo_pele::class)->nullable();
        });

        $first = DB::table('hidratacao_tipo_pele')->orderBy('id')->get()->groupBy('hidratacao_id');
        foreach ($first as $hidratacaoId => $rows) {
            DB::table('hidratacaos')
                ->where('id', $hidratacaoId)
                ->update(['tipo_pele_id' => $rows->first()->tipo_pele_id]);
        }

        Schema::dropIfExists('hidratacao_tipo_pele');
    }
};
