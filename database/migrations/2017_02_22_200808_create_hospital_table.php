<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hospital_name');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('contact');
            $table->string('zipcode');
            $table->unsignedBigInteger('critical_care_beds');
            $table->unsignedBigInteger('critical_care_beds_occupied');
            $table->unsignedBigInteger('burn_ward_beds');
            $table->unsignedBigInteger('burn_ward_beds_occupied');
            $table->unsignedBigInteger('pediatric_unit_beds');
            $table->unsignedBigInteger('pediatric_unit_beds_occupied');
            $table->unsignedBigInteger('general_care_beds');
            $table->unsignedBigInteger('general_care_beds_occupied');
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
        Schema::drop('hospitals');
    }
}
