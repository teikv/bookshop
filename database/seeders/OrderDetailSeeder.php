<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Book;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    public function run()
    {
        $orders = Order::all();
        foreach ($orders as $order) {
            $books = Book::inRandomOrder()->take(rand(1, 5))->get();
            foreach ($books as $book) {
                OrderDetail::factory()->create([
                    'OrderID' => $order->OrderID,
                    'BookID' => $book->BookID,
                ]);
            }
        }
    }
}

