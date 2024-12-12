<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingPageViewController;

// Controller untuk Auth
use App\Http\Controllers\Auth\GoogleController;

// Middleware untuk Role Access
use App\Http\Middleware\RoleAccessMiddleware;

// Controller untuk Admin
use App\Http\Controllers\Admin\ViewMenuAdminController;
use App\Http\Controllers\Admin\TourGuideController;
use App\Http\Controllers\Admin\DestinationController;

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

// ... existing code ...
Route::get('/', [LandingPageViewController::class, 'showHero'])->name('landing-page');
// ... existing code ...

// Rute untuk login
Route::get('/auth/redirect', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/callback', [GoogleController::class, 'handleGoogleCallback']);


// Rute User
Route::middleware('auth')->prefix('user')->group(function () {
    Route::get('/dashboard', [MenuViewController::class, 'showHome'])->name('user.home');

    // Route untuk menu user
    Route::get('/destination', [MenuViewController::class, 'showDestination'])->name('user.destination');
    Route::get('/culinary', [MenuViewController::class, 'showFood'])->name('user.food');
    Route::get('/trip-plan', [MenuViewController::class, 'showTrip'])->name('user.trip');
    Route::get('/tour-guide', [MenuViewController::class, 'showTourGuide'])->name('user.tour-guide');
    Route::get('/detail-product/{id?}', [MenuViewController::class, 'showDetailProduct'])->name('user.detail-product');

    Route::get('/wishlist', function () {
        return view('components.user.section.wishlist');
    })->name('user.wishlist');

    Route::get('/my-ticket', function () {
        return view('components.user.section.my-ticket');
    })->name('user.my-ticket');

    Route::get('/history-transaction', function () {
        return view('components.user.section.history-transaction');
    })->name('user.history-transaction');

    // Route for AI
    Route::post('/trip-plan', [TripPlanController::class, 'getTripPlan'])->name('trip.plan');
    Route::post('/food-recommendation', [FoodRecomendationController::class, 'getFoodRecommendation'])->name('food.recommendation');
    Route::post('/budget-recommendation', [BudgetRecommendationController::class, 'getBudgetRecommendation'])->name('budget.recommendation');
});

// Rute Admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [ViewMenuAdminController::class, 'showDestination'])->name('admin.destination');
    Route::get('/tour-guides', [ViewMenuAdminController::class, 'showTourGuide'])->name('admin.tour-guides');

    Route::get('/hero', [HeroController::class, 'index'])->name('admin.hero');
    Route::post('/hero', [HeroController::class, 'addHero'])->name('hero.add');
    Route::put('/hero/{hero}', [HeroController::class, 'updateHero'])->name('hero.update');
    Route::delete('/hero/{hero}', [HeroController::class, 'deleteHero'])->name('hero.delete');

    Route::get('/about', [AboutUsController::class, 'index'])->name('admin.about-us');
    Route::post('/about', [AboutUsController::class, 'addAboutUs'])->name('about-us.add');
    Route::put('/about/{aboutUs}', [AboutUsController::class, 'updateAboutUs'])->name('about-us.update');
    Route::delete('/about/{aboutUs}', [AboutUsController::class, 'deleteAboutUs'])->name('about-us.delete');

    Route::get('/faq', [FaqController::class, 'index'])->name('admin.faq');
    Route::post('/faq', [FaqController::class, 'addFaq'])->name('faq.add');
    Route::put('/faq/{faq}', [FaqController::class, 'updateFaq'])->name('faq.update');
    Route::delete('/faq/{faq}', [FaqController::class, 'deleteFaq'])->name('faq.delete');

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
