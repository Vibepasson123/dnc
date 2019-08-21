     <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>


  
 <link href="{{asset('admincss/bootstrap/dist/css/bootstrap.min.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/font-awesome/css/font-awesome.min.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/nprogress/nprogress.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/iCheck/skins/flat/green.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/jqvmap/dist/jqvmap.min.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/bootstrap-daterangepicker/daterangepicker.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/build/css/custom.min.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/build/css/register.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/build/css/welcome.css')}}"rel="stylesheet" type="text/css">


</head>

<body>
  
  <div class="body">
   <div class="login">
                       
                      <div class="titulo">Reset Password</div>
                        
       
                        <form action="" method="POST">
                          @if (count($errors) > 0)
                          <div class="alert alert-danger">
                            <ul>
                               @foreach($errors->all() as $error)
                               <li>{{ $error}}</li>
                               @endforeach
                            </ul>     
                          </div>
                         @endif
                          {{csrf_field()}} 

                          <div class="form-group"> 
                            <div class="input-group">
                              
                              <input type="password" name="password" class="form-control" placeholder="password">
                            </div>  
                            </div>
                            <div class="form-group"> 
                            <div class="input-group">
                              
                              <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
                            </div>  
                            </div>
                              <div class="form-group">
                             <input type="submit" value="UdatePassword" class=" btn btn-success enviar"> 
                             
                             </div> 
                              
                            </div>
                         
                          </div>
                        </form>
                      </div>
                    </div>  
                  </div>  
                </div>          
             </div>

