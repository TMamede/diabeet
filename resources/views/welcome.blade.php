<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Diafeet</title>

    <!-- Fonts -->
    <link rel="icon" href="{{ asset('bluepe.svg') }}" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="relative flex flex-col items-center justify-center min-h-screen overflow-hidden font-sans bg-gradient-to-br from-indigo-50 via-indigo-200 to-indigo-300">

    <!-- Navegação -->
    <header class="absolute top-0 right-0 m-6">
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif
    </header>

    <!-- Elementos Decorativos - Ícones e Linhas Suaves -->
    <div class="absolute inset-0 pointer-events-none">
        
        <!-- Ícones Sutilmente Flutuantes -->
        <div class="absolute top-1/4 right-10 animate-float">
            <i class="text-6xl text-indigo-500 opacity-50 fas fa-leaf"></i>
        </div>
        <div class="absolute bottom-1/4 left-10 animate-float">
            <i class="text-6xl text-purple-400 opacity-50 fas fa-cloud"></i>
        </div>
    </div>

    <!-- Conteúdo Central -->
    <div class="z-10 flex flex-col items-center space-y-8">
        <!-- Título com sombra -->
        <h1 class="font-bold text-gray-800 text-7xl drop-shadow-lg">Diafeet</h1>
        
        <!-- Logo centralizada com animação de escala -->
        <x-application-logo class="w-48 h-48 transition-transform duration-300 ease-in-out transform drop-shadow-lg hover:scale-110" />

        <!-- Botão "Iniciar" com animação de hover -->
        <a href="{{ route('register') }}">
            <x-primary-button class="px-8 py-4 text-lg text-white transition-transform duration-300 transform bg-indigo-600 rounded-full shadow-lg du hover:bg-indigo-700 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                Iniciar
            </x-primary-button>
        </a>
    </div>

    <!-- Rodapé decorativo -->
    <footer class="absolute bottom-0 w-full py-4 text-sm text-center text-gray-500">
        <p>© {{ date('Y') }} Diafeet. Todos direitos reservados.</p>
    </footer>

    <!-- Animações CSS -->
    <style>
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</body>

</html>
