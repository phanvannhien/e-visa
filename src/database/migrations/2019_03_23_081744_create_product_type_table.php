<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('types'))
            Schema::create('types', function (Blueprint $table) {
                $table->increments('id');
                $table->string('type_name', 200);
                $table->boolean('status')->defaultsTo(1);
                $table->boolean('is_user_defined')->defaultsTo(1);
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
        Schema::dropIfExists('types');
    }
}
