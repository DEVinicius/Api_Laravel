<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserArraysTable extends Migration
{
    public function up()
    {
        Schema::create('user_arrays', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('ambiente_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('ambiente_id')->references('id')->on('ambientes');

            //criar uma chave primária que fará com que um usuario se conecte apenas uma vez ao ambiente respectivo
            $table->primary(['user_id','ambiente_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_arrays');
    }
}
