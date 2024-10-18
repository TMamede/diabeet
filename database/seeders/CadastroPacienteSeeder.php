<?php

namespace Database\Seeders;

use App\Models\Orientacao_sexual;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CadastroPacienteSeeder extends Seeder
{
    public function run()
    {
        Orientacao_sexual::create(['descricao' => 'Heterossexual']);
        Orientacao_sexual::create(['descricao' => 'Homossexual']);
        Orientacao_sexual::create(['descricao' => 'Bissexual']);
        Orientacao_sexual::create(['descricao' => 'Outros']);

        // Inserir estado civils
        DB::table('estado_civils')->insert([
            ['descricao' => 'Solteiro', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Casado', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Viuvo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Separado', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Divorciado', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // Inserir etnias
        DB::table('etnias')->insert([
            ['descricao' => 'Amarela', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Parda', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Branca', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Preta', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Indigena', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // Inserir beneficios
        DB::table('beneficios')->insert([
            ['descricao' => 'Nenhum', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Bolsa Família', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Benefício de Prestação Continuada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // Inserir resides
        DB::table('resides')->insert([
            ['descricao' => 'Sozinho', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Conjuge', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Irmãos', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Pais', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
        // Inserir tipos de diabetes
        DB::table('tipo_diabetes')->insert([
            ['tipo' => 'DM1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['tipo' => 'DM2', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // Inserir comorbidades
        DB::table('comorbidades')->insert([
            ['descricao' => 'HAS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'IAM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'AVE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Doença Arterial Periferica', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Dislipidemia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Retinopatia Diabetica', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Doença Renal Diabetica', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Neuropatia Diabetica', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Cetoacidose/Coma Hiperosmolar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Hipoglicemia 70 a 54 mg/dl', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Hipoglicemia < 54 mg/dl', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Doenca Periodontal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Tireoide de Hashimoto', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Hipertireodismo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Hipotireodismo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // Inserir alergias
        DB::table('alergias')->insert([
            ['descricao' => 'Alergia Respiratoria', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Alergia Alimentar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Alergia Cutânea', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Alergia Medicamentosa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        DB::table('vias')->insert([
            ['descricao' => 'Oral', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Sublingual', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Retal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Intravenosa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Intramuscular', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Subcutânea', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Respiratória', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Tópica', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Ocular', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Nasal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Auricular', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
