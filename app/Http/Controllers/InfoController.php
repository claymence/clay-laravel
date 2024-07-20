<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class InfoController extends Controller
{
    /**
     * Display the Dev Sandbox.
     */
    public function index(): View
    {
        return view('info.index');

        // with code below, the array is used to pass data to the view
        /* return view('info', [
            //
        ]); */
    }
}
