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


    public $nss_sociais, $nss_biologicas, $nss_espirituais, $selectedPaciente, $IdselectedPaciente, $enfermeiro, $impressoes, $imagem_avaliacao_pe, $imagem_avaliacao_pe_url;

    public $sexo;

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
                $this->corIMC = 'text-yellow-500';
            } elseif ($this->imc >= 18.5 && $this->imc <= 24.9) {
                $this->classificacao = 'Normal ou eutrófico (Risco normal)';
                $this->corIMC = 'text-green-600';
            } elseif ($this->imc >= 25 && $this->imc <= 29.9) {
                $this->classificacao = 'Sobrepeso ou pré-obeso (Risco pouco elevado)';
                $this->corIMC = 'text-orange-400';
            } elseif ($this->imc >= 30 && $this->imc <= 34.9) {
                $this->classificacao = 'Obesidade Grau I (Risco elevado)';
                $this->corIMC = 'text-orange-600';
            } elseif ($this->imc >= 35 && $this->imc <= 39.9) {
                $this->classificacao = 'Obesidade Grau II (Risco muito elevado)';
                $this->corIMC = 'text-red-600';
            } else {
                $this->classificacao = 'Obesidade grave Grau III (Risco muitíssimo elevado)';
                $this->corIMC = 'text-red-800 font-bold';
            }
        } else {
            // Se a altura e o peso não estiverem preenchidos, gerar erros
            $this->addError('altura', 'Por favor, informe sua altura.');
            $this->addError('peso', 'Por favor, informe seu peso.');
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
        ])->findOrFail($questionarioId);

        $this->IdQuestionario = $this->questionario->id;
        $this->nss_biologicas = $this->questionario->nss_biologica;
        $this->nss_espirituais = $this->questionario->nss_espiritual;
        $this->nss_sociais = $this->questionario->nss_sociais;
        $this->selectedPaciente = $this->questionario->paciente;
        if ($this->selectedPaciente->sexo == 1) {
            $this->sexo = 'Feminino';
        } else {
            $this->sexo = 'Masculino';
        }
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

    public function nextStepSixth()
    {
        // $this->validateStep();
        $this->currentStep = 6;
    }

    public function backToSearch()
    {
        return redirect()->route('questionario.index');
    }
}
