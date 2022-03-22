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

        @include('admin.karir.create')

        @include('admin.karir.edit')
    </div>
</div>

@endsection
