<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispositivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivos', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre', 200);
            $table->string('fecha_inicio', 200);
            $table->string('fecha_entrega', 200);
            $table->decimal('anticipo', 10, 2);
            $table->string('estado', 30);
            $table->string('soluciones', 200);
            $table->string('reparaciones', 200);
            $table->decimal('total', 10, 2);
            $table->string('marca', 20);
            $table->string('color', 20);
            $table->string('no_serie', 50);
            $table->string('observaciones', 200);
            $table->integer('cliente_id')->unsigned();
            $table->integer('tipo_id')->unsigned();
            $table->integer('empleado_id')->unsigned();
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->foreign('empleado_id')->references('id')->on('empleados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
