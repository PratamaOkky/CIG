@section('title', 'Garda Mitra Nasional')
@extends('layouts.homepage.template')
@section('content')
<div style="background-image: url('assets/images/bghome-top.png'); width:100%;height:100%;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div style="color:#BB1D33; padding-top: 200px; text-align: left; font-family: Poppins; font-weight: 700; font-size: 35px; width: 550px">Garda Mitra Nasional
                    <p style="font-size:14px; font-weight: 400;padding-top: 35px;padding-bottom: 58px;color:#350106">Badan Usaha Jasa Pengamanan (BUJP) dan didirikan pada 5 November 2010.
                    Memiliki personil pengamanan yang handal dan profesional Membangun hubungan dan komunikasi
                    yang harmonis serta memberi solusi bagi pengguna jasa Mengembangkan kerja sama.</p>
                </div>

                    <!-- <a href="{{route('login')}}" class="btn1 btn-danger">Lebih Detail ► </a>&emsp;&emsp;&emsp; -->
                    <!-- <a href="" class="social-icon"> <i class="fa fa-facebook"></i></a>&emsp;&emsp; -->
                    <!-- <a href="" class="social-icon"> <i class="fa fa-twitter"></i></a>&emsp;&emsp; -->
                    <!-- <a href="" class="social-icon"> <i class="fa fa-youtube"></i></a>&emsp; -->
                    <a href="{{route('tentang')}}" class="btn-red btn-danger">Lebih Detail &emsp;<i class="fa fa-arrow-circle-right"></i> </a>&emsp;&emsp;
                    <!-- <a href="#"><i class="fa fa-twitter-square" style="font-size:40px;"></i></a> -->

                    <!-- <a href="#"><i class="fa fa-facebook-square" style="font-size:40px;"></i></a>   -->
                    <a href="#"><i class="fa fa-linkedin-square" style="font-size:40px;"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"style="font-size:40px;"></i></a>
                    <a href="#"><i class="fa fa-instagram" style="font-size:40px;"></i></a>

            </div>
            <div class="col-12 col-lg-5">
                 <img src="{{asset('assets/images/home-top.png')}}" align="left" style="width:343px;height:666px;padding-top: 150px;padding-bottom: 100px;">
            </div>
        </div>
    </div>
</div>

<div class="row" style="background: linear-gradient(270deg, #BB1D33 0%, rgba(187, 29, 51, 0) 122.33%); width: 101.1%">
    <div class="col-12 col-lg-5">
        <div class="slider">
            <div class="isi-slider">
                <img src="{{asset('assets/galerry/1.png')}}">
                <img src="{{asset('assets/galerry/2.png')}}">
                <img src="{{asset('assets/galerry/2.jpg')}}">
                <img src="{{asset('assets/galerry/2.png')}}">
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-7"style="color:#FFFFFF; padding-top: 80px; text-align: left; font-family: Poppins; font-weight: 700;font-size: 35px; width: 394px">Galerry Garda Mitra Nasional
        <p style="font-size:14px;font-weight: 400;">Berikut merupakan dokumentasi dari kegiatan kami yang bisa disaksikan melalui youtube kami.</p>
        <a href="{{route('layanan')}}" class="btn-red btn-danger">Lebih Detail &emsp;<i class="fa fa-arrow-circle-right"></i> </a>&emsp;&emsp;
    </div>
</div>

<div class="container" align=center style="font-weight: 700;font-size: 28px;line-height: 42px;">our partner

</div>
<blockquote class="blockquote">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
{{-- <div class="container">

</div> --}}
<!-- <div class="container" style="font-family: Poppins; padding-top:100px;padding-bottom:60px">
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
            <div class="col-md-3"><h4 class="mb-4">Koordinasi</h4></div>
            <div class="col-md-3"><h3 class="mb-4">SOP, PSO & PROTAP</h3></div>
            <div class="col-md-3"><h3 class="mb-4">Pengawasan</h3></div>
            <div class="col-md-3"><h3 class="mb-4">Pembinaan</h3></div>
            <div class="col-md-3">
            <h5 class="mb-4" style="font-size: 14px;width: 215px;line-height: 21px;">Melakukan koordinasi secara rutin degan apparat managemen dan warga setempat</h5>
            </div>
            <div class="col-md-3">
            <h5 class="mb-4" style="font-size: 14px;width: 215px;line-height: 21px;">Menjalankan fungsi pengamanan dan pelayanan serta melaksanakan SOP, PSO dan Protap secara Konsisten serta melakuka evaluasi dan sharing knowladge</h5>
            </div>
            <div class="col-md-3">
            <h5 class="mb-4" style="font-size: 14px;width: 215px;line-height: 21px;">Melakukan Pengawasan secara berjenjang dan berkelanjutan terhadap pelaksanaan tugas personel di lokasi penjagaan</h5>
            </div>
            <div class="col-md-3">
            <h5 class="mb-4" style="font-size: 14px;width: 215px;line-height: 21px;">Melakukan pemeliharaan dan peningkatan kemampuan secara berlanjut serta selalu mengikuti perkembangan sesuai kebutuhan</h5>
            </div>
        </div>
</div> -->


@endsection
