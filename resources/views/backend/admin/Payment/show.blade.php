<!DOCTYPE html>
<html>
<head>
	<title>Show Payment</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		.box{
		width:2000px;
		height: 700px;
		margin: 100px auto;
		border: 1px solid #ccc;
		background-color: #F0FFFF;
		padding: 20px;

	}
	.vl{
		border-right: 1px solid black;
		margin-right:0px;
		height: 550px;
	}
	</style>

</head>
<body>
<div class="card" id="printableArea">
<div >
	<h1 style="text-align: center;">Rowshan Hospital Limited</h1>
	
	<hr style="color: white;">
	<h3 style="text-align: center;">Money Receipt</h3>
	<br>
	        <div style="padding: 5px;">
			<p >Payment Id:<span style="margin-left: 7px;"> {{$payment->id}}</span></p>
			</div>
			<div style="padding: 5px;">
			<p >Date:<span style="margin-left: 7px;"> {{$payment->date}}</span></p>
			</div>
			<div style="padding: 5px;">
			<p >Patient Name:<span style="margin-left: 7px;"> {{$payment->p_name}}</span></p>
	</div>
	<hr>
	<table class="table">
		<tr>
		<td >Doctor Visiting Price</td>
		<td >{{$payment->d_price}}</td>
		</tr>
		<tr>
		<td >Test Price</td>
		<td >{{$payment->t_price}}</td>
		</tr>
		<tr>
		<td >Medicine Price</td>
		<td >{{$payment->m_price}}</td>
		</tr>
		<th >Total Price</th>
		<th >{{$payment->total_price}} Taka</th>
		</tr>
		
	</table>
	<br>
	<br>
	<br>
	<h5 style="text-decoration: overline; margin-left: 20px;">Signature of Authority</h5>

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