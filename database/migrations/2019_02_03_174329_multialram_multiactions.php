<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MultialramMultiactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multialrm_multiaction', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('alarm_id');
		    $table->integer('actions_id')->nullable();
		
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
        Schema::drop('multialrm_multiaction');

    }
}
