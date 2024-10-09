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
            $table->string('images1');
            $table->string('images2');
            $table->string('images3');
            $table->string('images4');
            $table->string('mrp')->nullable();
            $table->string('Disc');
            $table->string('Bundle');
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
