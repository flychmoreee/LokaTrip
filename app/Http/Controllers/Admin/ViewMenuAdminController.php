<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourGuides;

class ViewMenuAdminController extends Controller
{
    public function showDestination()
    {
        return view('components.admin.section.destination');
    }

    public function showTourGuide()
    {
        $tourGuides = TourGuides::all();
        return view('components.admin.section.tour-guides', compact('tourGuides'));
    }
}
