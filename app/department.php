<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\patient;

class department extends Model 
{
     protected $table = 'departments';

     protected $fillable = ['department_id','department_name' ];

     public $primaryKey='department_id';

   public function patient()
   {
   	return $this->belongsToMany('App\patient','department_patient','department_department_id','patient_issue_id')->withTimestamps();
   }
   //**  public function ptr()
   //{
      //	return $this->belongsToMany('App\patient','patient_department','pt_department_id')->withTimestamps();
      	//public $primaryKey='pt_department_id';
   //}
   public function mtr()
   {
     return $this->belongsToMany(patient::class);
   }
}
//foreach($pat->departmetrel as $pt){
      //  echo $pt->updated_at;
      //  echo $pt->department_name;

