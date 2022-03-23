@section('title', 'Garda Mitra Nasional')
@extends('template')
@section('content')
<div class="container">
    <div class="row" style="font-family: 'Poppins';
font-style: normal;font-weight: 700; font-size: 35px;line-height: 52px; padding-top: 100px; color: #BB1D33;">
 &ensp;Hubungi Kami
    </div>
<hr style="width: 1000px;height: 0px;left: 175px;top: 214px;border: 3px solid #BB1D33;">
</div>
<div class="container">
    <div class="row"style="padding-top: 50px;padding-bottom: 50px;">
        <div class="col-6">
        <form action="{{route('post')}}" method="POST" >
    @csrf
        <label>Nama</label>
        <input type="text"  style="width: 75%" class="form-control" name="nama" value="{{ old('nama') }}">
        <label>Email/Kontak</label>
        <input type="text" style="width: 75%"class="form-control" name="email" value="{{ old('email') }}">
        <label>Subjek</label>
        <input type="text" style="width: 75%"class="form-control" name="subjek" value="{{ old('suject') }}">
        <label>Pesan Yang Ingin Disampaikan</label>
        <textarea name="isi" style="width: 90%" class="form-control" cols="30" rows="10">{{ old('isi') }}</textarea><br>
        <button type="submit" class="btn1 btn-danger">Kirim</button>
        </div>
        <div class="col-6" align="center">
        <img src="{{asset('assets/images/kontak.png')}}" style="width: 303px;height: 449px;left: 769px;top: 305px;">
        </div>
    </div>
</form>
</div>


@endsection
