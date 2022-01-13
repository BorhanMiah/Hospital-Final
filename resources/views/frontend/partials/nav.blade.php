<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand navbar-brand logo_h"  href="#"><img style="width: 100px;" src="{{asset('frontend/image/ta.jpg')}}"></a>
	      
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#department-section" class="nav-link"><span>Department</span></a></li>
	          <li class="nav-item"><a href="{{route('doctor.doctorlist')}}" class="nav-link"><span>Doctors</span></a></li>
	          
	         <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	          <li class="nav-item cta mr-md-2"><a href="{{route('patient.appointment.create')}}" class="nav-link">Appointment</a></li>
			  <!--<li class="nav-item"><a href="" class="nav-link"><span>Login</span></a></li>-->
	        </ul>
	      </div>
	    </div>
	  </nav>