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
        Schema::create('received_orders', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to the users table
    $table->foreignId('order_id')->constrained()->onDelete('cascade'); // Foreign key to the users table
    $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Foreign key to the products table
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('received_orders');
    }
};
