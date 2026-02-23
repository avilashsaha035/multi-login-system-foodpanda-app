<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function ssoLogin(Request $request) {
        $token = $request->query('token');

        $response = Http::withToken($token)->get('http://localhost:8000/api/user');

        if ($response->successful()) {
            $userData = $response->json();
            $user = User::updateOrCreate(['email' => $userData['email']], $userData);
            Auth::login($user);
            return redirect('/dashboard');
        }

        return redirect('/')->withErrors(['SSO failed']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect back to Ecommerce logout to ensure both are cleared
        return redirect('http://localhost:8000/global-logout')->with('status', 'Logged out globally');
    }

}
