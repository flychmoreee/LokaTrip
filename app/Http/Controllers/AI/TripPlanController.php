<?php

namespace App\Http\Controllers\AI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;
use App\Models\TripPrompt;
use Illuminate\Support\Facades\Auth;

class TripPlanController extends Controller
{
    public function getTripPlan(Request $request)
    {
        $request->validate([
            'user_location' => 'required|string|max:255',
            'destination_locations' => 'required|string',
            'category' => 'required|string|max:255',
        ]);

        $userLocation = $request->input('user_location');
        $destinationLocations = array_map('trim', explode(',', $request->input('destination_locations')));
        $category = $request->input('category');

        $prompt = "Bantu saya membuat jadwal perjalanan dari lokasi saya yang sekarang di $userLocation ke tempat-tempat berikut: " . implode(', ', $destinationLocations) . ".  
        Buatlah jadwal perjalanan lengkap, termasuk waktu yang tepat untuk setiap tempat dan sesuaikan dengan kondisi cuaca pada jam tersebut, serta rekomendasikan transportasi murah yang bisa digunakan berdasarkan kategori perjalanan $category. 
        Pastikan semua tempat yang saya sebutkan benar-benar ada dan dapat dijangkau dari lokasi saya.";

        $response = Gemini::geminiPro()->generateContent($prompt);

        if (isset($response)) {
            // Save response to database
            TripPrompt::create([
                'user_id' => Auth::id(),
                'prompt' => $response->text()
            ]);
        }

        return redirect()->route('user.trip');
    }
}
