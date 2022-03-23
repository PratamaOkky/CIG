<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Karir;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\DB;

class KarirController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $karirs = Karir::count();
        $karir = Karir::all();
        return view('admin.karir.index', ['karirs'=>$karir, 'karir'=>$karirs]);
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
        $request->validate([
            'lowongan' => 'required',
            'posisi' => 'required',
            'detail' => 'required'
        ]);

        $karir = new Karir();
        $karir->lowongan = $request->lowongan;
        $karir->posisi = $request->posisi;
        // $karir ['user'] = auth()->user()->id;
        $karir ['detail'] = Str::limit(strip_tags($request->detail), 200);

        $karir->save();

        return redirect()->back()->with('success', 'Berhasil Menambahkan Karir');
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
            'lowongan' => 'required',
            'posisi' => 'required',
            'detail' => 'required',
        ]);

        $dec = Crypt::decryptString($id);
        $data = Karir::findOrFail($dec);
        $data->lowongan = $request->lowongan;
        $data->posisi = $request->posisi;
        $data->detail = $request->detail;

        $data->update();

        return redirect()->back()->with('success', 'Berhasil Ubah Karir');
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
        $karir = Karir::findOrFail($dec);

        $karir->delete();

        return redirect()->back()->with('success', 'Berhasil Hapus Karir');
    }
}
