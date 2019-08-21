<!DOCTYPE html class="col-md-12 col-sm-8 col-xs-8"> @if(Sentinel::check()) @else
<script>
    window.location = "{{ url('/login') }}";
    alert("check inputs");
</script> @endif


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PATIENT REPORT</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <script src="{{ URL::asset('admincss/build/js/main.js') }}"></script>
    <!-- Bootstrap -->
    <link href="{{asset('admincss/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admincss/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
   
    <link href="{{asset('admincss/build/css/custom.min.css')}}" rel="stylesheet" type="text/css">
   
    <!--DATATABLE-->
</head>
<body>
    <div class="top_nav ">
        <div class="nav_menu">
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle">
                        <i class="fa fa-cog fa-spin"></i>
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <h1 class="nav navbar-nav navbar-left" id="pagetitile">DN-CARE</h1>
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span class=" fa fa-angle-down"></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    @if($notavail <1) 
    <div class="col-md-12 col-sm-8 cols-xs-8" id="graph_msg">
       <h1 class="huge"> DATA UNAVIALBLE</h1>
       </div>
     @endif
        @if($show==2)
        <div class="top_nav " id="graphpannel">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Patient Health Status</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-wrench"></i>
                            </a>
                        </li>
                        <li>
                            <a class="close-link">
                                <i class="fa fa-close"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="top_nav ">
                    <div class="x_panel ">
                        <div class="x_title">
                            <h2>BODY TEMP</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix">
                            </div>
                        </div>
                        <div >
                            <center>
                                {!! Charts::styles() !!} {!! $ch->html() !!}
                            </center>
                        </div>
                        <!-- End Of Main Application -->
                        {!! Charts::scripts() !!} {!! $ch->script() !!}
                    </div>
                    <div class="top_nav ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Blood-Pressure</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </li>

                                </ul>
                                <div class="clearfix">
                                </div>
                            </div>
                            <div class="app col-md-12 col-sm-10 col-xs-10">
                                <center>
                                    {!! Charts::styles() !!} {!! $tt->html() !!}
                                </center>
                            </div>
                            <!-- End Of Main Application -->
                            {!! Charts::scripts() !!} {!! $tt->script() !!}
                        </div>
                        <div class="top_nav ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>OXygen Level</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li>
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="clearfix">
                                    </div>
                                </div>
                                <div class="x_content col-md-12 col-sm-8 col-xs-8">
                                    <div id="mainb" class="col-md-12 col-sm-8 col-xs-8"></div>
                                    <div class="app col-md-12 col-sm-10 col-xs-10">
                                        <center>
                                            {!! Charts::styles() !!} {!! $oxychart->html() !!}
                                        </center>
                                    </div>
                                    <!-- End Of Main Application -->
                                    {!! Charts::scripts() !!} {!! $oxychart->script() !!}
                                </div>
                                <div class="top_nav ">
                                    <div class="x_panel col-md-12 col-sm-8 col-xs-8">
                                        <div class="x_title">
                                            <h2>Heart-Rate</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li>
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                        <div class="top_nav">
                                            <div class="app col-md-12 col-sm-10 col-xs-10">
                                                <center>
                                                        {!! Charts::styles() !!} {!! $bloodp->html() !!}
                                                         <!-- End Of Main Application -->
                                                    {!! Charts::scripts() !!} {!! $bloodp->script() !!}
                                                </center>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <br> @endif
                             @if($show==1)
                            <div class="col-md-12 col-sm-8 cols-xs-8">
                                <h1 class="huge"> PLEASE SELECT THE OPTIONS</h1>
                            </div>
                            @endif
                            <div class="top_nav ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>
                                            <i class="fa fa-bars"></i> Choose Options

                                        </h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li>
                                                <a class="collapse-link">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                    <i class="fa fa-wrench"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Settings 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="close-link">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <form id="lifetime" data-parsley-validate class="form-horizontal form-label-left" action="/life" method="POST">
                                            {{csrf_field()}}
                                            <div class="top_nav">
                                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Patient Admission No</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <select id="heard" class="form-control" name="issuept" required>
                                                        <option value="">Choose..</option>
                                                        @foreach( $patientlist as $patlis)
                                                        <option value="{{$patlis->issue_id}}">{{$patlis->issue_id}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button class="btn btn-primary baf" type="button">Cancel</button>
                                                    <button class="btn btn-primary" type="reset">Reset</button>
                                                    <button type="submit" class="btn btn-success baf ">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <form id="today" data-parsley-validate class="form-horizontal form-label-left" action="/gettodaychart" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Patient Admission No</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select id="heard" class="form-control" name="admino" required>
                                                    <option value="">Choose..</option>
                                                    <option value="">Choose..</option>
                                                    @foreach($patientadno as $pat)
                                                    <option value="{{$pat->assin}}">{{$pat->assin}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button class="btn btn-primary baf" type="button">Cancel</button>
                                                <button class="btn btn-primary" type="reset">Reset</button>
                                                <button type="submit" class="btn btn-success baf">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <form id="addpatient" data-parsley-validate class="form-horizontal form-label-left" action="/getchart" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="form">From
                                                <span class="required">*</span>
                                            </label>
                                            <div class="container">
                                                <div class="row">
                                                    <div class='col-sm-6'>
                                                        <div class="form-group">
                                                            <div class='input-group date' name="start-date" required="required" id='datetimepicker1'>
                                                                <input type='text' name="from" required="required" class="form-control" />
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script type="text/javascript">
                                                        $(function () {
                                                            $('#datetimepicker1').datetimepicker({
                                                                format: 'YYYY/MM/DD-HH:mm:ss'
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="to">To
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-6'>
                                                            <div class="form-group">
                                                                <div class='input-group date' name="to" required="required" id='datetimepicker2'>
                                                                    <input type='text' name="dateto" required="required" class="form-control" />
                                                                    <span class="input-group-addon">
                                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <script type="text/javascript">
                                                            $(function () {
                                                                $('#datetimepicker2').datetimepicker({
                                                                    format: 'YYYY/MM/DD-HH:mm:ss'
                                                                });
                                                            });
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Patient Admission No</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <select id="heard" class="form-control" name="admino" required>
                                                        <option value="">Choose..</option>
                                                        @foreach($patientadno as $pat)
                                                        <option value="{{$pat->assin}}">{{$pat->assin}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button class="btn btn-primary baf" type="button">Cancel</button>
                                                    <button class="btn btn-primary" type="reset">Reset</button>
                                                    <button type="submit" class="btn btn-success baf">Submit</button>
                                                </div>
                                            </div>
                                       </form>
                                    </div class "col-md-12 col-sm-12 col-xs-8 ">
                                    <div id="maincolum">
                                        <a class="btn btn-app col-md-12 col-sm-12 col-xs-8 " id="adpa">
                                            <i class="fa fa-calendar"></i>Admitted Patient
                                        </a>
                                        <a class="btn btn-app col-md-12 col-sm-12 col-xs-8  " id="td">
                                            <i class="fa fa-edit"></i>Today Report
                                        </a>
                                        <a class="btn btn-app col-md-12 col-sm-12 col-xs-8 " id="lf">
                                            <i class="fa fa-inbox"></i>Lifetime Report
                                        </a>
                                    </div>
                            </body>
<script>
        $(document).ready(function () {
            var x = 2;

            $('#today').hide();
            $('#lifetime').hide();
            $('#addpatient').hide();
            $('#maincolum').show();

            $('#adpa').click(function () {
                $('#addpatient').show();
                $('#maincolum').hide();
            });
            $('.baf').click(function () {
                $('#today').hide();
                $('#lifetime').hide();
                $('#addpatient').hide();
                $('#maincolum').show();

            });
            $('#td').click(function () {
                $('#today').show();
                $('#maincolum').hide();

            });
            $('#lf').click(function () {
                $('#lifetime').show();
                $('#maincolum').hide();
            });
            if (x=2) {
                $('#graphpanel').show();
                $('#graph_msg').hide();

            } else {
                $('#graphpanel').hide();
                $('graph_msg').show();

            }
        });

    </script>
    <script src="{{ URL::asset('admincss/moment/min/moment.min.js') }}"></script>
    <script src="{{ URL::asset('admincss/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ URL::asset('admincss/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
</html>