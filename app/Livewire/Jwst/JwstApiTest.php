<?php

namespace App\Livewire\Jwst;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class JwstApiTest extends Component
{
    public $data = [];
    public $error = null;

    public function fetchData()
    {
        $response = Http::withHeaders([
            'X-API-KEY' => env('JWST_API_KEY')
        ])->get('https://api.jwstapi.com/suffix/list');

        if ($response->successful()) {
            $this->data = $response->json()['body'];
        } else {
            $this->error = $response->body();
        }
    }

    public function render()
    {
        return view('livewire.jwst.jwst-api-test', [
            'data' => $this->data,
            'error' => $this->error
        ]);
    }
}
