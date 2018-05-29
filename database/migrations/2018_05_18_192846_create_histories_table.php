<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
          $table->increments('id');
<<<<<<< HEAD
          $table->string('type');
          $table->double('price');
          $table->integer('product_id')->unsigned();
          $table->foreign('product_id')->references('id')->on('products');
=======
          $table->decimal('cost');
          $table->decimal('sell');
          $table->datetime('date');
          $table->integer('product_id')->unsigned();
          $table->integer('moviment_id')->unsigned();
          $table->foreign('product_id')->references('id')->on('products');
          $table->foreign('moviment_id')->references('id')->on('moviments');
>>>>>>> 8a81a8df7e9d2f01845f27b5e461d6982917b123
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
        Schema::dropIfExists('histories');
    }
}
