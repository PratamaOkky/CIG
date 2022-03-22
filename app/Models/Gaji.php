<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;

    protected $table = 'tb_gaji';

    protected $guarder = ['id'];

    // protected $fillable = [
    //     'gaji',
    //     'tunjangan_makan',
    //     'tunjangan_operasional',
    //     'tunjangan_jabatan',
    //     'lembur_nasional',
    //     'lembur_biasa',
    //     'koreksi',
    //     'bpjs_kesehatan_perusahaan',
    //     'bpjs_tenagakerja_perusahaan',
    //     'koreksi_plus',
    //     'bonus',
    //     'total_plus',
    //     'jaminan',
    //     'koreksi_min',
    //     'diksar',
    //     'kta',
    //     'pph21',
    //     'bpjs_kes_karyawan',
    //     'bpjs_tenagakerja_karyawan',
    //     'bpjskes_perusahaan',
    //     'bpjstk_perusahaan',
    //     'potongan',
    //     'totalgaji',
    // ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
