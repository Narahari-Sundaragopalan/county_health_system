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
            $table->string('patient_condition')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('department');
            $table->string('next_of_kin')->nullable();
            $table->string('next_of_kin_contact');
            $table->string('next_of_kin_relation')->nullable();
            $table->string('patient_deposition_condition')->nullable();
            $table->mediumInteger('room_no');
            $table->string('patient_injury')->nullable();
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
