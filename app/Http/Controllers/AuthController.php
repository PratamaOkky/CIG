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
        // dd($request->all());
        if (Auth::attempt(['nip' => $request->nip, 'password' => $request->password])) {
            if (Auth::check() && Auth::user()->id_level == 1) {
                return redirect('/dashboard');
            } else {
                // return redirect()->route('profile.show', encrypt(Auth()->user()->id));
            }
        } else {
            return redirect('/login')->with('message-danger', 'NIP atau Password Anda Salah!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
