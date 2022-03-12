<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'tb_pegawai';

    protected $fillable = [
        'nama',
        'nip',
        'tempat_lhr',
        'tgl_lahir',
        'alamat',
        'telpon',
        'jabatan',
        'atasan',
        'instalasi',
        'foto',
        'id_gaji'
    ];
}
