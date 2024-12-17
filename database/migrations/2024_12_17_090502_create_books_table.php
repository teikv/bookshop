<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('author_id')->references('author_id')->on('authors')->onDelete('cascade');
            $table->foreignId('category_id')->references('category_id')->on('categories')->onDelete('cascade');
            $table->string('description');
            $table->string('image');
            $table->string('country');
            $table->string('slug');
            $table->integer('price');
            $table->integer('stock_quantity');
            $table->date('publication_date');
            $table->timestamps();
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
