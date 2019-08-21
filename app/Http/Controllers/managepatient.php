<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Collection;
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
use Session;



class managepatient extends Controller
{
    public function allpatient() 
    {
      $pat  = patient::with('bandrel')->get();
      $patt = patient::all();
      
      $test=patienthistory::all();
      $pthistory=patienthistory::where([['status','=','1'],
      ['updated_at', '>=', Carbon\Carbon::today()] ])->get();
    	//$pthistory =patienthistory::where('discharge', '>=', Carbon\Carbon::today())->get();
      $band= band::where('status','=','1')->get();
      $admitPatient =patient::whereHas('bandrel')->count();
      $admitmale= patient::whereHas('bandrel')->where('sex','=','M')->count();
      $admitFemale= patient::whereHas('bandrel')->where('sex','=','F')->count();
      $department=department::all();      

      if(Sentinel::check()) {
        
        return view('admin.layout.register', compact(
          'pat',
          'pthistory',
          'band',
          'department',
          'admitPatient',
          'admitmale',
          'admitFemale'
  
         ));

      } else {
          return redirect('/login');
      }
      
      
    }
  
     

public function createnew(Request $request){
    try{

    if($patient = new patient){

    $patient ->mrd =       $request->input('mrd');
    $patient ->name =      $request->input('name');
    $patient ->issue_id =  $request->input('issue_id');
    $patient ->sex =       $request->input('sex');
    $patient ->age =       $request->input('age');
    
    $patient ->save();

    $departments=department::find($request->input('pt'));
    
    $patient=patient::find($request->input('issue_id'));
    $departments->patient()->attach($patient);
    $bands=band::find($request->input('band_id'));
    $patient->band()->attach($bands);

      $bands=band::find($request->input('band_id'));
      $bands->status=$request->input('newpat');
      $bands ->save();
    } 
  
    $patienthistory = new patienthistory;
    $patienthistory->assin = $request->input('assin');
    $patienthistory->patient_issue_id   = $request->input('issue_id');
    $patienthistory->department   = $request->input('pt');
    $patienthistory->band_id   = $request->input('band_id');
    $patienthistory->mrd =$request->input('mrd');
  
    $patienthistory->save();
  
    $patient=patient::find($request->input('issue_id')); 
    $patienthistory=patienthistory::find($request->input('assin'));
    $patient->patienthistory()->attach($patienthistory);
  
    return redirect()->back()->with(['success'=>'Done Successfully']);
  /*  return redirect()->back()->with(['error'=>'Undefined error contact DNC services']) */
  ;
  
  }
    catch (\Illuminate\Database\QueryException $e) {


    return redirect()->back()->with(['error'=>'Patient  already exsist']);
  }
}
  

  public function collect(Request $request)

  { 
    $department = department::where('department_name','=',$request->input('pt'))->first();

    $department_id= $department->department_id;
   
        
    if( $departments=department::find($department_id)){
  
      $patient=patient::find($request->input('issue_id'));

        if( $departments->patient()->detach($patient)){
            $bands=band::find($request->input('band_id'));
            $patient->band()->detach($bands);
            $patienthistory=patienthistory::where('assin','=',$request->input('assin'))->first();
            $patient->patienthistory()->detach($patienthistory);

            $bands=band::where('band_id','=',$request->input('band_id'))->first();
            $bands->status=$request->input('status');
            $bands ->save();

            $patienthistory =patienthistory::find($request->input('assin'));
            $patienthistory->patient_issue_id  = $request->input('issue_id');
            $patienthistory->department   =$department_id;
            $patienthistory->band_id   = $request->input('band_id');
            $patienthistory->mrd =$request->input('mrd');
            $patienthistory->status=$request->input('status');
            $patienthistory->save();

          }
        else
  
          return redirect()->back()->with(['error'=>'Sorry Department does not match with admitted sessions ']);

    }
      return redirect('/register');
      return redirect()->back()->with(['Undefined error contact DNC services']);
  
  }
    public function issueband(Request $request)
    {
      $band=  $request->input('band_id');
      $department = $request->input('pt');

      if($band == 'Band-id'){
        return redirect()->back()->with(['error'=>'Request Doesnot Have Band ID ']);
      }

      if( $department == 'Department' ){
        return redirect()->back()->with(['error'=>'Request Doesnot Have Department ID ']);
        }
        
      try{
          if( $patient=patient::find($request->input('issue_id'))){


              $departments=department::find($request->input('pt'));
            
              $patient=patient::find($request->input('issue_id'));
              $departments->patient()->attach($patient);
              $bands=band::find($request->input('band_id'));
              $patient->band()->attach($bands);

              $bands=band::find($request->input('band_id'));
              $bands->status=$request->input('issue_new');
              $bands ->save();
          }

            $patienthistory = new patienthistory;
            $patienthistory->assin = $request->input('assin');
            $patienthistory->patient_issue_id   = $request->input('issue_id');
            $patienthistory->department   = $request->input('pt');
            $patienthistory->band_id   = $request->input('band_id');
            $patienthistory->mrd =$request->input('mrd');
            $patienthistory->save();
            $patient=patient::find($request->input('issue_id')); 
            $patienthistory=patienthistory::find($request->input('assin'));
            $patient->patienthistory()->attach($patienthistory);
            return redirect()->back()->with(['success'=>'Done Successfully']);
            

      } catch (\Illuminate\Database\QueryException $e) {
          return redirect()->back()->with(['error'=>'Patient  already exsist']);
      }
  }

  public function changeband(Request $request)
  {
    $emptyband = $request->input('current');
    $chekband= $request->input('changeband_id');
      if(empty($emptyband))
          {
              
              return redirect()->back()->with(['error'=>'Please select all field']); 
          }

          if(empty($chekband))
          {
            return redirect()->back()->with(['error'=>'Please select all field']);
          }
          
      if($patient=patient::find($request->input('issue_id'))){
    
          $bands=band::find($request->input('current'));
          $bands->status=$request->input('chband');
          $bands ->save();
          $patient->band()->detach($bands);

          $changeband=band::find($request->input('changeband_id'));
          $patient->band()->attach($changeband);

          $bands=band::find($request->input('current'));
          $bands->problem =$request->input('problem');
          $bands ->save();
       
          $patienthistory =patienthistory::find($request->input('changeassin'));
          $patienthistory->patient_issue_id   = $request->input('issue_id');
          $patienthistory->band_id   = $request->input('changeband_id');
          $patienthistory->bandproblem =$request->input('problem');
          $patienthistory->save();

          $bands=band::find($request->input('changeband_id'));
        
          $bands->status=$request->input('chb');
          $bands ->save();
        return redirect()->back()->with(['success'=>'Done Successfully']);

      }
  }
 
}

