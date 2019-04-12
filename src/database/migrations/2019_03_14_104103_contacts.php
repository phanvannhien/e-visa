<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if( !Schema::hasTable('contacts') ){
            Schema::create('contacts', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 200);
                $table->string('email', 150);
                $table->string('subject', 200);
                $table->string('message', 200);
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
        //
    }
}
