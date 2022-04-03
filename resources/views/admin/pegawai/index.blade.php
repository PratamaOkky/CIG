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
                        <p class="card-text" style="margin-left: 4%">Admin</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="garis"></div>
        <div class="rectangle">

        </div>

    </div>

    <div class="container" style="width: 80%; margin-top: 6%">
        <table id="table_id" class="table table-stripped table-sm">
            <thead class="text-center">
                <tr>
                    <th>Foto</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                <tr>
                    <td><img src="{{asset('storage/' . $item->image)}}" class="img-thumbnail rounded-circle" width="40"></td>
                    <td>{{$item->nip}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->jabatan}}</td>
                    <td>{{$item->level->level}}</td>
                    <td>
                        <a href="{{route('pengguna.edit', Crypt::encryptString($item->id))}}" class="text-success mt-5" data-bs-toggle="modal" data-bs-target="#edit-{{$item->id}}"><i class="fa fa-edit h4"></i></a>

                        <form action="{{route('pengguna.destroy', Crypt::encryptString($item->id))}}" method="POST" style="margin-top: -26.2%; margin-left: 20%">
                            @method('delete')
                            @csrf
                            <button class="text-danger delete d-inline border-0 ml-2" style="background: transparent" onclick="return confirm('Yakin Hapus Data?')"><i class="fa fa-trash-o h4"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('admin.pegawai.edit')

@include('admin.pegawai.register')

@include('sweetalert::alert')

@push('page-scripts')

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

    $(document).ready( function () {
        $('#table_id').DataTable();
    });

    flatpickr('#flatpickr', {
        altInput: true,
        altFormat: "d F Y",
    })
</script>

@endpush

@endsection
