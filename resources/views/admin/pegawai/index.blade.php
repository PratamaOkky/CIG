@section('title', 'Data Pegawai')

@extends('layouts.admin.template')

@section('content')

<div class="section">
    <div class="container">
        <nav class="navbar navbar-light">
            <div class="container">
                <div class="section-header mt-5 mb-5 ml-0">
                    <h2>Jumlah User</h2>
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
                            <h1 class="card-title">{{$peg}}</h1>
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
                            <h1 class="card-title">3</h1>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus-circle"></i></a>
                        </div>
                            <p class="card-text">Admin</p>
                    </div>
                </div>
            </div>
            {{-- <hr style="border-left: 3px #bb1d33 solid; height:110px; width:0px; margin-top: -10px"> --}}
            <div class="col-md-4 col-sm-6 col-mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <h1 class="card-title">1</h1>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus-circle"></i></a>
                        </div>
                        <p class="card-text">Super Admin</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <hr class="garis"> --}}

        <div class="rectangle">

        </div>

        <table class="table table-borderless table-sm mt-5 ml-5" style="max-width: 92%">
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
                        <a href="{{route('pegawai.edit', encrypt($item->id))}}" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#edit-{{$item->id}}" style="margin-left: -30px; margin-right: -30px"><i class="fa fa-edit"></i></a>

                        <form action="{{route('pegawai.destroy', Crypt::encryptString($item->id))}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data?')"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>

            @endforeach

        </table>

    </div>
</div>

