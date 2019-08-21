<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ecg extends Model
{
    protected $table= 'ecg';

    protected $fillable = [
    'rr_interval',
    'pr_interval',
    'qrs_inerval',
    'qt_interval',
    'qtc_interval',
    'pwave_axsis',
    'qrs_axsis',
    'twave_axsis',
    'patient_issue_id',
    'patienthistory_assin'
 ];

 
      public $primaryKey='id';
}
