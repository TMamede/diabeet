<?php

namespace App\Livewire\Questionarios;

use App\Models\AlimenatacaoE;
use App\Models\AlimenatacaoG;
use App\Models\Questionario;
use App\Models\AtividadeFisica;
use App\Models\Cuidado_pes;
use App\Models\Medicacao;
use App\Models\Monitor;
use App\Models\QuestionarioAutoCuidado;
use App\Models\Tabagismo;
use Livewire\Component;

class CreateQuestionarioAutocuidado extends Component
{
    // Dados públicos vinculados ao formulário
    public $alimentacaoE, $alimentacaoG, $atividade, $monitor, $cuidado, $medicacao, $tabagismo;
    public $dieta, $orientacao;
    public $frutas, $gorduras, $doces;
    public $realizou, $especifico;
    public $avaliou, $recomendado;
    public $pes, $sapatos, $dedos;
    public $medicamentos, $injecoes, $comprimidos;
    public $fumou, $num_cigarros, $quando_fumou;
    public $questionario, $questionarioAutocuidado;

    // Método chamado quando o componente for montado
    public function mount(int $id)
    {
        $this->questionario = Questionario::findOrFail($id);
    }

    // Função render para carregar o componente
    public function render()
    {
        return view('livewire.questionarios.create-questionario-autocuidado', [
            'dataFumos' => \App\Models\Data_fumo::all(), // Carrega os dados do fumou
        ])->layout('layouts.app');
    }

    // Função de validação centralizada
    private function validarRequisicoes(): void
    {
        $this->validate([
            // Alimentação Geral
            'dieta' => ['required', 'integer', 'between:0,7'],
            'orientacao' => ['required', 'integer', 'between:0,7'],

            // Alimentação Específica
            'frutas' => ['required', 'integer', 'between:0,7'],
            'gorduras' => ['required', 'integer', 'between:0,7'],
            'doces' => ['required', 'integer', 'between:0,7'],

            // Atividade Física
            'realizou' => ['required', 'integer', 'between:0,7'],
            'especifico' => ['required', 'integer', 'between:0,7'],

            // Monitoramento da Glicemia
            'avaliou' => ['required', 'integer', 'between:0,7'],
            'recomendado' => ['required', 'integer', 'between:0,7'],

            // Cuidado com os Pés
            'pes' => ['required', 'integer', 'between:0,7'],
            'sapatos' => ['required', 'integer', 'between:0,7'],
            'dedos' => ['required', 'integer', 'between:0,7'],

            // Medicamento
            'medicamentos' => ['required', 'integer', 'between:0,7'],
            'injecoes' => ['required', 'integer', 'between:0,7'],
            'comprimidos' => ['required', 'integer', 'between:0,7'],

            // Tabagismo
            'fumou' => ['required', 'boolean'],
            'num_cigarros' => ['nullable', 'integer', 'min:0'],
            'quando_fumou' => ['nullable', 'integer', 'exists:data_fumos,id'],

            // Validação do Questionário
            'questionario.id' => ['required', 'exists:questionarios,id'],
        ]);
    }

    // Função para salvar os dados do questionário de autocuidado
    public function SalvarCuidado()
    {
        // Chama a validação
        $this->validarRequisicoes();

        // Criação ou atualização dos dados no banco de dados
        $alimentacaoG = AlimenatacaoG::firstOrCreate([
            'dieta' => $this->dieta,
            'orientacao' => $this->orientacao,
        ]);

        $alimentacaoE = AlimenatacaoE::firstOrCreate([
            'frutas' => $this->frutas,
            'gordura' => $this->gorduras,
            'doces' => $this->doces,
        ]);

        $atividade = AtividadeFisica::firstOrCreate([
            'realizou' => $this->realizou,
            'especifico' => $this->especifico,
        ]);

        $monitor = Monitor::firstOrCreate([
            'avaliou' => $this->avaliou,
            'recomendado' => $this->recomendado,
        ]);

        $cuidado = Cuidado_pes::firstOrCreate([
            'pes' => $this->pes,
            'sapato' => $this->sapatos,
            'dedos' => $this->dedos,
        ]);

        $medicacao = Medicacao::firstOrCreate([
            'medicamentos' => $this->medicamentos,
            'injecoes' => $this->injecoes,
            'comprimidos' => $this->comprimidos,
        ]);

        $tabagismo = Tabagismo::create([
            'fumou' => $this->fumou,
            'num_cigarros' => $this->num_cigarros,
            'data_fumo_id' => $this->quando_fumou,
        ]);

        // Relaciona os dados criados ao questionário
        $questionarioAutocuidado = QuestionarioAutoCuidado::create([
            'alimenatacao_g_id' => $alimentacaoG->id,
            'alimenatacao_e_id' => $alimentacaoE->id,
            'atividade_fisica_id' => $atividade->id,
            'monitor_id' => $monitor->id,
            'cuidado_pes_id' => $cuidado->id,
            'medicacao_id' => $medicacao->id,
            'tabagismo_id' => $tabagismo->id,
            'questionario_id' => $this->questionario->id,
        ]);

        // Feedback de sucesso
        session()->flash('message', 'Questionário de autocuidado salvo com sucesso!');

        // Redirecionamento para a próxima página
        return redirect()->route('questionario.index');
    }
}
