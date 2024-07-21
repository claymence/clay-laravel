<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Info') }}
        </h2>
    </x-slot>
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-75 overflow-hidden shadow-sm sm:rounded-lg my-3">
            <div class="p-3">
                <h4 class="font-semibold p-2">
                    Tech Stack
                </h4>
            </div>
        </div>
        <div class="flex flex-wrap justify-center gap-4 max-w-screen-lg mx-auto">
            <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center md:w-1/3">
                <i class="devicon-laravel-original text-6xl"></i>
                <h4 class="mt-2 font-extrabold text-lg">
                    <a href="https://laravel.com/" target="_blank" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white/65 dark:focus-visible:ring-white">
                        Laravel
                    </a>
                </h4>
                <p class="mt-2">
                    The PHP framework this app is built with.
                </p>
            </div>

            <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center md:w-1/3">
                <i class="devicon-livewire-plain text-6xl"></i>
                <h4 class="mt-2 font-extrabold text-lg">
                    <a href="https://livewire.laravel.com/" target="_blank" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white/65 dark:focus-visible:ring-white">
                        Livewire
                    </a>
                </h4>
                <p class="mt-2">
                    Laravel front-end framework for dynamic UIs.
                </p>
            </div>

            <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center md:w-1/3">
                <i class="devicon-alpinejs-original text-6xl"></i>
                <h4 class="mt-2 font-extrabold text-lg">
                    <a href="https://alpinejs.dev/" target="_blank" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white/65 dark:focus-visible:ring-white">
                        Alpine.js
                    </a>
                </h4>
                <p class="mt-2">
                    Lightweight JavaScript framework included in Livewire.
                </p>
            </div>

            <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center md:w-1/3">
                <i class="devicon-tailwindcss-original text-6xl"></i>
                <h4 class="mt-2 font-extrabold text-lg">
                    <a href="https://tailwindcss.com/" target="_blank" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white/65 dark:focus-visible:ring-white">
                        Tailwind CSS
                    </a>
                </h4>
                <p class="mt-2">
                    CSS framework ready to use in Laravel.
                </p>
            </div>

            <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center md:w-1/3">
                <i class="devicon-vitejs-plain text-6xl"></i>
                <h4 class="mt-2 font-extrabold text-lg">
                    <a href="https://vitejs.dev/" target="_blank" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white/65 dark:focus-visible:ring-white">
                        Vite
                    </a>
                </h4>
                <p class="mt-2">
                    Frontend build / dev tooling used in Laravel.
                </p>
            </div>
            <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center md:w-1/3">
                <i class="devicon-sqlite-plain text-6xl"></i>
                <h4 class="mt-2 font-extrabold text-lg">
                    <a href="https://www.sqlite.org/" target="_blank" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white/65 dark:focus-visible:ring-white">
                        SQLite
                    </a>
                </h4>
                <p class="mt-2">
                    Database currently in use, managed with Laravel's Eloquent ORM.
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-75 overflow-hidden shadow-sm sm:rounded-lg my-3">
            <div class="p-3">
                <h4 class="font-semibold p-2">
                    CI & other tools
                </h4>
            </div>
        </div>
        <div class="flex flex-wrap justify-center gap-4 max-w-screen-lg mx-auto">
            <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center md:w-1/3">
                <i class="devicon-github-original text-6xl"></i>
                <h4 class="mt-2 font-extrabold text-lg">
                    <a href="https://www.github.com/" target="_blank" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white/65 dark:focus-visible:ring-white">
                        GitHub
                    </a>
                </h4>
                <div class="mt-2">
                    Git source control, project management and issue tracking.
                </div>
                <div class="mt-5 text-sm font-thin opacity-85">
                    GitHub Action
                </div>
                <div class="mt-1">
                    Script for deployment on git push.
                </div>
            </div>

            <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center md:w-1/3">
                <i class="devicon-postman-plain text-6xl"></i>
                <h4 class="mt-2 font-extrabold text-lg">
                    <a href="https://www.postman.com/" target="_blank" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white/65 dark:focus-visible:ring-white">
                        Postman
                    </a>
                </h4>
                <p class="mt-2">
                    HTTP client tool for building and using APIs.
                </p>
            </div>

            <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center md:w-1/3">
                <h4 class="mt-2 font-extrabold text-lg">
                    <a href="https://developer.mozilla.org/" target="_blank" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white/65 dark:focus-visible:ring-white">
                        MDN
                    </a>
                </h4>
                <p class="mt-2">
                    Web development resource.
                </p>
                <p class="mt-5 font-bold">
                    <a href="https://developer.mozilla.org/en-US/observatory/" target="_blank" class="rounded-md py-2 text-black transition hover:text-black/70 dark:text-white/80 dark:hover:text-white/65">
                        HTTP Observatory
                    </a>
                    <p class="mt-1">
                        Service by Mozilla for testing HTTP security.
                    </p>
                </p>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap gap-4 text-center">
        <div class="mt-12 w-full">
            All product names, logos, and brands are property of their respective owners.
        </div>
    </div>

</x-app-layout>