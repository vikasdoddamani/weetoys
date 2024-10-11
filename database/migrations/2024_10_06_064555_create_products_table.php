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
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('sku')->nullable();
            $table->longText('SKU_Tab')->nullable();
            $table->longText('SKU_Product_ID')->nullable();
            $table->longText('Product_ID')->nullable();
            $table->string('color')->nullable();
            $table->string('images')->nullable();
            $table->string('images1')->nullable();
            $table->string('images2')->nullable();
            $table->string('images3')->nullable();
            $table->string('images4')->nullable();
            $table->string('mrp')->nullable();
            $table->string('Disc')->nullable();
            $table->string('Bundle')->nullable();
            $table->string('price')->nullable();
            $table->string('category')->nullable();
            $table->string('quantity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
