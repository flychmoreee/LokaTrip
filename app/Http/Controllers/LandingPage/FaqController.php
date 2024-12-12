<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = FAQ::all();
        return view('components.admin.section.landingpage.faq', compact('faqs'));
    }

    public function create()
    {
        return view('components.admin.section.landingpage.faq');
    }

    public function addFaq(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        FAQ::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('admin.faq');
    }

    public function editFaq(FAQ $faq)
    {
        return view('components.admin.section.landingpage.faq', compact('faq'));
    }

    public function updateFaq(Request $request, FAQ $faq)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('admin.faq');
    }

    public function deleteFaq(FAQ $faq)
    {
        $faq->delete();
        return redirect()->route('admin.faq');
    }
}
