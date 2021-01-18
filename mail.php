<?php
session_start();
 $email = $_POST['email'];
 $_SESSION['email']=$email;
require "PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->isSMTP();                                     
$mail->Host = "smtp.gmail.com";                    
$mail->SMTPAuth = true;                               
$mail->Username = "alokcedcoss2020@gmail.com";                
$mail->Password = "9918741100@alok";                           
$mail->SMTPSecure = "tls";                           
$mail->Port = 587;                                   

$mail->setFrom("alokcedcoss2020@gmail.com");
$mail->addAddress( $email);    
$mail->addReplyTo("alokcedcoss2020@gmail.com");
 $mail->isHTML(true);                                  

$mail->Subject = "OTP verificaton Code";
$randn = rand(100000,999999);
$mail->Body    = $randn;
$_SESSION["OTP"] = $randn;

if(!$mail->send()) {
    echo "Message could not be sent.";
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
     echo "Message has been sent";
}
        
?>
