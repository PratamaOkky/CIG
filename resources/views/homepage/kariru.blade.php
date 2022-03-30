@section('title', 'Garda Mitra Nasional')

@extends('layouts.homepage.template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6" style="padding-top: 150px">
            <img src="{{asset('assets/images/karir.png')}}"style="width: 436px;height: 424px;left: 155px;top: 164px;">
        </div>

        <div class="col-12 col-lg-6"style="color:#BB1D33; padding-top: 200px; text-align: left; font-family: Poppins;font-weight: 700; font-size: 35px; width: 500px">
            <img src="{{asset('assets/images/red.png')}}" style="width: 53px;height: 29px;left: 694px;top: 255px;">
            <p>Lowongan Kerja</p>
            <p style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 16px;line-height: 24px;color: #350106;">
            GMN berkomitmen untuk mengembangkan budaya perusahaan yang mendorong peningkatan produktivitas dan kinerja sesuai visi misi perusahaan,
<br>Kami selalu Mencari dan mengembagkan bakat yang memiliki integritas, penuh energi dan memenuhi kompetensi yang di perlukan<br>
bergabunglah Menjadi bagian dari kami</p>
        </div>
    </div>

{{-- Card --}}
@foreach ($karirs as $item)
<div class="card mb-3" style="width: 100%; height: 110px; top: 60px; background: transparent">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid d-inline" alt="P" width="70" height="70" style="margin-top: 12px; border-radius: 18px; margin-left: 29px">
        </div>
        <div class="col-md-8">

            <div class="card-body" style="margin-left: -250px; margin-top: 8px;">
                <h5 class="card-title">{{$item->lowongan}}</h5>
                <p class="card-text">{{$item->posisi}}</p>

                <button type="submit" class="btn-red btn-danger border-0 d-inline" data-bs-target="#tambah" data-bs-toggle="modal" style="margin-left: 762px; margin-top: -65px; background-color: #BB1D33">Kirim CV</button>

            </div>

        </div>
    </div>
</div>
@endforeach
{{-- Card --}}

</div>

{{-- Modal Tambah --}}
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Kirim Lamaran Anda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('career.store')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Input Nama" required autofocus value="{{ old('nama')}}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Input Email" required autofocus value="{{ old('email')}}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="telpon" class="col-form-label">No. Hp</label>
                        <input class="form-control @error('telpon') is-invalid @enderror" id="telpon" name="telpon" placeholder="Input No. Hp" value="{{ old('telpon') }}" required>
                        @error('telpon')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="posisi" class="col-form-label">Posisi Yang Dilamar</label>
                        <input type="posisi" class="form-control @error('posisi') is-invalid @enderror" name="posisi" id="posisi" placeholder="Input posisi" required value="{{ old('posisi')}}">
                        @error('posisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="cv" class="col-form-label">Berkas Anda</label>
                        <input type="file" class="form-control @error('cv') is-invalid @enderror" name="cv" id="cv" placeholder="Input cv" required autofocus value="{{ old('cv')}}">
                        @error('cv')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="button mb-3">
                        <button type="submit" class="btn btn-danger btn-modal" style="width: 100%">Kirim Lamaran</button>
                    </div>
                    <div class="button mb-3">
                        <button type="button" class="btn btn-secondary btn-modal" style="width: 100%" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Modal Tambah --}}


@include('sweetalert::alert')

@endsection
