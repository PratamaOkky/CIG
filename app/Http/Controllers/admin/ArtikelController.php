<?php

namespace App\Http\Controllers\admin;

use App\Models\Artikel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $artikels = Artikel::count();
        $artikel = Artikel::all();
        return view('admin.artikel.index', [
            'artikel'=>$artikel,
            'artikels'=>$artikels,
            'artikel' => Artikel::filter(request(['search']))->paginate(10)
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
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'file|image|max:2048'
        ]);

        $validatedData['isi'] = Str::limit(strip_tags($request->isi), 200);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('artikel');
        }

        Artikel::create($validatedData);

        return redirect()->back()->with('success', 'Berhasil Menambahkan Artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id_artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id_artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_artikel)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'file|image|max:2048'
        ]);

        $dec = Crypt::decryptString($id);
        $artikel = Artikel::findOrFail($dec);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $artikel['gambar'] = $request->file('gambar')->store('artikel');
        }

        $artikel->judul = $request->judul;
        $artikel['isi'] = Str::limit(strip_tags($request->isi), 200);

        $artikel->update();

        return redirect()->back()->with('success', 'Berhasil Mengubah Artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_artikel)
    {
        $dec = Crypt::decryptString($id);
        $artikel = Artikel::findOrFail($dec);

        if ($artikel->gambar) {
            Storage::delete($artikel->gambar);
        }

        Artikel::destroy($artikel->id);

        return redirect()->back()->with('success', 'Berhasil Hapus Artikel');
    }
}
