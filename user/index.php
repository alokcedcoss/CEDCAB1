<?php
session_start();

 // echo $_SESSION['email']; 
 $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  <title></title>
<style>
	.back
	{
		border:3px solid black;
		margin: 3%;
    text-align: center;
	}

</style>
</head>
<body>
  <!-- ##########################################Header Start################################# -->

   <nav class="navbar navbar-inverse navbar-static-top example6">
    <div class="container">
      <div class="navbar-header">
<div><h2 style="float: left;margin-left: 1%;color:white;">CED<span style="color:#ffc001;">CAB</span></h2></div>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar6"><span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar6" class="navbar-collapse collapse" >
        <ul class="nav navbar-nav navbar-center" style="font-size: 20px;margin-left:15%;">
          <li><a href="index.php">Home</a></li>
          <li><a href="/cedcab/index.php">Book New Ride</a></li>
          <li style="margin-top: 2%;"><div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:20px";>
   Rides
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="padding-top:2%;">
    <a class="dropdown-item" href="pendingrides.php">Pending Rides</a><br>
    <a class="dropdown-item" href="#">Completed Rides</a><br>
    <a class="dropdown-item" href="#">All Rides</a><br>
  </div>
</div></li>
        
           <li><a href="account.php">Account</a>
          </li>
<li style="color: white;margin-left:1%;float: right;"><?php echo $_SESSION['name']; ?></li>
        </ul>
<!--  <button style="float: right; margin-top: 1%;padding:0.5%;border-radius: 10px;" href="logout.php">Logout</button> -->
<a href="logout.php">Logout</a>      
</div>

    </div>
  </nav>
  
  	<div class="row" >
  <div class="col-sm-3 back">
    <div class="card" style="padding:20%;">
      <div class="card-body">
        <h2 class="card-title">Pending Rides</h2>
        
       <center><a href="pendingrides.php" class="btn btn-primary">Go somewhere</a></center>
      </div>
    </div>
  </div>
    <div class="col-sm-3 back">

    <div class="card" style="padding:20%;">
      <div class="card-body">
        <h2 class="card-title">Completed Rides</h2>
        
        <center><a href="approvedride.php" class="btn btn-primary">Completed Rides</a></center>
      </div>
    </div>
  </div>
  
    <div class="col-sm-3 back">

    <div class="card" style="padding:20%;">
      <div class="card-body">
        <h2 class="card-title">Cancelled Rides</h2>
        
        <center><a href="cancelride.php" class="btn btn-primary">Go somewhere</a></center>
      </div>
    </div>
  </div>
</div>


  <div class="g">
  <?php include 'footer.php';?>
</div>
</body>
</html>