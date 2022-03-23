@section('title', 'Data Pegawai')

@extends('layouts.admin.template')

@section('content')

<div class="section">
    <div class="container">
        <nav class="navbar navbar-light">
            <div class="container">
                <div class="section-header mt-5 mb-5 ml-0">
                    <h1 class="head">Data Pegawai</h1>
                </div>
                <form class="d-flex">
                    <span class="icon"><i class="fa fa-search"></i></span>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-4 col-sm-12 col-mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <h1 class="card-title">{{ $peg }}</h1>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus-circle"></i></a>
                        </div>
                        <p class="card-text">Pegawai</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <h1 class="card-title">{{ $user }}</h1>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#register"><i class="bi bi-plus-circle"></i></a>
                        </div>
                            <p class="card-text">Pengguna</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <h1 class="card-title">1</h1>
                            @if (auth()->user()->id_level == 1)
                                <a href="#" data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus-circle"></i></a>
                            @endif
                        </div>
                        <p class="card-text">Super Admin</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="rectangle">

        </div>

        <table class="table table-borderless table-sm mt-5 ml-5" style="max-width: 92%; margin-bottom: 130px">
            <thead>
                <tr>
                <th>Nip</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Divisi</th>
                <th>Jabatan</th>
                <th></th>
                </tr>
            </thead>

            @foreach ($pegawai as $item)

            <tbody>
                <tr>
                    <td>{{$item->nip}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->gender->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->divisi}}</td>
                    <td>{{$item->jabatan}}</td>
                    <td>
                        <a href="{{route('pegawai.edit', encrypt($item->id))}}" class="btn btn-danger btn-sm border-0 d-inline" data-bs-toggle="modal" data-bs-target="#edit-{{$item->id}}" style="margin-left: -80px; background-color: #bb1d33"><i class="fa fa-edit"></i></a>

                        <form action="{{route('pegawai.destroy', Crypt::encryptString($item->id))}}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger d-inline border-0 btn-sm" style="background-color: #bb1d33; margin-top: -44px; margin-left: 15px" onclick="return confirm('Yakin Hapus Data?')"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>

@include('admin.pegawai.create')

@include('admin.pegawai.edit')

@include('admin.pegawai.register')

@include('sweetalert::alert')


@endsection
