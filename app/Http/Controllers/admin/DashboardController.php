<?php

namespace App\Http\Controllers\admin;

use App\Models\Gaji;
use App\Models\User;
use App\Models\Gender;
use Illuminate\Http\Request;
use App\Rules\oldMatchPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
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

        $request['password'] = Hash::make($request->password);

        if (User::create($user)) {
            return redirect()->route('dashboard', $user->nip)->with('success', 'Berhasil Merubah Password');
        } else {
            return redirect()->back()->with('message-danger', 'Gagal Merubah Password');
        }
    }
}
