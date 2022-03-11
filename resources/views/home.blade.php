@section('title', 'Garda Mitra Nasional')
@extends('template')
@section('content')

<div class="container">
    <div class="row">
        <div class=col-md-8 py-5>
            <div style="color:#BB1D33; padding-top: 100px;
                        text-align: left; font-family: Poppins; font-size: 35px; width: 500px">Garda Mitra Nasional
                        <p style="font-size:15px; color:#350106">Badan Usaha Jasa Pengamanan (BUJP) dan didirikan pada tanggal 5 November 2010. 
                            Memiliki personil pengamanan yang handal dan profesional Membangun hubungan dan komunikasi 
                            yang harmonis serta memberi solusi bagi pengguna jasa Mengembangkan kerja sama.</p>
        <p><a href="{{route('login')}}" class="btn btn-danger border-radius:12px">Lebih Detail ► </a>
            </div>
        </div>
        <div class=col-md-4 py-5>
        <img class="w-100" src="https://placeimg.com/250/250/nature" alt="gambar alam">
        </div> 
    </div>   
</div>








<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@endsection
