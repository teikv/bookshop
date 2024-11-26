<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function homepage()
{
    $banners = [
        ['image' => 'https://via.placeholder.com/1200x300', 'caption' => 'Khám phá những cuốn sách hay'],
        ['image' => 'https://via.placeholder.com/1200x300', 'caption' => 'Đọc sách mỗi ngày để mở rộng tri thức'],
        ['image' => 'https://via.placeholder.com/1200x300', 'caption' => 'Sách là chìa khóa thành công'],
    ];
    $popularBooks = [
        ['title' => 'Book 1', 'description' => 'Short description of the book.', 'image' => 'https://via.placeholder.com/150'],
        ['title' => 'Book 2', 'description' => 'Short description of the book.', 'image' => 'https://via.placeholder.com/150'],
        ['title' => 'Book 3', 'description' => 'Short description of the book.', 'image' => 'https://via.placeholder.com/150'],
        ['title' => 'Book 4', 'description' => 'Short description of the book.', 'image' => 'https://via.placeholder.com/150'],
    ];

    $newBooks = [
        ['title' => 'New Book 1', 'description' => 'Short description of the book.', 'image' => 'https://via.placeholder.com/150'],
        ['title' => 'New Book 2', 'description' => 'Short description of the book.', 'image' => 'https://via.placeholder.com/150'],
        ['title' => 'New Book 3', 'description' => 'Short description of the book.', 'image' => 'https://via.placeholder.com/150'],
        ['title' => 'New Book 4', 'description' => 'Short description of the book.', 'image' => 'https://via.placeholder.com/150'],
    ];

    return view('homepage', compact('banners', 'popularBooks', 'newBooks'));
}
}
