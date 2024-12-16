<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Tạo 10 categories
        $categories = Category::factory(10)->create();
        
        // Tạo 20 authors
        $authors = Author::factory(20)->create();
        
        // Tạo 50 books và liên kết với categories và authors
        Book::factory(50)->create()->each(function ($book) use ($categories, $authors) {
            // Mỗi sách có 1-3 categories
            $book->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );
            
            // Mỗi sách có 1-2 authors
            $book->authors()->attach(
                $authors->random(rand(1, 2))->pluck('id')->toArray()
            );
        });
        
        // Tạo 20 accounts
        Account::factory(20)->create();
        
        // Tạo 30 orders
        Order::factory(30)->create()->each(function ($order) {
            // Mỗi order có 1-5 order details
            OrderDetail::factory(rand(1, 5))->create([
                'order_id' => $order->id
            ]);
        });
    }
}
