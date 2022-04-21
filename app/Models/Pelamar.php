<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;

    protected $table = 'applicants';

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'email',
        'nohp',
        'posisi',
        'cv'
    ];
}
