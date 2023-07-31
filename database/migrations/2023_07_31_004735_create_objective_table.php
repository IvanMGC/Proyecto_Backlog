<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spr_objective', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_project');
            $table->unsignedBigInteger('id_sprint');
            $table->text('description');
            $table->timestamps();

            $table->foreign('id_project')->references('id')->on('spr_project');
            $table->foreign('id_sprint')->references('id')->on('spr_sprint');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spr_objective');
    }
}
