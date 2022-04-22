<x-app-layout title="Dashboard">

    @slot('styles')
        <style>
            td
            {
                border-radius: 50%;
            }
        </style>
    @endslot

    <div class="container mt-3 py-3">

        <h1 class="welcome mt-4">Selamat Datang</h1>

        <div class="card mb-3 mt-4 py-2 border-0">
            <div class="row g-0">
                <div class="col-md ms-5 pt-1">
                    <img src="{{ asset('storage/' . auth()->user()->image) }}" class="img-fluid">
                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <h5 class="card-title">{{ auth()->user()->name }}</h5>
                        <p class="card-text">{{ auth()->user()->jabatan }}</p>
                        <p class="card-text"><small class="text-muted">{{ auth()->user()->nip }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <table class="table table-striped table-borderless mt-3">

                    <tbody>
                        <tr>
                            <td>Kelahiran : {{ auth()->user()->tempat_lahir }} , {{ date('d F Y', strtotime(auth()->user()->tgl_lahir)) }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin : {{ auth()->user()->gender->gender }}</td>
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
                            <td>Status Pajak : {{ auth()->user()->pajak }}</td>
                        </tr>
                        <tr>
                            <td>Mulai PKWT : {{ date('d F Y', strtotime(auth()->user()->awal_pkwt)) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        <div class="col">
            <table class="table table-striped table-borderless mt-3">
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
                            <td>BPJS Kesehatan : {{ auth()->user()->bpjs_kes }}</td>
                        </tr>
                        <tr>
                            <td>BPJS Tenaga Kerja : {{ auth()->user()->bpjs_tk }}</td>
                        </tr>
                        <tr>
                            <td>Akhir PKWT : {{ date('d F Y', strtotime(auth()->user()->akhir_pkwt)) }}</td>
                        </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 d-flex justify-content-end ms-auto">
                <a href="{{route('download')}}" class="btn btn-danger mt-3 mb-5 border-0">Slip Gaji</a>
            </div>
        </div>
    </div>


{{-- @include('admin.pegawai.editpassword') --}}

@include('sweetalert::alert')

</x-app-layout>
