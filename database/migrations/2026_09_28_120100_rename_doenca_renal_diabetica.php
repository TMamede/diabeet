<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('comorbidades')
            ->where('descricao', 'Doença Renal Diabetica')
            ->update(['descricao' => 'Doença renal em estágio avançado', 'updated_at' => now()]);
    }

    public function down(): void
    {
        DB::table('comorbidades')
            ->where('descricao', 'Doença renal em estágio avançado')
            ->update(['descricao' => 'Doença Renal Diabetica', 'updated_at' => now()]);
    }
};
