@section('title', 'Garda Mitra Nasional')
@extends('template')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6" style="padding-top: 150px">
        <img src="{{asset('assets/images/karir.png')}}"style="width: 436px;height: 424px;left: 155px;top: 164px;">  
        </div>
        <div class="col-6"style="color:#BB1D33; padding-top: 200px;
                        text-align: left; font-family: Poppins;font-weight: 700; font-size: 35px; width: 500px">
                        <img src="{{asset('assets/images/red.png')}}"style="width: 53px;height: 29px;left: 694px;top: 255px;">
                        <p>Lowongan Kerja</p>
                        <p style="font-size:14px;font-weight: 400; color:#350106">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Venenatis vestibulum velit pharetra massa imperdiet fermentum amet, risus non. </p>
        </div>
    </div>
</div>
<div class="container" style="padding-top:200px; padding-bottom:200px">
    <table><center>
       <h1> table lowongan dari database<h1>
    </table>
</div>

@endsection