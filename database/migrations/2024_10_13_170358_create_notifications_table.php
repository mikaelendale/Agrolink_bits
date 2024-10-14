<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // The user receiving the notification
            $table->foreignId('order_id')->constrained()->onDelete('cascade'); // The related order
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // The product related to the order
            $table->string('message'); // Notification message
            $table->boolean('read')->default(false); // Read status
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
