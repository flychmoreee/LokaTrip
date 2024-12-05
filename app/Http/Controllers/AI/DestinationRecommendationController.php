<?php

namespace App\Http\Controllers\AI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;

class DestinationRecommendationController extends Controller
{
    public function getDestinationRecommendation(Request $request)
    {
        $request->validate([
            'destination_city' => 'required|string|max:255',
            'travel_category' => 'required|string|max:255',
            'experience_type' => 'required|string|max:255',
        ]);

        $destinationCity = $request->input('destination_city');
        $travelCategory = $request->input('travel_category');
        $experienceType = $request->input('experience_type');

        $prompt = "Saya sedang merencanakan perjalanan ke kota $destinationCity. Saya mencari rekomendasi tempat wisata 
                    yang sesuai dengan kategori $travelCategory dan memberikan pengalaman $experienceType. 
                    Mohon berikan beberapa rekomendasi tempat, deskripsi singkat, aktivitas yang dapat dilakukan di sana, 
                    dan perkiraan biaya atau transportasi untuk mencapainya.";

        $response = Gemini::geminiPro()->generateContent($prompt);

        if (isset($response)) {
            return response()->json([
                'status' => 'success',
                'data' => $response->text(),
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Unable to generate travel recommendations at the moment.',
        ]);
    }
}
