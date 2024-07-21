<?php

use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    #[Validate('required|string|max:255')]
    public string $message = '';

    public function store(): void
    {
        $validated = $this->validate();
        auth()->user()->chirps()->create($validated);
        $this->message = '';
        
        $this->dispatch('chirp-created'); 
    }

}; ?>

<div>
<form wire:submit="store"> 

<textarea

    wire:model="message"

    placeholder="{{ __('What\'s on your mind?') }}"

    class="block w-full border-gray-300/25 focus:border-orange-500/75 focus:ring focus:ring-orange-500 focus:ring-opacity-50 rounded-md shadow-sm dark:bg-zinc-800"

></textarea>

<x-input-error :messages="$errors->get('message')" class="mt-2" />

<x-primary-button class="mt-4">{{ __('Comment') }}</x-primary-button>

</form>
</div>