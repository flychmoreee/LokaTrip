<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\BudgetPrompt;
use App\Models\FoodPrompt;
use App\Models\TripPrompt;
use Illuminate\Support\Facades\Log;

class MenuViewController extends Controller
{
    public function showDestination()
    {
        $userId = Auth::id();
        $latestResult = BudgetPrompt::where('user_id', $userId)->latest()->first();
        Log::info('Latest Budget Prompt:', ['latestResult' => $latestResult]);
        return view('components.user.section.destination', compact('latestResult'));
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
}
