<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class income extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nominal', 'keterangan', 'kategori', 'tanggal_pemasukan'
    ];

    protected $hidden = [];
}
