<?php

namespace App\Http\Controllers\profile;

use App\Models\Gaji;
use App\Models\User;
use App\Models\Gender;
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
        $gender = Gender::all();
        $user = User::with('gender')->get();
        return view('profile.index', [
            'users'=>$user,
            'gender'=>$gender
        ]);
    }

    public function download()
    {
        $nip = Auth::user()->nip;
        $gaji = Gaji::firstWhere('nip', $nip);

        $pdf = PDF::loadView('admin.gaji.slip_gaji', compact('gaji'))->setPaper('legal', 'potrait');

        return $pdf->download('invoice.pdf');
    }
}
