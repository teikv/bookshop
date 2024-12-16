<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('book_category', function (Blueprint $table) {
            $table->unsignedBigInteger('BookID');
            $table->unsignedBigInteger('CategoryID');
            $table->timestamps();

            // Unique Constraint to avoid duplicate entries
            $table->unique(['BookID', 'CategoryID']);

            // Foreign Keys
            $table->foreign('BookID')->references('BookID')->on('books')->onDelete('cascade');
            $table->foreign('CategoryID')->references('CategoryID')->on('categories')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('book_category');
    }
};
