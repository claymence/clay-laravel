<?php

namespace App\Livewire\DevSandbox;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ApiTest extends Component
{
    public $playerData = [];

    public function mount(): void
    {
        $this->fetchPlayerData();
    }

    public function fetchPlayerData(): void
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('LICHESS_API_KEY_NO_PERMISSIONS_SET')
        ])->get('https://lichess.org/api/player');

        if ($response->successful()) {
            $this->playerData = $response->json();
        } else {
            // Handle the error
            $this->playerData = [];
        }
    }

    public function render(): mixed
    {
        return view('livewire.dev-sandbox.api-test', ['playerData' => $this->playerData]);
    }
}