{{-- Add Modal --}}
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
                @if (session()->has('success'))
                <div id="success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="{{route('pegawai.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Input Nama">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="col-form-label">Gender</label>
                        <select class="form-select" aria-label="Default select example" name="gender_id">
                            <option selected>--- Pilih Jenis Kelamin ---</option>
                            @foreach ($gender as $item)
                            <option value="{{ $item->id }}" {{ old('gender_id') == $item->id ? 'selected' : null }}>
                                {{ $item->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nip" class="col-form-label">Nip</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip') }}" placeholder="Input Nip">
                        @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="col-form-label">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan') }}" placeholder="Input Jabatan">
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="divisi" class="col-form-label">Divisi</label>
                        <input type="text" class="form-control @error('divisi') is-invalid @enderror" id="divisi" name="divisi" value="{{ old('divisi') }}" placeholder="Input Divisi">
                        @error('divisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ttl" class="col-form-label">Tempat Lahir</label>
                        <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl') }}" placeholder="Input Tempat Lahir">
                        @error('ttl')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kewarganegaraan" class="col-form-label">Kewarganegaraan</label>
                        <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" id="kewarganegaraan" name="kewarganegaraan" value="{{ old('kewarganegaraan') }}" placeholder="Input Kewarganegaraan">
                        @error('kewarganegaraan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="col-form-label">Agama</label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agama') }}" placeholder="Input Agama">
                        @error('agama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="col-form-label">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" placeholder="Input Alamat">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="npwp" class="col-form-label">Npwp</label>
                        <input type="text" class="form-control @error('npwp') is-invalid @enderror" id="npwp" name="npwp" value="{{ old('npwp') }}" placeholder="Input Npwp">
                        @error('npwp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="no_kes" class="col-form-label">No BPJS Kesehatan</label>
                        <input type="text" class="form-control @error('no_kes') is-invalid @enderror" id="no_kes" name="no_kes" value="{{ old('no_kes') }}" placeholder="Input No. BPJS Kesehatan">
                        @error('no_kes')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="no_tk" class="col-form-label">No Tenaga Kerja</label>
                        <input type="text" class="form-control @error('no_tk') is-invalid @enderror" id="no_tk" name="no_tk" value="{{ old('no_tk') }}" placeholder="Input No. Tenaga Kerja">
                        @error('no_tk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Input email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tgl_masuk" class="col-form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control @error('tgl_masuk') is-invalid @enderror" id="tgl_masuk" name="tgl_masuk" value="{{ old('tgl_masuk') }}">
                        @error('tgl_masuk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gaji_id" class="col-form-label">Gaji</label>
                        <input type="text" class="form-control @error('gaji_id') is-invalid @enderror" id="gaji_id" name="gaji_id" value="{{ old('gaji_id') }}">
                        @error('gaji_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="button mb-3">
                        <button type="submit" class="btn btn-danger btn-modal">Tambah</button>
                    </div>
                    <div class="button mb-3">
                        <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

            {{-- @endforeach --}}
        </div>
    </div>
</div>
{{-- Modal --}}

{{-- Modal Edit--}}
@foreach ($pegawai as $data)
{{-- <div class="modal fade" id="edit-{{$data->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h5>
                @if (session()->has('success'))
                <div id="success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('pegawai.update', Crypt::encryptString($item->id))}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group-row mb-3">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $data->nama) }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="gender_id" class="col-form-label">Gender</label>
                        <select class="form-select" aria-label="Default select example" name="gender_id">
                            <option selected>--- Pilih Jenis Kelamin ---</option>
                            @foreach ($gender as $item)
                            <option value="{{ $item->id }}" {{ old('gender_id', $pegawai[0]->gender_id ) == $item->id ? 'selected' : null }}>
                                {{ $item->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="nip" class="col-form-label">NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip', $data->nip) }}">
                        @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="jabatan" class="col-form-label">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan',$data->jabatan) }}" placeholder="Input Jabatan">
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="divisi" class="col-form-label">Divisi</label>
                        <input type="text" class="form-control @error('divisi') is-invalid @enderror" id="divisi" name="divisi" value="{{ old('divisi', $data->divisi) }}" placeholder="Input Divisi">
                        @error('divisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="ttl" class="col-form-label">Tempat Lahir</label>
                        <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl', $data->ttl) }}" placeholder="Input Temapat Lahir">
                        @error('ttl')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="kewarganegaraan" class="col-form-label">Kewarganegaraan</label>
                        <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" id="kewarganegaraan" name="kewarganegaraan" value="{{ old('kewarganegaraan', $data->kewarganegaraan) }}" placeholder="Input Kewarganegaraan">
                        @error('kewarganegaraan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="agama" class="col-form-label">Agama</label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agama', $data->agama) }}" placeholder="Input Agama">
                        @error('agama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="alamat" class="col-form-label">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $data->alamat) }}" placeholder="Input Alamat">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="npwp" class="col-form-label">Npwp</label>
                        <input type="text" class="form-control @error('npwp') is-invalid @enderror" id="npwp" name="npwp" value="{{ old('npwp', $data->npwp) }}" placeholder="Input Npwp">
                        @error('npwp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="no_kes" class="col-form-label">No BPJS Kesehatan</label>
                        <input type="text" class="form-control @error('no_kes') is-invalid @enderror" id="no_kes" name="no_kes" value="{{ old('no_kes', $data->no_kes) }}" placeholder="Input No. BPJS Kesehatan">
                        @error('no_kes')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="no_tk" class="col-form-label">No. BPJS Tenaga Kerja</label>
                        <input type="text" class="form-control @error('no_tk') is-invalid @enderror" id="no_tk" name="no_tk" value="{{ old('no_tk', $data->no_tk) }}" placeholder="Input No. BPJS Tenaga Kerja">
                        @error('no_tk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $data->email) }}" placeholder="Input email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="tgl_masuk" class="col-form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control @error('tgl_masuk') is-invalid @enderror" id="tgl_masuk" name="tgl_masuk" value="{{$pegawai[0]->tgl_masuk }}">
                        @error('tgl_masuk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="gaji_id" class="col-form-label">Gaji</label>
                        <select class="form-select" aria-label="Default select example" name="gaji_id">
                            <option selected>- Gaji -</option>
                            @foreach ($gaji as $item)
                            <option value="{{ $item->id }}" {{ old('gaji_id', $pegawai[0]->gaji_id ) == $item->id ? 'selected' : null }}>
                                {{ $item->gaji }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="button mb-3">
                        <button type="submit" class="btn btn-danger btn-modal">Update</button>
                    </div>
                    <div class="button mb-3">
                        <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<div class="modal fade" id="edit-{{ $data->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                {{-- <h5 class="modal-title" id="staticBackdropLabel"> Edit Lowongan Karir</h5> --}}
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('pegawai.update', Crypt::encryptString($data->id))}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group-row mb-3">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $data->nama) }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="gender_id" class="col-form-label">Gender</label>
                        <select class="form-select" aria-label="Default select example" name="gender_id">
                            <option selected>--- Pilih Jenis Kelamin ---</option>
                            @foreach ($gender as $item)
                            <option value="{{ $item->id }}" {{ old('gender_id', $pegawai[0]->gender_id ) == $item->id ? 'selected' : null }}>
                                {{ $item->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="nip" class="col-form-label">NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip', $data->nip) }}">
                        @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="jabatan" class="col-form-label">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan',$data->jabatan) }}" placeholder="Input Jabatan">
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="divisi" class="col-form-label">Divisi</label>
                        <input type="text" class="form-control @error('divisi') is-invalid @enderror" id="divisi" name="divisi" value="{{ old('divisi', $data->divisi) }}" placeholder="Input Divisi">
                        @error('divisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="ttl" class="col-form-label">Tempat Lahir</label>
                        <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl', $data->ttl) }}" placeholder="Input Temapat Lahir">
                        @error('ttl')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="kewarganegaraan" class="col-form-label">Kewarganegaraan</label>
                        <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" id="kewarganegaraan" name="kewarganegaraan" value="{{ old('kewarganegaraan', $data->kewarganegaraan) }}" placeholder="Input Kewarganegaraan">
                        @error('kewarganegaraan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="agama" class="col-form-label">Agama</label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agama', $data->agama) }}" placeholder="Input Agama">
                        @error('agama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="alamat" class="col-form-label">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $data->alamat) }}" placeholder="Input Alamat">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="npwp" class="col-form-label">Npwp</label>
                        <input type="text" class="form-control @error('npwp') is-invalid @enderror" id="npwp" name="npwp" value="{{ old('npwp', $data->npwp) }}" placeholder="Input Npwp">
                        @error('npwp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="no_kes" class="col-form-label">No BPJS Kesehatan</label>
                        <input type="text" class="form-control @error('no_kes') is-invalid @enderror" id="no_kes" name="no_kes" value="{{ old('no_kes', $data->no_kes) }}" placeholder="Input No. BPJS Kesehatan">
                        @error('no_kes')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="no_tk" class="col-form-label">No. BPJS Tenaga Kerja</label>
                        <input type="text" class="form-control @error('no_tk') is-invalid @enderror" id="no_tk" name="no_tk" value="{{ old('no_tk', $data->no_tk) }}" placeholder="Input No. BPJS Tenaga Kerja">
                        @error('no_tk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $data->email) }}" placeholder="Input email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="tgl_masuk" class="col-form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control @error('tgl_masuk') is-invalid @enderror" id="tgl_masuk" name="tgl_masuk" value="{{ $pegawai[0]->tgl_masuk }}">
                        @error('tgl_masuk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="gaji_id" class="col-form-label">Gaji</label>
                        <select class="form-select" aria-label="Default select example" name="gaji_id">
                            <option selected>- Gaji -</option>
                            @foreach ($gaji as $item)
                            <option value="{{ $item->id }}" {{ old('gaji_id', $pegawai[0]->gaji_id ) == $item->id ? 'selected' : null }}>
                                {{ $item->gaji }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="button mb-3">
                        <button type="submit" class="btn btn-danger btn-modal">Simpan</button>
                    </div>
                    <div class="button mb-3">
                        <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
{{-- Modal --}}

@endsection
