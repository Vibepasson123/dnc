<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class patienthistory extends Model
{
     protected $table = 'patienthistory';
      protected $fillable = ['assin' ,'department','mrd','band_id','patient_issue_id','status'];
      public $primaryKey='assin';


 public function patient()
   {
   	return $this->belongsToMany(patienthistory::class)->withTimestamps();
   }
}
