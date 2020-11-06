<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dispositivo_id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->integer('pieza_id')->unsigned()->nullable();
            $table->integer('cantidad')->nullable();
            $table->decimal('precio', 10, 2)->unsigned();
            $table->timestamps();

            $table->foreign('dispositivo_id')->references('id')->on('dispositivos');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('pieza_id')->references('id')->on('tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
