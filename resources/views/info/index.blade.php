<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Info') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg my-3">
                <div class="p-6">
                    <h4 class="font-semibold p-2">
                        Tech Stack
                    </h4>
                </div>
            </div>

            <div class="flex flex-wrap gap-4">

                <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <img src="path/to/logo1.png" alt="Tech 1 Logo" class="mx-auto mb-2">
                    <p class="mt-2">Short description of Tech 1.</p>
                </div>

                <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <img src="path/to/logo2.png" alt="Tech 2 Logo" class="mx-auto mb-2">
                    <p class="mt-2">Short description of Tech 2.</p>
                </div>

                <!-- Add more tech boxes as needed -->

            </div>
            
        </div>
    </div>
</x-app-layout>