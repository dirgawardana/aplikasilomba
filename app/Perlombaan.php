<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perlombaan extends Model
{
    protected $fillable = [
        'name', 'jeniskelamin', 'jenislomba', 'usia', 'alamat'
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
