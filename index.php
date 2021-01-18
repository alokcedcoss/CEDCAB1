<?php
session_start();
// $_SESSION['id'];
include "connection.php";
include "header.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
    /*  margin-top:2%; */
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
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
</head>
<body>
  <div class="g">

<!--    <nav class="navbar navbar-inverse navbar-static-top example6">
    <div class="container">

      <div class="navbar-header">
<div><h2 style="float: left;margin-left: 1%;">CED<span style="color:#ffc001;">CAB</span></h2></div>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar6">

          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
     
      </div>
      <div id="navbar6" class="navbar-collapse collapse" >
        <ul class="nav navbar-nav navbar-right" style="font-size: 20px;">

          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact Us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Employee</a></li>
              <li><a href="#">Driver</a></li>
              <li><a href="#">Customer</a></li>
            </ul>
          </li>
        </ul>
      </div>
      
    </div>
  
  </nav> -->
  <div class="header">
              <h1>𝐁𝐨𝐨𝐤 𝐚 𝐂𝐢𝐭𝐲 𝐓𝐚𝐱𝐢 𝐭𝐨 𝐲𝐨𝐮𝐫 𝐝𝐞𝐬𝐭𝐢𝐧𝐚𝐭𝐢𝐨𝐧 𝐢𝐧 𝐭𝐨𝐰𝐧</h1>
              <h2>
Choose from a range of categories and prices</h2>
            </div>        
  <form id="login">

  <div class="container1 col-sm-6 col-md-4 col-lg-3">
  <div class="row">
<div class="col-sm-12">
  <div class="form-header">
              <h2 class="font-effect-outline">Book a cab</h2>
        
              <h5>Your everyday travel partner</h5>

            </div>  	
  <div class="form-group dropdown-container">
    <label>PICK UP</label>
 <?php 
    $sql= "select*from tbl_location";
    $result = mysqli_query($conn,$sql);
  
    $row=mysqli_num_rows($result);
     ?>
    <select class="form-control" name="pickup" id="pickup" onchange="disabledropdown()">
    	<option>Select pick point</option>
   <?php 
if($result->num_rows > 0) 
  {

  while($row = $result->fetch_assoc()) 

  { 
     if($row["is_available"]==1)
     {
   ?>
		<option><?php echo $row["name"]?></option>

<?php
}
}
}
?>
</select>
  </div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
  <div class="form-group dropdown-container">
    <label>DROP</label>
    <?php 
    $sql= "select*from tbl_location";
    $result = mysqli_query($conn,$sql);
  
    $row=mysqli_num_rows($result);
     ?>
    <select class="form-control" name="drop" id="drop" onchange="disabledropdown1()">
    	<option>Select pick point</option>
   <?php 
if($result->num_rows > 0) 
  {

  while($row = $result->fetch_assoc()) 

  { 
     if($row["is_available"]==1)
     {
   ?>
		<option><?php echo $row["name"]?></option>

<?php
}
}
}
?>
</select>
  												
  </div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="form-group dropdown-container">
    <label>CAB TYPE</label>
    <select class="form-control" name="cabtype" id="cabtype" style="width:100%; ">
					<option>Select Cab Type</option>
				<option value="CEDMicro">CEDMicro</option>
				<option value="CEDMini">CEDMini</option>
				<option value="CEdRoyal">CEdRoyal</option>
				<option value="CEDSUV">CEDSUV</option>
				</select>
  </div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
  <div class="form-group">
  	<label>LUGGAGE</label>
<input class="form-control" type="text" min= 0 placeholder="Enter weight in KG." id="luggage"onpaste="return false" onfocusout="check()" onkeypress="return isNumberKey(this, event);" style="width:100%;">
</div>
</div>
</div>
 <input type="submit" data-toggle="modal" data-target="#myModal" name="submit" class="btn btn-primary button2" value="Calculate Fare" id='login'>
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
        <button type="button" class="btn btn-danger" data-success="modal" onclick="document.location='booking.php'">BOOK CAB</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">CLOSE</button>
      </div>
    </div>

  </div>
</div>

 
</div>
</form>



