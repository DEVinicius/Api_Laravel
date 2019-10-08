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
            $table->string('name','100');
            $table->string('email','60')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('password');
            $table->string('cpf','20');
            $table->bigInteger('id_empresa')->unsigned()->nullable();
            $table->bigInteger('id_nivel_usuario')->nullable();
            //$table->bigInteger('id_ambiente')->unsigned()->nullable();
            $table->string('telefone','30');
            $table->string('imagem','100')->nullable();
            $table->rememberToken();

            $table->foreign('id_empresa')->references('id')->on('empresas');
            //$table->foreign('id_nivel_usuario')->references('id')->on('nivel_users');
           // $table->foreign('id_ambiente')->references('id')->on('ambientes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
