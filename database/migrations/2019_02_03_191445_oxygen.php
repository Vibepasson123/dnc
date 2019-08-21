<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Oxygen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o2', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('id')->nullable();
		    $table->string('spo_2', 45)->nullable();
		    $table->integer('bpm')->nullable();
		    $table->integer('patient_issue_id')->nullable();
		    $table->string('patienthistory_assin', 45)->nullable();
		    $table->time('try')->nullable();
		    
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
        Schema::drop('o2');
    }
}
