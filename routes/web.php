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
use App\Http\Controllers\AI\BudgetRecommendationController;

Route::get('/', function () {
    return view('landingPage');
});

// Rute untuk login
Route::get('/auth/redirect', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/callback', [GoogleController::class, 'handleGoogleCallback']);


// Rute User
Route::prefix('user')->group(function () {
    Route::get('/dashboard', function () {
        return view('components.user.section.dashboardUser');
    });

    Route::get('/destination', function () {
        return view('components.user.section.destination');
    })->name('user.destination');
    
    Route::get('/tour-guide', function () {
        return view('components.user.section.tour-guide');
    })->name('user.tour-guide');

    Route::get('/detail-product', function () {
        return view('components.user.section.detail-product');
    })->name('user.detail-product');

    Route::get('/culinary', function () {
        return view('components.user.section.culinary');
    })->name('user.culinary');

    Route::get('/wishlist', function () {
        return view('components.user.section.wishlist');
    })->name('user.wishlist');

    Route::get('/my-ticket', function () {
        return view('components.user.section.my-ticket');
    })->name('user.my-ticket');

    Route::get('/trip-plan', function () {
        return view('components.user.section.trip-plan');
    })->name('user.trip-plan');

    Route::get('/history-transaction', function () {
        return view('components.user.section.history-transaction');
    })->name('user.history-transaction');

    Route::post('/wishlist/{destinationId}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
    Route::delete('/wishlist/{destinationId}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
});

// Rute Admin
Route::prefix('admin')->group(function () {
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

Route::post('/budget-recommendation', [BudgetRecommendationController::class, 'getTripPlan'])->name('budget.recommendation');
Route::get('/budget-recommendation', function () {
    return view('testBudget');
});
