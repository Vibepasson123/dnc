<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\patient;

class band extends Model
{
     protected $table = 'band';

      protected $fillable = ['band_id','mac_id','ipaddress','status','problem' ];
      public $primaryKey='band_id';


   public function patient()
   {
   	return $this->belongsToMany('App\band','issue_bands','patient_issue_id','band_band_id')->withTimestamps();
   }
   public function ptband()
   {
   	return $this ->belongsToMany('App\patient');
   }
}
