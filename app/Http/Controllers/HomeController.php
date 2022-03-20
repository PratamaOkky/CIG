<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use App\Models\Pesan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function index()
    {
        return view('homepage.home');
    }

    public function about()
    {
        return view('homepage.tentang');
    }

    public function layanan()
    {
        return view('homepage.layanan');
    }

    public function career(Request $request)
    {
        // $dec = Crypt::decryptString($id);
        // $karir = Karir::findOrFail($dec);
        $karir = Karir::OrderBy('created_at', 'asc')->get();
        return view('homepage.kariru', ['karirs'=>$karir]);
    }

    public function indexKontak()
    {
        return view('homepage.kontak');
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
