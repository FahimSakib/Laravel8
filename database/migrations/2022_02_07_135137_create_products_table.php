<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('product_name')->unique();
            $table->string('product_code')->unique();
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->float('price');
            $table->integer('qty');
            $table->integer('min_qty');
            $table->integer('max_qty');
            $table->string('image')->nullable();
            $table->enum('status',['0','1'])->default('1')->comment="1=Active,0=Inactive";
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
