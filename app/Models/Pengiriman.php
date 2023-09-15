<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Pengiriman extends Model
{
    protected $collection = 'pengiriman';
    protected $connection = 'mongodb';

    protected $fillable = [
        'tanggal kirim',
        'tanggal sampai',
        'status',
        'ID pembelian',
    ];
}
