<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // nss_espirituais
        DB::table('nss_espirituais')->insert([
            ['religiao' => 'Nenhuma', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['religiao' => 'Católica', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['religiao' => 'Evangélica', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['religiao' => 'Espirita', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['religiao' => 'Judaica', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['religiao' => 'Ateu', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // recreacoes
        DB::table('recreacaos')->insert([
            ['descricao' => 'Nenhuma', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Televisão', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Rádio', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Igreja', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Livros', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Artesanato', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Esporte', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Exercitar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Video Games', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // emocionals
        DB::table('emocionals')->insert([
            ['descricao' => 'Estabilidade Emocional Preservada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Ansiedade', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Choro', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Angustia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Agitação', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Medo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // comportamento_regulacao_neuros
        DB::table('comportamento_regulacao_neuros')->insert([
            ['descricao' => 'Calmo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Agitado', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Confuso', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // analises_tatos
        DB::table('analise_tatos')->insert([
            ['descricao' => 'Sem Alterações', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Percepção Dolorosa Diminuida', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Percepção Termica Diminuida', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Percepção Tátil Diminuida', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Formigamento', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Dormência', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // tipo_peles
        DB::table('tipo_peles')->insert([
            ['descricao' => 'Pele Hidratada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Mucosa Hidratada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Pele Xerotica', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Xerostomia em Cavidade Bucal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Anidrose', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // alimento_consumos
        DB::table('alimento_consumos')->insert([
            ['descricao' => 'Alimentos In Natura', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Alimentos Minimamente Processados', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Alimentos Processados', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Alimentos Ultraprocessados', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // refeicaos
        DB::table('refeicaos')->insert([
            ['descricao' => 'Café da Manhã', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Almoço', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Lanche da Tarde', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Jantar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Ceia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // restricao_alimentos
        DB::table('restricao_alimentos')->insert([

            ['descricao' => 'Nenhuma', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Açúcar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Glúten', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Lactose', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Sal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // qualidade_sonos
        DB::table('qualidade_sonos')->insert([
            ['descricao' => 'Ótimo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Bom', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Regular', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Ruim', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // problemas_sonos
        DB::table('problema_sonos')->insert([
            ['descricao' => 'Nenhum', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Insonia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Sono Agitado', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Pesadelos', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Ronco', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Sono Interrompido', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Dificuldade de Iniciar Sono', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // frequencia_exercicios
        DB::table('frequencia_exercicios')->insert([
            ['descricao' => 'Não realiza', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Diariamente', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => '1x/semana', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => '2x/semana', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => '3x/semana', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        DB::table('zona_moradias')->insert([
            ['descricao' => 'Urbana', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Rural', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Institucionalizado', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Situação de Rua', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // rede_esgotos
        DB::table('rede_esgotos')->insert([
            ['descricao' => 'Pública', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Fossa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Céu Aberto', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // regulacao_termicas
        DB::table('tipo_temperaturas')->insert([
            ['descricao' => 'Hipotermia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Afebril', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Febril', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Febre Moderada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Hipertemia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // disturbio_sexuals
        DB::table('disturbio_sexuals')->insert([
            ['descricao' => 'Nenhum', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Alteração da Libido', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Disfunção Eretil', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Dispaurenia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Ressecamento Vaginal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // tipo_locomocaos
        DB::table('tipo_locomocaos')->insert([
            ['descricao' => 'Força Motora Preservada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Deambula', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Deambula Com Dispositivo de Marcha', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Deambula com Dificuldade', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Não Deambula', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Fadiga', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Paralisia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Paresia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Parestesia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Atrofia Muscular', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Amputação do Membro Inferior', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Deformidade em Membro Inferior', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Uso de Cadeira de Rodas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Mobilidade Limitada das Articulações Pé e Tornozelo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // estado_unhas
        DB::table('estado_unhas')->insert([
            ['descricao' => 'Sem Alterações', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Onicomicoses', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Onicogrifoses', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Onicocriptoses', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Bromidrose', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // sintomas_percepcaos
        DB::table('sintomas_percepcaos')->insert([
            ['descricao' => 'Sem Sintomas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Dor na Perna em Repouso', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Gangrena', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Rubor Dependente', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Palidez com a Perna Elevada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Perda de Pelos Sobre o Dorso do Pe', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Unhas do Halux Espessadas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Pele Brilhante', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Pele Descamativa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Presenca de Hematomas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Claudicacao', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Cianose', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // teste_senso_percepcaos
        DB::table('teste_senso_percepcaos')->insert([
            ['descricao' => 'Monofilamento de Semmes Weinstein', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Diapasão de 128 Hz', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Ipswich Touch', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // desbridamentos
        DB::table('desbridamentos')->insert([
            ['descricao' => 'Não Aplica', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Mecânico', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Cirurgico', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Enzimático', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Autolítico', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Instrumental', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // avaliacao_feridas
        DB::table('avaliacao_feridas')->insert([
            ['descricao' => 'Não Realiza', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Diária', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Semanal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => '2x semana', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => '3x semana', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // limpeza_lesaos
        DB::table('limpeza_lesaos')->insert([
            ['descricao' => 'Não Realiza', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Soro Fisiológico', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Água Destilada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'PHMB', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Água Ozonizada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // cobertura_feridas
        DB::table('cobertura_feridas')->insert([
            ['descricao' => 'Nenhuma', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Carvão Ativado com Prata', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Alginato de Cálcio', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Alginato de Cálcio com Prata', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Espuma de Poliuretano', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Espuma de Poliuretano com Prata', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Hidrofibra', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Hidrofibra com Prata', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Tela Não Aderente', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Papaína', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Colagenase', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Ácido Graxo Essencial', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Hidrogel', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Cloreto de Dialquil Carbamoil', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Creme', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Spray', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // bordas_feridas
        DB::table('bordas_feridas')->insert([
            ['descricao' => 'Aderidas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Epitelizada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Regulares', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Irregulares', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Descoladas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Macerada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Hiperqueratose', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Tecido Caloso', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Epibolia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // quantidade_exudatos
        DB::table('quantidade_exudatos')->insert([
            ['descricao' => 'Ausente', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Escasso', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Moderado', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Grande Quantidade', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // Inserir dados na tabela aspecto_exudatos
        DB::table('aspecto_exudatos')->insert([
            ['descricao' => 'Nenhum', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Seroso', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Sanguinolento', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Serosanguinolento', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Purulento', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Piosanguinolento', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // Inserir dados na tabela tipo_tecido_feridas
        DB::table('tipo_tecido_feridas')->insert([
            ['descricao' => 'Granulação', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Epitelização', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Necrose Seca', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Necrose Úmida', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // Inserir dados na tabela sinais_infeccaos
        DB::table('sinais_infeccaos')->insert([
            ['descricao' => 'Ausente', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Aumento da Temperatura', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Hiperemia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Aumento da Dor', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Aumento de Tecido Necrosado', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Aumento do Tamanho da Ferida', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Aumento do Exudato', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Exposição Óssea', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // Inserir dados na tabela profundidades
        DB::table('profundidades')->insert([
            ['descricao' => 'Plana', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Tuneis', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // Inserir dados na tabela pele_periferidas
        DB::table('pele_periferidas')->insert([
            ['descricao' => 'Integra', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Hiperqueratosa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Eritematosa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Hiperemiada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Macerada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Descamativa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Pruriginosa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Hiperpigmentada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Fibrótica', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Rígida', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // Inserir dados na tabela regiao_pes
        DB::table('regiao_pes')->insert([
            ['descricao' => 'Plantar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Interdigital', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Medial', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Lateral', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Dorsal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // Inserir dados na tabela localizacao_lesaos
        DB::table('localizacao_lesaos')->insert([
            ['descricao' => 'Antepé', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Mediopé', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['descricao' => 'Retropé', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
