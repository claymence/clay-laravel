<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DevSandboxController extends Controller
{
    /**
     * Display the Dev Sandbox.
     */
    public function index(): View
    {
        return view('dev-sandbox.index');

        // with code below, the array is used to pass data to the view
        /* return view('dev-sandbox', [
            //
        ]); */
    }
}
