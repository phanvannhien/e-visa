<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_items', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('booking_id');
            $table->integer('service_id');
            $table->string('service_name');
            $table->decimal('quantity');
            $table->decimal('price');
            $table->decimal('total');

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
        Schema::dropIfExists('booking_items');
    }
}
