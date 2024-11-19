<?php

namespace App\Livewire\Questionarios;

use App\Models\Questionario;
use Livewire\Component;
use Livewire\Attributes\On;

class ShowQuestionario extends Component
{
    public $currentStep = 1;

    public $questionario;


    public $nss_sociais, $nss_biologicas, $nss_espirituais;


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
    public $imagem_avaliacao_pe;
    //Etapa 3 - Necessidades Sociais
    public $aprendizagem, $monitoramento_glicemia_dia, $cuidado_pes, $uso_sapato, $alimentacao, $regime_terapeutico;
    public $recreacaos = [], $recreacaosList = [];
    public $cuidado, $acompanhado, $opnioes_de_si, $auxiliador, $emocionals = [], $emocionalsList = [];
    public $comunicacao, $apoio, $interacao_social;


    //Etapa 4 - Necessidades Espirituais e Finalização
    public $religiao;
    public $unidade_saude_id = null, $impressoes;

    public $successMessage = '';
    public $questionarioId;

    public function mount($id)
    {
        $this->loadQuestionarioData($id);
    }

    public function loadQuestionarioData($questionarioId)
    {
        $this->questionario = Questionario::with([

        ])->findOrFail($questionarioId);
    }



    public function render()
    {
        return view('livewire.questionarios.show-questionario',[
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
        $this->validateStep();
        $this->currentStep = 1;
    }
    public function nextStepSecond()
    {
        $this->validateStep();
        $this->currentStep = 2;
    }
    public function nextStepThird()
    {
        $this->validateStep();
        $this->currentStep = 3;
    }
    public function nextStepFourth()
    {
        $this->validateStep();
        $this->currentStep = 4;
    }

    public function nextStepFifth()
    {
        $this->validateStep();
        $this->currentStep = 5;
    }

    public function backToSearch()
    {
        return redirect()->route('questionario.index');
    }
}
