<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_people', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('booking_id')->unsigned();
            $table->string('sure_name');
            $table->string('given_name');
            $table->string('gender');
            $table->dateTime('dob');
            $table->integer('government_id');
            $table->string('passport_number');


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
        Schema::dropIfExists('booking_people');
    }
}