<div style="margin-top: 5%;">
<footer class="mainfooter" role="contentinfo">
  <div class="footer-top p-y-2">
    <div class="container-fluid">

    </div>
  </div>
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
   
        <div class="footer-pad">
          <h4>Address</h4>
          <address>

                <ul class="list-unstyled">
                  <li>
                    Nehru Enclave<br>
                   Gomti Nagar<br>
                    LUCKNOW<br>
                    212216<br>
                  </li>
                  <li>
                    Phone: 0522-262025
                  </li>
                </ul>
              </address>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">

        <div class="footer-pad">
          <h4>Popular Services</h4>

  
          <ul class="list-unstyled">
            <li><a href="#"></a></li>
            <li><a href="#">Payment Center</a></li>
            <li><a href="#"> Book Ride</a></li>
            <li><a href="#">Forms</a></li>
            <li><a href="#">News and Updates</a></li>
            <li><a href="#">FAQs</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">

        <div class="footer-pad">
          <h4>Website Information</h4>
          <ul class="list-unstyled">
            <li><a href="#">Accessibility</a></li>
            <li><a href="#">Disclaimer</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Webmaster</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
      
        <div class="footer-pad">
          <h4>Popular Departments</h4>

          <ul class="list-unstyled">
            <li><a href="#"></a></li>
            <li><a href="#">Company Scheme</a></li>
            <li><a href="#">Fare</a></li>
            <li><a href="#">About</a></li>
            <li>
              <a href="#"></a>
            </li>
          </ul>
        </div>
      </div>
      
    </div>



<p class="text-xs-center" style="text-align: center; color: black; font-size:15px;">&copy; Copyright 2016 - CEDCOSS Technologies Pvt. Ltd.  All rights reserved.</p>
  </div>
  </div>
</footer>
</div>
</div>
<script>
function check()
{var luggage=$('#luggage').val();
if(luggage<0)
{
alert("Enter the Luggage weight is greator than 0 kg");
$("#luggage").val('');
}
}
function disabledropdown(){
    $("#drop option").each(function(){
        if($("#pickup option:selected").val() == $(this).val())
             $(this).attr("disabled", "disabled");
        else
            $(this).removeAttr("disabled");
    });
  }
  function disabledropdown1(){
    $("#pickup option").each(function(){
        if($("#drop option:selected").val() == $(this).val())
             $(this).attr("disabled", "disabled");
        else
            $(this).removeAttr("disabled");
    });
  }

   function isNumberKey(txt, evt) {
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode == 46) {
       
        if (txt.value.indexOf('.') === -1) {
          return true;
        } else {
          return false;
        }
      } else {
        if (charCode > 31 &&
          (charCode < 48 || charCode > 57))
          return false;
      }
      return true;
    }
//############################### Dropdown Disable Function End ################################# 


$(document).ready(function(){
  $('#login').submit(function(e){
    var a = $('#pickup').val();
    var b = $('#drop').val();
    var cab=$('#cabtype').val();
    var luggage=$('#luggage').val();
var weight;

if(luggage<=0)
{
  weight=0;

}
else if(luggage<=10)
{
weight=50;
}
else if(luggage>10 && luggage<=20)
{
  weight=100;
}
else
{
  weight=200;
}

 
if(a==b)
{

alert('pick and drop point are not same or select cab type');

}


else if(a=='Select pickup point')
{
  alert('please select Pick up Point');
  
}
else if(b=='Select drop point')
{
  alert('please select drop Point');
  
}
else if(cab=='Select Cab Type')
{
  alert('select cab type');
   
}
 else if(luggage<0)
{
alert("Enter the Luggage weight is greator than 0 kg");
$("#luggage").val('');
}


else{
    e.preventDefault();
    $.ajax({
      type:"POST",
      url:"calculation.php",
      data:{'pic':a, 'dro':b,'cabtype1':cab,'luggage1':weight},
      success:function(data){
       
    //alert(data);
        
        document.getElementById('result').innerHTML=data;
       console.log(data);
      }
    });
  
  }
  });
});

$('#cabtype').on('change',function(){

var t = $('#cabtype').val();
if(t =='CEDMicro')
{
$("#luggage").attr('readonly',true);
$("#luggage").val('');
$("#luggage").attr('placeholder','Not allow');
    
}
else{
    $("#luggage").attr('readonly',false);
    $("#luggage").attr('placeholder','Enter weight in KG.');
   
    if(luggage<=0)
{
 alert('Enter the Luggage weight is greator than 0 kg');
 
}
}
})
  </script>
</body>
</html>

