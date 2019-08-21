@if(Sentinel::check()) @else
<script type="text/javascript">
  window.location = "{{ url('/login') }}";
  append('<p class="alert alert-danger">Somethig is wrong!</p>');
</script>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <link href="{{asset('admincss/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admincss/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admincss/nprogress/nprogress.css')}}" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" type="image/x-icon" href="images/heaD.ico">
  <link href="{{asset('admincss/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet"
    type="text/css">
  <link href="{{asset('admincss/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admincss/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admincss/build/css/custom.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admincss/build/css/register.css')}}" rel="stylesheet" type="text/css">
  <!--DATATABLE-->
  <link href="{{asset('admincss/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admincss/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admincss/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet"
    type="text/css">
  <link href="{{asset('admincss/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet"
    type="text/css">
  <link href="{{asset('admincss/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admincss/build/css/register.css')}}" rel="stylesheet" type="text/css">
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title">
              <img src="images/heaD.ico" alt=""/><img src="images/n.ico" alt=""/><img src="images/cc.ico" alt=""/>
            </a>
            </a>
          </div>
          <div class="clearfix"></div>
          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="/uploads/avatars/{{Sentinel::getUser()->avatar}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome</span>
              <h2>{{Sentinel::getUser()->first_name}}</h2>
            </div>
          </div>
          <br />
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">

              <h3>General</h3>
              <ul class="nav side-menu">
                <li>
                  <a>
                    <i class="fa fa-medkit"></i> BAND MANAGEMENT
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{ url('register') }}">Registrations</a>
                    </li>
                    {{-- <li id="register">
                      <a href="{{ url('dashbord') }}">Collection/Replace</a>
                    </li> --}}
                   {{--  <li>
                      <a href="index3.html">Dashboard3</a>
                    </li>
                    <li>
                      <a href="index3.html">Dashboard3</a>
                    </li> --}}
                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-edit"></i>Hospital Profile
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="#" data-toggle="modal" data-target="#department">Manage Department</a>
                    </li>
                  {{--   <li>
                      <a href="form_advanced.html">Advanced Components</a>
                    </li> --}}

                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-desktop"></i> Elements
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="" data-toggle="modal" data-target="#deactive">Deactivated-Users</a>
                    </li>
                    <li>
                      <a href="" data-toggle="modal" data-target="#damagebnd">Damage-Band</a>
                    </li>
                    <li>
                      <a href="" data-toggle="modal" data-target="#avialable">Avialable-Band</a>
                    </li>
                    <li>
                      <a href="" data-toggle="modal" data-target="#userst">User-Staus</a>
                    </li>

                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-table"></i>Reviews
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="" data-toggle="modal" data-target="#review">Public Message List</a>
                    </li>
                    <li>
                      <a href="" data-toggle="modal" data-target="#throttle">Public throttle List</a>
                    </li>
                  </ul>
                </li>
             {{--    <li> --}}
                 {{--  <a>
                    <i class="fa fa-bar-chart-o"></i> Data Presentation
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="chartjs.html">Chart JS</a>
                    </li>
                    <li>
                      <a href="chartjs2.html">Chart JS2</a>
                    </li>
                    <li>
                      <a href="morisjs.html">Moris JS</a>
                    </li>
                    <li>
                      <a href="echarts.html">ECharts</a>
                    </li>
                    <li>
                      <a href="other_charts.html">Other Charts</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-clone"></i>Layouts
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="fixed_sidebar.html">Fixed Sidebar</a>
                    </li>
                    <li>
                      <a href="fixed_footer.html">Fixed Footer</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li>
                  <a>
                    <i class="fa fa-bug"></i> Additional Pages
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="e_commerce.html">E-commerce</a>
                    </li>
                    <li>
                      <a href="projects.html">Projects</a>
                    </li>
                    <li>
                      <a href="project_detail.html">Project Detail</a>
                    </li>
                    <li>
                      <a href="contacts.html">Contacts</a>
                    </li>
                    <li>
                      <a href="profile.html">Profile</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-windows"></i> Extras
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="page_403.html">403 Error</a>
                    </li>
                    <li>
                      <a href="page_404.html">404 Error</a>
                    </li>
                    <li>
                      <a href="page_500.html">500 Error</a>
                    </li>
                    <li>
                      <a href="plain_page.html">Plain Page</a>
                    </li>
                    <li>
                      <a href="login.html">Login Page</a>
                    </li>
                    <li>
                      <a href="pricing_tables.html">Pricing Tables</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-sitemap"></i> Multilevel Menu
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="#level1_1">Level One</a>
                    <li>
                      <a>Level One
                        <span class="fa fa-chevron-down"></span>
                      </a>
                      <ul class="nav child_menu">
                        <li class="sub_menu">
                          <a href="level2.html">Level Two</a>
                        </li>
                        <li>
                          <a href="#level2_1">Level Two</a>
                        </li>
                        <li>
                          <a href="#level2_2">Level Two</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#level1_2">Level One</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="javascript:void(0)">
                    <i class="fa fa-laptop"></i> Landing Page
                    <span class="label label-success pull-right">Coming Soon</span>
                  </a>
                </li>
              </ul> --}}
            </div>
          </div>
          <!-- /sidebar menu -->
          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
          {{--   <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog fa-spin" aria-hidden="true"></span>
            </a> --}}
          {{--   <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a> --}}
         {{--    <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a> --}}
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('login') }}">
              <span class="glyphicon glyphicon-off fa-spin" aria-hidden="true" href="{{ url('login') }}"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>
      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle">
                <i class="fa fa-cog fa-spin"></i>
              </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
            
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="/uploads/avatars/{{Sentinel::getUser()->avatar}}" alt="">{{Sentinel::getUser()->first_name}}
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li>
                    <a href="/profile"> Profile</a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">Help</a>
                  </li>
                  <form action="/logout" method="post" id="logout-form" onsubmit="alert('test');">
                    {{csrf_field()}}
                    <li id="logoutbtun" onclick="document.getElementById('logout-form').submit();">
                      <a href="#" id="logoutbtun" onclick="document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </form>
                </ul>
              </li>
              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">{{$banderror->count()}}</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  @foreach ($banderror as $band)
                  <li>
                    <a>
                      <span class="badge bg-green"> {{$band->band_id}}</span>
                      <span>
                        <span></span>
                        <span class="time">{{$band->updated_at->diffForHumans() }}</span>
                      </span>
                      <span class="message">
                        {{$band->problem}}
                      </span>
                    </a>
                  </li>
                  @endforeach
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header btn-success">
              <h5 class="modal-title" id="exampleModalLabel">Review Message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table  class=" bulk_action table table-striped table-bordered  table-hover" >
                <thead class="black white-text">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Message</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($pubMsg as $msg)
               <tr>
                 <td>{{ $msg->id }}</td>
                 <td>{{ $msg->email}}</td>
                 <td>{{ $msg->name}}</td>
                 <td>{{ $msg->message}}</td>
                 <td>{{date('d F, Y', strtotime($msg->created_at))}}</td>
               </tr>
               @endforeach
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table">
                <thead class="black white-text">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             {{--   <button type="button" class="btn btn-primary">Save changes</button>  --}}
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="userst" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-lg" role="document">
          <div class="modal-content">
            <div class="modal-header btn-success ">
                    <h3 class="modal-title" id="exampleModalLabel">Employee Status </h3>
                   {{--   <h5 class="modal-title" id="exampleModalLabel">User-Staus</h5>  --}}
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table">
                <thead class="black white-text btn-success ">
                  <tr>
                    <th class="btn-info" scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Activated-On</th>
                    <th scope="col">Joined->On</th>
                    <th class="btn-danger" scope="col">Login-status</th>
                    <th scope="col">Last-Login</th>
                    <th scope="col">User-Depart</th>
                    <th class="btn-info" scope="col">Role</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($satus as $ustate)
                  <tr>
                    <td>{{$ustate->first_name}}</th>
                    <td>{{$ustate->email}}</th>
                    <td>{{$ustate->created_at->diffForHumans()}}</td>
                    @foreach($ustate->employee_sat as $newSt)
                    <td>{{$newSt->completed_at }}</td>
                    @endforeach
                    <td> @if($ustate->logstatus == 1)
                      <i class="btn-sucess">Loged in now</i>
                      @endif
                    </td>
                    <td>{{$ustate->last_login}}</td>
                    <td>{{$ustate->depart}}</td>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div class=" modal col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div style="visibility: hidden; display:inline;">
          <p style="visibility: hidden; display:inline;">Facebook Campaign</p>
          <div class="" style="visibility: hidden; display:inline;">
            <div class="progress progress_sm" style="width: 2%;" style="visibility: hidden; display:inline;">
              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80" style="visibility: hidden; display:inline;"></div>
            </div>
          </div>
        </div>
        <span class=" modal count_top">
          <i class="fa fa-user"></i> Total Collections</span>
        <div class="count">2,315</div>
        <span class="count_bottom">
          <i class="green">
            <i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
      </div>
      <div class=" modal col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top">
          <i class="fa fa-user"></i> Total Connections</span>
        <div class="count">7,325</div>
        <span class="count_bottom">
          <i class="green">
            <i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
      </div>
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>ADD-EMPLOYEE</h3>
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>EMPLOYEE LIST </h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li>
                      <a href="#" class="fa fa-refresh " id="read-data" type="buttonpp" aria-hidden="true" data-toggle="tooltip"
                        data-placement="top" title="REFERSH LIST" onclick="switchVisible();"></a>
                    </li>
                    <li>...</li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="ADD-EMPLOYEE"></i>
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a id="#try" href="#" data-toggle="modal" data-target="#regemployee">Add Employee </a>
                        </li>
                      </ul>
                  </ul>
                  <div class="clearfix">
                    {{csrf_field()}} @if(session('error'))
                    <script>
                      $(function () {
                        $('#regemployee').modal('show');
                      });
                    </script>
                  </div>
                  <div>
                    @endif @if(session('success'))
                    <div class="form-control alert alert-success">
                      {{session('success')}}
                    </div>
                    @endif
                  </div>
                </div>
                <div class="x_content">
                  <table id="datatable" class=" bulk_action table table-striped table-bordered  table-hover" id="default">
                    <thead>
                      <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">DNC ID</th>
                        <th class="text-center">Department</th>
                        <th class="text-center">Employee-Status</th>
                        <th class="text-center">Joining Date</th>
                        <th class="text-center">Email</th>
                      </tr>
                    </thead>
                    <tbody id="employee-info">
                      @foreach ($users as $user)
                      <tr>
                        <td class="text-center">
                          <a href="#">{{$user->first_name}} </a>
                         
                        </td>
                        <td class="text-center">{{$user->id}}</td>
                        <td class="text-center">{{$user->depart}}</td>
                        <td class="text-center">
                          @foreach($user->employee_sat as $res) @if($res->completed <1) <a href="#" class=" value text-primary">
                            Pending</a>
                            @elseif($res->completed ===1)
                            <a href="#" id="userstatus" class=" value text-success">
                              <i class="userstatus ">Active</i>

                              @if($user->logstatus==1)
                              <i class="userstatus ">Loged-In</i>
                              @endif

                            </a>
                            @elseif($res->completed ===2)
                            <a href="#" id="userstatusac" class=" value text-danger">
                              <i class="activuser ">Deactive</i>
                            </a>
                            @endif @endforeach
                        </td>
                        <td class="text-center">{{$user->created_at}}</td>
                        <td class="text-center">{{$user->email}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>     
            <div class="modal fade" id="exampleModalLabel" tabindex="-1" role="dialog">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title">Select option</h4>
                    </div>
                    <div class="modal-body">
                      <a class="btn btn-app">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                      <a class="btn btn-app" href="#department" data-toggle="modal" data-dismiss="modal">
                        <i class="fa fa-users"></i> Manage Department
                      </a>
                      <a class="btn btn-app">
                        <i class="fa fa-inbox"></i> Orders</a>
                      <a class="btn btn-app" href="{{ url('/ChatMessage') }}">
                        <span class="badge bg-orange">12</span>
                        <i class="fa fa-envelope"></i> Inbox
                      </a>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                      <input type="submit" value="Register" class="btn btn-success pull-right">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="department" tabindex="-1" role="dialog">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="new">Add New Department</h4>
                      <h4 class="modal-title" id="new2">Select Option</h4>
                    </div>
                    <div class="modal-body">
                      <form action="create_department" method="POST">
                        {{csrf_field()}}
                        <div id="mainmenu">
                          <a class="btn btn-app" id="try2">

                            <i class="fa fa-plus-square"></i>Add New Department
                          </a>
                          <a class=" btn btn-app" id="try">

                            <i class="fa fa-user-plus" href="#others" data-toggle="modal" data-dismiss="modal"></i>Add
                            New Bands
                          </a>
                        </div>
                        <div id="adddpt">
                          <div class="input-group">
                            <div class="input-group">
                              <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                              </span>
                              <input type="text" name="ptdepartmnet_id" class="form-control" placeholder="Department Id">
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                              </span>
                              <input type="text" name="ptdepartmnet_name" class="form-control" placeholder="Department Name">
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger pull-right closemenu" data-dismiss="modal">Close</button>
                          <input type="submit" value="Register" class="btn btn-success pull-right closemenu" id="closemenu">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="others" tabindex="-1" role="dialog">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title">Add new Patient Band</h4>
                    </div>
                    <div class="modal-body">
                      <form action="addnewband" method="POST">
                        {{csrf_field()}}
                        <div class="input-group">
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-user"></i>
                            </span>
                            <input type="text" name="bandid" class="form-control" placeholder="Bandid">
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-user"></i>
                            </span>
                            <input type="text" name="macid" class="form-control" placeholder="MAC Address">
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-user"></i>
                            </span>
                            <input type="text" name="ipadd" class="form-control" placeholder="IP-Address">
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                      <button type="submit" value="1" name="status" class="btn btn-success pull-right"> ADD</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="avialable" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  " role="document">
              <div class="modal-content">
                <div class="modal-header btn-success">
                  <h5 class="modal-title">Band</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th class="text-center">BAND-ID</th>
                        <th class="text-center">MAC Address</th>
                        <th class="text-center">IP-Address</th>
                        <th class="text-center">Registered Date </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($Avilable as $avilable)
                      <tr class="text-center">
                        <td>{{$avilable->band_id}}</td>
                        <td>{{$avilable->mac_id}}</td>
                        <td>{{$avilable->ipaddress}}</td>
                        <td>{{date('d F, Y', strtotime($avilable->created_at))}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  {{--  <button type="button" class="btn btn-primary">Save changes</button>  --}}
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="regemployee" tabindex="-1" role="dialog">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <form action="/employeeRegistration" method="POST">
                {{csrf_field()}}
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header  btn-success ">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title">Add Employee</h4>
                    </div>
                    <div class="modal-body">
                      @if(session('error'))
                      <div class=" alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <script>
                          swal("Hello world!");
                        </script>
                        <strong>Error</strong>
                        {{session('error')}}
                      </div>
                      @endif
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                          </span>
                          <input type="text" name="first_name" class="form-control" placeholder="Employee Name">
                          <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                          </span>
                          <select class="form-control" name="admin">
                            <option>Select Role</option>
                            @foreach ($role as $user_role)
                            <option value="{{$user_role->slug}}">{{$user_role->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                          </span>
                          <input type="text" name="last_name" class="form-control" placeholder="Last_Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                          </span>
                          <select class="form-control" name="position" placeholder="Hierarchy">
                            <option class="input-group-addon">Select Hierarchy</option>
                            <option class="dropdown-item" value="nurse-fornt-office">Nurse </option>
                            <option class="dropdown-item" value="front-operator">Executive</option>
                            <option class="dropdown-item" value="doctor">Doctor</option>
                            <option class="dropdown-item" value="admin"> Administrator</option>
                            <option class="dropdown-item" value="nurse-clinical"> Clinical Nurse</option>
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                          </span>
                          <input type="email" name="email" class="form-control" placeholder="example@sample.com">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                          </span>
                          <input type="password" name="password" class="form-control" placeholder="Select-Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                          </span>
                          <input type="password" name="password" class="form-control" placeholder="Select-Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                          </span>
                          <input type="text" name="employee_id" class="form-control" placeholder="Employee-ID">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-cubes"></i>
                          </span>
                          <select class="form-control" name="depart">
                            <option>Department</option>
                            @foreach ($depart as $patient)

                            <option value="{{$patient->department_id}}">{{$patient->department_name}}</option>
                            @endforeach

                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer  ">
                      <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                      <input type="submit" value="Register" class="btn btn-success pull-right">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal" id="active" role="dialog">
            <div class="modal-dialog btn-outline-warning" role="document">
              <div class="modal-content">
                <div class="modal-header btn-success">
                  <h3 class="modal-title">Activate User</h3>

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body foot">
                  <form class="col-md-12 col-sm-6 col-xs-12" action="/useractivation" method="POST">
                    {{csrf_field()}} @if(session('eorr'))
                    <script>
                      $(function () {

                        swal("Sorry", "Unauthorised Request Contact Your Admin", "error");
                      });
                    </script>

                    @endif @if(session('rdem'))
                    <script>
                      $(function () {

                        swal("", "User Deactivated", "success");
                      });
                    </script>

                    @endif &nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;
                    &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp; &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
                    <i align="center" class="fa fa-check-square" style="font-size:42px;color:green">
                      <br>
                      <a>Sure Aactivate user</a>
                    </i>
                    <div class="form-group">
                      <label for="password" class="col-form-label">Your password:</label>
                      <input type="password" name="password" class="form-control" id="password2">
                      <input type="hidden" name="act" id="act" value="1">
                      <input type="hidden" name="eid" id="aid">
                      <input type="hidden" name="email" id="act" value="{{Sentinel::getUser()->email}}">
                    </div>
                </div>
                <div class="  modal-footer foot  ">
                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <button type="submit" class="btn btn-warning">Activate</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <script>
            $('.activuser').on('click', function () {
              $('#active').modal('show')
              $("#aid").val($(this).closest('tr').children()[1].textContent);
            });
          </script>
          <div id="deactive" class="modal fade  " role="dialog">
            <div class="modal-dialog  modal-lg">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header btn-danger ">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Deactivated User List</h4>
                </div>
                <div class="modal-body">
                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th>
                            <input type="checkbox" id="check-all" class="flat">
                          </th>
                          <th class="column-title">User </th>
                          <th class="column-title">User E-mail </th>
                          <th class="column-title">Activation Date </th>
                          <th class="column-title">Deactivation Date </th>
                          <th class="column-title">Deactivating Reasons </th>
                          <th class="column-title">Deactivated BY </th>

                          <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions (
                              <span class="action-cnt"> </span> )
                              <i class="fa fa-chevron-down"></i>
                            </a>
                          </th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach( $deactive_user as $duser)
                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">{{$duser->first_name}}</td>
                          <td class=" "> {{$duser->email}} </td>
                          <td class=" ">{{date('d F, Y', strtotime($duser->created_at))}}</td>
                          @foreach ($duser->employee_sat as $dduser)
                          <td class=" ">{{date('d F, Y', strtotime($dduser->updated_at))}} </td>
                          <td class=" ">{{ $dduser->reason}}</td>
                          <td class=" ">{{ $dduser->action_by}}</td>
                          @endforeach
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal" id="usersta" role="dialog">
            <div class="modal-dialog btn-outline-warning" role="document">
              <div class="modal-content">
                <div class="modal-header btn-success">
                  <h3 class="modal-title fa fa-warning" style="font-size:42px;color:red">
                    <a>DEACTIVATE USER </a>
                  </h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body foot">
                  <form action="/useraction" method="POST">
                    {{csrf_field()}} @if(session('eorr'))
                    <script>
                      $(function () {
                        swal("Sorry", "Unauthorised Request Contact Your Admin", "error");
                      });
                    </script>
                    @endif @if(session('sucess'))
                    <script>
                      $(function () {
                        swal("", "User Activated", "success");
                      });
                    </script>
                    @endif
                    <input id="gs" type="text" disabled name="eid" style="font-size:42px;color:red">
                    <div class="form-group">
                      <label for="password" class="col-form-label">Your password:</label>
                      <input type="password" name="password" class="form-control" id="password">
                      <input type="hidden" name="act" id="deact1" value="2">
                      <input type="hidden" name="eid" id="eid">
                      <input type="{{Sentinel::getUser()->email}}" hidden name="email" id="deact" value="{{Sentinel::getUser()->email}}">
                    </div>
                    <div class="form-group">
                      <label for="reasons" class="col-form-label">Reasons:</label>
                      <textarea class="form-control" name="res" id="reasons"></textarea>
                    </div>
                </div>
                <div class="modal-footer foot ">
                  <button type="submit" class="btn btn-warning">Deactivate</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal fade" id="damagebnd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg " role="document">
              <div class="modal-content">
                <div class="modal-header btn-danger">
                  <h5 class="modal-title" id="exampleModalLabel">Damage-Band</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>

                        <th>BAND-ID</th>
                        <th>MAC Address</th>
                        <th>IP-Address</th>
                        <th>Damage Date </th>
                        <th>Problems</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($damage as $bdamage)
                      <tr>

                        <td>{{$bdamage->band_id}}</td>
                        <td>{{$bdamage->mac_id}}</td>
                        <td>{{$bdamage->ipaddress}}</td>
                        <td>{{date('d F, Y', strtotime($bdamage->updated_at))}}</td>
                        <td>{{$bdamage->problem}}</td>

                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 {{--   <button type="button" class="btn btn-primary">Save changes</button>  --}}
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="throttle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog-lg" role="document">
              <div class="modal-content">
                <div class="modal-header btn-success ">
                  <h5 class="modal-title" id="exampleModalLabel">User-Staus</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="clearfix"></div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>EMPLOYEE LIST </h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li>
                              <a href="#" class="fa fa-refresh " id="read-data" type="buttonpp" aria-hidden="true"
                                data-toggle="tooltip" data-placement="top" title="REFERSH LIST" onclick="switchVisible();"></a>
                            </li>
                            <li>...</li>
                            <li class="dropdown">

                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="ADD-EMPLOYEE"></i>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                <li>
                                  <a id="#try" href="#" data-toggle="modal" data-target="#regemployee">Add Employee </a>
                                </li>
                              </ul>
                          </ul>
                          <div class="clearfix">
                          </div>
                        </div>
                        <div class="x_content">
                          <table id="datatable" class=" bulk_action table table-striped table-bordered  table-hover">
                            <thead>
                              <tr>
                                <th>Throttle-ID</th>
                                <th>User-id</th>
                                <th>TYPE</th>
                                <th>IP-Address</th>
                                <th>DATE</th>
                              </tr>
                            </thead>
                            <tbody id="employee-info">
                              @foreach ($thrt as $thr)
                              <tr>
                                <td>{{$thr->id}}</td>
                                <td>{{$thr->user_id}}</td>
                                <td>{{$thr->type}}</td>
                                <td>{{$thr->ip}}</td>
                                <td>{{$thr->created_at->diffForHumans()}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="throttle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header btn-success ">
                    <h5 class="modal-title" id="exampleModalLabel">User-Staus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="clearfix"></div>
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>EMPLOYEE LIST </h2>
                            <ul class="nav navbar-right panel_toolbox">

                              <li>
                                <a href="#" class="fa fa-refresh " id="read-data" type="buttonpp" aria-hidden="true"
                                  data-toggle="tooltip" data-placement="top" title="REFERSH LIST" onclick="switchVisible();"></a>
                              </li>
                              <li>...</li>
                              <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  <i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="ADD-EMPLOYEE"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                  <li>
                                    <a id="#try" href="#" data-toggle="modal" data-target="#regemployee">Add Employee
                                    </a>
                                  </li>
                                </ul>
                            </ul>
                            <div class="clearfix">
                            </div>
                          </div>
                          <div class="x_content">
                            <table id="datatable" class=" bulk_action table table-striped table-bordered  table-hover">
                              <thead>
                                <tr>
                                  <th>Throttle-ID</th>
                                  <th>User-id</th>
                                  <th>TYPE</th>
                                  <th>IP-Address</th>
                                  <th>DATE</th>
                                </tr>
                              </thead>
                              <tbody id="employee-info">
                                @foreach ($thrt as $thr)
                                <tr>
                                  <td>{{$thr->id}}</td>
                                  <td>{{$thr->user_id}}</td>
                                  <td>{{$thr->type}}</td>
                                  <td>{{$thr->ip}}</td>
                                  <td>{{$thr->created_at->diffForHumans()}}</td>

                                </tr>
                                @endforeach

                              </tbody>


                            </table>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    </div>
                  </div>
                </div>
              </div>
              <script>
                $('.userstatus').on('click', function () {
                  $('#usersta').modal('show');

                  $("#gs").val($(this).closest('tr').children()[1].textContent);
                  $("#eid").val($(this).closest('tr').children()[1].textContent);
                });
              </script>
           
           {{--     <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>    --}}
              <script type="text/javascript" src="{{ URL::asset('admincss/jquery/dist/jquery.min.js') }}"></script>

              <!-- Bootstrap -->
              <script type="text/javascript" src="{{ URL::asset('admincss/bootstrap/dist/js/bootstrap.min.js') }}"></script>


              <!-- NProgress -->
              <script type="text/javascript" src="{{ URL::asset('admincss/nprogress/nprogress.js') }}"></script>

              <!-- Chart.js -->


              <!-- gauge.js -->



              <!-- Flot -->
              <script src="{{ URL::asset('admincss/Flot/jquery.flot.js') }}"></script>
              <script src="{{ URL::asset('admincss/Flot/jquery.flot.pie.js') }}"></script>
              <script src="{{ URL::asset('admincss/Flot/jquery.flot.time.js') }}"></script>
              <script src="{{ URL::asset('admincss/Flot/jquery.flot.stack.js') }}"></script>
              <script src="{{ URL::asset('admincss/Flot/jquery.flot.resize.js') }}"></script>


              <!-- Flot plugins -->

              <script src="{{ URL::asset('admincss/flot-spline/js/jquery.flot.spline.min.js') }}"></script>


              <!-- DateJS -->
              <script src="{{ URL::asset('admincss/DateJS/build/date.js') }}"></script>

              <!-- JQVMap -->

              <script src="{{ URL::asset('admincss/jqvmap/dist/jquery.vmap.js') }}"></script>
              <script src="{{ URL::asset('admincss/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
              <script src="{{ URL::asset('admincss/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>


              <!-- bootstrap-daterangepicker -->
              <script src="{{ URL::asset('admincss/moment/min/moment.min.js') }}"></script>
              <script src="{{ URL::asset('admincss/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

              <!-- Custom Theme Scripts -->
              <script src="{{ URL::asset('admincss/build/js/custom.min.js') }}"></script>
              <script src="{{ URL::asset('admincss/build/js/custom.js') }}"></script>
              <!--Custom Admin Js -->
              <script src="{{ URL::asset('admincss/build/js/admin.js') }}"></script>
              <script src="{{ URL::asset('admincss/build/js/toggle.js') }}"></script>
              <!--/Custom Admin Js -->
              <script type="text/javascript" src="{{ URL::asset('admincss/datatables.net/js/jquery.dataTables.min.js') }}"></script>
              <script type="text/javascript" src="{{ URL::asset('admincss/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

              <!-- <script type="text/javascript"  src="{{ URL::asset('admincss/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admincss/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script type="text/javascript"  src="{{ URL::asset('admincss/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script type="text/javascript"  src="{{ URL::asset('admincss/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
<script  type="text/javascript" src="{{ URL::asset('admincss/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script> -->
              <script type="text/javascript" src="{{ URL::asset('admincss/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
              <script type="text/javascript" src="{{ URL::asset('admincss/build/js/sweetalert.min.js') }}"></script>
</body>
</html>
<script type="text/javascript">
  $('#try').on('click', function () {

    $.get("{{ URL::to('employeeView/read-data')}}", function (data) {

      $.each(data, function (i, value) {
        var tr = $("<tr/>");
        tr.append($("<td/>", {
          text: value.first_name
        }))
        $('#control').append(tr);
      });

    })

  })
</script>

<script>
  $(document).ready(function () {
    $("#adddpt").hide();
    $("#new").hide();


    $("#try2").click(function () {
      $("#adddpt").show();
      $("#new").show();
      $("#new2").hide();

      $("#mainmenu").hide();
    });
    $("#try").click(function () {
      $("#mainmenu").show();
    });
    $(".closemenu").click(function () {
      $("#adddpt").hide();
      $("#new").hide();
      $("#new2").show();
    });
    $(".closemenu").click(function () {
      $("#mainmenu").show();
    });
  });
</script>