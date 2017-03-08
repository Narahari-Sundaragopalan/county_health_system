<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalEmergencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_emergency', function (Blueprint $table) {
            $table->unsignedInteger('hospital_id');
            $table->string('emergency_name');
            $table->timestamps();
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('emergency_name')->references('emergency_name')->on('emergency')->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['hospital_id'], ['emergency_name']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hospital_emergency');
    }
}
