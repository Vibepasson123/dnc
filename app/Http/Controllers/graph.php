<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon;
use Sentinel;
use Activation;
use App\User;
use App\department;
use App\patient;
use App\patienthistory;
use App\band;
use DB;
use Mail; 
use Charts;
use App\temp;
use App\o2;
use App\bloodpressure;

class graph extends Controller
{
    public function patientgraph(Request $request)
    { 
      $show=1;
      $patientadno=patienthistory::all();
      $patientlist=patient::all();
      $cstt =  224;
      $de=225;
      $ex=([56,54,77]);
      $date1 = $request->input('from');
      $date2 = $request->input('dateto');
     // $sf= patienthistory::where('patient_issue_id','=',$cstt)->get();
      //$gf=patient::where('issue_id','=',$sf)->get(); 
  
        $and = temp::where('patienthistory_assin','=',$cstt)->get();
     
        $notavail=temp::where('patienthistory_assin','=',$cstt)->get();
         $notavail=count($notavail);
      
       
      
          $oxy=o2::where('patienthistory_assin','=','$cstt');
          $oxy->whereBetween('created_at', [$date1, $date2]);
          $oxy->get();

          $bp=bloodpressure::where('patienthistory_assin','=','$cstt');
          $bp->whereBetween('created_at', [$date1, $date2]);
          $bp->get();
    
       $ch = Charts::database($and,'area', 'google')
       
       ->elementLabel("$de")
       ->title('mrd')
     
       ->template("material")
       ->labels($and->pluck('created_at'))
       ->values($and->pluck('body_temp'));
     
       $tt= Charts::multi('areaspline', 'highcharts')
       ->title('Blood Pressure')
       ->colors(['#ff0000', '#ffffff'])
       ->labels($and->pluck('created_at'))
       ->dataset('systolic', $and->pluck('body_temp'))
       ->dataset('Jane',  $and->pluck('body_temp'));
       
       $bloodp=Charts::database($bp,'area','google')->elementLabel("")->title('mrd')->template("material")->labels($bp->pluck('created_at'))->values($bp->pluck('systolic','diastolic'));
       $oxychart = Charts::database($oxy,'area','google')->elementLabel("")->title('mrd')->template("material")->labels($oxy->pluck('created_at'))->values($oxy->pluck('spo_2','bpm'));
      
         
       
       return view('admin.layout.patientgraph',compact( 'notavail','patientadno','patientlist','ch','oxychart','bloodp','tt','show','and' ));
           

    }
    public function getchart(Request $request)

