<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_message extends Model
{
      protected $table = 'patientmessage';

      protected $fillable = ['id','message','patient_issue_id','department_department_id' ];
      public $primaryKey='id';
}
