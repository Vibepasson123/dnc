<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Events\patinetHelathAlert;
use App\patient;
use App\o2;
use App\heartRate;
use App\temp;
use App\bloodpressure;
use App\patienthistory;
use App\Http\Resources\Health;
use App\Http\Resources\PBand;

class healthstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     /*    $rest=patient::paginate(8);
       
        return Health::collection($rest); */
        $test= User::all();
        return response()->json($test);
        
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    

        
           

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $token =('true');
        $tr=$request->input('systolic');
        $tr2=$request->input('diastolic');
        if($pressure = new bloodpressure){
           
           

           // $pressure ->id                        =$request->input('id');
            $pressure ->systolic                 =$request->input('systolic');
            $pressure ->diastolic                =$request->input('diastolic');
            $pressure ->patient_issue_id         =$request->input('patient_issue_id');
            $pressure ->patienthistory_assin     =$request->input('patienthistory_assin');
           
            $pressure ->save();
            
            
           }

             $rate = new heartRate;


           $rate->BPM                      = $request->input('bmp');
           $rate->patient_issue_id         = $request->input('patient_issue_id');
           $rate->patienthistory_assin     = $request->input('patienthistory_assin');
        
           $rate->save();

           $oxigen = new o2;
           $oxigen->BPM                     = $request->input('bmp');
           $oxigen->spo_2                    =$request->input('spo');
           $oxigen->patient_issue_id         = $request->input('patient_issue_id');
           $oxigen->patienthistory_assin     =$request->input('patienthistory_assin');

           $oxigen->save();

           $tem = new temp;

           $tem->body_temp  =$request->input('temp');
           $tem->patient_issue_id         = $request->input('patient_issue_id');
           $tem->patienthistory_assin     =$request->input('patienthistory_assin');

           

          if( $tem->save()){
            return response()->json(compact('token'));
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bandauth(Request $request)

    {

        $credentials = $request->only('assin', 'issue_id');
        if ($token =('true')) {

       
        $bandr = $request->only('assin');
        $bandiss = $request->only('issue_id');

      
      if($bandreg = patienthistory::find($bandr)->get(0)){
        if($bandiss = patient::find($bandiss)->get(0)){
            return response()->json(compact('token'));
            
        }else
        return response()->json(['error' => 'hello'], 401);
        
        return response()->json(compact('token'));
      }
      else
      return response()->json(['error' => 'hello'], 401);
        
    }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function test(Request $request){
         $tr=$request->input('systolic');
         $tr2=$request->input('diastolic');
         if($tr >=52){
            return response()->json(['error' => 'hello'], 401);

         }
         else
         
         return $tr;
         

    }
}
