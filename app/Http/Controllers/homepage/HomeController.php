<?php

namespace App\Http\Controllers\homepage;

use App\Models\Karir;
use App\Models\Pesan;
use App\Models\Pelamar;
use App\Models\Artikel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    // Home
    public function index()
    {
        return view('homepage.home');
    }
    // End Home

     // artikel
     public function blog()
     {
         $data= Artikel::paginate(3);
        return view('homepage.blog.index', ['data'=> $data]);
     }

     public function detail()
     {
        $artikel = Artikel::all();
        return view('homepage.blog.detail', ['artikel'=>$artikel]);
     }
    // About
    public function about()
    {
        return view('homepage.tentang');
    }
    // End About

    // Layanan
    public function layanan()
    {
        return view('homepage.layanan');
    }
    // End Layanan

    // Karir
    public function career()
    {
        $karir = Karir::OrderBy('created_at', 'asc')->get();
        return view('homepage.kariru', ['karirs'=>$karir]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'posisi' => 'required',
            'telpon' => 'required|min:5|max:13',
            'cv' => 'file|max:2048'
        ]);

        if ($request->file('cv')) {
            $validatedData['cv'] = $request->file('cv')->store('cv');
        }

        Pelamar::create($validatedData);

        return redirect()->back()->with('success', 'CV Anda Berhasil Dikirim');
    }
    // End Karir

    // Kontak
    public function indexKontak()
    {
        return view('homepage.kontak');
    }

    public function postKontak(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'isi' => 'required'
        ]);

        Pesan::create($validate);

        return redirect()->back()->with('success', 'Berhasil Mengirim Pesan');
    }
    // End Kontak
}
