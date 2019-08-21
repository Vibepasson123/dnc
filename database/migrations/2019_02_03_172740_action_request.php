<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActionRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions_has_requests', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('actions_id')->nullable();
		    $table->string('request_id', 45)->nullable();
		    
		    $table->primary('actions_id');
		
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
        Schema::drop('actions_has_requests');

    }
}
