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
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('id_proyecto');
            $table->timestamps();

            $table->foreign('id_persona')->references('id')->on('spr_persona');
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
        Schema::dropIfExists('spr_persona_proyecto');
    }
}
