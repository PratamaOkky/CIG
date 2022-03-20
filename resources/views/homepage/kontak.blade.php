@section('title', 'Garda Mitra Nasional')

@extends('layouts.homepage.template')

@section('content')

<div class="container">
    <div class="row" style="font-family: 'Poppins'; font-style: normal;font-weight: 700; font-size: 35px;line-height: 52px; padding-top: 100px; color: #BB1D33;">
        &ensp;Hubungi Kami
    </div>

    <div class="garis mt-3" style="width: 90%; left: 175px; top: 214px; border: 3px #BB1D33 solid"></div>
    {{-- <hr style="width: 1000px;height: 0px;left: 175px;top: 214px;border: 3px solid #BB1D33;"> --}}

    <form action="{{route('post')}}" method="POST">
        @csrf
        <div class="row"style="padding-top: 50px;padding-bottom: 50px">
            <div class="col-6">
                <div class="mb-3">
                    <label class="col-form-label">Nama</label>
                    <input type="text"  style="width: 80%" class="form-control" name="nama" value="{{ old('nama') }}">
                </div>

                <div class="mb-3">
                    <label>Email/Kontak</label>
                    <input type="text" style="width: 80%"class="form-control" name="email" value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label>Subjek</label>
                    <input type="text" style="width: 80%"class="form-control" name="suject" value="{{ old('suject') }}">
                </div>

                <div class="mb-3">
                    <label>Pesan Yang Ingin Disampaikan</label>
                    <textarea name="isi" style="width: 80%" class="form-control" cols="30" rows="10">{{ old('isi') }}</textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn1 btn-danger" style="background-color: #BB1D33; width: 20%">Kirim</button>
                </div>
            </div>

            <div class="col-6" align="center">
                <img src="{{asset('assets/images/kontak.png')}}" style="width: 303px;height: 449px;left: 769px;top: 305px;">
            </div>
        </div>
    </form>
</div>


@endsection
