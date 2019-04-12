<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status', 50);
            $table->boolean('is_guest')->defaultsTo( 0 );

            $table->string('shipping_full_name');
            $table->string('shipping_email',150)->index();
            $table->string('shipping_phone',20)->index();
            $table->string('shipping_address');
            $table->integer('matp')->unsigned();
            $table->integer('maqh')->unsigned();

            $table->string('shipping_method');
            $table->string('shipping_title');
            $table->string('shipping_description')->nullable();
            $table->integer('shipping_amount')->default(0);

            $table->string('payment_method');
            $table->string('payment_title');

            $table->string('coupon_code')->nullable();
            $table->integer('total_item_count')->default(0);
            $table->decimal('sub_total')->default(0);
            $table->decimal('total')->default(0);

            $table->decimal('discount_percent')->default(0);
            $table->decimal('discount_amount')->default(0);

            $table->string('note')->nullable();
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

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
        Schema::dropIfExists('orders');
    }
}
