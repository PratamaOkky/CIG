<?php

namespace App\Http\Controllers\Homepage;

use App\Models\{Karir, Pesan, Pelamar, Artikel};
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
        return view('homepage.blog.index', [
            'data' => Artikel::paginate(3),
        ]);
     }

     public function detail()
     {
        return view('homepage.blog.detail', [
            'artikel' => Artikel::all(),
        ]);
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
        return view('homepage.kariru', [
            'karirs' => Karir::OrderBy('created_at', 'asc')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required', 'max:35', 'min:3', 'string'],
            'email' => ['required', 'email:dns'],
            'posisi' => ['required', 'min:5', 'max:35', 'string'],
            'telpon' => ['required', 'min:5', 'numeric'],
            'cv' => ['required', 'file', 'max:2048']
        ]);

        if ($request->file('cv')) {
            $validatedData['cv'] = $request->file('cv')->store('cv');
        }

        Pelamar::create($validatedData);

        return redirect()->back()->withSuccess('CV Anda Berhasil Dikirim');
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
            'nama' => ['required', 'string', 'min:3', 'max:32'],
            'email' => ['required', 'email:dns'],
            'subject' => ['required', 'string', 'max:25'],
            'isi' => ['required']
        ]);

        Pesan::create($validate);

        return redirect()->back()->withSuccess('Berhasil Mengirim Pesan');
    }
    // End Kontak
}
