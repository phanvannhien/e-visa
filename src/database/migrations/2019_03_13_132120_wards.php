<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if( !Schema::hasTable('wards') ){
            Schema::create('wards', function(Blueprint $table) {
                $table->integer('xaid')->unsigned()->primary();
                $table->string('name',100);
                $table->string('type',30);

                $table->integer('maqh')->unsigned();
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
