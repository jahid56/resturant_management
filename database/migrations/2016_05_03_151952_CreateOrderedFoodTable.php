<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderedFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
         Schema::create('orderedfood', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ref_id');
            $table->text('food_id');
            $table->text('type_id');
            $table->integer('how_many');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orderedfood');
    }
}
