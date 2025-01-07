<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\BatchingService;
use Illuminate\Support\Facades\Cache;

class HomepageController extends Controller
{
    protected $batchingService;

    public function __construct(BatchingService $batchingService)
    {
        $this->batchingService = $batchingService;

        $this->middleware('rate.limit');
    }

    public function index()
{
 
    $products = Cache::remember('homepage_data', 600, function () {
        $products = Product::select('id', 'name', 'price', 'display_image_url')
            ->latest() 
            ->get();

        return $this->batchingService->batchProducts($products, 2); 
    });

    $perPage = 10; 
    $currentPage = request('page', 1); 
    $pagedProducts = new \Illuminate\Pagination\LengthAwarePaginator(
        $products->flatten()->forPage($currentPage, $perPage), 
        $products->flatten()->count(), 
        $perPage, 
        $currentPage, 
        ['path' => request()->url(), 'query' => request()->query()] 
    );

    return view('homepage', ['products' => $pagedProducts]);
}
}

