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
<div class="row"><div class="col-md-12 text-center"><h1 style="color:white">TeamDinner.in<h1></div></div>
<div class="row">
  <br>
  <div class="container">
  <div class="col-md-5 text-center box2">
    <h2 style="text-align: left">How It Works?</h2><br>
    <h3>Book Team Dinner</h3><br><span class="glyphicon glyphicon-arrow-down"></span>
    <h3>Check-In at Hotel</h3><br><span class="glyphicon glyphicon-arrow-down"></span>
    <h3>Confirm Check-In</h3><br><span class="glyphicon glyphicon-arrow-down"></span>
    <h3>Get 10-20% of Bill Amount as CashBack Voucher</h3>
    <br><br>
  </div>
  <div class="col-md-1"></div>
  <div class="col-md-6 box">
    <h2 class="text-center">Book Now</h2>
    <form class="form-horizontal" role="form" action="test.php" method="POST">
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="ph">Phone:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="phno" pattern="[789][0-9]{9}" placeholder="Enter Phone Number" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="city">City:</label>
        <div class="col-sm-10">
        <select class="form-control" name="city" id="city" onchange="configurerest(this,document.getElementById('rest'))">
        <option value="chennai">Chennai</option>
        <option value="pune">Pune</option>
        <option value="mumbai">Mumbai</option>
        <option value="kolkata">Kolkata</option>
        </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="Hotel">Restaurant:</label>
        <div class="col-sm-10">
        <select class="form-control" name="hotel" id="rest">
        <option value="">---select your city----</option>
        </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="date">Booking Date:</label>
        <div class="col-sm-10">
        <input type="date" class="form-control" name="dor" placeholder="Enter Date" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="num">Count:</label>
        <div class="col-sm-10">
        <input type="number" min="0" class="form-control" name="nop" placeholder="Enter Number of persons" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="type">Booking For:</label>
        <div class="col-sm-10">
        <select class="form-control" name="type">
        <option value="breakfast">Breakfast</option>
        <option value="lunch">Lunch</option>
        <option value="dinner">Dinner</option>
        </select>
        </div>
      </div>
    <div class="form-group">
      <button type="submit" class="btn-block btn btn-success">Submit</button>
    </div>
    </form>
  </div>
  </div>
</div>
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

</body>
</html>
