<?php

namespace App\Http\Controllers\homepage;

use App\Models\Karir;
use App\Models\Pesan;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $karir = Karir::OrderBy('created_at', 'asc')->get();
        return view('homepage.kariru', ['karirs'=>$karir]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email|unique:tb_pelamar',
            'telpon' => 'required|min:5|max:13',
            'cv' => 'required'
        ]);

        $file = $request->file('cv');
        $namaFile = $file->getClientOriginalName();
        $file->move('assets/CV', $namaFile);

        Pelamar::create($validatedData);

        return redirect()->back()->with('success', 'CV Anda Berhasil Dikirim');
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
            'subject' => 'required',
            'isi' => 'required'
        ]);

        Pesan::create($validate);

        return redirect()->back()->with('success', 'Berhasil Mengirim Pesan');
    }
}
