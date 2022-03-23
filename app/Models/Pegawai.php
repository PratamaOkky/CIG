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
        'jabatan',
        'divisi',
        'ttl',
        'gender_id',
        'kewarganegaraan',
        'agama',
        'alamat',
        'npwp',
        'no_kes',
        'no_tk',
        'email',
        'tgl_masuk',
    ];

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }
}
