<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientMessage', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id')->nullable();
		    $table->string('patient_issue_id', 45)->nullable();
		    $table->text('message')->nullable();
		    $table->string('department_department_id', 45)->nullable();
            $table->string('read', 10)->nullable();
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
        Schema::drop('patientMessage');
    }
}
