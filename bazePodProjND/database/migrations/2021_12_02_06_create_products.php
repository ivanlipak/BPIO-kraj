<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('prod_name', 50);
            $table->foreignId('inventory_id') 
                -> constrained('inventory')
                -> nullable()
                -> onDelete('cascade');
            $table->foreignId('product_cat_id') 
                -> constrained('product_categories')
                -> nullable()
                -> onDelete('cascade');
            $table->string('opis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
