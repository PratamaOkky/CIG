<?php

namespace App\Http\Controllers\admin;

use App\Models\Gaji;
use App\Models\User;
use App\Imports\GajiImport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class GajiController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.gaji.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function importgaji(Request $request)
    {
        $file = $request->file('gaji');
        $namaFile = $file->getClientOriginalName();
        $file->move('assets/gaji/', $namaFile);

        Excel::import(new GajiImport, public_path('assets/gaji/'. $namaFile));

        return redirect()->back()->with('success', 'Gaji Berhail Di Upload!');
    }

    public function download()
    {
        $nip = Auth::user()->nip;
        $gaji = Gaji::firstWhere('nip', $nip);

        $pdf = PDF::loadView('admin.gaji.slip_gaji', compact('gaji'))->setPaper('legal', 'potrait');

        return $pdf->download('invoice.pdf');
    }
}
