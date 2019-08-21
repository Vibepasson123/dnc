<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Temprature extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
            $table->float('body_temp');
		    $table->increments('id')->nullable();
		    $table->integer('patient_issue_id')->nullable();
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
        Schema::drop('temp');
    }
}
