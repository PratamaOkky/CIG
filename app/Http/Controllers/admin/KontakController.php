<?php

namespace App\Http\Controllers\admin;

use App\Models\Pesan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KontakController extends Controller
{
    public function index()
    {
        return view('admin.kontak.index', [
            'msg' => Pesan::count(),
            'contacts'=>Pesan::all()
        ]);
    }
    public function destroy(Pesan $pesan)
    {
        Pesan::destroy($pesan->id);
    }
}
