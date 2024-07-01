<?php

namespace App\Livewire\Settings;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserSettings extends Component
{
    public $settings;

    public function mount()
    {
        $user = Auth::user();
        $this->settings = $user->settings ? $user->settings->toArray() : [];
    }

    public function save()
    {
        $user = Auth::user();
        $user->settings->update($this->settings);
        session()->flash('message', 'Settings updated successfully.');
    }

    public function render()
    {
        return view('livewire.settings.user-settings');
    }
}
