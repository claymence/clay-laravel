<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" nonce="{{ $nonce }}">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" nonce="{{ $nonce }}" />

        <!-- Scripts -->
        <!-- {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}} -->
        <!-- implemented nonce for CSP after security check -->
        @php
            $cssUrl = Vite::asset('resources/css/app.css');
            $jsUrl = Vite::asset('resources/js/app.js');
        @endphp
        <link rel="stylesheet" href="{{ $cssUrl }}" nonce="{{ $nonce }}">
        <script src="{{ $jsUrl }}" nonce="{{ $nonce }}" defer></script>


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
