@section('title', 'Halaman Gaji')

@extends('layouts.admin.template')

@section('content')

<div class="section">
    <div class="container">
        @if (session()->has('success'))
                <div id="success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

        <div class="row">
            <div class="col-md-7 col-12 mt-5">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="text-align: justify; margin-top: 100px">
                            <h1 class="head mb-4">Upload Gaji</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio officia enim modi placeat. Quibusdam repellat nam ipsa velit qui. Animi asperiores ea ex quisquam dolorum recusandae laudantium sunt mollitia iure.</p>

                            <button type="button" class="btn btn-danger border-0 btn-lg ml-auto mt-3" style="display: inline; font-size: 12px; width: 20%; background-color: #BB1D33" data-bs-toggle="modal" data-bs-target="#uploadFile">Upload File <i class="fa fa-cloud-upload"></i></button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <img src="{{asset('assets/images/home-top.png')}}" height="416" width="343" alt="H">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal Tambah --}}
        <div class="modal fade" id="uploadFile">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Upload File Gaji</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{route('importgaji')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                        <div class="mb-3">
                            <input type="file" class="form-control @error('gaji') is-invalid @enderror" name="gaji" id="gaji" required autofocus value="{{ old('gaji')}}">
                            @error('gaji')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="button mb-3">
                            <button type="submit" class="btn btn-danger btn-modal" style="background-color: #BB1D33">Simpan</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Modal Tambah --}}

    </div>
</div>



@endsection
