<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescrição #{{ $prontuario->id }}</title>
    <style>
        /* Paleta de Cores Minimalista */
        :root {
            --primary: #4F46E5;
            /* Indigo-600 */
            --light-gray: #f1f2f4;
            /* Cinza mais suave */
            --gray: #131314;
            /* Cinza refinado */
            --border-gray: #E5E7EB;
            /* Cinza claro para bordas */
            --white: #FFFFFF;
            --black: #111827;
            /* Preto refinado */
        }

        /* Definição da página para o PDF */
        @page {
            border: solid 5px black;
            margin: 40px;
        }

        body {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
            color: var(--black);
            line-height: 1.6;
            margin: 40px;
            background-color: var(--white);
        }

        /* Cabeçalho */
        .header {
            text-align: center;
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 30px;
            color: black;
        }

        /* Marca d'água (logo) */
        .watermark {
            position: absolute;
            top: 10px;
            right: 10px;
            opacity: 0.6;
            width: 90px;
        }

        /* Seções do prontuário */
        .section {
            margin-bottom: 20px;
            padding: 18px;
            border-radius: 8px;
            border: 1px solid var(--border-gray);
            background-color: var(--light-gray);
        }

        .section-info {
            margin-bottom: 20px;
            padding: 18px;
            border-radius: 8px;
            border: 1px solid var(--border-gray);
            background-color: #dfe2e5;
        }

        .section-title {
            font-weight: bold;
            font-size: 16px;
            text-transform: uppercase;
            color: var(--primary);
            border-bottom: 2px solid var(--primary);
            padding-bottom: 4px;
            margin-bottom: 10px;
        }

        /* Conteúdo */
        .content {
            margin-left: 10px;
            margin-top: 5px;
            color: var(--black);
        }

        .list-item {
            margin-left: 20px;
            font-size: 14px;
            color: var(--gray);
        }

        /* Estilização minimalista para listas */
        ul {
            list-style: none;
            padding-left: 15px;
        }

        ul li::before {
            content: "•";
            color: var(--gray);
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
    </style>
</head>

<body>


    <!-- Cabeçalho -->
    <div class="header">Prescrição #{{ $prontuario->id }}</div>

    <!-- Logo do Sistema como marca d'água -->
    <img src="{{ public_path('logope.png') }}" class="watermark">

    <!-- Informações do Paciente -->
    <div class="section">
        <div class="section-title">Paciente</div>
        <div class="content">
            <strong>Nome:</strong> {{ $prontuario->questionario->paciente->nome ?? 'Nome não informado' }}<br>
            <strong>Número do Prontuário:</strong> {{ $prontuario->questionario->paciente->prontuario ?? 'N/A' }}<br>
            <strong>Data de Emissão do Prescrição:</strong> {{ $prontuario->updated_at->format('d/m/Y') }}<br>
        </div>
    </div>


    <!-- Exibindo todas as Origens e seus detalhes -->
    @foreach ($estrutura as $grupo)
        <div class="section">

            <div class="section-title">
                Necessidade Humana Básica: {{ $grupo['origem']->descricao }}
            </div>

            @foreach ($grupo['motivos'] as $motivoData)
                <div class="content">
                    <strong>Indicador Clínico:</strong>
                    {{ $motivoData['motivo']->descricao }}

                    <ul>

                        @foreach ($motivoData['diagnosticos'] as $diagData)
                            <li class="list-item">

                                <strong>Diagnóstico:</strong>
                                {{ $diagData['diagnostico']->descricao }}

                                <ul>

                                    @foreach ($diagData['intervencoes'] as $intervencao)
                                        <li class="list-item">
                                            Intervenção: {{ $intervencao->descricao }}
                                        </li>
                                    @endforeach

                                </ul>

                            </li>
                        @endforeach

                    </ul>

                </div>
            @endforeach

        </div>
    @endforeach

    @if ($diagnosticosExtras->count())

        <div class="section">

            <div class="section-title">
                Diagnósticos Adicionados Manualmente
            </div>

            <ul>

                @foreach ($diagnosticosExtras as $extra)
                    <li class="list-item">

                        <strong>Diagnóstico:</strong>
                        {{ $extra['diagnostico']->descricao }}

                        <ul>

                            @foreach ($extra['intervencoes'] as $intervencao)
                                <li class="list-item">
                                    Intervenção: {{ $intervencao->descricao }}
                                </li>
                            @endforeach

                        </ul>

                    </li>
                @endforeach

            </ul>

        </div>

    @endif

</body>

</html>
