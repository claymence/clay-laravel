<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Info') }}
        </h2>
    </x-slot>

    <div class="py-6">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg my-3">
                <div class="p-3">
                    <h4 class="font-semibold p-2">
                        Tech Stack
                    </h4>
                </div>
            </div>
            <div class="flex flex-wrap gap-4">
                <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
                    <h4 class="mt-2 font-extrabold text-lg">Laravel</h4>
                    <p class="mt-2">The framework this app is built with.</p>
                </div>

                <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
                    <h4 class="mt-2 font-extrabold text-lg">Livewire</h4>
                    <p class="mt-2">Frontend framework for interactive UIs.</p>
                </div>

                <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
                    <h4 class="mt-2 font-extrabold text-lg">Alpine.js</h4>
                    <p class="mt-2">Lightweight JS framework already included in Livewire.</p>
                </div>

                <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
                    <h4 class="mt-2 font-extrabold text-lg">Tailwind CSS</h4>
                    <p class="mt-2">CSS framework shipping with Laravel.</p>
                </div>

                <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
                    <h4 class="mt-2 font-extrabold text-lg">Vite</h4>
                    <p class="mt-2">Frontend build / dev tooling used in Laravel.</p>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg my-3">
                <div class="p-3">
                    <h4 class="font-semibold p-2">
                        CI & other tools
                    </h4>
                </div>
            </div>
            <div class="flex flex-wrap gap-4">
                <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
                    <h4 class="mt-2 font-extrabold text-lg">Github</h4>
                    <p class="mt-2">Github Action script for automatic deployment on git push</p>
                </div>
                <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
                    <h4 class="mt-2 font-extrabold text-lg">Mozilla Observatory</h4>
                    <p class="mt-2">Online service for testing HTTP security.</p>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>