@section('title', 'Garda Mitra Nasional')
@extends('template')
@section('content')
<div style="background-image: url('assets/images/bghome-top.png'); width:100%;height:100%;">
    <div class="container">
        <div class="row">
            <div class=col-md-8 py-5>
                <div style="color:#BB1D33; padding-top: 200px;
                        text-align: left; font-family: Poppins; font-weight: 700; font-size: 35px; width: 500px">Garda Mitra Nasional
                        <p style="font-size:14px; font-weight: 400;color:#350106">Badan Usaha Jasa Pengamanan (BUJP) dan didirikan pada tanggal 5 November 2010. 
                            Memiliki personil pengamanan yang handal dan profesional Membangun hubungan dan komunikasi 
                            yang harmonis serta memberi solusi bagi pengguna jasa Mengembangkan kerja sama.</p>
                </div><a href="{{route('login')}}" class="btn1 btn1-danger">Lebih Detail ► </a>
            </div>
            <div class=col-md-4 py-5>
                 <img src="{{asset('assets/images/home-top.png')}}"style="width:343px;height:666px;padding-top: 150px;padding-bottom: 100px;">
            </div> 
        </div>
    </div>      
</div>
<div class="container">
        <div class="row g-0">
            <div class="col-md-3">
            <img src="{{asset('assets/images/ic-home.png')}}"style="width: 113px; height: 134px; left: 155px; top: 830px;">
            </div>
            <div class="col-md-3">
            <img src="{{asset('assets/images/ic-home.png')}}"style="width: 113px; height: 134px; left: 155px; top: 830px;">
            </div>
            <div class="col-md-3">
            <img src="{{asset('assets/images/ic-home.png')}}"style="width: 113px; height: 134px; left: 155px; top: 830px;">
            </div>
            <div class="col-md-3">
            <img src="{{asset('assets/images/ic-home.png')}}"style="width: 113px; height: 134px; left: 155px; top: 830px;">   
            </div>
            <div class="col-md-3"><h3 class="mb-4">Pembinaan</h3></div>
            <div class="col-md-3"><h3 class="mb-4">Pembinaan</h3></div>
            <div class="col-md-3"><h3 class="mb-4">Pembinaan</h3></div>
            <div class="col-md-3"><h3 class="mb-4">Pembinaan</h3></div>
            <div class="col-md-3">
            <h5 class="mb-4" style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
            </div>
            <div class="col-md-3">
            <h5 class="mb-4" style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
            </div>
            <div class="col-md-3">
            <h5 class="mb-4" style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
            </div>
            <div class="col-md-3">
            <h5 class="mb-4" style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
            </div>
        </div>
</div>
<div style="background-image: url('assets/images/bghome-bott.png'); position: left; width:100%;height:100%; ">
    <div class="container">
        <img src="{{asset('assets/images/ic-home-bot.png')}}"style="width: 336px; height: 310px; left: 155px; top: 830px;">
    </div>
</div>
<div class="container">
        <div class="row">
            <div class=col-md-8 py-5>
                <div style="color:#BB1D33; padding-top: 100px;
                        text-align: left; font-family: Poppins; font-size: 35px; width: 500px ">
                        Terima Kasih Atas Kepercayaannya
                        <p style="font-size:14px; color:#350106">Lorem ipsum dolor sit amet,
                         consectetur adipiscing elit. Vestibulum, tristique ut nisl, accumsan nunc, condimentum bibendum mattis consectetur.</p>
                </div>
            </div>
        <div class=col-md-4 py-5>
        <img src="{{asset('assets/images/home-bot.png')}}"style="width:100%;height:100%; padding-top: 100px">
        </div> 

</div>
@endsection
