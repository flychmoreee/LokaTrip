<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourGuides;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class TourGuideController extends Controller
{
    public function addTourGuide(Request $request)
    {
        Log::info($request->all());
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string',
                'instagram' => 'required|string',
                'image_profile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            Log::info('Validasi berhasil');
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validasi gagal: ' . json_encode($e->errors()));
            return redirect()->back()->withErrors($e->errors())->withInput();
        }


        // Store image profile in 'public' disk
        $imageName = time() . '_' . $request->file('image_profile')->getClientOriginalName();
        $imagePath = $request->file('image_profile')->storeAs("public/tour-guide/", $imageName);

        // Remove 'public/' from path for database storage
        $relativePath = str_replace('public/', '', $imagePath);

        TourGuides::create([
            'name' => $request->name,
            'phone' => $this->convertPhoneToWaLink($request->phone),
            'instagram' => $this->convertInstagramToLink($request->instagram),
            'image_profile' => $relativePath,
        ]);

        return redirect()->route('admin.tour-guides')->with('success', 'Tour guide created successfully.');
    }


    public function updateTourGuide(Request $request, TourGuides $tourGuide)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string',
            'instagram' => 'required|string',
            'image_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $name = $request->name;
        $imagePath = $tourGuide->image_profile;

        if ($request->hasFile('image_profile')) {
            // Hapus gambar lama
            Storage::delete("public/{$tourGuide->image_profile}");

            // Simpan gambar baru
            $imageName = time() . '_' . $request->file('image_profile')->getClientOriginalName();
            $imagePath = $request->file('image_profile')->storeAs("public/tour-guide/$name", $imageName);
        }

        $tourGuide->update([
            'name' => $request->name,
            'phone' => $tourGuide->phone ?? $this->convertPhoneToWaLink($request->phone),
            'instagram' => $tourGuide->instagram ?? $this->convertInstagramToLink($request->instagram),
            'image_profile' => $imagePath,
        ]);

        return redirect()->route('admin.tour-guides')->with('success', 'Tour guide updated successfully.');
    }

    public function deleteTourGuide(TourGuides $tourGuide)
    {
        // Hapus file gambar
        Storage::delete("public/{$tourGuide->image_profile}");

        // Hapus data dari database
        $tourGuide->delete();

        return redirect()->route('admin.tour-guides')->with('success', 'Tour guide deleted successfully.');
    }

    private function convertPhoneToWaLink($phone)
    {
        $phone = preg_replace('/\D/', '', $phone);

        if (substr($phone, 0, 1) === '0') {
            $phone = '62' . substr($phone, 1);
        }

        return "https://wa.me/$phone";
    }

    private function convertInstagramToLink($instagram)
    {
        return "https://www.instagram.com/$instagram";
    }
}
