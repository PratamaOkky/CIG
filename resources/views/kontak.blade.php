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
    <div class="row"style="padding-top: 50px;padding-bottom: 50px">
        <div class="col-6">
        <label>Nama</label>
        <input type="text"  style="width: 80%" class="form-control" name="name" value="{{ old('name') }}">
        <label>Email/Kontak</label>
        <input type="text" style="width: 80%"class="form-control" name="name" value="{{ old('name') }}">
        <label>Subjek</label>
        <input type="text" style="width: 80%"class="form-control" name="name" value="{{ old('name') }}">
        <label>Pesan Yang Ingin Disampaikan</label>
        <textarea name="address" style="width: 80%" class="form-control" cols="30" rows="10">{{ old('addres') }}</textarea><br>                        
        <button class="btn1 btn-primary">Kirim</button>
        </div>
        <div class="col-6" align="center">
        <img src="{{asset('assets/images/kontak.png')}}" style="width: 303px;height: 449px;left: 769px;top: 305px;">  
        </div>
    </div>
</div>


@endsection