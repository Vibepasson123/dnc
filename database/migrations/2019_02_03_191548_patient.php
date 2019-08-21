<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Patient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->string('mrd', 45)->nullable();
		    $table->string('name', 105)->nullable();
		    $table->integer('issue_id')->nullable();
		    $table->string('sex', 45)->nullable();
		    $table->date('age')->nullable();
		    $table->string('departments_department_id', 45)->nullable();
		    $table->integer('requests_id')->nullable();
		    $table->integer('status')->nullable();
		    
		    $table->primary('issue_id');
		
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
        Schema::drop('patients');
    }
}
