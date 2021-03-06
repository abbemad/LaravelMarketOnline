<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
           
            $table->integer('product_id')->unsigned();

            
            $table->foreign('product_id')->references('id')->on('product');

            $table->integer('days')->unsigned();
            
            
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
        Schema::dropIfExists('order');
    }
}
