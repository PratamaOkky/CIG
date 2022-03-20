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
<div class="card border-0" style="width: 100%; top: 60px;">
    <div class="row g-0">
        @foreach ($karirs as $item)
        <div class="col-md-4">
            <img src="{{ asset('assets/images/faces/1.jpg') }}" class="img-fluid" alt="P" style="height: 80px; width: 80px; margin-top: 7px; border-radius: 18px; margin-left: 50px">
        </div>
        <div class="col-md-8">

            <div class="card-body" style="text-align: start; margin-left: -220px;">
                <h5 class="card-title">{{$item->lowongan}}</h5>
                <p class="card-text">{{$item->posisi}}</p>
                {{-- <p class="card-text">{{$item->detail}}</p> --}}

                {{-- <a href="{{route('karir.edit', Crypt::encryptString($item->id))}}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#edit-{{ $item->id }}" style="margin-left: 500px; margin-top: -115px; background-color: #BB1D33">Ubah</a> --}}
                <button type="submit" class="btn btn-danger border-0 d-inline" style="margin-left: 500px; margin-top: -115px; background-color: #BB1D33">Kirim CV</button>

            </div>

        </div>
        @endforeach
    </div>
</div>
{{-- Card --}}

</div>

@endsection
