<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spr_project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_state');
            $table->string('name');
            $table->text('description');
            $table->integer('id_responsible');
            $table->smallInteger('amount_participants');
            $table->smallInteger('max_amount_participants');
            $table->decimal('investment',11,2);
            $table->decimal('progress',3,2);
            $table->dateTime('start_date');
            $table->dateTime('final_date');
            $table->timestamps();

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
        Schema::dropIfExists('spr_project');
    }
}
