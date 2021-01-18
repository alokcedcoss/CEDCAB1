<?php
session_start();
$_SESSION['email'];
$_SESSION['id'];
echo "id";
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body
        {
            background-color:grey;
            text-align: center;
        }
        .b
        {
            border:4px inset black;
            width: 60%;
            margin-left:18%;
            padding: 3%;
            background-color:#408BF1;
            color: black;
            bo
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
 <?php include 'header.php';?>
<h2>Signup Form</h2>
<div class="b">
<form>
    <div class="form-group">
        <label>Email:<br></label>
    <input  class="form-control col-md-4 col-sm-6" type="email" name="email" id="email" value="" placeholder="enter your Email"><br>
    
    
   <label>Password:<br></label>
    <input   class="form-control col-md-4 col-sm-6" type="password" name="password"id="password" placeholder="enter Your Password">
    <br>
<div style="margin-top:10%;">
    <input  type="button" name="submit" value="Login"class="btn btn-danger" onclick="log1();">
   
</div>
</div>

</form>
New User!!!!!!<a href="signup.php" style="color:white">Register Here</a>
</div>
<div style="margin-top: 3%;">
 <?php include 'footer.php';?>
</div>
 <script>
    function log1()
    { 
    var email =  document.getElementById("email").value;
    var password =  document.getElementById("password").value;
    console.log(email);
    console.log(password);

    $.ajax({

        type:"POST",
        url:"logindb.php",
        data:{
            email:email,password:password},
        success:function(result)
        {
        console.log(result);
          if(result== 
            0)
             {  
               alert("hello welcome User");
              
            window.location.href="user/index.php";
            }
            else if(result==
             1)
             {
            
                // $_SESSION['email'] = '$email';

                alert("welcome Admin");
                window.location="admin/index.php";
          }
          else if(result== 
            2) 
          {

         alert("Register new User");
        window.location.href="signup.php";
            
      }
        }
    });
}
</script>

</body>
</html>