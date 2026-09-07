<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('sintomas_percepcaos')
            ->where('descricao', 'Claudicacao')
            ->update(['descricao' => 'Claudicação']);

        if (!DB::table('frequencia_exercicios')->where('descricao', '4x ou mais')->exists()) {
            DB::table('frequencia_exercicios')->insert([
                'descricao' => '4x ou mais',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function down(): void
    {
        DB::table('sintomas_percepcaos')
            ->where('descricao', 'Claudicação')
            ->update(['descricao' => 'Claudicacao']);

        DB::table('frequencia_exercicios')->where('descricao', '4x ou mais')->delete();
    }
};
