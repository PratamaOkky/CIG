@section('title', 'Login Page')

@extends('layouts.auth.template')

@section('auth')


@if (session()->has('loginErorr'))

    <div class="alert alert-danger alert-dissmissable fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>

@endif

<div class="container" style="margin-top: 100px">
    <div class="row match-height">
        <div class="col-12">
            <div class="card-group">
                <div class="card" style="border: none; background: none">
                    <div class="card-content">
                        <div class="card-body">
                            <h1 class="mb-5" style="color: #bb1d33">Garda Mitra Nasional</h1>
                            <p>Badan Usaha Jasa Pengamanan (BUJP) dan didirikan pada tanggal 5 November 2010. Memiliki personil pengamanan yang handal dan profesional Membangun hubungan dan komunikasi yang harmonis serta memberi solusi bagi pengguna jasa Mengembangkan kerja sama.</p>
                        </div>
                    </div>
                </div>
                <div style="border-left: 3px #bb1d33 solid; height:350px; width:0px; margin-top: -25px"></div>
                <div class="card" style="border: none; background: none">
                    <div class="card-content">
                        <div class="card-body">
                            <h1 class="mb-5" style="color: #bb1d33">Silakan Masuk</h1>
                            <form action="{{route('login')}}" method="POST" class="need-validation">
                                @csrf
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="text" name="nip" class="form-control" @error('nip') is-invalid @enderror placeholder="Nip" value="{{ old('nip') }}" autofocus required>
                                    <div class="form-control-icon"><i class="bi bi-person"></i></div>
                                    @error('nip')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="password" name="password" class="form-control form-control" placeholder="Password" autofocus required>
                                    <div class="form-control-icon"><i class="bi bi-shield-lock"></i></div>
                                </div>

                                {{-- <div class="form-check form-check-lg d-flex align-items-end">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                        Keep me logged in
                                    </label>
                                </div> --}}

                                <div class="form-group position-relative">
                                    <button type="submit" class="btn btn-danger" style="margin-left: 418px; background-color: #960a19"> Masuk <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
