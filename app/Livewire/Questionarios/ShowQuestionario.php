<?php

namespace App\Livewire\Questionarios;

use App\Models\Paciente;
use App\Models\Questionario;
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
    use WithFileUploads;
    public $currentStep = 1;

    public $questionario;


    public $nss_sociais, $nss_biologicas, $nss_espirituais, $selectedPaciente, $IdselectedPaciente , $enfermeiro, $impressoes, $imagem_avaliacao_pe,$imagem_avaliacao_pe_url;


    
    public $selectedOption = null;
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

    public $successMessage = '';
    public $IdQuestionario;

    public function mount($id)
    {
        $this->loadQuestionarioData($id);
    }

    public function selectOption($option)
    {
        $this->selectedOption = $option;
        $this->teste_senso_percepcao_id = $option;
    }

    public function calcularIMC()
    {
        // Lógica para verificar se altura e peso estão preenchidos
        if ($this->altura && $this->peso) {
            $alturaMetros = $this->altura / 100;
            $this->imc = $this->peso / ($alturaMetros * $alturaMetros);


            // Classificação do IMC
            if ($this->imc < 18.5) {
                $this->classificacao = 'Magro ou baixo peso (Risco normal ou elevado)';
            } elseif ($this->imc >= 18.5 && $this->imc <= 24.9) {
                $this->classificacao = 'Normal ou eutrófico (Risco normal)';
            } elseif ($this->imc >= 25 && $this->imc <= 29.9) {
                $this->classificacao = 'Sobrepeso ou pré-obeso (Risco pouco elevado)';
            } elseif ($this->imc >= 30 && $this->imc <= 34.9) {
                $this->classificacao = 'Obesidade Grau I (Risco elevado)';
            } elseif ($this->imc >= 35 && $this->imc <= 39.9) {
                $this->classificacao = 'Obesidade Grau II (Risco muito elevado)';
            } else {
                $this->classificacao = 'Obesidade grave Grau III (Risco muitíssimo elevado)';
            }
        } else {
            // Se a altura e o peso não estiverem preenchidos, gerar erros
            $this->addError('altura', 'Por favor, informe sua altura.');
            $this->addError('peso', 'Por favor, informe seu peso.');
        }
    }


    public function calcularClassificacaoTemperatura()
    {
        if ($this->temperatura !== null) {
            // Classificação da temperatura
            if ($this->temperatura < 36.1) {
                $this->classificacaoTemperatura = 'Hipotermia';
            } elseif ($this->temperatura >= 36.1 && $this->temperatura <= 37.5) {
                $this->classificacaoTemperatura = 'Normal';
            } elseif ($this->temperatura > 37.5 && $this->temperatura < 38.5) {
                $this->classificacaoTemperatura = 'Febre Leve';
            } elseif ($this->temperatura >= 38.5 && $this->temperatura < 39.5) {
                $this->classificacaoTemperatura = 'Febre Moderada';
            } else {
                $this->classificacaoTemperatura = 'Febre Alta';
            }
        } else {
            $this->addError('temperatura', 'Por favor, informe a temperatura.');
        }
    }

    public function loadQuestionarioData($questionarioId)
    {
        $this->questionario = Questionario::with([
            'nss_sociais.recreacoes', // Carregando as recreações do questionário
            'nss_sociais.cuidado.emocionais', // Carregando os emocionais do questionário
            'nss_biologica.nutricao.refeicoes', // Carregando as refeições do questionário
            'nss_biologica.nutricao.restricoes_alimentar', // Carregando as restrições alimentares
            'nss_biologica.sono.problemas_sono', // Carregando os problemas de sono
            'nss_biologica.sexualidade.disturbios_sexual', // Carregando os distúrbios sexuais
            'nss_biologica.locomocao.tipos_locomocao', // Carregando os tipos de locomoção
            'nss_biologica.senso_percepcao.sintomas_percepcao', // Carregando os sintomas de percepção
            'nss_biologica.cuidado_ferida.limpezas_lesao', // Carregando as limpezas de lesão
            'nss_biologica.cuidado_ferida.coberturas_ferida', // Carregando as coberturas de ferida
            'nss_biologica.integridade_cutanea.sinais_infeccao', // Carregando os sinais de infecção
        ])->findOrFail($questionarioId);

        $this->IdQuestionario = $this->questionario->id;
        $this->nss_biologicas = $this->questionario->nss_biologica;
        $this->nss_espirituais = $this->questionario->nss_espiritual;
        $this->nss_sociais = $this->questionario->nss_sociais;
        $this->selectedPaciente = $this->questionario->paciente;
        $this->IdselectedPaciente = $this->selectedPaciente->id;
        $this->enfermeiro = $this->questionario->user;
        $this->impressoes = $this->questionario->impressoes;
        $this->imagem_avaliacao_pe_url = $this->questionario->imagem_avaliacao_pe_url;


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

        $this->recreacaosList = Recreacao::all();
        $this->recreacaos = $this->questionario->nss_sociais->recreacoes->pluck('id')->toArray();

        $this->emocionalsList = Emocional::all();
        $this->emocionals = $this->questionario->nss_sociais->cuidado->emocionais->pluck('id')->toArray();

        $this->refeicaosList = Refeicao::all();
        $this->refeicaos= $this->questionario->nss_biologica->nutricao->refeicoes->pluck('id')->toArray();

        $this->restricaosList = Restricao_alimento::all();
        $this->restricaos = $this->questionario->nss_biologica->nutricao->restricoes_alimentar->pluck('id')->toArray();

        $this->problemaSonoList = Problema_sono::all();
        $this->problema_sonos = $this->questionario->nss_biologica->sono->problemas_sono->pluck('id')->toArray();

        $this->disturbiosSexualList = Disturbio_sexual::all();
        $this->disturbio_sexuals = $this->questionario->nss_biologica->sexualidade->disturbios_sexual->pluck('id')->toArray();

        $this->tiposLocomocaoList = Tipo_locomocao::all();
        $this->tipo_locomocaos = $this->questionario->nss_biologica->locomocao->tipos_locomocao->pluck('id')->toArray();

        $this->sintomasPercepcaoList = Sintomas_percepcao::all();
        $this->sintomas_percepcaos = $this->questionario->nss_biologica->senso_percepcao->sintomas_percepcao->pluck('id')->toArray();

        $this->limpezaLesaosList = Limpeza_lesao::all();
        $this->limpeza_lesaos = $this->questionario->nss_biologica->cuidado_ferida->limpezas_lesao->pluck('id')->toArray();

        $this->coberturasList = Cobertura_ferida::all();
        $this->coberturas = $this->questionario->nss_biologica->cuidado_ferida->coberturas_ferida->pluck('id')->toArray();

        $this->sinaisInfeccaoList = Sinais_infeccao::all();
        $this->sinais_infeccaos = $this->questionario->nss_biologica->integridade_cutanea->sinais_infeccao->pluck('id')->toArray();
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
        ])->layout('layouts.app');
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
}
