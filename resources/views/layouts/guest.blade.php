<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SoPeP - Sistema de Prontuário Eletrônico para Pé Diabético</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="icon" href="{{ asset('bluepe.svg') }}" type="image/svg+xml">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Inclua os estilos do Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!-- Inclua o script do Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 relative font-sans antialiased">

    <!-- Elementos decorativos de fundo - consistentes com a welcome -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute top-10 left-10 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse">
        </div>
        <div class="absolute top-20 right-10 w-80 h-80 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-25 animate-pulse"
            style="animation-delay: 2s;"></div>
        <div class="absolute bottom-10 left-20 w-64 h-64 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"
            style="animation-delay: 4s;"></div>
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-indigo-100 rounded-full mix-blend-multiply filter blur-2xl opacity-10">
        </div>
    </div>

    <!-- Container principal -->
    <div class="relative z-10 flex flex-col items-center min-h-screen px-6 py-8 sm:py-12">

        <!-- Logo e título -->
        <div class="text-center mb-6 sm:mb-8 flex-shrink-0">
            <a href="/" wire:navigate class="group">
                <div
                    class="inline-block p-4 sm:p-6 backdrop-blur-sm bg-white/10 rounded-2xl mb-3 sm:mb-4 transform group-hover:scale-105 transition-all duration-300">
                    <x-application-logo
                        class="w-12 h-12 sm:w-16 sm:h-16 mx-auto drop-shadow-lg group-hover:scale-110 transition-transform duration-300" />
                </div>
            </a>

            <!-- Título SoPeP -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-indigo-900 mb-2">
                So<span class="text-indigo-600">Pe</span>P
            </h1>
            <div class="w-16 sm:w-20 h-1 mx-auto bg-indigo-600 rounded-full mb-2"></div>
            <p class="text-xs sm:text-sm text-indigo-700/80 font-medium">Sistema de Prontuário Eletrônico para Pé
                Diabético</p>
        </div>

        <!-- Card do formulário -->
        <div class="w-full max-w-md flex-1 flex flex-col justify-center">
            <div class="backdrop-blur-sm bg-white/90 rounded-2xl shadow-2xl border border-white/20 overflow-hidden">
                <div class="px-6 sm:px-8 py-6 sm:py-8 max-h-[70vh] overflow-y-auto">
                    {{ $slot }}
                </div>
            </div>
        </div>

        <!-- Link para voltar -->
        <div class="mt-4 sm:mt-6 text-center flex-shrink-0">
            <a href="/" wire:navigate
                class="group inline-flex items-center text-sm text-indigo-600 hover:text-indigo-700 transition-colors duration-200">
                <svg class="w-4 h-4 mr-1 group-hover:-translate-x-1 transition-transform duration-200" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Voltar ao início
            </a>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="absolute bottom-0 w-full py-4 text-center z-10">
        <div class="backdrop-blur-sm bg-white/5 rounded-t-2xl py-3">
            <p class="text-xs text-gray-600">© {{ date('Y') }} SoPeP. Todos os direitos reservados.</p>
            <p class="text-xs text-gray-500 mt-1">Sistema desenvolvido por Tamires para cuidar melhor dos pacientes</p>
        </div>
    </footer>

    <!-- Animações CSS customizadas -->
    <style>
        /* Animação de pulso personalizada */
        @keyframes pulse {

            0%,
            100% {
                opacity: 0.3;
                transform: scale(1);
            }

            50% {
                opacity: 0.5;
                transform: scale(1.05);
            }
        }

        /* Scroll customizado para o container do formulário */
        .backdrop-blur-sm .overflow-y-auto::-webkit-scrollbar {
            width: 6px;
        }

        .backdrop-blur-sm .overflow-y-auto::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 3px;
        }

        .backdrop-blur-sm .overflow-y-auto::-webkit-scrollbar-thumb {
            background: rgba(99, 102, 241, 0.3);
            border-radius: 3px;
        }

        .backdrop-blur-sm .overflow-y-auto::-webkit-scrollbar-thumb:hover {
            background: rgba(99, 102, 241, 0.5);
        }

        /* Melhorias nos inputs para manter consistência */
        .backdrop-blur-sm input[type="email"],
        .backdrop-blur-sm input[type="password"],
        .backdrop-blur-sm input[type="text"],
        .backdrop-blur-sm select,
        .backdrop-blur-sm textarea {
            @apply transition-all duration-200 focus:ring-2 focus:ring-indigo-300 focus:border-indigo-400;
        }

        /* Estilo para botões */
        .backdrop-blur-sm button[type="submit"] {
            @apply bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-semibold py-2 px-4 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-indigo-300 focus:ring-opacity-50;
        }

        /* Estilo para links */
        .backdrop-blur-sm a {
            @apply text-indigo-600 hover:text-indigo-700 transition-colors duration-200;
        }

        /* Customização do Select2 para manter consistência */
        .select2-container--default .select2-selection--single {
            @apply border-gray-300 rounded-md shadow-sm focus:border-indigo-400 focus:ring focus:ring-indigo-200 focus:ring-opacity-50;
        }
    </style>
</body>

</html>
