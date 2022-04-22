<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $table = 'genders';

    protected $with = ['user'];

    protected $fillable = [
        'gender',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
