<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'tb_level';

    protected $fillable = [
        'level'
    ];

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

    public function pegawai()
    {
        return $this->hasMany('App\Models\Pegawai');
    }
}
