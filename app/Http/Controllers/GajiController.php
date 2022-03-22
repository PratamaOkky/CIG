<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\GajiImport;
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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function importgaji(Request $request)
    {
        $file = $request->file('gaji');
        $namaFile = $file->getClientOriginalName();
        $file->move('Data Gaji', $namaFile);

        Excel::import(new GajiImport, public_path('/Data Gaji/'. $namaFile));

        return redirect()->back()->with('success', 'Gaji Berhail Di Upload!');
    }
}
