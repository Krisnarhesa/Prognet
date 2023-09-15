<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Produk extends Model
{
    protected $collection = 'produk';
    protected $connection = 'mongodb';

    protected $fillable = [
        'produk',
        'kategori',
        'stok',
        'harga',
        'deskripsi',
    ];
}
