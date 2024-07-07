<?php
/* 
copied from laravels detailed debug mode error screen
vendor\laravel\framework\src\Illuminate\Foundation\resources\exceptions\renderer\components\theme-switcher.blade.php
 */
?>

<script>

    (function () {
        const darkStyles = document.querySelector('style[data-theme="dark"]')?.textContent
        const lightStyles = document.querySelector('style[data-theme="light"]')?.textContent

        const removeStyles = () => {
            document.querySelector('style[data-theme="dark"]')?.remove()
            document.querySelector('style[data-theme="light"]')?.remove()
        }

        removeStyles()

        setDarkClass = () => {
            removeStyles()

            const isDark = localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)

            isDark ? document.documentElement.classList.add('dark') : document.documentElement.classList.remove('dark')

            if (isDark) {
                document.head.insertAdjacentHTML('beforeend', `<style data-theme="dark">${darkStyles}</style>`)
            } else {
                document.head.insertAdjacentHTML('beforeend', `<style data-theme="light">${lightStyles}</style>`)
            }
        }

        setDarkClass()

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setDarkClass)
    })();
</script>

<div
    class="relative"
    x-data="{
        menu: false,
        theme: localStorage.theme,
        darkMode() {
            this.theme = 'dark'
            localStorage.theme = 'dark'
            setDarkClass()
        },
        lightMode() {
            this.theme = 'light'
            localStorage.theme = 'light'
            setDarkClass()
        },
        systemMode() {
            this.theme = undefined
            localStorage.removeItem('theme')
            setDarkClass()
        },
    }"
    @click.outside="menu = false"
>
    <button
        x-cloak
        class="block rounded p-1 hover:bg-gray-100 dark:hover:bg-gray-800"
        :class="theme ? 'text-gray-700 dark:text-gray-300' : 'text-gray-400 dark:text-gray-600 hover:text-gray-500 focus:text-gray-500 dark:hover:text-gray-500 dark:focus:text-gray-500'"
        @click="menu = ! menu"
    >
        Theme-Switcher
    </button>
<!-- 
class="absolute right-0 z-10 flex origin-top-right flex-col rounded-md bg-white shadow-xl ring-1 ring-gray-900/5 dark:bg-gray-800"
class="absolute bottom-full flex flex-col rounded-md bg-white shadow-xl ring-1 ring-gray-900/5 dark:bg-gray-800"

bg-white shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] dark:bg-zinc-900 dark:ring-zinc-800
-->
    <div
        x-show="menu"
        class="absolute bottom-full flex flex-col rounded-md bg-white shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] dark:bg-zinc-900 dark:ring-zinc-800"
        style="display: none"
        @click="menu = false"
    >
        <button
            class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700"
            :class="theme === 'light' ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'"
            @click="lightMode()"
        >
            Light
        </button>
        <button
            class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700"
            :class="theme === 'dark' ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'"
            @click="darkMode()"
        >
            Dark
        </button>
        <button
            class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700"
            :class="theme === undefined ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'"
            @click="systemMode()"
        >
            System
        </button>
    </div>
</div>
