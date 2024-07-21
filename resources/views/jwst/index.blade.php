<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('James Webb Space Telescope') }}
        </h2>
    </x-slot>

    <!-- <img src="https://jwst-api-cdn.nyc3.cdn.digitaloceanspaces.com/jwst--jw02731002005_02107_00005_mirimage_o002_crf.jpg" alt="JWST Image"> -->

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <img src="https://jwst-api-cdn.nyc3.cdn.digitaloceanspaces.com/jwst--jw02731002005_02107_00005_mirimage_o002_crf.jpg" alt="JWST Image">
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-900/50 overflow-hidden shadow-sm sm:rounded-lg my-3">
                <div class="p-6">
                    <h4 class="font-semibold p-2">
                        JwstApiTest
                    </h4>
                    <hr class="my-3">
                    <livewire:jwst.jwst-api-test />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>