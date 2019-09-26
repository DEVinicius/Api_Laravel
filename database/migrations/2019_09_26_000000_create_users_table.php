<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cpf');
            $table->bigInteger('id_empresa')->unsigned();
            $table->bigInteger('id_nivel_usuario')->unsigned()->nullable();
            $table->string('telefone');
            $table->string('imagem');
            $table->rememberToken();

            $table->foreign('id_empresa')->references('id')->on('empresas');
            $table->foreign('id_nivel_usuario')->references('id')->on('nivel_users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
