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
                id="background" 
                class="fixed invert opacity-5 inset-0 h-screen w-screen object-cover transform scale-150" 
                src="{{ Vite::asset('resources/images/backgrounds/logoipsum-276.svg') }}"
            />

            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                    <!-- <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3"> -->
                    <header class="grid grid-cols-2 items-center gap-2 pt-10 lg:grid-cols-1">
                        <!-- <div class="flex lg:justify-center lg:col-start-2"> -->
                        <div class="flex lg:justify-center">
                            <img class="h-16" src="{{ Vite::asset('resources/images/logos/logo-v1.svg') }}" alt="Logo">
                        </div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>

                    <main>
                        <div class="grid gap-6 lg:grid-cols-5 lg:gap-8">

                            <div class="flex justify-center text-center lg:col-start-2 lg:col-span-3 w-45 gap-4 p-2 rounded-lg bg-white shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] dark:bg-zinc-900 dark:ring-zinc-800">
                                <div class="pt-3 sm:pt-5 pb-4">
                                    <div class="my-5 text-lg/relaxed font-semibold">
                                        welcome to my personal web app project
                                    </div>
                                    <div class="my-5 text-5xl space-x-6">
                                        <i class="devicon-laravel-original"></i>
                                        <i class="devicon-livewire-plain"></i>
                                        <i class="devicon-tailwindcss-original"></i>
                                        <!-- 
                                        <i class="devicon-livewire-plain-wordmark"></i>
                                        <i class="devicon-php-plain"></i>
                                        <i class="devicon-javascript-plain"></i>
                                        <i class="devicon-html5-plain"></i>
                                        <i class="devicon-markdown-original"></i>
                                        <i class="devicon-nginx-original"></i>
                                        <i class="devicon-axios-plain"></i>
                                        <i class="devicon-sqlite-plain"></i>
                                        <i class="devicon-mysql-original"></i>
                                        <i class="devicon-npm-original-wordmark"></i>
                                        <i class="devicon-vscode-plain"></i>
                                        <i class="devicon-git-plain"></i>
                                        <i class="devicon-github-original"></i>
                                         -->
                                    </div>
                                    <div class="my-5 text-base/relaxed">
                                        source code and documentation at 
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

                    <footer class="grid grid-cols-2 pb-16 text-center text-sm text-black dark:text-white/70">
                        <div>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</div>
                        <div>work in progress - legal notice coming soon</div>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
