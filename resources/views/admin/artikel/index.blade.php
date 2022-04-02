@section('title', 'Artikel')

@extends('layouts.admin.template')

@section('content')

<div class="section" style="margin-bottom: 5.4%">
    <div class="container">

        <nav class="navbar navbar-light">
            <div class="container">
                <div class="section-header mt-5 mb-5">
                    <h1 class="head">Konten Artikel</h1>
                </div>
                <form action="{{route('artikel.index')}}" class="d-block">
                    <button type="submit" class="icon d-inline border-0" style="background: transparent"><i class="fa fa-search"></i></button>
                    <input class="form-control me-2" type="text" placeholder="Search..." name="search" value="{{ request('search') }}">
                </form>
            </div>
        </nav>

        <div class="row artikel">
            <div class="col-sm-12 col-mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="box mb-2">
                            <h1 class="card-title">{{ $artikels }}</h1>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus-circle"></i></a>
                        </div>
                        <p class="card-text" style="margin-left: -15px">Artikel</p>
                    </div>
                </div>
            </div>

        <div class="garis"></div>

        <div class="rectangle"></div>

        @if ($artikel->count())
        @foreach ($artikel as $item)
        <div class="card mb-3 text-start border" style="width: 100%; height: 110px; top: 60px; background: transparent">
            <div class="row g-0">
                @if ($item->gambar)
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid" width="60" style="margin-top: 25px; margin-left: 40%; border-radius: 18px">
                    </div>
                @else
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/faces/1.jpg') }}" class="img-fluid" alt="P" width="60" style="margin-top: 25px; margin-left: 40%; border-radius: 18px">
                    </div>
                @endif
                <div class="col-md-8">

                    <div class="card-body" style="margin-left: -165px; margin-top: 8px;">
                        <h5 class="card-title">{{$item->judul}}</h5>
                        <p class="card-text">{{$item->isi}}</p>

                        <a href="{{route('artikel.edit', Crypt::encryptString($item->id))}}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#edit-{{ $item->id }}" style="margin-left: 550px; margin-top: -115px; background-color: #BB1D33">Ubah</a>

                        <form action="{{route('artikel.destroy', Crypt::encryptString($item->id))}}" method="POST" class="d-inline">
                    </div>

                </div>
            </div>
        </div>
        @endforeach

        @else

        <div class="card mb-3 text-start border" style="width: 100%; height: 110px; top: 60px; background: transparent">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/samples/error-404.png') }}" class="img-fluid" alt="P" width="150" style="margin-left: 40%; border-radius: 18px">
                </div>
                <div class="col-md-8">

                    <div class="card-body" style="margin-left: -50px; margin-top: 22px;">
                        <h5 class="card-title">Belum Ada Artikel</h5>
                    </div>

                </div>
            </div>
        </div>

        @endif

        </div>
    </div>
</div>

@include('admin.artikel.create')

@include('admin.artikel.edit')

@include('sweetalert::alert')

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection
