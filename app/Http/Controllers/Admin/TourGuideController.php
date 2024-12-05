<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourGuide;
use Illuminate\Support\Facades\Storage;

class TourGuideController extends Controller
{
    public function addTourGuide(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|unique:tour_guides,email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'gender' => 'required|string',
            'language' => 'required|string',
            'location' => 'required|string',
            'image_profile' => 'required|image',
        ]);

        $name = $request->name;

        $imagePath = $request->file('image_profile')->store("tour-guide/$name");

        $location = $request->location;
        $message = "Halo saya tertarik dengan wisata yang ada di $location";

        TourGuide::create([
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            'phone' => $this->convertPhoneToWaLink($request->phone, $message),
            'address' => $request->address,
            'gender' => $request->gender,
            'language' => $request->language,
            'location' => $location,
            'image_profile' => $imagePath,
        ]);

        return redirect()->route('tour-guides.index')->with('success', 'Tour guide created successfully.');
    }


    public function updateTourGuide(Request $request, TourGuide $tourGuide)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|unique:tour_guides,email,' . $tourGuide->id,
            'phone' => 'required|string',
            'address' => 'required|string',
            'gender' => 'required|string',
            'language' => 'required|string',
            'location' => 'required|string',
            'image_profile' => 'image',
        ]);

        $name = $request->name;

        if ($request->hasFile('image_profile')) {
            Storage::delete($tourGuide->image_profile);
            $imagePath = $request->file('image_profile')->store("tour-guide/$name");
            $tourGuide->image_profile = $imagePath;
        }

        $location = $request->location;
        $message = "Halo saya tertarik dengan wisata yang ada di $location";

        $tourGuide->update([
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            'phone' => $this->convertPhoneToWaLink($request->phone, $message),
            'address' => $request->address,
            'gender' => $request->gender,
            'language' => $request->language,
            'location' => $request->location,
        ]);

        return redirect()->route('tour-guides.index')->with('success', 'Tour guide updated successfully.');
    }

    public function deleteTourGuide(TourGuide $tourGuide)
    {
        Storage::delete($tourGuide->image_profile);

        $name = $tourGuide->name;
        Storage::deleteDirectory("tour-guide/$name");

        $tourGuide->delete();

        return redirect()->route('tour-guides.index')->with('success', 'Tour guide deleted successfully.');
    }

    private function convertPhoneToWaLink($phone, $message = '')
    {
        $phone = preg_replace('/\D/', '', $phone);

        if (substr($phone, 0, 1) === '0') {
            $phone = '62' . substr($phone, 1);
        }

        $encodedMessage = urlencode($message);

        return $message
            ? "https://wa.me/$phone?text=$encodedMessage"
            : "https://wa.me/$phone";
    }
}
