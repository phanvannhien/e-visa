<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('amount');
            $table->string('payment_method');
            $table->string('payment_for');
            $table->string('note');
            $table->text('user_agent');
            $table->string('ip',50);
            $table->integer('user_id')->unsigned();
            $table->string('payment_id',100);
            $table->string('token',100);
            $table->string('PayerID',100);
            $table->string('status',50);

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
        Schema::dropIfExists('payments');
    }
}
