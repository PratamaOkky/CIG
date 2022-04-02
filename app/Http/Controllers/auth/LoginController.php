<?php

namespace App\Http\Controllers\auth;

use App\Models\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gender;
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
            if (Auth::check() && Auth::user()->level_id == 1) {
                return redirect('dashboard')->with('success', 'Berhasil Login');
            } else {
                return redirect()->route('dashboard', encrypt(Auth()->user()->id))->with('success', 'Berhasil Login');
            }
        }
        return back()->with('error', 'NIP atau Password Salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
