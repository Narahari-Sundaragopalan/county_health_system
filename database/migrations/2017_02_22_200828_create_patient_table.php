<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_first_name');
            $table->string('patient_last_name');
            $table->date('admit_date');
            $table->string('admit_time');
            $table->string('patient_condition');
            $table->unsignedInteger('age');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('department');
            $table->string('next_of_kin');
            $table->string('next_of_kin_contact');
            $table->string('next_of_kin_relation');
            $table->string('patient_deposition_condition');
            $table->mediumInteger('room_no');
            $table->string('patient_injury');
            $table->unsignedInteger('hospital_id');
            $table->timestamps();

            $table->foreign('hospital_id')->references('id')->on('hospitals')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patients');
    }
}
