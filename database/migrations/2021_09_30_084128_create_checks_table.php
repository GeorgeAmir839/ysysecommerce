<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email');
            $table->string('number1');
            $table->string('number2');
            $table->string('address1');
            $table->string('address2');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('post');
            $table->string('cart_name');
            $table->integer('qnt');
            $table->string('cart_price');
            $table->string('cart_subtotal');
            $table->string('comment');
            $table->bigInteger('total');
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
        Schema::dropIfExists('checks');
    }
}
