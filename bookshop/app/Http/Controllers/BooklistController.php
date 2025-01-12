<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class BooklistController extends Controller
{
    public $products;
    public $categories;


    public function __construct()
    {
        $this->products = Product::all();
        $this->categories = Category::all();
    }

    public function filterByCategory($id)
    {
        $categories = Category::all(); // Để hiển thị sidebar
        $products = Product::where('category_id', $id)->get(); // Lấy các sản phẩm thuộc danh mục
        $maxPrice = Product::max('price');

        return view('booklist', [
            'categories' => $categories,
            'products' => $products,
            'maxPrice' => $maxPrice,
        ]);
    }

    public function search(Request $request)
{
    $query = strtolower($request->input('txt')); // Get and convert the search text to lowercase

    // Fetch products where the name matches partially (case-insensitive)
    $products = Product::whereRaw('LOWER(name) LIKE ?', ["%{$query}%"])->get();

    // Return the result as a JSON response for suggestions
    if ($request->ajax()) {
        return response()->json($products);
    }
}
    public function index()
    {
        
        $maxPrice = Product::max('price');
        return view('booklist', [
            'products' => $this->products,
            'categories' => $this->categories,
            'maxPrice' => $maxPrice,
        ]);
    }
}
