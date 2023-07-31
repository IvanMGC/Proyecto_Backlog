<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssistantUserProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spr_user_project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_project');
            $table->unsignedBigInteger('id_user');
            $table->dateTime('date_admission');
            $table->dateTime('retirement_date');
            $table->timestamps();

            $table->foreign('id_project')->references('id')->on('spr_project');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spr_user_project');
    }
}
