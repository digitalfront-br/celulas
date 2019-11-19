<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelacionamentoPresenca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('presenca', function (Blueprint $table) {
            $table->bigInteger('celula_id')->unsigned();
            $table->foreign('celula_id')->references('id')->on('celulas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('presenca', function (Blueprint $table) {
            //
        });
    }
}
