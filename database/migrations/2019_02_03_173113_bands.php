<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('band', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->string('band_id', 45)->nullable();
		    $table->string('mac_id', 45)->nullable();
		    $table->string('ipaddress', 45)->nullable();
		    $table->integer('status')->nullable();
		    $table->string('problem', 300)->nullable();
		    
		    $table->primary('band_id');
		
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
        Schema::drop('band');

    }
}
