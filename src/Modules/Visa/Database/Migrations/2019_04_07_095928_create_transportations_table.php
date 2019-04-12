<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportations', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('transport_type',[ 'airport','seaport' ])->default('airport');

            $table->string('transport_name', 200);
            $table->integer('transport_fee')->unsigned()->default(0);
            $table->timestamps();

            $table->string('country_code',5)->default('IN');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transportations');
    }
}
