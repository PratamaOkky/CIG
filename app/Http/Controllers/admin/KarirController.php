<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Karir;
use App\Models\Pelamar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class KarirController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pelamar = Pelamar::count();
        $karirs = Karir::count();
        $karir = Karir::all();
        return view('admin.karir.index', [
            'karir'=>$karir,
            'karirs'=>$karirs,
            'pelamar'=>$pelamar,

            'karir' => Karir::filter(request(['search']))->paginate(10)
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
        $validatedData = $request->validate([
            'lowongan' => 'required',
            'posisi' => 'required',
            'detail' => 'required',
            'image' => 'file|image|max:2048'
        ]);

        $validatedData['detail'] = Str::limit(strip_tags($request->detail), 200);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('karir');
        }

        Karir::create($validatedData);

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
        $dec = Crypt::decryptString($id);
        $karir = Karir::find($dec);

        return view('homepage.kariru',
        [
            'karirs' => $karir
        ]);
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
            'image' => 'file|image|max:2048'
        ]);

        $dec = Crypt::decryptString($id);
        $karir = Karir::findOrFail($dec);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $karir['image'] = $request->file('image')->store('karir');
        }

        $karir->lowongan = $request->lowongan;
        $karir->posisi = $request->posisi;
        $karir['detail'] = Str::limit(strip_tags($request->detail), 200);

        $karir->update();

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

        if ($karir->image) {
            Storage::delete($karir->image);
        }

        Karir::destroy($karir->id);

        return redirect()->back()->with('success', 'Berhasil Hapus Karir');
    }
}
