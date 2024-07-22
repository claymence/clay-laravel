<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight"> -->
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Contact | Legal notice') }}
        </h2>
    </x-slot>

    <div class="pt-24 pb-16">
        <div class="max-w-fit mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-900/50 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="my-16 mx-20">
                    <!-- <div class="mb-8">
                        Clemens Wähner
                    </div> -->
                    <div x-data="{ part1: 'clay', part2: 'dev', part3: 'mailbox', part4: 'org' }">
                        <a :href="'mailto:' + part1 + '.' + part2 + '@' + part3 + '.' + part4">
                            <span x-text="part1" class="text-3xl"></span>
                            <!-- <span class="text-xs"><i class="fas fa-circle-dot"></i></span> -->
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" viewBox="0 0 20 20" fill="currentColor">
                                <circle cx="10" cy="10" r="2"/>
                            </svg> -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2 inline" viewBox="0 0 10 10" fill="currentColor">
                                <circle cx="5" cy="5" r="4"/>
                            </svg>
                            <span x-text="part2" class="text-3xl"></span>
                            <span class="text-3xl"><i class="fas fa-at"></i></span>
                            <span x-text="part3" class="text-3xl"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2 inline" viewBox="0 0 10 10" fill="currentColor">
                                <circle cx="5" cy="5" r="4"/>
                            </svg>
                            <span x-text="part4" class="text-3xl"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-16">
        <div class="max-w-fit mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-900/50 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="my-20 mx-8 sm:mx-12 lg:mx-16">
                    <p class="mb-4 font-extrabold">MIT license</p>
                    <p class="mb-4">Copyright (c) 2024 Clemens Wähner</p>
                    <p class="mb-2 max-w-2xl">
                        Permission is hereby granted, free of charge, to any person obtaining a copy
                        of this software and associated documentation files (the "Software"), to deal
                        in the Software without restriction, including without limitation the rights
                        to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                        copies of the Software, and to permit persons to whom the Software is
                        furnished to do so, subject to the following conditions:
                    </p>
                    <p class="mb-2 max-w-2xl">
                        The above copyright notice and this permission notice shall be included in all
                        copies or substantial portions of the Software.
                    </p>
                    <p class="max-w-2xl">
                        THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                        IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                        FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                        AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                        LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                        OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
                        SOFTWARE.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
