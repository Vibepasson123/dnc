<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ecg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecg', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id')->nullable();
		    $table->integer('rr_interval')->nullable();
		    $table->integer('pr_interval')->nullable();
		    $table->integer('qrs_inerval')->nullable();
		    $table->integer('qtc_interval')->nullable();
		    $table->integer('pwave_axsis')->nullable();
		    $table->integer('qrs_axsis')->nullable();
		    $table->integer('twave_axsis')->nullable();
		    $table->integer('patient_issue_id')->nullable();
		    $table->integer('patienthistory_assin')->nullable();
		
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
        Schema::drop('ecg');
    }
}
