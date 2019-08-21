
<!DOCTYPE HTML>
<html lang="en-En">
<head>
<title>DNC</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
<link href="{{asset('admincss/bootstrap/dist/css/bootstrap.min.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/font-awesome/css/font-awesome.min.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/nprogress/nprogress.css')}}"rel="stylesheet" type="text/css">


<link href="{{asset('admincss/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/jqvmap/dist/jqvmap.min.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/bootstrap-daterangepicker/daterangepicker.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/build/css/custom.min.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/build/css/register.css')}}"rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="images/heaD.ico">

<!--DATATABLE-->
    <link href="{{asset('admincss/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admincss/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admincss/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admincss/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admincss/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css">
     
 
   
  </head>

  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title">  <img src="images/heaD.ico" alt=""/><img src="images/n.ico" alt=""/><img src="images/cc.ico" alt=""/></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="/uploads/avatars/{{Sentinel::getUser()->avatar}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <h2>DN-CARE</h2>
              <span> @if(Sentinel::check())
                    WELCOME {{Sentinel::getUser()->depart}}
                    @endif
              </span>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-medkit"></i> GENERAL ACCESS<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li> <a href="{{ url('register') }}">Registrations</a></li>
                      @if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug =='nurse')
                      <li><a href="{{ url('nursehome') }}">Home</a></li>
                      <li id="register"> <a href="#" value="Open popup" onclick="window.open('/nurs','My Window','height=600,top=580,left=400')">Patients Reports</a></li>
                      <li> <a href="{{ url('timel') }}">Average Vitals</a></li>
                      @elseif(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug =='admin')
                       <li>@if(Sentinel::check())
                        <li><a href="{{ url('/employeeView') }}" >Employee-Reg</a></li>
                        @endif
                         @endif
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Communication <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/Mail') }}">MAIL</a></li>
                         <li>
                           <a href="{{ url('/ChatMessage') }}" type="submit">Message</a>
                          </li>
                    </ul>
                  </li>
              </div>

              <div class="menu_section">
                <ul class="nav side-menu">
                  @if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug =='nurse')
                  @elseif(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug =='admin')
                  @endif
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

          
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog fa-spin" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <form action="/logout" method="post" class="logout-form" onsubmit="alert('test');">
                {{csrf_field()}}
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"  onclick="document.getElementsByClassName('logout-form').submit();"></span>
              </a>

              </form>
            </div>
           
          </div>
        </div>
     
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-cog fa-spin"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="/uploads/avatars/{{Sentinel::getUser()->avatar}}" alt="">{{Sentinel::getUser()->first_name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li>
                        <a href="/profile"> Profile</a>
                      </li>
                      <li>
                        <a href="">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                      </li>
                      <li>
                        <a href="">Help</a>
                      </li>
                 
                   
                        <li id="logoutbtun" >
                          <a href="/logout" id="logoutbtun">
                            <i class="fa fa-sign-out pull-right"></i> Log Out</a>
                        </li>
                      </form>
                    </ul>
                      <li role="presentation" class="dropdown">
                        <a href="" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-envelope-o"></i>
                          <span class="badge bg-green">6</span>
                        </a>
                        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                          <li>
                            <a>
                              <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                              <span>
                                <span>John Smith</span>
                                <span class="time">3 mins ago</span>
                              </span>
                              <span class="message">
                                Film festivals used to be do-or-die moments for movie makers. They were where...
                              </span>
                            </a>
                          </li>
                          <li>
                            <a>
                              <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                              <span>
                                <span>John Smith</span>
                                <span class="time">3 mins ago</span>
                              </span>
                              <span class="message">
                                Film festivals used to be do-or-die moments for movie makers. They were where...
                              </span>
                            </a>
                          </li>
                          <li>
                            <a>
                              <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                              <span>
                                <span>John Smith</span>
                                <span class="time">3 mins ago</span>
                              </span>
                              <span class="message">
                                Film festivals used to be do-or-die moments for movie makers. They were where...
                              </span>
                            </a>
                          </li>
                          <li>
                            <a>
                              <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                              <span>
                                <span>John Smith</span>
                                <span class="time">3 mins ago</span>
                              </span>
                              <span class="message">
                                Film festivals used to be do-or-die moments for movie makers. They were where...
                              </span>
                            </a>
                          </li>
                          <li>
                            <div class="text-center">
                              <a>
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                              </a>
                            </div>
                          </li>
                       </ul>
                   </li>
                </ul>
             </nav>
           </div>
        </div>
      

        @yield('right_col')
       
        
      </div>
    </div>

      

  
 
  </body>
         <script  src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="  crossorigin="anonymous"></script>
   
        <script type="text/javascript" src="{{ URL::asset('admincss/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('admincss/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('admincss/nprogress/nprogress.js') }}"></script>
      
        <script  src="{{ URL::asset('admincss/Flot/jquery.flot.js') }}"></script>
        <script  src="{{ URL::asset('admincss/Flot/jquery.flot.pie.js') }}"></script>
        <script  src="{{ URL::asset('admincss/Flot/jquery.flot.time.js') }}"></script>
        <script  src="{{ URL::asset('admincss/Flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ URL::asset('admincss/Flot/jquery.flot.resize.js') }}"></script>
        <script  src="{{ URL::asset('admincss/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
        <script src="{{ URL::asset('admincss/DateJS/build/date.js') }}"></script>
        <script  src="{{ URL::asset('admincss/jqvmap/dist/jquery.vmap.js') }}"></script>
        <script  src="{{ URL::asset('admincss/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
        <script  src="{{ URL::asset('admincss/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
        <script  src="{{ URL::asset('admincss/moment/min/moment.min.js') }}"></script>
        <script  src="{{ URL::asset('admincss/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script  src="{{ URL::asset('admincss/build/js/custom.min.js') }}"></script>
        <script  src="{{ URL::asset('admincss/build/js/custom.js') }}"></script>
        <script src="{{ URL::asset('admincss/build/js/admin.js') }}"></script>
        <script src="{{ URL::asset('admincss/build/js/toggle.js') }}"></script>
     
        <script type="text/javascript" src="{{ URL::asset('admincss/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('admincss/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
        <script type="text/javascript"  src="{{ URL::asset('admincss/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
        <script  type="text/javascript" src="{{ URL::asset('admincss/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script> -->
        <script type="text/javascript" src="{{ URL::asset('admincss/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('admincss/build/js/sweetalert.min.js') }}"></script>
        <script  src="{{ URL::asset('admincss/fastclick/lib/fastclick.js') }}"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <script>
          $('.tat').on('click',function(){
            $('#issueband').modal('show');
            $("#MRD").val($(this).closest('tr').children()[0].textContent); // Find the text
            $("#NAME").val($(this).closest('tr').children()[2].textContent);
            $("#issueid").val($(this).closest('tr').children()[1].textContent);
            $("#age").val($(this).closest('tr').children()[3].textContent);
            $("#sex").val($(this).closest('tr').children()[4].textContent);
         
        });
          $(document).ready(function(){
            $("#newpatient ").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#new_patient_table   tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
            $("#dischargelist  ").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#discharge_patient_table   tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });
        
        </script>
        <script>
           $('.go').on('click',function(){
            $('#collect').modal('show');
           
            $("#mrd").val($(this).closest('tr').children()[0].textContent);  
            $("#issue").val($(this).closest('tr').children()[1].textContent);// Find the text
            $("#assin").val($(this).closest('tr').children()[4].textContent);
            $("#name").val($(this).closest('tr').children()[2].textContent);
            $("#age").val($(this).closest('tr').children()[3].textContent);
            $("#sex").val($(this).closest('tr').children()[4].textContent);
            $("#band_id").val($(this).closest('tr').children()[7].textContent);
            $("#depart").val($(this).closest('tr').children()[6].textContent);
           /*  $("#department_id").val($(this).data('department_id'));  */
         
            // for changing band model //
              $("#changeMRD").val($(this).closest('tr').children()[0].textContent);  
              $("#changeNAME").val($(this).closest('tr').children()[2].textContent);
              $("#change_add_no").val($(this).closest('tr').children()[4].textContent);
              $("#changeissueid").val($(this).closest('tr').children()[1].textContent);
              $("#currentband").val($(this).closest('tr').children()[6].textContent);
           
            });
        </script>
        
        <script >
           $('.change').on('click',function(){
            $('#changeband').modal('show');
            });
        </script>
        <script>
        function randomString() {
            var chars = "0123456789";
            var string_length = 8;
            var randomstring = '';
            for (var i=0; i<string_length; i++) {
                var rnum = Math.floor(Math.random() * chars.length);
                randomstring += chars.substring(rnum,rnum+1);
            }
            document.newpatient.assin.value = randomstring;
        }
        function issueidno() {
            var chars = "0123456789";
            var string_length = 8;
            var randomstring = '';
            for (var i=0; i<string_length; i++) {
                var rnum = Math.floor(Math.random() * chars.length);
                randomstring += chars.substring(rnum,rnum+1);
            }
            document.newpatient.issue_id.value = randomstring;
        }
        function mrdno() {
            var chars = "012345ABCDE";
            var string_length = 5;
            var randomstring = '';
            for (var i=0; i<string_length; i++) {
                var rnum = Math.floor(Math.random() * chars.length);
                randomstring += chars.substring(rnum,rnum+1);
            }
            document.newpatient.mrd.value = randomstring;
        }
        </script>
        <script >
          $(document).ready(function(){
             $.get("{{ URL::to('employeeView/read-data')}}",function(data){
        
                $.each(data,function(i,value){
                  var tr =$("<tr/>");
                      tr.append($("<td/>",{
                        text :value.first_name
                      }))
                    $('#control').append(tr);   
                });
        
              })
        
             });
        </script>
        <script>
          
          $(document).ready(function(){
           $("#collectband").hide();
            $("#secondmenu").hide();
             $("#mainmenu").show();
        
             $("#try2").click(function(){
                $("#collectband").show();
                 $("#mainmenu").hide();
        
                });
                 $(".new").click(function(){   
                  $("#collectband").hide();
                    $("#secondmenu").hide();
                    $("#mainmenu").show();
                   });
                
            });
        </script>
        
</html>
