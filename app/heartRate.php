<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class heartRate extends Model
{
    protected $table= 'heart_rate';

    protected $fillable = ['BPM' ,'patient_issue_id',
    'patienthistory_assin'];


      public $primaryKey='id';
}

