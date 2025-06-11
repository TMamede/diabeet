<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SoPeP - Sistema de Prescrição Eletrônica para Pé Diabético</title>

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

<body class="relative min-h-screen font-sans antialiased bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">

    <!-- Elementos decorativos de fundo - consistentes com a welcome -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute bg-indigo-200 rounded-full top-10 left-10 w-72 h-72 mix-blend-multiply filter blur-xl opacity-30 animate-pulse">
        </div>
        <div class="absolute bg-purple-200 rounded-full opacity-25 top-20 right-10 w-80 h-80 mix-blend-multiply filter blur-xl animate-pulse"
            style="animation-delay: 2s;"></div>
        <div class="absolute w-64 h-64 bg-pink-200 rounded-full bottom-10 left-20 mix-blend-multiply filter blur-xl opacity-20 animate-pulse"
            style="animation-delay: 4s;"></div>
        <div
            class="absolute transform -translate-x-1/2 -translate-y-1/2 bg-indigo-100 rounded-full top-1/2 left-1/2 w-96 h-96 mix-blend-multiply filter blur-2xl opacity-10">
        </div>
    </div>

    <!-- Container principal -->
    <div class="relative z-10 flex flex-col items-center min-h-screen px-6 py-8 sm:py-12">

        <!-- Logo e título -->
        <div class="flex-shrink-0 mb-6 text-center sm:mb-8">
            <a href="/" wire:navigate class="group">
                <div
                    class="inline-block p-4 mb-3 transition-all duration-300 transform sm:p-6 backdrop-blur-sm bg-white/10 rounded-2xl sm:mb-4 group-hover:scale-105">
                    <x-application-logo
                        class="w-12 h-12 mx-auto transition-transform duration-300 sm:w-16 sm:h-16 drop-shadow-lg group-hover:scale-110" />
                </div>
            </a>

            <!-- Título SoPeP -->
            <h1 class="mb-2 text-3xl font-extrabold text-indigo-900 sm:text-4xl md:text-5xl">
                So<span class="text-indigo-600">Pe</span>P
            </h1>
            <div class="w-16 h-1 mx-auto mb-2 bg-indigo-600 rounded-full sm:w-20"></div>
            <p class="text-xs font-medium sm:text-sm text-indigo-700/80">Sistema de Prescrição Eletrônica para Pé
                Diabético</p>
        </div>

        <!-- Card do formulário -->
        <div class="flex flex-col justify-center flex-1 w-full max-w-md">
            <div class="overflow-hidden border shadow-2xl backdrop-blur-sm bg-white/90 rounded-2xl border-white/20">
                <div class="px-6 sm:px-8 py-6 sm:py-8 max-h-[70vh] overflow-y-auto">
                    {{ $slot }}
                </div>
            </div>
        </div>

        <!-- Link para voltar -->
        <div class="flex-shrink-0 mt-4 text-center sm:mt-6">
            <a href="/" wire:navigate
                class="inline-flex items-center text-sm text-indigo-600 transition-colors duration-200 group hover:text-indigo-700">
                <svg class="w-4 h-4 mr-1 transition-transform duration-200 group-hover:-translate-x-1" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Voltar ao início
            </a>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="absolute bottom-0 z-10 w-full py-4 text-center">
        <div class="py-3 backdrop-blur-sm bg-white/5 rounded-t-2xl">
            <p class="text-xs text-gray-600">© {{ date('Y') }} SoPeP. Todos os direitos reservados.</p>
            <p class="mt-1 text-xs text-gray-500">Sistema desenvolvido por Tamires para cuidar melhor dos pacientes</p>
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
