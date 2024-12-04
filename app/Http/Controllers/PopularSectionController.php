<?php

namespace App\Http\Controllers;

use App\Models\PopularSection;
use Illuminate\Http\Request;

class PopularSectionController extends Controller
{
    public function index()
    {
        $popularSections = PopularSection::all();
        return view('admin.popular.index', compact('popularSections'));
    }

    public function create()
    {
        return view('admin.popular.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image',
            'title' => 'required|string',
            'location' => 'required|string',
        ]);

        PopularSection::create($request->all());
        return redirect()->route('popular-sections.index')->with('success', 'Popular section created successfully.');
    }

    public function edit(PopularSection $popularSection)
    {
        return view('admin.popular.edit', compact('popularSection'));
    }

    public function update(Request $request, PopularSection $popularSection)
    {
        $request->validate([
            'image' => 'nullable|image',
            'title' => 'required|string',
            'location' => 'required|string',
        ]);

        $popularSection->update($request->all());
        return redirect()->route('popular-sections.index')->with('success', 'Popular section updated successfully.');
    }

    public function destroy(PopularSection $popularSection)
    {
        $popularSection->delete();
        return redirect()->route('popular-sections.index')->with('success', 'Popular section deleted successfully.');
    }
}
