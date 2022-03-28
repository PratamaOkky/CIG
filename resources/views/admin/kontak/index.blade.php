@section('title', 'Contact')

@extends('layouts.admin.template')

@section('content')

<div class="section" style="margin-bottom: 25%">
    <div class="section-body">
        <div class="card mb-5">
            <div class="container">
                <p style="text-align: left; margin-top: 90px; font-size: 35pt; font-weight: bold; color: #bb1d33">Customer Service</p>

                <div class="container">
                    <img src="{{asset('assets/images/kontak.png')}}" style="margin-left: 700px; margin-top: -100px" height="449" width="303" alt="">
                    <h1 style="margin-left: 400px; margin-top: -400px">{{ $msg }}</h1>
                    <p style="margin-left: 400px; margin-top: -10px">Pesan</p>
                </div>

                <div class="col-sm-10">
                    <div class="row g-0">
                        @foreach ($pesan as $item)
                        <div class="col-12 col-sm-4 col-md-3">
                            <div class="card mb-4" style="border-radius: 15px; border: 1px black solid">
                                <div class="card-body" style="background-color: #f4f4f4; border-radius: 15px">
                                    <p class="mb-3">{{ $item->nama }}</p>
                                    <p style="text-align: left; font-size: 12px">{{ \Illuminate\Support\str::limit($item->isi, 150, '...') }}</p>
                                </div>
                            </div>
                            <a href="{{route('contact.index', encrypt($item->id_pesan))}}" class="btn btn-danger d-inline border-0" style="background-color: #bb1d33" data-bs-toggle="modal" data-bs-target="#edit-{{ $item->id_pesan }}">Lebih Detail</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('admin.kontak.detail')

@include('sweetalert::alert')

@endsection
