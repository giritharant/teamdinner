<?php
$show=false;
$con=new mysqli("localhost","root","","booking");
if($con->connect_error)
{
	die("connection failed: ".$con->connect_error);
}
if(!isset($_POST['name']))
	echo "Hello";

$firstname = $_POST['name'];
$email = $_POST['email'];

$w="insert into user values('$_POST[name]','$_POST[email]','$_POST[phno]','$_POST[city]','$_POST[hotel]','$_POST[dor]','$_POST[nop]','$_POST[type]')";
if($con->query($w) === TRUE)
{
	header('Location:index.php#myModal');
}
else {
		echo "onumakalakanga";
	}	

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Team Dinner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1">
  <link rel="stylesheet" href="bootstraps/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
  <script src="bootstraps/jquery.min.js"></script>
  <script src="bootstraps/js/bootstrap.min.js"></script>
  <script src="index.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
</head>

<body style="font-family: 'Roboto Slab',serif;">
<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h2 class="modal-title">Hi</h2>
		      </div>
		      <div class="modal-body">
		      			<div class="col-md-5 text-center box2">
    					<h2 style="text-align: left">Booked Sucessfully</h2><br>
    					<h3>Check-In at Hotel</h3><br><span class="glyphicon glyphicon-arrow-down"></span>
    					<h3>Confirm Check-In</h3><br><span class="glyphicon glyphicon-arrow-down"></span>
    					<h3>Get 10-20% of Bill Amount as CashBack Voucher</h3>
    					<br><br>
  					</div>
  
			  </div>
				
			</div>
		    </div>
		    <div class="modal-footer">
		       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		    </div>
		   </div>

		  </div>
		</div>

</body>
</html>
