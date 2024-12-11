<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name' => $googleUser->getName(),
                'google_id' => $googleUser->getId(),
                'profile_picture' => $googleUser->getAvatar(),
                'role_id' => 2,
            ]
        );


        Auth::login($user);
        Log::info('User after updateOrCreate:', $user->toArray());

        $user->setRememberToken(Str::random(60));
        $user->save();

        return redirect()->route('user.dashboard');
    }

    public function logout(Request $request)
    {
        // Hapus sesi pengguna
        Auth::logout();

        // Hapus cookie sesi
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login atau halaman lain
        return redirect('/')->with('message', 'You have been logged out.');
    }
}
