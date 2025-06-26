<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/x-icon" href="{{ asset('images/LOGO_IMG_TRANSPARENTE.png') }}">
        <title>{{ config('app.name', 'FindenHub') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-[#1E2A38] bg-[#E6EDF4]">
        <div class="min-h-screen bg-[#E6EDF4]">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-[#F4F6F8] shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-[#F4F6F8] text-sm text-center text-[#5A5F66] py-6 mt-8">
                <div class="max-w-screen-lg mx-auto px-4">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                        <p>© FindenHub 2025 — Todos os direitos reservados.</p>
                        <div class="flex gap-6">
                            <a href="#" class="hover:underline">Sobre nós</a>
                            <a href="#" class="hover:underline">Termos e privacidade</a>
                            <a href="#" class="hover:underline">Contato</a>
                            <a href="#" class="hover:underline">Redes Sociais</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>