    {
        $show=2;
        $patientadno=patienthistory::all();
        $patientlist=patient::all();
        $cstt =   $request->input('admino');
        $de=15;
        $date1 = $request->input('from');
        $date2 = $request->input('dateto');


        $notavail=temp::where('patienthistory_assin','=',$cstt)->get();
        $notavail=count($notavail);
     
       // $sf= patienthistory::where('patient_issue_id','=',$cstt)->get();
        //$gf=patient::where('issue_id','=',$sf)->get(); 
    
        $and = temp::where('patienthistory_assin','=',$cstt);
        $and->whereBetween('created_at', [$date1, $date2]);
          $and->get();
         
            $oxy=o2::where('patienthistory_assin','=',$cstt);
            $oxy->whereBetween('created_at', [$date1, $date2]);
            $oxy->get();

            $bp=bloodpressure::where('patienthistory_assin','=',$cstt);
            $bp->whereBetween('created_at', [$date1, $date2]);
            $bp->get();
      
         $ch = Charts::database($and,'area', 'google')
         
         ->elementLabel("$de")
         ->title('mrd')
       
         ->template("material")
         ->labels($and->pluck('try'))
         ->values($and->pluck('body_temp')
         );
         //for O2 section 
         
         $bloodp=Charts::database($bp,'area','google')->elementLabel("")->title('mrd')->template("material")->labels($bp->pluck('try'))->values($bp->pluck('systolic'));
         $oxychart = Charts::database($oxy,'area','google')->elementLabel("")->title('mrd')->template("material")->labels($oxy->pluck('try'))->values($oxy->pluck('spo_2'));
         
             $tt= Charts::multi('areaspline', 'highcharts')
            ->title('Blood Pressure ')
            ->colors(['#ff0000', '#ffffff'])
            ->labels($and->pluck('created_at'))
            ->dataset('SYSTOLIC', $bp->pluck('systolic'))
            ->dataset('DIASTOLIC',  $bp->pluck('diastolic'));
    
      
        
       
         return view('admin.layout.patientgraph', compact('notavail','patientadno','patientlist','ch','oxychart','bloodp','tt','show','and' ));
         
        }
        public function today(Request $request)
        {
            $show=2;
            $patientadno=patienthistory::all();
            $patientlist=patient::all();
            $cstt =   $request->input('admino');
            $de=15;
            $date1 = $request->input('from');
            $date2 = $request->input('dateto');
           // $nam=patient::whereHas('patientHistory', function ($query) { $query->where('assin', '=',$cstt); })->get();
           $notavail=temp::where('patienthistory_assin','=',$cstt)->get();
           $notavail=count($notavail);
        
         
           $and = temp::where('patienthistory_assin','=',$cstt);
           $and->where('created_at',  Carbon\Carbon::today());
           $and->get();
         
            $oxy=o2::where('patienthistory_assin','=',$cstt);
            $oxy->where('created_at',  Carbon\Carbon::today());
            $oxy->get();

            $bp=bloodpressure::where('patienthistory_assin','=',$cstt);
            $bp->where('created_at',  Carbon\Carbon::today());
            $bp->get();
      
         $ch = Charts::database($and,'area', 'google')
         
         ->elementLabel("$de")
         ->title('mrd')
       
         ->template("material")
         ->labels($and->pluck('try'))
         ->values($and->pluck('body_temp')
         );
         //for O2 section 
         
         $bloodp=Charts::database($bp,'area','google')->elementLabel("")->title('mrd')->template("material")->labels($bp->pluck('try'))->values($bp->pluck('systolic'));
         $oxychart = Charts::database($oxy,'area','google')->elementLabel("")->title('mrd')->template("material")->labels($oxy->pluck('try'))->values($oxy->pluck('spo_2'));
         
             $tt= Charts::multi('areaspline', 'highcharts')
            ->title('Blood Pressure ')
            ->colors(['#ff0000', '#ffffff'])
            ->labels($and->pluck('created_at'))
            ->dataset('SYSTOLIC', $bp->pluck('systolic'))
            ->dataset('DIASTOLIC',  $bp->pluck('diastolic'));
    
        
          //dd($and);
       
         return view('admin.layout.patientgraph', compact( 'notavail','patientadno','patientlist','ch','oxychart','bloodp','tt','show','and' ));
         
        }
        public function totalreport(Request $request)
        {
          $show=2;
          $patientadno=patienthistory::all();
          $patientlist=patient::all();
          $cstt=$request->input('issuept');
         // $rt=$request->input('issuept')->get();
          $de=15;

          $notavail=temp::where('patienthistory_assin','=',$cstt)->get();
          $notavail=count($notavail);
       
          
          $nam=patient::where('issue_id','=',$cstt);
          $nam->pluck('name');
          $nam->get();
          
         $and = temp::where('patient_issue_id','=',$cstt);
         $and->where('created_at', '<', Carbon\Carbon::now());
         $and->get();
         
     
         
       
          $oxy=o2::where('patient_issue_id','=',$cstt);
          $oxy->where('created_at', '<', Carbon\Carbon::now());
          $oxy->get();

          $bp=bloodpressure::where('patient_issue_id','=',$cstt);
          $bp->where('created_at', '<', Carbon\Carbon::now());
          $bp->get();
    
       $ch = Charts::database($and,'area', 'google')
       
       ->elementLabel("ISSUE-ID $cstt")
       ->title('FEVER CHART')
     
       ->template("material")
       ->labels($and->pluck('created_at'))
       ->values($and->pluck('body_temp')
       );
       //for O2 section 
       
       $bloodp=Charts::database($bp,'area','google')->elementLabel("")->title('mrd')->template("material")->labels($bp->pluck('try'))->values($bp->pluck('systolic'));
       $oxychart = Charts::database($oxy,'area','google')->elementLabel("")->title('mrd')->template("material")->labels($oxy->pluck('try'))->values($oxy->pluck('spo_2'));
       
           $tt= Charts::multi('areaspline', 'highcharts')
          ->title('Blood Pressure')
          ->colors(['#ff0000', '#ffffff'])
          ->labels($bp->pluck('created_at'))
          ->dataset('SYSTOLIC', $bp->pluck('systolic'))
          ->dataset('DIASTOLIC',  $bp->pluck('diastolic'));
  
      
     
     
       return view('admin.layout.patientgraph', compact( 'notavail','patientadno','patientlist','ch','oxychart','bloodp','tt','show','and' ));
       
        }
       


    
   
}

