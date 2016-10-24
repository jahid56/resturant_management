<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
      Schema::create('reserve', function (Blueprint $table) {

        $table->increments('id');
         $table->text('name');
         $table->text('email');
         $table->text('mobile');
         $table->text('size');
         $table->integer('ref')->unique();
         $table->integer('paid');
         $table->timestamp('when');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
   public function down()
    {
        Schema::drop('reserve');
    }
}
