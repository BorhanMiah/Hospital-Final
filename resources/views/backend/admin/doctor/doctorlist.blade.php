<!DOCTYPE html>
<html>
<head>
	<title>Doctor Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <style>
   .container{
    margin-top: 30px;
}
 
.inner{
    overflow: hidden;
}
 
.inner img{
    transition: all 1.5s ease;
}
 
.inner:hover img{
    transform: scale(1.5);
}
   </style>
</head>
<body >
	<h1 style="text-align: center; margin-top: 0px; padding: 20px; background-color: blue;">Doctor Information</h1>
<div style="margin-left: 300px;">
	
	

  <div class="container">

        <div class="row justify-content-center">
        	@foreach($doctors as $row)
            <div class="col-md-4">
              
                <div class="card shadow" style="width: 20rem;">
              
                    <div class="inner">
                        <img src="{{URL::to('/')}}/backend/assets/images/doctor/.{{$row->image}}" class="card-img-top" >
                    </div>
                    <div class="card-body text-left">
              
                      <h6 class="card-text"><span style="font-weight: bold;"> NAME:</span> {{$row->name}}</h6>
                      <h6 class="card-text"><span style="font-weight: bold;"> Mobile:</span> {{$row->mobile}}</h6>
                      <h6 class="card-text"><span style="font-weight: bold;"> QUALIFICATION:</span> {{$row->qualification}}</h6>
                      <h6 class="card-text"><span style="font-weight: bold;"> Email:</span> {{$row->email}}</h6>
                      <h6 class="card-text"><span style="font-weight: bold;"> ROOM NUMBER:</span> {{$row->room_no}}</h6>
                      @foreach ($row->schedules as $schedule)
                        <p class="card-text">{{$schedule->day}}, ({{$schedule->time}})</p>
                        @endforeach
                    </div>
                    
            </div>
          </div>
        @endforeach

        </div>
        
    </div>


  </div>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
