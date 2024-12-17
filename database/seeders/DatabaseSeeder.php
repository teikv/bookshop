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

    $this->call([
        AccountSeeder::class,
        BookSeeder::class,
        OrderSeeder::class,
        OrderDetailSeeder::class,
        CategorySeeder::class,
        AuthorSeeder::class,
        BookCategorySeeder::class,
        BookAuthorSeeder::class,
    ]);
}   
}


    


