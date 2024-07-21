<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', "clay's app") }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Icons -->
        <!-- https://devicon.dev -->
        <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

        <!-- Styles & Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="antialiased font-sans">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">

            <img 
                class="fixed dark:invert opacity-10 inset-0 h-screen w-screen object-cover transform scale-150" 
                src="{{ Vite::asset('resources/images/backgrounds/rounded-lines.svg') }}"
            />

            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF7A00] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                    <!-- <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3"> -->
                    <header class="grid grid-cols-1 items-center gap-2 pt-10">
                        <!-- <div class="flex lg:justify-center lg:col-start-2"> -->
                        <div class="flex pl-6 lg:justify-center">
                            <img class="h-16" src="{{ Vite::asset('resources/images/logos/logo-v1.svg') }}" alt="Logo">
                        </div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>

                    <main>
                        <!-- <div class="grid gap-6 lg:grid-cols-5 lg:gap-8"> -->
                        <div class="grid justify-center">

                            <!-- <div class="flex justify-center text-center lg:col-start-2 lg:col-span-3 max-w-xl w-full gap-4 p-2 rounded-lg bg-white shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] dark:bg-zinc-900/50 dark:ring-zinc-800/50"> -->
                            <div class="flex justify-center text-center max-w-xl w-full py-6 px-10 rounded-lg bg-white shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] dark:bg-zinc-900/50 dark:ring-zinc-800/50">
                                <div class="">
                                    <div class="mb-2 text-lg/relaxed font-semibold">
                                        welcome to my personal web app project
                                    </div>
                                    <div class="mb-10 text-lg/relaxed">
                                        look inside via the dashboard link above
                                    </div>
                                    <div class="mb-6 text-5xl space-x-6">
                                        <i class="devicon-laravel-original"></i>
                                        <i class="devicon-livewire-plain"></i>
                                        <i class="devicon-alpinejs-original"></i>
                                        <i class="devicon-tailwindcss-original"></i>
                                    </div>
                                    <div class="text-lg/relaxed">
                                        <i class="devicon-github-original"></i>
                                        <a class="underline" href="https://github.com/claymence/clay-laravel" target="_blank" rel="noopener noreferrer">
                                            GitHub
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="grid grid-cols-2 lg:grid-cols-3 items-center gap-2 pt-8 pb-6 brightness-150">
                            
                            <div class="flex justify-center h-24">
                                <img src="{{ Vite::asset('resources/images/badges/ultra-clear.svg') }}" alt="badge">
                            </div>
                            <div class="flex justify-center h-48">
                                <img src="{{ Vite::asset('resources/images/badges/hyper-best-award-winning.svg') }}" alt="badge">
                            </div>
                            <div class="flex justify-center h-24 col-span-2 lg:col-span-1">
                                <img src="{{ Vite::asset('resources/images/badges/international-mega-standard.svg') }}" alt="badge">
                            </div>

                        </div>

                    </main>

                    <footer class="grid grid-cols-2 gap-2 pb-10 pt-2 text-center text-sm text-black dark:text-white/70">
                        <div class="flex justify-center col-span-2">
                            @include('custom-ui-elements.theme-switcher')
                        </div>
                        <div>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</div>
                        <div>
                            <a href="{{ url('/contact') }}"
                            class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Contact | Legal notice
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
