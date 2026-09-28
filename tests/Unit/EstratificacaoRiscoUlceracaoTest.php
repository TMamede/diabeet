<?php

use App\Livewire\Questionarios\CreateQuestionario;

function calcularRiscoDoComponente(array $respostas): array
{
    $componente = new CreateQuestionario();

    foreach ($respostas as $campo => $valor) {
        $componente->{$campo} = $valor;
    }

    $metodo = new ReflectionMethod($componente, 'calcularEstratificacaoRisco');

    return $metodo->invoke($componente);
}

function resultadoEsperadoSegundoMatriz(array $respostas): array
{
    $psp = $respostas['psp'];
    $dap = $respostas['dap'];
    $deformidade = $respostas['deformidade_pe'];
    $altoRisco = $respostas['historico_ulcera_pe']
        || $respostas['amputacao_previa']
        || $respostas['doenca_renal_terminal'];

    if (($psp || $dap) && $altoRisco) {
        return ['risco' => 3, 'periodicidade' => 'A cada 1 a 3 meses'];
    }

    if (($psp && $dap) || ($psp && $deformidade) || ($dap && $deformidade)) {
        return ['risco' => 2, 'periodicidade' => 'A cada 3 a 6 meses'];
    }

    if ($psp || $dap) {
        return ['risco' => 1, 'periodicidade' => 'A cada 6 a 12 meses'];
    }

    return ['risco' => 0, 'periodicidade' => '1 vez ao ano'];
}

it('classifica todas as combinações conforme a matriz de risco de ulceração', function () {
    $campos = [
        'psp',
        'dap',
        'deformidade_pe',
        'historico_ulcera_pe',
        'amputacao_previa',
        'doenca_renal_terminal',
    ];

    foreach (range(0, 63) as $combinacao) {
        $respostas = [];

        foreach ($campos as $indice => $campo) {
            $respostas[$campo] = (bool) ($combinacao & (1 << $indice));
        }

        expect(calcularRiscoDoComponente($respostas))
            ->toBe(resultadoEsperadoSegundoMatriz($respostas));
    }
});

it('não calcula risco enquanto faltar uma das seis respostas obrigatórias', function () {
    $componente = new CreateQuestionario();
    $componente->psp = true;
    $componente->dap = false;
    $componente->deformidade_pe = false;
    $componente->historico_ulcera_pe = false;
    $componente->amputacao_previa = false;
    $componente->doenca_renal_terminal = null;

    $metodo = new ReflectionMethod($componente, 'atualizarEstratificacaoRisco');
    $metodo->invoke($componente);

    expect($componente->risco_ulceracao_calculado)->toBeNull()
        ->and($componente->periodicidade_ulceracao_calculada)->toBeNull();
});
