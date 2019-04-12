<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisaServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_name',200);
            $table->string('service_type',200);
            $table->integer('service_price')->unsigned()->default(0);
            $table->text('service_description')->nullable();
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
        Schema::dropIfExists('visa_services');
    }
}
