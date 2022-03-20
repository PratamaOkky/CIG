<?php

namespace App\Imports;

use App\Models\Gaji;
use Maatwebsite\Excel\Concerns\ToModel;

class GajiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Gaji([
            'gaji' => $row[1],
            'tunjangan_makan' => $row[2],
            'tunjangan_operasional' => $row[3],
            'tunjangan_jabatan' => $row[4],
            'lembur_nasional' => $row[5],
            'lembur_biasa' => $row[6],
            'koreksi' => $row[7],
            'bpjs_kesehatan_perusahaan' => $row[8],
            'bpjs_tenagakerja_perusahaan' => $row[9],
            'koreksi_plus' => $row[10],
            'bonus' => $row[11],
            'total_plus' => $row[12],
            'jaminan' => $row[13],
            'koreksi_min' => $row[14],
            'diksar' => $row[15],
            'kta' => $row[16],
            'pph21' => $row[17],
            'bpjs_kes_karyawan' => $row[18],
            'bpjs_tenagakerja_karyawan' => $row[19],
            'bpjskes_perusahaan' => $row[20],
            'bpjstk_perusahaan' => $row[21],
            'potongan' => $row[22],
            'totalgaji' => $row[23],

        ]);
    }
}
