@section('title', 'Contact')

@extends('layouts.admin.template')

@section('content')


<div class="container">
    <div class="row" style="font-family: 'Poppins'; font-style: normal;font-weight: 700; font-size: 35px;line-height: 52px; padding-top: 50px; color: #BB1D33;">
        &ensp;Costumer Service
    </div>
</div>
<div class="container">
    <div class="row"style="padding-top: 20px; padding-bottom: 250px;">
        <div class="col-12 col-lg-6" style="margin-top: 50px">
            <div class="row g-0">
                @foreach ($pesan as $item)
                <div class="col-12 col-sm-4 col-md-3" style=" padding-top: 15px;">
                    <div class="card mb-4" style="border-radius: 15px; border: 1px black solid;margin-right: 5px;">
                        <div class="card-body" style="background-color: transparent; border-radius: 15px;">
                            <p class="mb-3">{{ $item->nama }}</p>
                            <p style="text-align: center; font-size: 12px">{{ \Illuminate\Support\str::limit($item->subject, 20, '...') }}</p>
                        </div>
                    </div>
                    <a href="{{route('contact.index', encrypt($item->id_pesan))}}" class="btn btn-danger d-inline border-0" style="background-color: #bb1d33; margin-left:10px" data-bs-toggle="modal" data-bs-target="#edit-{{ $item->id_pesan }}">Lebih Detail</a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-12 col-lg-6 mb-5">
            <img src="{{asset('assets/images/kontak.png')}}" style="width: 303px; height: 449px; margin-left: 200px; margin-top: -80px;">
            <h1 style="margin-left: 192px; margin-top: -400px">{{ $msg }}</h1>
            <p style="margin-left: 180px; margin-top: -10px">Pesan</p>
        </div>
    </div>
</div>

@include('admin.kontak.detail')

@include('sweetalert::alert')

@endsection
