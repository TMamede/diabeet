<?php

namespace App\Livewire\Pacientes;

use App\Models\Alergia;
use App\Models\Comorbidade;
use Livewire\Component;
use App\Models\Paciente;
use App\Models\Historico;
use App\Models\Medicamento;
use App\Models\Endereco;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
 
class CreatePaciente extends Component
{
    public $currentStep = 1;

    // Etapa 1: Dados Sociodemográficos
    public $cpf, $email, $nome, $prontuario, $data_nasc;
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
    public $nome_generico, $via, $dose;

    //Etapa 4: Resultados
    public $resultados = [];
    

    public function render()
    {

        return view('livewire.pacientes.create-paciente', [
            'tipoDiabetes' => \App\Models\Tipo_diabetes::all(),
            'orientacoesSexuais' => \App\Models\Orientacao_sexual::all(),
            'estadosCivis' => \App\Models\Estado_civil::all(),
            'etnias' => \App\Models\Etnia::all(),
            'enderecos' => \App\Models\Endereco::all(),
            'beneficios' => \App\Models\Beneficio::all(),
            'resides' => \App\Models\Reside::all(),
            'comorbidadesList' => $this->comorbidadesList,
            'alergiasList' => $this->alergiasList,
        ]);
    }
 
    public function mount()
    {
        $this->comorbidadesList = Comorbidade::all();
        $this->alergiasList = Alergia::all();
        $this->addMedicamento();
    }

    public function addMedicamento()
    {
        $this->medicamentos[] = [
            'nome_generico' => '',
            'via' => '',
            'dose' => '',
        ];
    }

    public function removeMedicamento($index)
    {
        unset($this->medicamentos[$index]);
        $this->medicamentos = array_values($this->medicamentos);
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

    public function validateStep() 
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'cpf' => ['required', 'digits:11', Rule::unique('pacientes', 'cpf')],
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
        } elseif ($this->currentStep == 2) {
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
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'medicamentos.*.nome_generico' => 'required|string|max:255',
                'medicamentos.*.via' => 'required|string|max:255',
                'medicamentos.*.dose' => 'required|string|max:255',
            ]);
        }
    }

    public function submitForm()
    {
        $this->validateStep();

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
            // 'historico_id' será definido após criar o histórico
        ]);

        // Criar o histórico
        $historico = Historico::create([
            'tipo_diabetes_id' => $this->tipo_diabetes_id,
            'cirurgia_motivo' => $this->cirurgia_motivo,
            'amputacao_onde' => $this->amputacao_onde,
            'amputacao_quando' => $this->amputacao_quando,
            'n_cigarros' => $this->n_cigarros,
            'inicio_tabagismo' => $this->inicio_tabagismo,
            'inicio_etilismo' => $this->inicio_etilismo,
        ]);

        // Atualizar o paciente com o histórico
        $paciente->historico_id = $historico->id;
        $paciente->save();

        // Associar medicamentos
        foreach ($this->medicamentos as $medicamentoData) {
            $medicamento = Medicamento::firstOrCreate([
                'nome_generico' => $medicamentoData['nome_generico'],
                'via' => $medicamentoData['via'],
                'dose' => $medicamentoData['dose'],
            ]);

            // Use syncWithoutDetaching para evitar a remoção de associações prévias
            $paciente->medicamentos()->syncWithoutDetaching([$medicamento->id]);
        }

        foreach ($this->comorbidades as $comorbidadeId) {
            $historico->comorbidades()->attach($comorbidadeId);
        }
    
        // Associar alergias ao histórico
        foreach ($this->alergias as $alergiaId) {
            $historico->alergias()->attach($alergiaId);
        }

        // Resetar o formulário ou redirecionar conforme necessário
        session()->flash('message', 'Paciente cadastrado com sucesso!');
        return redirect()->route('paciente.index');
    }
}
