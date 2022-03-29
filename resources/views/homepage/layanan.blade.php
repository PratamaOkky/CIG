@section('title', 'Garda Mitra Nasional')

@extends('layouts.homepage.template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6"style="color:#BB1D33; padding-top: 200px; text-align: left; font-family: Poppins; font-weight: 700;font-size: 35px; width: 394px">
            <div class="row" style="background: rgba(187, 29, 51, 0.03); border-radius: 0px 75px;">Konsultasi Keamanan
                <p style="font-size:14px;font-weight: 400; color:#350106">Membentuk sistem keamanan bagi mitra
                    kerja yang baru berdiri ataupun sudah berjalan, berdasarkan kepada pengintegrasian sumber daya manusia
                    kerja yang baru berdiri ataupun sudah berjalan, berdasarkan kepada pengintegrasian sumber daya manusia
                    kerja yang baru berdiri ataupun sudah berjalan, berdasarkan kepada pengintegrasian sumber daya manusia.
                </p>
            </div>
        </div>

        <div class="col-12 col-lg-6" style="padding-top: 150px"><center>
            <img src="{{asset('assets/images/layanan.png')}}"style="width: width: 320px;height: 387px;left: 797px;top: 160px;">
        </div>
    </div>
</div>
<div class="container" style="padding-top: 150px;">
<div class="row">

	<div class="col-6">
		<div class="card border-0">
			<img src="{{asset('assets/images/ic-layanan.png')}}" class="card-img-top" alt="..."style="width: 87px;height: 107px;" align="right">
			<div class="card-body">
				<div class="card-title"><h4 class="mb-4">Koordinasi</h4></div>
                <h5 class="mb-4" style="font-weight: 400;
font-size: 16px;
line-height: 24px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis vestibulum velit pharetra massa imperdiet fermentum amet, risus non.</h5>
            </div>
		</div>
	</div>

	<div class="col-6">
		<div class="card border-0">
        <img src="{{asset('assets/images/ic-layanan.png')}}" class="card-img-top" alt="..."style="width: 87px;height: 107px;">
			<div class="card-body">
				<div class="card-title"><h5 class="mb-4">SOP,PSO & PROTAP</h4></div>
				<h5 class="mb-4" style="font-weight: 400;font-size: 16px;line-height: 24px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis vestibulum velit pharetra massa imperdiet fermentum amet, risus non.</h5>
            </div>
		</div>
	</div> 
</div>
@endsection
     