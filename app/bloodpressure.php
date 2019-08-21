<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bloodpressure extends Model
{
    protected $table= 'blood_pressure';

    protected $fillable = ['systolic','diastolic','patient_issue_id','	patienthistory_assin' ];
      
}
