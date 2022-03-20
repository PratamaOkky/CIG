@section('title', 'Dashboard')

@extends('layouts.admin.template')

@section('content')

<div class="section">
    <div class="container">
        <div class="section-header mt-5 mb-3">
            <h1 class="head">Selamat Datang</h1>
        </div>

        <div class="card mb-5" style="max-width: 380px; border: none">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('assets/images/faces/1.jpg')}}" style="width: 190px; height: 179; margin-top: 23px" class="img-fluid rounded" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body" align="left">
                        <h2 class="card-title">{{ auth()->user()->nama }}</h2>
                        <p class="card-text">Direktur Operasional</p>
                        <p class="card-text">3603212376880006</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12">

                <table class="table table-striped table-borderless">

                    <tbody>
                      <tr>
                        <td>Kelahiran           :   Jakarta</td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin       :   Pria</td>
                      </tr>
                      <tr>
                        <td>Agama          :    Islam</td>
                      </tr>
                      <tr>
                        <td>Kewarganegaraan          :    Indonesia</td>
                      </tr>
                      <tr>
                        <td>Alamat          :    Simatupang Pasar Minggu Jakarta Selatan</td>
                      </tr>
                    </tbody>
                </table>

            </div>

            <div class="col-md-6 col-12">

                <table class="table table-striped table-borderless">

                    <tbody>
                        <tr>
                          <td>Tahun Masuk           :   22 Juni 2011</td>
                        </tr>
                        <tr>
                          <td>NIP       :   3603212376880006</td>
                        </tr>
                        <tr>
                          <td>NPWP          :    Islam</td>
                        </tr>
                        <tr>
                          <td>BPJS Kesehatan          :    8976545674921</td>
                        </tr>
                        <tr>
                          <td>BPJS Tenaga Kerja          :    8976545674921</td>
                        </tr>
                      </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

@endsection
