<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TourGuides;
use App\Models\Destinations;

class ViewMenuAdminController extends Controller
{
    public function showDestination()
    {
        $destinations = Destinations::all();
        return view('components.admin.section.destination', compact('destinations'));
    }

    public function showTourGuide()
    {
        $tourGuides = TourGuides::all();
        return view('components.admin.section.tour-guides', compact('tourGuides'));
    }
}
