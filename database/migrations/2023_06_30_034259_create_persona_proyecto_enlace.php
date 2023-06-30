<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaProyectoEnlace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spr_persona_proyecto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha_ingreso');
            $table->date('fecha_retiro');
            $table->unsignedBigInteger('id_proyecto');
            $table->unsignedBigInteger('id_sprint');
            $table->unsignedBigInteger('id_tarea');
            $table->unsignedBigInteger('id_persona');
            $table->timestamps();

            $table->foreign('id_proyecto')->references('id')->on('spr_proyecto');
            $table->foreign('id_sprint')->references('id')->on('spr_sprint');
            $table->foreign('id_tarea')->references('id')->on('spr_tarea');
            $table->foreign('id_persona')->references('id')->on('spr_persona');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spr_persona_proyecto');
    }
}
