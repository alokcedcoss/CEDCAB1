<!doctype html>
<html lang="en">
    <head>
        <style>
            .mb
            {
                background-color:grey;
                padding:4%;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>
            mail
        </title>
    </head>
    <body>
    <form>
        <div class="mb"><h1 style="text-align: center;"> School Registration Form</h1></div>
        <div  id="form1" >
            <div class="form-group col-md-6">
                    <label for="inputEmail4">MObile no:<span style="color:red;">*</span></label>
                    <input type="number" name="Mobile" class="form-control" id="mobile">
            </div>

            <div class="form-group col-md-6">
                    <button type="button" class="btn btn-primary" id="se" name="submit" onclick="sendMail()">Send OTP</button>
            </div>
        </div>
        <div  id="form" style="display:none;" >
            <div id="form" class="form-group col-md-12" >
                <label for="inputEmail4">Enter OTP</label>
                <input type="number" class="form-control" id="otp"  name="otp">
            </div> 
            <div class="form-group col-md-12">
                <button type="button" class="btn btn-primary" name="submit" onclick="sendotp()">Submit</button>
            </div>
        </div>
       </form>
        <p id="s"></p>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
  function sendMail(){
    var otp =  document.getElementById("mobile").value; 
    document.getElementById("form").style.display = "block";
    document.getElementById("form1").style.display = "none";
    document.getElementById("se").style.display = "none";

      $.ajax({
        type:"POST",
        url:"form.php",
        data:{
            otp:otp,}
        ,
        success:function(res1){
        document.getElementById("s").innerHTML = res1;
            
        }
    });
}

function sendotp(){
    var otp =  document.getElementById("otp").value; 
   document.getElementById("form").style.display = "none";
    document.getElementById("form1").style.display = "block"; 
      $.ajax({
        type:"POST",
        url:"mai.php",
        data:{
            otp:otp,}
        ,
        success:function(res1){
        document.getElementById("s").innerHTML = res1;
            
        }
    });
}
    </script>
    </body>
</html>