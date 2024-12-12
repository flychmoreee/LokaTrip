<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUs::all(); // Ambil data About Us pertama
        return view('components.admin.section.landingpage.about-us', compact('about'));
    }

    public function addAboutUs(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'required|image|mimes:jpg,jpeg,png|max:5048',
        ]);

        $imagePath = $request->file('image_url')->store('about_images', 'public');

        AboutUs::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_url' => $imagePath,
        ]);

        return redirect()->route('admin.about-us');
    }

    public function edit(AboutUs $aboutUs)
    {
        return view('components.admin.section.landingpage.about-us', compact('aboutUs'));
    }

    public function updateAboutUs(Request $request, AboutUs $aboutUs)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
        ]);

        $aboutUs->title = $request->title;
        $aboutUs->description = $request->description;

        if ($request->hasFile('image_url')) {
            if ($aboutUs->image_url) {
                Storage::disk('public')->delete($aboutUs->image_url);
            }
            $imagePath = $request->file('image_url')->store('about_images', 'public');
            $aboutUs->image_url = $imagePath;
        }

        $aboutUs->save();

        return redirect()->route('admin.about-us');
    }

    public function deleteAboutUs(AboutUs $aboutUs)
    {
        if ($aboutUs->image_url) {
            Storage::disk('public')->delete($aboutUs->image_url);
        }

        $aboutUs->delete();
        return redirect()->route('admin.about-us');
    }
}
