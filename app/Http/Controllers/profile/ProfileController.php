<?php

namespace App\Http\Controllers\profile;

use App\Models\Gaji;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $user = User::all();
        return view('profile.index', ['users'=>$user]);
    }

    public function download()
    {
        $nip = Auth::user()->nip;
        $gaji = Gaji::where('nip', $nip)->first();

        // dd($gaji);
        return view('admin.gaji.slip_gaji', ['gaji'=>$gaji, 'nip'=>$nip]);
        // $pdf = PDF::loadView('admin.gaji.slip_gaji', compact('gaji'))->setPaper('a4', 'landscape');
        // dd($pdf);

        // return $pdf->download('invoice.pdf');
    }
}
