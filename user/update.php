<?php 
session_start();
if((isset($_POST['name']))&&(isset($_POST['Password']))){
$name=$_POST['name'];
$pass=$_POST['Password'];
$email=$_POST['email'];

if ($pass==$_SESSION['password']){
    require_once 'connection.php';
    $sql="UPDATE tbl_user SET name='".$name."' WHERE email_id='".$email."'";
    $result= mysqli_query($conn,$sql);
     if($result){
        echo 1; 
    }else{
       echo 0;
    }
    }else {
        echo 2;
    }
}
  
?>