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
            $table->id()->nullable();
            $table->string('name'); 
            $table->foreignId('user_id')->constrained();
            //foeinkey for relation one to many
            $table->unsignedBigInteger('cart_id')->default(1);
            // $table->foreignId('cart_id')->references('id')->on('cart');
            //foeinkey for relation one to many
            //status qnt prand
            $table->string('category');
            $table->string('productdesc')->default('');
            $table->bigInteger('price');
            $table->string('slug')->default('');
            $table->string('image')->default('');
            $table->string('brand')->default('');
            $table->integer('brand_id')->default(1);
            $table->integer('qnt')->default(1);
            $table->string('model')->default('');
            $table->longtext('keywords')->default('');
            $table->integer('price_discount')->default(1);
            $table->string('status')->default('available');
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
