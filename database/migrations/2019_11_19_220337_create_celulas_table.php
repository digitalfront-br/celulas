<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCelulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celulas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data');
            $table->time('hora');
            $table->bigInteger('endereco')->unsigned();
            $table->bigInteger('lider')->unsigned();
            $table->bigInteger('membros')->unsigned();
            $table->foreign('endereco')
                ->references('id')
                ->on('enderecos');
            $table->foreign('lider')
                ->references('id')
                ->on('users');
            $table->foreign('membros')
                ->references('id')
                ->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('celulas');
    }
}
