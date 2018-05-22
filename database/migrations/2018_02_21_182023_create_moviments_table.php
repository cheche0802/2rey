<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moviments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('code');
            $table->enum('status',['Entrada', 'Salida']);
            $table->date('date');
            $table->text('description');
            $table->integer('amount');
            $table->integer('cost');
            $table->integer('sell');
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->unsigned()->nullable();;
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');

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
        Schema::dropIfExists('moviments');
    }
}
