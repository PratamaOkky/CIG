<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = $request->validate([
            'nip' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed');
        // if (Auth::attempt(['nip' => $request->nip, 'password' => $request->password])) {
        //     if (Auth::check() && Auth::user()->id_level == 1) {
        //         return redirect('/dashboard');
        //     } else {
        //         // return redirect()->route('profile.show', encrypt(Auth()->user()->id));
        //     }
        // } else {
        //     return redirect('/login')->with('message-danger', 'NIP atau Password Anda Salah!');
        // }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
