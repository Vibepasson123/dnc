<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BloodPresure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_pressure', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id')->nullable();
		    $table->string('systolic', 45)->nullable();
		    $table->string('diastolic', 45)->nullable();
		    $table->string('patient_issue_id', 45)->nullable();
		    $table->string('patienthistory_assin', 45)->nullable();
		    $table->time('try')->nullable();
		
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
        Schema::drop('blood_pressure');

    }
}
