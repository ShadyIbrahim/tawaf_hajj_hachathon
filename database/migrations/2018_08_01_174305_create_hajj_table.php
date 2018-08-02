<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHajjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hajj', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('FIRSTNAME', 255);
            $table->string('SEASON', 5);
            $table->integer('AGE');
            $table->integer('ENTRY_DATE');
            $table->string('EXIT_DATE');
            $table->string('ENTRY_TIME');
            $table->string('EXIT_TIME');
            $table->string('GENDER', 2);
            $table->string('PASSPORT_ISSUE_PLA', 8);
            $table->string('LK_VISA_ISSUE_PLAC', 8);
            $table->string('LK_NATIONALITY_DES', 8);
            $table->string('LK_AIRLINE_NAME_LE', 8);
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
        Schema::dropIfExists('hajj');
    }
}
