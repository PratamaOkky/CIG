@section('title', 'Garda Mitra Nasional')
@extends('layouts.homepage.template')
@section('content')


{{-- Card --}}
@foreach ($artikel as $item)
<div class="card mb-3" style="width: 100%; height: 110px; top: 60px; background: transparent">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid d-inline" alt="P" width="70" height="70" style="margin-top: 12px; border-radius: 18px; margin-left: 29px">
        </div>
        <div class="col-md-8">

            <div class="card-body" style="margin-left: -250px; margin-top: 8px;">
                <h5 class="card-title">{{$item->judul}}</h5>
                <p class="card-text">{{$item->isi}}</p>

                <button type="submit" class="btn-red btn-danger border-0 d-inline" data-bs-target="#tambah" data-bs-toggle="modal" style="margin-left: 762px; margin-top: -65px; background-color: #BB1D33">Kirim CV</button>

            </div>

        </div>
    </div>
</div>
@endforeach
{{-- Card --}}





@endsection