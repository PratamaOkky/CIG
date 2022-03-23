<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['nip' => $request->nip, 'password' => $request->password])) {
            if (Auth::check() && Auth::user()->level_id == 1 || Auth::check() && Auth::user()->level_id == 2) {
                return redirect('dashboard')->with('success', 'Anda Berhasil Login');
            } elseif (Auth::check() && Auth::user()->level_id == 3) {
                return redirect()->route('profile', encrypt(Auth()->user()->id))->with('success', 'Anda Berhasil Login');
            }
        }
        return back()->with('error', 'Maaf Anda Gagal Login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
