<?php

namespace App\Livewire\Jwst;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
//use Illuminate\Support\Facades\Cache;
use Livewire\WithPagination;

class JwstApiTest extends Component
{
    public $data;
    public $error = null;

    use WithPagination;

    public $perPage = 15;
    public $page;

    public function fetchData($page = 1, $perPage = 15)
    {
        $response = Http::withHeaders([
            'X-API-KEY' => env('JWST_API_KEY')
        ])->get('https://api.jwstapi.com/all/suffix/_thumb', [
            'page' => $page,
            'perPage' => $perPage
        ]);

        if ($response->successful()) {
            $thumbnails = collect($response->json()['body'])->filter(function ($item) {
                return isset($item['suffix']) && $item['suffix'] === '_thumb' && $item['file_type'] === 'jpg';
            });

            $this->data = $thumbnails->paginate($perPage); // Paginate the data

        } else {
            $this->error = $response->body();
        }
    }

    public function render()
    {
        $data = $this->data;

        return view('livewire.jwst.jwst-api-test', [
            'data' => $data,
            'error' => $this->error
        ]);
    }
}

/* class JwstApiTest extends Component
{
    public $data = [];
    public $error = null;

    public function fetchData($page = 1, $perPage = 15)
    {
        $response = Http::withHeaders([
            'X-API-KEY' => env('JWST_API_KEY')
        ])->get('https://api.jwstapi.com/all/suffix/_thumb', [
            'page' => $page,
            'perPage' => $perPage
        ]);

        if ($response->successful()) {
            $thumbnails = collect($response->json()['body'])->filter(function ($item) {
                return $item['suffix'] === '_thumb' && $item['file_type'] === 'jpg';
            });

            $this->data = $thumbnails->all();
        } else {
            $this->error = $response->body();
        }
    }

    public function render()
    {
        return view('livewire.jwst.jwst-api-test', [
            'data' => collect($this->data)->paginate(15),
            'error' => $this->error
        ]);
    }
} */



    // TEST CODE - test with api call below successful

    /* public function fetchData()
    {
        $response = Http::withHeaders([
            'X-API-KEY' => env('JWST_API_KEY')
        ])->get('https://api.jwstapi.com/suffix/list');

        if ($response->successful()) {
            $this->data = $response->json()['body'];
        } else {
            $this->error = $response->body();
        }
    } */

    /* public function render()
    {
        return view('livewire.jwst.jwst-api-test', [
            'data' => $this->data,
            'error' => $this->error
        ]);
    } */