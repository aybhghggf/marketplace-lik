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
         Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produit_id');
            $table->string('image_url');
            $table->timestamps();

            $table->foreign('produit_id')->references('product_id')->on('produits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
