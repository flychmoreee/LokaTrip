<?php

namespace App\Http\Controllers;

use App\Models\FeatureSection;  // Pastikan menggunakan model FeatureSection
use Illuminate\Http\Request;

class FeatureSectionController extends Controller
{
    public function index()
    {
        // Gunakan FeatureSection (Model) untuk mengambil data
        $features = FeatureSection::all();  // Mengambil semua data dari tabel feature_sections
        return view('admin.feature.index', compact('features'));
    }

    public function create()
    {
        return view('admin.feature.create');
    }

    public function store(Request $request)
    {
        // Validasi data sebelum menyimpan
        $request->validate([
            'title' => 'required|string',
            'description' => 'required',
        ]);

        // Gunakan FeatureSection (Model) untuk menyimpan data
        FeatureSection::create($request->all());  // Menyimpan data yang diterima dari form
        return redirect()->route('feature-sections.index')->with('success', 'Feature section created successfully.');
    }

    public function edit(FeatureSection $featureSection)  // Terima parameter sesuai model
    {
        return view('admin.feature.edit', compact('featureSection'));
    }

    public function update(Request $request, FeatureSection $featureSection)  // Terima parameter sesuai model
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required',
        ]);

        $featureSection->update($request->all());  // Update data
        return redirect()->route('feature-sections.index')->with('success', 'Feature section updated successfully.');
    }

    public function destroy(FeatureSection $featureSection)  // Terima parameter sesuai model
    {
        $featureSection->delete();  // Hapus data
        return redirect()->route('feature-sections.index')->with('success', 'Feature section deleted successfully.');
    }
}
