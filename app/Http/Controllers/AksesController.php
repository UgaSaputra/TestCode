<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AksesController extends Controller
{
    public function showLoginForm()
    {
        return view('Akses.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('input.guru');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
