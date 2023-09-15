<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Pembelian extends Model
{
    protected $collection = 'pembelian';
    protected $connection = 'mongodb';

    protected $fillable = [
        'ID customer',
        'total produk',
        'total pembelian',
        'ID admin',
        'tanggal',
        'status',
    ];
}
