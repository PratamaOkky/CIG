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
                @if (auth()->user()->image)
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . auth()->user()->image) }}" style="width: 100px; height: 100; margin-top: 19px; margin-left: -230px; border-radius: 20%" class="img-fluid" alt="...">
                    </div>
                @else
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/faces/1.jpg') }}" style="width: 100px; height: 100; margin-top: 19px; margin-left: -230px" class="img-fluid" alt="...">
                    </div>
                @endif
                <div class="col-md-8">
                    <div class="card-body" align="left" style="margin-left: -250px;">
                        <h2 class="card-title" style="font-size: 26px; font-weight: bold">{{ auth()->user()->nama }}</h2>
                        <p class="card-text">{{ auth()->user()->jabatan }}</p>
                        <p class="card-text">{{ auth()->user()->nip }}</p>

                        <form action="{{route('edit.password', Crypt::encryptString(auth()->user()->id))}}" style="margin-top: -135px; margin-left: 25%">
                            <a href="#" data-bs-target="#edit-{{auth()->user()->id}}" data-bs-toggle="modal" class="text-danger h4"><i class="fa fa-edit"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @php
            use Carbon\Carbon;
            $date = Carbon::today()->format('d-m-y');
        @endphp
      </div>
      <div class="container">
        <div class="row mt-5 mb-3">
            <div class="col-12 col-lg-6">

                <table class="table table-striped table-borderless">

                    <tbody style="width: 100px">
                      <tr>
                        <td>Kelahiran : {{ auth()->user()->ttl }} , {{ date('d F Y', strtotime(auth()->user()->tgl_lahir)) }}</td>
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
                      <tr>
                        <td>Status Pajak : {{ auth()->user()->status_pajak }}</td>
                      </tr>
                      <tr>
                        <td>Mulai PKWT : {{ date('d F Y', strtotime(auth()->user()->awal_pkwt)) }}</td>
                      </tr>
                    </tbody>
                </table>

            </div>

            <div class="col-12 col-lg-6">

                <table class="table table-striped table-borderless">

                    <tbody>
                        <tr>
                          <td>Tahun Masuk : {{ date('d F Y', strtotime(auth()->user()->tgl_masuk)) }}</td>
                        </tr>
                        <tr>
                            <td>NIK : {{ auth()->user()->nik }}</td>
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
                        <tr>
                            <td>Akhir PKWT : {{ date('d F Y', strtotime(auth()->user()->akhir_pkwt)) }}</td>
                        </tr>
                      </tbody>
                </table>

            </div>
        </div>
      </div>  
        <a href="{{route('download')}}" class="btn btn-danger d-inline border-0" style="margin-left: 92.2%; background-color: #bb1d33">Slip Gaji</a>

</div>

@include('admin.pegawai.editpassword')

@include('sweetalert::alert')

@endsection
