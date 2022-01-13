<!DOCTYPE html>
<html>
<head>
	<title>Show Presception</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		.box{
		width:2000px;
		height: 1200px;
		margin: 100px auto;
		border: 1px solid #ccc;
		background-color: #F0FFFF;
		padding: 20px;

	}
	.vl{
		border-right: 1px solid black;
		margin-right:00px;
		height: 650px;
	}
	</style>

</head>
<body>
<div class="card" id="printableArea">
<div class="container box" style=" ">
	<h1 style="text-align: center;">Rowshan Hospital Limited</h1>
	
	<hr style="color: white;">
	<h3 style="text-align: center;">Doctor Presception</h3>
	<br>
	       <div style="padding: 10px;">
			<h5 style="display: inline;">Doctor Name:<span style="margin-left: 7px;"> {{$presception->d_name}}</span></h5>
			<h5 style="display: inline; margin-left: 200px;">Date:<span style="margin-left: 7px;"> {{$presception->date}}</span></h5>
			</div>
			<div style="padding: 10px;">
			<h5 style="display: inline;">Patient Name:<span style="margin-left: 7px;"> {{$presception->p_name}}</span></h5>
			<h5 style="display: inline; margin-left: 200px;">Age:<span style="margin-left: 7px;"> {{$presception->age}}</span></h5>
			<h5 style="display: inline; margin-left: 200px;">Gender:<span style="margin-left: 7px;"> {{$presception->gender}}</span></h5>
			</div>
			<hr>
	
		<div class="row">
	<div class="col-6">
	<div class="vl">
		<h5 style="padding: 5px;"><span style="text-decoration: underline; font-weight: bold;">Disease Description:</span> <p style="margin-top: 5px;"> {{$presception->diseas}}</p></h5>
		<h5 style=" padding: 5px;"><span style="text-decoration: underline; font-weight: bold;">On Examinations:</span> <p style="margin-top: 10px;"> {{$presception->examination}}</p></h5>
		<h5 style=" padding: 5px;"><span style="text-decoration: underline; font-weight: bold;">Provisional Diagnosis:</span> <p style="margin-top: 10px;"> {{$presception->provisional}}</p></h5>
		<h5 style="padding: 5px; "><span style="text-decoration: underline; font-weight: bold;">Differential Diagnosis:</span><br><p style="margin-top: 10px;"> {{$presception->differential}}</p></h5>
		<h5 style=" padding: 5px;"><span style="text-decoration: underline; font-weight: bold;">Lab Test:</span><br>  <p style="margin-top: 10px;"> {{$presception->lab}}</p></h5>
		<h5 style=" padding: 5px;"><span style="text-decoration: underline; font-weight: bold;">Advices:</span><br> <p style="margin-top: 10px;"> {{$presception->advice}}</h5></p>
		<br><br><br><br><br><br><br><br><br>
		<h5 style="text-decoration: overline; margin-left: 20px;">Doctor Signature</h5>
			</div>
           </div>
           	

	
	<div class="col-6">
		<p style=" padding: 5px;"><span style=" font-weight: bold; font-size: 40px;">Tx.</span><br> <p style="margin-top: 10px;"> {{$presception->medicine}}</p></p>
	</div>
		
	</div>
	
</div>
	</div>
	<a href="#" style="margin-left:700px;" class="btn btn-warning" onclick="printDiv('printableArea')">Print</a>	

</div>

<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>