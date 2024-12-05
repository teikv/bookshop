<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('OrderDetailID');
            $table->unsignedBigInteger('OrderID');
            $table->unsignedBigInteger('BookID');
            $table->integer('Quantity');
            $table->decimal('Price', 10, 2);
            $table->timestamps();

            // Foreign Keys
            $table->foreign('OrderID')->references('OrderID')->on('orders')->onDelete('cascade');
            $table->foreign('BookID')->references('BookID')->on('books')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
