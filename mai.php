<?php
session_start();
 $otp1 = $_POST['otp']; 
   
echo "<br>";

if($otp1 == $_SESSION["OTP1"])
{
    echo " Thank  you!!! Your Mobile is Verified";

}
else{
    echo "Enter Valid OTP";
}      
?>