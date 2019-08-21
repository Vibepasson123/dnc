<?php

namespace App; 

use Illuminate\Database\Eloquent\Model; 

class temp extends Model {
protected $table = 'temp'; 

protected $fillable = ['body_temp', 'patient_issue_id', 
'patienthistory_assin', 'created_at']; 


public $primaryKey = 'id'; 
protected $created_at = ['suv']; 

public function cap() {
return  $this -> belongsToMany('Patients') -> withPivot('patienthistory_assin'); 
}

}
