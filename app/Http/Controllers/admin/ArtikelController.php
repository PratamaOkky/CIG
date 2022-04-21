<?php

namespace App\Http\Controllers\admin;

use App\Models\Artikel;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArtikelRequest;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('admin.artikel.index', [
            'art' => Artikel::count(),
            'artikels' => Artikel::all(),
            'artikels' => Artikel::filter(request(['search']))->paginate(6)
        ]);
    }

    public function store(ArtikelRequest $request, Artikel $artikel)
    {
        Artikel::create([
            'judul' => request('judul'),
            'isi' => request('isi'),
            'detail' => request('detail'),
            'image' => request()->file('image')->store('artikel'),
        ]);

        return redirect()->back()->with('success', 'Berhasil Menambahkan Artikel');
    }

    public function update(ArtikelRequest $request, Artikel $artikel)
    {
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $artikel['image'] = $request->file('image')->store('artikel');
        }

        $artikel->update([
            'judul' => request('judul'),
            'isi' => request('isi'),
            'detail' => request('detail'),
        ]);

        return redirect()->back()->with('success', 'Berhasil Ubah Artikel');
    }

    public function destroy(Artikel $artikel)
    {
        Storage::delete($artikel->image);
        $artikel->delete($artikel->id);

        return redirect()->route('artikel.index')->withSuccess('Berhasil Hapus Artikel');
    }
}
