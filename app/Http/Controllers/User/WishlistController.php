<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addToWishlist(Request $request, $destinationId)
    {
        $user = Auth::user();

        // Cek apakah sudah ada di wishlist
        if (Wishlist::where('user_id', $user->id)->where('destination_id', $destinationId)->exists()) {
            return redirect()->back()->with('message', 'Destination already in your wishlist.');
        }

        Wishlist::create([
            'user_id' => $user->id,
            'destination_id' => $destinationId,
        ]);

        return redirect()->back()->with('message', 'Destination added to wishlist.');
    }

    public function removeFromWishlist(Request $request, $destinationId)
    {
        $user = Auth::user();

        Wishlist::where('user_id', $user->id)->where('destination_id', $destinationId)->delete();

        return redirect()->back()->with('message', 'Destination removed from wishlist.');
    }
}
