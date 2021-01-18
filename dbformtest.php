<?php
if(isset($_POST['submit'])){
    $p = $_POST['Pickup'];
$b = $_POST['droppoint'];
$cabtype1 = $_POST['Cabtype'];
$weight = $_POST['Luggage'];
}

$host="localhost";
$user="root";
$password="";
$db = "test2";

$conn = mysqli_connect($host,$user,$password,$db);
if(!$conn)
{
	echo "failed";
}
else
{
	echo "sucess";
}
$sql = "INSERT INTO `cedcab` (`Pickup`,`droppoint`, `Cabtype`,`Luggage`) VALUES ('$p', '$b', '$cabtype1', '$weight')";
$result = mysqli_query($conn,$sql);

if($result)
{
	echo "1 record inserted";
}
else
{
	echo "failed";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<title>CEDCAB</title>
	<style>
		.g
		{
			background-image: url('ola-app-images-21df.jpg');
			background-size: cover;
			color: white;
			background-repeat: no-repeat;
			background-position: center;
		}
		.container1
		{
			margin-top:2%; 
			margin-left:5%;
			margin-right:3%;
			padding-bottom: 2%; 
			margin-bottom: 3%;
			border:5px outset grey;
			border-radius: 15px;
			background-position: relative;
			background-color: #408BF1;
		}
		.button2
		{
			color: #101113;
			background-color: #ffc001;
			font-weight: 700;
			height: 50px;
			border: none;
			width: 100%;
			display: block;
			border-radius: 15px;
			text-transform: uppercase;
}
		.form-header
		{
			font-size: 58px;
			text-transform: uppercase;
			font-weight: 700;
			color: #ffc001;
			margin: 0px;
			text-align: center;
	}
	.header
	{
		font-size: 58px;
		overflow: hidden;
			font-weight: 700;
			color: #ffc001;
			margin: 0px;
			text-align: center;
	}
	h1
	{
		color: white;
		font-family:Gentona;
		font-size:38px;
	line-height: 38px;
	font-weight: 600px;
	}
	h2
	{
		color: white;
		font-family:Gentona;
		font-size:30px;
	line-height: 38px;
	font-weight: 600px;
	}
	.example6 .navbar-brand{ 
  background-image:url('logo.png') center / contain no-repeat;
  width: 200px;
}
footer{
  color: blue;
}
footer a{
  color: white;
}
footer a:hover{
  color:green;
}
.footer-middle{
   background: #408BF1;
  color: white;
}
.subnavigation-container{
  background: #3d6277;
}
.subnavigation .nav-link{
  color: white;
  font-weight: bold;
}
.subnavigation-container{
  text-align: center;
}
.subnavigation-container .navbar{
  display: inline-block;
  margin-bottom: -6px; 
}
.col-subnav a{
  padding: 1rem 1rem;
  color: white;
  font-weight: bold;
}
.col-subnav .active{
  border-top:5px solid orange;
 background: white;
  color: black;
}
.dropdown-container select { 
        -moz-appearance: none; 
        -webkit-appearance: none; 
      }
      .dropdown-container select::-ms-expand { 
        display: none; 
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
input[type=number] {
  -moz-appearance: textfield;
}
</style>
	<title></title>
</head>
<body>
<div>
	<form method="POST" action="#">
	<div class="container1 col-sm-6 col-md-4 col-lg-3">
	<div class="row">
<div class="col-sm-12">
	<div class="form-header">
							<h3 class="font-effect-outline">Book a cab</h3>
							<h5>Your everyday travel partner</h5>
						</div>	
  <div class="form-group dropdown-container">
    <label>PICK UP</label>
    <select class="form-control" name="Pickup" id="pickup">
    	<option>Select pickup point</option>
													<option>Charbagh</option>
													<option>Indira Nagar</option>
													<option>BBD</option>
													<option>Barabanki</option>
													<option>Faizabad</option>
													<option>Basti </option>
													<option>Gorakhpur</option>	
												</select>
  </div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
  <div class="form-group dropdown-container">
    <label>DROP</label>
    <select class="form-control" name="droppoint" id="drop">
    	<option>Select drop point</option>
													<option>Charbagh</option>
													<option>Indira Nagar</option>
													<option>BBD</option>
													<option>Barabanki</option>
													<option>Faizabad</option>
													<option>Basti </option>
													<option>Gorakhpur</option>
  												</select>
  												
  </div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group dropdown-container">
    <label>CAB TYPE</label>
    <select class="form-control" name="Cabtype" id="cabtype" style="width:100%; ">
													<option>Select Cab Type</option>
													<option>CEDMicro</option>
													<option>CEDMini</option>
													<option>CEdRoyal</option>
													<option>CEDSUV</option>
												  </select>
  </div>
</div>
</div><div class="row">
<div class="col-sm-12">
  <div class="form-group">
  	<label>LUGGAGE</label>
<input class="form-control" type="text" min= 0 placeholder="Enter weight in KG." name="Luggage" id="luggage"onpaste="return false">
</div>
</div>
</div>
  <input type="submit" data-toggle="modal" data-target="#myModal" name="submit" class="btn btn-primary button2" value="Calculate Fare">
<div id="myModal" class="modal fade" role="dialog" style="">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style=" color:green;">Fare Status</h4>
      </div>
      <div class="modal-body" id="result"style="background-color:#ADD8E6; color:#FF0000; font-size: 20px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-success="modal">BOOK CAB</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">CLOSE</button>
      </div>
    </div>
  </div>
</div>
</div>
</form>
</div>
</body>
</html>