<?php

namespace App;
use App\department;
use App\band;
use App\patienthistory;
use App\o2;
use App\heartRate;
use App\temp;
use App\bloodpressure;
use Carbon;



use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
      protected $table = 'patients';

      protected $fillable = ['mrd','name','issue_id','sex','age','status' ];
      public $primaryKey='issue_id';

      public function department()
      {
      	return $this->belongsToMany('App\department','department_patient','department_department_id','patient_issue_id')->withTimestamps();
      }

      public function band()
      {
      	return $this->belongsToMany('App\band','band_patient','patient_issue_id','band_band_id')->withTimestamps();
      }

        public function departmetrel()//relationship with departmet to get the data**\\
   {
      return $this->belongsToMany(department::class);
   }

   public function bandrel()
   {
      return $this->belongsToMany(band::class);
   }


   
   public function patientHistory()
   {
      return $this->belongsToMany(patienthistory::class)->withTimestamps();
   }
   public function patienthealth()
     {
       return $this->hasMany(temp::class);
       
     }
     public function patienthealthtoday(){
       return $this->patienthealth()->where('try','>=' ,Carbon\Carbon::today() );
     }
     public function pto2()

     {
      
       return $this->hasMany(o2::class);
       
     }
    public function bptoday()
    {
       return $this->pblood()->where('try','>=' ,Carbon\Carbon::today() );
    }
   
     public function pheart()
     {
       return $this->hasMany(heartRate::class);
       
     }
     public function pblood()
     {
       return $this->hasMany(bloodpressure::class);
       
     }
     public function highest()
{
       return $this->hasOne(o2::class)
       ->selectRaw('patient_issue_id, max(try) as aggregate')
      ->groupBy('patient_issue_id');
     
}
public function getAge(){
  $this->age->diff(Carbon::now())
       ->format('%y years, %m months and %d days');
}
   
}
 