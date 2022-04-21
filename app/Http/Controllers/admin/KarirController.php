<?php

namespace App\Http\Controllers\admin;

use App\Models\Karir;
use App\Models\Pelamar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\KarirRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class KarirController extends Controller
{
    public function index()
    {
        return view('admin.karir.index', [
            'total' => Karir::count(),
            'karirs' => Karir::all(),
            'pelamar' => Pelamar::count(),
            'karirs' => Karir::filter(request(['search']))->paginate(6)
        ]);
    }

    public function store(KarirRequest $request)
    {
        Karir::create([
            'image' => request()->file('image')->store('karir'),
            'lowongan' => request('lowongan'),
            'posisi' => request('posisi'),
            'detail' => request('detail'),
        ]);
        return redirect()->back()->with('success', 'Berhasil Menambahkan Karir');
    }

    public function update(KarirRequest $request, Karir $karir)
    {
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $karir['image'] = $request->file('image')->store('karir');
        }

        $karir->update([
            'lowongan' => request('lowongan'),
            'posisi' => request('posisi'),
            'detail' => request('detail'),
        ]);

        return redirect()->back()->withSuccess('Berhasil Ubah Karir');
    }

    public function destroy(Karir $karir)
    {
        Storage::delete($karir->image);
        Karir::destroy($karir->id);
        return redirect()->back()->with('success', 'Berhasil Hapus Karir');
    }
}
