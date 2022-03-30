<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Level;
use App\Models\Gender;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rules\oldMatchPassword;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $level = Level::all();
        $gender = Gender::all();

        $users = User::count();
        $user = User::with('level')->get();

        return view('admin.pegawai.index', [
            'gender' => $gender,
            'levels' => $level,
            'user' => $user,
            'users' => $users,
            'user' => User::filter(request(['search']))->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' =>  'required|max:255',
            'nip' => 'required',
            'level_id' =>  'required',
            'old_password' =>  ['required', new oldMatchPassword],
            'password' => 'required|min:5|max:255',
            'jabatan' => 'nullable',
            'divisi' => 'nullable',
            'atasan' => 'nullable',
            'ttl' => 'nullable',
            'tgl_lahir' => 'nullable',
            'nik' => 'nullable',
            'awal_pkwt' => 'nullable',
            'akhir_pkwt' => 'nullable',
            'status_pajak' => 'nullable',
            'gender_id' => 'nullable',
            'kewarganegaraan' => 'nullable',
            'agama' => 'nullable',
            'alamat' => 'nullable',
            'npwp' => 'nullable',
            'no_kes' => 'nullable',
            'no_tk' => 'nullable',
            'email' => 'nullable|email',
            'instalasi' => 'nullable',
            'bank' => 'nullable',
            'rek' => 'nullable',
            'tgl_masuk' => 'nullable',
            'image' => 'file|image|max:2048'
        ]);

        $dec = Crypt::decryptString($id);
        $user = User::findOrFail($dec);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $user['image'] = $request->file('image')->store('user');
        }

        $user['nama'] = $request->nama;
        $user['nip'] = $request->nip;
        $user['level_id'] = $request->level_id;
        $user['password'] = Hash::make($request->password);
        $user['nik'] = $request->nik;
        $user['jabatan'] = $request->jabatan;
        $user['divisi'] = $request->divisi;
        $user['atasan'] = $request->atasan;
        $user['ttl'] = $request->ttl;
        $user['gender_id'] = $request->gender_id;
        $user['kewarganegaraan'] = $request->kewarganegaraan;
        $user['agama'] = $request->agama;
        $user['alamat'] = $request->alamat;
        $user['npwp'] = $request->npwp;
        $user['no_kes'] = $request->no_kes;
        $user['no_tk'] = $request->no_tk;
        $user['email'] = $request->email;
        $user['tgl_masuk'] = $request->tgl_masuk;
        $user['awal_pkwt'] = $request->awal_pkwt;
        $user['akhir_pkwt'] = $request->akhir_pkwt;
        $user['status_pajak'] = $request->status_pajak;
        $user['instalasi'] = $request->instalasi;
        $user['bank'] = $request->bank;
        $user['rek'] = $request->rek;

        $user->update();

        return redirect()->back()->with('success', 'Berhasil Mengubah Data Pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dec = Crypt::decryptString($id);
        $user = User::findOrFail($dec);

        if ($user->image) {
            Storage::delete($user->image);
        }

        User::destroy($user->id);

        return redirect()->back()->with('success', 'Pegawai Berhasil Dihapus');
    }
}
