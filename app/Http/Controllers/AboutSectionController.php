<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    public function index()
    {
        $aboutSections = AboutSection::all();
        return view('admin.about.index', compact('aboutSections'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image',
            'description' => 'required',
        ]);

        AboutSection::create($request->all());
        return redirect()->route('about-sections.index')->with('success', 'About section created successfully.');
    }

    public function edit(AboutSection $aboutSection)
    {
        return view('admin.about.edit', compact('aboutSection'));
    }

    public function update(Request $request, AboutSection $aboutSection)
    {
        $request->validate([
            'image' => 'nullable|image',
            'description' => 'required',
        ]);

        $aboutSection->update($request->all());
        return redirect()->route('about-sections.index')->with('success', 'About section updated successfully.');
    }

    public function destroy(AboutSection $aboutSection)
    {
        $aboutSection->delete();
        return redirect()->route('about-sections.index')->with('success', 'About section deleted successfully.');
    }
}
