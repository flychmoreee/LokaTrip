<?php

namespace App\Http\Controllers\AI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;

class BudgetRecommendationController extends Controller
{
    public function getTripPlan(Request $request)
    {
        $request->validate([
            'user_location' => 'required|string|max:255',
            'destination_city' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'budget' => 'required|numeric|min:0',
            'activities' => 'nullable|string',
            'duration' => 'nullable|string|max:255',
            'crowd_preference' => 'nullable|string|max:255',
            'transportation' => 'nullable|string|max:255',
            'weather_preference' => 'nullable|string|max:255',
        ]);

        $userLocation = $request->input('user_location');
        $destinationCity = $request->input('destination_city');
        $category = $request->input('category');
        $budget = $request->input('budget');
        $activities = $request->input('activities', 'Tidak ada preferensi khusus');
        $duration = $request->input('duration', 'Tidak ditentukan');
        $crowdPreference = $request->input('crowd_preference', 'Tidak ada preferensi');
        $transportation = $request->input('transportation', 'Tidak ditentukan');
        $weatherPreference = $request->input('weather_preference', 'Tidak ada preferensi');

        // Generate prompt based on input
        $prompt = "Saya sedang merencanakan perjalanan wisata dari $userLocation ke $destinationCity. 
        Saya memiliki budget sebesar Rp$budget. Saya mencari kategori wisata $category dan menyukai aktivitas seperti $activities. 
        Perjalanan ini direncanakan untuk $duration dan saya lebih suka tempat wisata yang $crowdPreference. 
        Mohon rekomendasikan tempat terbaik dengan transportasi $transportation, serta mempertimbangkan cuaca $weatherPreference.";

        // Call Gemini AI API
        $response = Gemini::geminiPro()->generateContent($prompt);

        if (isset($response)) {
            return response()->json([
                'status' => 'success',
                'data' => $response->text()
            ]);
        }

        return response()->json(['status' => 'error', 'message' => 'Unable to generate trip plan.']);
    }
}
