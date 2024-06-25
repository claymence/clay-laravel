<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')
    ->name('root');

Route::get('admin-dashboard', [AdminDashboardController::class, 'index'])
    ->middleware(['auth', 'role:manage_users'])
    ->name('admin-dashboard');

Route::get('chirps', [ChirpController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('chirps'); 

// maybe rename the RoleMiddleware to PermissionMiddleware?

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'role:view_dashboard'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
