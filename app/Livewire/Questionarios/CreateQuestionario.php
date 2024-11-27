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
use App\Models\Unidade_saude;
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
    public $idUnidadeSelected = null;

    protected $messages = [
        'imagem_avaliacao_pe.image' => 'O arquivo deve ser uma imagem.',
        'imagem_avaliacao_pe.max' => 'A imagem não pode ser maior que 1MB.',
    ];

    // Etapa 1 - Mostrar Paciente
    public function selectPaciente($pacienteId)
    {
        $this->selectedPaciente = Paciente::find($pacienteId);
        $this->idPacienteSelected = $pacienteId;
        $this->search = "";
    }

    public function selectUnidade($unidadeId)
    {
        $this->unidade_saude_id = Unidade_saude::find($unidadeId);
        $this->idUnidadeSelected = $unidadeId;
        $this->search = $this->unidade_saude_id->nome;
    }


    public $nss_sociais, $nss_biologicas, $nss_espirituais, $questionario;


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
    public $religiao = null, $e_religioso;
    public $unidade_saude_id = null, $impressoes;
    //Etapa 5 
    public $origem, $motivo, $diagnostico, $intervencao;


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


    public function render()
    {
        $pacientes = [];

        $unidades = [];


        if (strlen($this->search) >= 1) {
            $pacientes = Paciente::where('nome', 'like', '%' . $this->search . '%')
                ->orWhere('prontuario', 'like', '%' . $this->search . '%')
                ->limit(5)
                ->get();
        }
        if (strlen($this->search) >= 1) {
            $unidades = Unidade_saude::where('nome', 'like', '%' . $this->search . '%')
                ->limit(3)
                ->get();
        }


        return view('livewire.questionarios.create-questionario', [
            'pacientes' => $pacientes,
            'unidades' => $unidades,
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

    public function messages()
    {
        return [
            // Step 2
            'orientado.required' => 'O campo "Orientado" é obrigatório.',
            'orientado.boolean' => 'O campo "Orientado" deve ser verdadeiro ou falso.',
            'comportamento_regulacao_neuro_id.required' => 'O campo "Comportamento de Regulação Neuro" é obrigatório.',
            'comportamento_regulacao_neuro_id.exists' => 'O comportamento de regulação neuro selecionado não é válido.',

            'olho_direito.required' => 'O campo "Olho Direito" é obrigatório.',
            'olho_direito.boolean' => 'O campo "Olho Direito" deve ser verdadeiro ou falso.',
            'olho_esquerdo.required' => 'O campo "Olho Esquerdo" é obrigatório.',
            'olho_esquerdo.boolean' => 'O campo "Olho Esquerdo" deve ser verdadeiro ou falso.',
            'ouvido.required' => 'O campo "Ouvido" é obrigatório.',
            'ouvido.boolean' => 'O campo "Ouvido" deve ser verdadeiro ou falso.',
            'analise_tato_id.required' => 'O campo "Análise de Tato" é obrigatório.',
            'analise_tato_id.exists' => 'A análise de tato selecionada não é válida.',
            'risco_queda.required' => 'O campo "Risco de Queda" é obrigatório.',
            'risco_queda.boolean' => 'O campo "Risco de Queda" deve ser verdadeiro ou falso.',

            'liquido_diario.required' => 'O campo "Líquido Diário" é obrigatório.',
            'liquido_diario.numeric' => 'O campo "Líquido Diário" deve ser um número.',
            'liquido_diario.min' => 'O campo "Líquido Diário" deve ser um número maior ou igual a zero.',
            'tipo_pele_id.required' => 'O campo "Tipo de Pele" é obrigatório.',
            'tipo_pele_id.exists' => 'O tipo de pele selecionado não é válido.',

            'alimento_consumo_id.required' => 'O campo "Consumo de Alimento" é obrigatório.',
            'alimento_consumo_id.exists' => 'O consumo de alimento selecionado não é válido.',
            'refeicaos.array' => 'O campo "Refeições" deve ser uma lista.',
            'restricaos.array' => 'O campo "Restrições" deve ser uma lista.',

            'horas_sono.required' => 'O campo "Horas de Sono" é obrigatório.',
            'horas_sono.numeric' => 'O campo "Horas de Sono" deve ser um número.',
            'horas_sono.min' => 'O campo "Horas de Sono" deve ser maior ou igual a zero.',
            'acorda_noite.required' => 'O campo "Acorda à Noite" é obrigatório.',
            'acorda_noite.boolean' => 'O campo "Acorda à Noite" deve ser verdadeiro ou falso.',
            'qualidade_sono_id.required' => 'O campo "Qualidade do Sono" é obrigatório.',
            'qualidade_sono_id.exists' => 'A qualidade do sono selecionada não é válida.',
            'problema_sonos.array' => 'O campo "Problemas com o Sono" deve ser uma lista.',
            'medicamentos_sono.required' => 'O campo "Medicamentos para o Sono" é obrigatório.',
            'medicamentos_sono.string' => 'O campo "Medicamentos para o Sono" deve ser um texto.',
            'medicamentos_sono.max' => 'O campo "Medicamentos para o Sono" não pode exceder 255 caracteres.',

            'realiza.required' => 'O campo "Realiza Exercício" é obrigatório.',
            'realiza.boolean' => 'O campo "Realiza Exercício" deve ser verdadeiro ou falso.',
            'frequencia_exercicio_id.required' => 'O campo "Frequência de Exercício" é obrigatório.',
            'frequencia_exercicio_id.exists' => 'A frequência de exercício selecionada não é válida.',
            'duracao.required' => 'O campo "Duração" é obrigatório.',
            'duracao.numeric' => 'O campo "Duração" deve ser um número.',
            'duracao.min' => 'O campo "Duração" deve ser maior ou igual a zero.',

            'zona_moradia_id.required' => 'O campo "Zona de Moradia" é obrigatório.',
            'zona_moradia_id.exists' => 'A zona de moradia selecionada não é válida.',
            'luz_publica.required' => 'O campo "Luz Pública" é obrigatório.',
            'luz_publica.boolean' => 'O campo "Luz Pública" deve ser verdadeiro ou falso.',
            'coleta_lixo.required' => 'O campo "Coleta de Lixo" é obrigatório.',
            'coleta_lixo.boolean' => 'O campo "Coleta de Lixo" deve ser verdadeiro ou falso.',
            'agua_tratada.required' => 'O campo "Água Tratada" é obrigatório.',
            'agua_tratada.boolean' => 'O campo "Água Tratada" deve ser verdadeiro ou falso.',
            'rede_esgoto_id.required' => 'O campo "Rede de Esgoto" é obrigatório.',
            'rede_esgoto_id.exists' => 'A rede de esgoto selecionada não é válida.',
            'animais_domesticos.required' => 'O campo "Animais Domésticos" é obrigatório.',
            'animais_domesticos.boolean' => 'O campo "Animais Domésticos" deve ser verdadeiro ou falso.',

            'altura.required' => 'O campo "Altura" é obrigatório.',
            'altura.numeric' => 'O campo "Altura" deve ser um número.',
            'altura.min' => 'O campo "Altura" deve ser maior ou igual a zero.',
            'peso.required' => 'O campo "Peso" é obrigatório.',
            'peso.numeric' => 'O campo "Peso" deve ser um número.',
            'peso.min' => 'O campo "Peso" deve ser maior ou igual a zero.',
            'circunferencia_abdnominal.required' => 'O campo "Circunferência Abdominal" é obrigatório.',
            'circunferencia_abdnominal.numeric' => 'O campo "Circunferência Abdominal" deve ser um número.',
            'circunferencia_abdnominal.min' => 'O campo "Circunferência Abdominal" deve ser maior ou igual a zero.',
            'glicemia_capilar.required' => 'O campo "Glicemia Capilar" é obrigatório.',
            'glicemia_capilar.numeric' => 'O campo "Glicemia Capilar" deve ser um número.',
            'glicemia_capilar.min' => 'O campo "Glicemia Capilar" deve ser maior ou igual a zero.',
            'jejum.required' => 'O campo "Jejum" é obrigatório.',
            'jejum.boolean' => 'O campo "Jejum" deve ser verdadeiro ou falso.',
            'pos_prandial.required' => 'O campo "Pós-prandial" é obrigatório.',
            'pos_prandial.boolean' => 'O campo "Pós-prandial" deve ser verdadeiro ou falso.',

            'temp_enchimento_capilar.required' => 'O campo "Tempo de Enchimento Capilar" é obrigatório.',
            'temp_enchimento_capilar.numeric' => 'O campo "Tempo de Enchimento Capilar" deve ser um número.',
            'temp_enchimento_capilar.min' => 'O campo "Tempo de Enchimento Capilar" deve ser maior ou igual a zero.',
            'frequencia_respiratoria.required' => 'O campo "Frequência Respiratória" é obrigatório.',
            'frequencia_respiratoria.numeric' => 'O campo "Frequência Respiratória" deve ser um número.',
            'frequencia_respiratoria.min' => 'O campo "Frequência Respiratória" deve ser maior ou igual a zero.',
            'satO2.required' => 'O campo "Saturação de Oxigênio (SatO2)" é obrigatório.',
            'satO2.numeric' => 'O campo "Saturação de Oxigênio (SatO2)" deve ser um número.',
            'satO2.min' => 'O campo "Saturação de Oxigênio (SatO2)" deve ser maior ou igual a zero.',

            'temperatura.required' => 'O campo "Temperatura" é obrigatório.',
            'temperatura.numeric' => 'O campo "Temperatura" deve ser um número.',
            'temperatura.min' => 'O campo "Temperatura" deve ser maior ou igual a zero.',

            'dor_urinar.required' => 'O campo "Dor ao Urinar" é obrigatório.',
            'dor_urinar.boolean' => 'O campo "Dor ao Urinar" deve ser verdadeiro ou falso.',

            'incontinencia_urina.required' => 'O campo "Incontinência Urinária" é obrigatório.',
            'incontinencia_urina.boolean' => 'O campo "Incontinência Urinária" deve ser verdadeiro ou falso.',

            'uso_laxante.required' => 'O campo "Uso de Laxante" é obrigatório.',
            'uso_laxante.boolean' => 'O campo "Uso de Laxante" deve ser verdadeiro ou falso.',

            'uso_fraldas.required' => 'O campo "Uso de Fraldas" é obrigatório.',
            'uso_fraldas.boolean' => 'O campo "Uso de Fraldas" deve ser verdadeiro ou falso.',

            'dor_eliminacoes.required' => 'O campo "Dor nas Eliminações" é obrigatório.',
            'dor_eliminacoes.boolean' => 'O campo "Dor nas Eliminações" deve ser verdadeiro ou falso.',

            'incontinencia_eliminacao.required' => 'O campo "Incontinência nas Eliminações" é obrigatório.',
            'incontinencia_eliminacao.boolean' => 'O campo "Incontinência nas Eliminações" deve ser verdadeiro ou falso.',

            'constipacao.required' => 'O campo "Constipação" é obrigatório.',
            'constipacao.boolean' => 'O campo "Constipação" deve ser verdadeiro ou falso.',

            'diarreia.required' => 'O campo "Diarreia" é obrigatório.',
            'diarreia.boolean' => 'O campo "Diarreia" deve ser verdadeiro ou falso.',

            'equipamento_externo.required' => 'O campo "Equipamento Externo" é obrigatório.',
            'equipamento_externo.string' => 'O campo "Equipamento Externo" deve ser um texto.',
            'equipamento_externo.max' => 'O campo "Equipamento Externo" não pode exceder 255 caracteres.',

            'vida_sex_ativa.required' => 'O campo "Vida Sexual Ativa" é obrigatório.',
            'vida_sex_ativa.boolean' => 'O campo "Vida Sexual Ativa" deve ser verdadeiro ou falso.',

            'disturbio_sexuals.array' => 'O campo "Distúrbios Sexuais" deve ser uma lista.',

            'tipo_locomocaos.array' => 'O campo "Tipos de Locomoção" deve ser uma lista.',

            'sapato_adequado.required' => 'O campo "Sapato Adequado" é obrigatório.',
            'sapato_adequado.boolean' => 'O campo "Sapato Adequado" deve ser verdadeiro ou falso.',

            'sandalia_cicatrizacao.required' => 'O campo "Sandália de Cicatrização" é obrigatório.',
            'sandalia_cicatrizacao.boolean' => 'O campo "Sandália de Cicatrização" deve ser verdadeiro ou falso.',

            'pressao_arterial.required' => 'O campo "Pressão Arterial" é obrigatório.',
            'pressao_arterial.numeric' => 'O campo "Pressão Arterial" deve ser um número.',
            'pressao_arterial.min' => 'O campo "Pressão Arterial" deve ser maior ou igual a zero.',

            'frequencia_cardiaca.required' => 'O campo "Frequência Cardíaca" é obrigatório.',
            'frequencia_cardiaca.numeric' => 'O campo "Frequência Cardíaca" deve ser um número.',
            'frequencia_cardiaca.min' => 'O campo "Frequência Cardíaca" deve ser maior ou igual a zero.',

            'psatp_direito.required' => 'O campo "Pressão Sístole Ápice TP Direito" é obrigatório.',
            'psatp_direito.numeric' => 'O campo "Pressão Sístole Ápice TP Direito" deve ser um número.',
            'psatp_direito.min' => 'O campo "Pressão Sístole Ápice TP Direito" deve ser maior ou igual a zero.',

            'psap_direito.required' => 'O campo "Pressão Sístole Ápice Direito" é obrigatório.',
            'psap_direito.numeric' => 'O campo "Pressão Sístole Ápice Direito" deve ser um número.',
            'psap_direito.min' => 'O campo "Pressão Sístole Ápice Direito" deve ser maior ou igual a zero.',

            'psab_direito.required' => 'O campo "Pressão Sístole Ábice Direito" é obrigatório.',
            'psab_direito.numeric' => 'O campo "Pressão Sístole Ábice Direito" deve ser um número.',
            'psab_direito.min' => 'O campo "Pressão Sístole Ábice Direito" deve ser maior ou igual a zero.',

            'psatp_esquerdo.required' => 'O campo "Pressão Sístole Ápice TP Esquerdo" é obrigatório.',
            'psatp_esquerdo.numeric' => 'O campo "Pressão Sístole Ápice TP Esquerdo" deve ser um número.',
            'psatp_esquerdo.min' => 'O campo "Pressão Sístole Ápice TP Esquerdo" deve ser maior ou igual a zero.',

            'psap_esquerdo.required' => 'O campo "Pressão Sístole Ápice Esquerdo" é obrigatório.',
            'psap_esquerdo.numeric' => 'O campo "Pressão Sístole Ápice Esquerdo" deve ser um número.',
            'psap_esquerdo.min' => 'O campo "Pressão Sístole Ápice Esquerdo" deve ser maior ou igual a zero.',

            'psab_esquerdo.required' => 'O campo "Pressão Sístole Ábice Esquerdo" é obrigatório.',
            'psab_esquerdo.numeric' => 'O campo "Pressão Sístole Ábice Esquerdo" deve ser um número.',
            'psab_esquerdo.min' => 'O campo "Pressão Sístole Ábice Esquerdo" deve ser maior ou igual a zero.',

            'sintomas_percepcaos.array' => 'O campo "Sintomas de Percepção" deve ser uma lista.',

            'pe_neuropatico.required' => 'O campo "Pé Neuropático" é obrigatório.',
            'pe_neuropatico.boolean' => 'O campo "Pé Neuropático" deve ser verdadeiro ou falso.',

            'arco_desabado.required' => 'O campo "Arco Desabado" é obrigatório.',
            'arco_desabado.boolean' => 'O campo "Arco Desabado" deve ser verdadeiro ou falso.',

            'valgismo.required' => 'O campo "Valgismo" é obrigatório.',
            'valgismo.boolean' => 'O campo "Valgismo" deve ser verdadeiro ou falso.',

            'dedos_em_garra.required' => 'O campo "Dedos em Garra" é obrigatório.',
            'dedos_em_garra.boolean' => 'O campo "Dedos em Garra" deve ser verdadeiro ou falso.',

            'estado_unhas_id.required' => 'O campo "Estado das Unhas" é obrigatório.',
            'estado_unhas_id.exists' => 'O estado das unhas selecionado não é válido.',

            'corte_unhas.required' => 'O campo "Corte das Unhas" é obrigatório.',
            'corte_unhas.boolean' => 'O campo "Corte das Unhas" deve ser verdadeiro ou falso.',

            'fissuras.required' => 'O campo "Fissuras" é obrigatório.',
            'fissuras.boolean' => 'O campo "Fissuras" deve ser verdadeiro ou falso.',

            'calosidades.required' => 'O campo "Calosidades" é obrigatório.',
            'calosidades.boolean' => 'O campo "Calosidades" deve ser verdadeiro ou falso.',

            'micose.required' => 'O campo "Micose" é obrigatório.',
            'micose.boolean' => 'O campo "Micose" deve ser verdadeiro ou falso.',

            'percepcao_direito.required' => 'O campo "Percepção Direito" é obrigatório.',
            'percepcao_direito.boolean' => 'O campo "Percepção Direito" deve ser verdadeiro ou falso.',

            'percepcao_esquerdo.required' => 'O campo "Percepção Esquerdo" é obrigatório.',
            'percepcao_esquerdo.boolean' => 'O campo "Percepção Esquerdo" deve ser verdadeiro ou falso.',

            'sinais_infeccaos.array' => 'O campo "Sinais de Infecção" deve ser uma lista.',

            'comprimentoD.required' => 'O campo "Comprimento (Pé Direito)" é obrigatório.',
            'comprimentoD.numeric' => 'O campo "Comprimento (Pé Direito)" deve ser um número.',
            'comprimentoD.min' => 'O campo "Comprimento (Pé Direito)" deve ser maior ou igual a zero.',

            'larguraD.required' => 'O campo "Largura (Pé Direito)" é obrigatório.',
            'larguraD.numeric' => 'O campo "Largura (Pé Direito)" deve ser um número.',
            'larguraD.min' => 'O campo "Largura (Pé Direito)" deve ser maior ou igual a zero.',

            'regiao_pe_direito_id.required' => 'O campo "Região do Pé Direito" é obrigatório.',
            'regiao_pe_direito_id.exists' => 'A região do pé direito selecionada não é válida.',

            'localizacao_lesao_direito_id.required' => 'O campo "Localização da Lesão (Pé Direito)" é obrigatório.',
            'localizacao_lesao_direito_id.exists' => 'A localização da lesão no pé direito selecionada não é válida.',

            'lesao_amputacaoD.required' => 'O campo "Lesão ou Amputação (Pé Direito)" é obrigatório.',
            'lesao_amputacaoD.boolean' => 'O campo "Lesão ou Amputação (Pé Direito)" deve ser verdadeiro ou falso.',

            'comprimentoE.required' => 'O campo "Comprimento (Pé Esquerdo)" é obrigatório.',
            'comprimentoE.numeric' => 'O campo "Comprimento (Pé Esquerdo)" deve ser um número.',
            'comprimentoE.min' => 'O campo "Comprimento (Pé Esquerdo)" deve ser maior ou igual a zero.',

            'larguraE.required' => 'O campo "Largura (Pé Esquerdo)" é obrigatório.',
            'larguraE.numeric' => 'O campo "Largura (Pé Esquerdo)" deve ser um número.',
            'larguraE.min' => 'O campo "Largura (Pé Esquerdo)" deve ser maior ou igual a zero.',

            'regiao_pe_esquerdo_id.required' => 'O campo "Região do Pé Esquerdo" é obrigatório.',
            'regiao_pe_esquerdo_id.exists' => 'A região do pé esquerdo selecionada não é válida.',

            'localizacao_lesao_esquerdo_id.required' => 'O campo "Localização da Lesão (Pé Esquerdo)" é obrigatório.',
            'localizacao_lesao_esquerdo_id.exists' => 'A localização da lesão no pé esquerdo selecionada não é válida.',

            'lesao_amputacaoE.required' => 'O campo "Lesão ou Amputação (Pé Esquerdo)" é obrigatório.',
            'lesao_amputacaoE.boolean' => 'O campo "Lesão ou Amputação (Pé Esquerdo)" deve ser verdadeiro ou falso.',

            'bordas_ferida_id.required' => 'O campo "Bordas da Ferida" é obrigatório.',
            'bordas_ferida_id.exists' => 'As bordas da ferida selecionadas não são válidas.',

            'pele_periferida_id.required' => 'O campo "Pele ao Redor da Ferida" é obrigatório.',
            'pele_periferida_id.exists' => 'A pele ao redor da ferida selecionada não é válida.',

            'profundidade_id.required' => 'O campo "Profundidade" é obrigatório.',
            'profundidade_id.exists' => 'A profundidade selecionada não é válida.',

            'tipo_tecido_ferida_id.required' => 'O campo "Tipo de Tecido na Ferida" é obrigatório.',
            'tipo_tecido_ferida_id.exists' => 'O tipo de tecido na ferida selecionado não é válido.',

            'aspecto_exudato_id.required' => 'O campo "Aspecto do Exsudato" é obrigatório.',
            'aspecto_exudato_id.exists' => 'O aspecto do exsudato selecionado não é válido.',

            'quantidade_exudato_id.required' => 'O campo "Quantidade de Exsudato" é obrigatório.',
            'quantidade_exudato_id.exists' => 'A quantidade de exsudato selecionada não é válida.',

            'edema.required' => 'O campo "Edema" é obrigatório.',
            'edema.boolean' => 'O campo "Edema" deve ser verdadeiro ou falso.',

            'odor_exudato.required' => 'O campo "Odor do Exsudato" é obrigatório.',
            'odor_exudato.boolean' => 'O campo "Odor do Exsudato" deve ser verdadeiro ou falso.',

            'dor.required' => 'O campo "Dor" é obrigatório.',
            'dor.boolean' => 'O campo "Dor" deve ser verdadeiro ou falso.',

            'limpeza_lesaos.array' => 'O campo "Limpeza de Lesões" deve ser uma lista.',

            'coberturas.array' => 'O campo "Coberturas" deve ser uma lista.',

            'desbridamento_id.required' => 'O campo "Desbridamento" é obrigatório.',
            'desbridamento_id.exists' => 'O desbridamento selecionado não é válido.',

            'avaliacao_ferida_id.required' => 'O campo "Avaliação da Ferida" é obrigatório.',
            'avaliacao_ferida_id.exists' => 'A avaliação da ferida selecionada não é válida.',

            'aplicacao_laserterapia.required' => 'O campo "Aplicação de Laserterapia" é obrigatório.',
            'aplicacao_laserterapia.boolean' => 'O campo "Aplicação de Laserterapia" deve ser verdadeiro ou falso.',

            'terapia_fotodinamica.required' => 'O campo "Terapia Fotodinâmica" é obrigatório.',
            'terapia_fotodinamica.boolean' => 'O campo "Terapia Fotodinâmica" deve ser verdadeiro ou falso.',

            'imagem_avaliacao_pe.image' => 'O campo "Imagem de Avaliação do Pé" deve ser uma imagem.',
            'imagem_avaliacao_pe.max' => 'O campo "Imagem de Avaliação do Pé" não pode exceder 2MB.',

            'monitoramento_glicemia_dia.required' => 'O campo "Monitoramento de Glicemia por Dia" é obrigatório.',
            'monitoramento_glicemia_dia.integer' => 'O campo "Monitoramento de Glicemia por Dia" deve ser um número inteiro.',
            'monitoramento_glicemia_dia.min' => 'O campo "Monitoramento de Glicemia por Dia" deve ser maior ou igual a zero.',

            'cuidado_pes.required' => 'O campo "Cuidados com os Pés" é obrigatório.',
            'cuidado_pes.boolean' => 'O campo "Cuidados com os Pés" deve ser verdadeiro ou falso.',

            'uso_sapato.required' => 'O campo "Uso de Sapato" é obrigatório.',
            'uso_sapato.boolean' => 'O campo "Uso de Sapato" deve ser verdadeiro ou falso.',

            'alimentacao.required' => 'O campo "Alimentação" é obrigatório.',
            'alimentacao.boolean' => 'O campo "Alimentação" deve ser verdadeiro ou falso.',

            'regime_terapeutico.required' => 'O campo "Regime Terapêutico" é obrigatório.',
            'regime_terapeutico.boolean' => 'O campo "Regime Terapêutico" deve ser verdadeiro ou falso.',

            'recreacaos.array' => 'O campo "Recreações" deve ser uma lista.',

            'acompanhado.required' => 'O campo "Acompanhado" é obrigatório.',
            'acompanhado.boolean' => 'O campo "Acompanhado" deve ser verdadeiro ou falso.',

            'opnioes_de_si.required' => 'O campo "Opinião sobre Si" é obrigatório.',
            'opnioes_de_si.boolean' => 'O campo "Opinião sobre Si" deve ser verdadeiro ou falso.',

            'auxiliador.required' => 'O campo "Auxiliador" é obrigatório.',
            'auxiliador.string' => 'O campo "Auxiliador" deve ser um texto.',
            'auxiliador.max' => 'O campo "Auxiliador" não pode exceder 255 caracteres.',

            'emocionals.array' => 'O campo "Aspectos Emocionais" deve ser uma lista.',

            'apoio.required' => 'O campo "Apoio" é obrigatório.',
            'apoio.boolean' => 'O campo "Apoio" deve ser verdadeiro ou falso.',

            'interacao_social.required' => 'O campo "Interação Social" é obrigatório.',
            'interacao_social.boolean' => 'O campo "Interação Social" deve ser verdadeiro ou falso.',

            'religiao.string' => 'O campo "Religião" deve ser um texto.',
            'religiao.max' => 'O campo "Religião" não pode exceder 255 caracteres.',

            'idUnidadeSelected.required' => 'O campo "Unidade de Saúde" é obrigatório.',
            'idUnidadeSelected.exists' => 'A unidade de saúde selecionada não é válida.',

            'impressoes.required' => 'O campo "Impressões" é obrigatório.',
            'impressoes.string' => 'O campo "Impressões" deve ser um texto.',
        ];
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
                'religiao' => 'string|max:255',

                'idUnidadeSelected' => 'required|exists:unidade_saudes,id',

                'impressoes' => 'required|string',
            ]);
        }
    }
    public function ColetarProntuario($questionario)
    {
        $prontuario = Prontuario::Create(
            [
                'questionario_id' => $this->$questionario->id,
            ]
        );

        if (($questionario->paciente->renda_familiar) <= 2824) {
            $origem = Origem::Find(1);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(1);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->paciente->beneficio())) {
            $origem = Origem::Find(1);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(2);
            $prontuario->motivos()->attach($motivo->id);
        }

        if (($questionario->paciente->historico()->inicio_etilismo) == 0) {
            $origem = Origem::Find(2);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(3);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->paciente->historico()->inicio_tabagismo) == 0) {
            $origem = Origem::Find(2);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(4);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->regulacao_neuro()->comportamento_reg_neuro()->id == 2)) {
            $origem = Origem::Find(3);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(5);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->regulacao_neuro()->comportamento_reg_neuro()->id == 3)) {
            $origem = Origem::Find(3);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(6);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->percepcao_sentidos()->analise_tato()->percepcoes()->olho_direito == 1) || ($questionario->nss_biologica()->percepcao_sentidos()->analise_tato()->percepcoes()->olho_esquerdo == 1)) {
            $origem = Origem::Find(4);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(7);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->percepcao_sentidos()->risco_queda == 1)) {
            $origem = Origem::Find(4);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(8);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->percepcao_sentidos()->analise_tato()->id == 4)) {
            $origem = Origem::Find(4);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(9);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->percepcao_sentidos()->analise_tato()->id == 5)) {
            $origem = Origem::Find(4);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(10);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->percepcao_sentidos()->analise_tato()->id == 6)) {
            $origem = Origem::Find(4);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(11);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->percepcao_sentidos()->ouvido == 1)) {
            $origem = Origem::Find(4);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(12);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->nutricao()->alimento_consumo()->id == 3)) {
            $origem = Origem::Find(5);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(13);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->nutricao()->alimento_consumo()->id == 4)) {
            $origem = Origem::Find(5);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(14);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (!($this->restricaos == null)) {
            $origem = Origem::Find(5);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(103);
            $prontuario->motivos()->attach($motivo->id);
        }

        if (($questionario->nss_biologica()->sono()->qualidade_sono()->acorda_noite == 1)) {
            $origem = Origem::Find(6);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(15);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->sono()->qualidade_sono()->id == 3)) {
            $origem = Origem::Find(6);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(16);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->sono()->qualidade_sono()->id == 4)) {
            $origem = Origem::Find(6);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(17);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->sono()->problemas_sono())->id == 2) {
            $origem = Origem::Find(6);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(17);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->sono()->problemas_sono())->id == 3) {
            $origem = Origem::Find(6);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(18);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->sono()->problemas_sono())->id == 4) {
            $origem = Origem::Find(6);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(19);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->sono()->problemas_sono())->id == 5) {
            $origem = Origem::Find(6);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(20);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->sono()->problemas_sono())->id == 6) {
            $origem = Origem::Find(6);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(21);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->sono()->problemas_sono())->id == 7) {
            $origem = Origem::Find(6);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(22);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->exercicio_fisico()->frequencias_exercicio()->id == 1)) {
            $origem = Origem::Find(7);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(23);
            $prontuario->motivos()->attach($motivo->id);
        }

        if (($questionario->nss_biologica()->abrigo()->zona_moradia()->id == 3)) {
            $origem = Origem::Find(8);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(25);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->abrigo()->zona_moradia()->id == 4)) {
            $origem = Origem::Find(8);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(26);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->abrigo()->luz_publica == 0)) {
            $origem = Origem::Find(8);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(27);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->abrigo()->coleta_lixo == 0)) {
            $origem = Origem::Find(8);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(28);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->abrigo()->agua_tratada  == 0)) {
            $origem = Origem::Find(8);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(29);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->abrigo()->rede_esgoto()->id == 2)) {
            $origem = Origem::Find(8);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(30);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->abrigo()->rede_esgoto()->id == 3)) {
            $origem = Origem::Find(8);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(31);
            $prontuario->motivos()->attach($motivo->id);
        }
        $this->calcularIMC();
        if ($this->imc >= 25) {
            $origem = Origem::Find(9);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(32);
            $prontuario->motivos()->attach($motivo->id);
        }

        if (($questionario->nss_biologica()->regulacao_hormonal()->glicemia_capilar < 70)) {
            $origem = Origem::Find(9);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(33);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->regulacao_hormonal()->glicemia_capilar < 100)) {
            $origem = Origem::Find(9);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(34);
            $prontuario->motivos()->attach($motivo->id);
        }

        if (($questionario->nss_biologica()->oxigenacao()->temp_enchimento_capilar) < 2) {
            $origem = Origem::Find(10);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(35);
            $prontuario->motivos()->attach($motivo->id);
        }
        $this->calcularClassificacaoTemperatura();

        if (($this->temperatura >= 37.6)) {
            $origem = Origem::Find(11);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(36);
            $prontuario->motivos()->attach($motivo->id);
        }

        if (!($this->disturbio_sexuals == null)) {
            $origem = Origem::Find(12);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(37);
            $prontuario->motivos()->attach($motivo->id);
        }

        if (($questionario->nss_biologica()->locomocao()->tipos_locomocao()->id == 3)) {
            $origem = Origem::Find(13);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(38);
            $prontuario->motivos()->attach($motivo->id);
        }

        if (($questionario->nss_biologica()->locomocao()->tipos_locomocao()->id == 4)) {
            $origem = Origem::Find(13);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(39);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->locomocao()->tipos_locomocao()->id == 5)) {
            $origem = Origem::Find(13);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(40);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->locomocao()->tipos_locomocao()->id == 6)) {
            $origem = Origem::Find(13);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(41);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->locomocao()->tipos_locomocao()->id == 7)) {
            $origem = Origem::Find(13);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(42);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->locomocao()->tipos_locomocao()->id == 8)) {
            $origem = Origem::Find(13);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(43);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->locomocao()->tipos_locomocao()->id == 9)) {
            $origem = Origem::Find(13);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(44);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->locomocao()->tipos_locomocao()->id == 10)) {
            $origem = Origem::Find(13);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(45);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->locomocao()->tipos_locomocao()->id == 11)) {
            $origem = Origem::Find(13);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(46);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->locomocao()->tipos_locomocao()->id == 12)) {
            $origem = Origem::Find(13);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(47);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->locomocao()->tipos_locomocao()->id == 13)) {
            $origem = Origem::Find(13);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(48);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->locomocao()->tipos_locomocao()->id == 14)) {
            $origem = Origem::Find(13);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(49);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->regulacao_vascular()->pressao_arterial) == "120/80") {
            $origem = Origem::Find(14);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(50);
            $prontuario->motivos()->attach($motivo->id);
        }

        $paciente = null;
        $questionarioAnterior = null;

        $paciente = $questionario->paciente;

        $questionarioAnterior = $paciente->questionarios()
            ->where('id', '<', $questionario->id) // Pega apenas questionários mais antigos
            ->orderBy('id', 'desc') // Ordena do mais recente ao mais antigo (entre os antigos)
            ->first(); // Obtém o primeiro da lista (mais próximo ao atual)

        $psatp_atual_direito = $questionario->nss_biologica()->regulacao_vascular()->psatp_direito;
        $psatp_antigo_direito =  $questionarioAnterior->nss_biologica()->regulacao_vascular()->psatp_direito;
        $psatp_atual_esquerdo = $questionario->nss_biologica()->regulacao_vascular()->psatp_esquerdo;
        $psatp_antigo_esquerdo =  $questionarioAnterior->nss_biologica()->regulacao_vascular()->psatp_esquerdo;
        $psap_atual_direito = $questionario->nss_biologica()->regulacao_vascular()->psap_direito;
        $psap_antigo_direito =  $questionarioAnterior->nss_biologica()->regulacao_vascular()->psap_direito;
        $psap_atual_esquerdo = $questionario->nss_biologica()->regulacao_vascular()->psap_esquerdo;
        $psap_antigo_esquerdo =  $questionarioAnterior->nss_biologica()->regulacao_vascular()->psap_esquerdo;

        if (($psatp_atual_direito) == 0 || ($psatp_antigo_direito != $psatp_atual_direito) || ($psatp_atual_esquerdo) == 0 || ($psatp_antigo_esquerdo != $psatp_atual_esquerdo) || ($psap_atual_direito) == 0 || ($psap_antigo_direito != $psap_atual_direito) || ($psap_atual_esquerdo) == 0 || ($psap_antigo_esquerdo != $psap_atual_esquerdo)) {
            $origem = Origem::Find(14);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(51);
            $prontuario->motivos()->attach($motivo->id);
        }

        if (($questionario->nss_biologica()->senso_percepcao()->estado_unha()->id == 2)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(52);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->estado_unha()->id == 3)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(53);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->estado_unha()->id == 4)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(54);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->estado_unha()->id == 5)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(55);
            $prontuario->motivos()->attach($motivo->id);
        }
        // é false?
        if (($questionario->nss_biologica()->senso_percepcao()->corte_unhas == 0)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(56);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->sintomas_percepcao()->id == 3)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(57);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->sintomas_percepcao()->id == 4)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(58);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->sintomas_percepcao()->id == 5)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(59);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->sintomas_percepcao()->id == 8)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(60);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->sintomas_percepcao()->id == 9)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(61);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->sintomas_percepcao()->id == 12)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(62);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->sintomas_percepcao()->id == 6)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(63);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->calosidades == 1)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(64);
            $prontuario->motivos()->attach($motivo->id);
        }

        if (($questionario->nss_biologica()->senso_percepcao()->sintomas_percepcao()->id == 10)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(65);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->fissuras == 1)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(66);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->pe_neuropatico == 1)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(67);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->arco_desabado == 1)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(68);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->valgismo == 1)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(69);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->dedos_em_garra == 1)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(70);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->senso_percepcao()->percepcao_direito == 0) && ($questionario->nss_biologica()->senso_percepcao()->percepcao_esquerdo == 0)) {
            $origem = Origem::Find(15);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(71);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->integridade_cutanea()->borda_ferida()->id == 6)) {
            $origem = Origem::Find(16);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(72);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->integridade_cutanea()->edema == 1)) {
            $origem = Origem::Find(16);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(73);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->integridade_cutanea()->quantidade_exudato()->id == 3)) {
            $origem = Origem::Find(16);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(74);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->integridade_cutanea()->quantidade_exudato()->id == 4)) {
            $origem = Origem::Find(16);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(75);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->integridade_cutanea()->odor_exudato == 1)) {
            $origem = Origem::Find(16);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(76);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->integridade_cutanea()->aspecto_exudato()->id == 2)) {
            $origem = Origem::Find(16);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(77);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->integridade_cutanea()->aspecto_exudato()->id == 3)) {
            $origem = Origem::Find(16);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(78);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->integridade_cutanea()->aspecto_exudato()->id == 4)) {
            $origem = Origem::Find(16);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(79);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->integridade_cutanea()->aspecto_exudato()->id == 5)) {
            $origem = Origem::Find(16);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(80);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->integridade_cutanea()->aspecto_exudato()->id == 6)) {
            $origem = Origem::Find(16);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(81);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->integridade_cutanea()->tipo_tecido_ferida()->id == 3)) {
            $origem = Origem::Find(16);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(82);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_biologica()->integridade_cutanea()->tipo_tecido_ferida()->id == 4)) {
            $origem = Origem::Find(16);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(83);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (!($this->sinais_infeccaos == null)){
            $origem = Origem::Find(16);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(84);
            $prontuario->motivos()->attach($motivo->id);
        }
        if ($questionario->nss_biologica()->cuidado_ferida()) {
            $origem = Origem::Find(17);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(85);
            $prontuario->motivos()->attach($motivo->id);
        }
        //aprendizagem 
        if (($questionario->nss_sociais()->aprendizagem()->regime_terapeutico == 0)) {
            $origem = Origem::Find(18);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(86);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_sociais()->aprendizagem()->monitoramento_glicemia_dia == 0)) {
            $origem = Origem::Find(18);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(87);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_sociais()->aprendizagem()->monitoramento_glicemia_dia == 1)) {
            $origem = Origem::Find(18);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(88);
            $prontuario->motivos()->attach($motivo->id);
        }
        //marcou nenhuma ou só uma (???)
        if (($questionario->nss_sociais()->recreacoes()->id == 1)) {
            $origem = Origem::Find(19);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(89);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_sociais()->cuidado()->acompanhado == 1)) {
            $origem = Origem::Find(20);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(90);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_sociais()->cuidado()->emocionais()->id == 1)) {
            $origem = Origem::Find(20);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(91);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_sociais()->cuidado()->emocionais()->id == 2)) {
            $origem = Origem::Find(20);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(92);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_sociais()->cuidado()->emocionais()->id == 3)) {
            $origem = Origem::Find(20);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(93);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_sociais()->cuidado()->emocionais()->id == 4)) {
            $origem = Origem::Find(20);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(94);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_sociais()->cuidado()->emocionais()->id == 5)) {
            $origem = Origem::Find(20);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(95);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_sociais()->cuidado()->emocionais()->id == 6)) {
            $origem = Origem::Find(20);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(96);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_sociais()->cuidado()->opnioes_de_si == 1)) {
            $origem = Origem::Find(20);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(97);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_sociais()->comunicacao()->interacao_social == 0)) {
            $origem = Origem::Find(21);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(98);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_sociais()->comunicacao()->apoio == 0)) {
            $origem = Origem::Find(21);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(99);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_sociais()->comunicacao()->interacao_social == 1)) {
            $origem = Origem::Find(21);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(100);
            $prontuario->motivos()->attach($motivo->id);
        }
        if (($questionario->nss_sociais()->comunicacao()->apoio ==  1)) {
            $origem = Origem::Find(21);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(101);
            $prontuario->motivos()->attach($motivo->id);
        }
        //diferente de null??
        if (($questionario->nss_espiritual()->religiao == null)) {
            $origem = Origem::Find(22);
            $prontuario->origens()->attach($origem->id);

            $motivo = Motivo::Find(102);
            $prontuario->motivos()->attach($motivo->id);
        }
    }

    public function submitForm()
    {
        //$this->validateStep();
        $regulacao_neuro = Regulacao_neuro::firstOrCreate(
            [
                'orientado' => $this->orientado,
                'comportamento_regulacao_neuro_id' => $this->comportamento_regulacao_neuro_id,
            ]
        );

        $percepcao_sentido = Percepcao_sentido::firstOrCreate(
            [
                'olho_direito' => $this->olho_direito,
                'olho_esquerdo' => $this->olho_esquerdo,
                'ouvido' => $this->ouvido,
                'analise_tato_id' => $this->analise_tato_id,
                'risco_queda' => $this->risco_queda,
            ]
        );

        $hidratacao = Hidratacao::firstOrCreate(
            [
                'liquido_diario' => $this->liquido_diario,
                'tipo_pele_id' => $this->tipo_pele_id,
            ]
        );

        $nutricao = Nutricao::firstOrCreate(
            [
                'alimento_consumo_id' => $this->alimento_consumo_id,
            ]
        );

        $sono = Sono::firstOrCreate(
            [
                'horas_sono' => $this->horas_sono,
                'acorda_noite' => $this->acorda_noite,
                'qualidade_sono_id' => $this->qualidade_sono_id,
                'medicamentos_sono' => $this->medicamentos_sono,
            ]
        );

        $exercicio_fisico = Exercicio_fisico::firstOrCreate(
            [
                'realiza' => $this->realiza,
                'frequencia_exercicio_id' => $this->frequencia_exercicio_id,
                'duracao' => $this->duracao,
            ]
        );

        $abrigo = Abrigo::firstOrCreate(
            [
                'zona_moradia_id' => $this->zona_moradia_id,
                'luz_publica' => $this->luz_publica,
                'coleta_lixo' => $this->coleta_lixo,
                'agua_tratada' => $this->agua_tratada,
                'rede_esgoto_id' => $this->rede_esgoto_id,
                'animais_domesticos' => $this->animais_domesticos,
            ]
        );

        $regulacao_hormonal = Regulacao_hormonal::firstOrCreate(
            [
                'altura' => $this->altura,
                'peso' => $this->peso,
                'circunferencia_abdnominal' => $this->circunferencia_abdnominal,
                'glicemia_capilar' => $this->glicemia_capilar,
                'jejum' => $this->jejum,
                'pos_prandial' => $this->pos_prandial,
            ]
        );

        $oxigenacao = Oxigenacao::firstOrCreate(
            [
                'temp_enchimento_capilar' => $this->temp_enchimento_capilar,
                'frequencia_respiratoria' => $this->frequencia_respiratoria,
                'satO2' => $this->satO2,
            ]
        );


        $regulacao_termica = Regulacao_termica::firstOrcreate([
            'temperatura' => $this->temperatura,
        ]);


        $eliminacao = Eliminacao::firstOrcreate([
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


        $sexualidade = Sexualidade::firstOrcreate([
            'vida_sex_ativa' => $this->vida_sex_ativa,
        ]);


        $locomocao = Locomocao::firstOrcreate([
            'sapato_adequado' => $this->sapato_adequado,
            'sandalia_cicatrizacao' => $this->sandalia_cicatrizacao,
        ]);


        $regulacao_vascular = Regulacao_vascular::firstOrcreate([
            'pressao_arterial' => $this->pressao_arterial,
            'frequencia_cardiaca' => $this->frequencia_cardiaca,
            'psatp_direito' => $this->psatp_direito,
            'psap_direito' => $this->psap_direito,
            'psab_direito' => $this->psab_direito,
            'psatp_esquerdo' => $this->psatp_esquerdo,
            'psap_esquerdo' => $this->psap_esquerdo,
            'psab_esquerdo' => $this->psab_esquerdo,
        ]);

        $senso_percepcao = Senso_percepcao::firstOrcreate([
            'pe_neuropatico' => $this->pe_neuropatico,
            'arco_desabado' => $this->arco_desabado,
            'valgismo' => $this->valgismo,
            'dedos_em_garra' => $this->dedos_em_garra,
            'estado_unhas_id' => $this->estado_unhas_id, // ID do estado das unhas
            'corte_unhas' => $this->corte_unhas,
            'fissuras' => $this->fissuras,
            'calosidades' => $this->calosidades,
            'micose' => $this->micose,
            'teste_senso_percepcao_id' => $this->teste_senso_percepcao_id, // ID do teste de senso de percepção
            'percepcao_direito' => $this->percepcao_direito,
            'percepcao_esquerdo' => $this->percepcao_esquerdo,
        ]);

        $integridade_direito = Integridade_direito::firstOrcreate([
            'comprimento' => $this->comprimentoD,
            'largura' => $this->larguraD,
            'regiao_pe_id' => $this->regiao_pe_direito_id, // ID da região do pé
            'localizacao_lesao_id' => $this->localizacao_lesao_direito_id, // ID da localização da lesão
            'lesao_amputacao' => $this->lesao_amputacaoD,
        ]);


        $integridade_esquerdo = Integridade_esquerdo::firstOrcreate([
            'comprimento' => $this->comprimentoE,
            'largura' => $this->larguraE,
            'regiao_pe_id' => $this->regiao_pe_esquerdo_id, // ID da região do pé
            'localizacao_lesao_id' => $this->localizacao_lesao_esquerdo_id, // ID da localização da lesão
            'lesao_amputacao' => $this->lesao_amputacaoE,
        ]);


        $integridade_cutanea = Integridade_cutanea::firstOrcreate([
            'integridade_direito_id' => $integridade_direito->id, // ID da integridade do direito
            'integridade_esquerdo_id' => $integridade_esquerdo->id, // ID da integridade do esquerdo
            'bordas_ferida_id' => $this->bordas_ferida_id, // ID das bordas da ferida
            'edema' => $this->edema,
            'quantidade_exudato_id' => $this->quantidade_exudato_id, // ID da quantidade de exudato
            'odor_exudato' => $this->odor_exudato,
            'aspecto_exudato_id' => $this->aspecto_exudato_id, // ID do aspecto do exudato
            'tipo_tecido_ferida_id' => $this->tipo_tecido_ferida_id, // ID do tipo de tecido da ferida
            'profundidade_id' => $this->profundidade_id, // ID da profundidade
            'pele_periferida_id' => $this->pele_periferida_id, // ID da pele periférica
            'dor' => $this->dor,
        ]);

        $cuidado_ferida = Cuidado_ferida::firstOrcreate([
            'desbridamento_id' => $this->desbridamento_id, // ID do desbridamento
            'avaliacao_ferida_id' => $this->avaliacao_ferida_id, // ID da avaliação da ferida
            'aplicacao_laserterapia' => $this->aplicacao_laserterapia,
            'terapia_fotodinamica' => $this->terapia_fotodinamica,
        ]);

        $comunicacao = Comunicacao::firstOrcreate([
            'apoio' => $this->apoio,
            'interacao_social' => $this->interacao_social,
        ]);


        $cuidado = Cuidado::firstOrcreate([
            'acompanhado' => $this->acompanhado,
            'opnioes_de_si' => $this->opnioes_de_si, // Note que o nome da variável deve ser o mesmo definido na tabela
            'auxiliador' => $this->auxiliador,
        ]);


        $aprendizagem = Aprendizagem::firstOrcreate([
            'monitoramento_glicemia_dia' => $this->monitoramento_glicemia_dia,
            'cuidado_pes' => $this->cuidado_pes,
            'uso_sapato' => $this->uso_sapato,
            'alimentacao' => $this->alimentacao,
            'regime_terapeutico' => $this->regime_terapeutico,
        ]);

        $nss_biologicas = Nss_biologicas::firstOrcreate([
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
        ]);

        $nss_sociais = Nss_sociais::firstOrcreate([
            'aprendizagem_id' => $aprendizagem->id,
            'cuidado_id' => $cuidado->id,
            'comunicacao_id' => $comunicacao->id,
        ]);

        $nss_espirituais = Nss_espirituais::firstOrcreate([
            'religiao' => $this->religiao,
        ]);

        $path = $this->imagem_avaliacao_pe->store('avaliacao_pe', 'public');

        $questionario = Questionario::create([
            'paciente_id' => $this->idPacienteSelected,
            'user_id' => Auth::id(),
            'nss_biologicas_id' => $nss_biologicas->id,
            'nss_sociais_id' => $nss_sociais->id,
            'nss_espirituais_id' => $nss_espirituais->id,
            'unidade_saude_id' => $this->idUnidadeSelected,
            'impressoes' => $this->impressoes,
            'imagem_avaliacao_pe_url' => $path,
        ]);


        $questionario->save();


        //Associações List
        foreach ($this->recreacaos as $recreacaosId) {
            $nss_sociais->recreacoes()->attach($recreacaosId);
        }
        foreach ($this->emocionals as $emocionalId) {
            $cuidado->emocionais()->attach($emocionalId);
        }
        foreach ($this->refeicaos as $refeicaoId) {
            $nutricao->refeicoes()->attach($refeicaoId);
        }
        foreach ($this->restricaos as $restricaoId) {
            $nutricao->restricoes_alimentar()->attach($restricaoId);
        }
        foreach ($this->problema_sonos as $problema_sonoId) {
            $sono->problemas_sono()->attach($problema_sonoId);
        }
        foreach ($this->disturbio_sexuals as $disturbio_sexualId) {
            $sexualidade->disturbios_sexual()->attach($disturbio_sexualId);
        }
        foreach ($this->tipo_locomocaos as $tipo_locomocaoId) {
            $locomocao->tipos_locomocao()->attach($tipo_locomocaoId);
        }
        foreach ($this->sintomas_percepcaos as $sintomas_percepcaoId) {
            $senso_percepcao->sintomas_percepcao()->attach($sintomas_percepcaoId);
        }
        foreach ($this->limpeza_lesaos as $limpeza_lesaoId) {
            $cuidado_ferida->limpezas_lesao()->attach($limpeza_lesaoId);
        }
        foreach ($this->coberturas as $coberturaId) {
            $cuidado_ferida->coberturas_ferida()->attach($coberturaId);
        }
        foreach ($this->sinais_infeccaos as $sinais_infeccaoId) {
            $integridade_cutanea->sinais_infeccao()->attach($sinais_infeccaoId);
        }

        $this->ColetarProntuario($questionario);

        $this->dispatch('questionario-for-prontuario', questionarioId: $questionario->id);

        // Resetar o formulário ou redirecionar conforme necessário
        session()->flash('message', 'Questionário criado com sucesso!');
        return redirect()->route('prontuario.create');
    }
}
