<?php

namespace App\Livewire\Jwst;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
//use Illuminate\Support\Facades\Cache;
use Livewire\WithPagination;

class JwstApiTest extends Component
{
    public $data;

    public $data2;

    public $error = null;

    use WithPagination;

    public $perPage = 10;
    public $page = 1;


    public function mount()
    {
        $this->fetchThumbnails();
    }

    public function fetchSuffixList()
    {
        $response = Http::withHeaders([
            'X-API-KEY' => env('JWST_API_KEY')
        ])->get('https://api.jwstapi.com/suffix/list');

        if ($response->successful()) {
            $this->data2 = $response->json()['body'];
        } else {
            $this->error = $response->body();
        }
    }

    public function fetchThumbnails($page = 1, $perPage = 10)
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

            // without conversion to json
            /* $thumbnails = collect($response['body'])->filter(function ($item) {
                return isset($item['suffix']) && $item['suffix'] === '_thumb' && $item['file_type'] === 'jpg';
            }); */
            
            $this->data = $thumbnails->forPage($page, $perPage);
            /* $this->data = $thumbnails; */

        } else {
            $this->error = $response->body();
        }
    }

    public function render()
    {
        return view('livewire.jwst.jwst-api-test', [
            'data' => $this->data,
            /* 'data' => $this->data->forPage($this->page, $this->perPage), */
            'data2' => $this->data2,
            'error' => $this->error
        ]);
    }
}