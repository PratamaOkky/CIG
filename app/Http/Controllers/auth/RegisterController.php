<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use App\Models\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $level = Level::all();
        $user = User::with('level')->get();
        return view('admin.pegawai.index', ['user'=>$user, 'levels'=>$level]);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'nama' =>  'required|max:255',
            'nip' => 'required|unique:tb_user|max:255',
            'level_id' =>  'required',
            'password' => 'required|min:5|max:255',
            'jabatan' => ['required'],
            'divisi' => ['required'],
            'ttl' => ['required'],
            'gender_id' => ['required'],
            'kewarganegaraan' => 'required',
            'agama' => ['required'],
            'alamat' => ['required'],
            'npwp' => ['required'],
            'no_kes' => ['required'],
            'no_tk' => ['required'],
            'email' => ['required', 'email', 'unique:tb_pegawai'],
            'tgl_masuk' => ['required'],
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect()->back()->with('success', 'Berhasil Menambahkan Pengguna');

    }
}
