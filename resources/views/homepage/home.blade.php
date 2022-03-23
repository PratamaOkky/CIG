@section('title', 'Garda Mitra Nasional')
@extends('layouts.homepage.template')
@section('content')
<div style="background-image: url('assets/images/bghome-top.png'); width:100%;height:100%;">
    <div class="container">
        <div class="row">
            <div class=col-md-7 py-5>
                <div style="color:#BB1D33; padding-top: 200px;
                        text-align: left; font-family: Poppins; font-weight: 700; font-size: 35px; width: 550px">Garda Mitra Nasional
                        <p style="font-size:14px; font-weight: 400;padding-top: 35px;padding-bottom: 58px;color:#350106">Badan Usaha Jasa Pengamanan (BUJP) dan didirikan pada tanggal 5 November 2010. 
                            Memiliki personil pengamanan yang handal dan profesional Membangun hubungan dan komunikasi 
                            yang harmonis serta memberi solusi bagi pengguna jasa Mengembangkan kerja sama.</p> </div>
                <!-- button lannjut -->
                    <!-- <a href="{{route('login')}}" class="btn1 btn-danger">Lebih Detail ► </a>&emsp;&emsp;&emsp; -->
                    <!-- <a href="" class="social-icon"> <i class="fa fa-facebook"></i></a>&emsp;&emsp; -->
                    <!-- <a href="" class="social-icon"> <i class="fa fa-twitter"></i></a>&emsp;&emsp; -->
                    <!-- <a href="" class="social-icon"> <i class="fa fa-youtube"></i></a>&emsp; -->
                    <!-- cobain --> 
                    <a href="{{route('tentang')}}" class="btn-red btn-danger">Lebih Detail ► </a>&emsp;&emsp;
                    <a href="#"><i class="fa fa-youtube-play"style="font-size:40px;"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" style="font-size:40px;"></i></a>
                    <a href="#"><i class="fa fa-instagram" style="font-size:40px;"></i></a>
                    <a href="#"><i class="fa fa-facebook-square" style="font-size:40px;"></i></a>                
                    
            </div>
            <div class=col-md-5 py-5>
                 <img src="{{asset('assets/images/home-top.png')}}" align="left" style="width:343px;height:666px;padding-top: 150px;padding-bottom: 100px;">
            </div> 
        </div>
    </div>      
</div>
<div class="container" style="font-family: Poppins; padding-top:100px;padding-bottom:60px">
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
</div>
<div class="row" style="background: linear-gradient(270deg, #BB1D33 0%, rgba(187, 29, 51, 0) 122.33%);">
    <div class="col-5">
        <div class=slider>
            <div class="isi-slider">
            <img src="{{asset('assets/galerry/1.png')}}">
            <img src="{{asset('assets/galerry/2.png')}}">
            <img src="{{asset('assets/galerry/2.jpg')}}">
            <img src="{{asset('assets/galerry/2.png')}}">
            </div>
        </div>
    </div>
    <div class="col-6"style="color:#FFFFFF; padding-top: 80px; text-align: left; font-family: Poppins; font-weight: 700;font-size: 35px; width: 394px">
            Galerry Garda Mitra Nasional
                <p style="font-size:14px;font-weight: 400;">Berikut merupakan dokumentasi dari kegiatan kami yang bisa disaksikan melalui youtube kami.
                </p>
            </div>
        </div>
</div>


<div class="container">
        <div class="row" style="padding-bottom: 100px;">
            <div class=col-md-8 py-5>
                <div style="color:#350106; padding-top: 100px;text-align: left; font-family: Poppins; font-weight: 700;
font-size: 28px;
line-height: 42px; width: 324px ">
                        Terima Kasih Atas Kepercayaannya
                </div>
                <div style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 21px; color: #350106;width: 449px;">
                Menjadi Perusahaan Jasa Pengamanan Nasional Dan Sebagai Mitra Strategis Yang Terpercaya
                </div>
            </div>
        <div class=col-md-4 py-5>
        <img src="{{asset('assets/images/home-bot.png')}}"style="width:100%;height:100%; padding-top: 100px">
        </div> 

</div>
@endsection
