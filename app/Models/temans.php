<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class temans extends Model
{
    protected $fillable = [
        'nama', 'alamat', 'kota', 'telp'
    ];
}
