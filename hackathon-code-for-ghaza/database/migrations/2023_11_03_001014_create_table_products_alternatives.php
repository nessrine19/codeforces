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
        Schema::create('products_alternative', function (Blueprint $table) {
            $table->id();
            $table->string('product_alt_name'); 
            $table->string('desc');
            $table->decimal('price');
            $table->string('image');
            $table->unsignedBigInteger('id_country');
            $table->unsignedBigInteger('id_category');
            $table->unsignedBigInteger('id_Product');
            $table->foreign('id_Product')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('id_country')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('id_category')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_alternative');
    }
};
