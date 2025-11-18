<?php


namespace App\Livewire\Questionarios;


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
use App\Models\Limpeza_lesao;
use App\Models\Locomocao;
use App\Models\Motivo;
use App\Models\Nss_biologicas;
use App\Models\Nss_espirituais;
use App\Models\Nss_sociais;
use App\Models\Nutricao;
use App\Models\Origem;
use App\Models\Oxigenacao;
use App\Models\Paciente;
use App\Models\Percepcao_sentido;
use App\Models\Problema_sono;
use App\Models\Prontuario;
use App\Models\Questionario;
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
use Livewire\Component;
use Livewire\WithFileUploads;


class CreateQuestionario extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $selectedOption = null;
    public $search = "";
    public $selectedPaciente = null;
    public $idPacienteSelected = null;

    public $sexo;

    protected $messages = [
        'imagem_avaliacao_pe.image' => 'O arquivo deve ser uma imagem.',
        'imagem_avaliacao_pe.max' => 'A imagem não pode ser maior que 1MB.',
    ];

    // Etapa 1 - Mostrar Paciente
    public function selectPaciente($pacienteId)
    {
        $this->selectedPaciente = Paciente::findOrFail($pacienteId);

        if ($this->selectedPaciente->sexo == 1) {
            $this->sexo = 'Feminino';
        } else {
            $this->sexo = 'Masculino';
        }

        $this->idPacienteSelected = $pacienteId;
        $this->search = "";

        $ultimoQuestionario = Questionario::where('paciente_id', $pacienteId)
            ->latest('created_at')
            ->first();

        if ($ultimoQuestionario) {
            $this->loadUltimoQuestionarioDoPaciente($pacienteId);
        }
    }




    public $nss_sociais, $nss_biologicas, $nss_espirituais, $questionario, $imagem_avaliacao_pe, $imagem_avaliacao_pe_url, $IdselectedPaciente;


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
    public $desbridamento_id, $avaliacao_ferida_id, $aplicacao_laserterapia, $terapia_fotodinamica;
    public $cuidado_ferida, $coberturas = [], $coberturasList = [], $limpeza_lesaos = [], $limpezaLesaosList = [], $sinais_infeccaos = [], $sinaisInfeccaoList = [];
    public $regiao_pe_id;
    //Etapa 3 - Necessidades Sociais
    public $aprendizagem, $monitoramento_glicemia_dia, $cuidado_pes, $uso_sapato, $alimentacao, $regime_terapeutico;
    public $recreacaos = [], $recreacaosList = [];
    public $cuidado, $acompanhado, $opnioes_de_si, $auxiliador, $emocionals = [], $emocionalsList = [];
    public $comunicacao, $apoio, $interacao_social;


    //Etapa 4 - Necessidades Espirituais e Finalização
    public $religiao = null, $e_religioso;
    public $impressoes;
    //Etapa 5 
    public $origem, $motivo, $diagnostico, $intervencao;

    public $itbD = null, $itbE = null, $classITBE = null, $classITBD = null;
    public $corIMC, $corTemperatura, $corGlicemia, $corCircunferencia, $corITBD, $corITBE;
    public $classificaoCirc, $classificacaoGlic;
    public $estado_glicemia, $estado_circunferencia;


    public $ladoSelecionado;

    public $avaliarDireito = false;
    public $avaliarEsquerdo = false;

    public $sinais_infeccao_direito = [];
    public $sinais_infeccao_esquerdo = [];

    public $dados = [
        'direito' => [
            'comprimento' => null,
            'largura' => null,
            'regiao_pe_id' => null,
            'localizacao_lesao_id' => null,
            'lesao_amputacao' => null,
            'bordas_ferida_id' => null,
            'edema' => null,
            'quantidade_exudato_id' => null,
            'odor_exudato' => null,
            'aspecto_exudato_id' => null,
            'tipo_tecido_ferida_id' => null,
            'profundidade_id' => null,
            'pele_periferida_id' => null,
            'dor' => null,
            'sinais_infeccao' => [],
        ],
        'esquerdo' => [
            'comprimento' => null,
            'largura' => null,
            'regiao_pe_id' => null,
            'localizacao_lesao_id' => null,
            'lesao_amputacao' => null,
            'bordas_ferida_id' => null,
            'edema' => null,
            'quantidade_exudato_id' => null,
            'odor_exudato' => null,
            'aspecto_exudato_id' => null,
            'tipo_tecido_ferida_id' => null,
            'profundidade_id' => null,
            'pele_periferida_id' => null,
            'dor' => null,
            'sinais_infeccao' => [],
        ],
    ];



    public function calcularIMC()
    {
        // Limpa erros anteriores desses campos
        $this->resetErrorBag(['altura', 'peso']);

        // Normaliza para ponto decimal
        $alturaStr = str_replace(',', '.', (string) $this->altura);
        $pesoStr   = str_replace(',', '.', (string) $this->peso);

        $alturaNum = floatval($alturaStr);
        $pesoNum   = floatval($pesoStr);

        // Valida preenchimento
        if ($alturaNum <= 0) {
            $this->addError('altura', 'Por favor, informe sua altura.');
        }
        if ($pesoNum <= 0) {
            $this->addError('peso', 'Por favor, informe seu peso.');
        }
        if ($this->getErrorBag()->isNotEmpty()) {
            return;
        }

        // Converte altura: se for < 3, assuma metros; senão, cm -> m
        $alturaMetros = $alturaNum < 3 ? $alturaNum : ($alturaNum / 100);

        // Valida ranges razoáveis
        if ($alturaMetros < 0.5 || $alturaMetros > 3.0) {
            $this->addError('altura', 'Altura fora do intervalo esperado.');
            return;
        }
        if ($pesoNum < 10 || $pesoNum > 500) {
            $this->addError('peso', 'Peso fora do intervalo esperado.');
            return;
        }

        // Evita divisão por zero
        $den = $alturaMetros * $alturaMetros;
        if ($den <= 0) {
            $this->addError('altura', 'Altura inválida.');
            return;
        }

        // Calcula e arredonda
        $this->imc = round($pesoNum / $den, 2);

        // Classificação e cor
        $imc = $this->imc;
        if ($imc < 18.5) {
            $this->classificacao = 'Magro ou baixo peso (Risco normal ou elevado)';
            $this->corIMC = 'text-yellow-500';
        } elseif ($imc < 25) { // 18.5–24.99
            $this->classificacao = 'Normal ou eutrófico (Risco normal)';
            $this->corIMC = 'text-green-600';
        } elseif ($imc < 30) { // 25–29.99
            $this->classificacao = 'Sobrepeso ou pré-obeso (Risco pouco elevado)';
            $this->corIMC = 'text-orange-400';
        } elseif ($imc < 35) { // 30–34.99
            $this->classificacao = 'Obesidade Grau I (Risco elevado)';
            $this->corIMC = 'text-orange-600';
        } elseif ($imc < 40) { // 35–39.99
            $this->classificacao = 'Obesidade Grau II (Risco muito elevado)';
            $this->corIMC = 'text-red-600';
        } else { // >= 40
            $this->classificacao = 'Obesidade grave Grau III (Risco muitíssimo elevado)';
            $this->corIMC = 'text-red-800 font-bold';
        }
    }


    public function calcularCircunferencia()
    {
        // Lógica para verificar a circunferencia foi preenchida
        if ($this->circunferencia_abdnominal !== null) {

            $this->estado_circunferencia = $this->selectedPaciente->sexo;

            // Classificação da circunferencia
            if ($this->circunferencia_abdnominal > 80 && $this->estado_circunferencia == 1) {
                $this->classificaoCirc = 'Risco de Morbimortalidade';
                $this->corCircunferencia = 'text-red-600';
            } elseif ($this->circunferencia_abdnominal <= 80 && $this->estado_circunferencia == 1) {
                $this->classificaoCirc = 'Sem Risco';
                $this->corCircunferencia = 'text-green-600';
            } elseif ($this->circunferencia_abdnominal > 94 && $this->estado_circunferencia == 0) {
                $this->classificaoCirc = 'Risco de Morbimortalidade';
                $this->corCircunferencia = 'text-red-600';
            } else {
                $this->classificaoCirc = 'Sem Risco';
                $this->corCircunferencia = 'text-green-600';
            }
        } else {
            // Se a circunferencia não estiver preenchida, gerar erro
            $this->addError('circunferencia_abdnominal', 'Por favor, informe sua circunferência abdominal.');
        }
    }

    public function calcularGlicemia()
    {
        // Lógica para verificar se glicemia está preenchida
        if ($this->glicemia_capilar !== null) {

            // Em Jejum o estado_glicemia será 1, quando a glicemia for 2 horas após o início das refeições será 0

            // Classificação da glicemia
            if ($this->glicemia_capilar < 180 && $this->estado_glicemia == 0) {
                $this->classificacaoGlic = 'Sem Alteração';
                $this->corGlicemia = 'text-green-600';
            } elseif ($this->glicemia_capilar >= 180 && $this->estado_glicemia == 0) {
                $this->classificacaoGlic = 'Glicemia Alterada';
                $this->corGlicemia = 'text-red-600';
            } elseif ($this->glicemia_capilar >= 80 && $this->glicemia_capilar <= 130 && $this->estado_glicemia == 1) {
                // Corrigido para comparação entre 80 e 130
                $this->classificacaoGlic = 'Sem Alteração';
                $this->corGlicemia = 'text-green-600';
            } else {
                $this->classificacaoGlic = 'Glicemia Alterada';
                $this->corGlicemia = 'text-red-600';
            }
        } else {
            // Se a glicemia capilar não estiver preenchida, gerar erro
            $this->addError('glicemia_capilar', 'Por favor, informe sua glicemia capilar.');
        }
    }

    public function calcularClassificacaoTemperatura()
    {
        if ($this->temperatura !== null) {
            // Classificação da temperatura
            if ($this->temperatura < 36.1) {
                $this->classificacaoTemperatura = 'Hipotermia';
                $this->corTemperatura = 'text-yellow-500';
            } elseif ($this->temperatura >= 36.1 && $this->temperatura <= 37.5) {
                $this->classificacaoTemperatura = 'Normal';
                $this->corTemperatura = 'text-green-600';
            } elseif ($this->temperatura > 37.5 && $this->temperatura < 38.5) {
                $this->classificacaoTemperatura = 'Febre Leve';
                $this->corTemperatura = 'text-orange-400';
            } elseif ($this->temperatura >= 38.5 && $this->temperatura < 39.5) {
                $this->classificacaoTemperatura = 'Febre Moderada';
                $this->corTemperatura = 'text-orange-600';
            } else {
                $this->classificacaoTemperatura = 'Febre Alta';
                $this->corTemperatura = 'text-red-600';
            }
        } else {
            $this->addError('temperatura', 'Por favor, informe a temperatura.');
        }
    }

    public function calcularITBDireito()
    {
        if ($this->psatp_direito && $this->psap_direito && $this->psab_direito) {
            $maiorValor = max($this->psatp_direito, $this->psap_direito);
            $this->itbD = number_format($maiorValor / $this->psab_direito, 2, '.', '');

            // Classificação do ITB Esquerdo
            if ($this->itbD > 1.30) {
                $this->classITBD = "Calcificação (risco de DCV)";
                $this->corITBD = 'text-orange-500';
            } elseif ($this->itbD >= 0.90 && $this->itbD <= 1.30) {
                $this->classITBD = "Normal";
                $this->corITBD = 'text-green-500';
            } elseif ($this->itbD >= 0.60 && $this->itbD < 0.90) {
                $this->classITBD = "Anormal (Sugestivo de DAP)";
                $this->corITBD = 'text-red-500';
            } else {
                $this->classITBD = "Isquemia significativa";
                $this->corITBD = 'text-red-700';
            }
        } else {
            $this->addError('psatp_direito', 'Por favor, informe a pressão sistólica do tornozelo direito.');
            $this->addError('psap_direito', 'Por favor, informe a pressão sistólica do braço direito.');
            $this->addError('psab_direito', 'Por favor, informe a pressão sistólica do tornozelo direito.');
        }
    }


    public function calcularITBEsquerdo()
    {
        if ($this->psatp_esquerdo && $this->psap_esquerdo && $this->psab_esquerdo) {
            $maiorValor = max($this->psatp_esquerdo, $this->psap_esquerdo);
            $this->itbE = number_format($maiorValor / $this->psab_esquerdo, 2, '.', '');

            // Classificação do ITB Esquerdo
            if ($this->itbE > 1.30) {
                $this->classITBE = "Calcificação (risco de DCV)";
                $this->corITBE = 'text-orange-500';
            } elseif ($this->itbE >= 0.90 && $this->itbE <= 1.30) {
                $this->classITBE = "Normal";
                $this->corITBE = 'text-green-500';
            } elseif ($this->itbE >= 0.60 && $this->itbE < 0.90) {
                $this->classITBE = "Anormal (Sugestivo de DAP)";
                $this->corITBE = 'text-red-500';
            } else {
                $this->classITBE = "Isquemia significativa";
                $this->corITBE = 'text-red-700';
            }
        } else {
            $this->addError('psatp_esquerdo', 'Por favor, informe a pressão sistólica do tornozelo esquerdo.');
            $this->addError('psap_esquerdo', 'Por favor, informe a pressão sistólica do braço esquerdo.');
            $this->addError('psab_esquerdo', 'Por favor, informe a pressão sistólica do tornozelo esquerdo.');
        }
    }


    public function selectOption($option)
    {
        $this->selectedOption = $option;
        $this->teste_senso_percepcao_id = $option;
    }


    public function mount()
    {
        $this->recreacaosList = Recreacao::all();
        $this->emocionalsList = Emocional::all();
        $this->refeicaosList = Refeicao::all();
        $this->restricaosList = Restricao_alimento::all();
        $this->problemaSonoList = Problema_sono::all();
        $this->disturbiosSexualList = Disturbio_sexual::all();
        $this->tiposLocomocaoList = Tipo_locomocao::all();
        $this->sintomasPercepcaoList = Sintomas_percepcao::all();
        $this->limpezaLesaosList = Limpeza_lesao::all();
        $this->coberturasList = Cobertura_ferida::all();
        $this->sinaisInfeccaoList = Sinais_infeccao::all();
    }
    public $IdQuestionario, $enfermeiro;

    public function loadUltimoQuestionarioDoPaciente($pacienteId)
    {
        $this->selectedPaciente = Paciente::findOrFail($pacienteId);
        $this->IdselectedPaciente = $this->selectedPaciente->id;

        $this->questionario = Questionario::with([
            'nss_sociais.recreacoes',
            'nss_sociais.cuidado.emocionais',
            'nss_biologica.nutricao.refeicoes',
            'nss_biologica.nutricao.restricoes_alimentar',
            'nss_biologica.sono.problemas_sono',
            'nss_biologica.sexualidade.disturbios_sexual',
            'nss_biologica.locomocao.tipos_locomocao',
            'nss_biologica.senso_percepcao.sintomas_percepcao',
            'nss_biologica.cuidado_ferida.limpezas_lesao',
            'nss_biologica.cuidado_ferida.coberturas_ferida',
            'user',
        ])
            ->where('paciente_id', $pacienteId)
            ->latest('created_at')
            ->first();

        if (!$this->questionario) {
            session()->flash('error', 'Este paciente ainda não possui questionários anteriores.');
            return;
        }

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
        $this->selectOption($this->teste_senso_percepcao_id);
        $this->percepcao_direito = $this->questionario->nss_biologica->senso_percepcao->percepcao_direito;
        $this->percepcao_esquerdo = $this->questionario->nss_biologica->senso_percepcao->percepcao_esquerdo;

        $this->dados = [
            'direito' => [],
            'esquerdo' => [],
        ];

        $integridades = $this->questionario->nss_biologica->integridade_cutanea;

        // Define ladoSelecionado com base nos dados do banco
        $ladosPreenchidos = $integridades->pluck('lado')->unique()->values();

        if ($ladosPreenchidos->contains('direito') && $ladosPreenchidos->contains('esquerdo')) {
            $this->ladoSelecionado = 'ambos';
        } elseif ($ladosPreenchidos->contains('direito')) {
            $this->ladoSelecionado = 'direito';
        } elseif ($ladosPreenchidos->contains('esquerdo')) {
            $this->ladoSelecionado = 'esquerdo';
        }

        foreach (['direito', 'esquerdo'] as $lado) {
            $item = $integridades->firstWhere('lado', $lado);
            if ($item) {
                $sinais = $lado === 'direito'
                    ? $item->sinaisInfeccaoDireito->pluck('id')->toArray()
                    : $item->sinaisInfeccaoEsquerdo->pluck('id')->toArray();

                $this->dados[$lado] = [
                    'comprimento' => $item->comprimento,
                    'largura' => $item->largura,
                    'regiao_pe_id' => $item->regiao_pe_id,
                    'localizacao_lesao_id' => $item->localizacao_lesao_id,
                    'lesao_amputacao' => $item->lesao_amputacao,
                    'bordas_ferida_id' => $item->borda_ferida_id,
                    'edema' => $item->edema,
                    'quantidade_exudato_id' => $item->quantidade_exudato_id,
                    'odor_exudato' => $item->odor_exudato,
                    'aspecto_exudato_id' => $item->aspecto_exudato_id,
                    'tipo_tecido_ferida_id' => $item->tipo_tecido_ferida_id,
                    'profundidade_id' => $item->profundidade_id,
                    'pele_periferida_id' => $item->pele_periferida_id,
                    'dor' => $item->dor,
                    'sinais_infeccao' => $sinais,
                ];

                // Preenche os modelos usados nos checkboxes
                if ($lado === 'direito') {
                    $this->sinais_infeccao_direito = $sinais;
                } elseif ($lado === 'esquerdo') {
                    $this->sinais_infeccao_esquerdo = $sinais;
                }
            }
        }

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
        if ($this->religiao == 'Nenhuma') {
            $this->e_religioso = 'nao';
        } else {
            $this->e_religioso = 'sim';
        }

        $this->recreacaosList = Recreacao::all();
        $this->recreacaos = $this->questionario->nss_sociais->recreacoes->pluck('id')->toArray();

        $this->emocionalsList = Emocional::all();
        $this->emocionals = $this->questionario->nss_sociais->cuidado->emocionais->pluck('id')->toArray();

        $this->refeicaosList = Refeicao::all();
        $this->refeicaos = $this->questionario->nss_biologica->nutricao->refeicoes->pluck('id')->toArray();

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
    }



    public function render()
    {
        $pacientes = [];


        if (strlen($this->search) >= 1) {
            $pacientes = Paciente::where('nome', 'like', '%' . $this->search . '%')
                ->orWhere('prontuario', 'like', '%' . $this->search . '%')
                ->limit(5)
                ->get();
        }


        return view('livewire.questionarios.create-questionario', [
            'pacientes' => $pacientes,
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
        ]);
    }

    public function nextStep()
    {
        //$this->validateStep();
        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function validateStep()
    {
        if ($this->currentStep == 2) {
            $rules = [
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

                'limpeza_lesaos' => 'nullable|array',
                'coberturas' => 'nullable|array',
                'desbridamento_id' => 'required|exists:desbridamentos,id',
                'avaliacao_ferida_id' => 'required|exists:avaliacao_feridas,id',
                'aplicacao_laserterapia' => 'required|boolean',
                'terapia_fotodinamica' => 'required|boolean',
                'imagem_avaliacao_pe' => 'image|max:2048',
            ];

            // Adicionar regras para cada pé (direito e esquerdo)
            foreach (['direito', 'esquerdo'] as $lado) {
                if (!empty($this->dados[$lado])) {
                    $rules["dados.$lado.comprimento"] = 'required|numeric|min:0';
                    $rules["dados.$lado.largura"] = 'required|numeric|min:0';
                    $rules["dados.$lado.regiao_pe_id"] = 'required|exists:regiao_pes,id';
                    $rules["dados.$lado.localizacao_lesao_id"] = 'required|exists:localizacao_lesaos,id';
                    $rules["dados.$lado.lesao_amputacao"] = 'required|boolean';
                    $rules["dados.$lado.bordas_ferida_id"] = 'required|exists:bordas_feridas,id';
                    $rules["dados.$lado.pele_periferida_id"] = 'required|exists:pele_periferidas,id';
                    $rules["dados.$lado.profundidade_id"] = 'required|exists:profundidades,id';
                    $rules["dados.$lado.tipo_tecido_ferida_id"] = 'required|exists:tipo_tecido_feridas,id';
                    $rules["dados.$lado.aspecto_exudato_id"] = 'required|exists:aspecto_exudatos,id';
                    $rules["dados.$lado.quantidade_exudato_id"] = 'required|exists:quantidades_exudatos,id';
                    $rules["dados.$lado.edema"] = 'required|boolean';
                    $rules["dados.$lado.odor_exudato"] = 'required|boolean';
                    $rules["dados.$lado.dor"] = 'required|boolean';
                    $rules["dados.$lado.sinais_infeccao"] = 'nullable|array';
                }
            }

            $this->validate($rules);
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
                'religiao' => 'string|max:255',
                'impressoes' => 'required|string',
            ]);
        }
    }
    public function ColetarProntuario($questionario)
    {


        $this->calcularClassificacaoTemperatura();
        $this->calcularClassificacaoTemperatura();

        $paciente = null;
        $questionarioAnterior = null;
        $paciente = $questionario->paciente;

        // Verifique se há questionários para o paciente
        $questionarioAnterior = $paciente->questionarios()
            ->where('id', '<', $questionario->id) // Pega apenas questionários mais antigos
            ->orderBy('id', 'desc') // Ordena do mais recente ao mais antigo (entre os antigos)
            ->first(); // Obtém o primeiro da lista (mais próximo ao atual)

        if ($questionarioAnterior) {
            // Garantir que nss_biologica está presente e não é nulo
            if ($questionario->nss_biologica && $questionarioAnterior->nss_biologica) {
                // Obter os dados de regulacao vascular para os questionários atual e anterior
                $regulacaoVascularAtual = $questionario->nss_biologica->regulacao_vascular;
                $regulacaoVascularAntiga = $questionarioAnterior->nss_biologica->regulacao_vascular;

                // Inicializar as variáveis PSATP com valores padrão
                $psatp_atual_direito = $psatp_atual_direito ?? 0; // Se for null, define como 0
                $psatp_antigo_direito = $psatp_antigo_direito ?? 0; // Se for null, define como 0
                $psatp_atual_esquerdo = $psatp_atual_esquerdo ?? 0; // Se for null, define como 0
                $psatp_antigo_esquerdo = $psatp_antigo_esquerdo ?? 0; // Se for null, define como 0

                // Inicializar as variáveis PSAP com valores padrão
                $psap_atual_direito = $psap_atual_direito ?? 0; // Se for null, define como 0
                $psap_antigo_direito = $psap_antigo_direito ?? 0; // Se for null, define como 0
                $psap_atual_esquerdo = $psap_atual_esquerdo ?? 0; // Se for null, define como 0
                $psap_antigo_esquerdo = $psap_antigo_esquerdo ?? 0; // Se for null, define como 0
            } else {
                // Tratar caso onde nss_biologica ou regulacao_vascular não existam
                // Você pode lançar um erro ou definir valores padrão
                $regulacaoVascularAtual = $regulacaoVascularAntiga = null;
            }
        } else {
            // Tratar caso onde questionarioAnterior não foi encontrado
            // Exemplo: Definir valores padrão ou lançar um erro
            $regulacaoVascularAtual = $regulacaoVascularAntiga = null;
            // Inicializar as variáveis PSATP e PSAP
            $psatp_atual_direito = 0;
            $psatp_antigo_direito = 0;
            $psatp_atual_esquerdo = 0;
            $psatp_antigo_esquerdo = 0;
            $psap_atual_direito = 0;
            $psap_antigo_direito = 0;
            $psap_atual_esquerdo = 0;
            $psap_antigo_esquerdo = 0;
        }

        $condicoes = [
            [
                'condicao' => $questionario->paciente?->renda_familiar <= 2824,
                'origem' => 1,
                'motivo' => 1,
            ],
            [
                'condicao' => $questionario->paciente?->beneficio->id != 1,
                'origem' => 1,
                'motivo' => 2,
            ],
            [
                'condicao' => $questionario->paciente?->historico?->inicio_etilismo == 0,
                'origem' => 2,
                'motivo' => 3,
            ],
            [
                'condicao' => $questionario->paciente?->historico?->inicio_tabagismo == 0,
                'origem' => 2,
                'motivo' => 4,
            ],
            [
                'condicao' => $questionario->nss_biologica?->regulacao_neuro?->comportamento_reg_neuro?->id == 2,
                'origem' => 3,
                'motivo' => 5,
            ],
            [
                'condicao' => $questionario->nss_biologica?->regulacao_neuro?->comportamento_reg_neuro?->id == 3,
                'origem' => 3,
                'motivo' => 6,
            ],
            [
                'condicao' => (
                    $questionario->nss_biologica?->percepcao_sentidos?->olho_direito == 1 ||
                    $questionario->nss_biologica?->percepcao_sentidos?->olho_esquerdo == 1
                ),
                'origem' => 4,
                'motivo' => 7,
            ],
            [
                'condicao' => $questionario->nss_biologica?->percepcao_sentidos?->risco_queda == 1,
                'origem' => 4,
                'motivo' => 8,
            ],
            [
                'condicao' => $questionario->nss_biologica?->percepcao_sentidos?->analise_tato?->id == 4,
                'origem' => 4,
                'motivo' => 9,
            ],
            [
                'condicao' => $questionario->nss_biologica?->percepcao_sentidos?->analise_tato?->id == 5,
                'origem' => 4,
                'motivo' => 10,
            ],
            [
                'condicao' => $questionario->nss_biologica?->percepcao_sentidos?->analise_tato?->id == 6,
                'origem' => 4,
                'motivo' => 11,
            ],
            [
                'condicao' => $questionario->nss_biologica?->percepcao_sentidos?->ouvido == 1,
                'origem' => 4,
                'motivo' => 12,
            ],
            [
                'condicao' => $questionario->nss_biologica?->nutricao?->alimento_consumo?->id == 3,
                'origem' => 5,
                'motivo' => 13,
            ],
            [
                'condicao' => $questionario->nss_biologica?->nutricao?->alimento_consumo?->id == 4,
                'origem' => 5,
                'motivo' => 14,
            ],
            [
                'condicao' => !is_null($this->restricaos),
                'origem' => 5,
                'motivo' => 103,
            ],
            [
                'condicao' => $questionario->nss_biologica?->sono?->acorda_noite == 1,
                'origem' => 6,
                'motivo' => 15,
            ],
            [
                'condicao' => $questionario->nss_biologica?->sono?->qualidade_sono?->id == 3,
                'origem' => 6,
                'motivo' => 16,
            ],
            [
                'condicao' => $questionario->nss_biologica?->sono?->qualidade_sono?->id == 4,
                'origem' => 6,
                'motivo' => 17,
            ],
            [
                'condicao' => $questionario->nss_biologica?->sono?->problemas_sono?->contains('id', 2),
                'origem' => 6,
                'motivo' => 17,
            ],
            [
                'condicao' => $questionario->nss_biologica?->sono?->problemas_sono?->contains('id', 3),
                'origem' => 6,
                'motivo' => 18,
            ],
            [
                'condicao' => $questionario->nss_biologica?->sono?->problemas_sono?->contains('id', 4),
                'origem' => 6,
                'motivo' => 19,
            ],
            [
                'condicao' => $questionario->nss_biologica?->sono?->problemas_sono?->contains('id', 5),
                'origem' => 6,
                'motivo' => 20,
            ],
            [
                'condicao' => $questionario->nss_biologica?->sono?->problemas_sono?->contains('id', 6),
                'origem' => 6,
                'motivo' => 21,
            ],
            [
                'condicao' => $questionario->nss_biologica?->sono?->problemas_sono?->contains('id', 7),
                'origem' => 6,
                'motivo' => 22,
            ],
            // Frequência de exercício físico
            [
                'condicao' => $questionario->nss_biologica?->exercicio_fisico?->frequencias_exercicio?->id == 1,
                'origem' => 7,
                'motivo' => 23,
            ],
            // Zona de moradia
            [
                'condicao' => $questionario->nss_biologica?->abrigo?->zona_moradia?->id == 3,
                'origem' => 8,
                'motivo' => 25,
            ],
            [
                'condicao' => $questionario->nss_biologica?->abrigo?->zona_moradia?->id == 4,
                'origem' => 8,
                'motivo' => 26,
            ],
            // Luz pública
            [
                'condicao' => $questionario->nss_biologica?->abrigo?->luz_publica == 0,
                'origem' => 8,
                'motivo' => 27,
            ],
            // Coleta de lixo
            [
                'condicao' => $questionario->nss_biologica?->abrigo?->coleta_lixo == 0,
                'origem' => 8,
                'motivo' => 28,
            ],
            // Água tratada
            [
                'condicao' => $questionario->nss_biologica?->abrigo?->agua_tratada == 0,
                'origem' => 8,
                'motivo' => 29,
            ],
            // Rede de esgoto - ID 2
            [
                'condicao' => $questionario->nss_biologica?->abrigo?->rede_esgoto?->id == 2,
                'origem' => 8,
                'motivo' => 30,
            ],
            // Rede de esgoto - ID 3
            [
                'condicao' => $questionario->nss_biologica?->abrigo?->rede_esgoto?->id == 3,
                'origem' => 8,
                'motivo' => 31,
            ],
            // IMC maior ou igual a 25
            [
                'condicao' => $this->imc >= 25,
                'origem' => 9,
                'motivo' => 32,
            ],
            // Glicemia capilar abaixo de 70
            [
                'condicao' => $questionario->nss_biologica?->regulacao_hormonal?->glicemia_capilar <= 70,
                'origem' => 9,
                'motivo' => 33,
            ],
            // Glicemia capilar acima de 100
            [
                'condicao' => $questionario->nss_biologica?->regulacao_hormonal?->glicemia_capilar >= 100,
                'origem' => 9,
                'motivo' => 34,
            ],
            // Temp de enchimento capilar abaixo de 2
            [
                'condicao' => $questionario->nss_biologica?->oxigenacao?->temp_enchimento_capilar < 2,
                'origem' => 10,
                'motivo' => 35,
            ],
            // Temperatura maior ou igual a 37.6
            [
                'condicao' => $this->temperatura >= 37.6,
                'origem' => 11,
                'motivo' => 36,
            ],
            // Distúrbio sexual não é nulo
            [
                'condicao' => !is_null($this->disturbio_sexuals),
                'origem' => 12,
                'motivo' => 37,
            ],
            // Tipos de locomoção com id de 3 a 7
            [
                'condicao' => $questionario->nss_biologica?->locomocao?->tipos_locomocao?->contains('id', 3),
                'origem' => 13,
                'motivo' => 38,
            ],
            [
                'condicao' => $questionario->nss_biologica?->locomocao?->tipos_locomocao?->contains('id', 4),
                'origem' => 13,
                'motivo' => 39,
            ],
            [
                'condicao' => $questionario->nss_biologica?->locomocao?->tipos_locomocao?->contains('id', 5),
                'origem' => 13,
                'motivo' => 40,
            ],
            [
                'condicao' => $questionario->nss_biologica?->locomocao?->tipos_locomocao?->contains('id', 6),
                'origem' => 13,
                'motivo' => 41,
            ],
            [
                'condicao' => $questionario->nss_biologica?->locomocao?->tipos_locomocao?->contains('id', 7),
                'origem' => 13,
                'motivo' => 42,
            ],
            [
                'condicao' => $questionario->nss_biologica?->locomocao?->tipos_locomocao?->contains('id', 8),
                'origem' => 13,
                'motivo' => 43,
            ],
            [
                'condicao' => $questionario->nss_biologica?->locomocao?->tipos_locomocao?->contains('id', 9),
                'origem' => 13,
                'motivo' => 44,
            ],
            [
                'condicao' => $questionario->nss_biologica?->locomocao?->tipos_locomocao?->contains('id', 10),
                'origem' => 13,
                'motivo' => 45,
            ],
            [
                'condicao' => $questionario->nss_biologica?->locomocao?->tipos_locomocao?->contains('id', 11),
                'origem' => 13,
                'motivo' => 46,
            ],
            [
                'condicao' => $questionario->nss_biologica?->locomocao?->tipos_locomocao?->contains('id', 12),
                'origem' => 13,
                'motivo' => 47,
            ],
            [
                'condicao' => $questionario->nss_biologica?->locomocao?->tipos_locomocao?->contains('id', 13),
                'origem' => 13,
                'motivo' => 48,
            ],
            [
                'condicao' => $questionario->nss_biologica?->locomocao?->tipos_locomocao?->contains('id', 14),
                'origem' => 13,
                'motivo' => 49,
            ],
            [
                'condicao' => $questionario->nss_biologica?->regulacao_vascular?->pressao_arterial == "120/80",
                'origem' => 14,
                'motivo' => 50,
            ],
            [
                'condicao' => $psatp_atual_direito == 0 || $psatp_antigo_direito != $psatp_atual_direito || $psatp_atual_esquerdo == 0 || $psatp_antigo_esquerdo != $psatp_atual_esquerdo || $psap_atual_direito == 0 || $psap_antigo_direito != $psap_atual_direito || $psap_atual_esquerdo == 0 || $psap_antigo_esquerdo != $psap_atual_esquerdo,
                'origem' => 14,
                'motivo' => 51,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->estado_unha?->id == 2,
                'origem' => 15,
                'motivo' => 52,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->estado_unha?->id == 3,
                'origem' => 15,
                'motivo' => 53,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->estado_unha?->id == 4,
                'origem' => 15,
                'motivo' => 54,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->estado_unha?->id == 5,
                'origem' => 15,
                'motivo' => 55,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->corte_unhas == 0,
                'origem' => 15,
                'motivo' => 56,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->sintomas_percepcao?->contains('id', 3),
                'origem' => 15,
                'motivo' => 57,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->sintomas_percepcao?->contains('id', 4),
                'origem' => 15,
                'motivo' => 58,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->sintomas_percepcao?->contains('id', 5),
                'origem' => 15,
                'motivo' => 59,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->sintomas_percepcao?->contains('id', 8),
                'origem' => 15,
                'motivo' => 60,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->sintomas_percepcao?->contains('id', 9),
                'origem' => 15,
                'motivo' => 61,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->sintomas_percepcao?->contains('id', 12),
                'origem' => 15,
                'motivo' => 62,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->sintomas_percepcao?->contains('id', 6),
                'origem' => 15,
                'motivo' => 63,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->calosidades == 1,
                'origem' => 15,
                'motivo' => 64,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->sintomas_percepcao?->contains('id', 10),
                'origem' => 15,
                'motivo' => 65,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->fissuras == 1,
                'origem' => 15,
                'motivo' => 66,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->pe_neuropatico == 1,
                'origem' => 15,
                'motivo' => 67,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->arco_desabado == 1,
                'origem' => 15,
                'motivo' => 68,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->valgismo == 1,
                'origem' => 15,
                'motivo' => 69,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->dedos_em_garra == 1,
                'origem' => 15,
                'motivo' => 70,
            ],
            [
                'condicao' => $questionario->nss_biologica?->senso_percepcao?->percepcao_direito == 0 && $questionario->nss_biologica?->senso_percepcao?->percepcao_esquerdo == 0,
                'origem' => 15,
                'motivo' => 71,
            ],
            [
                'condicao' => $questionario->nss_biologica?->cuidado_ferida != null,
                'origem' => 17,
                'motivo' => 85,
            ],
            [
                'condicao' => $questionario->nss_sociais?->aprendizagem?->regime_terapeutico == 0,
                'origem' => 18,
                'motivo' => 86,
            ],
            [
                'condicao' => $questionario->nss_sociais?->aprendizagem?->monitoramento_glicemia_dia == 0,
                'origem' => 18,
                'motivo' => 87,
            ],
            [
                'condicao' => $questionario->nss_sociais?->aprendizagem?->monitoramento_glicemia_dia == 1,
                'origem' => 18,
                'motivo' => 88,
            ],
            [
                'condicao' => $questionario->nss_sociais?->recreacoes?->contains('id', 1),
                'origem' => 19,
                'motivo' => 89,
            ],
            [
                'condicao' => $questionario->nss_sociais?->cuidado?->acompanhado == 1,
                'origem' => 20,
                'motivo' => 90,
            ],
            [
                'condicao' => $questionario->nss_sociais?->cuidado?->emocionais?->contains('id', 1),
                'origem' => 20,
                'motivo' => 91,
            ],
            [
                'condicao' => $questionario->nss_sociais?->cuidado?->emocionais?->contains('id', 2),
                'origem' => 20,
                'motivo' => 92,
            ],
            [
                'condicao' => $questionario->nss_sociais?->cuidado?->emocionais?->contains('id', 3),
                'origem' => 20,
                'motivo' => 93,
            ],
            [
                'condicao' => $questionario->nss_sociais?->cuidado?->emocionais?->contains('id', 4),
                'origem' => 20,
                'motivo' => 94,
            ],
            [
                'condicao' => $questionario->nss_sociais?->cuidado?->emocionais?->contains('id', 5),
                'origem' => 20,
                'motivo' => 95,
            ],
            [
                'condicao' => $questionario->nss_sociais?->cuidado?->emocionais?->contains('id', 6),
                'origem' => 20,
                'motivo' => 96,
            ],
            [
                'condicao' => $questionario->nss_sociais?->cuidado?->opnioes_de_si == 1,
                'origem' => 20,
                'motivo' => 97,
            ],
            [
                'condicao' => $questionario->nss_sociais?->comunicacao?->interacao_social == 0,
                'origem' => 21,
                'motivo' => 98,
            ],
            [
                'condicao' => $questionario->nss_sociais?->comunicacao?->apoio == 0,
                'origem' => 21,
                'motivo' => 99,
            ],
            [
                'condicao' => $questionario->nss_sociais?->comunicacao?->interacao_social == 1,
                'origem' => 21,
                'motivo' => 100,
            ],
            [
                'condicao' => $questionario->nss_sociais?->comunicacao?->apoio == 1,
                'origem' => 21,
                'motivo' => 101,
            ],
            [
                'condicao' => $questionario->nss_espiritual?->religiao == 1,
                'origem' => 22,
                'motivo' => 102,
            ],
        ];

        $prontuario = Prontuario::create([
            'questionario_id' => $questionario->id,
        ]);

        //Processando cada condição
        foreach ($condicoes as $condicao) {
            if ($condicao['condicao']) {
                // Buscar a origem e associá-la ao prontuário, se necessário
                $origem = Origem::find($condicao['origem']);
                $prontuario->origens()->syncWithoutDetaching([$origem->id]);

                // Buscar o motivo e associá-lo ao prontuário, se necessário
                $motivo = Motivo::find($condicao['motivo']);
                $prontuario->motivos()->syncWithoutDetaching([$motivo->id]);
            }
        }

        if ($questionario->nss_biologica?->integridade_cutanea) {
            foreach ($questionario->nss_biologica->integridade_cutanea as $analiseCutanea) {
                if ($analiseCutanea->borda_ferida?->id == 6) {
                    $prontuario->origens()->syncWithoutDetaching([16]);
                    $prontuario->motivos()->syncWithoutDetaching([72]);
                }

                if ($analiseCutanea->edema == 1) {
                    $prontuario->origens()->syncWithoutDetaching([16]);
                    $prontuario->motivos()->syncWithoutDetaching([73]);
                }

                if ($analiseCutanea->quantidade_exudato?->id == 3) {
                    $prontuario->origens()->syncWithoutDetaching([16]);
                    $prontuario->motivos()->syncWithoutDetaching([74]);
                }

                if ($analiseCutanea->quantidade_exudato?->id == 4) {
                    $prontuario->origens()->syncWithoutDetaching([16]);
                    $prontuario->motivos()->syncWithoutDetaching([75]);
                }

                if ($analiseCutanea->odor_exudato == 1) {
                    $prontuario->origens()->syncWithoutDetaching([16]);
                    $prontuario->motivos()->syncWithoutDetaching([76]);
                }

                if (in_array(optional($analiseCutanea->aspecto_exudato)->id, [2, 3, 4, 5, 6])) {
                    $mapaMotivos = [2 => 77, 3 => 78, 4 => 79, 5 => 80, 6 => 81];
                    $motivo = $mapaMotivos[$analiseCutanea->aspecto_exudato->id];
                    $prontuario->origens()->syncWithoutDetaching([16]);
                    $prontuario->motivos()->syncWithoutDetaching([$motivo]);
                }

                if (in_array(optional($analiseCutanea->tipo_tecido_ferida)->id, [3, 4])) {
                    $mapaMotivos = [3 => 82, 4 => 83];
                    $motivo = $mapaMotivos[$analiseCutanea->tipo_tecido_ferida->id];
                    $prontuario->origens()->syncWithoutDetaching([16]);
                    $prontuario->motivos()->syncWithoutDetaching([$motivo]);
                }

                if ($analiseCutanea->sinais_infeccao && $analiseCutanea->sinais_infeccao->isNotEmpty()) {
                    $prontuario->origens()->syncWithoutDetaching([16]);
                    $prontuario->motivos()->syncWithoutDetaching([84]);
                }
            }
        }
    }

    public function submitForm()
    {
        $this->validateStep();

        $regulacao_neuro = Regulacao_neuro::firstOrCreate([
            'orientado' => $this->orientado,
            'comportamento_regulacao_neuro_id' => $this->comportamento_regulacao_neuro_id,
        ]);

        $percepcao_sentido = Percepcao_sentido::firstOrCreate([
            'olho_direito' => $this->olho_direito,
            'olho_esquerdo' => $this->olho_esquerdo,
            'ouvido' => $this->ouvido,
            'analise_tato_id' => $this->analise_tato_id,
            'risco_queda' => $this->risco_queda,
        ]);

        $hidratacao = Hidratacao::firstOrCreate([
            'liquido_diario' => $this->liquido_diario,
            'tipo_pele_id' => $this->tipo_pele_id,
        ]);

        $nutricao = Nutricao::create([
            'alimento_consumo_id' => $this->alimento_consumo_id,
        ]);

        $sono = Sono::create([
            'horas_sono' => $this->horas_sono,
            'acorda_noite' => $this->acorda_noite,
            'qualidade_sono_id' => $this->qualidade_sono_id,
            'medicamentos_sono' => $this->medicamentos_sono,
        ]);

        $exercicio_fisico = Exercicio_fisico::firstOrCreate([
            'realiza' => $this->realiza,
            'frequencia_exercicio_id' => $this->frequencia_exercicio_id,
            'duracao' => $this->duracao,
        ]);

        $abrigo = Abrigo::firstOrCreate([
            'zona_moradia_id' => $this->zona_moradia_id,
            'luz_publica' => $this->luz_publica,
            'coleta_lixo' => $this->coleta_lixo,
            'agua_tratada' => $this->agua_tratada,
            'rede_esgoto_id' => $this->rede_esgoto_id,
            'animais_domesticos' => $this->animais_domesticos,
        ]);

        $regulacao_hormonal = Regulacao_hormonal::firstOrCreate([
            'altura' => $this->altura,
            'peso' => $this->peso,
            'circunferencia_abdnominal' => $this->circunferencia_abdnominal,
            'glicemia_capilar' => $this->glicemia_capilar,
            'jejum' => $this->jejum,
            'pos_prandial' => $this->pos_prandial,
        ]);

        $oxigenacao = Oxigenacao::firstOrCreate([
            'temp_enchimento_capilar' => $this->temp_enchimento_capilar,
            'frequencia_respiratoria' => $this->frequencia_respiratoria,
            'satO2' => $this->satO2,
        ]);

        $regulacao_termica = Regulacao_termica::firstOrCreate([
            'temperatura' => $this->temperatura,
        ]);

        $eliminacao = Eliminacao::firstOrCreate([
            'dor_urinar' => $this->dor_urinar,
            'incontinencia_urina' => $this->incontinencia_urina,
            'uso_laxante' => $this->uso_laxante,
            'uso_fraldas' => $this->uso_fraldas,
            'dor_eliminacoes' => $this->dor_eliminacoes,
            'incontinencia_eliminacao' => $this->incontinencia_eliminacao,
            'diarreia' => $this->diarreia,
            'constipacao' => $this->constipacao,
            'equipamento_externo' => $this->equipamento_externo,
        ]);

        $sexualidade = Sexualidade::create([
            'vida_sex_ativa' => $this->vida_sex_ativa,
        ]);

        $locomocao = Locomocao::create([
            'sapato_adequado' => $this->sapato_adequado,
            'sandalia_cicatrizacao' => $this->sandalia_cicatrizacao,
        ]);

        $regulacao_vascular = Regulacao_vascular::firstOrCreate([
            'pressao_arterial' => $this->pressao_arterial,
            'frequencia_cardiaca' => $this->frequencia_cardiaca,
            'psatp_direito' => $this->psatp_direito,
            'psap_direito' => $this->psap_direito,
            'psab_direito' => $this->psab_direito,
            'psatp_esquerdo' => $this->psatp_esquerdo,
            'psap_esquerdo' => $this->psap_esquerdo,
            'psab_esquerdo' => $this->psab_esquerdo,
        ]);

        $senso_percepcao = Senso_percepcao::create([
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
        ]);

        $cuidado_ferida = Cuidado_ferida::create([
            'desbridamento_id' => $this->desbridamento_id,
            'avaliacao_ferida_id' => $this->avaliacao_ferida_id,
            'aplicacao_laserterapia' => $this->aplicacao_laserterapia,
            'terapia_fotodinamica' => $this->terapia_fotodinamica,
        ]);

        $nss_biologicas = Nss_biologicas::create([
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
            'cuidado_ferida_id' => $cuidado_ferida->id,
        ]);

        $integridades_cutaneas = [];

        foreach (['direito', 'esquerdo'] as $lado) {
            if (!empty($this->dados[$lado])) {
                $integridade = Integridade_cutanea::create([
                    'lado' => $lado,
                    'nss_biologicas_id' => $nss_biologicas->id,
                    'comprimento' => $this->dados[$lado]['comprimento'] ?? null,
                    'largura' => $this->dados[$lado]['largura'] ?? null,
                    'regiao_pe_id' => $this->dados[$lado]['regiao_pe_id'] ?? null,
                    'localizacao_lesao_id' => $this->dados[$lado]['localizacao_lesao_id'] ?? null,
                    'lesao_amputacao' => $this->dados[$lado]['lesao_amputacao'] ?? null,
                    'bordas_ferida_id' => $this->dados[$lado]['bordas_ferida_id'] ?? null,
                    'edema' => $this->dados[$lado]['edema'] ?? null,
                    'quantidade_exudato_id' => $this->dados[$lado]['quantidade_exudato_id'] ?? null,
                    'odor_exudato' => $this->dados[$lado]['odor_exudato'] ?? null,
                    'aspecto_exudato_id' => $this->dados[$lado]['aspecto_exudato_id'] ?? null,
                    'tipo_tecido_ferida_id' => $this->dados[$lado]['tipo_tecido_ferida_id'] ?? null,
                    'profundidade_id' => $this->dados[$lado]['profundidade_id'] ?? null,
                    'pele_periferida_id' => $this->dados[$lado]['pele_periferida_id'] ?? null,
                    'dor' => $this->dados[$lado]['dor'] ?? null,
                ]);

                foreach ($this->sinais_infeccao_direito as $id) {
                    $integridade->sinaisInfeccaoDireito()->attach($id, ['lado' => 'direito']);
                }

                foreach ($this->sinais_infeccao_esquerdo as $id) {
                    $integridade->sinaisInfeccaoEsquerdo()->attach($id, ['lado' => 'esquerdo']);
                }
            }
        }

        $comunicacao = Comunicacao::create([
            'apoio' => $this->apoio,
            'interacao_social' => $this->interacao_social,
        ]);

        $cuidado = Cuidado::firstOrCreate([
            'acompanhado' => $this->acompanhado,
            'opnioes_de_si' => $this->opnioes_de_si,
            'auxiliador' => $this->auxiliador,
        ]);

        $aprendizagem = Aprendizagem::firstOrCreate([
            'monitoramento_glicemia_dia' => $this->monitoramento_glicemia_dia,
            'cuidado_pes' => $this->cuidado_pes,
            'uso_sapato' => $this->uso_sapato,
            'alimentacao' => $this->alimentacao,
            'regime_terapeutico' => $this->regime_terapeutico,
        ]);

        $nss_sociais = Nss_sociais::create([
            'aprendizagem_id' => $aprendizagem->id,
            'cuidado_id' => $cuidado->id,
            'comunicacao_id' => $comunicacao->id,
        ]);

        if ($this->e_religioso == 'nao') {
            $this->religiao = 'Nenhuma';
        }

        $nss_espirituais = Nss_espirituais::firstOrCreate([
            'religiao' => $this->religiao,
        ]);

        $path = $this->imagem_avaliacao_pe
            ? $this->imagem_avaliacao_pe->store('avaliacao_pe', 'public')
            : $this->imagem_avaliacao_pe_url;

        $this->questionario = Questionario::create([
            'paciente_id' => $this->idPacienteSelected,
            'user_id' => Auth::id(),
            'nss_biologicas_id' => $nss_biologicas->id,
            'nss_sociais_id' => $nss_sociais->id,
            'nss_espirituais_id' => $nss_espirituais->id,
            'impressoes' => $this->impressoes,
            'imagem_avaliacao_pe_url' => $path,
        ]);


        // Associações com tabelas pivot
        $this->sincronizarAssociacoes(
            $nss_sociais,
            $nutricao,
            $sono,
            $sexualidade,
            $locomocao,
            $senso_percepcao,
            $cuidado_ferida,
            $cuidado
        );
        $this->ColetarProntuario($this->questionario);

        session()->flash('message', 'Questionário criado com sucesso!');
        return redirect()->route('questionario.create-qualidade', ['id' => $this->questionario->id]);
    }


    public function sincronizarAssociacoes(
        $nss_sociais,
        $nutricao,
        $sono,
        $sexualidade,
        $locomocao,
        $senso_percepcao,
        $cuidado_ferida,
        $cuidado
    ) {
        $nss_sociais->recreacoes()->sync($this->recreacaos ?? []);
        $cuidado->emocionais()->sync($this->emocionals ?? []);
        $nutricao->refeicoes()->sync($this->refeicaos ?? []);
        $nutricao->restricoes_alimentar()->sync($this->restricaos ?? []);
        $sono->problemas_sono()->sync($this->problema_sonos ?? []);
        $sexualidade->disturbios_sexual()->sync($this->disturbio_sexuals ?? []);
        $locomocao->tipos_locomocao()->sync($this->tipo_locomocaos ?? []);
        $senso_percepcao->sintomas_percepcao()->sync($this->sintomas_percepcaos ?? []);
        $cuidado_ferida->limpezas_lesao()->sync($this->limpeza_lesaos ?? []);
        $cuidado_ferida->coberturas_ferida()->sync($this->coberturas ?? []);
    }
}
