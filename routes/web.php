<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Middleware\RoleAccessMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk login
Route::get('/auth/redirect', [GoogleController::class, 'redirectToGoogle']);
Route::get('/auth/callback', [GoogleController::class, 'handleGoogleCallback']);

// Rute User
Route::middleware(['auth', RoleAccessMiddleware::class . ':user'])->prefix('user')->group(function () {
    Route::get('/dashboard', function () {
        return response()->json(['message' => 'Welcome to User Dashboard!']);
    });

    Route::get('/profile', function () {
        return "User Profile Page";
    });
});

// Rute Admin
Route::middleware(['auth', RoleAccessMiddleware::class . ':admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return response()->json(['message' => 'Welcome to Admin Dashboard!']);
    });

    Route::get('/manage-users', function () {
        return "Manage Users Page";
    });
});

// Rute untuk Logout
Route::post(
    '/logout',
    [GoogleController::class, 'logout']
)->name('logout');
