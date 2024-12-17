<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    public function run()
    {
        $books = Book::all();
        $categories = Category::all();

        foreach ($books as $book) {
            $selectedCategories = $categories->random(rand(1, 3));
            foreach ($selectedCategories as $category) {
                $book->categories()->attach($category->CategoryID);
            }
        }
    }
}

