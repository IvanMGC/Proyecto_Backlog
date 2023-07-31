<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSprintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spr_sprint', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_project');
            $table->unsignedBigInteger('id_state');
            $table->string('name');
            $table->text('description');
            $table->smallInteger('number_tasks');
            $table->smallInteger('max_number_tasks');
            $table->smallInteger('amount_participants');
            $table->decimal('progress',3,2);
            $table->dateTime('start_date');
            $table->dateTime('final_date');
            $table->timestamps();

            $table->foreign('id_project')->references('id')->on('spr_project');
            $table->foreign('id_state')->references('id')->on('spr_state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spr_sprint');
    }
}
