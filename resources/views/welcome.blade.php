<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SoPeP - Sistema de Prescrição Eletrônica para Pé Diabético</title>

    <!-- Fonts -->
    <link rel="icon" href="{{ asset('bluepe.svg') }}" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="relative min-h-screen overflow-hidden font-sans bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">

    <!-- Elementos decorativos de fundo -->
    <div class="absolute inset-0 pointer-events-none">
        <div
            class="w-full h-full bg-[radial-gradient(40%_40%_at_10%_10%,#c7d2fe33,transparent),radial-gradient(45%_45%_at_90%_15%,#e9d5ff33,transparent),radial-gradient(40%_40%_at_20%_90%,#fecdd733,transparent)]">
        </div>
    </div>

    <!-- Navegação -->
    <header class="absolute top-0 right-0 z-20 m-6">
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif
    </header>

    <!-- Conteúdo Principal -->
    <div class="relative z-10 flex flex-col items-center justify-center min-h-screen px-6">

        <!-- Container principal com backdrop blur -->
        <div class="max-w-4xl mx-auto text-center">

            <!-- Logo e Título Principal -->
            <div class="mb-12">
                <div
                    class="inline-block p-8 mb-8 transition-all duration-300 transform backdrop-blur-sm bg-white/10 rounded-3xl hover:scale-105">
                    <!-- Logo centralizada -->
                    <div class="mb-6">
                        <x-application-logo
                            class="w-32 h-32 mx-auto transition-transform duration-300 drop-shadow-lg hover:scale-110" />
                    </div>

                    <!-- Título estilizado -->
                    <h1 class="mb-4 text-6xl font-extrabold text-indigo-900 md:text-8xl">
                        So<span class="text-indigo-600">Pe</span>P
                    </h1>
                    <div class="w-32 h-1 mx-auto bg-indigo-600 rounded-full"></div>
                </div>
            </div>

            <!-- Botões de Ação -->
            <div class="flex flex-col gap-4 mb-8 sm:flex-row sm:justify-center">
                <a href="{{ route('register') }}" class="relative items-center group">
                    <button
                        class="relative px-10 py-4 overflow-hidden text-xl font-bold text-white transition-all duration-300 transform rounded-full shadow-2xl bg-gradient-to-r from-indigo-600 to-purple-600 hover:shadow-3xl hover:scale-105 focus:outline-none focus:ring-4 focus:ring-indigo-300 focus:ring-opacity-50">
                        <!-- Efeito de brilho animado -->
                        <div
                            class="absolute inset-0 transition-transform duration-1000 transform -translate-x-full -skew-x-12 bg-gradient-to-r from-transparent via-white/20 to-transparent group-hover:translate-x-full">
                        </div>

                        <span class="relative flex items-center">
                            <svg class="w-5 h-5 mr-2 transition-transform group-hover:rotate-12" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Registrar
                        </span>
                    </button>
                </a>

                <a href="{{ route('login') }}" class="group">
                    <button
                        class="px-10 py-4 text-xl font-semibold text-indigo-600 transition-all duration-300 transform border-2 border-indigo-200 rounded-full shadow-lg bg-white/90 backdrop-blur-sm hover:shadow-xl hover:border-indigo-300 hover:bg-white hover:scale-105 focus:outline-none focus:ring-4 focus:ring-indigo-300 focus:ring-opacity-50">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2 transition-transform group-hover:scale-110" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            Entrar
                        </span>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="absolute bottom-0 z-10 w-full py-6 text-center">
        <div class="py-4 backdrop-blur-sm bg-white/10 rounded-t-3xl">
            <p class="text-sm text-gray-600">© {{ date('Y') }} SoPeP. Todos os direitos reservados.</p>
            <p class="mt-1 text-xs text-gray-500">Sistema desenvolvido para cuidar melhor dos pacientes</p>
        </div>
    </footer>

    <!-- Animações CSS customizadas -->
    <style>
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float 6s ease-in-out infinite;
            animation-delay: 3s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            25% {
                transform: translateY(-10px) rotate(2deg);
            }

            50% {
                transform: translateY(-20px) rotate(0deg);
            }

            75% {
                transform: translateY(-10px) rotate(-2deg);
            }
        }

        /* Efeito de sombra 3xl customizado */
        .shadow-3xl {
            box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
        }

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
    </style>
</body>

</html>
