<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', "clay's app") }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Icons -->
        <!-- https://devicon.dev -->
        <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

        <!-- Styles & Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        <!-- <div class="min-h-screen bg-gray-100"> -->
        <div class="flex flex-col min-h-screen bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 selection:bg-[#FF7A00] selection:text-white">

            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <!-- <header class="bg-white shadow"> -->
                <!-- <header class="bg-white dark:bg-zinc-900 dark:bg-opacity-65 shadow"> -->
                <header class="bg-white dark:bg-zinc-800/25 shadow">
                    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>
            
            <!-- <footer class="grid grid-cols-3 pb-16 text-center text-sm text-black dark:text-white/70 fixed bottom-0 w-full"> -->
            <footer class="grid grid-cols-3 mt-8 pt-6 pb-8 text-center w-full text-sm text-black dark:text-white/70 bg-white dark:bg-zinc-800/25 shadow">
                <div>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</div>
                <div class="flex justify-center">
                    @include('custom-ui-elements.theme-switcher')
                </div>
                <div>
                    WORK IN PROGRESS<br>
                    Contact | Legal notice
                </div>
            </footer>
        </div>
    </body>
</html>
