<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
        $karir = $request->validate([
            'lowongan' => 'required',
            'posisi' => 'required',
            'detail' => 'required'
        ]);

        $karir ['user'] = auth()->user()->id;
        $karir ['detail'] = Str::limit(strip_tags($request->detail), 200);

        Karir::create($karir);

        return redirect('karir')->with('success', 'Berhasil Menambahkan Karir');
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
        $karir = $request->validate([
            'lowongan' => 'required',
            'posisi' => 'required',
            'detail' => 'required'
        ]);

        $karir ['user'] = auth()->user()->id;
        $karir ['detail'] = Str::limit(strip_tags($request->detail), 200);

        Karir::update($karir);

        return redirect('karir')->with('success', 'Berhasil Menambahkan Karir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karir = Karir::destroy($id);
        return redirect('karir')->with('success', 'Berhasil Hapus Data');
    }
}
