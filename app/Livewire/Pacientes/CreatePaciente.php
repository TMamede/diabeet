<?php

namespace App\Livewire\Pacientes;

use App\Models\Alergia;
use App\Models\Comorbidade;
use Livewire\Component;
use App\Models\Paciente;
use App\Models\Historico;
use App\Models\Medicamento;
use App\Models\Endereco;
use App\Models\Resultado;
use App\Models\Unidade_saude;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class CreatePaciente extends Component
{
    public $currentStep = 1;
    public $search = "";

    // Etapa 1: Dados Sociodemográficos
    public $cpf, $email, $nome, $prontuario, $data_nasc, $sexo;
    public $orientacao_sexual_id, $estado_civil_id, $etnia_id;
    public $endereco_id, $rua, $numero, $cep, $bairro, $cidade, $uf;
    public $ocupacao, $renda_familiar, $beneficio_id, $reside_id, $num_pss_casa;

    // Etapa 2: Histórico do Paciente
    public $tipo_diabetes_id, $tempo_diagnostico, $cirurgia_motivo, $realizou_amputacao = null, $amputacao_onde = null, $amputacao_quando = null;
    public $tabagista, $n_cigarros = null, $inicio_tabagismo = null, $etilista, $inicio_etilismo = null;
    public $comorbidades = []; // Nova variável para comorbidades
    public $outras_comorbidades = null;
    public $alergias = []; // Nova variável para alergias
    public $comorbidadesList = [];
    public $alergiasList = [];
    public $medicamento_alergia = null;
    public $alimento_alergia = null;

    // Etapa 3: Medicamentos
    public $medicamentos = [];
    public $nome_generico, $via_id, $horario_descricao, $dose;

    //Etapa 4: Resultados
    public $resultados = [];
    public $texto_resultado;
    public $data_exame;

    //Etapa 5: Unidade de Saude
    public $unidade, $ruaU, $bairroU, $numeroU, $cidadeU, $ufU, $telefoneU, $idUnidadeSelected = null;


    public function selectUnidade($unidadeId)
    {
        $this->unidade = Unidade_saude::find($unidadeId);
        $this->idUnidadeSelected = $unidadeId;
        $this->ruaU = $this->unidade->endereco->rua;
        $this->bairroU = $this->unidade->endereco->bairro;
        $this->numeroU = $this->unidade->endereco->numero;
        $this->cidadeU = $this->unidade->endereco->cidade;
        $this->ufU = $this->unidade->endereco->uf;
        $this->telefoneU = $this->unidade->telefone;
        $this->search = $this->unidade->ubs;
    }

    public function render()
    {

        $unidades = [];

        if (strlen(trim($this->search)) >= 1) {
            $search = trim($this->search);

            $unidades = Unidade_saude::query()
                ->where(function ($query) use ($search) {

                    $query->whereRaw(
                        'unaccent(ubs) ILIKE unaccent(?)',
                        [$search . '%']
                    );
                    $query->orWhereRaw(
                        'unaccent(ubs) ILIKE unaccent(?)',
                        ['% ' . $search . '%']
                    );
                    if (strlen($search) >= 4) {
                        $query->orWhereRaw(
                            'similarity(unaccent(ubs), unaccent(?)) > 0.3',
                            [$search]
                        );
                    }
                })
                ->orderByRaw(
                    'CASE
                WHEN unaccent(ubs) ILIKE unaccent(?) THEN 1
                WHEN unaccent(ubs) ILIKE unaccent(?) THEN 2
                ELSE 3
             END',
                    [
                        $search . '%',
                        '% ' . $search . '%'
                    ]
                )
                ->limit(3)
                ->get();
        }

        return view('livewire.pacientes.create-paciente', [
            'unidades' => $unidades,
            'tipoDiabetes' => \App\Models\Tipo_diabetes::all(),
            'orientacoesSexuais' => \App\Models\Orientacao_sexual::all(),
            'estadosCivis' => \App\Models\Estado_civil::all(),
            'etnias' => \App\Models\Etnia::all(),
            'enderecos' => \App\Models\Endereco::all(),
            'beneficios' => \App\Models\Beneficio::all(),
            'resides' => \App\Models\Reside::all(),
            'vias' => \App\Models\Via::all(),
            'unidadesSaude' => \App\Models\Unidade_saude::all(),
            'comorbidadesList' => $this->comorbidadesList,
            'alergiasList' => $this->alergiasList,
        ]);
    }

    public function mount()
    {
        $this->comorbidadesList = Comorbidade::all();
        $this->alergiasList = Alergia::all();
        $this->addMedicamento();
        $this->addResultado();
    }

    public function buscarEndereco()
    {
        // Confere se o CEP tem 8 dígitos
        if (strlen($this->cep) === 8) {
            $cacheKey = 'cep_' . $this->cep;

            // Tenta pegar o endereço do cache
            $data = Cache::remember($cacheKey, 3600, function () {
                $response = Http::get("https://viacep.com.br/ws/{$this->cep}/json/");
                return $response->json();
            });

            // Checa se houve erro na resposta da API
            if (isset($data['erro'])) {
                $this->resetEndereco();
                session()->flash('message', 'CEP inválido.');
            } else {
                // Preenche os campos de endereço com os dados retornados
                $this->rua = $data['logradouro'] ?? '';
                $this->bairro = $data['bairro'] ?? '';
                $this->cidade = $data['localidade'] ?? '';
                $this->uf = $data['uf'] ?? '';
            }
        } else {
            $this->resetEndereco();
        }
    }

    public function resetEndereco()
    {
        $this->rua = '';
        $this->bairro = '';
        $this->cidade = '';
        $this->uf = '';
    }

    public function addMedicamento()
    {
        $this->medicamentos[] = [
            'nome_generico' => '',
            'via_id' => '',
            'horario_descricao' => '',
            'dose' => '',
        ];
    }

    public function addResultado()
    {
        $this->resultados[] = [
            'texto_resultado' => '',
            'data_exame' => '',
        ];
    }

    public function removeMedicamento($index)
    {
        unset($this->medicamentos[$index]);
        $this->medicamentos = array_values($this->medicamentos);
    }

    public function removeResultado($index)
    {
        unset($this->resultados[$index]);
        $this->resultados = array_values($this->resultados);
    }

    public function nextStep()
    {
        $this->validateStep();

        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function messages()
    {
        return [
            // Step 1
            'cpf.required' => 'O CPF é obrigatório.',
            'cpf.digits' => 'O CPF deve ter exatamente 11 dígitos.',
            'cpf.unique' => 'Este CPF já está cadastrado.',

            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Informe um endereço de email válido.',
            'email.unique' => 'Este e-mail já está cadastrado.',

            'nome.required' => 'O nome é obrigatório.',

            'prontuario.required' => 'O prontuário é obrigatório.',

            'data_nasc.required' => 'A data de nascimento é obrigatória.',
            'data_nasc.date' => 'Informe uma data válida.',

            'sexo.required' => 'O sexo do paciente é obrigatório',

            'orientacao_sexual_id.required' => 'O campo orientação sexual é obrigatório.',
            'orientacao_sexual_id.exists' => 'A orientação sexual selecionada é inválida.',

            'estado_civil_id.required' => 'O estado civil é obrigatório.',
            'estado_civil_id.exists' => 'O estado civil selecionado é inválido.',

            'etnia_id.required' => 'A etnia é obrigatória.',
            'etnia_id.exists' => 'A etnia selecionada é inválida.',

            'cep.required' => 'O CEP é obrigatório.',
            'cep.digits' => 'O CEP deve ter exatamente 8 dígitos.',

            'rua.required' => 'A rua é obrigatória.',

            'numero.required' => 'O número é obrigatório.',

            'bairro.required' => 'O bairro é obrigatório.',


            'cidade.required' => 'A cidade é obrigatória.',

            'uf.required' => 'O estado (UF) é obrigatório.',
            'uf.max' => 'O estado (UF) deve ter exatamente 2 caracteres.',

            'ocupacao.required' => 'A ocupação é obrigatória.',

            'renda_familiar.required' => 'A renda familiar é obrigatória.',
            'renda_familiar.numeric' => 'A renda familiar deve ser um valor numérico.',

            'beneficio_id.required' => 'O benefício é obrigatório.',
            'beneficio_id.exists' => 'O benefício selecionado é inválido.',

            'reside_id.required' => 'O campo residência é obrigatório.',
            'reside_id.exists' => 'A residência selecionada é inválida.',

            'num_pss_casa.required' => 'O número de pessoas na casa é obrigatório.',
            'num_pss_casa.integer' => 'O número de pessoas deve ser um número inteiro.',
            'num_pss_casa.min' => 'O número de pessoas na casa deve ser pelo menos 1.',

            // Step 2
            'tipo_diabetes_id.required' => 'O tipo de diabetes é obrigatório.',
            'tipo_diabetes_id.exists' => 'O tipo de diabetes selecionado é inválido.',
            'tempo_diagnostico.required' => 'O tempo de diagnóstico é obrigatório.',
            'tempo_diagnostico.integer' => 'O tempo de diagnóstico deve ser um número inteiro.',
            'cirurgia_motivo.max' => 'O motivo da cirurgia não pode ter mais que 255 caracteres.',
            'amputacao_onde.max' => 'O campo "onde foi a amputação" não pode ter mais que 255 caracteres.',
            'amputacao_quando.date' => 'Informe uma data válida para a amputação.',
            'n_cigarros.integer' => 'O número de cigarros deve ser um número inteiro.',
            'n_cigarros.min' => 'O número de cigarros deve ser pelo menos 0.',
            'inicio_tabagismo.integer' => 'Informe a idade (em anos) de início do tabagismo.',
            'inicio_tabagismo.min' => 'A idade de início do tabagismo deve ser pelo menos 0.',
            'inicio_tabagismo.max' => 'Informe uma idade válida para o início do tabagismo.',
            'inicio_etilismo.integer' => 'Informe a idade (em anos) de início do etilismo.',
            'inicio_etilismo.min' => 'A idade de início do etilismo deve ser pelo menos 0.',
            'inicio_etilismo.max' => 'Informe uma idade válida para o início do etilismo.',
            'outras_comorbidades.max' => 'O campo de outras comorbidades não pode ter mais que 1000 caracteres.',
            'comorbidades.array' => 'As comorbidades devem ser uma lista.',
            'alergias.array' => 'As alergias devem ser uma lista.',

            // Step 3
            'medicamentos.*.nome_generico.required' => 'O nome genérico do medicamento é obrigatório.',
            'medicamentos.*.nome_generico.max' => 'O nome genérico do medicamento não pode ter mais que 255 caracteres.',
            'medicamentos.*.via_id.required' => 'A via de administração do medicamento é obrigatória.',
            'medicamentos.*.via_id.exists' => 'A via de administração selecionada é inválida.',
            'medicamentos.*.horario_descricao.required' => 'O horário/frequência de administração do medicamento é obrigatório.',
            'medicamentos.*.horario_descricao.max' => 'O horário/frequência do medicamento não pode ter mais que 255 caracteres.',
            'medicamentos.*.dose.required' => 'A dose do medicamento é obrigatória.',
            'medicamentos.*.dose.max' => 'A dose do medicamento não pode ter mais que 255 caracteres.',

            // Step 4
            'resultados.*.texto_resultado.string' => 'O resultado deve ser um texto válido.',
            'data_exame.date' => 'Informe uma data válida.',

            // Step 5
            'idUnidadeSelected.required' => 'O campo "Unidade de Saúde" é obrigatório.',
            'idUnidadeSelected.exists' => 'A unidade de saúde selecionada não é válida.',
        ];
    }

    public function validateStep()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'cpf' => ['required', 'digits:11', Rule::unique('pacientes', 'cpf')],
                'email' => ['required', 'email', Rule::unique('pacientes', 'email')],
                'nome' => 'required|string|max:255|no_badwords',
                'prontuario' => 'required|string|max:255',
                'data_nasc' => 'required|date',
                'sexo' => 'required',
                'orientacao_sexual_id' => 'required|exists:orientacao_sexuals,id',
                'estado_civil_id' => 'required|exists:estado_civils,id',
                'etnia_id' => 'required|exists:etnias,id',
                'cep' => 'required|digits:8',
                'rua' => 'required|string|max:255',
                'numero' => 'required|string|max:255|no_badwords',
                'bairro' => 'required|string|max:255|no_badwords',
                'cidade' => 'required|string|max:255|no_badwords',
                'uf' => 'required|string|max:2|no_badwords',
                'ocupacao' => 'required|string|max:255|no_badwords',
                'renda_familiar' => 'required|numeric',
                'beneficio_id' => 'required|exists:beneficios,id',
                'reside_id' => 'required|exists:resides,id',
                'num_pss_casa' => 'required|integer|min:1',
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'tipo_diabetes_id' => 'required|exists:tipo_diabetes,id',
                'tempo_diagnostico' => 'required|integer',
                'cirurgia_motivo' => 'nullable|string|max:255|no_badwords',
                'amputacao_onde' => 'nullable|string|max:255|no_badwords',
                'amputacao_quando' => 'nullable|date',
                'n_cigarros' => 'nullable|integer|min:0',
                'inicio_tabagismo' => 'nullable|integer|min:0|max:120',
                'inicio_etilismo' => 'nullable|integer|min:0|max:120',
                'outras_comorbidades' => 'nullable|string|max:1000|no_badwords',
                'medicamento_alergia' => 'nullable|string|max:255|no_badwords',
                'alimento_alergia' => 'nullable|string|max:255|no_badwords',
                'comorbidades' => 'nullable|array',
                'alergias' => 'nullable|array',
            ]);
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'medicamentos.*.nome_generico' => 'required|string|max:255|no_badwords',
                'medicamentos.*.via_id' => 'required|exists:vias,id',
                'medicamentos.*.horario_descricao' => 'required|string|max:255|no_badwords',
                'medicamentos.*.dose' => 'required|string|max:255|no_badwords',
            ]);
        } elseif ($this->currentStep == 4) {
            $this->validate([
                'resultados.*.texto_resultado' => 'nullable|string|no_badwords',
                'resultados.*.data_exame' => 'nullable|date',
            ]);
        } elseif ($this->currentStep == 5) {
            $this->validate([
                'idUnidadeSelected' => 'required|exists:unidade_saudes,id',
            ]);
        }
    }

    public function submitForm()
    {
        $this->validateStep();
        DB::beginTransaction();
        try {
            $endereco = Endereco::where('rua', $this->rua)
                ->where('numero', $this->numero)
                ->where('cep', $this->cep)
                ->where('bairro', $this->bairro)
                ->where('cidade', $this->cidade)
                ->where('uf', $this->uf)
                ->first();

            if (!$endereco) {
                // Address does not exist, create new address
                $endereco = Endereco::create([
                    'rua' => $this->rua,
                    'numero' => $this->numero,
                    'cep' => $this->cep,
                    'bairro' => $this->bairro,
                    'cidade' => $this->cidade,
                    'uf' => $this->uf,
                ]);
            }

            // Criar o paciente
            $paciente = Paciente::create([
                'cpf' => $this->cpf,
                'email' => $this->email,
                'nome' => $this->nome,
                'prontuario' => $this->prontuario,
                'data_nasc' => $this->data_nasc,
                'sexo' => $this->sexo,
                'orientacao_sexual_id' => $this->orientacao_sexual_id,
                'estado_civil_id' => $this->estado_civil_id,
                'etnia_id' => $this->etnia_id,
                'endereco_id' => $endereco->id,
                'ocupacao' => $this->ocupacao,
                'renda_familiar' => $this->renda_familiar,
                'beneficio_id' => $this->beneficio_id,
                'reside_id' => $this->reside_id,
                'num_pss_casa' => $this->num_pss_casa,
                'user_id' => Auth::id(),
                'unidade_saude_id' => $this->idUnidadeSelected,
                // 'historico_id' será definido após criar o histórico
            ]);


            if (is_null($this->amputacao_onde) || trim($this->amputacao_onde) === '') {
                $this->amputacao_onde = 'Não realizou';
            }
            if (is_null($this->n_cigarros) || trim($this->n_cigarros) === '') {
                $this->n_cigarros = '0';
            }

            // Criar o histórico
            $historico = Historico::create([
                'tipo_diabetes_id' => $this->tipo_diabetes_id,
                'tempo_diagnostico' => $this->tempo_diagnostico,
                'cirurgia_motivo' => $this->cirurgia_motivo,
                'amputacao_onde' => $this->amputacao_onde,
                'amputacao_quando' => $this->amputacao_quando,
                'n_cigarros' => $this->n_cigarros,
                'inicio_tabagismo' => $this->inicio_tabagismo,
                'inicio_etilismo' => $this->inicio_etilismo,
                'outras_comorbidades' => $this->outras_comorbidades,
                'medicamento_alergia' => $this->medicamento_alergia,
                'alimento_alergia' => $this->alimento_alergia,
            ]);

            // Atualizar o paciente com o histórico
            $paciente->historico_id = $historico->id;
            $paciente->save();

            // Associar medicamentos
            foreach ($this->medicamentos as $medicamentoData) {

                $nome = trim($medicamentoData['nome_generico'] ?? '');
                $via = $medicamentoData['via_id'] ?? null;
                $horarioDescricao = trim($medicamentoData['horario_descricao'] ?? '');
                $dose = trim($medicamentoData['dose'] ?? '');

                $medicamento = Medicamento::firstOrCreate([
                    'nome_generico' => $nome,
                    'via_id' => $via,
                    'horario_descricao' => $horarioDescricao,
                    'dose' => $dose,
                ]);

                $paciente->medicamentos()
                    ->syncWithoutDetaching([$medicamento->id]);
            }

            // Associar resultados
            foreach ($this->resultados as $index => $resultadoData) {

                $texto = trim($resultadoData['texto_resultado'] ?? '');
                $data = $resultadoData['data_exame'] ?? null;

                // Os dois vazios = não informou resultado, então não cria nada
                if ($texto === '' && empty($data)) {
                    continue;
                }

                // Informou o resultado, mas não informou a data
                if ($texto !== '' && empty($data)) {
                    $this->addError(
                        "resultados.$index.data_exame",
                        'Informe a data do exame.'
                    );

                    DB::rollBack();
                    return;
                }


                Resultado::create([
                    'texto_resultado' => $texto,
                    'data_exame' => $data,
                    'paciente_id' => $paciente->id,
                ]);
            }

            foreach ($this->comorbidades as $comorbidadeId) {
                $historico->comorbidades()->attach($comorbidadeId);
            }

            // Associar alergias ao histórico
            foreach ($this->alergias as $alergiaId) {
                $historico->alergias()->attach($alergiaId);
            }
            DB::commit();
            // Resetar o formulário ou redirecionar conforme necessário
            session()->flash('message', 'Paciente cadastrado com sucesso!');
            return redirect()->route('paciente.index');
        } catch (\Throwable $e) {

            DB::rollBack();

            report($e);

            throw $e;
        }
    }
}
