<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Districts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if( !Schema::hasTable('districts') ){
            Schema::create('districts', function(Blueprint $table) {
                $table->integer('maqh')->primary();
                $table->string('name',100);
                $table->string('type',30);
                $table->string('lat',100);
                $table->string('lng',100);
                $table->string('slug',150);

                $table->integer('matp')->unsigned();

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
