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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('OrderID');
            $table->unsignedBigInteger('AccountID'); // Foreign Key liên kết đến bảng accounts
            $table->date('OrderDate');
            $table->decimal('TotalAmount', 10, 2); // max: 999,999,999.99
            $table->string('Status')->default('pending'); // pending, completed, canceled, etc.
            $table->timestamps();

            // Define foreign key relationship
            $table->foreign('AccountID')
                ->references('AccountID')
                ->on('accounts')
                ->onDelete('cascade'); // Nếu tài khoản bị xóa, đơn hàng cũng bị xóa
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
