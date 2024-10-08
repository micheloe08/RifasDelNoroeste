<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Rifas del Noroeste') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-white">
            @include('navbar')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-6 dark:bg-gray-800">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="flex-1 p-4 mx-auto max-w-7xl w-full sm:p-6 lg:p-6 dark:bg-gray-800">
                {{ $slot }}
            </main>

            <!-- footer -->


            <footer class="rounded-lg shadow m-4 dark:bg-gray-800" style="background-color:#000000;">
                <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                    <span class="text-sm font-semibold text-white sm:text-center dark:text-gray-400">© 2024 Rifas Del Noroeste. Todos los derechos. By <a href="https://www.facebook.com/publisignmex" class="hover:underline">PublisignMexico</a>
                    </span>
                </div>
            </footer>

        </div>
        <a id="whats" href="https://wa.me/5216721742590?text=Me%20gustaría%20saber%20más" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
        @stack('modals')

        @livewireScripts
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    </body>
</html>
