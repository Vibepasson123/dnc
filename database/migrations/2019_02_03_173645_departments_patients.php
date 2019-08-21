<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DepartmentsPatients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_patient', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('patient_issue_id')->nullable();
		    $table->string('department_department_id', 45)->nullable();
		    $table->time('try')->nullable();
		    
		    $table->primary('patient_issue_id');
		
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
        Schema::drop('department_patient');
    }
}
