<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'OrderDetailID';
    protected $fillable = [
        'OrderID',
        'BookID',
        'Quantity',
        'Price',
    ];
}

