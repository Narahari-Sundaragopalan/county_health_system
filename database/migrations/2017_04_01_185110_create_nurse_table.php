<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNurseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nurse_first_name');
            $table->string('nurse_last_name');
            $table->unsignedInteger('age');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('department');
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
        Schema::drop('nurses');
    }
}
