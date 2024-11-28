<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title'); // Tên sách
        $table->string('image'); // Đường dẫn hình ảnh
        $table->integer('price'); // Giá sách
        $table->string('country'); // Quốc gia
        $table->text('description'); // Mô tả sách
        $table->string('slug')->unique(); // Đường dẫn thân thiện
        $table->timestamps(); // Tạo cột created_at, updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
