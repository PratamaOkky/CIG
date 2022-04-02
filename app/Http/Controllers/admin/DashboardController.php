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
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gaji = Gaji::all();
        $gender = Gender::all();
        $user = User::with('gender')->get();
        return view('dashboard', [
            'gender'=>$gender,
            'user'=>$user,
            'gaji'=>$gaji,
            'active' => 'dashboard'
        ]);
    }

    public function editPassword($id)
    {
        $dec = Crypt::decryptString($id);
        $user = User::find($dec);

        return view('dashboard', [
            'user' => $user
    ]);
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'old_password' =>  ['required', new oldMatchPassword],
            'password' => 'required|min:8|confirmed',
        ]);

        $dec = decrypt($id);
        $user = User::find($dec);

        $user->password = Hash::make($request->password);

        if ($user->save()) {
            return redirect()->route('dashboard', encrypt($user->id))->with('success', 'Berhasil Merubah Password');
        } else {
            return redirect()->back()->with('message-danger', 'Gagal Merubah Password');
        }
    }
}
