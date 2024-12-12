<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\BudgetPrompt;
use App\Models\FoodPrompt;
use App\Models\TripPrompt;
use App\Models\TourGuides;
use App\Models\Destinations;
use Illuminate\Support\Facades\Log;

class MenuViewController extends Controller
{

    public function showHome()
    {
        $destinations = Destinations::all();
        return view('components.user.section.dashboardUser', compact('destinations'));
    }
    public function showDestination()
    {
        $userId = Auth::id();
        $latestResult = BudgetPrompt::where('user_id', $userId)->latest()->first();
        $destinations = Destinations::all();
        Log::info('Latest Budget Prompt:', ['latestResult' => $latestResult]);
        return view('components.user.section.destination', compact('latestResult', 'destinations'));
    }
    public function showFood()
    {
        $userId = Auth::id();
        $latestResult = FoodPrompt::where('user_id', $userId)->latest()->first();
        Log::debug('Latest Food Prompt Result:', ['latestResult' => $latestResult]);
        return view('components.user.section.culinary', compact('latestResult'));
    }

    public function showTrip()
    {
        $userId = Auth::id();
        $latestResult = TripPrompt::where('user_id', $userId)->latest()->first();
        return view('components.user.section.trip-plan', compact('latestResult'));
    }

    public function showTourGuide()
    {
        $tourGuides = TourGuides::all();
        return view('components.user.section.tour-guide', compact('tourGuides'));
    }
    public function showDetailProduct($id)
    {
        $destination = Destinations::find($id);
        return view('components.user.section.detail-product', compact('destination'));
    }
}
