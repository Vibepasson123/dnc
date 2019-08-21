@extends('admin.layout.AdminLayout')
@section('right_col')

<link href="{{asset('admincss/build/css/register.css')}}"rel="stylesheet" type="text/css">
<div class="right_col" role="main">
  
  <!-- top tiles -->
  <div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Patient</span>
      <div class="count">2500</div>
      <span class="count_bottom"><i class="green">4% </i> Unregistered Patient</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-clock-o"></i> Registred Patient</span>
      <div class="count">123.50</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> </span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
      <div class="count green">2,500</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
      <div class="count">4,567</div>
      <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
    </div>
    <div class=" modal col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div style="visibility: hidden; display:inline;">
          <p style="visibility: hidden; display:inline;">Facebook Campaign</p>
          <div class="modal"style="visibility: hidden; display:inline;">
            <div class="modal progress progress_sm" style="width: 2%;"style="visibility: hidden; display:inline;">
              <div class="modal progress-bar bg-green" role="progressbar" data-transitiongoal="80"style="visibility: hidden; display:inline;"></div>
            </div>
          </div>
        </div>
      <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
      <div class="count">2,315</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
      <div class="count">7,325</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
  </div>

  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Band-In-Use</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-plus"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a data-toggle="modal" data-target="#registermodal" >Submit Device </a>
              </li>
              <li><a data-toggle="modal" data-target="#advanceregister" >Replace Device</a>
              </li>
              <li><a data-toggle="modal" data-target="#repair" >Report Devices </a>
              </li>
            </ul>

        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <table class="table table-striped">
          <thead>
           
            <tr>
              <th></th>
              <th>NAME</th>
              <th>AGE</th>
              <th>SEX</th>
            
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>25</td>
              <td>M</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>28</td>
              <td>M</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>21</td>
              <td>F</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Patient-Discharge</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
            </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <table class="table table-striped">
          <thead>
            <tr>
              <th>MRD</th>
              <th>Name</th>
              <th>AGE</th>
              <th>ISSUE-ID</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>25</td>
              <td>MKD9648</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>28</td>
              <td>RFE8944</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>21</td>
              <td>PIY8965</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Patinet List</h3>
      </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
              <th>
                <input type="checkbox" id="check-all" class="flat" disabled>
              </th>
              <th class="column-title">MRD </th>
              <th class="column-title">DATE </th>
              <th class="column-title">ISSUEID </th>
              <th class="column-title">NAME</th>
              <th class="column-title">STATUS </th>
              <th class="column-title">NURSE.S </th>
              <th class="column-title no-link last"><span class="nobr">Action</span>
              </th>
              <th class="bulk-actions" colspan="7">
                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
              </th>
            </tr>
          </thead>

          <tbody>
            <tr class="even pointer">
              <td class="a-center ">
                <input type="checkbox" class="flat" name="table_records">
              </td>
              <td class=" ">121000040</td>
              <td class=" ">May 23, 2014  </td>
              <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
              <td class=" ">John Blank L</td>
              <td class=" ">Paid</td>
              <td class="a-right a-right ">$7.45</td>
              <td class=" last"><a href="#">View</a>
              </td>
            </tr>
            <tr class="odd pointer">
              <td class="a-center ">
                <input type="checkbox" class="flat" name="table_records">
              </td>
              <td class=" ">121000039</td>
              <td class=" ">May 23, 2014 </td>
              <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
              </td>
              <td class=" ">John Blank L</td>
              <td class=" ">Paid</td>
              <td class="a-right a-right ">$741.20</td>
              <td class=" last"><a href="#">View</a>
              </td>
            </tr>
            <tr class="even pointer">
              <td class="a-center ">
                <input type="checkbox" class="flat" name="table_records">
              </td>
              <td class=" ">121000038</td>
              <td class=" ">May 24, 2014 </td>
              <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
              </td>
              <td class=" ">Mike Smith</td>
              <td class=" ">Paid</td>
              <td class="a-right a-right ">$432.26</td>
              <td class=" last"><a href="#">View</a>
              </td>
            </tr>
            <tr class="odd pointer">
              <td class="a-center ">
                <input type="checkbox" class="flat" name="table_records">
              </td>
              <td class=" ">121000037</td>
              <td class=" ">May 24, 2014 </td>
              <td class=" ">121000204</td>
              <td class=" ">Mike Smith</td>
              <td class=" ">Paid</td>
              <td class="a-right a-right ">$333.21</td>
              <td class=" last"><a href="#">View</a>
              </td>
            </tr>
            <tr class="even pointer">
              <td class="a-center ">
                <input type="checkbox" class="flat" name="table_records">
              </td>
              <td class=" ">121000040</td>
              <td class=" ">May 24, 2014</td>
              <td class=" ">121000210</td>
              <td class=" ">John Blank L</td>
              <td class=" ">Paid</td>
              <td class="a-right a-right ">$7.45</td>
              <td class=" last"><a href="#">View</a>
              </td>
            </tr>
            <tr class="odd pointer">
              <td class="a-center ">
                <input type="checkbox" class="flat" name="table_records">
              </td>
              <td class=" ">121000039</td>
              <td class=" ">May 26, 2014 </td>
              <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
              </td>
              <td class=" ">John Blank L</td>
              <td class=" ">Paid</td>
              <td class="a-right a-right ">$741.20</td>
              <td class=" last"><a href="#">View</a>
              </td>
            </tr>
            <tr class="even pointer">
              <td class="a-center ">
                <input type="checkbox" class="flat" name="table_records">
              </td>
              <td class=" ">121000038</td>
              <td class=" ">May 26, 2014 </td>
              <td class=" ">121000203</td>
              <td class=" ">Mike Smith</td>
              <td class=" ">Paid</td>
              <td class="a-right a-right ">$432.26</td>
              <td class=" last"><a href="#">View</a>
              </td>
            </tr>
            <tr class="odd pointer">
              <td class="a-center ">
                <input type="checkbox" class="flat" name="table_records">
              </td>
              <td class=" ">121000037</td>
              <td class=" ">May 26, 2014 </td>
              <td class=" ">121000204</td>
              <td class=" ">Mike Smith</td>
              <td class=" ">Paid</td>
              <td class="a-right a-right ">$333.21</td>
              <td class=" last"><a href="#">View</a>
              </td>
            </tr>

            <tr class="even pointer">
              <td class="a-center ">
                <input type="checkbox" class="flat" name="table_records">
              </td>
              <td class=" ">121000040</td>
              <td class=" ">May 27, 2014  </td>
              <td class=" ">121000210</td>
              <td class=" ">John Blank L</td>
              <td class=" ">Paid</td>
              <td class="a-right a-right ">$7.45</td>
              <td class=" last"><a href="#">View</a>
              </td>
            </tr>
            <tr class="odd pointer">
              <td class="a-center ">
                <input type="checkbox" class="flat" name="table_records">
              </td>
              <td class=" ">121000039</td>
              <td class=" ">May 28, 2014 </td>
              <td class=" ">121000208</td>
              <td class=" ">John Blank L</td>
              <td class=" ">Paid</td>
              <td class="a-right a-right ">$741.20</td>
              <td class=" last"><a href="#">View</a>
              </td>
            </tr>
          </tbody>
        </table>


        </div>
        <div class="modal fade" id="registermodal" tabindex="-1" role="dialog">
          <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal form-label-left input_mask">

                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="MRD">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control" id="inputSuccess3" placeholder=" Name">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>



                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">ENTER NEW BAND-ID</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="New Band-Id">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">LAST BAND-ID </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" readonly="readonly"  placeholder="Disabled Input">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">REGISTERED ISSUE ID</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" readonly="readonly" placeholder="Registerd Issue Id ">
                    </div>
                  </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Band-Condition <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder='rows="3"'></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                      
                      <button class="btn btn-primary" type="danger">Cancel</button>
                      <button type="submit" class="btn btn-success">Collect</button>
                    </div>
                  </div>
                  </div>
                  

                </form>

              </div>
              <div class="modal-footer">

              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div>

  </div>
        <div class="modal fade" id="repair" tabindex="-1" role="dialog">
          <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">REPORT DAMAGE</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal form-label-left input_mask">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">ENTER-BAND-ID</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="Band-Id">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">MAC address </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control"   placeholder="Device MAC address">
                    </div>
                  </div>
                 
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Problem  <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder="Discribe Problem"></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                      
                      <button class="btn btn-primary" type="danger">Cancel</button>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                  </div>
                  

                </form>

              </div>
              <div class="modal-footer">

              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div>





      </div>
      <div class="modal fade" id="advanceregister" tabindex="-1" role="dialog">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal form-label-left input_mask">
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="MRD">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control" id="inputSuccess3" placeholder=" Name">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess3" placeholder=" Band-Id">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control" id="inputSuccess3" placeholder="Nurse-Station">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="date" class="form-control has-feedback-left" id="inputSuccess3" placeholder="Date" >
                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control" id="inputSuccess3" placeholder="Issue-ID" readonly="readonly">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true" ></span>
                   </div>
                   <div class="form-group" id="ChooseDepartment">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control pull-left" >
                        <option>DEPARTMENT</option>
                        <option>Option one</option>
                        <option>Option two</option>
                        <option>Option three</option>
                        <option>Option four</option>
                        <option>Choose option</option>
                        <option>Option one</option>
                        <option>Option two</option>
                        <option>Option three</option>
                        <option>Option four</option>
                      </select>
                    </div>
                   </div>
                     <div class="form-group" id="reasonAvanceReg">
                       <div class="col-md-9 col-sm-9 col-xs-12">
                         <textarea class="form-control" rows="4" placeholder='Prblem brief'></textarea>
                       </div>
                     </div>
                     <p>
                       M:
                       <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
                       <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                     </p>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>











  




@endsection
