<?php
session_start();
$otp1 = $_POST['otp']; 
   
echo "<br>";

if($otp1 == $_SESSION["OTP"])
{
    echo " Thank  you!!! Your Email is Verified";

?>
<a href="form.php">open form</a> 

<?php
}else{
    echo "Enter Valid OTP";
}

       
?>
