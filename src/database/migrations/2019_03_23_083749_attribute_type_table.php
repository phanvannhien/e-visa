<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AttributeTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('attribute_type')){
            Schema::create('attribute_type', function (Blueprint $table) {

                $table->increments('id');

                $table->integer('type_id')->unsigned();
                $table->integer('attribute_id')->unsigned();

                //$table->primary(['category_id','product_id']);

                $table->foreign('type_id')
                    ->references('id')
                    ->on('types')
                    ->onDelete('cascade');

                $table->foreign('attribute_id')
                    ->references('id')
                    ->on('attributes')
                    ->onDelete('cascade');


            });
        }

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
