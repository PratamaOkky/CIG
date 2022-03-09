@section('title', 'Login Page')

@extends('layouts.auth.template')

@section('auth')

<div class="container" style="margin-top: 100px">
    <div class="row match-height">
        <div class="col-12">
            <div class="card-group">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h1 class="mb-5">Garda Mitra Nasional</h1>
                            <p>Badan Usaha Jasa Pengamanan (BUJP) dan didirikan pada tanggal 5 November 2010. Memiliki personil pengamanan yang handal dan profesional Membangun hubungan dan komunikasi yang harmonis serta memberi solusi bagi pengguna jasa Mengembangkan kerja sama.</p>
                        </div>
                    </div>
                </div>
                <hr style="border-left: 3px #bb1d33 solid; height:250px; width:0px;">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h1 class="mb-5">Silakan Masuk</h1>
                            <form action="">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="text" class="form-control form-control" placeholder="Nip">
                                    <div class="form-control-icon"><i class="bi bi-person"></i></div>
                                </div>

                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="password" class="form-control form-control" placeholder="Password">
                                    <div class="form-control-icon"><i class="bi bi-shield-lock"></i></div>
                                </div>

                                {{-- <div class="form-check form-check-lg d-flex align-items-end">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                        Keep me logged in
                                    </label>
                                </div> --}}

                                <button type="submit" class="btn btn-danger" style="margin-left: 416px; background-color: #960a19"> Masuk <i class="fa fa-arrow-circle-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
