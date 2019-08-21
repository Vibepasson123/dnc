<?php

namespace App; 

use Illuminate\Database\Eloquent\Model; 

class o2 extends Model {
protected $table = 'o2'; 

protected $fillable = ['spo_2', 'BPM', 'patient_issue_id', 
'patienthistory_assin']; 


public $primaryKey = 'id'; 
}
