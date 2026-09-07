<?php

use App\Models\Integridade_cutanea;
use App\Models\Tipo_tecido_ferida;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('integridade_cutanea_tipo_tecido_ferida', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Integridade_cutanea::class);
            $table->foreignIdFor(Tipo_tecido_ferida::class);
            $table->timestamps();
        });

        // Preserva as seleções já existentes antes de remover a coluna única.
        $rows = DB::table('integridade_cutaneas')->whereNotNull('tipo_tecido_ferida_id')->get(['id', 'tipo_tecido_ferida_id']);
        foreach ($rows as $row) {
            DB::table('integridade_cutanea_tipo_tecido_ferida')->insert([
                'integridade_cutanea_id' => $row->id,
                'tipo_tecido_ferida_id' => $row->tipo_tecido_ferida_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $constraint = DB::selectOne(
            "SELECT conname FROM pg_constraint WHERE conrelid = 'integridade_cutaneas'::regclass AND confrelid = 'tipo_tecido_feridas'::regclass"
        );

        Schema::table('integridade_cutaneas', function (Blueprint $table) use ($constraint) {
            if ($constraint) {
                $table->dropForeign($constraint->conname);
            }
            $table->dropColumn('tipo_tecido_ferida_id');
        });
    }

    public function down(): void
    {
        Schema::table('integridade_cutaneas', function (Blueprint $table) {
            $table->foreignIdFor(Tipo_tecido_ferida::class)->nullable();
        });

        $grouped = DB::table('integridade_cutanea_tipo_tecido_ferida')->orderBy('id')->get()->groupBy('integridade_cutanea_id');
        foreach ($grouped as $integridadeId => $rows) {
            DB::table('integridade_cutaneas')
                ->where('id', $integridadeId)
                ->update(['tipo_tecido_ferida_id' => $rows->first()->tipo_tecido_ferida_id]);
        }

        Schema::dropIfExists('integridade_cutanea_tipo_tecido_ferida');
    }
};
