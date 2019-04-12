<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_sku')->nullable();
            $table->string('product_type')->nullable();
            $table->string('product_title')->nullable();
            $table->string('coupon_code')->nullable();

            $table->decimal('weight', 12,4)->default(0)->nullable();
            $table->decimal('total_weight', 12,4)->default(0)->nullable();

            $table->integer('qty_ordered')->default(0)->nullable();
            $table->integer('qty_shipped')->default(0)->nullable();
            $table->integer('qty_canceled')->default(0)->nullable();
            $table->integer('qty_refunded')->default(0)->nullable();

            $table->decimal('price', 12,4)->default(0);
            $table->decimal('base_price', 12,4)->default(0);

            $table->decimal('total', 12,4)->default(0);
            $table->decimal('base_total', 12,4)->default(0);

            $table->decimal('amount_refunded', 12,4)->default(0);
            $table->decimal('base_amount_refunded', 12,4)->default(0);

            $table->decimal('discount_percent', 12, 4)->default(0)->nullable();
            $table->decimal('discount_amount', 12, 4)->default(0)->nullable();
            $table->decimal('base_discount_amount', 12, 4)->default(0)->nullable();

            $table->decimal('tax_percent', 12, 4)->default(0)->nullable();
            $table->decimal('tax_amount', 12, 4)->default(0)->nullable();
            $table->decimal('base_tax_amount', 12, 4)->default(0)->nullable();


            $table->integer('product_id')->unsigned()->nullable();
            $table->integer('order_id')->unsigned()->nullable();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');

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
        Schema::dropIfExists('order_items');
    }
}
