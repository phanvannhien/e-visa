<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('products'))
            Schema::create('products', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title',254);
                $table->string('slug',254)->index();
                $table->string('thumbnail',254)->nullable();

                $table->string('url')->nullable();
                $table->boolean('status')->defaultsTo(1);

                $table->enum('product_type', ['simple','configurable'] )->defaultsTo('simple');
                $table->integer('attribute_group_id' )->unsigned();

                // description
                $table->text('sort_description')->nullable();
                $table->text('description')->nullable();

                //general
                $table->boolean('is_new')->defaultsTo(0);
                $table->boolean('is_featured')->defaultsTo(0);


                // shipping
                $table->string('width',254)->nullable();
                $table->string('height',254)->nullable();
                $table->string('depth',254)->nullable();
                $table->string('weight',254)->nullable();


                // SEO
                $table->string('meta_title',254)->nullable();
                $table->string('meta_keyword',254)->nullable();
                $table->string('meta_description',254)->nullable();


                //
                $table->integer('viewed')->unsigned()->defaultsTo(1);
                $table->integer('brand_id')->unsigned()->nullable();

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
        Schema::dropIfExists('products');
    }
}
