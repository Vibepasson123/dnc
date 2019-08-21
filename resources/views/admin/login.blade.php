     <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
<link href="{{asset('admincss/bootstrap/dist/css/bootstrap.min.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/font-awesome/css/font-awesome.min.css')}}"rel="stylesheet" type="text/css">
<link href="{{asset('admincss/font-awesome/css/style.css')}}"rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="images/heaD.ico">
</head>
<body>
    <video autoplay muted loop id="myVideo">
        <source  src="images/mp4.mp4"  type="video/mp4">
      </video>
  <div class="video-w3l" data-vide-bg="images/1">
		<!--header-->
		<div class="header-w3l">
			<h1>
				<span>DNC</span>
				<span>L</span>ogin
			</h1>
    </div>
    <div class="main-content-agile">
			<div class="sub-main-w3">
				<h2>Login Here</h2>
        <form action="/login" method="POST">
          {{csrf_field()}}
          @if(session('error'))
           <div class="form-control alert alert-danger">
                  {{session('error')}}
            </div>
            @endif
             @if(session('success'))
           <div class="form-control alert alert-success">
                  {{session('success')}}                            
            </div>
            @endif 
					<div class="pom-agile">
						<span class="fa fa-user-o" aria-hidden="true"></span>
						<input placeholder="Username" name="email" class="user" type="text" required="">
					</div>
					<div class="pom-agile">
						<span class="fa fa-key" aria-hidden="true"></span>
						<input placeholder="Password" name="password" class="pass" type="password" required="">
          </div>
          @if(Sentinel::check())
          <script type="text/javascript">
          window.location = "{{ url('/register') }}";
       </script>
       <noscript>Sorry, your browser does not support JavaScript!</noscript>
       @endif
					<div class="sub-w3l">
						<div class="sub-agile">
							<input type="checkbox" id="brand1" value="">
							
						<a href="/forgot-password">Forgot Password?</a>
						<div class="clear"></div>
					</div>
					<div class="right-w3l">
						<input type="submit" value="Login">
					</div>
				</form>
			</div>
		</div>
    <div class="footer">
        <p>&copy; <span id="year"></span>  DNC. All rights reserved |
          <script>
              document.getElementById("year").innerHTML = new Date().getFullYear();
            </script>
           
        </p>
       
      </div>
    <!--//footer-->
    
	</div>
</body>
    
    <script type="text/javascript" src="{{ URL::asset('admincss/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('admincss/jquery/dist/jquery.vide.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('admincss/jquery/dist/jquery-2.1.4.min.js') }}"></script>
 </html>