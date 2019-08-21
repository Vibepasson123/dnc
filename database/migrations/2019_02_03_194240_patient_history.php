<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patienthistory', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->string('assin', 45)->nullable();
		    $table->string('patient_issue_id', 45)->nullable();
		    $table->string('band_id', 45)->nullable();
		    $table->integer('department')->nullable();
		    $table->string('mrd', 45)->nullable();
		    $table->time('discharge')->nullable();
		    $table->string('status', 45)->nullable();
		    $table->text('bandproblem')->nullable();
		    $table->string('discharge_by', 145)->nullable();
		    
		    $table->primary('assin');
		
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
        Schema::drop('patienthistory');
    }
}
