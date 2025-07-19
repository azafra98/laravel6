<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idCliente');
            $table->unsignedBigInteger('idCorte');
            $table->unsignedBigInteger('idHorario');
            $table->foreign('idCliente')
                ->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('idCorte')
                ->references('id')->on('cortes')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('idHorario')
                ->references('id')->on('horarios')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->date('dia');
            $table->unique(["idHorario", "dia"], 'cita');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');

    }
}
