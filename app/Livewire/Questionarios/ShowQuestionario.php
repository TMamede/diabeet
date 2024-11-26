<?php

namespace App\Livewire\Questionarios;

use App\Models\Paciente;
use App\Models\Questionario;
use App\Models\Unidade_saude;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Abrigo;
use App\Models\Aprendizagem;
use App\Models\Cobertura_ferida;
use App\Models\Comunicacao;
use App\Models\Cuidado;
use App\Models\Cuidado_ferida;
use App\Models\Disturbio_sexual;
use App\Models\Eliminacao;
use App\Models\Emocional;
use App\Models\Exercicio_fisico;
use App\Models\Hidratacao;
use App\Models\Integridade_cutanea;
use App\Models\Integridade_direito;
use App\Models\Integridade_esquerdo;
use App\Models\Limpeza_lesao;
use App\Models\Locomocao;
use App\Models\Motivo;
use App\Models\Nss_biologicas;
use App\Models\Nss_espirituais;
use App\Models\Nss_sociais;
use App\Models\Nutricao;
use App\Models\Origem;
use App\Models\Oxigenacao;
use App\Models\Percepcao_sentido;
use App\Models\Problema_sono;
use App\Models\Prontuario;
use App\Models\Recreacao;
use App\Models\Refeicao;
use App\Models\Regulacao_hormonal;
use App\Models\Regulacao_neuro;
use App\Models\Regulacao_termica;
use App\Models\Regulacao_vascular;
use App\Models\Restricao_alimento;
use App\Models\Senso_percepcao;
use App\Models\Sexualidade;
use App\Models\Sinais_infeccao;
use App\Models\Sintomas_percepcao;
use App\Models\Sono;
use App\Models\Tipo_locomocao;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class ShowQuestionario extends Component
{
    public $currentStep = 1;

    public $questionario;


    public $nss_sociais, $nss_biologicas, $nss_espirituais, $selectedPaciente, $IdselectedPaciente , $enfermeiro, $impressoes, $imagem_avaliacao_pe;



    //Etapa 2 - Necessidades Biológicas
    public $regulacao_neuro, $orientado, $comportamento_regulacao_neuro_id;
    public $percepcao_sentido, $olho_direito, $olho_esquerdo, $ouvido, $analise_tato_id, $risco_queda;
    public $hidratacao, $liquido_diario, $tipo_pele_id;
    public $nutricao, $alimento_consumo_id, $refeicaos = [], $refeicaosList = [], $restricaos = [], $restricaosList = [];
    public $sono, $horas_sono, $acorda_noite, $qualidade_sono_id, $problema_sonos = [], $problemaSonoList = [], $medicamentos_sono;
    public $exercicio_fisico, $realiza, $frequencia_exercicio_id, $duracao;
    public $abrigo, $zona_moradia_id, $luz_publica, $coleta_lixo, $agua_tratada, $rede_esgoto_id, $animais_domesticos;
    public $regulacao_hormonal, $altura, $peso, $imc, $classificacao, $circunferencia_abdnominal, $glicemia_capilar, $jejum, $pos_prandial;
    public $oxigenacao, $temp_enchimento_capilar, $frequencia_respiratoria, $satO2;
    public $regulacao_termica, $temperatura, $classificacaoTemperatura;
    public $eliminacao, $dor_urinar, $incontinencia_urina, $uso_laxante, $uso_fraldas, $dor_eliminacoes, $incontinencia_eliminacao, $constipacao, $diarreia, $equipamento_externo;
    public $sexualidade, $vida_sex_ativa, $disturbio_sexuals = [], $disturbiosSexualList = [];
    public $locomocao, $tipo_locomocaos = [], $tiposLocomocaoList = [], $sapato_adequado, $sandalia_cicatrizacao;
    public $regulacao_vascular, $pressao_arterial, $frequencia_cardiaca, $psatp_direito, $psap_direito, $psab_direito, $psatp_esquerdo, $psap_esquerdo, $psab_esquerdo;
    public $senso_percepcao, $sintomas_percepcaos = [], $sintomasPercepcaoList = [], $pe_neuropatico, $arco_desabado, $valgismo, $dedos_em_garra, $estado_unhas_id;
    public $corte_unhas, $fissuras, $calosidades, $micose, $teste_senso_percepcao_id = null, $percepcao_direito, $percepcao_esquerdo;
    public $edema, $comprimentoD, $comprimentoE, $larguraD, $larguraE, $lesao_amputacaoD, $lesao_amputacaoE, $odor_exudato, $dor, $bordas_ferida_id, $pele_periferida_id, $profundidade_id, $tipo_tecido_ferida_id, $aspecto_exudato_id, $quantidade_exudato_id;
    public $integridade_cutanea, $integridade_direito, $integridade_esquerdo, $regiao_pe_direito_id, $localizacao_lesao_direito_id, $regiao_pe_esquerdo_id, $localizacao_lesao_esquerdo_id;
    public $desbridamento_id, $avaliacao_ferida_id, $aplicacao_laserterapia, $terapia_fotodinamica;
    public $cuidado_ferida, $coberturas = [], $coberturasList = [], $limpeza_lesaos = [], $limpezaLesaosList = [], $sinais_infeccaos = [], $sinaisInfeccaoList = [];
    public $regiao_pe_id;

    //Etapa 3 - Necessidades Sociais
    public $aprendizagem, $monitoramento_glicemia_dia, $cuidado_pes, $uso_sapato, $alimentacao, $regime_terapeutico;
    public $recreacaos = [], $recreacaosList = [];
    public $cuidado, $acompanhado, $opnioes_de_si, $auxiliador, $emocionals = [], $emocionalsList = [];
    public $comunicacao, $apoio, $interacao_social;


    //Etapa 4 - Necessidades Espirituais e Finalização
    public $religiao, $e_religioso;
    public $unidade_saude_id = null, $unidade;

    public $successMessage = '';
    public $IdQuestionario;

    public function mount($id)
    {
        $this->loadQuestionarioData($id);
    }

    public function loadQuestionarioData($questionarioId)
    {
        $this->questionario = Questionario::findOrFail($questionarioId);
        $this->IdQuestionario = $this->questionario->id;
        $this->nss_biologicas = $this->questionario->nss_biologica;
        $this->nss_espirituais = $this->questionario->nss_espiritual;
        $this->nss_sociais = $this->questionario->nss_sociais;
        $this->selectedPaciente = $this->questionario->paciente;
        $this->IdselectedPaciente = $this->selectedPaciente->id;
        $this->enfermeiro = $this->questionario->user;
        $this->impressoes = $this->questionario->impressoes;
        $this->unidade_saude_id = $this->questionario->unidade_saude_id;
        $this->unidade = Unidade_saude::Find($this->unidade_saude_id);
        $this->imagem_avaliacao_pe = $this->questionario->imagem_avaliacao_pe_url;


        $this->orientado = $this->questionario->nss_biologica->regulacao_neuro->orientado;
        $this->comportamento_regulacao_neuro_id = $this->questionario->nss_biologica->regulacao_neuro->comportamento_regulacao_neuro_id;

        $this->olho_direito = $this->questionario->nss_biologica->percepcao_sentidos->olho_direito;
        $this->olho_esquerdo = $this->questionario->nss_biologica->percepcao_sentidos->olho_esquerdo;
        $this->ouvido = $this->questionario->nss_biologica->percepcao_sentidos->ouvido;
        $this->analise_tato_id = $this->questionario->nss_biologica->percepcao_sentidos->analise_tato_id;
        $this->risco_queda = $this->questionario->nss_biologica->percepcao_sentidos->risco_queda;

        $this->liquido_diario = $this->questionario->nss_biologica->hidratacao->liquido_diario;
        $this->tipo_pele_id = $this->questionario->nss_biologica->hidratacao->tipo_pele_id;

        $this->alimento_consumo_id = $this->questionario->nss_biologica->nutricao->alimento_consumo_id;

        $this->horas_sono = $this->questionario->nss_biologica->sono->horas_sono;
        $this->acorda_noite = $this->questionario->nss_biologica->sono->acorda_noite;
        $this->qualidade_sono_id = $this->questionario->nss_biologica->sono->qualidade_sono_id;
        $this->medicamentos_sono = $this->questionario->nss_biologica->sono->medicamentos_sono;

        $this->realiza = $this->questionario->nss_biologica->exercicio_fisico->realiza;
        $this->frequencia_exercicio_id = $this->questionario->nss_biologica->exercicio_fisico->frequencia_exercicio_id;
        $this->duracao = $this->questionario->nss_biologica->exercicio_fisico->duracao;

        $this->zona_moradia_id = $this->questionario->nss_biologica->abrigo->zona_moradia_id;
        $this->luz_publica = $this->questionario->nss_biologica->abrigo->luz_publica;
        $this->coleta_lixo = $this->questionario->nss_biologica->abrigo->coleta_lixo;
        $this->agua_tratada = $this->questionario->nss_biologica->abrigo->agua_tratada;
        $this->rede_esgoto_id = $this->questionario->nss_biologica->abrigo->rede_esgoto_id;
        $this->animais_domesticos = $this->questionario->nss_biologica->abrigo->animais_domesticos;

        $this->altura = $this->questionario->nss_biologica->regulacao_hormonal->altura;
        $this->peso = $this->questionario->nss_biologica->regulacao_hormonal->peso;
        $this->circunferencia_abdnominal = $this->questionario->nss_biologica->regulacao_hormonal->circunferencia_abdnominal;
        $this->glicemia_capilar = $this->questionario->nss_biologica->regulacao_hormonal->glicemia_capilar;
        $this->jejum = $this->questionario->nss_biologica->regulacao_hormonal->jejum;
        $this->pos_prandial = $this->questionario->nss_biologica->regulacao_hormonal->pos_prandial;

        $this->temp_enchimento_capilar = $this->questionario->nss_biologica->oxigenacao->temp_enchimento_capilar;
        $this->frequencia_respiratoria = $this->questionario->nss_biologica->oxigenacao->frequencia_respiratoria;
        $this->satO2 = $this->questionario->nss_biologica->oxigenacao->satO2;

        $this->temperatura = $this->questionario->nss_biologica->regulacao_termica->temperatura;

        $this->dor_urinar = $this->questionario->nss_biologica->eliminacao->dor_urinar;
        $this->incontinencia_urina = $this->questionario->nss_biologica->eliminacao->incontinencia_urina;
        $this->uso_laxante = $this->questionario->nss_biologica->eliminacao->uso_laxante;
        $this->uso_fraldas = $this->questionario->nss_biologica->eliminacao->uso_fraldas;
        $this->dor_eliminacoes = $this->questionario->nss_biologica->eliminacao->dor_eliminacoes;
        $this->incontinencia_eliminacao = $this->questionario->nss_biologica->eliminacao->incontinencia_eliminacao;
        $this->diarreia = $this->questionario->nss_biologica->eliminacao->diarreia;
        $this->constipacao = $this->questionario->nss_biologica->eliminacao->constipacao;
        $this->equipamento_externo = $this->questionario->nss_biologica->eliminacao->equipamento_externo;

        $this->vida_sex_ativa = $this->questionario->nss_biologica->sexualidade->vida_sex_ativa;

        $this->sapato_adequado = $this->questionario->nss_biologica->locomocao->sapato_adequado;
        $this->sandalia_cicatrizacao = $this->questionario->nss_biologica->locomocao->sandalia_cicatrizacao;

        $this->pressao_arterial = $this->questionario->nss_biologica->regulacao_vascular->pressao_arterial;
        $this->frequencia_cardiaca = $this->questionario->nss_biologica->regulacao_vascular->frequencia_cardiaca;
        $this->psatp_direito = $this->questionario->nss_biologica->regulacao_vascular->psatp_direito;
        $this->psap_direito = $this->questionario->nss_biologica->regulacao_vascular->psap_direito;
        $this->psab_direito = $this->questionario->nss_biologica->regulacao_vascular->psab_direito;
        $this->psatp_esquerdo = $this->questionario->nss_biologica->regulacao_vascular->psatp_esquerdo;
        $this->psap_esquerdo = $this->questionario->nss_biologica->regulacao_vascular->psap_esquerdo;
        $this->psab_esquerdo = $this->questionario->nss_biologica->regulacao_vascular->psab_esquerdo;

        $this->pe_neuropatico = $this->questionario->nss_biologica->senso_percepcao->pe_neuropatico;
        $this->arco_desabado = $this->questionario->nss_biologica->senso_percepcao->arco_desabado;
        $this->valgismo = $this->questionario->nss_biologica->senso_percepcao->valgismo;
        $this->dedos_em_garra = $this->questionario->nss_biologica->senso_percepcao->dedos_em_garra;
        $this->estado_unhas_id = $this->questionario->nss_biologica->senso_percepcao->estado_unhas_id;
        $this->corte_unhas = $this->questionario->nss_biologica->senso_percepcao->corte_unhas;
        $this->fissuras = $this->questionario->nss_biologica->senso_percepcao->fissuras;
        $this->calosidades = $this->questionario->nss_biologica->senso_percepcao->calosidades;
        $this->micose = $this->questionario->nss_biologica->senso_percepcao->micose;
        $this->teste_senso_percepcao_id = $this->questionario->nss_biologica->senso_percepcao->teste_senso_percepcao_id;
        $this->percepcao_direito = $this->questionario->nss_biologica->senso_percepcao->percepcao_direito;
        $this->percepcao_esquerdo = $this->questionario->nss_biologica->senso_percepcao->percepcao_esquerdo;

        $this->comprimentoD = $this->questionario->nss_biologica->integridade_cutanea->integridade_direito->comprimento;
        $this->larguraD = $this->questionario->nss_biologica->integridade_cutanea->integridade_direito->largura;
        $this->regiao_pe_direito_id = $this->questionario->nss_biologica->integridade_cutanea->integridade_direito->regiao_pe_id;
        $this->localizacao_lesao_direito_id = $this->questionario->nss_biologica->integridade_cutanea->integridade_direito->localizacao_lesao_id;
        $this->lesao_amputacaoD = $this->questionario->nss_biologica->integridade_cutanea->integridade_direito->lesao_amputacao;

        $this->comprimentoE = $this->questionario->nss_biologica->integridade_cutanea->integridade_esquerdo->comprimento;
        $this->larguraE = $this->questionario->nss_biologica->integridade_cutanea->integridade_esquerdo->largura;
        $this->regiao_pe_esquerdo_id = $this->questionario->nss_biologica->integridade_cutanea->integridade_esquerdo->regiao_pe_id;
        $this->localizacao_lesao_esquerdo_id = $this->questionario->nss_biologica->integridade_cutanea->integridade_esquerdo->localizacao_lesao_id;
        $this->lesao_amputacaoE = $this->questionario->nss_biologica->integridade_cutanea->integridade_esquerdo->lesao_amputacao;

        $this->bordas_ferida_id = $this->questionario->nss_biologica->integridade_cutanea->bordas_ferida_id;
        $this->edema = $this->questionario->nss_biologica->integridade_cutanea->edema;
        $this->quantidade_exudato_id = $this->questionario->nss_biologica->integridade_cutanea->quantidade_exudato_id;
        $this->odor_exudato = $this->questionario->nss_biologica->integridade_cutanea->odor_exudato;
        $this->aspecto_exudato_id = $this->questionario->nss_biologica->integridade_cutanea->aspecto_exudato_id;
        $this->tipo_tecido_ferida_id = $this->questionario->nss_biologica->integridade_cutanea->tipo_tecido_ferida_id;
        $this->profundidade_id = $this->questionario->nss_biologica->integridade_cutanea->profundidade_id;
        $this->pele_periferida_id = $this->questionario->nss_biologica->integridade_cutanea->pele_periferida_id;
        $this->dor = $this->questionario->nss_biologica->integridade_cutanea->dor;

        $this->desbridamento_id = $this->questionario->nss_biologica->cuidado_ferida->desbridamento_id;
        $this->avaliacao_ferida_id = $this->questionario->nss_biologica->cuidado_ferida->avaliacao_ferida_id;
        $this->aplicacao_laserterapia = $this->questionario->nss_biologica->cuidado_ferida->aplicacao_laserterapia;
        $this->terapia_fotodinamica = $this->questionario->nss_biologica->cuidado_ferida->terapia_fotodinamica;

        $this->apoio = $this->questionario->nss_sociais->comunicacao->apoio;
        $this->interacao_social = $this->questionario->nss_sociais->comunicacao->interacao_social;

        $this->acompanhado = $this->questionario->nss_sociais->cuidado->acompanhado;
        $this->opnioes_de_si = $this->questionario->nss_sociais->cuidado->opnioes_de_si;
        $this->auxiliador = $this->questionario->nss_sociais->cuidado->auxiliador;

        $this->monitoramento_glicemia_dia = $this->questionario->nss_sociais->aprendizagem->monitoramento_glicemia_dia;
        $this->cuidado_pes = $this->questionario->nss_sociais->aprendizagem->cuidado_pes;
        $this->uso_sapato = $this->questionario->nss_sociais->aprendizagem->uso_sapato;
        $this->alimentacao = $this->questionario->nss_sociais->aprendizagem->alimentacao;
        $this->regime_terapeutico = $this->questionario->nss_sociais->aprendizagem->regime_terapeutico;

        $this->religiao = $this->questionario->nss_espiritual->religiao;
    }


    public function render()
    {

        return view('livewire.questionarios.show-questionario', [
            'recreacaosList' => $this->recreacaosList,
            'emocionalsList' => $this->emocionalsList,
            'refeicaosList' => $this->refeicaosList,
            'restricaosList' => $this->restricaosList,
            'problemaSonoList' => $this->problemaSonoList,
            'disturbiosSexualList' => $this->disturbiosSexualList,
            'tiposLocomocaoList' => $this->tiposLocomocaoList,
            'sintomasPercepcaoList' => $this->sintomasPercepcaoList,
            'limpezaLesaosList' => $this->limpezaLesaosList,
            'coberturasList' => $this->coberturasList,
            'sinaisInfeccaoList' => $this->sinaisInfeccaoList,
            'comportamentosNeuro' => \App\Models\Comportamento_regulacao_neuro::all(),
            'analiseTatos' => \App\Models\Analise_tato::all(),
            'tipoPeles' => \App\Models\Tipo_pele::all(),
            'alimentoConsumos' => \App\Models\Alimento_consumo::all(),
            'qualidadeSonos' => \App\Models\Qualidade_sono::all(),
            'frequenciasExercicio' => \App\Models\Frequencia_exercicio::all(),
            'zonasMoradia' => \App\Models\Zona_moradia::all(),
            'redesEsgoto' => \App\Models\Rede_esgoto::all(),
            'estadoUnhas' => \App\Models\Estado_unhas::all(),
            'desbridamentos' => \App\Models\Desbridamento::all(),
            'avaliacaoFeridas' => \App\Models\Avaliacao_ferida::all(),
            'localizacaoLesao' => \App\Models\Localizacao_lesao::all(),
            'regiaoPe' => \App\Models\Regiao_pe::all(),
            'aspectosExudato' => \App\Models\Aspecto_exudato::all(),
            'quantidadesExudato' => \App\Models\Quantidade_exudato::all(),
            'profundidades' => \App\Models\Profundidade::all(),
            'pelesPeriferida' => \App\Models\Pele_periferida::all(),
            'tiposTecido' => \App\Models\Tipo_tecido_ferida::all(),
            'bordasFerida' => \App\Models\Bordas_ferida::all(),
            'unidadesSaude' => \App\Models\Unidade_saude::all(),
        ])->layout('layouts.app');;
    }

    public function validateStep()
    {
        if ($this->currentStep == 2) {
            $this->validate([
                'orientado' => 'required|boolean',
                'comportamento_regulacao_neuro_id' => 'required|exists:comportamento_regulacao_neuros,id',

                'olho_direito' => 'required|boolean',
                'olho_esquerdo' => 'required|boolean',
                'ouvido' => 'required|boolean',
                'analise_tato_id' => 'required|exists:analise_tatos,id',
                'risco_queda' => 'required|boolean',

                'liquido_diario' => 'required|numeric|min:0',
                'tipo_pele_id' => 'required|exists:tipo_peles,id',

                'alimento_consumo_id' => 'required|exists:alimento_consumos,id',
                'refeicaos' => 'nullable|array',
                'restricaos' => 'nullable|array',

                'horas_sono' => 'required|numeric|min:0',
                'acorda_noite' => 'required|boolean',
                'qualidade_sono_id' => 'required|exists:qualidade_sonos,id',
                'problema_sonos' => 'nullable|array',
                'medicamentos_sono' => 'required|string|max:255',

                'realiza' => 'required|boolean',
                'frequencia_exercicio_id' => 'required|exists:frequencia_exercicios,id',
                'duracao' => 'required|numeric|min:0',

                'zona_moradia_id' => 'required|exists:zona_moradias,id',
                'luz_publica' => 'required|boolean',
                'coleta_lixo' => 'required|boolean',
                'agua_tratada' => 'required|boolean',
                'rede_esgoto_id' => 'required|exists:rede_esgotos,id',
                'animais_domesticos' => 'required|boolean',

                'altura' => 'required|numeric|min:0',
                'peso' => 'required|numeric|min:0',
                'circunferencia_abdnominal' => 'required|numeric|min:0',
                'glicemia_capilar' => 'required|numeric|min:0',
                'jejum' => 'required|boolean',
                'pos_prandial' => 'required|boolean',

                'temp_enchimento_capilar' => 'required|numeric|min:0',
                'frequencia_respiratoria' => 'required|numeric|min:0',
                'satO2' => 'required|numeric|min:0',

                'temperatura' => 'required|numeric|min:0',

                'dor_urinar' => 'required|boolean',
                'incontinencia_urina' => 'required|boolean',
                'uso_laxante' => 'required|boolean',
                'uso_fraldas' => 'required|boolean',
                'dor_eliminacoes' => 'required|boolean',
                'incontinencia_eliminacao' => 'required|boolean',
                'constipacao' => 'required|boolean',
                'diarreia' => 'required|boolean',
                'equipamento_externo' => 'required|string|max:255',

                'vida_sex_ativa' => 'required|boolean',
                'disturbio_sexuals' => 'nullable|array',

                'tipo_locomocaos' => 'nullable|array',
                'sapato_adequado' => 'required|boolean',
                'sandalia_cicatrizacao' => 'required|boolean',

                'pressao_arterial' => 'required|numeric|min:0',
                'frequencia_cardiaca' => 'required|numeric|min:0',
                'psatp_direito' => 'required|numeric|min:0',
                'psap_direito' => 'required|numeric|min:0',
                'psab_direito' => 'required|numeric|min:0',
                'psatp_esquerdo' => 'required|numeric|min:0',
                'psap_esquerdo' => 'required|numeric|min:0',
                'psab_esquerdo' => 'required|numeric|min:0',

                'sintomas_percepcaos' => 'nullable|array',
                'pe_neuropatico' => 'required|boolean',
                'arco_desabado' => 'required|boolean',
                'valgismo' => 'required|boolean',
                'dedos_em_garra' => 'required|boolean',
                'estado_unhas_id' => 'required|exists:estado_unhas,id',
                'corte_unhas' => 'required|boolean',
                'fissuras' => 'required|boolean',
                'calosidades' => 'required|boolean',
                'micose' => 'required|boolean',
                'percepcao_direito' => 'required|boolean',
                'percepcao_esquerdo' => 'required|boolean',

                'sinais_infeccaos' => 'nullable|array',
                'comprimentoD' => 'required|numeric|min:0',
                'larguraD' => 'required|numeric|min:0',
                'regiao_pe_direito_id' => 'required|exists:regiao_pes,id',
                'localizacao_lesao_direito_id' => 'required|exists:localizacao_lesaos,id',
                'lesao_amputacaoD' => 'required|boolean',
                'comprimentoE' => 'required|numeric|min:0',
                'larguraE' => 'required|numeric|min:0',
                'regiao_pe_esquerdo_id' => 'required|exists:regiao_pes,id',
                'localizacao_lesao_esquerdo_id' => 'required|exists:localizacao_lesaos,id',
                'lesao_amputacaoE' => 'required|boolean',
                'bordas_ferida_id' => 'required|exists:bordas_feridas,id',
                'pele_periferida_id' => 'required|exists:pele_periferidas,id',
                'profundidade_id' => 'required|exists:profundidades,id',
                'tipo_tecido_ferida_id' => 'required|exists:tipo_tecido_feridas,id',
                'aspecto_exudato_id' => 'required|exists:aspecto_exudatos,id',
                'quantidade_exudato_id' => 'required|exists:quantidades_exudatos,id',
                'edema' => 'required|boolean',
                'odor_exudato' => 'required|boolean',
                'dor' => 'required|boolean',

                'limpeza_lesaos' => 'nullable|array',
                'coberturas' => 'nullable|array',
                'desbridamento_id' => 'required|exists:desbridamentos,id',
                'avaliacao_ferida_id' => 'required|exists:avaliacao_feridas,id',
                'aplicacao_laserterapia' => 'required|boolean',
                'terapia_fotodinamica' => 'required|boolean',
                'imagem_avaliacao_pe' => 'image|max:2048',
            ]);
        } else if ($this->currentStep == 3) {
            $this->validate([
                'monitoramento_glicemia_dia' => 'required|integer|min:0',
                'cuidado_pes' => 'required|boolean',
                'uso_sapato' => 'required|boolean',
                'alimentacao' => 'required|boolean',
                'regime_terapeutico' => 'required|boolean',

                'recreacaos' => 'nullable|array',

                'acompanhado' => 'required|boolean',
                'opnioes_de_si' => 'required|boolean',
                'auxiliador' => 'required|string|max:255',
                'emocionals' => 'nullable|array',

                'apoio' => 'required|boolean',
                'interacao_social' => 'required|boolean',
            ]);
        } else if ($this->currentStep == 4) {
            $this->validate([
                'religiao' => 'required|string|max:255',

                'idUnidadeSelected' => 'required|exists:unidade_saudes,id',

                'impressoes' => 'required|string',
            ]);
        }
    }


    public function nextStepFirst()
    {
        // $this->validateStep();
        $this->currentStep = 1;
    }
    public function nextStepSecond()
    {
        // $this->validateStep();
        $this->currentStep = 2;
    }
    public function nextStepThird()
    {
        // $this->validateStep();
        $this->currentStep = 3;
    }
    public function nextStepFourth()
    {
        // $this->validateStep();
        $this->currentStep = 4;
    }

    public function nextStepFifth()
    {
        // $this->validateStep();
        $this->currentStep = 5;
    }

    public function backToSearch()
    {
        return redirect()->route('questionario.index');
    }

    public function updateQuestionario($QuestionarioId)
    {
        //$this->validateStep();
        $questionario = Questionario::find($QuestionarioId);

        $regulacao_neuro = Regulacao_neuro::updateOrCreate(
            ['id' => $questionario->nss_biologicas->regulacao_neuro_id ?? null], // Busca pelo ID existente ou cria um novo
            [
                'orientado' => $this->orientado,
                'comportamento_regulacao_neuro_id' => $this->comportamento_regulacao_neuro_id,
            ]
        );

        $percepcao_sentido = Percepcao_sentido::updateOrCreate(
            ['id' => $questionario->nss_biologicas->percepcao_sentido_id ?? null],
            [
                'olho_direito' => $this->olho_direito,
                'olho_esquerdo' => $this->olho_esquerdo,
                'ouvido' => $this->ouvido,
                'analise_tato_id' => $this->analise_tato_id,
                'risco_queda' => $this->risco_queda,
            ]
        );

        $hidratacao = Hidratacao::updateOrCreate(
            ['id' => $questionario->nss_biologicas->hidratacao_id ?? null],
            [
                'liquido_diario' => $this->liquido_diario,
                'tipo_pele_id' => $this->tipo_pele_id,
            ]
        );

        $nutricao = Nutricao::updateOrCreate(
            ['id' => $questionario->nss_biologicas->nutricao_id ?? null],
            [
                'alimento_consumo_id' => $this->alimento_consumo_id,
            ]
        );

        $sono = Sono::updateOrCreate(
            ['id' => $questionario->nss_biologicas->sono_id ?? null],
            [
                'horas_sono' => $this->horas_sono,
                'acorda_noite' => $this->acorda_noite,
                'qualidade_sono_id' => $this->qualidade_sono_id,
                'medicamentos_sono' => $this->medicamentos_sono,
            ]
        );

        $exercicio_fisico = Exercicio_fisico::updateOrCreate(
            ['id' => $questionario->nss_biologicas->exercicio_fisico_id ?? null],
            [
                'realiza' => $this->realiza,
                'frequencia_exercicio_id' => $this->frequencia_exercicio_id,
                'duracao' => $this->duracao,
            ]
        );


        $abrigo = Abrigo::updateOrCreate(
            ['id' => $questionario->nss_biologicas->abrigo_id ?? null],
            [
                'zona_moradia_id' => $this->zona_moradia_id,
                'luz_publica' => $this->luz_publica,
                'coleta_lixo' => $this->coleta_lixo,
                'agua_tratada' => $this->agua_tratada,
                'rede_esgoto_id' => $this->rede_esgoto_id,
                'animais_domesticos' => $this->animais_domesticos,
            ]
        );

        $regulacao_hormonal = Regulacao_hormonal::updateOrCreate(
            ['id' => $questionario->nss_biologicas->regulacao_hormonal_id ?? null],
            [
                'altura' => $this->altura,
                'peso' => $this->peso,
                'circunferencia_abdnominal' => $this->circunferencia_abdnominal,
                'glicemia_capilar' => $this->glicemia_capilar,
                'jejum' => $this->jejum,
                'pos_prandial' => $this->pos_prandial,
            ]
        );

        $oxigenacao = Oxigenacao::updateOrCreate(
            ['id' => $questionario->nss_biologicas->oxigenacao_id ?? null],
            [
                'temp_enchimento_capilar' => $this->temp_enchimento_capilar,
                'frequencia_respiratoria' => $this->frequencia_respiratoria,
                'satO2' => $this->satO2,
            ]
        );

        $regulacao_termica = Regulacao_termica::updateOrCreate(
            ['id' => $questionario->nss_biologicas->regulacao_termica_id ?? null],
            [
                'temperatura' => $this->temperatura,
            ]
        );

        $eliminacao = Eliminacao::updateOrCreate(
            ['id' => $questionario->nss_biologicas->eliminacao_id ?? null],
            [
                'dor_urinar' => $this->dor_urinar,
                'incontinencia_urina' => $this->incontinencia_urina,
                'uso_laxante' => $this->uso_laxante,
                'uso_fraldas' => $this->uso_fraldas,
                'dor_eliminacoes' => $this->dor_eliminacoes,
                'incontinencia_eliminacao' => $this->incontinencia_eliminacao,
                'diarreia' => $this->diarreia,
                'constipacao' => $this->constipacao,
                'equipamento_externo' => $this->equipamento_externo,
            ]
        );

        $sexualidade = Sexualidade::updateOrCreate(
            ['id' => $questionario->nss_biologicas->sexualidade_id ?? null],
            [
                'vida_sex_ativa' => $this->vida_sex_ativa,
            ]
        );

        $locomocao = Locomocao::updateOrCreate(
            ['id' => $questionario->nss_biologicas->locomocao_id ?? null],
            [
                'sapato_adequado' => $this->sapato_adequado,
                'sandalia_cicatrizacao' => $this->sandalia_cicatrizacao,
            ]
        );

        $regulacao_vascular = Regulacao_vascular::updateOrCreate(
            ['id' => $questionario->nss_biologicas->regulacao_vascular_id ?? null],
            [
                'pressao_arterial' => $this->pressao_arterial,
                'frequencia_cardiaca' => $this->frequencia_cardiaca,
                'psatp_direito' => $this->psatp_direito,
                'psap_direito' => $this->psap_direito,
                'psab_direito' => $this->psab_direito,
                'psatp_esquerdo' => $this->psatp_esquerdo,
                'psap_esquerdo' => $this->psap_esquerdo,
                'psab_esquerdo' => $this->psab_esquerdo,
            ]
        );

        $senso_percepcao = Senso_percepcao::updateOrCreate(
            ['id' => $questionario->nss_biologicas->senso_percepcao_id ?? null],
            [
                'pe_neuropatico' => $this->pe_neuropatico,
                'arco_desabado' => $this->arco_desabado,
                'valgismo' => $this->valgismo,
                'dedos_em_garra' => $this->dedos_em_garra,
                'estado_unhas_id' => $this->estado_unhas_id,
                'corte_unhas' => $this->corte_unhas,
                'fissuras' => $this->fissuras,
                'calosidades' => $this->calosidades,
                'micose' => $this->micose,
                'teste_senso_percepcao_id' => $this->teste_senso_percepcao_id,
                'percepcao_direito' => $this->percepcao_direito,
                'percepcao_esquerdo' => $this->percepcao_esquerdo,
            ]
        );

        $integridade_direito = Integridade_direito::updateOrCreate(
            ['id' => $questionario->nss_biologicas->integridade_direito_id ?? null],
            [
                'comprimento' => $this->comprimentoD,
                'largura' => $this->larguraD,
                'regiao_pe_id' => $this->regiao_pe_direito_id,
                'localizacao_lesao_id' => $this->localizacao_lesao_direito_id,
                'lesao_amputacao' => $this->lesao_amputacaoD,
            ]
        );

        $integridade_esquerdo = Integridade_esquerdo::updateOrCreate(
            ['id' => $questionario->nss_biologicas->integridade_esquerdo_id ?? null],
            [
                'comprimento' => $this->comprimentoE,
                'largura' => $this->larguraE,
                'regiao_pe_id' => $this->regiao_pe_esquerdo_id,
                'localizacao_lesao_id' => $this->localizacao_lesao_esquerdo_id,
                'lesao_amputacao' => $this->lesao_amputacaoE,
            ]
        );

        $integridade_cutanea = Integridade_cutanea::updateOrCreate(
            ['id' => $questionario->nss_biologicas->integridade_cutanea_id ?? null],
            [
                'integridade_direito_id' => $integridade_direito->id,
                'integridade_esquerdo_id' => $integridade_esquerdo->id,
                'bordas_ferida_id' => $this->bordas_ferida_id,
                'edema' => $this->edema,
                'quantidade_exudato_id' => $this->quantidade_exudato_id,
                'odor_exudato' => $this->odor_exudato,
                'aspecto_exudato_id' => $this->aspecto_exudato_id,
                'tipo_tecido_ferida_id' => $this->tipo_tecido_ferida_id,
                'profundidade_id' => $this->profundidade_id,
                'pele_periferida_id' => $this->pele_periferida_id,
                'dor' => $this->dor,
            ]
        );
        $cuidado_ferida = Cuidado_ferida::updateOrCreate(
            ['id' => $questionario->nss_biologicas->cuidado_ferida_id ?? null],
            [
                'desbridamento_id' => $this->desbridamento_id,
                'avaliacao_ferida_id' => $this->avaliacao_ferida_id,
                'aplicacao_laserterapia' => $this->aplicacao_laserterapia,
                'terapia_fotodinamica' => $this->terapia_fotodinamica,
            ]
        );

        $comunicacao = Comunicacao::updateOrCreate(
            ['id' => $questionario->nss_sociais->comunicacao_id ?? null],
            [
                'apoio' => $this->apoio,
                'interacao_social' => $this->interacao_social,
            ]
        );

        $cuidado = Cuidado::updateOrCreate(
            ['id' => $questionario->nss_sociais->cuidado_id ?? null],
            [
                'acompanhado' => $this->acompanhado,
                'opnioes_de_si' => $this->opnioes_de_si,
                'auxiliador' => $this->auxiliador,
            ]
        );

        $aprendizagem = Aprendizagem::updateOrCreate(
            ['id' => $questionario->nss_sociais->aprendizagem_id ?? null],
            [
                'monitoramento_glicemia_dia' => $this->monitoramento_glicemia_dia,
                'cuidado_pes' => $this->cuidado_pes,
                'uso_sapato' => $this->uso_sapato,
                'alimentacao' => $this->alimentacao,
                'regime_terapeutico' => $this->regime_terapeutico,
            ]
        );

        $nss_biologicas = Nss_biologicas::updateOrCreate(
            ['id' => $questionario->nss_biologicas_id ?? null],
            [
                'regulacao_neuro_id' => $regulacao_neuro->id,
                'percepcao_sentido_id' => $percepcao_sentido->id,
                'hidratacao_id' => $hidratacao->id,
                'nutricao_id' => $nutricao->id,
                'sono_id' => $sono->id,
                'exercicio_fisico_id' => $exercicio_fisico->id,
                'abrigo_id' => $abrigo->id,
                'regulacao_hormonal_id' => $regulacao_hormonal->id,
                'oxigenacao_id' => $oxigenacao->id,
                'regulacao_termica_id' => $regulacao_termica->id,
                'eliminacao_id' => $eliminacao->id,
                'sexualidade_id' => $sexualidade->id,
                'locomocao_id' => $locomocao->id,
                'regulacao_vascular_id' => $regulacao_vascular->id,
                'senso_percepcao_id' => $senso_percepcao->id,
                'integridade_cutanea_id' => $integridade_cutanea->id,
                'cuidado_ferida_id' => $cuidado_ferida->id,
            ]
        );

        $nss_sociais = Nss_sociais::updateOrCreate(
            ['id' => $questionario->nss_sociais_id ?? null],
            [
                'aprendizagem_id' => $aprendizagem->id,
                'cuidado_id' => $cuidado->id,
                'comunicacao_id' => $comunicacao->id,
            ]
        );

        $nss_espirituais = Nss_espirituais::updateOrCreate(
            ['id' => $questionario->nss_espirituais_id ?? null],
            [
                'religiao' => $this->religiao,
            ]
        );

        // Salva a imagem de avaliação do pé
        if ($this->imagem_avaliacao_pe) {
            $path = $this->imagem_avaliacao_pe->store('avaliacao_pe', 'public');
        } else {
            $path = null; // Define um valor padrão caso a imagem não seja enviada
        }

        // Atualização ou criação do questionário
        $questionario = Questionario::updateOrCreate(
            ['id' => $questionario->id ?? null],
            [
                'paciente_id' => $this->IdselectedPaciente,
                'user_id' => Auth::id(),
                'nss_biologicas_id' => $nss_biologicas->id,
                'nss_sociais_id' => $nss_sociais->id,
                'nss_espirituais_id' => $nss_espirituais->id,
                'unidade_saude_id' => $this->unidade_saude_id,
                'impressoes' => $this->impressoes,
                'imagem_avaliacao_pe_url' => $path,
            ]
        );


        // Associações para NSS Sociais - Recreação
        $nss_sociais->recreacoes()->sync($this->recreacaos);

        // Associações para Cuidado - Emoções
        $cuidado->emocionais()->sync($this->emocionals);

        // Associações para Nutrição
        $nutricao->refeicoes()->sync($this->refeicaos);
        $nutricao->restricoes_alimentar()->sync($this->restricaos);

        // Associações para Sono - Problemas de Sono
        $sono->problemas_sono()->sync($this->problema_sonos);

        // Associações para Sexualidade - Distúrbios Sexuais
        $sexualidade->disturbios_sexual()->sync($this->disturbio_sexuals);

        // Associações para Locomoção - Tipos de Locomoção
        $locomocao->tipos_locomocao()->sync($this->tipo_locomocaos);

        // Associações para Senso Percepção - Sintomas de Percepção
        $senso_percepcao->sintomas_percepcao()->sync($this->sintomas_percepcaos);

        // Associações para Cuidado de Feridas
        $cuidado_ferida->limpezas_lesao()->sync($this->limpeza_lesaos);
        $cuidado_ferida->coberturas_ferida()->sync($this->coberturas);

        // Associações para Integridade Cutânea - Sinais de Infecção
        $integridade_cutanea->sinais_infeccao()->sync($this->sinais_infeccaos);



        session()->flash('message', 'Questionário atualizado com sucesso!');
    }
}
