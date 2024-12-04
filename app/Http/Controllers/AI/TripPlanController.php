<?php

namespace App\Http\Controllers\AI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;

class TripPlanController extends Controller
{
    public function getTripPlan(Request $request)
    {
        $request->validate([
            'user_location' => 'required|string|max:255',
            'destination_locations' => 'required|string', // Ubah dari array ke string
            'category' => 'required|string|max:255',
        ]);

        $userLocation = $request->input('user_location');
        // Ubah dari string menjadi array dengan memisahkan berdasarkan koma
        $destinationLocations = array_map('trim', explode(',', $request->input('destination_locations')));
        $category = $request->input('category');

        // Membuat prompt untuk AI
        $prompt = "Bantu saya membuat jadwal perjalanan dari lokasi saya yang sekarang di $userLocation ke tempat-tempat berikut: " . implode(', ', $destinationLocations) . ".  
    Buatlah jadwal perjalanan lengkap, termasuk waktu yang tepat untuk setiap tempat, dan rekomendasikan transportasi murah yang bisa digunakan berdasarkan kategori perjalanan $category. 
    Pastikan semua tempat yang saya sebutkan benar-benar ada dan dapat dijangkau dari lokasi saya.";

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
