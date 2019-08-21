@extends('admin.layout.AdminLayout')
@section('right_col')
<link href="{{asset('admincss/build/css/register.css')}}"rel="stylesheet" type="text/css">
  <div class="right_col" role="main">
      <div class="mail-box">
          <div class="panel panel-success col-md 12 ">
            <div class="panel-heading messageHeader" > <h4>Quick Communication</h4> </div>
            <div class="panel-body messageHeader " id="app">
              <chat-app :user="{{Sentinel::getUser()}}">
              </chat-app>
            </div>
          </div>
        </div>
       <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>  -
  </div>
  <style>
    .messageHeader{
    
      padding-top: 25px;
      border: 3px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
  </style>
  @endsection
