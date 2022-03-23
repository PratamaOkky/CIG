@section('title', 'Garda Mitra Nasional')

@extends('layouts.homepage.template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6" style="padding-top: 150px">
            <img src="{{asset('assets/images/karir.png')}}"style="width: 436px;height: 424px;left: 155px;top: 164px;">
        </div>

        <div class="col-6"style="color:#BB1D33; padding-top: 200px; text-align: left; font-family: Poppins;font-weight: 700; font-size: 35px; width: 500px">
            <img src="{{asset('assets/images/red.png')}}" style="width: 53px;height: 29px;left: 694px;top: 255px;">
            <p>Lowongan Kerja</p>
            <p style="font-size:14px;font-weight: 400; color:#350106">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis vestibulum velit pharetra massa imperdiet fermentum amet, risus non. </p>
        </div>
    </div>

{{-- Card --}}
@foreach ($karirs as $item)
<div class="card mb-3" style="width: 100%; height: 110px; top: 60px; background: transparent">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('assets/images/faces/1.jpg') }}" class="img-fluid" alt="P" style="height: 71px; width: 71px; margin-top: 20px; border-radius: 18px; margin-left: 29px">
        </div>
        <div class="col-md-8">

            <div class="card-body" style="margin-left: -250px; margin-top: 8px;">
                <h5 class="card-title">{{$item->lowongan}}</h5>
                <p class="card-text">{{$item->posisi}}</p>

                <button type="submit" class="btn btn-danger border-0 d-inline" data-bs-target="#tambah" data-bs-toggle="modal" style="margin-left: 762px; margin-top: -65px; background-color: #BB1D33">Kirim CV</button>

            </div>

        </div>
    </div>
</div>
@endforeach
{{-- Card --}}

</div>

@endsection
