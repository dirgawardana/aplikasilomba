<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    protected $fillable = [
        'name', 'jeniskelamin', 'usia', 'alamat', 'oke'
    ];
}
