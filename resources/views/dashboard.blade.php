<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight"> -->
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-9">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-900/50 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 font-extrabold text-lg">
                    {{ __("Hello!") }}
                </div>
                <!-- text-gray-900 -->
                <!-- <div class="p-6">info</div> -->
                <div class="px-6">
                    This is a personal test / demo project.<br>
                    I am exploring full stack web development and Laravel with this app.
                </div>
                <div class="p-3">
                    <p class="p-3 font-extrabold">What users can do so far</p>
                    <p class="px-5">
                        - choose light or dark theme<br>
                        - register and log in<br>
                        - view comments (+ create/edit/delete if logged in)<br>
                        - view project details at "Info"
                    </p>
                </div>
                <div class="p-3">
                    <p class="p-3 font-extrabold">What is coming next</p>
                    <p class="px-5 pb-5">
                        - browse pictures from space made by the James Webb Space Telescope<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
