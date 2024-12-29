<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::all();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $this->getValidatedProductSubmitData($request);
        $product = new Product();
        $this->fillProductData($validated, $product);
        $product->save();
        return $product;
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Product::findOrFail($id);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $this->getValidatedProductSubmitData($request);
        $product = Product::findOrFail($id);
        $this->fillProductData($validated, $product);
        $product->save();
        return $product;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Product::destroy($id);
    }
    /**
     * @param array $validated
     * @param Product $product
     * @return void
     */
    private function fillProductData(array $validated, Product $product): void
    {
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->description = $validated['description'];
        $product->display_image_url = $validated['display_image_url'];
        $product->category_id = $validated['category_id'];
    }
    /**
     * @param Request $request
     * @return array
     */
    private function getValidatedProductSubmitData(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:100', 'min:3', 'unique:products'],
            'price' => ['required', 'numeric'],
            'description' => ['required', 'string', 'max:1000', 'min:10'],   
            'display_image_url' => ['string', 'max:255'], 
            'category_id' => ['numeric'],

        ]);
    }
}