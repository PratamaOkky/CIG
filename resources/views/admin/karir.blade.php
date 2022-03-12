@section('title', 'Karir')

@extends('layouts.admin.template')

@section('content')

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="section">
    <div class="container">
        <nav class="navbar navbar-light">
            <div class="container">
                <div class="section-header mt-5 mb-5 ml-0">
                    <h2>Konten Karir</h2>
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
                            <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus-circle"></i></a>
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
                            {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus-circle"></i></a> --}}
                        </div>
                        <p class="card-text" style="margin-left: 26px">Pelamar</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="garis">

        <div class="rectangle">

        </div>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Lowongan Karir</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{route('karir.store')}}" method="post">
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
                                <input id="detail" type="hidden" name="detail" value="{{ old('detail') }}">
                                <trix-editor input="detail"></trix-editor>
                            </div>
                        </div>
                        <div class="button mb-3">
                            <button type="submit" class="btn btn-danger btn-modal">Send</button>
                        </div>
                        <div class="button mb-3">
                            <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card" style="width: 940px; top: 60px; left: 30px">
            <div class="row g-0">
                @foreach ($karirs as $item)
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/faces/1.jpg') }}" class="img-fluid" alt="P" style="height: 80px; width: 80px; margin-top: 7px; border-radius: 18px">
                </div>
                <div class="col-md-8">

                    <div class="card-body" style="text-align: start; margin-left: -130px;">
                        <h5 class="card-title">{{$item->lowongan}}</h5>
                        <p class="card-text">{{$item->posisi}}</p>

                        <a href="#" class="btn btn-warning" style="margin-left: 500px; margin-top: -115px;">Ubah</a>

                        {{-- <a href="#" class="btn btn-danger" style="margin-left: 600px; margin-top: -163px;">Hapus</a> --}}
                        <form action="{{route('karir.destroy', $karir)}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger border-0" style="margin-left: 600px; margin-top: -163px;" onclick="return confirm('Yakin Hapus Data?')">Hapus</button>
                        </form>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
