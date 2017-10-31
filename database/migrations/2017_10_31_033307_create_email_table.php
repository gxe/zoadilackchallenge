<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('db1')->create('emails', function(Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->timestamps();
        });

        Schema::connection('db2')->create('emails', function(Blueprint $table) {
            $table->increments('id');
            $table->string('address');
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
        Schema::connection('db1')->drop('emails');
        Schema::connection('db2')->drop('emails');
    }
}
