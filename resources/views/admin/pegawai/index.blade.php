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
                <form action="{{route('pengguna.index')}}" class="d-block">
                    <button type="submit" class="icon d-inline border-0" style="background: transparent"><i class="fa fa-search"></i></button>
                    <input class="form-control me-2" type="text" placeholder="Search..." name="search" value="{{ request('search') }}">
                </form>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <h1 class="card-title">{{ $users }}</h1>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#register"><i class="bi bi-plus-circle"></i></a>
                        </div>
                            <p class="card-text" style="margin-left: 3.8%">Pengguna</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <h1 class="card-title">1</h1>
                            @if (auth()->user()->level_id == 1)
                                <a href="#" data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus-circle"></i></a>
                            @endif
                        </div>
                        <p class="card-text" style="margin-left: 3%">Admin</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="rectangle">

        </div>

        <table class="table table-borderless table-sm mt-5 ml-5" style="max-width: 92%; margin-bottom: 50px">
            <thead>
                <tr>
                <th>Nip</th>
                <th>Nama</th>
                <th>Status</th>
                <th></th>
                </tr>
            </thead>

            @foreach ($user as $item)

            <tbody>
                <tr>
                    <td>{{$item->nip}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->level->level}}</td>
                    <td>
                        <a href="{{route('pengguna.edit', Crypt::encryptString($item->id))}}" class="btn btn-danger btn-sm border-0 d-inline" data-bs-toggle="modal" data-bs-target="#edit-{{$item->id}}" style="margin-left: -80px; background-color: #bb1d33"><i class="fa fa-edit"></i></a>

                        <form action="{{route('pengguna.destroy', Crypt::encryptString($item->id))}}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger d-inline border-0 btn-sm" style="background-color: #bb1d33; margin-top: -44px; margin-left: 15px" onclick="return confirm('Yakin Hapus Data?')"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>

        <div class="d-flex justify-content-center">
            {{ $user->links() }}
        </div>
    </div>
</div>

@include('admin.pegawai.edit')

@include('admin.pegawai.register')

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
