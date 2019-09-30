<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_empresa','60')->unique();
            $table->string('cnpj','20')->unique();
            $table->string('cep','20');
            $table->string('endereco','60');
            $table->string('bairro','60');
            $table->string('cidade','60');
            $table->string('estado','2');
            $table->string('telefone','20')->unique();
            $table->string('email','60')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
