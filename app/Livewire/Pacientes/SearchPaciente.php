<?php

namespace App\Livewire\Pacientes;

use App\Models\Alergia;
use App\Models\Comorbidade;
use App\Models\Medicamento;
use App\Models\Endereco;
use App\Models\Paciente;
use App\Models\Resultado;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Url;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithPagination;

class SearchPaciente extends Component
{
    use WithPagination;

    // Etapa 1: Dados Sociodemográficos
    public $IdPaciente, $cpf, $email, $nome, $prontuario, $data_nasc;
    public $orientacao_sexual_id, $estado_civil_id, $etnia_id;
    public $endereco_id, $rua, $numero, $cep, $bairro, $cidade, $uf;
    public $ocupacao, $renda_familiar, $beneficio_id, $reside_id, $num_pss_casa;

    // Etapa 2: Histórico do Paciente
    public $tipo_diabetes_id, $cirurgia_motivo, $amputacao_onde, $amputacao_quando;
    public $n_cigarros, $inicio_tabagismo, $inicio_etilismo;
    public $comorbidades = []; // Nova variável para comorbidades
    public $alergias = []; // Nova variável para alergias
    public $comorbidadesList = [];
    public $alergiasList = [];

    // Etapa 3: Medicamentos
    public $medicamentos = [];
    public $nome_generico, $via_id, $dose;

    // Etapa 4: Resultados
    public $resultados = [];
    public $texto_resultado;

    public function mount()
    {
        $this->addMedicamento();
        $this->addResultado();
    }



    #[Url(history: true)]
    public $search = '';
    #[Url()]
    public $perPage = 10;
    #[Url(history: true)]
    public $sortBy = 'created_at';
    #[Url(history: true)]
    public $sortDir = 'DESC';

    public $currentStep = 1;
    public $paciente = " ";

    public function SelectedPaciente($pacienteId)
    {
        $paciente = Paciente::find($pacienteId);

        if ($paciente) {
            $this->IdPaciente = $paciente->id;
            $this->cpf = $paciente->cpf;
            $this->email = $paciente->email;
            $this->nome = $paciente->nome;
            $this->prontuario = $paciente->prontuario;
            $this->data_nasc = $paciente->data_nasc;
            $this->orientacao_sexual_id = $paciente->orientacao_sexual_id;
            $this->estado_civil_id = $paciente->estado_civil_id;
            $this->etnia_id = $paciente->etnia_id;
            $this->endereco_id = $paciente->endereco_id;
            $endereco = Endereco::find($paciente->endereco_id);
            if ($endereco) {
                $this->rua = $endereco->rua;
                $this->numero = $endereco->numero;
                $this->cep = $endereco->cep;
                $this->bairro = $endereco->bairro;
                $this->cidade = $endereco->cidade;
                $this->uf = $endereco->uf;
            }
            $this->ocupacao = $paciente->ocupacao;
            $this->renda_familiar = $paciente->renda_familiar;
            $this->beneficio_id = $paciente->beneficio_id;
            $this->reside_id = $paciente->reside_id;
            $this->num_pss_casa = $paciente->num_pss_casa;
            if ($paciente->historico) {
                $this->tipo_diabetes_id = $paciente->historico->tipo_diabetes_id;
                $this->cirurgia_motivo = $paciente->historico->cirurgia_motivo;
                $this->amputacao_onde = $paciente->historico->amputacao_onde;
                $this->amputacao_quando = $paciente->historico->amputacao_quando;
                $this->n_cigarros = $paciente->historico->n_cigarros;
                $this->inicio_tabagismo = $paciente->historico->inicio_tabagismo;
                $this->inicio_etilismo = $paciente->historico->inicio_etilismo;
                $this->comorbidadesList = Comorbidade::all();
                $this->alergiasList = Alergia::all();
                $this->comorbidades = $paciente->historico->comorbidades->pluck('id')->toArray(); // IDs das comorbidades
                $this->alergias = $paciente->historico->alergias->pluck('id')->toArray();
            }
            $this->medicamentos = $paciente->medicamentos()->get()->toArray();
            $this->resultados = $paciente->resultados()->get()->toArray();
        }
    }

