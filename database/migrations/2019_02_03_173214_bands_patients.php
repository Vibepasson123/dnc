<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BandsPatients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('band_patient', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('patient_issue_id');
		    $table->string('band_band_id', 45)->nullable();
		    
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
        Schema::drop('band_patient');
    }
}
