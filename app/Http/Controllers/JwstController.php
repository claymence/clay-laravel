<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class JwstController extends Controller
{
    public function index(): View
    {
        return view('jwst.index');
    }
}
