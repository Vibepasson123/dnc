<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id')->nullable();
		    $table->string('profile_id', 45)->nullable();
		    $table->string('name', 45)->nullable();
		    $table->string('profiletype', 45)->nullable();
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
        Schema::drop('profile');
    }
}
