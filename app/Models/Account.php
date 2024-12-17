<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'AccountID';
    protected $fillable = [
        'Username',
        'Password',
        'Email',
        'Role',
        'Name',
        'Phone',
        'ShippingAddress',
    ];
}
