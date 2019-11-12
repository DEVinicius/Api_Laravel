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
            $table->string('nome_patrimonio','60');
            $table->text('descricao');
            $table->boolean('estado_patrimonio')->nullable();
            $table->bigInteger('id_ambiente')->unsigned() -> nullable();
            $table->bigInteger('id_empresa')->unsigned();
            $table->string('codigo_patrimonio','30')->unique();

            $table->foreign('id_empresa')->references('id')->on('empresas') -> onUpdate('cascade') -> onDelete('cascade');
            $table->foreign('id_ambiente')->references('id')->on('ambientes') -> onUpdate('cascade') -> onDelete('set null');
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
