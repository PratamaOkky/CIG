@section('title', 'Karir')

@extends('layouts.admin.template')

@section('content')

<div class="section">
    <div class="container">
        @if (session()->has('success'))
                <div id="success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        <nav class="navbar navbar-light">
            <div class="container">
                <div class="section-header mt-5 mb-5">
                    <h1 class="head">Konten Karir</h1>
                </div>
                <form class="d-flex">
                    <span class="icon"><i class="fa fa-search"></i></span>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>

        <div class="row karir">
            <div class="col-md-6 col-sm-12 col-mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <h1 class="card-title">{{$karir}}</h1>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus-circle"></i></a>
                        </div>
                        <p class="card-text" style="margin-left: 18px">Karir</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <h1 class="card-title">3</h1>
                        </div>
                        <p class="card-text" style="margin-left: 26px">Pelamar</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="garis"></div>

        <div class="rectangle">

        </div>

        {{-- Modal Tambah --}}
        <div class="modal fade" id="tambah">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Lowongan Karir</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{route('karir.store')}}" method="POST">
                        @csrf
                        <div class="modal-body">
                        <div class="mb-3">
                            <label for="lowongan" class="col-form-label">Nama Karir</label>
                            <input type="text" class="form-control @error('lowongan') is-invalid @enderror" name="lowongan" id="lowongan" placeholder="Masukan Nama Karir" required autofocus value="{{ old('lowongan')}}">
                            @error('lowongan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="posisi" class="col-form-label">Posisi</label>
                            <input type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi" id="posisi" placeholder="Posisi" required autofocus value="{{ old('posisi')}}">
                            @error('posisi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="detail" class="col-form-label">Detail</label>
                            @error('detail')
                                <div class="invalid-feedback">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                            @enderror
                            <textarea class="form-control" id="detail" name="detail" value="{{ old('detail') }}" required autofocus></textarea>
                            {{-- <trix-editor input="detail"></trix-editor> --}}
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
        {{-- Modal Tambah --}}


        {{-- Card --}}
        <div class="card" style="width: 940px; top: 60px; left: 30px;">
            <div class="row g-0">
                @foreach ($karirs as $item)
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/faces/1.jpg') }}" class="img-fluid" alt="P" style="height: 80px; width: 80px; margin-top: 7px; border-radius: 18px">
                </div>
                <div class="col-md-8">

                    <div class="card-body" style="text-align: start; margin-left: -130px;">
                        <h5 class="card-title">{{$item->lowongan}}</h5>
                        <p class="card-text">{{$item->posisi}}</p>
                        {{-- <p class="card-text">{{$item->detail}}</p> --}}

                        <a href="{{route('karir.edit', Crypt::encryptString($item->id))}}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#edit-{{ $item->id }}" style="margin-left: 500px; margin-top: -115px; background-color: #BB1D33">Ubah</a>

                        <form action="{{route('karir.destroy', Crypt::encryptString($item->id))}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-secondary border-0" style="margin-left: 600px; margin-top: -163px;" onclick="return confirm('Yakin Hapus Data?')">Hapus</button>
                        </form>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
        {{-- Card --}}

        {{-- Edit Modal --}}
        @foreach ($karirs as $data)
        <div class="modal fade" id="edit-{{ $data->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"> Edit Lowongan Karir</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{route('karir.update', Crypt::encryptString($data->id))}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                        <div class="mb-3">
                            <label for="lowongan" class="col-form-label">Nama Karir</label>
                            <input type="text" class="form-control @error('lowongan') is-invalid @enderror" name="lowongan" id="lowongan" required autofocus value="{{ $data->lowongan }}">
                            @error('lowongan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="posisi" class="col-form-label">Posisi</label>
                            <input type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi" id="posisi" required autofocus value="{{ $data->posisi }}">
                            @error('posisi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="detail" class="col-form-label">Detail</label>
                            @error('detail')
                                <div class="invalid-feedback">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                            @enderror
                            <textarea name="detail" id="detail" class="form-control" rows="10">{{$data->detail}}</textarea>
                        </div>

                        <div class="button mb-3 ml-auto">
                        <button type="submit" class="btn btn-danger btn-modal" style="color: #BB1D33">Simpan</button>
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
        {{-- Edit Modal --}}
    </div>
</div>

@endsection
