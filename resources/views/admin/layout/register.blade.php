

@extends('admin.layout.AdminLayout')
@section('right_col')






<link href="{{asset('admincss/build/css/register.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/chat/chat.css')}}"rel="stylesheet" type="text/css">
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class=" row tile_count">
    @if(Sentinel::check())
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> TOTAL PATIENT</span>
      <div class="count">  {{$pat->count()}}</div>
    </div>
    @endif
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-clock-o"></i> ADIMITTED PATIENT</span>
      <div class="count "> {{$admitPatient}}</div>
   
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> MALE</span>
      <div class="count green">{{$admitmale}}</div>
  
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> FEMALE</span>
      <div class="count red">{{$admitFemale}}</div>
    
    </div>
    <div class=" modal col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    
        <div style="visibility: hidden; display:inline;">
          <p style="visibility: hidden; display:inline;">Facebook Campaign</p>
          <div class=""style="visibility: hidden; display:inline;">
            <div class="progress progress_sm" style="width: 2%;"style="visibility: hidden; display:inline;">
              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"style="visibility: hidden; display:inline;"></div>
            </div>
          </div>
        </div>

      <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
      <div class="count"></div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> PATIENT DISCHARGE</span>
      <div class="count blue">{{$pthistory->count()}}</div>
    
    </div>
   
  </div>
  @if(session('error'))
  <noscript>
    $(function () {

      swal("", "Error Please check Input details", "error");
    });
  </noscript>
  Session::pull('error');
  @endif
  @if(session('success'))
  <noscript>
    $(function () {

      swal("", "Done Successfully", "success");
    });
  </noscript>
   Session::pull('success');
  @endif

  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
          <caption><h2>UNREGISTERED PATIENT</h2></caption>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-plus"></i></a>
            <ul class="dropdown-menu" role="menu">
          
              <li><a data-toggle="modal" data-target="#advanceregister" >Add New Patient</a>
              </li>
            </ul>
        </ul>
    
          <input type="text" class="nav navbar-right "  style="padding-top: 5px; border-radius: 25px; border: 2px solid #c2d6d6; padding: 15px;  width: 200px; height: 10px;" id="newpatient" >
          <label class="nav navbar-right " style="padding-right: 10px; padding-top: 10px;  " for="newpatient">Search:</label>
   
       
        <div class="clearfix"></div>
      </div>
      <div class="x_content" id="tablecontrol"  >
         
        <table class="table table-striped " id="new_patient_table">
            
          <tbody class="try">
             <th >MRN</th>
              <th>ISSUE-ID</th>
              <th>Name</th>
              <th>BIRTH-DATE</th>
               <th>SEX</th>
            </tr>
              @foreach ($pat as $patient)
               @if(count($patient->patientHistory)>0)
               @else
              <tr class="tat " >
                <td  >{{$patient->mrd}}</td>
                <td >{{$patient->issue_id}}</td>
                <td >{{$patient->name}}</td>
                <td>{{$patient->age}}</td>
                <td>{{$patient->sex}}</td>
              </tr>
            @endif
             @endforeach 
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
         <caption><h2>DISCHARGE PATIENT</h2></caption>  
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li> 
            </ul>
            <input type="text" class="nav navbar-right "  style="padding-top: 5px; border-radius: 25px; border: 2px solid #c2d6d6; padding: 15px;  width: 200px; height: 10px;" id="dischargelist" >
            <label class="nav navbar-right " style="padding-right: 10px; padding-top: 5px;" for="dischargelist">Search:</label>
        <div class="clearfix"></div>
      </div>
      <div class="x_content" id="discharge_patient_table">
        <table class="table table-striped "  >
          <thead>
            <tr>
              <th>MRN</th>
              <th>ADDMISSION NO</th>
              <th>ADMITTED ON</th>
              <th>ISSUE-ID</th>
              <th>DISCHARGE-DATE</th>              
            </tr>
          </thead>
          <tbody>
             @foreach ($pthistory as $patient)
            <tr>
              <th scope="row" >{{$patient->mrd}}</th>
              <td>{{$patient->assin}}</td>
               <td>{{date('d F, Y', strtotime($patient->created_at))}}</td>
              <td >{{$patient->patient_issue_id}}</td>
               <td >{{date('d F, Y', strtotime($patient->updated_at))}}</td>   
            </tr>
            @endforeach 
          </tbody>
        </table>
      </div>
    </div>
    </div>
   <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <caption><h2>Admitted Patient</h2></caption>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap testmagic" cellspacing="0" width="100%">
                       
                      <thead>
                        <tr class="trm">
                          <th>MRN</th>
                          <th>ISSUE-ID</th>
                          <th>NAME</th>
                          <th>AGE</th>
                          <th>ADMISSION-NO</th>
                          <th>ADMIITED-ON</th>
                          <th>DEPARTMENT</th>
                          <th>BAND-ID</th>
                          <th>ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($pat as $patient)
                            @if(count($patient->patientHistory)>0)
                         <tr>
                            <td class="text-center">{{$patient->mrd}}</td>
                            <td  class="text-center">{{$patient->issue_id}}</td>
                            <td class="text-center">{{$patient->name}}</td>  
                            <td class="text-center">{{Carbon\Carbon::createFromTimeStamp(strtotime($patient->age))->diffForHumans(null, true)}}</td> 
                              @if(count($patient->patientHistory)>0)
                              @foreach($patient->patientHistory as $tt)
                                  <td class="text-center">{{$tt->assin }}</td>
                                  <td class="text-center">{{date('d F, Y', strtotime($tt->pivot->created_at))}}</td>
                              @endforeach
                                @else
                               <td class="text-center" id="red">no</td>
                         @endif
                              @if(count($patient->departmetrel)>0)
                                @foreach ($patient->departmetrel as $test)
                              <td class="text-center" >
                              {{$test->department_name}} 
                            </td>
                          @endforeach
                          @else
                          <td  class="text-center" id="red">no</td>
                          @endif
                          @if(count($patient->departmetrel)>0)
                          @foreach ($patient->bandrel as $test)
                              <td class="text-center">
                            {{$test->band_id}} 
                            </td>
                          @endforeach
                            @else
                            <td  class="text-center"id="red">no</td>
                            @endif
                              <td  class="text-center" href="#">
                                    <a href="#" class="go badge badge-pill badge-primary text-center" >Collect</a>
                              </td>
                            </tr>
                            @endif
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    <body>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       


      </div>
      <div class="modal fade" id="advanceregister" tabindex="-1" role="dialog">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header btn-success">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add New Patient</h4>
              </div>
              <div class="modal-body">
             
                <form class="form-horizontal form-label-left input_mask" name="newpatient" action="createnew" method="POST">
                  {{csrf_field()}}
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="np1" placeholder="MRN" name="mrd">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control" id="np2" placeholder=" Name" name="name" required>
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control" id="np3" value="" placeholder=" assin" name="assin">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <select  class="form-control" name="band_id" required>
                          
                             @foreach ($band as $patient)

                            <option value="{{$patient->band_id}}">{{$patient->band_id}}</option>
                            @endforeach
                           
                          </select>
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <select  class="form-control" name="pt">
                            <option>Department</option>
                             @foreach ($department as $patient)

                            <option value="{{$patient->department_id}}">{{$patient->department_name}}</option>
                            @endforeach
                           
                          </select>
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="date" class="form-control has-feedback-left" id="np4"  name="age" required >
                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control" id="np5" placeholder="Issue-ID" name="issue_id" >
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true" ></span>
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <span>SEX</span>
                      <select  class="form-control has-feedback-left" name="sex" required>
                        
                          <option value="M" >Male</option>
                          <option value="F">Female</option>
                          <option value="O">Other</option>
                        </select>
                   
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                     <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                     <button type="submit" value="2" name="newpat" class="btn btn-success pull-right" onClick="randomString();issueidno();mrdno();" >Register</button>
                   </div>
                   </div>
                  </form>
                    </div>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>
      <div class="modal fade" id="collect" tabindex="-1" role="dialog">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title ">MANAGE PATIENT</h4>
              </div>
              <div class="modal-body" id="collectband" >
                <form class="form-horizontal form-label-left input_mask mod" action="collect" method="POST">
                  {{csrf_field()}}
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Patient-MRN</label>
                    <input type="text" class="form-control has-feedback-left" id="mrd" placeholder="MRN" name="mrd" readonly="readonly">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Addmission-No</label>
                     <input type="text" class="form-control" id="assin" placeholder="Admission-No" name="assin" readonly="readonly">
                   </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                     <label>NAME</label>
                    <input type="text" class="form-control has-feedback-left" id="name" placeholder=" Name" name="name" readonly="readonly">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                 <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <label>Band-ID</label>
                      <input type="text" class="form-control" id="band_id" placeholder="BAND-ID" name="band_id" readonly="readonly">   
                     <span class="fa fa-user form-control-feedback right" aria-hidden="true" ></span>
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>DEPARTMENT</label>
                    <input type="text" class="form-control" data-test="{{$patient->department_id}}" id="depart" placeholder="Department" name="pt" readonly="readonly">
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label> DATE OF BIRTH</label>
                    <input type="text" class="form-control has-feedback-left" id="age" placeholder="Birthday" name="age" readonly="readonly" >
                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>ISSUE-ID</label>
                    <input type="text" class="form-control" id="issue" placeholder="Issue-ID" name="issue_id"  >
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true" ></span>
                   </div>
                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                     <button type="button" class=" new btn btn-danger pull-right" data-dismiss="modal" >Close</button>
                    <button type="submit" value="1" name="status" class="btn btn-success pull-right">Collect</button>
                   </div>
                    </form> 
                    </div>
                      <div class="modal-body " id="mainmenu">
                       <a class="btn btn-app" id="try2">
                     
                         <i class="fa fa-plus-square" id="try2"></i>DISCHARGE PATIENT
                      </a>
                        <a class=" btn btn-app" id="try">
                     
                        <i class=" change fa fa-user-plus" href="#others" data-toggle="modal" data-dismiss="modal" ></i>CHANGE BAND
                      </a>
                      </div>
                     <div id="secondmenu">
                       <a class="btn btn-app" id="try2">
                     
                         <i class="fa fa-plus-square"></i>DISCHARGE PATIENT
                      </a>
                        <a class=" btn btn-app" id="try">
                     
                        <i class="fa fa-user-plus close" href="#others" data-toggle="modal"  data-dismiss="modal" ></i>CHANGE 
                      </a>
                      </div>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="modal fade" id="issueband" tabindex="-1" role="dialog">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title">Admit Patient</h1>
              </div>
              <div class="modal-body">
                <form class="form-horizontal form-label-left input_mask"  action="issueband" method="POST">
                  {{csrf_field()}}
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" readonly="readonly" id="MRD" placeholder="MRN" name="mrd">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control" id="NAME" placeholder=" Name" readonly="readonly" name="name">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control "   id="assind" placeholder="Admission-No"  name="assin">
                   
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                         <select  class="form-control" name="band_id">
                            <option>Band-id</option>
                             @foreach ($band as $patient)
                            <option value="{{$patient->band_id}}">{{$patient->band_id}}</option>
                            @endforeach
                          </select>
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                     <select  class="form-control" name="pt">
                            <option>Department</option>
                             @foreach ($department as $patient)
                            <option value="{{$patient->department_id}}">{{$patient->department_name}}</option>
                            @endforeach
                          </select>
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left"  placeholder="Date" id="age" readonly="readonly" name="age" >
                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                    <span>DATE OF BIRTH</span>
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control" id="issueid" placeholder="Issue-ID"  name="issue_id" >
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true" ></span>
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="sex" readonly="readonly" placeholder="Sex" name="sex">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                     <button type="button" class=" btn btn-danger pull-right" data-dismiss="modal">Close</button>
                      <button type="submit" value="2" name="issue_new" class="btn btn-success pull-right"  onclick="getElementById('assind').value=Math.floor(Math.random()*10000)" >Register</button>
                   </div>
                   </div>
                  </form>
                    </div>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="modal fade" id="changeband" tabindex="-1" role="dialog" >
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header btn-success">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Change Band </h4>
                </div>
                <div class="modal-body"> 
                <form class="form-horizontal form-label-left input_mask" action="changeband" method="POST" >
                    {{csrf_field()}}
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <label>MRN</label>
                          <input type="text" class="form-control has-feedback-left" readonly="readonly" id="changeMRD" placeholder="MRN" name="changemrd">
                          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <label>NAME</label>
                          <input type="text" class="form-control" id="changeNAME" placeholder=" Name" readonly="readonly" name="changename">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label>Admission-NO</label>
                            <input type="text" class="form-control " id="change_add_no" placeholder="Admission-No" name="changeassin">
                          </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <label> Patient-Issue-ID</label> 
                            <input type="text" class="form-control" id="changeissueid" placeholder="Issue-ID"  name="issue_id" >
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true" ></span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <label>Current band</label>
                          <input type="text" class="form-control " id="currentband" placeholder="Current Band-ID" name="current" required readonly>
                        </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <label >Select New Band</label>
                              <select  class="form-control" name="changeband_id" required> 
                                  @foreach ($band as $patient)
                                  <option value="{{$patient->band_id}}">{{$patient->band_id}}</option>
                                  @endforeach
                                </select>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                              <label>Problem</label>
                              <textarea  class="form-control" id="discription"  rows="2" cols="50" name="problem" required></textarea>
                                <p>Please define the plroblem </p>
                              <input type="checkbox" name="chb" value="2" required="required" required>Problem explained<br>
                          </div>
                          <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="button" class=" btn btn-danger pull-right" data-dismiss="modal">Close</button>
                            <button type="submit" value="3" name="chband" class="btn btn-success pull-right">Change</button>
                          </div>
                        </div>
                   </form>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>  
      </div>



 
  <!-- Main Application (Can be VueJS or other JS framework) -->
 

@endsection
