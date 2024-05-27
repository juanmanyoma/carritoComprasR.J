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
        Schema::create('people', function (Blueprint $table) { // tabla peronas //
            $table->id();
            $table->enum('type', ['Persona Natural', 'Empresa','proveedor'])->nullable();
            $table->string('First_Name', 50)->nullable();
            $table->string('Last_Name', 50)->nullable();
            $table->enum('Document_type', ['CC', 'TI', 'Pasaporte', 'Nit'])->nullable();
            $table->string('Document_Number', 20)->nullable();
            $table->string('Adress', 100)->nullable();
            $table->string('Phone', 20)->nullable();
            $table->string('Email', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
