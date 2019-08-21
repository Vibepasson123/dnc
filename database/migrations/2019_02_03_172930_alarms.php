<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alarms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alarm', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id')->nullable();
		    $table->string('alarm_type', 45)->nullable();
		    $table->string('clinical_id', 45)->nullable();
		
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
        Schema::drop('alarm');

    }
}
