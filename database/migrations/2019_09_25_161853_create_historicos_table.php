<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nome_historico');
            $table->bigInteger('id_patrimonio')->unsigned();
            $table->bigInteger('id_empresa')->unsigned();
            $table->bigInteger('id_ambiente')->unsigned();
            $table->string('local_destino','50')->nullable();
            $table->timestamps();

            $table->foreign('id_patrimonio')->references('id')->on('patrimonios') -> onUpdate('cascade') -> onDelete('cascade');
            $table->foreign('id_empresa')->references('id')->on('empresas') -> onUpdate('cascade') -> onDelete('cascade');
            $table->foreign('id_ambiente')->references('id')->on('ambientes') -> onUpdate('cascade') -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historicos');
    }
}
