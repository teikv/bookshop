<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Seeder;

class BookAuthorSeeder extends Seeder
{
    public function run()
    {
        $books = Book::all();
        $authors = Author::all();

        foreach ($books as $book) {
            $selectedAuthors = $authors->random(rand(1, 2));
            foreach ($selectedAuthors as $author) {
                $book->authors()->attach($author->AuthorID);
            }
        }
    }
}

