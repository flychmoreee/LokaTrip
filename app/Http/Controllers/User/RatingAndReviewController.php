<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingAndReviewController extends Controller
{
    public function addRatingAndReview(Request $request, Destination $destination)
    {
        $request->validate([
            'rating' => 'required|numeric|min:0|max:5',
            'review' => 'nullable|string',
        ]);

        $destination->users()->attach(Auth::id(), [
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        return redirect()->back()->with('success', 'Review and rating submitted successfully.');
    }

    public function showRatingAndReview(Destination $destination)
    {
        $reviews = $destination->users()->withPivot('rating', 'review')->get();

        return view('destination.show', compact('destination', 'reviews'));
    }
}
