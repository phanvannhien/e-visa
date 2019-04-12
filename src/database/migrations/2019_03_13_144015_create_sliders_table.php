<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if( !Schema::hasTable('sliders') ) {
            Schema::create('sliders', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title', 254);
                $table->string('image', 254);
                $table->string('url', 254)->nullable();
                $table->boolean('status')->defaultsTo(1);
                $table->timestamps();
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
        Schema::dropIfExists('sliders');
    }
}
