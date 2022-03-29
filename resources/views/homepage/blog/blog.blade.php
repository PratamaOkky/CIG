@section('title', 'Garda Mitra Nasional')
@extends('layouts.homepage.template')
@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('assets/galerry/1.png')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('assets/galerry/2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('assets/galerry/2.png')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
    <div class="row" style="font-family: 'Poppins';
font-style: normal;font-weight: 700; font-size: 35px;line-height: 52px; padding-top: 100px; color: #BB1D33;">
 &ensp;Galerry Dan Kegiatan kami
    </div>
<hr style="width: 1000px;height: 0px;left: 175px;top: 214px;border: 3px solid #BB1D33;">
</div>



@endsection