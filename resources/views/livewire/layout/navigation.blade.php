<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 dark:bg-zinc-900 dark:border-zinc-800">
<!-- <nav x-data="{ open: false }" class="border-b"> -->

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('root') }}" wire:navigate>
                        <x-application-logo class="block h-9 w-auto fill-current" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </x-nav-link>
        
                    <x-nav-link :href="route('jwst')" :active="request()->routeIs('jwst')" wire:navigate>
                        {{ __('James Webb Space Telescope') }}
                    </x-nav-link>

                    <x-nav-link :href="route('comments')" :active="request()->routeIs('comments')" wire:navigate>
                        {{ __('Comments') }}
                    </x-nav-link>

                    <x-nav-link :href="route('info')" :active="request()->routeIs('info')" wire:navigate>
                        {{ __('Info') }}
                    </x-nav-link>
        @auth
                    @can('has-permission', 'view_admin-dashboard')
                        <x-nav-link :href="route('admin-dashboard')" :active="request()->routeIs('admin-dashboard')" wire:navigate>
                            {{ __('Admin Dashboard') }}
                        </x-nav-link>
                    @endcan

                    @can('has-permission', 'view_dev-sandbox')
                        <x-nav-link :href="route('dev-sandbox')" :active="request()->routeIs('dev-sandbox')" wire:navigate>
                            {{ __('Dev Sandbox') }}
                        </x-nav-link>
                    @endcan
        @endauth
                </div>
            </div>

        @auth
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <!-- <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"> -->
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150">
                            <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')" wire:navigate>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('settings')" wire:navigate>
                            {{ __('Settings') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>
        @else
            <!-- login and register links for unauthenticated users -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <a
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Log in
                </a>
                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Register
                    </a>
                @endif
            </div>
        @endauth


            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <!-- <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"> -->
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
    
            <x-responsive-nav-link :href="route('jwst')" :active="request()->routeIs('jwst')" wire:navigate>
                {{ __('James Webb Space Telescope') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('comments')" :active="request()->routeIs('comments')" wire:navigate>
                {{ __('Comments') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('info')" :active="request()->routeIs('info')" wire:navigate>
                {{ __('Info') }}
            </x-responsive-nav-link>
    @auth
            @can('has-permission', 'view_admin-dashboard')
                <x-responsive-nav-link :href="route('admin-dashboard')" :active="request()->routeIs('admin-dashboard')" wire:navigate>
                    {{ __('Admin Dashboard') }}
                </x-responsive-nav-link>
            @endcan

            @can('has-permission', 'view_dev-sandbox')
                <x-responsive-nav-link :href="route('dev-sandbox')" :active="request()->routeIs('dev-sandbox')" wire:navigate>
                    {{ __('Dev Sandbox') }}
                </x-responsive-nav-link>
            @endcan
    @endauth
        </div>

        <!-- Responsive Settings Options -->
    @auth
        <!-- <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
            </div> -->
        <div class="pt-4 pb-1 border-t">
            <div class="px-4">
                <div class="font-medium text-base" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="font-medium text-sm">{{ auth()->user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('settings')" wire:navigate>
                    {{ __('Settings') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
    @endauth
    </div>
    
</nav>
