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
        Schema::create('prodducts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->decimal('price',8,2);
            $table->decimal('sale_price',8,2)->nullable();
            $table->integer('quantity');
            $table->string('catogory');
            $table->string('type');
            $table->string('image');
            $table->string('image1')->nullable();
            $table->string('imange2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodducts');
    }
};
