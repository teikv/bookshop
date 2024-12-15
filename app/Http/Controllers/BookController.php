<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function homepage()
    {
        $books = Book::take(4)->get(); // Lấy 4 sách mới nhất
        return view('homepage', compact('books'));
    }

    public function booklist()
    {
        $books = Book::paginate(12); // Phân trang 12 sách
        return view('booklist', compact('books'));
    }

    public function bookdetail(Book $book)
    {
        return view('bookdetail', compact('book'));
    }
}

