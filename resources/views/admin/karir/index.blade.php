@section('title', 'Karir')

@extends('layouts.admin.template')

@section('content')

<div class="section" style="margin-bottom: 7.8%">
    <div class="container">

        <nav class="navbar navbar-light">
            <div class="container">
                <div class="section-header mt-5 mb-5">
                    <h1 class="head">Konten Karir</h1>
                </div>
                <form action="{{route('karir.index')}}" class="d-block">
                    <button type="submit" class="icon d-inline border-0" style="background: transparent"><i class="fa fa-search"></i></button>
                    <input class="form-control me-2" type="text" placeholder="Search..." name="search" value="{{ request('search') }}">
                </form>
            </div>
        </nav>

        <div class="row karir">
            <div class="col-md-6 col-sm-12 col-mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <h1 class="card-title">{{$karirs}}</h1>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus-circle"></i></a>
                        </div>
                        <p class="card-text" style="margin-left: 38px">Karir</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <h1 class="card-title">{{$pelamar}}</h1>
                            <a href="{{route('pelamar.index')}}"><i class="bi bi-person-workspace"></i></a>
                        </div>
                        <p class="card-text" style="margin-left: 23%;">Pelamar</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="garis"></div>

        <div class="rectangle">

        </div>

        @if ($karir->count())

        @foreach ($karir as $item)
        <div class="card mb-3 text-start border" style="width: 100%; height: 110px; top: 60px; background: transparent">
            <div class="row g-0">
                @if ($item->image)
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" width="60" style="margin-top: 18px; margin-left: 40%; border-radius: 18px">
                    </div>
                @else
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/faces/1.jpg') }}" class="img-fluid" alt="P" width="60" style="margin-top: 17px; border-radius: 18px">
                    </div>
                @endif
                <div class="col-md-8">

                    <div class="card-body" style="margin-left: -165px; margin-top: 8px;">
                        <h5 class="card-title">{{$item->lowongan}}</h5>
                        <p class="card-text">{{$item->posisi}}</p>

                        <a href="{{route('karir.edit', Crypt::encryptString($item->id))}}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#edit-{{ $item->id }}" style="margin-left: 550px; margin-top: -115px; background-color: #BB1D33">Ubah</a>

                        <form action="{{route('karir.destroy', Crypt::encryptString($item->id))}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-secondary border-0" style="margin-left: 650px; margin-top: -163px;" onclick="return confirm('Yakin Hapus Data?')">Hapus</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>

        @endforeach

        @else

        <div class="card" style="height: 110px; top: 60px; background: transparent; margin-bottom: 9.5%">
            <h2 class="card-title mt-5">Oopss.. Belum Ada Karir</h2>
        </div>

        @endif

        @include('admin.karir.create')

        @include('admin.karir.edit')

        @include('sweetalert::alert')

    </div>
</div>


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
