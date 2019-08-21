<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Patinthistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_patienthistory', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('patient_issue_id')->nullable();
		    $table->string('patienthistory_assin', 45)->nullable();
		
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
        Schema::drop('patient_patienthistory');
    }
}
