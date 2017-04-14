<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('purchase', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->integer('offering_id')->unsigned();
            $table->foreign('offering_id')->references('id')->on('offering')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity')->unsigned();
            //$table->bigIncrements('quantity')->unsigned();
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
        //
    }
}
