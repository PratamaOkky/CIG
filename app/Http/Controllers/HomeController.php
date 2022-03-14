<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function indexKontak()
    {
        return view('kontak');
    }

    public function postKontak(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'suject' => 'required',
            'isi' => 'required'
        ]);

        // $karir ['user'] = auth()->user()->id;
        $validate ['isi'] = Str::limit(strip_tags($request->isi), 200);

        Pesan::create($validate);

        return redirect('kontak')->with('success', 'Berhasil Menambahkan Kontak');
    }
}
