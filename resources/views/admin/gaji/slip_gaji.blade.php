<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Slip</title>
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
                                    <img src="https://gmn511.com/_nuxt/img/logo1.e68f463.png" width="35" height="40" alt="" style="margin-right: 44%;">Slip Gaji
                                </div>

                                <div class="card-body" style="border: 1px black solid; font-size: 12px">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-text">NAMA : {{Auth::user()->nama}}</p>
                                            <p class="card-text">NIP : {{Auth::user()->nip}}</p>
                                            <p class="card-text">JABATAN : {{Auth::user()->jabatan}}</p>
                                            <p class="card-text">ATASAN LANGSUNG : {{Auth::user()->atasan}}</p>

                                            <p style="margin-left: 25%; padding-top: 5%; font-weight: bold">PENDAPATAN</p>

                                            <p class="card-text" style="padding-top: 5%;">GAJI POKOK : {{$gaji->gaji}}</p>
                                            <p class="card-text">T.MAKAN & TRANSPORT : {{$gaji->tunjangan_makan}}</p>
                                            <p class="card-text">T.OPERASIONAL : {{$gaji->tunjangan_operasional}}</p>
                                            <p class="card-text">T.JABATAN : {{$gaji->tunjangan_operasional}}</p>
                                            <p class="card-text">LEMBUR NASIONAL : {{$gaji->lembur_nasional}}</p>
                                            <p class="card-text">LEMBUR BIASA : {{$gaji->lembur_biasa}}</p>
                                            <p class="card-text">KOREKSI : {{$gaji->koreksi}}</p>
                                            <p class="card-text">BPJS KES (PERUSAHAAN) : {{$gaji->bpjs_kesehatan_perusahaan}}</p>
                                            <p class="card-text">BPJS TK (PERUSAHAAN) : {{$gaji->bpjs_tenagakerja_perusahaan}}</p>
                                            <p class="card-text">KOREKSI PLUS (+) : {{$gaji->koreksi_plus}}</p>
                                            <p class="card-text">BONUS : {{$gaji->bonus}}</p>
                                            <p class="card-text" style="font-weight: bold">TOTAL PENGHASILAN : {{$gaji->total_plus}}</p>

                                        </div>
                                        <div class="col-6">
                                            <p class="card-text">NO.NPWP : {{ Auth::user()->npwp }}</p>
                                            <p class="card-text">NO.REKENING : -</p>
                                            <p class="card-text">INSTALASI : ASIA 1</p>
                                            <p class="card-text">NAMA BANK : BCA</p>

                                            <p style="margin-left: 20%; padding-top: 5%; font-weight: bold">POTONGAN/ IURAN</p>

                                            <p class="card-text" style="padding-top: 5%;">UANG JAMINAN : {{ $gaji->jaminan }}</p>
                                            <p class="card-text">KOREKSI (-) : {{ $gaji->koreksi_min }}</p>
                                            <p class="card-text">DIKSAR : {{ $gaji->diksar }}</p>
                                            <p class="card-text">KTA : {{ $gaji->kta }}</p>
                                            <p class="card-text">PPH 21 : {{ $gaji->pph21 }}</p>
                                            <p class="card-text">BPJS KES (KARYAWAN) : {{ $gaji->bpjs_kes_karyawan }}</p>
                                            <p class="card-text">BPJS TK (KARYAWAN) : {{ $gaji->bpjs_tenagakerja_karyawan }}</p>
                                            <p class="card-text">BPJS KES (PERUSAHAAN) : {{ $gaji->bpjskes_perusahaan }}</p>
                                            <p class="card-text">BPJS TK (PERUSAHAAN) : {{ $gaji->bpjstk_perusahaan }}</p>

                                            <p class="card-text" style="font-weight: bold">TOTAL PENGURANGAN : {{ $gaji->potongan }}</p>

                                            <p class="card-text" style="font-weight: bold">TOTAL GAJI : {{ $gaji->totalgaji }}</p>
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
