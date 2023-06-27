<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetivoTable extends Migration
{
    /**
     * Run the migrations.s
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spr_objetivo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('cantidad_tareas');
            $table->float('porcentaje_progreso',2,2);
            $table->unsignedBigInteger('id_proyecto');
            $table->timestamps();

            $table->foreign('id_proyecto')->references('id')->on('spr_proyecto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spr_objetivo');
    }
}
