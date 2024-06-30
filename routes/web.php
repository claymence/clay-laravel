<?php

use App\Http\Controllers\JwstController;
use App\Http\Controllers\DevSandboxController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

/* 
note for current access control / authorization approach

example:
    - middleware 'role:manage_users' checks if the role attached to a user has the permission 'manage_users'
    - User, Role and Permission are defined as models
    - users have a role id in their table (users n:1 role), new users get the role 'user' by default
    - permissions are assigned to roles in a pivot table (roles n:n permissions)

    admin frontend for editing users, roles and permissions WIP

 */

 Route::view('/', 'welcome')
    ->name('root');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('chirps', [ChirpController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('chirps');

Route::get('/jwst', [JwstController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('jwst');

Route::get('admin-dashboard', [AdminDashboardController::class, 'index'])
    ->middleware(['auth', 'verified', 'role:manage_users'])
    ->name('admin-dashboard');

Route::get('dev-sandbox', [DevSandboxController::class, 'index'])
    ->middleware(['auth', 'verified', 'role:view_dev-sandbox'])
    ->name('dev-sandbox');

require __DIR__.'/auth.php';
