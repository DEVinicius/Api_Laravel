<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbientesTable extends Migration
{
    public function up()
    {
        Schema::create('ambientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_ambiente','100');
            $table->bigInteger('id_empresa')->unsigned();
            $table->bigInteger('id_usuario')->unsigned();


            $table->foreign('id_empresa')->references('id')->on('empresas') -> onUpdate('cascade') -> onDelete('cascade');
            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ambientes');
    }
}
