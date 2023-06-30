<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spr_tarea', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->timeTz('duracion_estimado', 0);
            $table->unsignedBigInteger('id_sprint');
            $table->unsignedBigInteger('id_estado');
            $table->timestamps();

            $table->foreign('id_sprint')->references('id')->on('spr_sprint');
            $table->foreign('id_estado')->references('id')->on('spr_estado_tarea');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spr_tarea');
    }
}
