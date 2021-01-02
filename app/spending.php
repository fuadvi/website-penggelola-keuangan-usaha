<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class spending extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'nominal', 'keterangan', 'tanggal_pembelian',
    ];

    protected $hidden = [];
}
