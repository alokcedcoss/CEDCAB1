<div >
<?php session_start();
if(!isset($_SESSION['name'])){
  header("Location:login.php");
}?>
<?php include "header.php"?></div>

<div class="container">
<div class="alert" id="n"></div>
  <form  method="POST">
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" readonly value="<?php echo $_SESSION['email']?>">
    </div> -->
    <div class="form-group">
  <label for="usr">Name:</label>
  <input type="text"  class="form-control" id="user" name="name" value="<?php echo $_SESSION['name']?>">
</div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number</label>
    <input type="number" class="form-control" id="mob" aria-describedby="emailHelp" value="<?php echo $_SESSION['mobile']?>">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
   
    
    <input type="button" class="btn btn-primary"value="Update" onclick="updated();">
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function updated()
{
var name = document.getElementById('user').value;
var email = document.getElementById('email').value;
var mobile = document.getElementById('mob').value;
var Password = document.getElementById('password').value;
$.ajax({
        url:"update.php",
        type:"POST",

        
        data:{name:name,email:email,mobile:mobile,Password:Password},
       
        success:function(res){

          debugger;
          if(res==1){
            console.log("Data updated successfully");
            $('#n').text(" Data updated successfully!");
          }
          else if(res==2){
            console.log("Password is incorrect");
            $('#n').text("Password is incorrect!");
          }else{
            console.log("not updated");
            $('#n').text("not updated!");
          }
        }
    })
}
</script>
</body>
</html>
