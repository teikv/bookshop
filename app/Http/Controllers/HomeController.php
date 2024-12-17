<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    //
    public function index()
    {
        // Lấy tất cả các sách từ cơ sở dữ liệu
        $books = Book::all();

        // Giả sử bạn có các danh mục như banners, popularBooks, newBooks
        // Bạn cần định nghĩa cách lấy dữ liệu cho chúng. Ví dụ:
        $banners = [
            ['image' => 'banner1.jpg', 'caption' => 'Caption 1'],
            ['image' => 'banner2.jpg', 'caption' => 'Caption 2'],
            // Thêm các banner khác
        ];

        // Ví dụ: Lấy 5 sách bán chạy
        $popularBooks = Book::orderBy('stock_quantity', 'desc')->take(5)->get();

        // Ví dụ: Lấy 5 sách mới nhất
        $newBooks = Book::orderBy('publication_date', 'desc')->take(5)->get();

        // Truyền dữ liệu đến view
        return view('homepage', compact('books', 'banners', 'popularBooks', 'newBooks'));
    }
}
