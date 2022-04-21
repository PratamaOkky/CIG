<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'email',
        'subject',
        'isi'
    ];
}
