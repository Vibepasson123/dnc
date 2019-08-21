

  {{--  <tr class="even pointer">
    <td>58224</td>
    <td>95f89</td>
    <td>JERRY</td>
  <td><i class="count green">SPO2 86 BPM 96</i></td>
  <td><i class="count red">Systolic 86 /Diastolic 105</i></td>
  <td><i class="count green">97</i></td>
  <td> <img class="heart" src="images/ecg2.gif" ></td>
  <td>Click </td>
  <tr class="even pointer">
      <td>8110332</td>
      <td>AC03B</td>
      <td>Jacob</td>
    <td><i class="count green">SPO2 86 BPM 96</i></td>
    <td><i class="count green">Systolic 86 /Diastolic 88</i></td>
    <td><i class="count red">99</i></td>
    <td> <img class="heart" src="images/ecg2.gif" ></td>
    <td>Click </td>  --}}
          @foreach ($npt as $tt)
            {{--  <tr class="even pointer">  --}}
            <td>{{$tt->issue_id}}</td>
            <td>{{$tt->mrd}}</td>
            <td>{{$tt->name}}</td>
          
            
            
            
            @if(count($tt->pto2)>0)
            
             
            @foreach($tt->pto2 as $st )
            @if($st->try = Carbon\Carbon::now())
                          
           <i class="count green"> 
           {{$st->spo_2}}
           {{$st->bpm }}
           </i>
           @else
           <a class="count green"> </a>
            @endif
           @endforeach </td>
           @else
          
           @endif
            

            <td>
            @foreach($tt->patienthealth as $pth)
            @if($pth->body_temp > 97 )
            <i class="count red">
            @if($pth->try = Carbon\Carbon::now())
             <i> {{$pth->body_temp }}</i>
             @endif
            </i>
            @elseif($pth->try >= Carbon\Carbon::now())
            <i class=" count green"> {{$pth->body_temp}}</i>
            @else
            <i>hi</i>
            @endif  
            @endforeach
            </td>



            <td> <img class="heart" src="images/ecg2.gif" ></td>
            <td>Click </td>

            <td>
            @foreach($tt->pblood as $pb)
            @if($pb->systolic < 88   && $pb->diastolic >86 )
            <i class=" count red">
            
            @if($pth->try = Carbon\Carbon::today())
            systolic {{ $pb->systolic}} /Diastolic  {{ $pb->diastolic}}
             
            
               @endif
             
               <a>
              
              
             </i>
             @endif

             </td>
            
            
            


            @endforeach
            </td>
         
           
            </tr>
            @endforeach