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
            Schema::create('sales_details', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('sale_id');
                $table->unsignedBigInteger('article_id');
                $table->integer('quantity');
                $table->decimal('price',11, 2);
                $table->decimal('discount',11 ,2);
                $table->timestamps();

                $table->foreign('sale_id')->references('id')->on('sales')->onDelete('cascade');
                $table->foreign('article_id')->references('id')->on('articles');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income_sales_details');
    }
};
