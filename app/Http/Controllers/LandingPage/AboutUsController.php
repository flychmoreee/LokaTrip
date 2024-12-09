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
        $about = AboutUs::first(); // Ambil data About Us pertama
        return view('about.index', compact('about'));
    }

    public function create()
    {
        return view('about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $imagePath = $request->file('image_url')->store('about_images', 'public');

        AboutUs::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_url' => $imagePath,
        ]);

        return redirect()->route('about.index');
    }

    public function edit(AboutUs $aboutUs)
    {
        return view('about.edit', compact('aboutUs'));
    }

    public function update(Request $request, AboutUs $aboutUs)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpg,jpeg,png',
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

        return redirect()->route('about.index');
    }

    public function destroy(AboutUs $aboutUs)
    {
        if ($aboutUs->image_url) {
            Storage::disk('public')->delete($aboutUs->image_url);
        }

        $aboutUs->delete();
        return redirect()->route('about.index');
    }
}
