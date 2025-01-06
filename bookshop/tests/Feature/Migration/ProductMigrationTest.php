<?php

namespace Tests\Feature\Migration;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductMigrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test: Kiểm tra bảng `products` được tạo đúng cách.
     */
    public function test_products_table_is_created()
    {
        // Kiểm tra bảng tồn tại
        $this->assertTrue(Schema::hasTable('products'));

        // Kiểm tra các cột trong bảng
        $columns = [
            'id',
            'name',
            'price',
            'description',
            'display_image_url',
            'category_id',
            'created_at',
            'updated_at'
        ];

        foreach ($columns as $column) {
            $this->assertTrue(Schema::hasColumn('products', $column), "Column {$column} is missing");
        }
    }

    /**
     * Test: Kiểm tra thêm một sản phẩm vào cơ sở dữ liệu.
     */
    public function test_can_insert_product_into_database()
{
    $product = Product::create([
        'name' => 'Sample Product',
        'price' => 500.50,
        'description' => 'This is a sample product description.',
        'display_image_url' => 'https://example.com/image.jpg',
        'category_id' => null,
        'currency' => Product::DEFAULT_CURRENCY,
        'stock' => 10, // Thêm giá trị stock
    ]);

    $this->assertDatabaseHas('products', [
        'name' => 'Sample Product',
        'price' => 500.50,
        'description' => 'This is a sample product description.',
    ]);
}
    /**
     * Test: Kiểm tra việc tạo sản phẩm bằng factory.
     */
    public function test_can_create_products_using_factory()
    {
        // Tạo 5 sản phẩm bằng factory
        Product::factory()->count(5)->create();

        // Kiểm tra số lượng sản phẩm trong cơ sở dữ liệu
        $this->assertEquals(5, Product::count());
    }

    /**
     * Test: Kiểm tra sản phẩm trả về giá trị mặc định của URL hình ảnh.*/
    public function test_product_returns_default_image_url_if_display_image_url_is_null()
    {
        $product = Product::create([
            'name' => 'No Image Product',
            'price' => 100,
            'description' => 'Description of product without image.',
            'display_image_url' => null,
            'category_id' => null,
            'currency' => Product::DEFAULT_CURRENCY,
            'stock' => 5, // Thêm giá trị stock
        ]);

        $this->assertEquals(Product::DEFAULT_IMAGE, $product->display_image_url);
    }
}