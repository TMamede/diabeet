<?php

namespace App\Livewire;

use App\Models\Impacto;
use App\Models\PreoDiabete;
use App\Models\Questionario;
use App\Models\QuestionarioQualidade;
use App\Models\Satisfacao;
use Livewire\Component;

class CreateQuestionarioQualidade extends Component
{

    public $satisfacao, $impacto, $preo_diabete, $ter_filhos;
    public $flexibilidade, $vida_sexual;
    public $exercicio, $incomodo, $comer;
    public $diabete, $complicacoes;
    public $questionario, $questionarioQualidade;


    public function mount(int $id)
    {
        $this->questionario = Questionario::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.questionarios.create-questionario-qualidade')->layout('layouts.app');
    }


    private function validarRequisicoes(): void
    {
        $this->validate(
            [
                // Satisfação
                'flexibilidade' => ['required', 'integer', 'between:1,5'],
                'vida_sexual'   => ['required', 'integer', 'between:1,5'],

                // Impacto
                'exercicio'     => ['required', 'integer', 'between:1,5'],
                'incomodo'      => ['required', 'integer', 'between:1,5'],
                'comer'         => ['required', 'integer', 'between:1,5'],

                // Preocupações
                'ter_filhos'    => ['required', 'integer', 'between:1,5'],
                'diabete'       => ['required', 'integer', 'between:1,5'],
                'complicacoes'  => ['required', 'integer', 'between:1,5'],

                // Sanidade do contexto
                'questionario.id' => ['required', 'integer', 'exists:questionarios,id'],
            ],
            [
                '*.required'        => 'Campo obrigatório.',
                '*.integer'         => 'Valor inválido.',
                '*.between'         => 'Selecione um valor entre 1 e 5.',
                'questionario.id.*' => 'Questionário inválido ou não encontrado.',
            ]
        );
    }

    public function SalvarQualidade()
    {
        $this->validarRequisicoes();

        $satisfacao = Satisfacao::firstOrCreate([
            'flexibilidade' => $this->flexibilidade,
            'vida_sexual' => $this->vida_sexual,
        ]);

        $impacto = Impacto::firstOrCreate([
            'exercicio' => $this->exercicio,
            'incomodo' => $this->incomodo,
            'comer' => $this->comer,
        ]);

        $preo_diabete = PreoDiabete::firstOrCreate([
            'diabete' => $this->diabete,
            'complicacoes' => $this->complicacoes,
        ]);

        $questionarioQualidade = QuestionarioQualidade::Create([
            'satisfacao_id' => $satisfacao->id,
            'impacto_id' => $impacto->id,
            'preo_diabete_id' => $preo_diabete->id,
            'ter_filhos' => $this->ter_filhos,
            'questionario_id' => $this->questionario->id,
        ]);


        session()->flash('message', 'Questionário criado com sucesso!');
        return redirect()->route('questionario.autocuidado', ['id' => $this->questionario->id]);
    }
}
