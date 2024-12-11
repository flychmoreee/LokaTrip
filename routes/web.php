<?php

use Illuminate\Support\Facades\Route;

// Controller untuk Auth
use App\Http\Controllers\Auth\GoogleController;

// Middleware untuk Role Access
use App\Http\Middleware\RoleAccessMiddleware;

// Controller untuk Admin
use App\Http\Controllers\Admin\ViewMenuAdminController;
use App\Http\Controllers\Admin\TourGuideController;
// Controller untuk User
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\MenuViewController;

// Controller untuk AI
use App\Http\Controllers\AI\FoodRecomendationController;
use App\Http\Controllers\AI\TripPlanController;
use App\Http\Controllers\AI\BudgetRecommendationController;

// Controller untuk Landing Page
use App\Http\Controllers\LandingPage\HeroController;
use App\Http\Controllers\LandingPage\AboutUsController;
use App\Http\Controllers\LandingPage\FaqController;

Route::get('/', function () {
    return view('landingPage');
});

// Rute untuk login
Route::get('/auth/redirect', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/callback', [GoogleController::class, 'handleGoogleCallback']);


// Rute User
Route::middleware('auth')->prefix('user')->group(function () {
    Route::get('/dashboard', function () {
        return view('components.user.section.dashboardUser');
    })->name('user.dashboard');

    // Route untuk menu user
    Route::get('/destination', [MenuViewController::class, 'showDestination'])->name('user.destination');
    Route::get('/culinary', [MenuViewController::class, 'showFood'])->name('user.food');
    Route::get('/trip-plan', [MenuViewController::class, 'showTrip'])->name('user.trip');

    Route::get('/tour-guide', function () {
        return view('components.user.section.tour-guide');
    })->name('user.tour-guide');

    Route::get('/detail-product', function () {
        return view('components.user.section.detail-product');
    })->name('user.detail-product');

    Route::get('/wishlist', function () {
        return view('components.user.section.wishlist');
    })->name('user.wishlist');

    Route::get('/my-ticket', function () {
        return view('components.user.section.my-ticket');
    })->name('user.my-ticket');

    Route::get('/history-transaction', function () {
        return view('components.user.section.history-transaction');
    })->name('user.history-transaction');

    Route::post('/wishlist/{destinationId}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
    Route::delete('/wishlist/{destinationId}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');

    // Route for AI
    Route::post('/trip-plan', [TripPlanController::class, 'getTripPlan'])->name('trip.plan');
    Route::post('/food-recommendation', [FoodRecomendationController::class, 'getFoodRecommendation'])->name('food.recommendation');
    Route::post('/budget-recommendation', [BudgetRecommendationController::class, 'getBudgetRecommendation'])->name('budget.recommendation');
});

// Rute Admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [ViewMenuAdminController::class, 'showDestination'])->name('admin.destination');
    Route::get('/tour-guides', [ViewMenuAdminController::class, 'showTourGuide'])->name('admin.tour-guides');
    Route::post('/tour-guides', [TourGuideController::class, 'store']);
    Route::post('/tour-guides/update', [TourGuideController::class, 'update'])->name('tour-guides.update');
});

// Rute untuk Logout
Route::post(
    '/logout',
    [GoogleController::class, 'logout']
)->name('logout');
