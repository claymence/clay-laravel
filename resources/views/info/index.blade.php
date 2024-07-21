<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Info') }}
        </h2>
    </x-slot>

    <div class="py-6">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-75 overflow-hidden shadow-sm sm:rounded-lg my-3">
                <div class="p-3">
                    <h4 class="font-semibold p-2">
                        Tech Stack
                    </h4>
                </div>
            </div>
            <div class="flex flex-wrap gap-4">
                <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
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

                <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
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

                <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
                    <h4 class="mt-2 font-extrabold text-lg">
                        <a href="https://alpinejs.dev/" target="_blank" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white/65 dark:focus-visible:ring-white">
                            Alpine.js
                        </a>
                    </h4>
                    <p class="mt-2">
                        Lightweight JavaScript framework included in Livewire.
                    </p>
                </div>

                <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
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

                <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
                    <h4 class="mt-2 font-extrabold text-lg">
                        <a href="https://vitejs.dev/" target="_blank" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white/65 dark:focus-visible:ring-white">
                            Vite
                        </a>
                    </h4>
                    <p class="mt-2">
                        Frontend build / dev tooling used in Laravel.
                    </p>
                </div>
                <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
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
            <div class="flex flex-wrap gap-4">
                <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
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
                <div class="bg-white dark:bg-zinc-900 dark:bg-opacity-50 overflow-hidden shadow-sm sm:rounded-lg my-3 p-4 w-48 text-center">
                    <!-- <img src="path/to/logo1.png" alt="Logo" class="mx-auto mb-2"> -->
                    <!-- <svg id="mdn-docs-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 361 104.2" style="enable-background:new 0 0 361 104.2" xml:space="preserve" role="img"><title>MDN Web Docs</title><path d="M197.6 73.2h-17.1v-5.5h3.8V51.9c0-3.7-.7-6.3-2.1-7.9-1.4-1.6-3.3-2.3-5.7-2.3-3.2 0-5.6 1.1-7.2 3.4s-2.4 4.6-2.5 6.9v15.6h6v5.5h-17.1v-5.5h3.8V51.9c0-3.8-.7-6.4-2.1-7.9-1.4-1.5-3.3-2.3-5.6-2.3-3.2 0-5.5 1.1-7.2 3.3-1.6 2.2-2.4 4.5-2.5 6.9v15.8h6.9v5.5h-20.2v-5.5h6V42.4h-6.1v-5.6h13.4v6.4c1.2-2.1 2.7-3.8 4.7-5.2 2-1.3 4.4-2 7.3-2s5.3.7 7.5 2.1c2.2 1.4 3.7 3.5 4.5 6.4 1.1-2.5 2.7-4.5 4.9-6.1s4.8-2.4 7.9-2.4c3.5 0 6.5 1.1 8.9 3.3s3.7 5.6 3.7 10.2v18.2h6.1v5.5zm42.5 0h-13.2V66c-1.2 2.2-2.8 4.1-4.9 5.6-2.1 1.6-4.8 2.4-8.3 2.4-4.8 0-8.7-1.6-11.6-4.9-2.9-3.2-4.3-7.7-4.3-13.3 0-5 1.3-9.6 4-13.7 2.6-4.1 6.9-6.2 12.8-6.2s9.8 2.2 12.3 6.5V22.7h-8.6v-5.6h15.8v50.6h6v5.5zm-13.3-16.8V52c-.1-3-1.2-5.5-3.2-7.3s-4.4-2.8-7.2-2.8c-3.6 0-6.3 1.3-8.2 3.9-1.9 2.6-2.8 5.8-2.8 9.6 0 4.1 1 7.3 3 9.5s4.5 3.3 7.4 3.3c3.2 0 5.8-1.3 7.8-3.8 2.1-2.6 3.1-5.3 3.2-8zm61.5 16.8H269v-5.5h6V51.9c0-3.7-.7-6.3-2.2-7.9-1.4-1.6-3.4-2.3-5.7-2.3-3.1 0-5.6 1-7.4 3s-2.8 4.4-2.9 7v15.9h6v5.5h-19.3v-5.5h6V42.4h-6.2v-5.6h13.6V43c2.6-4.6 6.8-6.9 12.7-6.9 3.6 0 6.7 1.1 9.2 3.3s3.7 5.6 3.7 10.2v18.2h6v5.4h-.2z" class="logo-text"></path><path d="M42 .2 13.4 92.3H1.7L30.2.2Zm10.4 0v92.1H42V.2Zm40.3 0L64.2 92.3H52.5L81 .2Zm10.4 0v92.1H92.7V.2Z" class="logo-m"></path><path d="M294 95h67v8.8h-67z" class="logo-_"></path></svg> -->
                    <!-- <svg width="48" height="17" viewBox="0 0 48 17" fill="none" xmlns="http://www.w3.org/2000/svg"><title id="mdn-footer-logo-svg">MDN logo</title><path d="M20.04 16.512H15.504V10.416C15.504 9.488 15.344 8.824 15.024 8.424C14.72 8.024 14.264 7.824 13.656 7.824C12.92 7.824 12.384 8.064 12.048 8.544C11.728 9.024 11.568 9.64 11.568 10.392V14.184H13.008V16.512H8.472V10.416C8.472 9.488 8.312 8.824 7.992 8.424C7.688 8.024 7.232 7.824 6.624 7.824C5.872 7.824 5.336 8.064 5.016 8.544C4.696 9.024 4.536 9.64 4.536 10.392V14.184H6.6V16.512H0V14.184H1.44V8.04H0.024V5.688H4.536V7.32C5.224 6.088 6.32 5.472 7.824 5.472C8.608 5.472 9.328 5.664 9.984 6.048C10.64 6.432 11.096 7.016 11.352 7.8C11.992 6.248 13.168 5.472 14.88 5.472C15.856 5.472 16.72 5.776 17.472 6.384C18.224 6.992 18.6 7.936 18.6 9.216V14.184H20.04V16.512Z" fill="currentColor"></path><path d="M33.6714 16.512H29.1354V14.496C28.8314 15.12 28.3834 15.656 27.7914 16.104C27.1994 16.536 26.4154 16.752 25.4394 16.752C24.0154 16.752 22.8954 16.264 22.0794 15.288C21.2634 14.312 20.8554 12.984 20.8554 11.304C20.8554 9.688 21.2554 8.312 22.0554 7.176C22.8554 6.04 24.0634 5.472 25.6794 5.472C26.5594 5.472 27.2794 5.648 27.8394 6C28.3994 6.352 28.8314 6.8 29.1354 7.344V2.352H26.9754V0H32.2314V14.184H33.6714V16.512ZM29.1354 11.04V10.776C29.1354 9.88 28.8954 9.184 28.4154 8.688C27.9514 8.176 27.3674 7.92 26.6634 7.92C25.9754 7.92 25.3674 8.176 24.8394 8.688C24.3274 9.2 24.0714 10.008 24.0714 11.112C24.0714 12.152 24.3114 12.944 24.7914 13.488C25.2714 14.032 25.8394 14.304 26.4954 14.304C27.3114 14.304 27.9514 13.96 28.4154 13.272C28.8954 12.584 29.1354 11.84 29.1354 11.04Z" fill="currentColor"></path><path d="M47.9589 16.512H41.9829V14.184H43.4229V10.416C43.4229 9.488 43.2629 8.824 42.9429 8.424C42.6389 8.024 42.1829 7.824 41.5749 7.824C40.8389 7.824 40.2709 8.056 39.8709 8.52C39.4709 8.968 39.2629 9.56 39.2469 10.296V14.184H40.6869V16.512H34.7109V14.184H36.1509V8.04H34.5909V5.688H39.2469V7.344C39.9669 6.096 41.1269 5.472 42.7269 5.472C43.7509 5.472 44.6389 5.776 45.3909 6.384C46.1429 6.992 46.5189 7.936 46.5189 9.216V14.184H47.9589V16.512Z" fill="currentColor"></path></svg> -->
                    <h4 class="mt-2 font-extrabold text-lg">
                        <a href="https://developer.mozilla.org/" target="_blank" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white/80 dark:hover:text-white/65 dark:focus-visible:ring-white">
                            MDN
                        </a>
                    </h4>
                    <p class="mt-2">
                        <p>
                            Web development resource.
                        </p>
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

    </div>
</x-app-layout>