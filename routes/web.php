<?php

use App\Http\Controllers\JwstController;
use App\Http\Controllers\DevSandboxController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ContactController;
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
    /* ->middleware(['auth', 'verified']) */
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('settings', [SettingsController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('settings');

Route::get('comments', [ChirpController::class, 'index'])
    /* ->middleware(['auth', 'verified']) */
    ->name('comments');

Route::get('/jwst', [JwstController::class, 'index'])
    //->middleware(['auth', 'verified'])
    ->name('jwst');

Route::get('info', [InfoController::class, 'index'])
    /* ->middleware(['auth', 'verified']) */
    ->name('info');

Route::get('contact', [ContactController::class, 'index'])
    /* ->middleware(['auth', 'verified']) */
    ->name('contact');

Route::get('admin-dashboard', [AdminDashboardController::class, 'index'])
    ->middleware(['auth', 'verified', 'role:manage_users'])
    ->name('admin-dashboard');

Route::get('dev-sandbox', [DevSandboxController::class, 'index'])
    ->middleware(['auth', 'verified', 'role:view_dev-sandbox'])
    ->name('dev-sandbox');

require __DIR__.'/auth.php';
