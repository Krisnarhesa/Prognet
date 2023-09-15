<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Review extends Model
{
    protected $collection = 'review';
    protected $connection = 'mongodb';

    protected $fillable = [
        'IDCustomer',
        'IDPembelian',
        'review',
        'rating',
    ];
}
