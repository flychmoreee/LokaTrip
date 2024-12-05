<?php

use Illuminate\Support\Facades\Route;

// Controller untuk Auth
use App\Http\Controllers\Auth\GoogleController;

// Middleware untuk Role Access
use App\Http\Middleware\RoleAccessMiddleware;

// Controller untuk Admin
use App\Http\Controllers\Admin\TourGuideController;
use App\Http\Controllers\Admin\DestinationController;

// Controller untuk User
use App\Http\Controllers\User\WishlistController;

// Controller untuk AI
use App\Http\Controllers\AI\FoodRecomendationController;
use App\Http\Controllers\AI\TripPlanController;

Route::get('/', function () {
    return view('landingPage');
});

// Rute untuk login
Route::get('/auth/redirect', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/callback', [GoogleController::class, 'handleGoogleCallback']);


// Rute User
Route::middleware(['auth', RoleAccessMiddleware::class . ':user'])->prefix('user')->group(function () {
    Route::get('/dashboard', function () {
        return response()->json(['message' => 'Welcome to User Dashboard!']);
    });

    Route::post('/wishlist/{destinationId}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
    Route::delete('/wishlist/{destinationId}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
});

// Rute Admin
Route::middleware(['auth', RoleAccessMiddleware::class . ':admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return response()->json(['message' => 'Welcome to Admin Dashboard!']);
    });

    Route::post('/tour-guides', [TourGuideController::class, 'addTourGuide'])->name('tour-guides.add');
    Route::put('/tour-guides/{tourGuide}', [TourGuideController::class, 'updateTourGuide'])->name('tour-guides.update');
    Route::delete('/tour-guides/{tourGuide}', [TourGuideController::class, 'deleteTourGuide'])->name('tour-guides.delete');

    Route::post('/destinations', [DestinationController::class, 'addDestination'])->name('destinations.add');
    Route::put('/destinations/{destination}', [DestinationController::class, 'updateDestination'])->name('destinations.update');
    Route::delete('/destinations/{destination}', [DestinationController::class, 'deleteDestination'])->name('destinations.delete');
});

// Rute untuk Logout
Route::post(
    '/logout',
    [GoogleController::class, 'logout']
)->name('logout');

Route::post('/trip-plan', [TripPlanController::class, 'getTripPlan'])->name('trip.plan');
Route::get('/trip-plan', function () {
    return view('testTrip');
});

Route::post('/food-recommendation', [FoodRecomendationController::class, 'getFoodRecommendation'])->name('food.recommendation');
Route::get('/food-recommendation', function () {
    return view('testFood');
});
