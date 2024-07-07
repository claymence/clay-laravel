<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight"> -->
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-9">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    {{ __("Hello!") }}
                </div>
                <!-- text-gray-900 -->
                <div class="p-6">info</div>
            </div>
        </div>
    </div>
</x-app-layout>
