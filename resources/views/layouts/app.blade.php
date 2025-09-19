<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SoPeP</title>

    <!-- Fonts -->
    <!-- Favicon SVG -->
    <link rel="icon" href="{{ asset('bluepe.svg') }}" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inclua os estilos do Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!-- Inclua o script do Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-indigo-50">
        <livewire:layout.navigation />

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        @livewireStyles
        @livewireScripts
        
    </div>
    
    <footer class="relative z-10 py-6 text-white bg-gradient-to-r from-indigo-800 to-purple-900">
            <div class="container px-6 mx-auto">
                <div class="flex flex-col items-center justify-between md:flex-row">
                    <div class="mb-4 md:mb-0">
                        <h4 class="text-xl font-bold">SoPeP</h4>
                        <p class="text-sm text-indigo-200">Sistema de Prescrição Eletrônico para Pé Diabético</p>
                    </div>
                    <div class="text-center md:text-right">
                        <p class="text-sm text-indigo-200">&copy; 2024 SoPeP. Todos os direitos reservados.</p>
                        <p class="mt-1 text-xs text-indigo-300">Desenvolvido para cuidar melhor dos seus pacientes</p>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>
