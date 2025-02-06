<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prontuário #{{ $prontuario->id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #333;
            line-height: 1.6;
            margin: 40px;
        }
        .header {
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .section {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #000;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .section-title {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 5px;
            text-transform: uppercase;
            border-bottom: 2px solid #000;
            padding-bottom: 3px;
        }
        .content {
            margin-left: 10px;
            margin-top: 5px;
        }
        .list-item {
            margin-left: 15px;
        }
    </style>
</head>
<body>

    <div class="header">Prontuário #{{ $prontuario->id }}</div>

    <!-- Informações do Paciente -->
    <div class="section">
        <div class="section-title">Paciente</div>
        <div class="content">{{ $prontuario->questionarios->paciente->nome ?? 'Não informado' }}</div>
    </div>

    <!-- Exibindo todas as Origens e seus detalhes -->
    @foreach ($prontuario->origens as $origem)
    <div class="section">
        <div class="section-title">Origem: {{ $origem->descricao }}</div>
        
        <!-- Motivos Relacionados -->
        @foreach ($origem->motivos as $motivo)
        <div class="content">
            <strong>Motivo:</strong> {{ $motivo->descricao }}
            
            <!-- Diagnósticos Relacionados -->
            <ul>
                @foreach ($motivo->diagnosticos as $diagnostico)
                <li class="list-item">
                    <strong>Diagnóstico:</strong> {{ $diagnostico->descricao }}
                    
                    <!-- Intervenções Relacionadas -->
                    <ul>
                        @foreach ($diagnostico->intervencaos as $intervencao)
                        <li class="list-item">Intervenção: {{ $intervencao->descricao }}</li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
    @endforeach

</body>
</html>