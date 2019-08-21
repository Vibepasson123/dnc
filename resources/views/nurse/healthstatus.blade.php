<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PATIENT REPORT</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

        <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
      
        <link href="{{asset('admincss/build/css/time.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admincss/build/css/timestyle.css')}}" rel="stylesheet" type="text/css">
        <link src='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>



    </head>

    <body><header>
            <h1>Average Vital </h1>
        </header>
    
        <section id="cd-timeline" class="cd-container">
            
        @foreach($patientime as $ptt)
            <div class="cd-timeline-block">
           
                <div class="cd-timeline-img cd-picture">
                
                </div> <!-- cd-timeline-img -->
    
                <div class="cd-timeline-content">
                    <h2>PATIENT NAME ->  {{$ptt->name}}</h2><br>
                    <h3>PATIENT ADMISSION-NO = &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a>{{$ptt->patienthealthtoday->avg('patienthistory_assin')}}</a></h3>
            
                        <p>Average Body Temprature Today =&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a>{{$ptt->patienthealthtoday->avg('body_temp')}}ºF</a>  </p>
                        <p>MAX Body Temprature Today =&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a>{{$ptt->patienthealthtoday->max('body_temp')}}ºF </a></p>
                        <p>MIN Body Temprature Today =&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a> {{$ptt->patienthealthtoday->min('body_temp')}}ºF</a> </p>



                        -------------------------------------------------------------------------------------
                     @foreach ($pa as $it)
                     <p>Average  Blood PressureToday =&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a>SYSTOLIC&nbsp;&nbsp;&nbsp;&nbsp;{{$it->bptoday->avg('systolic')}} </a> DIASTOLIC&nbsp;&nbsp;&nbsp;&nbsp;{{$it->bptoday->avg('diastolic')}} </p>
                     <p>MAX  Diastolic  =&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a>{{$it->bptoday->max('diastolic')}}ºF </a></p>
                     <p>MIN SYSTOLIC  =&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a> {{$it->bptoday->min('systolic')}}ºF</a> </p>
                     @endforeach
                    
                        
                    
                       
                  
                    <span class="cd-date">{{$ptt->name}}</span>
                </div> <!-- cd-timeline-content -->
                 
            </div> <!-- cd-timeline-block -->
          
    
           @endforeach
        </section> <!-- cd-timeline -->
       

        <script>
            jQuery(document).ready(function($){
	var $timeline_block = $('.cd-timeline-block');

	//hide timeline blocks which are outside the viewport
	$timeline_block.each(function(){
		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
			$(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		}
	});

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		$timeline_block.each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
			}
		});
	});
});
        </script>
            
        
            <script src="{{ URL::asset('admincss/build/js/timeline.js') }}"></script>


    </body>

    </html>