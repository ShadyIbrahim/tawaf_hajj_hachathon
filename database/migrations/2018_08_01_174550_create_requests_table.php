<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('start_location', 255);
            $table->string('destination', 255);
            $table->date('plannedStartDate');
            $table->time('plannedStartTime');
            $table->dateTime('expectedEndDate')->nullable();
            $table->integer('expectedNumber');
            $table->integer('actualNumber')->nullable();
            $table->dateTime('actualStartDateTime')->nullable();
            $table->dateTime('actualEndDateTime')->nullable();
            $table->integer('batch_id')->unsigned()->nullable();
            $table->foreign('batch_id')->references('id')->on('batchies')->onDelete('set null');
            $table->integer('coordinator_id')->unsigned()->nullable();
            $table->foreign('coordinator_id')->references('id')->on('coordinators')->onDelete('set null');
            $table->tinyInteger('coordinator_rate')->nullable();
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
        Schema::dropIfExists('requests');
    }
}
