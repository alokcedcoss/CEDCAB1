
<!DOCTYPE html>
<html>
<head>
    <style>
        body
        {
            background-color:grey;
          
        }
        .b
        {
            border:4px inset black;
            width: 60%;
            margin-left:18%;
            padding: 3%;
            background-color:#408BF1;
            color: black;
        }

  .mb
            {
                background-color:#408BF1;
                padding:4%;
                height: 30vh;

            }

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
 <?php include 'header.php';?>

<div class="b">
<form>
    <h2>Signup Form</h2>
    <div class="form-group">
        <label>Email:<br></label>
    <input type="email" class="form-control" id="email"  name="email" placeholder="Enter your email" required>
    <br>
    <button type="button" class="btn btn-primary" id="se" name="submit" onclick="sendMail()">Send OTP</button>
    <br>
    <div style="display:none" id= sd>
        <input type="number" class="form-control" id="otp"  name="otp" required>
<br>
<button type="button" class="btn btn-primary" name="submit" onclick="sendotp()">Submit</button>
    </div>




    <label>Name:<br></label><br>
    <input  class="form-control " type="text" name="name" id="name" placeholder="enter Your Name">
    <br>


   <label>Mobile No.<br></label><br>
    <input type="number" name="Mobile" class="form-control" id="mobile"placeholder="enter your Mobile No." required>
    <br>
    <button type="button" class="btn btn-primary" id="se1" name="submit" onclick="sendMobile()">Send mobile OTP</button>
    <br>
<div  id="msg1" style="display: none;">
    <input type="number" class="form-control" id="otp2"  name="otp2" required>
<button type="button" class="btn btn-primary" name="submit" onclick="sendotpm()">Verify OTP</button>
</div>


   <label>Password:<br></label>
    <input   class="form-control" type="password" name="password" id="password" placeholder="enter Your Password" required >
    <br>

    <input class="btn btn-success" type="submit" name="submit" id="signup" value="Sign Up" onclick="datasend()">
   

</div>

</form>
Already Registerd!!!!!<a href="login.php" style="color:white">Login Here</a>
</div>
<div style="margin-top: 3%;">
 <?php include 'footer.php';?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
           $("#password").prop('disabled', true);
        $("#name").prop('disabled', true);
         $("#mobile").prop('disabled', true);
$("#se1").prop('disabled', true);
     $("#signup").prop('disabled', true);
    function sendMail(){
    var email =  document.getElementById("email").value;
    document.getElementById("sd").style.display = "block";
    document.getElementById("msg1").style.display = "none";



    $.ajax({
        type:"POST",
        url:"mail.php",
        data:{email:email},
        success:function(res1){
        //document.getElementById("msg").innerHTML = res1;
        $("#email").prop('disabled', true);
         $("#name").prop('disabled', true);
          
        }
    });
}

function sendotp(){
    var otp =  document.getElementById("otp").value; 
      $.ajax({
        type:"POST",
        url:"mail1.php",
        data:{
            otp:otp}
        ,
        success:function(res1){
            alert("email Verify");
$("#otp").prop('disabled', true);
$("#name").prop('disabled', false);
$("#mobile").prop('disabled', false);
$("#se1").prop('disabled', false);
        
        
        }
    });
}
function sendMobile(){
    var otpm =  document.getElementById("mobile").value; 
    document.getElementById("msg1").style.display = "block";
    // document.getElementById("form1").style.display = "none";
    // document.getElementById("se").style.display = "none";

      $.ajax({
        type:"POST",
        url:"form.php",
        data:{
            otp:otpm,}
        ,
        success:function(res1){
            $("#mobile").prop('disabled', true);
            $("#password").prop('disabled', true);

            alert("One time Password send");
        // document.getElementById("s").innerHTML = res1;
            
        }
    });
}

function sendotpm(){
    var otpmv =  document.getElementById("otp2").value; 
   // document.getElementById("form").style.display = "none";
   //  document.getElementById("form1").style.display = "block"; 
      $.ajax({
        type:"POST",
        url:"mai.php",
        data:{
            otp:otpmv,}
        ,
        success:function(res1){
             $("#otp2").prop('disabled', true);
            $("#password").prop('disabled', false);
            $("#signup").prop('disabled', false);
            alert("your mobile no. is verified.")
            
        }
    });
}
function datasend()
{
    var email =  document.getElementById("email").value;
     var name = document.getElementById("name").value;
      var mobile =  document.getElementById("mobile").value;
          var password =  document.getElementById("password").value;
          console.log(email);
          console.log(name);
          console.log(mobile);
          console.log(password);

    $.ajax({
        type:"POST",
        url:"signupdb.php",
        data:{
            email:email,name:name,mobile:mobile,password:password},
        success:function(res1){
            console.log(res1);
            alert("sucessfully Sign Up");
            
        }
    });
}
 </script>
</body>
</html>