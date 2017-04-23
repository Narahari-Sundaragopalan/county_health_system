<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('month');
            $table->string('emergency_name');
            $table->text('emergency_description');
            $table->date('emergency_start_date');
            $table->date('emergency_end_date');
            $table->string('hospital_name');
            $table->integer('bed_count');
            $table->integer('beds_available');
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
        Schema::drop('reports');
    }
}
