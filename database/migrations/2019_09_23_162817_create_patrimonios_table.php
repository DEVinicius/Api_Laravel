<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrimonios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_patrimonio');
            $table->string('descricao');
            $table->bigInteger('id_ambiente')->unsigned();
            $table->string('codigo_patrimonio')->unique();
            $table->timestamps();

            $table->foreign('id_ambiente')->references('id')->on('ambientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patrimonios');
    }
}
