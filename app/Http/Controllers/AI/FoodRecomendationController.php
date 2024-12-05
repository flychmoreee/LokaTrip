<?php

namespace App\Http\Controllers\AI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;

class FoodRecomendationController extends Controller
{
    public function getFoodRecommendation(Request $request)
    {
        $location = $request->input('location');
        $category = $request->input('category');

        $request->validate([
            'location' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        $prompt = "Saya mencari makanan khas di daerah $location dengan kategori $category. Berikan saya
                    1. Nama makanan.
                    2. Deskripsi makanan.
                    3. Harga makanan atau minuman tersebut.
                        
                    Dan pastikan tempat tersebut benar benar ada di $location";

        $response = Gemini::geminiPro()->generateContent($prompt);

        if (isset($response)) {
            return response()->json([
                'status' => 'success',
                'data' => $response->text()
            ]);
        }

        return response()->json(['status' => 'error', 'message' => 'Unable to generate recommendation.']);
    }
}
