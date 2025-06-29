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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id'); // Primary Key

            // Foreign Keys
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('categorie_id')->constrained('categories')->onDelete('cascade');

            // Product Info
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 10, 2);
            // Product Condition & Status
            $table->enum('status', ['available', 'pending', 'sold', 'deleted'])->default('available');


            // Image principale
            $table->string('main_image')->nullable();

            // City and Stats
            $table->string('city');

            // Timestamps
            $table->timestamps();
        });
    }
};
