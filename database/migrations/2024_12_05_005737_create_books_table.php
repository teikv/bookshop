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
            $table->id('BookID');
            $table->string('Title');
            $table->decimal('Price', 8, 2); // max: 999,999.99
            $table->date('PublicationDate')->nullable();
            $table->text('Description')->nullable();
            $table->integer('StockQuantity')->default(0);
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
