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
            $table->unsignedBigInteger('no_of_beds');
            $table->unsignedBigInteger('beds_occupied');
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
