<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Gender;
use App\Models\Pegawai;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Crypt;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Pegawai $pegawai)
    {
        $gaji = Gaji::all();
        $gender = Gender::all();
        $peg = Pegawai::count();
        $pegawai = Pegawai::with('gender', 'gaji')->get();
        // return view('admin.pegawai.index', compact('pegawai', 'peg', 'gender', 'gaji'));
        return view('admin.pegawai.index', ['pegawai'=>$pegawai, 'peg'=>$peg, 'gender'=>$gender, 'gaji'=>$gaji]);
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
        $validate = $request->validate([
            'nama' => ['required'],
            'nip' => ['required', 'unique:tb_pegawai'],
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
            'gaji_id' => ['required']
        ]);

        $pegawai = new Pegawai();
        $pegawai->nama = $request->nama;
        $pegawai->nip = $request->nip;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->divisi = $request->divisi;
        $pegawai->ttl = $request->ttl;
        $pegawai->gender_id = $request->gender_id;
        $pegawai->kewarganegaraan = $request->kewarganegaraan;
        $pegawai->agama = $request->agama;
        $pegawai->alamat = $request->alamat;
        $pegawai->npwp = $request->npwp;
        $pegawai->no_kes = $request->no_kes;
        $pegawai->no_tk = $request->no_tk;
        $pegawai->email = $request->email;
        $pegawai->tgl_masuk = $request->tgl_masuk;
        $pegawai->gaji_id = $request->gaji_id;

        $pegawai->save($validate);

        return redirect()->back()->with('success', 'Berhasil Menambahkan Pegawai');
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
    public function edit(Gender $gender)
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
        // $request->validate([
        //     'nama' => ['required'],
        //     'nip' => ['required'],
        //     'jabatan' => ['required'],
        //     'divisi' => ['required'],
        //     'ttl' => ['required'],
        //     'gender_id' => ['required'],
        //     'kewarganegaraan' => ['required'],
        //     'agama' => ['required'],
        //     'alamat' => ['required'],
        //     'npwp' => ['required'],
        //     'no_kes' => ['required'],
        //     'no_tk' => ['required'],
        //     'email' => ['required'],
        //     'tgl_masuk' => ['required'],
        //     'gaji_id' => ['required']
        // ]);

        $dec = Crypt::decryptString($id);
        $data = Pegawai::findOrfail($dec);

        $data->update($request->all());

        // $pegawai->nama = $request->nama;
        // $pegawai->nip = $request->nip;
        // $pegawai->jabatan = $request->jabatan;
        // $pegawai->divisi = $request->divisi;
        // $pegawai->ttl = $request->ttl;
        // $pegawai->gender_id = $request->gender_id;
        // $pegawai->kewarganegaraan = $request->kewarganegaraan;
        // $pegawai->agama = $request->agama;
        // $pegawai->alamat = $request->alamat;
        // $pegawai->npwp = $request->npwp;
        // $pegawai->no_kes = $request->no_kes;
        // $pegawai->no_tk = $request->no_tk;
        // $pegawai->email = $request->email;
        // $pegawai->tgl_masuk = $request->tgl_masuk;
        // $pegawai->gaji_id = $request->gaji_id;

        // $pegawai->save();

        return redirect()->back()->with('success', 'Berhasil Ubah Data Pegawai');
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
        $pegawai = Pegawai::findOrFail($dec);

        $pegawai->delete();

        return redirect()->back()->with('success', 'Berhasil Hapus Data');
    }
}
