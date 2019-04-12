<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if( !Schema::hasTable('cities') ){
            Schema::create('cities', function(Blueprint $table) {
                $table->integer('matp')->primary();
                $table->string('name',100);
                $table->string('type',30);
                $table->string('slug',100);

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