    public function validateStep()
    {
        if ($this->currentStep == 2) {
            $this->validate([
                'cpf' => ['required', 'digits:11'],
                'email' => ['required', 'email'],
                'nome' => 'required|string|max:255',
                'prontuario' => 'required|string|max:255',
                'data_nasc' => 'required|date',
                'orientacao_sexual_id' => 'required|exists:orientacao_sexuals,id',
                'estado_civil_id' => 'required|exists:estado_civils,id',
                'etnia_id' => 'required|exists:etnias,id',
                'rua' => 'required|string|max:255',
                'numero' => 'required|integer',
                'cep' => 'required|string|max:255',
                'bairro' => 'required|string|max:255',
                'cidade' => 'required|string|max:255',
                'uf' => 'required|string|max:255',
                'ocupacao' => 'required|string|max:255',
                'renda_familiar' => 'required|numeric',
                'beneficio_id' => 'required|exists:beneficios,id',
                'reside_id' => 'required|exists:resides,id',
                'num_pss_casa' => 'required|integer|min:0',
            ]);
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'tipo_diabetes_id' => 'required|exists:tipo_diabetes,id',
                'cirurgia_motivo' => 'nullable|string|max:255',
                'amputacao_onde' => 'nullable|string|max:255',
                'amputacao_quando' => 'nullable|date',
                'n_cigarros' => 'nullable|integer|min:0',
                'inicio_tabagismo' => 'nullable|date',
                'inicio_etilismo' => 'nullable|date',
                'comorbidades' => 'nullable|array',
                'alergias' => 'nullable|array',
            ]);
        } elseif ($this->currentStep == 4) {
            $this->validate([
                'medicamentos.*.nome_generico' => 'required|string|max:255',
                'medicamentos.*.via_id' => 'required|exists:vias,id',
                'medicamentos.*.dose' => 'required|string|max:255',
            ]);
        } elseif ($this->currentStep == 5) {
            $this->validate([
                'resultados.*.texto_resultado' => 'required|string',
            ]);
        }
    }



    public function nextStepAndSelectPaciente($pacienteId)
    {
        $this->nextStep();
        $this->SelectedPaciente($pacienteId);
    }
    public function nextStepAndValidate()
    {
        //$this->validateStep();
        $this->nextStep();
    }
    public function nextStep()
    {
        $this->currentStep++;
    }

    public function nextStepFirst()
    {
        //$this->validateStep();
        $this->currentStep = 1;
    }
    public function nextStepSecond()
    {
        $this->currentStep = 2;
    }
    public function nextStepThird()
    {
        $this->currentStep = 3;
    }
    public function nextStepFourth()
    {
        $this->currentStep = 4;
    }

    public function nextStepFifth()
    {
        $this->currentStep = 5;
    }

    public function updatedSearch()
    {
        $this->resetPage();
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
        $this->medicamentos[] = ['nome_generico' => '', 'via_id' => '', 'dose' => ''];
    }

    public function addResultado()
    {
        $this->resultados[] = ['texto_resultado' => ''];
    }

    public function removeMedicamento($index, $IdPaciente)
    {
        // Pegue o ID do medicamento que você quer remover
        $medicamento = $this->medicamentos[$index];

        // Se já estiver salvo no banco de dados, remova o relacionamento
        if (isset($medicamento['id'])) {
            $paciente = Paciente::find($IdPaciente);

            // Verifique se o paciente existe antes de tentar remover
            if ($paciente) {
                $paciente->medicamentos()->detach($medicamento['id']);
            }
        }

        // Remova do array em memória do Livewire
        unset($this->medicamentos[$index]);
        $this->medicamentos = array_values($this->medicamentos); // Reindexa o array
    }

    public function removeResultado($index, $IdPaciente)
    {
        // Pegue o resultado que você quer remover
        $resultado = $this->resultados[$index];

        // Se o resultado já estiver salvo no banco de dados, remova-o
        if (isset($resultado['id'])) {
            // Tente encontrar o resultado no banco de dados
            $resultadoModel = Resultado::find($resultado['id']);

            // Verifique se o resultado existe antes de tentar remover
            if ($resultadoModel) {
                $resultadoModel->delete();
            }
        }

        // Remova do array em memória do Livewire
        unset($this->resultados[$index]);
        $this->resultados = array_values($this->resultados); // Reindexa o array
    }

    public function setSortBy($sortByField)
    {
        if ($this->sortBy === $sortByField) {
            $this->sortDir = ($this->sortDir == "ASC") ? 'DESC' : "ASC";
            return;
        }
        $this->sortBy = $sortByField;
        $this->sortDir = 'DESC';
    }

    public function render()
    {
        return view(
            'livewire.pacientes.search-paciente',
            [
                'tipoDiabetes' => \App\Models\Tipo_diabetes::all(),
                'orientacoesSexuais' => \App\Models\Orientacao_sexual::all(),
                'estadosCivis' => \App\Models\Estado_civil::all(),
                'etnias' => \App\Models\Etnia::all(),
                'enderecos' => \App\Models\Endereco::all(),
                'beneficios' => \App\Models\Beneficio::all(),
                'resides' => \App\Models\Reside::all(),
                'vias' => \App\Models\Via::all(),
                'comorbidadesList' => $this->comorbidadesList,
                'alergiasList' => $this->alergiasList,
                'pacientes' => Paciente::search($this->search)
                    ->where('user_id', Auth::id()) // Filtra pelos pacientes do usuário autenticado
                    ->when($this->sortBy, function ($query) {
                        if ($this->sortBy === 'user_name') {
                            $query->join('users', 'pacientes.user_id', '=', 'users.id')
                                ->orderBy('users.name', $this->sortDir);
                        } else {
                            $query->orderBy($this->sortBy, $this->sortDir);
                        }
                    })
                    ->orderBy($this->sortBy, $this->sortDir)
                    ->paginate($this->perPage),
            ]
        );
    }

    public function updatePaciente($pacienteId)
    {
        $this->validateStep();

        // Localiza o paciente existente
        $paciente = Paciente::find($pacienteId);

        // Atualiza o endereço ou cria um novo, se necessário
        $endereco = Endereco::where('rua', $this->rua)
            ->where('numero', $this->numero)
            ->where('cep', $this->cep)
            ->where('bairro', $this->bairro)
            ->where('cidade', $this->cidade)
            ->where('uf', $this->uf)
            ->first();

        if (!$endereco) {
            // Se o endereço não existir, cria um novo
            $endereco = Endereco::create([
                'rua' => $this->rua,
                'numero' => $this->numero,
                'cep' => $this->cep,
                'bairro' => $this->bairro,
                'cidade' => $this->cidade,
                'uf' => $this->uf,
            ]);
        }

        // Atualiza os dados do paciente
        $paciente->update([
            'cpf' => $this->cpf,
            'email' => $this->email,
            'nome' => $this->nome,
            'prontuario' => $this->prontuario,
            'data_nasc' => $this->data_nasc,
            'orientacao_sexual_id' => $this->orientacao_sexual_id,
            'estado_civil_id' => $this->estado_civil_id,
            'etnia_id' => $this->etnia_id,
            'endereco_id' => $endereco->id,
            'ocupacao' => $this->ocupacao,
            'renda_familiar' => $this->renda_familiar,
            'beneficio_id' => $this->beneficio_id,
            'reside_id' => $this->reside_id,
            'num_pss_casa' => $this->num_pss_casa,
        ]);

        // Atualiza o histórico do paciente
        if ($paciente->historico) {
            $paciente->historico->update([
                'tipo_diabetes_id' => $this->tipo_diabetes_id,
                'cirurgia_motivo' => $this->cirurgia_motivo,
                'amputacao_onde' => $this->amputacao_onde,
                'amputacao_quando' => $this->amputacao_quando,
                'n_cigarros' => $this->n_cigarros,
                'inicio_tabagismo' => $this->inicio_tabagismo,
                'inicio_etilismo' => $this->inicio_etilismo,
            ]);
        }

        // Sincroniza comorbidades e alergias
        $paciente->historico->comorbidades()->sync($this->comorbidades);
        $paciente->historico->alergias()->sync($this->alergias);

        // Atualiza ou cria os medicamentos
        foreach ($this->medicamentos as $medicamentoData) {
            $medicamento = Medicamento::updateOrCreate(
                [
                    'nome_generico' => $medicamentoData['nome_generico'],
                    'via_id' => $medicamentoData['via_id'],
                    'dose' => $medicamentoData['dose'],
                ]
            );

            // Atualiza os medicamentos associados ao paciente
            $paciente->medicamentos()->syncWithoutDetaching([$medicamento->id]);
        }

        // Atualiza ou cria os resultados
        foreach ($this->resultados as $resultadoData) {
            // Atualiza ou cria o resultado associado ao paciente
            $resultado = Resultado::updateOrCreate(
                [
                    'id' => isset($resultadoData['id']) ? $resultadoData['id'] : null, // Se houver um ID, ele atualiza o resultado, caso contrário cria um novo
                ],
                [
                    'texto_resultado' => $resultadoData['texto_resultado'],
                    'paciente_id' => $pacienteId, // Vincula o resultado ao paciente
                ]
            );
        }

        
    }
}
