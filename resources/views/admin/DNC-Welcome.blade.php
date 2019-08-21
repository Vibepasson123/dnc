
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>DNC HOME</title>
</head>
<link href="{{asset('admincss/build/css/bootstrap.css')}}"rel="stylesheet" type="text/css">
{{-- <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> --}}
<script type="text/javascript" src="{{ URL::asset('admincss/jquery/dist/jquery.min.js') }}"></script>
{{-- <!-- Custom Theme files --> --}}
<link rel="shortcut icon" type="image/x-icon" href="images/heaD.ico">
<link href="{{asset('admincss/build/css/style.css')}}"rel="stylesheet" type="text/css">
{{-- <!-- Custom Theme files --> --}}
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
{{-- <!--webfont--> --}}
<link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
 <script type="text/javascript" src="{{ URL::asset('admincss/build/js/move-top.js') }}"></script>

					<script type="text/javascript" src="js/easing.js"></script>
					<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="{{ URL::asset('admincss/build/js/jquery.magnific-popup.js') }}"></script>

		
		<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
</head>
<body>
 <div class="header">
  <div class="header-top">	
	<div class="container">
   		<div class="logo">
			<a href="index.html"><img src="images/logo.png" alt=""/></a>
		</div>	
		<div class="menu">																
			<a href="#" class="right_bt" id="activator"><img src="images/nav.png" alt=""/></a>
				<div class="box" id="box">
				   <div class="box_content_center">
					   <div class="menu_box_list">
						   <ul>
							   <li><a href="#home" class="scroll">Home</a></li>
							   <li class="active"><a href="#about" class="scroll">About</a></li> 
							   <li><a href="#services" class="scroll">Services</a></li> 
							   <li><a href="#features" class="scroll">Features</a></li>
							   <li><a href="#work" class="scroll">Function</a></li>
							   <li><a href="#skills" class="scroll">Skills</a></li>
							   <li><a href="#team" class="scroll">Team</a></li>
							   <li><a href="#contact" class="scroll">Contact</a></li>
							</ul>
						</div>
						<a class="boxclose" id="boxclose"><img src="images/logo.png" alt=""/></a>
					  </div>                
					</div>
					<script type="text/javascript" src="js/easing.js"></script>
					     <script type="text/javascript">
								var $ = jQuery.noConflict();
									$(function() {
										$('#activator').click(function(){
												$('#box').animate({'top':'0px'},500);
										});
										$('#boxclose').click(function(){
												$('#box').animate({'top':'-700px'},500);
										});
									});
									$(document).ready(function(){
									
									//Hide (Collapse) the toggle containers on load
									$(".toggle_container").hide(); 
									
									//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
									$(".trigger").click(function(){
										$(this).toggleClass("active").next().slideToggle("slow");
										return false; //Prevent the browser jump to the link anchor
									});
									
									});
								</script>
				   </div> 	
				<div class="clearfix"></div>
			</div>	
		</div>	
	    <div class="wmuSlider example1">
			   <article style="position: absolute; width: 100%; opacity: 0;"> 
			   	   <div class="banner-wrap">
						<h1>DNC</h1>
						<h2>Where Technology Talks </h2>
						<ul class="banner_btn">
						   <li class="grey"><a href="/login">Member Login</a></li>
						
		    			 </ul>
					</div>
				</article>
				<article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
						<h1>DNC</h1>
						<h2>We Take Care Differently</h2>
						<ul class="banner_btn">
						   <li class="grey"><a href="/login">Member Login</a></li>
						
		    			 </ul>
					 </div>
				</article>
		  </div>
		  <script type="text/javascript" src="{{ URL::asset('admincss/build/js/jquery.wmuSlider.js') }}"></script>
          
			<script>
       			$('.example1').wmuSlider();         
   		    </script> 	           	      
   	   </div>    
   	   <div class="main">
   	   	 <div class="content_top" id="about">
   	   	 	<div class="container">
   	   	 		<h2>We are the Best</h2>
   	   	 		<p>Our advanced service is dedicated to giving the best patient care with effective result.</p>
   	   	 		<div class="row">
	   	   	 		<div class="col-md-4 service_box">
		  				<i class="icon1"> </i>
		  				<h3><a href=''>Resourceful</a></h3>
		  				<p>Our Data Structure carries the all advance function to analyze the patient medical record to give more functionality to the service</p>
		  			</div>
		  			<div class="col-md-4 service_box">
		  				<i class="icon2"> </i>
		  				<h3><a href=''>Healthy</a></h3>
		  				<p>Our service is bound to take care of the patient with minimal discomfort of the patient </p>
		  			</div>
		  			<div class="col-md-4 service_box">
		  				<i class="icon3"> </i>
		  				<h3><a href=''>Natural</a></h3>
		  				<p>Our method gives the natural feeling of the nursing and patient satisfaction</p>
		  			</div>
		  		</div>
   	   	 	</div>
   	   	 </div>
   	   	 <div class="access">
   	   	 	<div class="container">
   	   	 		<div class="row access_top">
		          <div class="col-md-4 access-left">
			        <span> </span>
		          </div>
		          <div class="col-md-8 access-right">
					<h3><span class="thick">Easy</span> To Access<a class="link"><img src="images/more.png" alt=""/></a></h3>
					<p>We have developed advanced method to give the patient and doctor easy to access the data as well as the different type of Restful API to add extra functionality to the system</p>
					<p>Our system provides various API to connect which it is easy to make mobile apps and join our community of care </p>
                  </div>
		        </div>
	            <div class="clearfix"> </div>
	         </div>
   	   	</div>
   	    <div class="services" id="services">
   	   		<div class="container">
   	   			<div class="service_top">
   	   				<h3>Our Services</h3>
   	   				<p>Our advanced service is dedicated to giving the best patient care with effective result.</p>
   	   			</div>
   	   			<div class="row">
   	   				<div class="col-md-6 service_box">
   	   					<ul class="service_grid">
   	   						<i class="s1"> </i>
   	   						<li class="desc">
   	   							<h4><a href="">Patient Monitoring </a></h4>
   	   							<p>DNC has the special method of the patient care; this allows the system to monitor the patient remotely. It helps in vital patient monitoring as well as the patient location monitoring</p>
   	   						</li>
   	   						<div class="clearfix"> </div>
   	   					</ul>
   	   					<ul class="service_grid">
   	   						<i class="s2"> </i>
   	   						<li class="desc">
   	   							<h4><a href="#">Location</a></h4>
   	   							<p>This system knows the patient exact location in the system which helps in tracking of the patient in emergency as well this makes the report of the patient movement per day</p>
   	   						</li>
   	   						<div class="clearfix"> </div>
   	   					</ul>
   	   					<ul class="service_grid last">
   	   						<i class="s3"> </i>
   	   						<li class="desc">
   	   							<h4><a href="#">Home Services</a></h4>
   	   							<p>DNC take care of his patient even after hospital time It helps in managing the vital information of the patient and making collective report, manage to send alert to concern person and doctor in case an emergency   </p>
   	   						</li>
   	   						<div class="clearfix"> </div>
   	   					</ul>
   	   				</div>
   	   				<div class="col-md-6">
   	   					<ul class="service_grid">
   	   						<i class="s4"> </i>
   	   						<li class="desc">
   	   							<h4><a href="#">Smooth Services </a></h4>
   	   							<p>Our service gives the maximum patient comfort; they are taken care of by the most advanced technology thus they do not get disturbed on giving information all the time as they are collecting automatically </p>
   	   						</li>
   	   						<div class="clearfix"> </div>
   	   					</ul>
   	   					<ul class="service_grid">
   	   						<i class="s5"> </i>
   	   						<li class="desc">
   	   							<h4><a href="#">Time efficient </a></h4>
   	   							<p>As every function in DNC done by digitally is it very time efficient and hassle-free process, faster and more reliable </p>
   	   						</li>
   	   						<div class="clearfix"> </div>
   	   					</ul>
   	   					<ul class="service_grid last">
   	   						<i class="s6"> </i>
   	   						<li class="desc">
   	   							<h4><a href="#">Secured Data </a></h4>
   	   							<p>DNC, as it is related to healthcare, we have taken all the preservative method to data protection as DNC fallows all the parameter in health data protection law. However, patient data are kept for the general study of DNC for enhancement of services</p>
   	   						</li>
   	   						<div class="clearfix"> </div>
   	   					</ul>
   	   				</div>
   	   			</div>
   	   		</div>
   	   	</div>
   	   	<div class="features" id="features">
   	   	  <div class="container">
   	   	  	 <div class="feature_top">
				<h3><span class="feature">Some</span> of the Features</h3>
				<i class="phone"> </i>
			 </div>
   	       </div>
   	   	</div>
   	   	<div class="services" id="work">
   	   		<div class="container">
   	   			<div class="service_top">
   	   				<h3>Why Work With Us</h3>
   	   				<p>We give a dynamic view of the patient, holistic care and the same time we give technology implementation; we give a new way to implement technology to solve minor problems and which can make a great impact</p>
   	   			</div>
   	   			<div class="row service_grid">
   	   				<div class="col-md-4">	
   	   					<div class="post_block text-center">
   	   					   <i class="one"> </i>
   	   					   <h5 class="m_1"><a href="#">High Speed</a></h5>
   	   					   <p class="m_2">"Our advanced technology makes the work advance and more speed, with the use of dynamic processes and  Rest API"</p>
   	   					</div>
   	   				</div>
   	   				<div class="col-md-4">
   	   					<div class="post_block1 text-center">
   	   					   <i class="two"> </i>
   	   					   <h5 class="m_1"><a href="#">Digital Care  </a></h5>
   	   					   <p class="m_2">"Our service is completely dependent on digital technology which helps nature by saving tree as we use no paper and data are more reliable and secure and can be studied in different perspective"</p>
   	   					</div>
   	   				</div>
   	   				<div class="col-md-4">
   	   					<div class="post_block2 text-center">
   	   					   <i class="three"> </i>
   	   					   <h5 class="m_1"><a href="#">Patient satisfaction</a></h5>
   	   					   <p class="m_2">"Our services provide optimum customer satisfaction; patient loves the method of care and the result they get. uninterrupted information collection and the result which helps and doctor a great satisfaction"</p>
   	   					</div>
   	   				</div>
   	   			</div>
   	   			<div class="row">
   	   				<div class="col-md-4">	
   	   					<div class="post_block text-center">
   	   					   <i class="one"> </i>
   	   					   <h5 class="m_1"><a href="#">API Support </a></h5>
   	   					   <p class="m_2">"We have all the restful API which can support the function of DNC which can be helpful to customize your mobile, and others customize the application and can be integrated into any other native application"</p>

									</p>
   	   					</div>
   	   				</div>
   	   				<div class="col-md-4">
   	   					<div class="post_block1 text-center">
   	   					   <i class="two"> </i>
   	   					   <h5 class="m_1"><a href="#">Patient Monitoring </a></h5>
   	   					   <p class="m_2">"DNC give the facility to digital monitor patient and their vital information including their current location alert system and emergency guide if any case occurs. Managing digital information and their report without any human effort "</p>
   	   					</div>
   	   				</div>
   	   				<div class="col-md-4">
   	   					<div class="post_block2 text-center">
   	   					   <i class="three"> </i>
   	   					   <h5 class="m_1"><a href="#">Eco Friendly </a></h5>
   	   					   <p class="m_2">"Reducing paper flow in work and making a faster decision in health care make it eco-friendly and more accurate in work. "</p>
   	   					</div>
   	   				</div>
   	   			</div>
   	   		</div>
   	   </div>
   	   <div class="skills" id="skills">
   	   	<div class="container">
   	   		 <div class="skill_top">
   	   		 	<h3>Our skill is getting enhanced in the following aspects </h3>
   	   		 	<p>We are working continuously in improving the quality of service and implementations methods .</p>
   	   		 </div>
   	   		 <div id="canvas">
							<div class="row skill-grids text-center">
									<div class="col-md-3">	
										<div class="skill-grid">
											<div class="circle" id="circles-1"></div>									
											 <h3><a href="#">New Patient</a></h3>	
										 </div>								  
									</div>
									<div class="col-md-3">	
										<div class="skill-grid">
											<div class="circle" id="circles-2"></div>									
											 <h3><a href="#">New Clients</a></h3>	
										 </div>								  
									</div>
									<div class="col-md-3">	
										<div class="skill-grid">
											<div class="circle" id="circles-3"></div>									
											 <h3><a href="#">Patients satisfaction Increased by 8% </a></h3>	
										 </div>								  
									</div>
									<div class="col-md-3">	
										<div class="skill-grid">
											<div class="circle" id="circles-4"></div>									
											 <h3><a href="#">Faster than last month</a></h3>	
										 </div>								  
									</div>
									<div class="clearfix"> </div>
							  </div>
							  <script type="text/javascript" src="{{ URL::asset('admincss/build/js/circles.js') }}"></script>
   	   	                      
					         <script>
								var colors = [
										['#fff', '#05ceaa'], ['#fff', '#05ceaa'], ['#fff', '#05ceaa'], ['#fff', '#05ceaa']
									];
								for (var i = 1; i <= 60; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 50 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      15,
										number:   	percentage / 10,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
				<!--/-->
   	   	</div>
   	   </div>
   	 </div>
   	 <div class="team" id="team">
   	 	<div class="container">
   	 		<div class="service_top">
   	   				<h3>Meet The Team</h3>
   	   				<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</p>
   	   			</div>
   	   			<div class="team_grids center text-center">
   	   			
   	   			
   	   				  <div class="col-md-4 team_grid">
   	   				  <div class="view view-fifth"><a href="#">
	                    <img src="images/t3.jpg" class="img-responsive" alt=""/>
	                    <div class="mask">
	                       <div class="content">
	                         <a class="popup-with-zoom-anim" href="#small-dialog3"> <div class="info"><img src="images/plus.png" alt=""/></div></a>
			               </div> 
	                     </div>
	                         <div id="small-dialog3" class="mfp-hide">
								   <div class="pop_up2">
								   	   <h3>Vivek Kumar Sah</h3>
									   <h4>DNC Developer</h4>
									   <p>Hello, there I am web full-stack web developer have good experience in different technology for web and software developer with more than 2-year experience. Before jumping in the computer world, I was an operations manager at a hospital and worked for more than three year, and due to my academics, I had a vast knowledge in the healthcare. I was having the different view for the healthcare. TO develop this technology I have jump into the computer field and now I able to make any healthcare project from scratch with all healthcare standards .</p>
								   </div>
							 </div>
	                     </a></div>
	                     <h4><a href="#"> WEB-DEVELOPER </a><br><span class="ceo">WEB-DEVELOPER at GUI-SOFT</span></h4>
	                     <p>Currently working at GUI-SOFT as a Web Developer and complete several high profile projects using PHP, JAVA, NODE, and another kind of front end technology  </p>
	                     <ul class="social">
							<li><a href="https://www.facebook.com/vivek.sah.792"> <i class="fb"> </i> </a></li>
							<li><a href="https://twitter.com/Viveksahvivek"><i class="tw"> </i> </a></li>
							<li><a href="https://www.google.com/+VivekSah"><i class="google"> </i> </a></li>
						 </ul>
   	   				   </div>
   	   				   <div class="clearfix"></div>
   	   			</div>
   	   		  </div>
   	   		</div>
   	   		<div class="call">
   	   			<div class="container">
   	   				<h3 class="call_text"></h3>
   	   			</div>
   	   		</div>
   	   	  </div>
   	   	  <div class="footer" id="contact">
   	   		<div class="container">
					  <form method="post" action="/revP">
						{{ csrf_field() }}
					<div class="contact-to">
                     	<input type="text" name="name" class="text" value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name...';}" required>
					 	<input type="text" name="email" class="text" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}" style="margin-left:30px" required>
					</div>
					<div class="">
	                   <textarea  name="message" value="Message:"     style="margin-left:30pxheight: 200px;
					   width: 50%;" required>Message..</textarea>
	                </div>
	                <div class="contact_btn">
	               		<input name="submit your message" type="submit" id="submit" value="Submit your Message">
	                </div>
	                <div class="clearfix"> </div>
	            </form>
	            <div class="about">
	               	  <h4>About Us</h4>
	               	  <p>This is a conceptual project where are implementing digital methods of vital patient information collection and process this information to create a valuable report which can be used in patient diagnosis and in future can be used as disease prevention of the patient. We are also including several new concepts which can help the healthcare system to serve better in their service with minimal effort. In this application, we have given a prototype of application layout and function in the production version we will apply some more feature which is not included in this at the moment</p>
	                  <a href="#"><img src="images/f-logo.png" alt=""/></a>
	                   <ul class="f_social">
							<li><a href="https://twitter.com/Viveksahvivek"> <i class="tw1"> </i> </a></li>
							<li><a href="https://www.facebook.com/vivek.sah.792"><i class="fb1"> </i> </a></li>
							<li><a href="https://www.google.com/+VivekSah"><i class="g1"> </i> </a></li>
							{{-- <li><a href=""><i class="pin"> </i> </a></li> --}}
							<li><a href="https://www.linkedin.com/in/vivek-sah-407254118"><i class="linked"> </i> </a></li>
						 </ul>            
	               </div>
	            </div>
   	   		    <div class="copy">
   	   			  <div class="container">
			         <p><a></a></p>
			       </div>
			       <script type="text/javascript">
						$(document).ready(function() {
							
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			   </div>
   	   		</div>	
</body>
</html>		