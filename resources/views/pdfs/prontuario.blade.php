<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prontuário #{{ $prontuario->id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        h1, h2, h3 {
            color: #333;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>Prontuário #{{ $prontuario->id }}</h1>
    <p>Data de Criação: {{ $prontuario->created_at->format('d/m/Y H:i') }}</p>

    <div class="section">
        <h2>Origens</h2>
        <ul>
            @foreach ($prontuario->origens as $origem)
                <li>{{ $origem->descricao }}</li>
            @endforeach
        </ul>
    </div>

    <div class="section">
        <h2>Motivos</h2>
        <ul>
            @foreach ($prontuario->motivos as $motivo)
                <li>{{ $motivo->descricao }}</li>
            @endforeach
        </ul>
    </div>

    <div class="section">
        <h2>Diagnósticos</h2>
        <ul>
            @foreach ($prontuario->diagnosticos as $diagnostico)
                <li>{{ $diagnostico->descricao }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
