<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\AboutUs;
use App\Models\Faq;

class LandingPageViewController extends Controller
{
    public function showHero()
    {
        $hero = Hero::all();
        $about = AboutUs::all();
        $faq = Faq::all();
        return view('landingPage', compact('hero', 'about', 'faq'));
    }
}
