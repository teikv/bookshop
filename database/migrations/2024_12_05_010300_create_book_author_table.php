<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('book_author', function (Blueprint $table) {
            $table->unsignedBigInteger('BookID');
            $table->unsignedBigInteger('AuthorID');
            $table->timestamps();

            // Unique Constraint to avoid duplicate entries
            $table->unique(['BookID', 'AuthorID']);

            // Foreign Keys
            $table->foreign('BookID')->references('BookID')->on('books')->onDelete('cascade');
            $table->foreign('AuthorID')->references('AuthorID')->on('authors')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('book_author');
    }
};
