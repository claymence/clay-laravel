<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg my-3">
                <div class="p-6">
                    <h4 class="font-semibold p-2">
                        UserManager
                    </h4>
                    <hr class="my-3">
                    <livewire:admin-dashboard.user-manager />
                </div>
            </div>

            <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg my-3">
                <div class="p-6">
                    <h4 class="font-semibold p-2">
                        RoleManager
                    </h4>
                    <hr class="my-3">
                    <livewire:admin-dashboard.role-manager />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>