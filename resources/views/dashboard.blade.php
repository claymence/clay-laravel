<x-app-layout>

    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight"> -->
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-4 gap-4 max-w-7xl mx-auto">
        <div class="col-span-4">
            <div class="pt-16 pb-8">
                <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> -->
                <div class="max-w-fit mx-auto sm:px-6 lg:px-8 text-center">
                    <!-- <div class="bg-white dark:bg-zinc-900/50 overflow-hidden shadow-sm sm:rounded-lg"> -->
                    <div class="overflow-hidden">
                        <div class="p-6 font-extrabold text-lg">
                            <?php echo e(__("Hello!")); ?>
                        </div>
                        <div class="px-6">
                            This is a personal test / demo project.<br>
                            I am exploring full stack web development and Laravel with this app.
                        </div>
                        <p class="px-5 py-5">
                            You can check out technical details at the Info page and 
                            <a class="" href="https://github.com/claymence/clay-laravel" target="_blank" rel="noopener noreferrer">
                                <i class="devicon-github-original ml-1"></i> GitHub</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-2">
            <div class="py-9">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-zinc-900/50 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-3">
                            <p class="p-3 font-extrabold">
                                What users can do so far
                            </p>
                            <p class="px-5">
                                - choose light or dark theme<br>
                                - register and log in<br>
                                - view comments (+ create/edit/delete if logged in)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-2">
            <div class="py-9">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-zinc-900/50 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-3">
                            <p class="p-3 font-extrabold">
                                What is coming next
                            </p>
                            <p class="px-5 pb-5">
                                - browse pictures from space made by the James Webb Space Telescope<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
