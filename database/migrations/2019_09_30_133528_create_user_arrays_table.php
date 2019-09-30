<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserArraysTable extends Migration
{
    public function up()
    {
        Schema::create('user_arrays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_ambiente')->unsigned();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_ambiente')->references('id')->on('ambientes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_arrays');
    }
}
