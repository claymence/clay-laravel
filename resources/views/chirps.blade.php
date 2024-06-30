<x-app-layout>
    <!-- <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        
    </div> -->

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chirps') }}
        </h2>
    </x-slot>

    <div class="py-9">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <livewire:chirps.create />
        
                    <livewire:chirps.list />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>