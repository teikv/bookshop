<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'BookID';
    protected $fillable = [
        'Title',
        'Price',
        'PublicationDate',
        'Description',
        'StockQuantity',
        'image',
        'country',
        'slug'
    ];

    public function authors()
    {
        return $this->hasMany(Author::class, 'AuthorID');
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'CategoryID');
    }
}

