<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Book;



class BooksTableSeeder extends Seeder
{
    public function run()
    {
          // Xóa sạch dữ liệu trước khi thêm mới
          Book::truncate();

        $books = [
            [
                'title' => 'Book 1',
                'image' => 'rec-1.jpg',
                'price' => 100000,
                'country' => 'Vietnam', 
                'description' => 'Description for Book 1',
                'slug' => Str::slug('Book 1'). '-' . uniqid(),
            ],
            [
                'title' => 'Book 2',
                'image' => 'rec-2.jpg',
                'price' => 150000,
                'country' => 'Japan',
                'description' => 'Description for Book 2',
                'slug' => Str::slug('Book 2'). '-' . uniqid(),
            ],
            [
                'title' => 'Book 3',
                'image' => 'rec-3.jpg', 
                'price' => 200000,
                'country' => 'USA',
                'description' => 'Description for Book 3',
                'slug' => Str::slug('Book 3'). '-' . uniqid(),
            ],
            [
                'title' => 'Book 4',
                'image' => 'rec-4.jpg',
                'price' => 180000, 
                'country' => 'Korea',
                'description' => 'Description for Book 4',
                'slug' => Str::slug('Book 4'). '-' . uniqid(),
            ],
            [
                'title' => 'Book 5',
                'image' => 'rec-5.jpg',
                'price' => 250000,
                'country' => 'China',
                'description' => 'Description for Book 5', 
                'slug' => Str::slug('Book 5'). '-' . uniqid(),
            ],
            [
                'title' => 'Book 6',
                'image' => 'rec-6.jpg',
                'price' => 300000,
                'country' => 'Thailand',
                'description' => 'Description for Book 6',
                'slug' => Str::slug('Book 6'). '-' . uniqid(),
            ],
            [
                'title' => 'Book 7',
                'image' => 'rec-7.jpg',
                'price' => 280000,
                'country' => 'Singapore',
                'description' => 'Description for Book 7',
                'slug' => Str::slug('Book 7'). '-' . uniqid(),
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}

