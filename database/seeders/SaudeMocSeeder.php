<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SaudeMocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Unidade: ACÁCIAS
        $enderecoId = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. ALAMEDA A',
            'numero' => '105',
            'cep' => '12345-678',
            'bairro' => 'ACÁCIAS',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'ACÁCIAS',
            'endereco_id' => $enderecoId,
            'telefone' => '2211-4515',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: ALCIDES RABELO
        $enderecoIdAlcides = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA HERMENEGILDO SOARES MALAQUIAS',
            'numero' => '389',
            'cep' => '12345-678',
            'bairro' => 'ALCIDES RABELO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'ALCIDES RABELO',
            'endereco_id' => $enderecoIdAlcides,
            'telefone' => '2211-4508 / 2211-4509',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: ALECRIM I
        $idEndAlecrimI = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA PADRE VIEIRA',
            'numero' => '620',
            'cep' => '12345-678',
            'bairro' => 'SÃO JUDAS',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'ALECRIM I',
            'endereco_id' => $idEndAlecrimI,
            'telefone' => '2211-4538',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: ALECRIM II
        $idEndAlecrimII = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA QUINZE',
            'numero' => '71',
            'cep' => '12345-678',
            'bairro' => 'CONJUNTO JOAQUIM COSTA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'ALECRIM II',
            'endereco_id' => $idEndAlecrimII,
            'telefone' => '2211-4538',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: ALIANÇA
        $idEndAlianca = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA E',
            'numero' => '29',
            'cep' => '12345-678',
            'bairro' => 'MONTE SIÃO IV',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'ALIANÇA',
            'endereco_id' => $idEndAlianca,
            'telefone' => '2211-4434 / 2211-4424',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: ALTO SÃO JOÃO
        $idEndAltoSaoJoao = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA JOÃO TEIXEIRA BASTOS',
            'numero' => '114',
            'cep' => '12345-678',
            'bairro' => 'ALTO SÃO JOÃO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'ALTO SÃO JOÃO',
            'endereco_id' => $idEndAltoSaoJoao,
            'telefone' => '2211-4586',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: ANTÔNIO PIMENTA
        $idEndAntonioPimenta = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA MAILDE PEREIRA ROCHA',
            'numero' => 'S/N',
            'cep' => '12345-678',
            'bairro' => 'ANTÔNIO PIMENTA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'ANTÔNIO PIMENTA',
            'endereco_id' => $idEndAntonioPimenta,
            'telefone' => '2211-4468',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: APARECIDA DO MUNDO NOVO
        $idEndAparecida = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. MONTES CLAROS',
            'numero' => 'S/N',
            'cep' => '12345-678',
            'bairro' => 'APARECIDA DO MUNDO NOVO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'APARECIDA DO MUNDO NOVO',
            'endereco_id' => $idEndAparecida,
            'telefone' => '2211- 4421 / 2211- 4422',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: AZALÉIA
        $idEndAzaleia = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA ANTÔNIO LEÃO COELHO',
            'numero' => '249',
            'cep' => '12345-678',
            'bairro' => 'PROLONGAMENTO TODOS OS SANTOS',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'AZALÉIA',
            'endereco_id' => $idEndAzaleia,
            'telefone' => '2211-4528',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: BELA PAISAGEM
        $idEndBelaPaisagem = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA GERALDINO MACHADO',
            'numero' => '946',
            'cep' => '12345-678',
            'bairro' => 'VILA AUREA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'BELA PAISAGEM',
            'endereco_id' => $idEndBelaPaisagem,
            'telefone' => '2211-4433 / 2211-4953',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: BELA VISTA
        $idEndBela = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA QUINCAS SOUTO',
            'numero' => '1420',
            'cep' => '12345-678',
            'bairro' => 'BELA VISTA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'BELA VISTA',
            'endereco_id' => $idEndBela,
            'telefone' => '2211-4436 / 2211-4435',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: CARMELO
        $idEndCarmelo = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA LAGOA DOS CARAJÁS',
            'numero' => '500',
            'cep' => '12345-678',
            'bairro' => 'CARMELO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'CARMELO',
            'endereco_id' => $idEndCarmelo,
            'telefone' => '2211-4535',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: CARMELO II
        $idEndCarmelo2 = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA LAGOA ABAETE',
            'numero' => '101',
            'cep' => '12345-678',
            'bairro' => 'CARMELO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'CARMELO II',
            'endereco_id' => $idEndCarmelo2,
            'telefone' => '2211-4444',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: CENTRO
        $idEndCentro = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA GABRIEL PASSOS',
            'numero' => '53',
            'cep' => '12345-678',
            'bairro' => 'CENTRO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'CENTRO',
            'endereco_id' => $idEndCentro,
            'telefone' => '2211-4590 / 2211-4592',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: CHIQUINHO GUIMARÃES
        $idEndChiquinho = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA 10',
            'numero' => '42',
            'cep' => '12345-678',
            'bairro' => 'CHIQUINHO GUIMARÃES (Loteamento Armando Prates Athayde)',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'CHIQUINHO GUIMARÃES',
            'endereco_id' => $idEndChiquinho,
            'telefone' => '2211-4447 / 2211-4448',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: CIDADE CRISTO REI
        $idEndCristoRei = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA CAPITÃO JOAQUIM SARMENTO',
            'numero' => 'S/N',
            'cep' => '12345-678',
            'bairro' => 'ALTO SÃO JOÃO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'CIDADE CRISTO REI',
            'endereco_id' => $idEndCristoRei,
            'telefone' => '2211-4449 / 2211-4450',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: CIDADE INDUSTRIAL
        $idEndCidadeIndustrial = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA 43',
            'numero' => '210',
            'cep' => '12345-678',
            'bairro' => 'CIDADE INDUSTRIAL',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'CIDADE INDUSTRIAL',
            'endereco_id' => $idEndCidadeIndustrial,
            'telefone' => '2211-4451 / 2211-4452',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: CINTRA
        $idEndCintra = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA MONTE PLANO',
            'numero' => '892',
            'cep' => '12345-678',
            'bairro' => 'CINTRA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'CINTRA',
            'endereco_id' => $idEndCintra,
            'telefone' => '2211-4455 / 2211-4456',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: CINTRA I E II
        $idEndCintra12 = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA CONEGO MARCOS',
            'numero' => '744',
            'cep' => '12345-678',
            'bairro' => 'CINTRA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'CINTRA I E II',
            'endereco_id' => $idEndCintra12,
            'telefone' => '2211-4454',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: CORAL
        $idEndCoral = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA GUARANI',
            'numero' => '377',
            'cep' => '12345-678',
            'bairro' => 'MELO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'CORAL',
            'endereco_id' => $idEndCoral,
            'telefone' => '2211-4510',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: DELFINO MAGALHÃES
        $idEndDelfino = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. NECO DELFINO',
            'numero' => '289',
            'cep' => '12345-678',
            'bairro' => 'DELFINO MAGALHÃES',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'DELFINO MAGALHÃES',
            'endereco_id' => $idEndDelfino,
            'telefone' => '2211-4339 / 2211-4464',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: DIAMANTE
        $idEndDiamante = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA OLÍMPIO GUEDES',
            'numero' => '766',
            'cep' => '12345-678',
            'bairro' => 'MORADA DO SOL',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'DIAMANTE',
            'endereco_id' => $idEndDiamante,
            'telefone' => '2211-4441 / 2211-4442',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: ELDORADO
        $idEndEldorado = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA ANTÔNIO MORENO',
            'numero' => '417',
            'cep' => '12345-678',
            'bairro' => 'ELDORADO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'ELDORADO',
            'endereco_id' => $idEndEldorado,
            'telefone' => '2211-4471 / 2211-4472',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: ELDORADO I
        $idEndEldorado1 = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA MARIA MOTA (ANTIGA RUA N)',
            'numero' => '384',
            'cep' => '12345-678',
            'bairro' => 'ELDORADO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'ELDORADO I',
            'endereco_id' => $idEndEldorado1,
            'telefone' => '2211-4369 / 2211-4368',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: EQUIPE CONSULTÓRIO NA RUA
        $idEndConsultorioRua = DB::table('enderecos')->insertGetId([
            'rua' => 'MERCADO MUNICIPAL',
            'numero' => 'S/N',
            'cep' => '12345-678',
            'bairro' => 'CENTRO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'EQUIPE CONSULTÓRIO NA RUA',
            'endereco_id' => $idEndConsultorioRua,
            'telefone' => '2211-4548',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: ESMERALDA
        $idEndEsmeralda = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA GIRASSOL',
            'numero' => '111',
            'cep' => '12345-678',
            'bairro' => 'SAGRADA FAMÍLIA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'ESMERALDA',
            'endereco_id' => $idEndEsmeralda,
            'telefone' => '2211-4431',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: ESPLANADA
        $idEndEsplanada = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. CEL. COELHO',
            'numero' => '195',
            'cep' => '12345-678',
            'bairro' => 'ESPLANADA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'ESPLANADA',
            'endereco_id' => $idEndEsplanada,
            'telefone' => '2211-4474 / 2211-4473',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: ESPLANADA III
        $idEndEsplanada3 = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA TOCANTINS',
            'numero' => '234',
            'cep' => '12345-678',
            'bairro' => 'GUARUJÁ',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'ESPLANADA III',
            'endereco_id' => $idEndEsplanada3,
            'telefone' => '2211-4518',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: INDEPENDÊNCIA
        $idEndIndependencia = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA ESPANHA',
            'numero' => '150',
            'cep' => '12345-678',
            'bairro' => 'INDEPENDÊNCIA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'INDEPENDÊNCIA',
            'endereco_id' => $idEndIndependencia,
            'telefone' => '2211-4481 / 2211-4482',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: INDEPENDÊNCIA II
        $idEndIndependencia2 = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. INDEPENDÊNCIA',
            'numero' => '3260',
            'cep' => '12345-678',
            'bairro' => 'INDEPENDÊNCIA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'INDEPENDÊNCIA II',
            'endereco_id' => $idEndIndependencia2,
            'telefone' => '2211-4471 / 2211-4472',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: INDEPENDÊNCIA III
        $idEndIndependencia3 = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA GRENFEL',
            'numero' => '116',
            'cep' => '12345-678',
            'bairro' => 'INDEPENDÊNCIA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'INDEPENDÊNCIA III',
            'endereco_id' => $idEndIndependencia3,
            'telefone' => '2211-4520',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: INTERLAGOS
        $idEndInterlagos = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA TUCURUÍ',
            'numero' => '379',
            'cep' => '12345-678',
            'bairro' => 'INTERLAGOS',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'INTERLAGOS',
            'endereco_id' => $idEndInterlagos,
            'telefone' => '2211-4576',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: JADE
        $idEndJade = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA CARLOS CÂMARA',
            'numero' => '217',
            'cep' => '12345-678',
            'bairro' => 'VILA GUILHERMINA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'JADE',
            'endereco_id' => $idEndJade,
            'telefone' => '2211-4539',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: JARAGUÁ
        $idEndJaragua = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. ANTONIO DE FREITAS',
            'numero' => '205',
            'cep' => '12345-678',
            'bairro' => 'JARAGUA II',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'JARAGUÁ',
            'endereco_id' => $idEndJaragua,
            'telefone' => '2211-4523',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: JARDIM ALEGRE / CAMPOS ELÍSEOS
        $idEndJardimAlegre = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA F',
            'numero' => '590',
            'cep' => '12345-678',
            'bairro' => 'JARDIM ALEGRE / CAMPOS ELÍSEOS',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'JARDIM ALEGRE / CAMPOS ELÍSEOS',
            'endereco_id' => $idEndJardimAlegre,
            'telefone' => '2211-4565',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: JARDIM BRASIL
        $idEndJardimBrasil = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA PLÍNIO RIBEIRO',
            'numero' => '52',
            'cep' => '12345-678',
            'bairro' => 'JARDIM BRASIL',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'JARDIM BRASIL',
            'endereco_id' => $idEndJardimBrasil,
            'telefone' => '2211-4537',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: JARDIM PALMEIRAS I
        $idEndJardimPalmeiras1 = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA NATAL',
            'numero' => '318',
            'cep' => '12345-678',
            'bairro' => 'JARDIM PALMEIRAS',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'JARDIM PALMEIRAS I',
            'endereco_id' => $idEndJardimPalmeiras1,
            'telefone' => '2211-4489 / 2211-4490',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: JARDIM PRIMAVERA
        $idEndJardimPrimavera = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA TRÊS (OU CÍCERO ROMÃO BATISTA)',
            'numero' => '905',
            'cep' => '12345-678',
            'bairro' => 'JARDIM PRIMAVERA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'JARDIM PRIMAVERA',
            'endereco_id' => $idEndJardimPrimavera,
            'telefone' => '2211-4524',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: JARDIM SANTO INÁCIO
        $idEndJardimSantoInacio = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA MONTE SINAI',
            'numero' => '670',
            'cep' => '12345-678',
            'bairro' => 'SANTO INÁCIO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'JARDIM SANTO INÁCIO',
            'endereco_id' => $idEndJardimSantoInacio,
            'telefone' => '2211-4439 / 2211-4440',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: JOÃO BOTELHO
        $idEndJoaoBotelho = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA DOMICIANO PIMENTA',
            'numero' => '151',
            'cep' => '12345-678',
            'bairro' => 'VILA LUIZA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'JOÃO BOTELHO',
            'endereco_id' => $idEndJoaoBotelho,
            'telefone' => '2211-4526',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: JOSÉ CARLOS DE LIMA
        $idEndJoseCarlos = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA ANTÔNIO FRANCO AMARAL FILHO',
            'numero' => '282',
            'cep' => '12345-678',
            'bairro' => 'JOSÉ CARLOS DE LIMA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'JOSÉ CARLOS DE LIMA',
            'endereco_id' => $idEndJoseCarlos,
            'telefone' => '2211-4470 / 2211-4469',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: JOSÉ CORRÊA MACHADO
        $idEndJoseCorrea = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA K',
            'numero' => '81',
            'cep' => '12345-678',
            'bairro' => 'JOSÉ CORRÊA MACHADO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'JOSÉ CORRÊA MACHADO',
            'endereco_id' => $idEndJoseCorrea,
            'telefone' => '2211-4477 / 2211-4478',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: LOURDES
        $idEndLourdes = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA GEOVANE SOARES DA CRUZ',
            'numero' => '647',
            'cep' => '12345-678',
            'bairro' => 'LOURDES',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'LOURDES',
            'endereco_id' => $idEndLourdes,
            'telefone' => '2211-4260 / 2211-4261',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: MAJOR PRATES
        $idEndMajorPrates = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. OLÍMPIO PRATES',
            'numero' => '779',
            'cep' => '12345-678',
            'bairro' => 'MAJOR PRATES',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'MAJOR PRATES',
            'endereco_id' => $idEndMajorPrates,
            'telefone' => '2211-4499',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: MANDAQUARIL
        $idEndMandaquaril = DB::table('enderecos')->insertGetId([
            'rua' => 'ESTRADA DE JURAMENTO KM10',
            'numero' => '308',
            'cep' => '12345-678',
            'bairro' => 'VILA PONTA DO MORRO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'MANDAQUARIL',
            'endereco_id' => $idEndMandaquaril,
            'telefone' => '2211-4915',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: MARACANÃ
        $idEndMaracana = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. BRASÍLIA',
            'numero' => '724',
            'cep' => '12345-678',
            'bairro' => 'MARACANÃ',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'MARACANÃ',
            'endereco_id' => $idEndMaracana,
            'telefone' => '2211-4465 / 2211-4466',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: MARFIM
        $idEndMarfim = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA PROFESSOR JOÃO CAMARA',
            'numero' => '111',
            'cep' => '12345-678',
            'bairro' => 'MORADA DO PARQUE',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'MARFIM',
            'endereco_id' => $idEndMarfim,
            'telefone' => '2211-4372',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: MIRALTA
        $idEndMiralta = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA PADRE EUGÊNIO',
            'numero' => 'S/N',
            'cep' => '12345-678',
            'bairro' => 'POVOADO RURAL DE MIRALTA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'MIRALTA',
            'endereco_id' => $idEndMiralta,
            'telefone' => '2211-3253',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: MONTE CARMELO
        $idEndMonteCarmelo = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA PLATINA',
            'numero' => '22',
            'cep' => '12345-678',
            'bairro' => 'MONTE CARMELO I',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'MONTE CARMELO',
            'endereco_id' => $idEndMonteCarmelo,
            'telefone' => '2211-4506 / 2211-4507',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: MORRINHOS
        $idEndMorrinhos = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA MELO VIANA',
            'numero' => '550',
            'cep' => '12345-678',
            'bairro' => 'MORRINHOS',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'MORRINHOS',
            'endereco_id' => $idEndMorrinhos,
            'telefone' => '2211-4445 / 2211-4446',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: NOSSA SENHORA DAS GRAÇAS
        $idEndNossaSenhoraGracas = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA JUSTINIANO NUNES',
            'numero' => '408',
            'cep' => '12345-678',
            'bairro' => 'NOSSA SENHORA DAS GRAÇAS',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'NOSSA SENHORA DAS GRAÇAS',
            'endereco_id' => $idEndNossaSenhoraGracas,
            'telefone' => '2211-4483 / 2211-4484',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: NOVA ESPERANÇA
        $idEndNovaEsperanca = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA A',
            'numero' => '140',
            'cep' => '12345-678',
            'bairro' => 'VILA DAS PAIANEIRAS',
            'cidade' => 'NOVA ESPERANÇA',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'NOVA ESPERANÇA',
            'endereco_id' => $idEndNovaEsperanca,
            'telefone' => '2211-4423',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: NOVA SUIÇA
        $idEndNovaSuica = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA ITALIA',
            'numero' => '1055',
            'cep' => '12345-678',
            'bairro' => 'NOVA SUIÇA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'NOVA SUIÇA',
            'endereco_id' => $idEndNovaSuica,
            'telefone' => '2211-4525 / 2211-4679',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: PLANALTO
        $idEndPlanalto = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA DIVINO ESPÍRITO SANTO',
            'numero' => '389',
            'cep' => '12345-678',
            'bairro' => 'PLANALTO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'PLANALTO',
            'endereco_id' => $idEndPlanalto,
            'telefone' => '2211-4485 / 2211-4502',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: PLANALTO II
        $idEndPlanalto2 = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA DOIS',
            'numero' => '850',
            'cep' => '12345-678',
            'bairro' => 'PLANALTO II',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'PLANALTO II',
            'endereco_id' => $idEndPlanalto2,
            'telefone' => '2211-4680',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: PLANALTO RURAL
        $idEndPlanaltoRural = DB::table('enderecos')->insertGetId([
            'rua' => 'BR 153, KM 384',
            'numero' => 'S/N',
            'cep' => '12345-678',
            'bairro' => 'ZONA RURAL',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'PLANALTO RURAL',
            'endereco_id' => $idEndPlanaltoRural,
            'telefone' => '2211-3251',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: RECANTO DAS ÁGUAS
        $idEndRecantoAguas = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA H',
            'numero' => '32',
            'cep' => '12345-678',
            'bairro' => 'SÃO LUCAS',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'RECANTO DAS ÁGUAS',
            'endereco_id' => $idEndRecantoAguas,
            'telefone' => '2211-4527',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: RENASCENÇA
        $idEndRenascenca = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. BIO LOPES',
            'numero' => '1272',
            'cep' => '12345-678',
            'bairro' => 'RENASCENÇA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'RENASCENÇA',
            'endereco_id' => $idEndRenascenca,
            'telefone' => '2211-4420 / 2211-4956',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: SAFIRA
        $idEndSafira = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA ANHANGUERA',
            'numero' => '621',
            'cep' => '12345-678',
            'bairro' => 'CÂNDIDA CÂMARA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'SAFIRA',
            'endereco_id' => $idEndSafira,
            'telefone' => '2211-4588',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: SAMAMBAIA
        $idEndSamambaia = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. MONTES CLAROS',
            'numero' => '58',
            'cep' => '12345-678',
            'bairro' => 'DISTRITO DE VILA NOVA DE MINAS',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'SAMAMBAIA',
            'endereco_id' => $idEndSamambaia,
            'telefone' => '2211-4556 / 2211-4748',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: SANTA BÁRBARA
        $idEndSantaBarbara = DB::table('enderecos')->insertGetId([
            'rua' => 'BR 365, KM 10',
            'numero' => 'S/N',
            'cep' => '12345-678',
            'bairro' => 'SANTA BÁRBARA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'SANTA BÁRBARA',
            'endereco_id' => $idEndSantaBarbara,
            'telefone' => '2211-4597',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: SANTA LÚCIA
        $idEndSantaLucia = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA OLIVINA',
            'numero' => '240',
            'cep' => '12345-678',
            'bairro' => 'SANTA LÚCIA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'SANTA LÚCIA',
            'endereco_id' => $idEndSantaLucia,
            'telefone' => '2211-4437 / 2211-4438',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: SANTA RAFAELA
        $idEndSantaRafaela = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA VICENTE SILVA',
            'numero' => '160',
            'cep' => '12345-678',
            'bairro' => 'SANTA RAFAELA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'SANTA RAFAELA',
            'endereco_id' => $idEndSantaRafaela,
            'telefone' => '2211-4418 / 2211-4417',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: SANTA ROSA DE LIMA
        $idEndSantaRosaLima = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. RIO BRANCO',
            'numero' => 'S/N',
            'cep' => '12345-678',
            'bairro' => 'SANTA ROSA DE LIMA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'SANTA ROSA DE LIMA',
            'endereco_id' => $idEndSantaRosaLima,
            'telefone' => '2211-4570 / 2211-4558',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: SANTO ANTÔNIO I
        $idEndSantoAntonio1 = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. OLÍMPIO MAGALHÃES',
            'numero' => '756',
            'cep' => '12345-678',
            'bairro' => 'DELFINO MAGALHÃES',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'SANTO ANTÔNIO I',
            'endereco_id' => $idEndSantoAntonio1,
            'telefone' => '2211-4511',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: SANTO ANTÔNIO II
        $idEndSantoAntonio2 = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA RAIMUNDO VANDERLEI',
            'numero' => '42',
            'cep' => '12345-678',
            'bairro' => 'SANTO ANTÔNIO II',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'SANTO ANTÔNIO II',
            'endereco_id' => $idEndSantoAntonio2,
            'telefone' => '2211-4429 / 2211-4430',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: SANTOS REIS
        $idEndSantosReis = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA MARCOS RIBEIRO',
            'numero' => '167',
            'cep' => '12345-678',
            'bairro' => 'SANTOS REIS',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'SANTOS REIS',
            'endereco_id' => $idEndSantosReis,
            'telefone' => '2211-4427 / 2211-4428',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: SÃO GERALDO II
        $idEndSaoGeraldo2 = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA R',
            'numero' => '162',
            'cep' => '12345-678',
            'bairro' => 'LOTEAMENTO BARBOSA / SÃO GERALDO II',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'SÃO GERALDO II',
            'endereco_id' => $idEndSaoGeraldo2,
            'telefone' => '2211-4530',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: SÃO JOSÉ
        $idEndSaoJose = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. FLORIANO NEIVA',
            'numero' => '833 A',
            'cep' => '12345-678',
            'bairro' => 'SÃO JOSÉ',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'SÃO JOSÉ',
            'endereco_id' => $idEndSaoJose,
            'telefone' => '2211-4536',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: SÃO JUDAS
        $idEndSaoJudas = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA PADRE VIEIRA',
            'numero' => '620',
            'cep' => '12345-678',
            'bairro' => 'SÃO JUDAS',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'SÃO JUDAS',
            'endereco_id' => $idEndSaoJudas,
            'telefone' => '2211-4461 / 2211-4462',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: TANCREDO NEVES
        $idEndTancredoNeves = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA DOIS',
            'numero' => 'S/N',
            'cep' => '12345-678',
            'bairro' => 'TANCREDO NEVES',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'TANCREDO NEVES',
            'endereco_id' => $idEndTancredoNeves,
            'telefone' => '2211-4475 / 2211-4476',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: TOPÁZIO
        $idEndTopazio = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA 33',
            'numero' => '191',
            'cep' => '12345-678',
            'bairro' => 'SANTO AMARO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'TOPÁZIO',
            'endereco_id' => $idEndTopazio,
            'telefone' => '2211-4522',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: TURMALINA
        $idEndTurmalina = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA CORAÇÃO DE JESUS',
            'numero' => '523',
            'cep' => '12345-678',
            'bairro' => 'CENTRO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'TURMALINA',
            'endereco_id' => $idEndTurmalina,
            'telefone' => '2211-4512',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: MERCADO MUNICIPAL
        $idEndMercadoMunicipal = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA MARECHAL DEODORO',
            'numero' => '63',
            'cep' => '12345-678',
            'bairro' => 'CENTRO',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'MERCADO MUNICIPAL',
            'endereco_id' => $idEndMercadoMunicipal,
            'telefone' => '2211-4548',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: VARGEM GRANDE
        $idEndVargemGrande = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA QUINZE',
            'numero' => '71',
            'cep' => '12345-678',
            'bairro' => 'CONJUNTO JOAQUIM COSTA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'VARGEM GRANDE',
            'endereco_id' => $idEndVargemGrande,
            'telefone' => '2211-4457 / 2211-4458',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: VERA CRUZ
        $idEndVeraCruz = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA EULIDSON NOVAIS',
            'numero' => 'S/N',
            'cep' => '12345-678',
            'bairro' => 'VERA CRUZ',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'VERA CRUZ',
            'endereco_id' => $idEndVeraCruz,
            'telefone' => '2211-4425 / 2211-4426',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: VILA ANÁLIA
        $idEndVilaAnalia = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA C',
            'numero' => '474',
            'cep' => '12345-678',
            'bairro' => 'VILA ANÁLIA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'VILA ANÁLIA',
            'endereco_id' => $idEndVilaAnalia,
            'telefone' => '2211-4488 / 2211-4487',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: VILA ANÁLIA II
        $idEndVilaAnalia2 = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA TRAVESSA UM',
            'numero' => '70',
            'cep' => '12345-678',
            'bairro' => 'VILA ANÁLIA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'VILA ANÁLIA II',
            'endereco_id' => $idEndVilaAnalia2,
            'telefone' => '2211-4521',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: VILA ATLÂNTIDA
        $idEndVilaAtlantida = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA C',
            'numero' => '90',
            'cep' => '12345-678',
            'bairro' => 'VILA ATLÂNTIDA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'VILA ATLÂNTIDA',
            'endereco_id' => $idEndVilaAtlantida,
            'telefone' => '2211-4495 / 2211-4496',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: VILA CAMPOS
        $idEndVilaCampos = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA G',
            'numero' => '426',
            'cep' => '12345-678',
            'bairro' => 'VILA CAMPOS',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'VILA CAMPOS',
            'endereco_id' => $idEndVilaCampos,
            'telefone' => '2211-4493',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: VILA OLIVEIRA 
        $idEndVilaOliveira = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA MARIA CONCEIÇÃO',
            'numero' => '245',
            'cep' => '12345-678',
            'bairro' => 'VILA MAURICÉIA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'VILA OLIVEIRA',
            'endereco_id' => $idEndVilaOliveira,
            'telefone' => '2211-4497 / 2211-4502',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: VILA SION
        $idEndVilaSion = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA JOSÉ MARIA SILVA',
            'numero' => '131',
            'cep' => '12345-678',
            'bairro' => 'VILA SION',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'VILA SION',
            'endereco_id' => $idEndVilaSion,
            'telefone' => '2211-4516 / 2211-4517',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: VILAGE DO LAGO II
        $idEndVilageLago = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. PERIMETRAL',
            'numero' => '2546',
            'cep' => '12345-678',
            'bairro' => 'VILAGE DO LAGO II',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'VILAGE DO LAGO II',
            'endereco_id' => $idEndVilageLago,
            'telefone' => '2211-4459 / 2211-4460',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: VIOLETA
        $idEndVioleta = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA JANETE CLAIR',
            'numero' => '170',
            'cep' => '12345-678',
            'bairro' => 'VILA REGINA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'VIOLETA',
            'endereco_id' => $idEndVioleta,
            'telefone' => '2211-4419',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: VITÓRIA
        $idEndVitoria = DB::table('enderecos')->insertGetId([
            'rua' => 'RUA DEZESSETE',
            'numero' => '350',
            'cep' => '12345-678',
            'bairro' => 'RESIDENCIAL VITÓRIA II',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'VITÓRIA',
            'endereco_id' => $idEndVitoria,
            'telefone' => '2211-4503',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Unidade: WALQUIRIA PEREIRA
        $idEndWalquiria = DB::table('enderecos')->insertGetId([
            'rua' => 'AV. DR. SIDNEY CHAVES',
            'numero' => '1279',
            'cep' => '12345-678',
            'bairro' => 'EDGAR PEREIRA',
            'cidade' => 'MONTES CLAROS',
            'uf' => 'MG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('unidade_saudes')->insert([
            'ubs' => 'WALQUIRIA PEREIRA',
            'endereco_id' => $idEndWalquiria,
            'telefone' => '2211-4504 / 2211-4505',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
