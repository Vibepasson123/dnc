     <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>


  
 <link href="{{asset('admincss/bootstrap/dist/css/bootstrap.min.css')}}"rel="stylesheet" type="text/css">
 <link href="{{asset('admincss/font-awesome/css/font-awesome.min.css')}}"rel="stylesheet" type="text/css">
 <link href="{{asset('admincss/nprogress/nprogress.css')}}"rel="stylesheet" type="text/css">
 <link href="{{asset('admincss/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}"rel="stylesheet" type="text/css">
 <link href="{{asset('admincss/bootstrap-daterangepicker/daterangepicker.css')}}"rel="stylesheet" type="text/css">
 <link href="{{asset('admincss/build/css/register.css')}}"rel="stylesheet" type="text/css">
  <link href="{{asset('admincss/build/css/welcome.css')}}"rel="stylesheet" type="text/css">
</head>

<body>
  
  <div class="body">
   <div class="login">
                       
                      <div class="titulo">Forgot password</div>
                        
       
                        <form action="/forgot-password" method="POST">
                          {{csrf_field()}}
                          @if(session('success'))
                           <div class="form-control alert alert-success">
                                  {{session('success')}}
                              
                            </div>
                            @endif
                          <div class="form-group"> 
                            <div class="input-group">
                             
                              <input type="text" name="email" class="form-control" placeholder="E-Mail" required title="Username required" data-icon="U">
                              
                            </div>
                            </div>
                            <br>
                            <br>

                              <div class="form-group">
                             <input type="submit" value="Send-Code" class=" btn btn-success enviar"> 
                            </form>
                             <a  class="btn btn-danger " href="/login">Cancel</a>
                             </div> 
                            
                       
                     
                         </div> 
                         
                      </div>       
             </div>

