<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourGuides;

class TourGuideController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:15',
            'instagram' => 'required|string|max:255',
            'foto' => 'nullable|image|max:10048'
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('tour-guides', 'public');
        }

        TourGuides::create($validated);

        return response()->json(['message' => 'Tour guide created successfully'], 201);
    }

    public function update(Request $request)
    {
        $request->validate([
            'editId' => 'required|exists:tour_guides,id',
            'editNama' => 'required|string|max:255',
            'editWhatsapp' => 'required|string|max:15',
            'editInstagram' => 'required|string|max:255',
            'editFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ]);

        $tourGuide = TourGuides::find($request->editId);
        $tourGuide->nama = $request->editNama;
        $tourGuide->whatsapp = $request->editWhatsapp;
        $tourGuide->instagram = $request->editInstagram;

        if ($request->hasFile('editFoto')) {
            $path = $request->file('editFoto')->store('tour-guides', 'public');
            $tourGuide->foto = $path;
        }

        $tourGuide->save();

        return response()->json(['message' => 'Tour guide updated successfully']);
    }
}
