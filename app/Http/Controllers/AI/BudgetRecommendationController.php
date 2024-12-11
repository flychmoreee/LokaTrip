<?php

namespace App\Http\Controllers\AI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;
use Illuminate\Support\Facades\Log;
use App\Models\BudgetPrompt;
use Illuminate\Support\Facades\Auth;

class BudgetRecommendationController extends Controller
{
    public function getBudgetRecommendation(Request $request)
    {
        $request->validate([
            'location' => 'required|string|max:255',
            'budget' => 'required|numeric|min:0',
        ]);

        $location = $request->input('location');
        $budget = $request->input('budget');

        // Generate prompt based on input
        $prompt = "Saya ingin melakukan perjalanan wisata ke $location dengan budget sebesar Rp$budget. 
        Mohon buatkan rencana perjalanan yang mencakup destinasi wisata, aktivitas, dan transportasi yang sesuai dengan budget tersebut.";

        // Call Gemini AI API
        $response = Gemini::geminiPro()->generateContent($prompt);

        if (isset($response)) {
            // Save response to database
            BudgetPrompt::create([
                'user_id' => Auth::id(),
                'prompt' => $response->text(),
            ]);
        }

        return redirect()->route('user.destination');
    }
}
