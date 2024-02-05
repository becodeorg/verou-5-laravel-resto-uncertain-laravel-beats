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
        Schema::create('table_products', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('name');
            $table->float('price');
            $table->boolean('has_alcohol');
            $table->string('allergies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_products');
    }
};