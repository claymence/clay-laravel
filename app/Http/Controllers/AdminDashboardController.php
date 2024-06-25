<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index(): View
    {
        //return view('admin-dashboard');

        return view('admin-dashboard', [
            //
        ]);
    }
}
