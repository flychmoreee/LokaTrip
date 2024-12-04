<?php

namespace App\Http\Controllers;

use App\Models\HomeSection;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
{
    public function index()
    {
        $homeSections = HomeSection::all();
        return view('admin.home.index', compact('homeSections'));
    }

    public function create()
    {
        return view('admin.home.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image',
            'title' => 'required|string',
            'description' => 'required',
        ]);

        HomeSection::create($request->all());
        return redirect()->route('home-sections.index')->with('success', 'Home section created successfully.');
    }

    public function edit(HomeSection $homeSection)
    {
        return view('admin.home.edit', compact('homeSection'));
    }

    public function update(Request $request, HomeSection $homeSection)
    {
        $request->validate([
            'image' => 'nullable|image',
            'title' => 'required|string',
            'description' => 'required',
        ]);

        $homeSection->update($request->all());
        return redirect()->route('home-sections.index')->with('success', 'Home section updated successfully.');
    }

    public function destroy(HomeSection $homeSection)
    {
        $homeSection->delete();
        return redirect()->route('home-sections.index')->with('success', 'Home section deleted successfully.');
    }
}
