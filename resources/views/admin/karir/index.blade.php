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

        {{-- Modal Tambah --}}
        <div class="modal fade" id="tambah">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Lowongan Karir</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{route('karir.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                        @include('admin.karir.form')
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

        {{-- -------------------------------------------------------------------------------------------- --}}

        {{-- Edit Modal --}}
        <div class="modal fade" id="edit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"> Edit Lowongan Karir</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{route('karir.update', 'test')}}" method="post">
                        @csrf
                        <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="">
                        @include('admin.karir.form')
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
        {{-- Edit Modal --}}

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

                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit" data-id="{{ $item->id }}" data-lowongan="{{$item->mylowongan}}" data-posisi="{{ $item->posisi }}" data-detail="{{ $item->detail }}" style="margin-left: 500px; margin-top: -115px;">Ubah</button>

                        <form action="{{route('karir.destroy', $item->id)}}" method="POST" class="d-inline">
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
