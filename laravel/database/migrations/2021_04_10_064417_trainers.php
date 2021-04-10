<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trainers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('trainers', function (Blueprint $table) {
            $table->increments('trainer_id',true);
            $table->string('trainer_name',55);
            $table->integer('company_id',false,11);
            $table->string('trainer_email',55);
            $table->string('trainer_phone',55);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('trainers');
    }
}
