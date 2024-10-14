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
use App\Models\Nss_biologicas;
use App\Models\Nss_espirituais;
use App\Models\Nss_sociais;
use App\Models\Nutricao;
use App\Models\Oxigenacao;
use App\Models\Paciente;
use App\Models\Percepcao_sentido;
use App\Models\Problema_sono;
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


class CreateQuestionario extends Component
{




    public $currentStep = 1;
    public $selectedOption = null;
    public $search = "";
    public $selectedPaciente = null;


    // Etapa 1 - Mostrar Paciente
    public function selectPaciente($pacienteId)
    {
        $this->selectedPaciente = Paciente::find($pacienteId);
        $this->search = "";
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
    public $corte_unhas, $fissuras, $calosidades, $micose, $teste_senso_percepcaos = null, $percepcao_direito, $percepcao_esquerdo;
    public $edema, $comprimentoD, $comprimentoE, $larguraD, $larguraE, $lesao_amputacaoD, $lesao_amputacaoE, $odor_exudato, $dor, $bordas_ferida_id, $pele_periferida_id, $profundidade_id, $tipo_tecido_ferida_id, $aspecto_exudato_id, $quantidade_exudato_id;
    public $integridade_cutanea, $integridade_direito, $integridade_esquerdo, $regiao_pe_direito_id, $localizacao_lesao_direito_id, $regiao_pe_esquerdo_id, $localizacao_lesao_esquerdo_id;
    public $desbridamento_id, $avaliacao_ferida_id, $aplicacao_laserterapia, $terapia_fotodinamica;
    public $cuidado_ferida, $coberturas = [], $coberturasList = [], $limpeza_lesaos = [], $limpezaLesaosList = [], $sinais_infeccaos = [], $sinaisInfeccaoList = [];
    public $regiao_pe_id;
    //Etapa 3 - Necessidades Sociais
    public $aprendizagem, $monitoramento_glicemia_dia, $cuidado_pes, $uso_sapato, $alimentacao, $regime_terapeutico;
    public $recreacaos = [], $recreacaosList = [];
    public $cuidado, $acompanhado, $opnioes_de_si, $auxiliador, $emocionals = [], $emocionalsList = [];
    public $comunicacao, $apoio, $interacao_Social;


    //Etapa 4 - Necessidades Espirituais e Finalização
    public $religiao;
    public $unidade_saude, $nome_unidade, $endereco_unidade, $impressoes;


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
        $this->teste_senso_percepcaos = $option;
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


    public function submitForm()
    {


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
                'Luz_publica' => $this->luz_publica,
                'Coleta_lixo' => $this->coleta_lixo,
                'Agua_tratada' => $this->agua_tratada,
                'rede_esgoto_id' => $this->rede_esgoto_id,
                'Animais_domesticos' => $this->animais_domesticos,
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


        $regulacao_termica = Regulacao_termica::create([
            'temperatura' => $this->temperatura,
            'tipo_temperatura_id' => $this->tipo_temperatura_id,
        ]);


        $eliminacao = Eliminacao::create([
            'dor_urinar' => $this->dor_urinar,
            'incontinencia_urina' => $this->incontinencia_urina,
            'uso_laxante' => $this->uso_laxante,
            'uso_fraldas' => $this->uso_fraldas,
            'dor_eliminacoes' => $this->dor_eliminacoes,
            'incontinencia_eliminacao' => $this->incontinencia_eliminacao,
            'diarreia' => $this->diarreia,
            'equipamento_externo' => $this->equipamento_externo,
        ]);


        $sexualidade = Sexualidade::create([
            'vida_sex_ativa' => $this->vida_sex_ativa,
        ]);


        $locomocao = Locomocao::create([
            'sapato_adequado' => $this->sapato_adequado,
            'sandalia_cicatrizacao' => $this->sandalia_cicatrizacao,
        ]);


        $regulacao_vascular = Regulacao_vascular::create([
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
            'estado_unhas_id' => $this->estado_unhas_id, // ID do estado das unhas
            'corte_unhas' => $this->corte_unhas,
            'fissuras' => $this->fissuras,
            'calosidades' => $this->calosidades,
            'micose' => $this->micose,
            'teste_senso_percepcao_id' => $this->teste_senso_percepcao_id, // ID do teste de senso de percepção
            'percepcao_direito' => $this->percepcao_direito,
            'percepcao_esquerdo' => $this->percepcao_esquerdo,
        ]);


        $integridade_direito = Integridade_direito::create([
            'comprimento' => $this->comprimentoD,
            'largura' => $this->larguraD,
            'regiao_pe_id' => $this->regiao_pe_direito_id, // ID da região do pé
            'localizacao_lesao_id' => $this->localizacao_lesao_direito_id, // ID da localização da lesão
            'lesao_amputacao' => $this->lesao_amputacaoD,
        ]);


        $integridade_esquerdo = Integridade_esquerdo::create([
            'comprimento' => $this->comprimentoE,
            'largura' => $this->larguraE,
            'regiao_pe_id' => $this->regiao_pe_esquerdo_id, // ID da região do pé
            'localizacao_lesao_id' => $this->localizacao_lesao_esquerdo_id, // ID da localização da lesão
            'lesao_amputacao' => $this->lesao_amputacaoE,
        ]);


        $integridade_cutanea = Integridade_cutanea::create([
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


        $cuidado_ferida = Cuidado_ferida::create([
            'desbridamento_id' => $this->desbridamento_id, // ID do desbridamento
            'avaliacao_ferida_id' => $this->avaliacao_ferida_id, // ID da avaliação da ferida
            'aplicacao_laserterapia' => $this->aplicacao_laserterapia,
            'terapia_fotodinamica' => $this->terapia_fotodinamica,
        ]);


        $comunicacao = Comunicacao::create([
            'apoio' => $this->apoio,
            'interacao_social' => $this->interacao_social,
        ]);


        $cuidado = Cuidado::create([
            'acompanhado' => $this->acompanhado,
            'emocional_id' => $this->emocional_id, // Usando a referência da tabela emocional
            'opiniao_de_si' => $this->opiniao_de_si, // Note que o nome da variável deve ser o mesmo definido na tabela
            'auxiliador' => $this->auxiliador,
        ]);


        $aprendizagem = Aprendizagem::create([
            'monitoramento_glicemia_dia' => $this->monitoramento_glicemia_dia,
            'cuidado_pes' => $this->cuidado_pes,
            'uso_sapato' => $this->uso_sapato,
            'alimentacao' => $this->alimentacao,
            'regime_terapeutico' => $this->regime_terapeutico,
        ]);


        $unidade_saude = Unidade_saude::create([
            'nome' => $this->nome_unidade,
            'endereco' => $this->endereco_unidade,
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
            'integridade_cutanea_id' => $integridade_cutanea->id,
            'cuidado_ferida_id' => $cuidado_ferida->id,
        ]);
       
        $nss_sociais = Nss_sociais::create([
            'aprendizagem_id' => $aprendizagem->id,
            'cuidado_id' => $cuidado->id,
            'comunicacao_id' => $comunicacao->id,
        ]);
       
        $nss_espirituais = Nss_espirituais::create([
            'religiao' => $this->religiao,
        ]);
       
        $questionario = Questionario::create([
            'paciente_id' => $this->selectedPaciente,
            'user_id' => Auth::id(),
            'unidade_saude_id' => $unidade_saude->id,
            'nss_biologicas_id' => $nss_biologicas->id, // Corrigido
            'nss_sociais_id' => $nss_sociais->id,     // Corrigido
            'nss_espirituais_id' => $nss_espirituais->id, // Corrigido
            'impressoes' => $this->impressoes,
        ]);


        $questionario->save();


        //Associações List
        foreach ($this->recreacaos as $recreacaosId) {
            $nss_sociais->recreacoes()->attach($recreacaosId);
        }
        foreach ($this->emocionals as $emocionalId) {
            $nss_sociais->cuidado->emocional()->attach($emocionalId);
        }
        foreach ($this->refeicaos as $refeicaoId) {
            $nss_biologicas->nutricao->refeicoes()->attach($refeicaoId);
        }
        foreach ($this->restricaos as $restricaoId) {
            $nss_biologicas->nutricao->restricoes_alimentar()->attach($restricaoId);
        }
        foreach ($this->problema_sonos as $problema_sonoId) {
            $nss_biologicas->sono->problemas_sono()->attach($problema_sonoId);
        }
        foreach ($this->disturbio_sexuals as $disturbio_sexualId) {
            $nss_biologicas->sexualidade->disturbios_sexual()->attach($disturbio_sexualId);
        }
        foreach ($this->tipo_locomocaos as $tipo_locomocaoId) {
            $nss_biologicas->locomocao->tipos_locomocao()->attach($tipo_locomocaoId);
        }
        foreach ($this->sintomas_percepcaos as $sintomas_percepcaoId) {
            $nss_biologicas->senso_percepcao->sintomas_percepcao()->attach($sintomas_percepcaoId);
        }
        foreach ($this->limpeza_lesaos as $limpeza_lesaoId) {
            $nss_biologicas->cuidado_ferida->limpezas_lesao()->attach($limpeza_lesaoId);
        }
        foreach ($this->coberturas as $coberturaId) {
            $nss_biologicas->cuidado_ferida->coberturas_ferida()->attach($coberturaId);
        }
        foreach ($this->sinais_infeccaos as $sinais_infeccaoId) {
            $nss_biologicas->integridade_cutanea->sinais_infeccao()->attach($sinais_infeccaoId);
        }


        // Resetar o formulário ou redirecionar conforme necessário
        session()->flash('message', 'Questionário criado com sucesso!');
        return redirect()->route('questionario.index');
    }
}
