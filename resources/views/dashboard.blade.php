@section('title', 'Dashboard')

@extends('layouts.admin.template')

@section('content')

<div class="section">
    <div class="container">
        <div class="section-header mt-5 mb-4 ml-0">
            <h1 class="head">Selamat Datang</h1>
        </div>

        <div class="card mb-3" style="max-width: 100%; border: none">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('assets/images/faces/1.jpg')}}" style="width: 100px; height: 100; margin-top: 19px; margin-left: -230px" class="img-fluid rounded" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body" align="left" style="margin-left: -250px;">
                        <h2 class="card-title" style="font-size: 26px">{{ auth()->user()->nama }}</h2>
                        <p class="card-text">{{ auth()->user()->divisi }}</p>
                        <p class="card-text">{{ auth()->user()->nip }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 col-12">

                <table class="table table-striped table-borderless">

                    <tbody>
                      <tr>
                        <td>Kelahiran : {{ auth()->user()->ttl }}</td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin : {{ auth()->user()->gender->name }}</td>
                      </tr>
                      <tr>
                        <td>Agama : {{ auth()->user()->agama }}</td>
                      </tr>
                      <tr>
                        <td>Kewarganegaraan : {{ auth()->user()->kewarganegaraan }}</td>
                      </tr>
                      <tr>
                        <td>Alamat : {{ auth()->user()->alamat }}</td>
                      </tr>
                    </tbody>
                </table>

            </div>

            <div class="col-md-6">

                <table class="table table-striped table-borderless">

                    <tbody>
                        <tr>
                          <td>Tahun Masuk : {{ date('d-m-Y'), strtotime( auth()->user()->tgl_masuk ) }}</td>
                        </tr>
                        <tr>
                          <td>NIP : {{ auth()->user()->nip }}</td>
                        </tr>
                        <tr>
                          <td>NPWP : {{ auth()->user()->npwp }}</td>
                        </tr>
                        <tr>
                          <td>BPJS Kesehatan : {{ auth()->user()->no_kes }}</td>
                        </tr>
                        <tr>
                          <td>BPJS Tenaga Kerja : {{ auth()->user()->no_tk }}</td>
                        </tr>
                      </tbody>
                </table>

            </div>

        </div>
        <a href="{{asset('gaji/' . auth()->user()->nip)}}" class="btn btn-danger d-inline border-0" style="margin-left: 92.2%">Slip Gaji</a>
    </div>
</div>

@endsection
