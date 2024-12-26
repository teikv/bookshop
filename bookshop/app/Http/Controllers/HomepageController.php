<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public $products;

    public function __construct()
    {
        $this->products = Product::all();
    }

    public function index()
    {
        return view('homepage', ['products' => $this->products]);
    }
}
