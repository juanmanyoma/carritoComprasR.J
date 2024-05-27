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
        Schema::create('articles', function (Blueprint $table) {  //Tabla de productos//
            $table->id();
            $table->unsignedBigInteger('idCategory'); // Corregido: 'unsignedBigInteger' en lugar de 'unisgnedBigIntegre'
            $table->string('code', 50);
            $table->string('name', 100);
            $table->decimal('sale_price', 11, 2);
            $table->integer('stock'); // Corregido: 'integer' en lugar de 'integre'
            $table->string('description', 256)->nullable();
            $table->boolean('state')->default(1); // Corregido: 'boolean' en lugar de 'bolean'
            $table->timestamps();

            $table->foreign('idCategory')->references('id')->on('categories')->onDelete('cascade'); // Corregido: 'foreign' en lugar de 'forein', 'references' en lugar de 'refrences'

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
