@extends('admin.layout.AdminLayout')
@section('right_col')
<link href="{{asset('admincss/build/css/register.css')}}"rel="stylesheet" type="text/css">
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="right_col" role="main">
  <div class="col-md-10 col-md-offset-1 btn btn-info ">
      <img src="/uploads/avatars/{{$user->avatar}}" id="image_src" style="width:150px; hight:150px; float:left; border-radius: 50%; margin-right:25px;">
      <h2> Welcome: {{$user->first_name}}</h2>
      <label>Update Profile Image</label>
      <form enctype="multipart/form-data" action="/uploadProfilePic" method="POST">
          <input type="file" class="btn btn-sm btn-primary" name="avatar" id="input_image" >
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <button type="submit" class="pull-right btn btn-sm btn-primary"> Click to Update Avatar</button>
      </form>
  </div>
  <div class="container " style="padding-left:100px;">
    <div class="row" style="padding-left:10px;">
      
        <div class="col-md-9 personal-info" style="padding-top:20px;">
          
          <form class="form-horizontal"  role="form">
            {{csrf_field()}}
            <div class="form-group">
              <label class="col-lg-3 control-label">First name:</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="first_name" value="{{$user->first_name}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Last name:</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="last_name" value="{{$user->last_name}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Mobile: </label>
              <div class="col-lg-8">
                     @if($user->mobile == null)
                     <input class="form-control" type="text" name="mobile" placeholder="No Mobile Number Added">
                     @else 
                     <input class="form-control" type="text" name="mobile" value="{{$user->mobile}}">
                    @endif  
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Email:</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="email" value="{{$user->email}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">
                <input type="submit" class="btn btn-primary " id="updateUser" value="Save Changes">
                <span></span>
                <input type="reset" class="btn btn-default" value="Cancel">
              </div>
            </div>
          </form>
        </div>
    </div>
    <input type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#passwordUpdate" value="Update Password">
  </div>
  <hr>
  <div class="modal fade" id="passwordUpdate" role="dialog">
    <div class="modal-dialog"
      <div class="modal-content">
        <div class="modal-header btn-info">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{$user->first_name}}</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-md-3 control-label"> Current Password:</label>
                    <div class="col-md-8">
                      <input class="form-control" id="current_password" type="password" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">New Password:</label>
                    <div class="col-md-8">
                      <input class="form-control" id="new_password" type="password" value=""  required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Confirm New Password:</label>
                    <div class="col-md-8">
                      <input class="form-control" id="confirm_password" type="password" value=""  required>
                    </div>
                  </div>
              </div>
           <div class="modal-footer update_modal">
            <button type="submit" class="btn btn-primary" data-dismiss="modal" id="UpdatePassword" >Update</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  jQuery(document).ready(function(){
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          
          reader.onload = function (e) {
              $('#image_src').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
      }
  }
  $("#input_image").change(function(){
      readURL(this);
  });
  




$("#updateUser").click(function(e){

    e.preventDefault();

    var first_name = $("input[name=first_name]").val();
    var last_name = $("input[name=last_name]").val();
    var email = $("input[name=email]").val();
    var mobile = $("input[name=mobile]").val();


    $.ajax({
       type:'POST',
       url:'/updateUser',
       data:{first_name:first_name, last_name:last_name, mobile:mobile, email:email},
       
        success:function(data){
          if(data.success == true) {
            swal("", "Information Updated Successfully", "success");
          }else {
            swal("", data.message, "warning");
          }
         
       }
    });
  });
  $("#UpdatePassword").click(function(e){
    e.preventDefault();
    var current_password = document.getElementById("current_password").value;
    var new_password = document.getElementById("new_password").value;
    var confirm_password = document.getElementById("confirm_password").value;

      if(current_password && new_password && confirm_password !='' && new_password  == confirm_password){
        $.ajax({
          type:'POST',
          url:'/updatePassword',
          data:{CurrentPassword:current_password, NewPassword:new_password, ConfirmPassword:confirm_password},
        
          success:function(data){
            if(data.success == true){
              $("#current_password").val('');
              $("#new_password").val('');
              $("#confirm_password").val('');
              swal("", "Password Reset Successfully", "success");
            }
          }
       });
      }else{
       if( new_password  != confirm_password) {
        swal("", "Confirm password doesnot match", "warning");
       
       }else{
        swal("", "Please fill all the field", "warning");
       }
      }
   });
});

</script>
<style>
    .inputfile {
      width: 0.1px;
      height: 0.1px;
      opacity: 0;
      overflow: hidden;
      position: absolute;
      z-index: -1;
    }
    .update_modal {
      background-color: #94d7f2;
    }
    
</style>
   
  @endsection