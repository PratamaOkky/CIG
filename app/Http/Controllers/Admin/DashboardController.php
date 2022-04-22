<?php

namespace App\Http\Controllers\Admin;

use App\Models\{Gaji, User, Gender};
use Illuminate\Http\Request;
use App\Rules\oldMatchPassword;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'user' => User::get(),
            'genders' => Gender::all(),
            'gaji' => Gaji::all(),
            'active' => 'dashboard'
        ]);
    }

    public function editPassword(User $user)
    {
        return view('dashboard', [
            'users' => User::find($user)
        ]);
    }

    public function updatePassword(Request $request, User $user)
    {
        $request->validate([
            'old_password' =>  ['required', new oldMatchPassword],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        if (User::create($user)) {
            return redirect()->route('dashboard', $user->nip)->withSuccess('Berhasil Merubah Password');
        } else {
            return redirect()->back()->with('error', 'Gagal Merubah Password');
        }
    }
}
