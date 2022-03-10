@section('title', 'Dashboard')

@extends('layouts.homepage.template')

@section('content')

<div class="section">
    <div class="container">
        <div class="section-header mt-5 mb-4 ml-0">
            <h2>Selamat Datang</h2>
        </div>

        <div class="card mb-3" style="max-width: 380px; border: none">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('assets/images/faces/1.jpg')}}" style="max-width: 100px; margin-left: 15px; margin-top: 16px" class="img-fluid rounded" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ auth()->user()->nama }}</h5>
                        <p class="card-text">Direktur Operasional</p>
                        <p class="card-text"><small>123456789</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
