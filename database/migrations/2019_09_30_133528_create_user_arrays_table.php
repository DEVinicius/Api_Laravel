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

            //criar uma chave primária que fará com que um usuario se conecte apenas uma vez ao ambiente respectivo
            $table->primary(['id_user','id_ambiente']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_arrays');
    }
}
