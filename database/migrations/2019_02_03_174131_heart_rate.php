<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HeartRate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heart_rate', function(Blueprint $table) {
        $table->engine = 'InnoDB';
    
        $table->integer('id');
        $table->integer('BPM')->nullable();
        $table->string('patient_issue_id', 45)->nullable();
        $table->string('patienthistory_assin', 45)->nullable();
        
        $table->primary('id');
    
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
      
		Schema::drop('heart_rate');
    }
}
