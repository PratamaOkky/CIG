<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Slip Gaji</title>
  </head>
  <body>

    <div class="section">
        <div class="section-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-header" style="border: 1px black solid">
                                    <img src="https://gmn511.com/_nuxt/img/logo1.e68f463.png" width="35" height="40" alt="" style="margin-right: 38%;">Slip Gaji
                                </div>

                                <div class="card-body" style="border: 1px black solid; font-size: 14px">
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <p class="card-text mb-4 mt-2">NAMA : {{Auth::user()->nama}}</p>
                                            <p class="card-text mb-4">NIP : {{Auth::user()->nip}}</p>
                                            <p class="card-text mb-4">JABATAN : {{Auth::user()->jabatan}}</p>
                                            <p class="card-text mb-4">ATASAN LANGSUNG : {{Auth::user()->atasan}}</p>

                                            <p class="card-text mb-4" style="margin-left: 10%; padding-top: 3%; font-weight: bold">PENDAPATAN</p>

                                            <p class="card-text mb-4" style="padding-top: 3%;">GAJI POKOK : {{$gaji->gaji}}</p>
                                            <p class="card-text mb-4">T.MAKAN & TRANSPORT : {{$gaji->tunjangan_makan}}</p>
                                            <p class="card-text mb-4">T.OPERASIONAL : {{$gaji->tunjangan_operasional}}</p>
                                            <p class="card-text mb-4">T.JABATAN : {{$gaji->tunjangan_jabatan}}</p>
                                            <p class="card-text mb-4">LEMBUR NASIONAL : {{$gaji->lembur_nasional}}</p>
                                            <p class="card-text mb-4">LEMBUR BIASA : {{$gaji->lembur_biasa}}</p>
                                            <p class="card-text mb-4">KOREKSI : {{$gaji->koreksi}}</p>
                                            <p class="card-text mb-4">BPJS KES (PERUSAHAAN) : {{$gaji->bpjs_kesehatan_perusahaan}}</p>
                                            <p class="card-text mb-4">BPJS TK (PERUSAHAAN) : {{$gaji->bpjs_tenagakerja_perusahaan}}</p>
                                            <p class="card-text mb-4">KOREKSI PLUS (+) : {{$gaji->koreksi_plus}}</p>
                                            <p class="card-text mb-4">BONUS : {{$gaji->bonus}}</p>
                                            <p class="card-text mb-4" style="font-weight: bold">TOTAL PENGHASILAN : {{$gaji->total_plus}}</p>

                                        </div>
                                        <div class="col-6" style="margin-left: 55%; margin-top: -90%">
                                            <p class="card-text mb-4">NO.NPWP : {{ Auth::user()->npwp }}</p>
                                            <p class="card-text mb-4">NO.REKENING : {{ Auth::user()->rek }}</p>
                                            <p class="card-text mb-4">INSTALASI : {{ Auth::user()->instalasi }}</p>
                                            <p class="card-text mb-4">NAMA BANK : {{ Auth::user()->bank }}</p>

                                            <p class="card-text mb-4" style="margin-left: 5%; padding-top: 3%; font-weight: bold">POTONGAN/ IURAN</p>

                                            <p class="card-text mb-4" style="padding-top: 3%;">UANG JAMINAN : {{ $gaji->jaminan }}</p>
                                            <p class="card-text mb-4">KOREKSI (-) : {{ $gaji->koreksi_min }}</p>
                                            <p class="card-text mb-4">DIKSAR : {{ $gaji->diksar }}</p>
                                            <p class="card-text mb-4">KTA : {{ $gaji->kta }}</p>
                                            <p class="card-text mb-4">PPH 21 : {{ $gaji->pph21 }}</p>
                                            <p class="card-text mb-4">BPJS KES (KARYAWAN) : {{ $gaji->bpjs_kes_karyawan }}</p>
                                            <p class="card-text mb-4">BPJS TK (KARYAWAN) : {{ $gaji->bpjs_tenagakerja_karyawan }}</p>
                                            <p class="card-text mb-4">BPJS KES (PERUSAHAAN) : {{ $gaji->bpjskes_perusahaan }}</p>
                                            <p class="card-text mb-4">BPJS TK (PERUSAHAAN) : {{ $gaji->bpjstk_perusahaan }}</p>

                                            <p class="card-text mb-4" style="font-weight: bold">TOTAL PENGURANGAN : {{ $gaji->potongan }}</p>

                                            <p class="card-text mb-4" style="font-weight: bold">TOTAL GAJI : {{ $gaji->totalgaji }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
