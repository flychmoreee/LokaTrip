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
        $heroes = Hero::all(); // Ambil semua data hero
        return view('hero.index', compact('heroes'));
    }

    public function create()
    {
        return view('hero.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'hero_image' => 'required|image|mimes:jpg,jpeg,png',
            'card_title' => 'required|string|max:255',
            'card_image' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $heroImagePath = $request->file('hero_image')->store('hero_images', 'public');
        $cardImagePath = $request->file('card_image')->store('card_images', 'public');

        Hero::create([
            'name' => $request->name,
            'description' => $request->description,
            'hero_image' => $heroImagePath,
            'card_title' => $request->card_title,
            'card_image' => $cardImagePath,
        ]);

        return redirect()->route('heroes.index');
    }

    public function edit(Hero $hero)
    {
        return view('hero.edit', compact('hero'));
    }

    public function update(Request $request, Hero $hero)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'hero_image' => 'nullable|image|mimes:jpg,jpeg,png',
            'card_title' => 'required|string|max:255',
            'card_image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $hero->name = $request->name;
        $hero->description = $request->description;
        $hero->card_title = $request->card_title;

        if ($request->hasFile('hero_image')) {
            // Hapus gambar lama jika ada
            if ($hero->hero_image) {
                Storage::disk('public')->delete($hero->hero_image);
            }
            $heroImagePath = $request->file('hero_image')->store('hero_images', 'public');
            $hero->hero_image = $heroImagePath;
        }

        if ($request->hasFile('card_image')) {
            // Hapus gambar lama jika ada
            if ($hero->card_image) {
                Storage::disk('public')->delete($hero->card_image);
            }
            $cardImagePath = $request->file('card_image')->store('card_images', 'public');
            $hero->card_image = $cardImagePath;
        }

        $hero->save();

        return redirect()->route('heroes.index');
    }

    public function destroy(Hero $hero)
    {
        // Hapus gambar dari storage jika ada
        if ($hero->hero_image) {
            Storage::disk('public')->delete($hero->hero_image);
        }
        if ($hero->card_image) {
            Storage::disk('public')->delete($hero->card_image);
        }

        $hero->delete();
        return redirect()->route('heroes.index');
    }
}
