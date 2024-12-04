<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image',
            'title' => 'required|string',
            'description' => 'required',
            'rating' => 'required|integer|min:0|max:5',
            'name' => 'required|string',
            'profile_photo' => 'nullable|image',
        ]);

        Testimonial::create($request->all());
        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'image' => 'nullable|image',
            'title' => 'required|string',
            'description' => 'required',
            'rating' => 'required|integer|min:0|max:5',
            'name' => 'required|string',
            'profile_photo' => 'nullable|image',
        ]);

        $testimonial->update($request->all());
        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
