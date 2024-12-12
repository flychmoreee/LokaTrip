<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
        return view('components.admin.section.landingpage.hero', compact('heroes'));
    }

    public function create()
    {
        return view('components.admin.section.landingpage.hero');
    }

    public function addHero(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'hero_image' => 'required|image|mimes:jpg,jpeg,png|max:5024',
        ]);

        $heroImagePath = $request->file('hero_image')->store('hero_images', 'public');

        Hero::create([
            'name' => $request->name,
            'description' => $request->description,
            'hero_image' => $heroImagePath,
        ]);

        return redirect()->route('admin.hero');
    }

    public function edit(Hero $hero)
    {
        return view('components.admin.section.landingpage.hero', compact('hero'));
    }

    public function updateHero(Request $request, Hero $hero)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'hero_image' => 'nullable|image|mimes:jpg,jpeg,png|max:5024',
        ]);

        $hero->name = $request->name;
        $hero->description = $request->description;
        if ($request->hasFile('hero_image')) {
            // Hapus gambar lama jika ada
            if ($hero->hero_image) {
                Storage::disk('public')->delete($hero->hero_image);
            }
            $heroImagePath = $request->file('hero_image')->store('hero_images', 'public');
            $hero->hero_image = $heroImagePath;
        }

        $hero->save();

        return redirect()->route('admin.hero');
    }

    public function deleteHero(Hero $hero)
    {
        // Hapus gambar dari storage jika ada
        if ($hero->hero_image) {
            Storage::disk('public')->delete($hero->hero_image);
        }
        if ($hero->card_image) {
            Storage::disk('public')->delete($hero->card_image);
        }

        $hero->delete();
        return redirect()->route('admin.hero');
    }
}
