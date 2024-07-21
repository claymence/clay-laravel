<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display the Dev Sandbox.
     */
    public function index(): View
    {
        return view('contact.index');
    }
}
