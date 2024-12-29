<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $relatedProducts = Product::where('category_id', $product->category_id)
                                  ->where('id', '!=', $product->id)  // Exclude the current product
                                  ->take(5)
                                  ->get();

        return view('detail', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            // 'product_images' => $product_images,
        ]);
    }
}
